<?php

namespace App\Console\Commands;

use App\Models\Buku;
use Illuminate\Console\Command;

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
        //     $buku = Buku::where('slug', $value->Slug)->first();
        //     $buku
        //         ->addMediaFromUrl($value->Images[0])


        //         ->toMediaCollection('buku', 'digitalocean');
        //     $this->info($value->Images[0]);
        // }


        #update

        $buku = Buku::whereHas('media', function ($q) {
            $q->whereBetween('size', [0, 1000]);
        })->get();
    }
}
