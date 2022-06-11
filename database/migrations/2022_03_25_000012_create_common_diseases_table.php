<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommonDiseasesTable extends Migration
{
    public function up()
    {
        Schema::create('common_diseases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
