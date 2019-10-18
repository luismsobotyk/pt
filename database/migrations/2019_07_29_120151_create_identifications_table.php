<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identifications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('plan_id');
            $table->String('knowledge_area')->nullable(true);
            $table->String('teaching', 4)->nullable(true);
            $table->String('regime', 9)->nullable(true);
            $table->unsignedInteger('justification_id')->nullable(true);
            $table->foreign('justification_id')->references('id')->on('justifications');
            $table->foreign('plan_id')->references('id')->on('work_plans');
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
        Schema::dropIfExists('identifications');
    }
}
