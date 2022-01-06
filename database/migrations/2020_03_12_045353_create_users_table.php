<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Role
        // 1 admin
        // 2 kepala bps
        // 3 kepala bps kabupaten
        // 4 kabid
        // 5 kasie
        // 6 staf
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->nullable();
            // $table->boolean('is_kepala_bps')->nullable();
            // $table->boolean('is_kabid')->nullable();
            // $table->boolean('is_kasie')->nullable();
            // $table->boolean('is_staf')->nullable();
            // $table->string('jabatan_id')->nullable();
            $table->string('nip_pendek')->nullable();
            $table->string('nip_panjang')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table){
            $table->integer('jabatan_id')->unsigned()->nullable();
            $table->foreign('jabatan_id')->references('id')->on('jabatans');
            
        });

         Schema::table('users', function (Blueprint $table){
            $table->integer('kodekab_id')->unsigned()->nullable();
            $table->foreign('kodekab_id')->references('id')->on('kodekabs');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
