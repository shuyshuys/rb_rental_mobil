<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('car_id')->constrained();
            $table->string('invoice_no');
            $table->dateTime('rent_date')->nullable();
            $table->dateTime('back_date')->nullable();
            $table->dateTime('return_date')->nullable();
            $table->integer('price')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('penalty')->nullable();
            $table->string('status');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
