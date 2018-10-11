<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('residents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('roomNo');
            $table->string('name');
            $table->date('birthDate');
            $table->string('residentStatus');
            $table->date('moveInDate');
            $table->date('moveOutDate');
            $table->string('school');
            $table->string('course');
            $table->integer('yearLevel');
            $table->string('mobileNumber')->unique;
            $table->string('emailAddress')->unique;
            $table->string('cover_image');
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
        Schema::dropIfExists('residents_');
       
    }
}