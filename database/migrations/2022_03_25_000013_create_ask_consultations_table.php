<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAskConsultationsTable extends Migration
{
    public function up()
    {
        Schema::create('ask_consultations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('adress');
            $table->string('id_number');
            $table->string('your_problem');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
