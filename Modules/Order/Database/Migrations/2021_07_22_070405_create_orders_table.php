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
            $table->id();
            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_address')->nullable();
            $table->date('customer_birthday')->nullable();
            $table->string('order_status')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->integer('source_id')->nullable();
            $table->integer('sale_off')->nullable();
            $table->bigInteger('cart_subtotal')->default(0);
            $table->integer('discounted_value')->default(0);
            $table->integer('transport_fee')->default(0);
            $table->bigInteger('cost_total')->default(0);
            $table->text('order_note')->nullable();
            $table->integer('shipping_method_id')->nullable();
            $table->integer('payment_method_id')->nullable();
            $table->unsignedInteger('staff_id')->nullable();
            $table->foreign('staff_id')->references('id')->on('users');
            $table->integer('paid')->nullable();
            $table->integer('owed')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
