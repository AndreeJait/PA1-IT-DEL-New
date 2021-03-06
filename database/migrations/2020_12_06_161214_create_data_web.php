<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataWeb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_web', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('information')->nullable();
            $table->string('picture')->nullable();
            $table->enum('type',['links','slider','header','text']);
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
        Schema::dropIfExists('data_web');
    }
}
