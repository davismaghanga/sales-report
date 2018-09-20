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
            $table->smallInteger('user_type')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('dob')->nullable();
            $table->integer('region_id')->nullable();
            $table->string('contacts')->nullable();
            $table->string('location')->nullable();
            $table->string('subregion_id')->nullable();
            $table->string('avatar')->default('default.jpg');

            $table->rememberToken();
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
