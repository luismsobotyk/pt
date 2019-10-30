<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('plan_id');
            $table->unsignedInteger('situation_id');
            $table->unsignedInteger('period_id');
            $table->date('send_date');
            $table->date('approval_date');
            $table->double('fulfilled_workload')->nullable();
            $table->unsignedInteger('justifications_id')->nullable();
            $table->foreign('plan_id')->references('id')->on('work_plans');
            $table->foreign('situation_id')->references('id')->on('situations');
            $table->foreign('period_id')->references('id')->on('periods');
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
        Schema::dropIfExists('reports');
    }
}
