<?php

namespace App\Helpers;

use Algolia\ScoutExtended\Settings\Status;
use App\Models\Buku;
use App\Models\Cart;
use App\Models\Kategori;
use App\Models\Setting;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use BendeckDavid\GraphqlClient\Facades\GraphQL;


class GeneralHelper
{


    public static function menuActive($url)
    {
        $active = request()->is('admin') ? 'active' : '';
        return $active;
    }

    // forLast
    public static function commasLoop($loop)
    {
        if ($loop->last) {
            return '.';
        } elseif ($loop->remaining == 1) {
            return '&';
        } elseif (!$loop->first) {
            return ',';
        }
    }


    public static function settingPerpustakan($key)
    {
        $setting = Setting::where('key', $key)->first();
        if ($setting) {
            if ($setting->type !== 'file') {
                return $setting->value;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    public static function newBook($limit = 4)
    {
        $book = Buku::inRandomOrder()->with('media')->take($limit)->get();
        return $book;
    }


    public static function getFileUrl($file_path)
    {

        $s3 = Storage::disk('digitalocean');
        $client = $s3->getDriver()->getAdapter()->getClient();
        $expiry = "+10 minutes";

        $command = $client->getCommand('GetObject', [
            'Bucket' => Config::get('filesystems.disks.digitalocean.bucket'),
            'Key'    => $file_path
        ]);

        $request = $client->createPresignedRequest($command, $expiry);

        return (string) $request->getUri();
    }

    public static function getKategory()
    {
        $ketegori = Kategori::whereIn('name', [
            'Administrasi',
            'Akuntansi',
            'Anak-Anak',
            'Konstitusi',
            'Antologi',
            'Bisnis & Ekonomi',
            'Anak Muda',
            'Ekonomi',
            'Fantasi',
            'Fiksi',
            'Filsafat',
            'Hubungan Masyarakat',
            'Hukum',
            'Humor',
            'Antropologi',
            'Motivasi',
            'Nonfiksi',
            'Parenting',
            'Psikologi',
            'Sejarah',
        ])->get();

        return $ketegori;
    }


    public static function getRandomGetBook($nameKategori)
    {
        $buku = Buku::whereHas('media')->whereHas('kategori', function ($q) use ($nameKategori) {
            $q->where('name', $nameKategori);
        })->with('kategori')->inRandomOrder()
            ->limit(6)
            ->get();
        return $buku;
    }

    public static function getRandomFirstBook()
    {

        $buku = Buku::whereHas('kategori', function ($q) {
            $q->whereIn('slug', ['fiction-literature-ebook', 'nonfiksi', 'history-ebook', 'psychology-ebook', 'romantis']);
        })->inRandomOrder()
            ->limit(1)
            ->get();
        return $buku[0]->image;
    }

    public static function replace_utf8($final)
    {
        $final = str_replace("Â", "", $final);
        $final = str_replace("â€™", "'", $final);
        $final = str_replace("â€œ", '"', $final);
        $final = str_replace('â€“', '-', $final);
        $final = str_replace('â€', '"', $final);

        return $final;
    }

    public static function getRandomGetCategory()
    {
        $kategory = Kategori::has('buku')->inRandomOrder()
            ->limit(8)
            ->get();

        return $kategory;
    }

    public static function getPost()
    {
        $data = GraphQL::query('
            posts(first:3) {
                nodes {
                  date
                  id
                  slug
                  title
                  excerpt
                  featuredImage {
                    node {
                      mediaDetails {
                        file
                        height
                        sizes {
                          sourceUrl
                          height
                          width
                        }
                      }
                    }
                  }
                  categories {
                    nodes {
                      id
                      name
                      slug
                      uri
                      link
                    }
                    pageInfo {
                      hasNextPage
                      hasPreviousPage
                      endCursor
                      startCursor
                    }
                  }
                }
             }
        ')->get();

        return $data['posts']['nodes'];
    }
}
