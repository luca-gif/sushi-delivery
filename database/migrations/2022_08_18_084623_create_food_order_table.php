<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_id')->nullable();
            $table->foreign('food_id')
                ->references('id')
                ->on('food')
                ->onDelete('set null');

            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->onDelete('set null');
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
        Schema::dropIfExists('food_order');

        Schema::table('food_order', function (Blueprint $table) {
            $table->dropForeign(['food_id']);
            $table->dropColumn('food_id');

            $table->dropForeign(['order_id']);
            $table->dropColumn('order_id');
        });
    }
}