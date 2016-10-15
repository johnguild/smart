<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->float('amount');
            $table->string('type');
            $table->float('earnings');
            $table->string('reference');
            $table->timestamp('transacted_at');
            $table->integer('account_id')->unsigned();
            $table->bigInteger('mobile_sender');
            $table->bigInteger('mobile_receiver');
            $table->string('accnumber_receiver')->nullable();
            $table->float('balance');
            $table->float('new_balance');
            // $table->float('surcharge')->default(0.00);
            $table->boolean('closed');
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
        Schema::dropIfExists('transactions');
    }
}
