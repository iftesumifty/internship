<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRe1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('re1s', function (Blueprint $table) {
            $table->id();
            
            $table->string('student_id');
            $table->string('Writer_Name');
            $table->string('Book_Name');
            $table->string('image');
            $table->string('pages');
            $table->string('Delivery');
            $table->string('Return');
            
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
        Schema::dropIfExists('re1s');
    }
}
