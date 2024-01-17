<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('user_want_read_id')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('page_start');
            $table->integer('page_end');
            $table->enum('is_status', ['to_read', 'reading', 'reviewing', 'read', 'reviewed']);
            $table->timestamps();
            $table->foreign('user_want_read_id')->references('id')->on('user_want_reads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challenges');
    }
}
