<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->unsignedBigInteger('group_product_id');
            $table->foreign('group_product_id')->references('id')->on('product_groups');
            $table->unsignedBigInteger('supplier_product_id');
            $table->foreign('supplier_product_id')->references('id')->on('product_suppliers');
            $table->tinyinteger('status')->nullable();
            $table->string('description')->nullable();
            $table->integer('buy_price');
            $table->integer('sell_price');
            $table->integer('guarantee_time');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('product_groups');
        Schema::drop('product_suppliers');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}