<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJustificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('justifications', function (Blueprint $table) {
            $table->unsignedInteger('report_id');

            $table->unsignedInteger('identification_id');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('teaching_activity_id');
            $table->unsignedInteger('research_activity_id');
            $table->unsignedInteger('extension_activity_id');
            $table->unsignedInteger('administrative_activity_id');
            $table->boolean('done');
            $table->text('justification');
            $table->foreign('identification_id')->references('id')->on('identifications');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('teaching_activity_id')->references('id')->on('teaching_activities');
            $table->foreign('research_activity_id')->references('id')->on('research_activities');
            $table->foreign('extension_activity_id')->references('id')->on('extension_activities');
            $table->foreign('administrative_activity_id')->references('id')->on('administrative_activities');
            $table->foreign('report_id')->references('id')->on('reports');
            $table->primary('report_id');
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
        Schema::dropIfExists('justifications');
    }
}
