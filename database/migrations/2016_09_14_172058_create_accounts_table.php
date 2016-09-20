<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Account;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->bigInteger('account_number')->unsigned();
            $table->bigInteger('mobile_number')->unsinged();
            $table->float('balance');
            $table->timestamps();
        });

        Account::create(array('name'=>'Kristian Yusi','account_number'=>1001,'mobile_number'=>'09012345678','balance'=>25000));
        Account::create(array('name'=>'Arnel Gilbuela','account_number'=>1002,'mobile_number'=>'09023456789','balance'=>25000));
        Account::create(array('name'=>'Maynard Mesina','account_number'=>1003,'mobile_number'=>'09034567890','balance'=>25000));
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
