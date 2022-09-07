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
        Schema::table('fppps', function (Blueprint $table) {
            //
            $table->unsignedBigInteger("quotation_id")->default(1)->after("id");
            $table->foreign("quotation_id")->references("id")->on("quotations")->onDelete("restrict")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fppps', function (Blueprint $table) {
            //
            $table->dropForeign("fppps_quotation_id_foreign");
            $table->dropColumn("quotation_id");

        });
    }
};
