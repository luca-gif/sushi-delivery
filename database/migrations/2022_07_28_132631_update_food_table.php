<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->after('id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');

            $table->unsignedBigInteger('type_id')->nullable()->after('category_id');
            $table->foreign('type_id')
                ->references('id')
                ->on('types')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('food', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');

            $table->dropForeign(['type_id']);
            $table->dropColumn('type_id');
        });
    }
}