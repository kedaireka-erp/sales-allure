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
        Schema::create('master_aplikators', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->nullable();
            $table->string('aplikator')->nullable();
            $table->string('kontak')->nullable();
            $table->text('alamat')->nullable();
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->integer('id_status')->nullable();
            $table->string('penginput')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->string('login_stat')->nullable();
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
        Schema::dropIfExists('master_aplikators');
    }
};
