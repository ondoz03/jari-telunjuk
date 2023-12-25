<?php

namespace App\Console\Commands;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Str;

class siteMaps extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemaps:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        // category
        $siteMap = Sitemap::create();
        Kategori::all()->each(function (Kategori $kategori) use ($siteMap) {
            $siteMap->add(Url::create($kategori->slug)->setPriority(0.6)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        });
        $siteMap->writeTofile(public_path('sitemap_category.xml'));

        // buku
        $siteMapBuku = Sitemap::create();
        Buku::all()->each(function (Buku $buku) use ($siteMapBuku) {
            $siteMapBuku->add(Url::create('buku/' . $buku->slug)->setPriority(0.8)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        });
        $siteMapBuku->writeTofile(public_path('sitemap_buku.xml'));

        //autor
        $buku = Buku::where('penulis', '!=', '')->get();

        $filteredBuku = $buku->filter(function ($book) {
            return $book->penulis !== '';
        })->unique('penulis')->values()->map(function ($book) {
            // You can modify the structure of the book or just return it as is
            return [
                'author' => Str::slug($book->penulis),
            ];
        });

        $siteMapPenulis = Sitemap::create();
        foreach ($filteredBuku as $key => $value) {
            $siteMapPenulis->add(Url::create('author/profile/' . $value['author'])->setPriority(0.6)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        }

        $siteMapPenulis->writeTofile(public_path('sitemap_author.xml'));
    }
}
