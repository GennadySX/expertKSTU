<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Review extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('id_expert');
            $table->integer('id_object');
            $table->integer('rate_1');
            $table->integer('rate_2');
            $table->integer('rate_3');
            $table->integer('rate_4');
            $table->string('rate_comment');
            $table->dateTime('rate_create');
            $table->integer('id_discipline');
            $table->integer('id_teacher');
            $table->integer('id_specialty');
            $table->integer('id_department');
            $table->integer('id_falucty');
            $table->integer('id_university');
    });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('review');
    }
}
