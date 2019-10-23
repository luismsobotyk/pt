<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrativeActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrative_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('plan_id');
            $table->String('activity');
            $table->double('workload');
            $table->String('ordinance');
            $table->unsignedInteger('justifications_id')->nullable();
            $table->foreign('plan_id')->references('id')->on('work_plans');
            $table->foreign('justifications_id')->references('id')->on('justifications');
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
        Schema::dropIfExists('administrative_activities');
    }
}
