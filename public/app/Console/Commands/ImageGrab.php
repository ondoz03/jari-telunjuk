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
        // $data = [];
        // $url = [];
        // $arr = [];
        // $i = 1;
        // $buku = Buku::take(1)->get();
        // foreach ($buku as $keys => $value) {
        //     try {
        //         $url = 'https://ebooks.gramedia.com/id/buku/' . $value->slug;

        //         $value
        //             ->addMediaFromUrl($data[$keys]['image'])
        //             ->toMediaCollection();

        //         $this->info("[" . $i++ . "]" . $value->judul);
        //     } catch (\Throwable $th) {
        //         continue;
        //     }
        // }

        $userfile = file_get_contents("./books-raw.json");

        $jsonArray = json_decode($userfile);

        foreach ($jsonArray as $key => $value) {
            $buku = Buku::where('slug', $value->Slug)->first();
            $this->info($value->Images[0]);
        }
    }
}
