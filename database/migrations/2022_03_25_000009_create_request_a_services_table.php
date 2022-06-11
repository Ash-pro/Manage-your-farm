<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestAServicesTable extends Migration
{
    public function up()
    {
        Schema::create('request_a_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('nationalid');
            $table->integer('phone');
            $table->string('homearea');
            $table->string('region');
            $table->string('service');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
