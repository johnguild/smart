<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surcharge extends Model
{

		public static $surcharge = array(
				array('min'=>0.01,'max'=>1000,'amount'=>5.00),
        array('min'=>1000.01,'max'=>1500,'amount'=>7.50),
        array('min'=>1500.01,'max'=>2000,'amount'=>10.00),
        array('min'=>2000.01,'max'=>2500,'amount'=>12.50),
        array('min'=>2500.01,'max'=>3000,'amount'=>15.00),
        array('min'=>3000.01,'max'=>3500,'amount'=>17.50),
        array('min'=>3500.01,'max'=>4000,'amount'=>20.00),
        array('min'=>4000.01,'max'=>4500,'amount'=>22.50),
        array('min'=>4500.01,'max'=>5000,'amount'=>25.00),
        array('min'=>5000.01,'max'=>5500,'amount'=>27.50),
        array('min'=>5500.01,'max'=>6000,'amount'=>30.00),
        array('min'=>6000.01,'max'=>6500,'amount'=>32.50),
        array('min'=>6500.01,'max'=>7000,'amount'=>35.00),
        array('min'=>7000.01,'max'=>7500,'amount'=>37.50),
        array('min'=>7500.01,'max'=>8000,'amount'=>40.00),
        array('min'=>8000.01,'max'=>8500,'amount'=>42.50),
        array('min'=>8500.01,'max'=>9000,'amount'=>45.00),
        array('min'=>9000.01,'max'=>9500,'amount'=>47.50),
        array('min'=>9500.01,'max'=>10000,'amount'=>50.00),
        array('min'=>10000.01,'max'=>10500,'amount'=>52.50),
        array('min'=>10500.01,'max'=>11000,'amount'=>55.00),
        array('min'=>11000.01,'max'=>11500,'amount'=>57.50),
        array('min'=>11500.01,'max'=>12000,'amount'=>60.00),
        array('min'=>12000.01,'max'=>12500,'amount'=>62.50),
        array('min'=>12500.01,'max'=>13000,'amount'=>65.00),
        array('min'=>13000.01,'max'=>13500,'amount'=>67.50),
        array('min'=>13500.01,'max'=>14000,'amount'=>70.00),
        array('min'=>14000.01,'max'=>14500,'amount'=>72.50),
        array('min'=>14500.01,'max'=>15000,'amount'=>75.00),
        array('min'=>15000.01,'max'=>15500,'amount'=>77.50),
        array('min'=>15500.01,'max'=>16000,'amount'=>80.00),
        array('min'=>16000.01,'max'=>16500,'amount'=>82.50),
        array('min'=>16500.01,'max'=>17000,'amount'=>85.00),
        array('min'=>17000.01,'max'=>17500,'amount'=>87.50),
        array('min'=>17500.01,'max'=>18000,'amount'=>90.00),
        array('min'=>18000.01,'max'=>18500,'amount'=>92.50),
        array('min'=>18500.01,'max'=>19000,'amount'=>95.00),
        array('min'=>19000.01,'max'=>19500,'amount'=>97.50),
        array('min'=>19500.01,'max'=>20000,'amount'=>100.00),
        array('min'=>20000.01,'max'=>20500,'amount'=>102.50),
        array('min'=>20500.01,'max'=>21000,'amount'=>105.00),
        array('min'=>21000.01,'max'=>21500,'amount'=>107.50),
        array('min'=>21500.01,'max'=>22000,'amount'=>110.00),
        array('min'=>22000.01,'max'=>22500,'amount'=>112.50),
        array('min'=>22500.01,'max'=>23000,'amount'=>115.00),
        array('min'=>23000.01,'max'=>23500,'amount'=>117.50),
        array('min'=>23500.01,'max'=>24000,'amount'=>120.00),
        array('min'=>24000.01,'max'=>24500,'amount'=>122.50),
        array('min'=>24500.01,'max'=>25000,'amount'=>125.00),
			);

    public static function getSurcharge( $amount=0 ){
    	$surcharge = self::$surcharge;


    	if($amount >= 25000.01){
    		$cost = $amount * 0.005;
    		return $cost;
    	}

    	$cost = 0;
    	foreach ($surcharge as $value) {
    		if($value['min'] <= $amount && $value['max'] >= $amount){
    			$cost = $value['amount'];
    			break;
    		}
    	}
    	return $cost;
    }

}
