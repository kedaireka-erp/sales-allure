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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyek_quotation_id')->nullable();
            $table->unsignedBigInteger('contact_id')->default(1);
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->unsignedBigInteger('deal_source_id')->default(1);
            $table->foreign('deal_source_id')->references('id')->on('deal_sources')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->unsignedBigInteger('status_id')->default(1);
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->unsignedBigInteger('aplikator_id')->nullable();
            $table->foreign('aplikator_id')->references('id')->on('master_aplikators')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->text('alasan')->nullable();
            $table->text('keterangan')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('quotations');
    }
};
