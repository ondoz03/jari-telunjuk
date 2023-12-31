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

        #created

        // $userfile = file_get_contents("./books-raw.json");

        // $jsonArray = json_decode($userfile);

        // foreach ($jsonArray as $key => $value) {
        $buku = Buku::where('slug', 'paris-for-one-and-other-stories-paris-untuk-satu-orang-dan-cerita-cerita-lain')->first();
        // return $buku

        // $optimizerChain = OptimizerChainFactory::create();
        // $optimizerChain->optimize($buku->image);

        $media = $buku
            ->addMediaFromUrl($buku->image)

            ->toMediaCollection('buku', 'digitalocean');
        $this->info($media->getUrl());
        // }


        #update

        // $buku = Buku::whereHas('media', function ($q) {
        //     $q->whereBetween('size', [0, 1000]);
        // })->get();

        // $buku = Buku::where('slug', 'paris-for-one-and-other-stories-paris-untuk-satu-orang-dan-cerita-cerita-lain')->first();

        // // Get the URL of the first image associated with the book
        // $imageUrl = $buku->image;

        // // Download the image
        // $imageContents = Http::get($imageUrl)->body();

        // // Temporarily save the image
        // $tempImagePath = tempnam(sys_get_temp_dir(), 'optimized_image');
        // file_put_contents($tempImagePath, $imageContents);

        // // Optimize the image using spatie/image-optimizer
        // $optimizerChain = OptimizerChainFactory::create();
        // $optimizerChain->optimize($tempImagePath);

        // // Add the optimized image to the media collection
        // $media = $buku
        //     ->addMedia($tempImagePath)
        //     ->toMediaCollection('buku', 'digitalocean');

        // // Get the URL of the optimized image
        // $this->info($media->getUrl());

        // // Clean up: Delete the temporary image file
        // unlink($tempImagePath);

        // $buku = Buku::where('slug', 'paris-for-one-and-other-stories-paris-untuk-satu-orang-dan-cerita-cerita-lain')->first();

        // $imageUrl = $buku->images;

        // // Download the image from the URL
        // $imageContent = file_get_contents($imageUrl);

        // // Create a media item from the URL and optimize it
        // $media = $buku
        //     ->addMediaFromUrl($imageUrl)
        //     ->toMediaCollection('buku', 'digitalocean', function (Media $media) use ($imageContent) {
        //         // Get the image instance
        //         $image = ImageFactory::load($imageContent);

        //         // Optimize the image using spatie/image-optimizer
        //         $optimizerChain = OptimizerChainFactory::create();
        //         $optimizerChain->optimize($image);

        //         // Specify additional options if needed (e.g., resizing)
        //         $image->fit(400, 300);

        //         // Set the optimized image content
        //         $media->setCustomProperty('responsive_images', [
        //             'image' => base64_encode($image->encode()),
        //         ]);
        //     });

        // // Get the URL of the optimized image
        // $this->info($media->getUrl());
    }
}
