<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('nik')->unique();
            $table->string('nama');
            $table->integer('umur');
            $table->enum('jk',['Laki-laki','Perempuan']);
            $table->enum('agama',['Islam','Kristen','Katolik','Hindu','Budha']);
            $table->string('tempat');
            $table->text('alamat');
            $table->date('tanggal_lahir');
            $table->string('no_telpon')->unique();
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
        Schema::dropIfExists('posts');
    }
}