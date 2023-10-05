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
        $data = array_slice($jsonArray, 0, 8);

        //get buku
        foreach ($data as $key => $value) {

            $buku = Buku::where('slug', $value->Slug)->first();

            $kategory =  Kategori::get();
            foreach ($kategory as $kis => $val) {
                foreach ($value->CategoriesSlug as $k => $v) {
                    if ($val->slug === $v) {
                        $buku->kategori()->sync($val->id);
                    }
                }
            }
            $this->info($value->Title);
        }

        return Command::SUCCESS;
    }
}
