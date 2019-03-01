<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Đang xảy ra lỗi ở create table
    public function up()
    {
        // Schema::table('users_foreign', function (Blueprint $table) {
        //     $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
        // });

        /*Schema::create('product_categories_foreign', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category')->onDelete();
        });

        Schema::create('product_orders_foreign', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('order')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
        });

        Schema::create('product_carts_foreign', function (Blueprint $table) {
            $table->foreign('cart_id')->references('id')->on('cart');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
        });

        Schema::create('orders_foreign', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('users_foreign');
        /*Schema::dropIfExists('product_categories_foreign');
        Schema::dropIfExists('product_orders_foreign');
        Schema::dropIfExists('product_carts_foreign');
        Schema::dropIfExists('orders_foreign');*/
    }
}
