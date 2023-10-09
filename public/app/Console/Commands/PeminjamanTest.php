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
        $data = json_decode($userfile);
        $jsonArray = array_slice($data, 3674);

        //  get save data
        // foreach ($jsonArray as $key => $value) {
        //     $buku = Buku::where('judul', $value->Title)->orWhere('slug', Str::slug($value->Title, '-'))->orwhere('slug', $value->Slug)->orwhereHas('detail_buku', function ($q) use ($value) {
        //         $q->where('description', $value->Description);
        //     })->first();

        //     if ($buku) {
        //         $buku->update([
        //             'isbn' => $value->Isbn
        //         ]);
        //         $kategory =  Kategori::get();
        //         $arr = [];

        //         foreach ($kategory as $kis => $val) {
        //             foreach ($value->Category as $k => $v) {
        //                 if ($val->name === $v) {
        //                     array_push($arr, $val->id);
        //                 }
        //             }
        //         }
        //         $buku->kategori()->sync($arr);

        //         $this->info($value->Title . '- ' . $key + 3674);
        //     } else {
        //         $this->info($value->Title . '- ' . $key + 3674);
        //     }
        // }



        $buku = Buku::doesntHave('kategori')->get();

        foreach ($buku as $key => $value) {
            $value->kategori()->sync(44);
            $this->info($value->Title . '- ' . $key);
        }



        return Command::SUCCESS;
    }
}
