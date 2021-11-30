<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tregisters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('paddress');
            $table->string('caddress');
            $table->string('qualification');
            $table->string('dob');
            $table->string('pin');
            $table->string('gender');
            $table->string('dis');
            $table->string('dept');
            $table->string('phno');
            $table->string('lan');
            $table->string('pswd');
            $table->string('utype');
            $table->string('status');
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
        Schema::dropIfExists('tregisters');
    }
}
