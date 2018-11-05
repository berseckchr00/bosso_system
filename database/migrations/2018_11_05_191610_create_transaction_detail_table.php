<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_header_id')->unsigned()->nullable();
            $table->foreign('transaction_header_id')
                    ->references('id')
                    ->on('transaction_header');
            $table->integer('products_id')->unsigned()->nullable();
            $table->foreign('products_id')
                    ->references('id')
                    ->on('products');
            $table->decimal('quantity',2,1);
            $table->decimal('amount',2,1);
            $table->integer('discounts_id')->unsigned()->nullable();
            $table->foreign('discounts_id')
                    ->references('id')
                    ->on('discounts');
            $table->string('signal');
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
        Schema::dropIfExists('transaction_detail');
    }
}
