<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrder11sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order11s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name1');
            $table->string('email');
            
            $table->string('phone');
            
            $table->string('address');
            $table->string('total');


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
        Schema::dropIfExists('order11s');
    }
}
