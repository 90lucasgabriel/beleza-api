<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablishmentsTable extends Migration
{
    public function up()
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->increments('id')->onDelete('cascade');
            $table->string('name');
            $table->string('cnpj');
            $table->string('image');
            $table->string('site');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('establishments');
    }
}