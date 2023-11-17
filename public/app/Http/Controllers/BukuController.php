<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\UserWantRead;
use Illuminate\Http\Request;
use Auth;
use mysql_xdevapi\Result;

class BukuController extends Controller
{
    public function index($slug, Request $request)
    {
        $kategori = Kategori::where('name', $slug)->orwhere('slug', $slug)->first();

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
            "@context"=> "https://schema.org",
            "@type" => "FAQPage",
            "mainEntity" => $map->toArray()
        ];

        $decodedJson = json_encode($result, JSON_PRETTY_PRINT);
        $resultJson = html_entity_decode($decodedJson);
        $resultJson = str_replace('"@context": "https:\/\/schema.org"', '"@context": "https://schema.org"', $resultJson);

        if ($kategori) {
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
            if($request->has('search')){
                return self::search($request);
            }else{
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

        $user_want_read = [];
        if (!empty(Auth::user())) {
            $user_want_read = UserWantRead::where('user_id', Auth::user()->id)->pluck('buku_id')->toArray();
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
        $buku = Buku::with(['detail_buku', 'kategori'])
        // ->whereHas('kategori', function ($q) {
        //     $q->whereIn('slug', ['fiction-literature', 'non-fiction', 'history', 'psychology', 'romance']);
        // })
        ->inRandomOrder()
            ->limit(8)
            ->get();
        return response()->json($buku);
    }
}
