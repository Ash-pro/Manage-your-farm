<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgriculturalProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('agricultural_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nationalid');
            $table->string('phone');
            $table->string('address');
            $table->integer('land_area');
            $table->string('project_type');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
