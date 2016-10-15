<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Account;

use Carbon\Carbon;

class Transaction extends Model
{
    protected $fillable = [
    	'amount','type','earnings','reference','transacted_at','account_id','mobile_sender','mobile_receiver','accnumber_receiver','balance','new_balance','surcharge','closed'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'transacted_at'
    ];
    // protected $dateFormat = 'jS \o\f F, Y g:i:s a';

    public function setTransactedAtAttribute( $date ){
        $this->attributes['transacted_at'] = date( 'Y-m-d H:i:s', strtotime($date));
        
    }

    public function getTransactedAtAttribute( $date ){
        
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('F j, Y g:i A');
    }   

  	public function account(  ){
      	return $this->belongsTo(Account::class);
    }

    public function scopeMonthly( $query, $month, $year ){
    	
    	$query->whereYear('transacted_at', $year)->whereMonth('transacted_at', $month );
    }

}
