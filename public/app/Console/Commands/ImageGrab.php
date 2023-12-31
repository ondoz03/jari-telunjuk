<?php

namespace App\Console\Commands;

use App\Models\Buku;
use Illuminate\Console\Command;
use Image;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

use Spatie\MediaLibrary\Support\ImageFactory;


class ImageGrab extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'image:store';

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
        // $buku = Buku::doesntHave('detail_buku')->get();

        // $buku = Buku::whereHas('media', function ($q) {
        //     $q->whereBetween('size', [0, 1000]);
        // })->get();


        $buku = Buku::where('slug', 'paris-for-one-and-other-stories-paris-untuk-satu-orang-dan-cerita-cerita-lain')->get();


        // $media = $buku
        //     ->addMediaFromUrl($buku->image)
        //     ->toMediaCollection('buku', 'digitalocean');
        // $this->info($media->getUrl());

        foreach ($buku as $key => $value) {
            $data = self::serach_buku($value->judul);
            $value->media()->delete();
            $value
                ->addMediaFromUrl($data->Thumbnail)
                ->toMediaCollection('buku', 'digitalocean');
            $this->info($value->judul);
        }
    }

    public function serach_buku($title)
    {
        $userfile = file_get_contents("./books-raw.json");
        $data = json_decode($userfile);

        $key = 'Title';
        $value = $title;
        $index = array_search($value, array_column($data, $key));
        $datas = array_slice($data, $index, 1);

        return $datas[0];
    }
}
