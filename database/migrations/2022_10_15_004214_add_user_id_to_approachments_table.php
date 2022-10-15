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
            //add user_id foreign key to approachments table
            $table->foreignId('user_id')->after('id');
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
            //remove user_id foreign key from approachments table
            $table->dropForeign(['user_id']);
        });
    }
};
