<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Account extends Model
{
    protected $fillable = ['name','account_number','mobile_number','balance'];
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    // protected $dateFormat = 'jS \o\f F, Y g:i:s a';

    public function transactions(  ){
    	return $this->hasMany(Transaction::class)->orderBy('transacted_at','desc');
    }

    public function scopeBasicInfo( $query ){
    	$query->select('id','name','balance');
    }

    public function monthlyTransactions( $month, $year, $sum = null ){
       
        if($sum){
            return $this->transactions()->monthly($month, $year)->get()->sum('earnings');     
        }

        return $this->transactions()->monthly($month, $year)->get();
        
    }


}
