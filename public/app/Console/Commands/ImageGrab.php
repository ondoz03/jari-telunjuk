<?php

namespace App\Console\Commands;

use App\Models\Buku;
use Illuminate\Console\Command;
use Image;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

use Spatie\MediaLibrary\Support\ImageFactory;
use Illuminate\Support\Facades\Log;

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
        $buku = Buku::get();
        foreach ($buku as $key => $value) {
            $value->media()->delete();
            $value
                ->addMediaFromUrl($value->links)
                ->toMediaCollection('bukus', 'digitalocean');
            $this->info('[' . $key + 1 . ']' . $value->judul);

            Log::build([
                'driver' => 'daily',
                'path' => storage_path('logs/custom.log'),

            ])->info('Showing Status Created Successfully data dengan number ' . '[' . $key + 1 . ']' . $value->judul);
        }
    }
}
