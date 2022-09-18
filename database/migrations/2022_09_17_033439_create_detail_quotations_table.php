<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_quotations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quotation_id')->default(1);
            $table->foreign('quotation_id')->references('id')->on('quotations')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->integer('id_kode_gambar');
            $table->string('lokasi');
            $table->string('kode_item');
            $table->string('kode_tipe');
            $table->string('daun');
            $table->string('kode_warna');
            $table->double('panjang');
            $table->double('lebar');
            $table->double('harga');
            $table->integer('qty');
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
        Schema::dropIfExists('detail_quotations');
    }
};
