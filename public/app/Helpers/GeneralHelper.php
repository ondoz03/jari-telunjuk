<?php

namespace App\Helpers;

use Algolia\ScoutExtended\Settings\Status;
use App\Models\Buku;
use App\Models\Cart;
use App\Models\Kategori;
use App\Models\Review;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserKategori;
use App\Models\UserWantRead;
use Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use BendeckDavid\GraphqlClient\Facades\GraphQL;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;

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
            'Key' => $file_path
        ]);

        $request = $client->createPresignedRequest($command, $expiry);

        return (string)$request->getUri();
    }

    public static function getKategory()
    {
        $ketegori = Kategori::whereIn('name', [
            'Nonfiksi Dewasa',
            'Fiksi',
            'Sastra',
            'Fiksi Anak & Remaja',
            'Pendidikan',
            'Kehidupan Kota',
            'Bisnis & Ekonomi',
            'Komik & Novel Grafis',
            'Novel',
            'Agama',
            'Ilmu Sosial',
            'Psikologi',
            'Hukum',
            'Komputer',
            'Keluarga & Hubungan',
            'Sejarah',
            'Romantis',
            'Thriller',
            'Fiksi Ilmiah',
            'Parenting'
        ])->orderBy('name')->get();

        return $ketegori;
    }


    public static function getRandomGetBook($nameKategori)
    {
        $buku = Buku::whereHas('media')->whereHas('kategori', function ($q) use ($nameKategori) {
            $q->where('slug', $nameKategori);
        })->with('kategori')->inRandomOrder()
            ->limit(6)
            ->get();
        return $buku;
    }

    public static function getRandomFirstBook($key)
    {

        // Set the cache key based on the query
        $cacheKey = 'buku_query_' . $key . implode('_', ['fiction-literature-ebook', 'nonfiksi', 'history-ebook', 'psychology-ebook', 'romantis']);

        // Use the cache if available, or execute the query and store the result in the cache for 3 days
        $buku = Cache::remember($cacheKey, now()->addDays(3), function () {
            return Buku::whereHas('kategori', function ($q) {
                $q->whereIn('slug', ['fiction-literature-ebook', 'nonfiksi', 'history-ebook', 'psychology-ebook', 'romantis']);
            })->inRandomOrder()->limit(1)->get();
        });

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
        if (self::authCheck()) {
            $star = Review::where('buku_id', $buku_id)->where('user_id', Auth::user()->id)->first();
            if ($star) {
                return $star->rating;
            } else {
                return self::reviewSubmite();
            }
        } else {
            return self::reviewSubmite();
        }
    }

    public static function reviewSubmite()
    {
        $min_stars = 1;
        $max_stars = 5;
        for ($i = $min_stars; $i <= $max_stars; $i++) {
            echo '<button id="star-btn" class="group text-stone-400" onclick="addReview(' . $i . ')">
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
        // Set the cache key based on the query
        $cacheKey = 'buku_query_' . implode('_', ['fiksi', 'sastra', 'nonfiksi-dewasa']);

        // Use the cache if available, or execute the query and store the result in the cache for 2 weeks
        $buku = Cache::remember($cacheKey, now()->addWeeks(1), function () {
            return Buku::whereHas('kategori', function ($q) {
                $q->whereIn('slug', ['fiksi', 'sastra', 'nonfiksi-dewasa']);
            })->with([
                'kategori' => function ($k) {
                    $k->whereIn('slug', ['fiksi', 'sastra', 'nonfiksi-dewasa']);
                },
            ])->inRandomOrder()->take(6)->get();
        });

        return $buku;
    }

    public static function recomendationItem()
    {
        $user_category = UserKategori::where('user_id', Auth::user()->id)->pluck('kategori_id')->toArray();

        // Set the cache key based on the query and user-specific information
        $cacheKey = 'buku_query_' . implode('_', $user_category);
        if (count($user_category) > 0) {
            $buku = Cache::remember($cacheKey, now()->addMinutes(60), function () use ($user_category) {
                return Buku::whereHas('kategori', function ($q) use ($user_category) {
                    $q->whereIn('kategori_id', $user_category);
                })->where('judul', 'not like', '%' . 'cpns' . '%')
                    ->where('judul', 'not like', '%' . 'sd' . '%')
                    ->where('judul', 'not like', '%' . 'ipa' . '%')
                    ->where('judul', 'not like', '%' . 'Ensiklopedia' . '%')
                    ->where('judul', 'not like', '%' . 'Kamus' . '%')
                    ->where('judul', 'not like', '%' . 'Jago Kuasai' . '%')
                    ->where('judul', 'not like', '%' . 'Seri Cerita' . '%')
                    ->where('judul', 'not like', '%' . 'Ujian Sekolah' . '%')
                    ->where('judul', 'not like', '%' . 'SBMPTN' . '%')
                    ->where('judul', 'not like', '%' . 'Seri Rumah' . '%')
                    ->where('judul', 'not like', '%' . 'Pendidikan' . '%')
                    ->where('judul', 'not like', '%' . 'PR Interaktif' . '%')
                    ->where('judul', 'not like', '%' . 'SMA/MA' . '%')
                    ->where('judul', 'not like', '%' . 'Decoration' . '%')
                    ->where('judul', 'not like', '%' . 'Politik' . '%')
                    ->where('judul', 'not like', '%' . 'Desain' . '%')
                    ->where('judul', 'not like', '%' . 'Belajar Komputer' . '%')
                    ->where('judul', 'not like', '%' . 'Buku Siswa' . '%')
                    ->where('judul', 'not like', '%' . 'Peraturan' . '%')
                    ->where('judul', 'not like', '%' . 'Pemerintahan' . '%')
                    ->where('judul', 'not like', '%' . 'Administrasi' . '%')
                    ->where('judul', 'not like', '%' . 'Penjas' . '%')
                    ->inRandomOrder()
                    ->get()
                    ->take(8);
            });


            return $buku;
        } else {
            return [];
        }
    }

    public static function refreshList()
    {
        $user_category = UserKategori::where('user_id', Auth::user()->id)->pluck('kategori_id')->toArray();
        $cacheKey = 'buku_query_' . implode('_', $user_category);
        Cache::forget($cacheKey);
        return true;
    }

    public static function urlBot()
    {
        if (!App::environment('production')) {
            return '
            <meta name="robots" content="noindex,nofollow">
            <meta name="googlebot" content="noindex">
            ';
        }
    }

    public static function canonical()
    {
        if (App::environment('production')) {
            return '
            <link rel="canonical" href="' . url()->full() . '" />
            ';
        }
    }

    public static function statusChalenge($value)
    {
        switch ($value) {
            case 'reading':
                return '<span class="bg-orange-100 text-orange-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-orange-900 dark:text-orange-300">Reading</span>';
                break;
            case 'reviewing':
                return  '<span class="bg-orange-100 text-orange-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-orange-900 dark:text-orange-300">Reviewing</span>';
                break;
            case 'read':
                return  '<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Read</span>';
                break;
            case 'reviewed':
                return  '<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Reviewed</span>';
                break;
            default:
                return  '<span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-900 dark:text-gray-300">To Read</span>';
                break;
        }
    }

    public static function check_status_wantRead($buku_id)
    {
        if (!empty(Auth::user())) {
            $data = UserWantRead::where('user_id', Auth::user()->id)->where('buku_id', $buku_id)->first();
            if ($data) {
                $user_want_read = $data;
            } else {
                $array = [
                    'status' => '0'
                ];

                $user_want_read = (object)$array;
            }
        } else {
            $array = [
                'status' => '0'
            ];

            $user_want_read = (object)$array;
        }

        return $user_want_read;
    }
}
