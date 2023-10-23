<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuKategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_kategori', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('buku_id')->unsigned();
            $table->unsignedBiginteger('kategori_id')->unsigned();

            $table->foreign('buku_id')->references('id')
                ->on('bukus')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')
                ->on('kategoris')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku_kategori');
    }
}
