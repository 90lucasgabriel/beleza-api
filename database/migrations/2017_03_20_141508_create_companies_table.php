<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
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
        Schema::drop('companies');
    }
}