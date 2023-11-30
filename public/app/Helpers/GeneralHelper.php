<?php

namespace App\Helpers;

use Algolia\ScoutExtended\Settings\Status;
use App\Models\Buku;
use App\Models\Cart;
use App\Models\Kategori;
use App\Models\Review;
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

    public static function authCheck()
    {
        if (isset(Auth::user()->id)) {
            return '1';
        } else {
            return '0';
        }
    }

    public static function userInfo()
    {
        if (isset(Auth::user()->id)) {
            return User::find(Auth::user()->id);
        } else {
            return [];
        }
    }

    public static function getPostPopuler()
    {
        $data = GraphQL::query('
            popularPosts(first: 5) {
              nodes {
                id
                title
                date
                link
                author {
                    node {
                        name
                    }
                }
                categories {
                    nodes {
                        name
                        link
                    }
                }
                content
              }
            }
        ')->get();

        return $data['popularPosts']['nodes'];
    }

    public static function getBookBySelectedCategory()
    {
        $category_session = json_decode(session('category_session'));
        if (empty($category_session)) {
            $buku = Buku::inRandomOrder()
                ->limit(14)
                ->get();
        } else {
            $buku = Buku::whereHas('kategori', function ($q) use ($category_session) {
                $q->whereIn('kategori_id', $category_session);
            })
                ->inRandomOrder()
                ->limit(14)
                ->get();
        }
        // return json_encode($buku);
        // return response()->json($buku);
        // return $buku;
        return json_encode($buku->toArray());
    }

    public static function rating($buku_id)
    {
        if(self::authCheck()){
            $star = Review::where('buku_id', $buku_id)->where('user_id', Auth::user()->id)->first();
            if($star){
                return $star->rating;
            }else{
                return self::reviewSubmite();
            }
        }else{
            return self::reviewSubmite();
        }
    }

    public static function reviewSubmite()
    {
        $min_stars = 1;
        $max_stars = 5;
        for ($i = $min_stars; $i <= $max_stars; $i++) {
                echo '<button id="star-btn" class="group text-stone-400" onclick="addReview('. $i.')">
                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-7 w-7 transition-all duration-100 ease-in">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                    </path>
                </svg>
            </button>';

        }
    }

    public static function randomName()
    {
        $arr = [
            "Adisti",
            "Feby",
            "Anjani",
            "Aegis",
            "Kael",
            "Luna",
            "Lina",
            "Alleria",
            "Davion",
            "Lanaya",
        ];

        return $arr[array_rand($arr)];
    }

    public static function popularItem()
    {

        $buku = Buku::whereHas('kategori', function ($q) {
            $q->whereIn('slug', ['fiksi', 'sastra', 'nonfiksi-dewasa']);
            })->with([
                'kategori' => function ($q) {
                    $q->where('slug', 'fiksi')->orwhere('slug','sastra')->orwhere('slug','nonfiksi-dewasa'); // Select only the columns you need
                },
            ])
            ->inRandomOrder()
            ->take(6)
            ->get();
        return $buku;
    }
}
