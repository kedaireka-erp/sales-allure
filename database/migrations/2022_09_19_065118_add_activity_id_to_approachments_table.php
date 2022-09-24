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
        Schema::table('approachments', function (Blueprint $table) {
            //
            $table->unsignedBigInteger("activity_id")->default(1)->after("id");
            $table->foreign("activity_id")->references("id")->on("activities")->onDelete("restrict")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('approachments', function (Blueprint $table) {
            //
            $table->dropForeign("approachments_activity_id_foreign" );
            $table->dropColumn("activity_id");

        });
    }
};
