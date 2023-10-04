<?php

namespace App\Console\Commands;

use App\Http\Controllers\Admin\BukuController;
use App\Models\Buku;
use App\Models\DetailBuku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Console\Command;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class PeminjamanTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'peminjaman:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This testing generate peminjaman';

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

        $userfile = file_get_contents("./books-raw.json");

        $jsonArray = json_decode($userfile);

        // get category
        // foreach ($jsonArray as $key => $value) {
        //     foreach ($value->Category as $k => $v) {
        //         Kategori::UpdateOrCreate([
        //             'slug' => Str::slug($v)
        //         ], [
        //             'name' => Str::title($v)
        //         ]);
        //         print_r($v);
        //     }
        // }

        //get buku
        foreach ($jsonArray as $key => $value) {

            $buku = Buku::create([
                'judul' => $value->Title,
                'slug' => $value->Slug,
                'penulis' => json_encode($value->AuthorName),
                'isbn' =>  $value->Isbn
            ]);

            $buku->detail_buku()->create([
                'tgl_rilis' => date("Y-m-d", strtotime($value->PublishDate)),
                'bahasa' => $value->Language,
                'penerbit' => $value->Publisher,
                'negara' => $value->Language,
                'jumlah_halaman' => $value->Pages,
                'jumlah_buku' => 0,
                'description' => $value->Description,
            ]);

            $kategory =  Kategori::get();
            foreach ($kategory as $kis => $val) {
                foreach ($value->Category as $k => $v) {
                    if ($val->name === $v) {
                        $buku->kategori()->attach($val->id);
                    }
                }
            }
            $this->info($value->Title);
        }

        return Command::SUCCESS;
    }
}
