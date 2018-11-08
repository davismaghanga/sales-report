<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pdiscount')->nullable();
            $table->boolean('courierIsChecked')->nullable();
            $table->integer('rep_id');
            $table->text('cart');
            $table->string('institution_name');
            $table->string('type');
            $table->integer('county_id');
            $table->integer('subcounty_id');
            $table->string('contactName');
            $table->string('contactNumber');
            $table->string('contactEmail')->nullable();
            $table->boolean('invoiced')->default(false);
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
        Schema::dropIfExists('orders');
    }
}
