<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('plan_id');
            $table->String('activity');
            $table->double('workload');
            $table->unsignedInteger('justification_id')->default(null);
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
        Schema::dropIfExists('research_activities');
    }
}
