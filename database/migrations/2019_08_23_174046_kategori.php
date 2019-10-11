<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_kategori')) {
            Schema::create('tbl_kategori', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('nama_kategori');
                $table->enum('status', ['aktif', 'tidak']);
                $table->timestamps();
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
        Schema::dropIfExists('tbl_kategori');
    }
}
