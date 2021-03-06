<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id('id_berita');
            $table->integer('id_kategori')->unsigned();
            $table->text('judul');
            $table->text('slug');
            $table->string('penulis');
            $table->longText('isi');
            $table->string('image');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori_berita');
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
        Schema::dropIfExists('beritas');
    }
}
