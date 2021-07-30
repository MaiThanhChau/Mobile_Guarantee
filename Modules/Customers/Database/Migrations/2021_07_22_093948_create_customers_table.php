<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->integer('status')->default(1);
            $table->integer('is_important')->default(0);
            $table->date('birthday')->nullable();
            $table->integer('poin')->default(0);
            $table->integer('owed')->default(0);
            $table->integer('total_sale')->default(0);
            $table->date('last_order')->nullable();
            $table->unsignedBigInteger('customer_group_id')->default(1);
            $table->foreign('customer_group_id')->references('id')->on('customer_group');
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
        Schema::drop('customers');
        Schema::drop('customer_group');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
