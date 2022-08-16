<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->unique();
            $table->float('rating');
            $table->string('produser');
            $table->enum('tipe',['SERIES','MOVIE']);
            $table->enum('status',['Ongoing', 'Completed']);
            $table->integer('total_episode');       
            $table->integer('durasi');
            $table->date('tanggal_rilis');
            $table->string('studio');
            $table->string('genre');
            $table->string('foto');

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
        Schema::dropIfExists('cruds');
    }
}
