<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_items', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('customer_id')->references('id')->on('customers');
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
        Schema::dropIfExists('customer_items');
    }
}
