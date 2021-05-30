<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('member')->onDelete('cascade');

            $table->bigInteger('buku_id')->unsigned();
            $table->foreign('buku_id')->references('id')->on('buku')->onDelete('cascade');

            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');

            $table->enum('status',['pinjam','kembali']);
            $table->text('keterangan');

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
        Schema::dropIfExists('transaksis');
    }
}
