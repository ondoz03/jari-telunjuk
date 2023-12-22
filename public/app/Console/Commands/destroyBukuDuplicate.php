<?php

namespace App\Console\Commands;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Console\Command;

class destroyBukuDuplicate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'buku:destory-dupicate';

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
        // $buku = Buku::doesntHave('kategori')->doesntHave('media')->get();

        $kategori = Kategori::withCount('buku')->orderByDesc('buku_count')->orderBy('name', 'asc')->get();

        foreach ($kategori as $key => $value) {
            if ($value->buku_count < 8) {
                $this->info($value->name);
                $value->delete();
            }
        }
    }
}
