<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Rate;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->increments('id');
            $table->float('min');
            $table->float('max');
            $table->float('amount');
            $table->timestamps();
        });

        Rate::create(array('min'=>0.01,'max'=>1000,'amount'=>25.00));
        Rate::create(array('min'=>1000.01,'max'=>1500,'amount'=>37.50));
        Rate::create(array('min'=>1500.01,'max'=>2000,'amount'=>50.00));
        Rate::create(array('min'=>2000.01,'max'=>2500,'amount'=>62.50));
        Rate::create(array('min'=>2500.01,'max'=>3000,'amount'=>75.00));
        Rate::create(array('min'=>3000.01,'max'=>3500,'amount'=>87.50));
        Rate::create(array('min'=>3500.01,'max'=>4000,'amount'=>100.00));
        Rate::create(array('min'=>4000.01,'max'=>4500,'amount'=>112.50));
        Rate::create(array('min'=>4500.01,'max'=>5000,'amount'=>125.00));
        Rate::create(array('min'=>5000.01,'max'=>5500,'amount'=>137.50));
        Rate::create(array('min'=>5500.01,'max'=>6000,'amount'=>150.00));
        Rate::create(array('min'=>6000.01,'max'=>6500,'amount'=>162.50));
        Rate::create(array('min'=>6500.01,'max'=>7000,'amount'=>175.00));
        Rate::create(array('min'=>7000.01,'max'=>7500,'amount'=>187.50));
        Rate::create(array('min'=>7500.01,'max'=>8000,'amount'=>200.00));
        Rate::create(array('min'=>8000.01,'max'=>8500,'amount'=>212.50));
        Rate::create(array('min'=>8500.01,'max'=>9000,'amount'=>225.00));
        Rate::create(array('min'=>9000.01,'max'=>9500,'amount'=>237.50));
        Rate::create(array('min'=>9500.01,'max'=>10000,'amount'=>250.00));
        Rate::create(array('min'=>10000.01,'max'=>10500,'amount'=>262.50));
        Rate::create(array('min'=>10500.01,'max'=>11000,'amount'=>275.00));
        Rate::create(array('min'=>11000.01,'max'=>11500,'amount'=>287.50));
        Rate::create(array('min'=>11500.01,'max'=>12000,'amount'=>300.00));
        Rate::create(array('min'=>12000.01,'max'=>12500,'amount'=>312.50));
        Rate::create(array('min'=>12500.01,'max'=>13000,'amount'=>325.00));
        Rate::create(array('min'=>13000.01,'max'=>13500,'amount'=>337.50));
        Rate::create(array('min'=>13500.01,'max'=>14000,'amount'=>350.00));
        Rate::create(array('min'=>14000.01,'max'=>14500,'amount'=>362.50));
        Rate::create(array('min'=>14500.01,'max'=>15000,'amount'=>375.00));
        Rate::create(array('min'=>15000.01,'max'=>15500,'amount'=>387.50));
        Rate::create(array('min'=>15500.01,'max'=>16000,'amount'=>400.00));
        Rate::create(array('min'=>16000.01,'max'=>16500,'amount'=>412.50));
        Rate::create(array('min'=>16500.01,'max'=>17000,'amount'=>425.00));
        Rate::create(array('min'=>17000.01,'max'=>17500,'amount'=>437.50));
        Rate::create(array('min'=>17500.01,'max'=>18000,'amount'=>450.00));
        Rate::create(array('min'=>18000.01,'max'=>18500,'amount'=>462.50));
        Rate::create(array('min'=>18500.01,'max'=>19000,'amount'=>475.00));
        Rate::create(array('min'=>19000.01,'max'=>19500,'amount'=>487.50));
        Rate::create(array('min'=>19500.01,'max'=>20000,'amount'=>500.00));
        Rate::create(array('min'=>20000.01,'max'=>20500,'amount'=>512.50));
        Rate::create(array('min'=>20500.01,'max'=>21000,'amount'=>525.00));
        Rate::create(array('min'=>21000.01,'max'=>21500,'amount'=>537.50));
        Rate::create(array('min'=>21500.01,'max'=>22000,'amount'=>550.00));
        Rate::create(array('min'=>22000.01,'max'=>22500,'amount'=>562.50));
        Rate::create(array('min'=>22500.01,'max'=>23000,'amount'=>575.00));
        Rate::create(array('min'=>23000.01,'max'=>23500,'amount'=>587.50));
        Rate::create(array('min'=>23500.01,'max'=>24000,'amount'=>600.00));
        Rate::create(array('min'=>24000.01,'max'=>24500,'amount'=>612.50));
        Rate::create(array('min'=>24500.01,'max'=>25000,'amount'=>625.00));
        Rate::create(array('min'=>25000.01,'max'=>25500,'amount'=>637.50));
        Rate::create(array('min'=>25500.01,'max'=>26000,'amount'=>650.00));
        Rate::create(array('min'=>26000.01,'max'=>26500,'amount'=>662.50));
        Rate::create(array('min'=>26500.01,'max'=>27000,'amount'=>675.00));
        Rate::create(array('min'=>27000.01,'max'=>27500,'amount'=>687.50));
        Rate::create(array('min'=>27500.01,'max'=>28000,'amount'=>700.00));
        Rate::create(array('min'=>28000.01,'max'=>28500,'amount'=>712.50));
        Rate::create(array('min'=>28500.01,'max'=>29000,'amount'=>725.00));
        Rate::create(array('min'=>29000.01,'max'=>29500,'amount'=>737.50));
        Rate::create(array('min'=>29500.01,'max'=>30000,'amount'=>750.00));
        Rate::create(array('min'=>30000.01,'max'=>30500,'amount'=>762.50));
        Rate::create(array('min'=>30500.01,'max'=>31000,'amount'=>775.00));
        Rate::create(array('min'=>31000.01,'max'=>31500,'amount'=>787.50));
        Rate::create(array('min'=>31500.01,'max'=>32000,'amount'=>800.00));
        Rate::create(array('min'=>32000.01,'max'=>32500,'amount'=>812.50));
        Rate::create(array('min'=>32500.01,'max'=>33000,'amount'=>825.00));
        Rate::create(array('min'=>33000.01,'max'=>33500,'amount'=>837.50));
        Rate::create(array('min'=>33500.01,'max'=>34000,'amount'=>850.00));
        Rate::create(array('min'=>34000.01,'max'=>34500,'amount'=>862.50));
        Rate::create(array('min'=>34500.01,'max'=>35000,'amount'=>875.00));
        Rate::create(array('min'=>35000.01,'max'=>35500,'amount'=>887.50));
        Rate::create(array('min'=>35500.01,'max'=>36000,'amount'=>900.00));
        Rate::create(array('min'=>36000.01,'max'=>36500,'amount'=>912.50));
        Rate::create(array('min'=>36500.01,'max'=>37000,'amount'=>925.00));
        Rate::create(array('min'=>37000.01,'max'=>37500,'amount'=>937.50));
        Rate::create(array('min'=>37500.01,'max'=>38000,'amount'=>950.00));
        Rate::create(array('min'=>38000.01,'max'=>38500,'amount'=>962.50));
        Rate::create(array('min'=>38500.01,'max'=>39000,'amount'=>975.00));
        Rate::create(array('min'=>39000.01,'max'=>39500,'amount'=>987.50));
        Rate::create(array('min'=>39500.01,'max'=>40000,'amount'=>900.00));
        Rate::create(array('min'=>40000.01,'max'=>40500,'amount'=>1012.50));
        Rate::create(array('min'=>40500.01,'max'=>41000,'amount'=>1025.00));
        Rate::create(array('min'=>41000.01,'max'=>41500,'amount'=>1037.50));
        Rate::create(array('min'=>41500.01,'max'=>42000,'amount'=>1050.00));
        Rate::create(array('min'=>42000.01,'max'=>42500,'amount'=>1062.50));
        Rate::create(array('min'=>42500.01,'max'=>43000,'amount'=>1075.00));
        Rate::create(array('min'=>43000.01,'max'=>43500,'amount'=>1087.50));
        Rate::create(array('min'=>43500.01,'max'=>44000,'amount'=>1100.00));
        Rate::create(array('min'=>44000.01,'max'=>44500,'amount'=>1112.50));
        Rate::create(array('min'=>44500.01,'max'=>45000,'amount'=>1125.00));
        Rate::create(array('min'=>45000.01,'max'=>45500,'amount'=>1137.50));
        Rate::create(array('min'=>45500.01,'max'=>46000,'amount'=>1150.00));
        Rate::create(array('min'=>46000.01,'max'=>46500,'amount'=>1162.50));
        Rate::create(array('min'=>46500.01,'max'=>47000,'amount'=>1175.00));
        Rate::create(array('min'=>47000.01,'max'=>47500,'amount'=>1187.50));
        Rate::create(array('min'=>47500.01,'max'=>48000,'amount'=>1200.00));
        Rate::create(array('min'=>48000.01,'max'=>48500,'amount'=>1212.50));
        Rate::create(array('min'=>48500.01,'max'=>49000,'amount'=>1225.00));
        Rate::create(array('min'=>49000.01,'max'=>49500,'amount'=>1237.50));
        Rate::create(array('min'=>49500.01,'max'=>50000,'amount'=>1250.00));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rates');
    }
}
