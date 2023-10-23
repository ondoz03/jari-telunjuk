<?php

namespace App\Console\Commands;

use App\Models\Buku;
use Illuminate\Console\Command;

class UpdateDataDetail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'buku:detail-update-empty';

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

        $buku = Buku::whereHas('media', function ($q) {
            $q->whereBetween('size', [0, 1000]);
        })->get();

        foreach ($buku as $key => $value) {
            $data = self::serach_buku($value->judul);
            $value->detail_buku()->updateorcreate([
                'buku_id' => $value->id
            ], [
                'tgl_rilis' => date("Y-m-d", strtotime($data->PublishDate)),
                'bahasa' => $data->Language,
                'penerbit' => $data->Publisher,
                'negara' => $data->Language,
                'jumlah_halaman' => $data->Pages,
                'jumlah_buku' => 0,
                'description' => $data->Description,
            ]);

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
