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
        Schema::create('fppps', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->default(0)->nullable();
            $table->string("fppp_no")->nullable(); //format no fppp?
            $table->integer("production_phase")->nullable();
            // $table->integer("applicator_name"); //ambil dari quotation WON
            // $table->integer("project_name"); //ambil dari quotation WON
            // $table->integer("project_address"); //ambil dari quotation WON
            // $table->integer("sales_name"); //masukin nama-nama sales???
            $table->string("fppp_revisino")->nullable(); //Cara bikin "Revisi dari FPPP No" dan "Lain-Lain" bisa diinput???
            $table->string("fppp_keterangan")->nullable(); //Cara bikin "Revisi dari FPPP No" dan "Lain-Lain" bisa diinput???
            $table->integer("production_time")->nullable();
            $table->string("color")->nullable();
            $table->string("glass_type")->nullable();
            $table->date("retrieval_deadline")->nullable();
            $table->enum("fppp_type",["produksi", "memo"])->nullable();
            $table->enum("order_status", ["baru", "tambahan", "revisino", "lainlain"])->nullable(); //Cara bikin "Revisi dari FPPP No" dan "Lain-Lain" bisa diinput???
            $table->enum("glass", ["included", "excluded", "included_excluded"])->nullable();
            $table->boolean("box_usage")->nullable();
            $table->boolean("sealant_usage")->nullable();
            $table->boolean("delivery_to_expedition")->nullable();
            $table->text("note")->nullable();
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
        Schema::dropIfExists('fppps');
    }
};
