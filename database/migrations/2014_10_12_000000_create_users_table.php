<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('profile_photo');
            //$table->timestamp('email_verified_at')->nullable();
            //$table->string('password')->nullable();
            $table->string('provider');
            $table->string('provider_id');
            $table->rememberToken();

            // identificacao do usuario
            $table->String('knowledge_area')->nullable();
            $table->String('teaching', 4)->nullable();
            $table->String('regime', 9)->nullable();

            //permissoes do usuario
            $table->boolean('registerPlan')->default('0');
            $table->boolean('seePlans')->default('0');
            $table->boolean('seeUsersList')->default('0');
            $table->boolean('setPermissions')->default('0');
            $table->boolean('setSubmissionPeriod')->default('0');
            $table->boolean('reopenPlans')->default('0');
            $table->boolean('approveDocuments')->default('0');

            //timestamps
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
        Schema::dropIfExists('users');
    }
}
