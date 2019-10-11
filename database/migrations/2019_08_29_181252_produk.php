<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_produk')) {
            Schema::create('tbl_produk', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('id_kategori');
                $table->unsignedBigInteger('id_satuan');
                $table->string('nama_produk');
                $table->bigInteger('harga');
                $table->string('satuan');
                $table->text('deskripsi');
                $table->text('image');
                $table->enum('status', ['aktif', 'tidak']);
                $table->timestamps();
                $table->foreign('id_kategori')->references('id')->on('tbl_kategori');
                $table->foreign('id_satuan')->references('id')->on('tbl_satuan');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_produk');
    }
}
