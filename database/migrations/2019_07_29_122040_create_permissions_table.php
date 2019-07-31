<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->boolean('registerPlan')->default('0');
            $table->boolean('seePlans')->default('0');
            $table->boolean('seeUsersList')->default('0');
            $table->boolean('setPermissions')->default('0');
            $table->boolean('setSubmissionPeriod')->default('0');
            $table->boolean('reopenPlans')->default('0');
            $table->boolean('approveDocuments')->default('0');
            $table->foreign('user_id')->references('id')->on('users');
            $table->primary('user_id');
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
        Schema::dropIfExists('permissions');
    }
}
