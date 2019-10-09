<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('situation_id');
            $table->unsignedInteger('period_id');
            $table->date('send_date');
            $table->date('approval_date');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('situation_id')->references('id')->on('situations');
            $table->foreign('period_id')->references('id')->on('periods');
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
        Schema::dropIfExists('work_plans');
    }
}
