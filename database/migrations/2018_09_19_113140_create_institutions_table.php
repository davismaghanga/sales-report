<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('institution_name');
            $table->string('type');
            $table->string('activity');
            $table->string('upcoming');
            $table->string('outcome');
            $table->float('orders')->nullable();
            $table->integer('region_id');
            $table->integer('county_id');
            $table->integer('subcounty_id');
            $table->string('contactName');
            $table->string('contactEmail')->nullable();
            $table->string('contactDesignation');
            $table->string('contactNumber');
            $table->integer('user_id');
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
        Schema::dropIfExists('institutions');
    }
}
