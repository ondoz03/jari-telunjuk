<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\UserWantRead;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Cache;
use mysql_xdevapi\Result;

class BukuController extends Controller
{
    public function index($slug, Request $request)
    {
        $kategori = Kategori::where('name', $slug)->orwhere('slug', $slug)->first();

        if ($kategori) {

            $dataArray = json_decode($kategori->faq, true);
            $dataCollection = collect($dataArray);

            $map = $dataCollection->map(function ($q) {
                return [
                    "@type" => "Question",
                    "name" => $q['title'],
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => $q['description']
                    ]
                ];
            });

            $result = [
                "@context" => "https://schema.org",
                "@type" => "FAQPage",
                "mainEntity" => $map->toArray()
            ];

            $decodedJson = json_encode($result, JSON_PRETTY_PRINT);
            $resultJson = html_entity_decode($decodedJson);
            $resultJson = str_replace('"@context": "https:\/\/schema.org"', '"@context": "https://schema.org"', $resultJson);

            if (empty($request->search)) {

                $buku = Buku::with('media')->whereHas('kategori', function ($q) use ($slug) {
                    $q->where('slug', $slug);
                })->with('kategori')->paginate(12);


                if ($request->ajax()) {
                    $view = view('data-buku', compact('buku', 'kategori'))->render();
                    return response()->json(['html' => $view]);
                }
                //Faq Json
                return view('buku', compact('buku', 'slug', 'kategori', 'resultJson'));
            } else {
                $buku = Buku::whereHas('kategori', function ($q) use ($slug) {
                    $q->where('name', $slug);
                })->where('judul', 'like', "%" . $request->search . "%")->paginate(12)->withQueryString();

                return view('buku', compact('buku', 'slug', 'kategori', 'resultJson'));
            }
        } else {
            if ($request->has('search')) {
                return self::search($request);
            } else {
                return abort(404);
            }
        }
    }

    public function buku($slug, Request $request)
    {
        $buku = Buku::with('media')->whereHas('kategori', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->paginate(12);

        if ($request->ajax()) {
            $view = view('data', compact('posts'))->render();

            return response()->json(['html' => $view]);
        }

        return $buku;
    }

    public function detail($category, $slug, Request $request)
    {
        $buku = Buku::where('slug', $slug)->with(['detail_buku', 'kategori'])->firstorfail();

        $kategori = Kategori::where('slug', $category)->first();


        if (!empty(Auth::user())) {
            $data = UserWantRead::where('user_id', Auth::user()->id)->where('buku_id', $buku->id)->first();
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
        // return $buku;

        return view('detail-buku', compact('buku', 'kategori', 'user_want_read'));
    }

    public function search(Request $request)
    {
        $buku = Buku::where('judul', 'like', "%" . $request->search . "%")->orwhere('penulis', 'like', "%" . $request->search . "%")->paginate(5)->withQueryString();
        if ($request->ajax()) {
            $view = view('data-result-search', compact('buku'))->render();

            return response()->json(['html' => $view]);
        }
        return view('result-search', compact('buku', 'request'));
    }

    public function getRandomBookHomepage(Request $request)
    {
        $recomendasi = Cache::remember('recomendasi-image', now()->addDays(1), function () {
            return Buku::with(['detail_buku', 'kategori'])->whereHas('kategori', function ($q) {
                $q->whereIn('slug', ['fiction-literature-ebook', 'nonfiksi', 'history-ebook', 'psychology-ebook', 'romantis']);
            })
                ->inRandomOrder()
                ->limit(8)
                ->get();
        });

        return $recomendasi;
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

        return response()->json($buku);
    }

    public function getBookBySelectedCategorySearch(Request $request)
    {

        $category_session = json_decode($request->selected_book_categori);

        $buku = Buku::where('judul', 'like', "%" . $request->search . "%")->whereHas('kategori', function ($q) use ($category_session) {
            $q->whereIn('kategori_id', $category_session);
        })->take(14)->get();


        return response()->json($buku);
    }
}
