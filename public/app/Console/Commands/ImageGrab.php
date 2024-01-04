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
            if ($key > 26404) {
                $imageUrl = $value->links;
                // Fetch only the headers of the remote file
                $headers = get_headers($imageUrl, 1);
                // Check if the 'Content-Type' header is present
                if (isset($headers['Content-Type']) && is_string($headers['Content-Type'])) {
                    $contentType = strtolower($headers['Content-Type']);
                    // Check if the content type indicates it is a JPEG image
                    if (strpos($contentType, 'image/jpeg') !== false) {
                        $media = $value->addMediaFromUrl($value->links)->toMediaCollection('book', 'digitalocean');
                        if ($media) {
                            $this->info('[' . ($key + 1) . ']' . $value->judul);
                            Log::channel('daily')->info('Showing Status: Created Successfully for data with number [' . ($key + 1) . '] ' . $value->judul);
                        } else {
                            $this->error('Failed to add media for [' . ($key + 1) . ']' . $value->judul);
                            Log::channel('daily')->error('Failed to add media for data with number [' . ($key + 1) . '] ' . $value->judul);
                        }
                    } else {
                        echo "Not a JPEG image. Detected Content-Type: $contentType";
                    }
                } else {
                    echo 'Unable to determine Content-Type.';
                }
            }
            // if ($key > 3829) {

            // }
        }
    }
}
