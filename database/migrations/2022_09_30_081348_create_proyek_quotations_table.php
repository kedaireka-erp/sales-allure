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
        Schema::create('proyek_quotations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quotation_id')->default(1);
            $table->foreign('quotation_id')->references('id')->on('quotations')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->integer('id_penginput')->nullable();
            $table->string('kode_aplikator')->nullable();
            $table->string('no_quotation');
            $table->integer('id_currency')->nullable();
            $table->string('nama_proyek')->nullable();
            $table->string('nama_owner')->nullable();
            $table->string('kontak')->nullable();
            $table->string('no_quotation_cus')->nullable();
            $table->string('alamat_proyek')->nullable();
            $table->text('keterangan')->nullable();
            $table->integer('status_quotation')->nullable();
            $table->date('date')->nullable();
            $table->string('alasan')->nullable();
            $table->integer('revisi_ke')->nullable();
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
        Schema::dropIfExists('proyek_quotations');
    }
};
