<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transaction;

use App\Account;

use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $transactions = Transaction::orderBy('created_at','desc')->take(10)->get();
        // $accounts = Account::basicInfo()->with('transactions')->get();
        $accounts = Account::basicInfo()->get();// retrieve all accounts
        $dt = Carbon::now();
        $totals = [];
        foreach($accounts as $key => $account){

            // get all monthly total, using carbon we determine the current year
            $monthly = [];
            for($m=12; $m>=1; $m--){
                $totalpermonth =  $account->monthlyTransactions($m, $dt->year, true);
                if($totalpermonth){
                    $dt->month = $m;
                    $monthly[$dt->format('F')] = number_format((float)$totalpermonth, 2);
                }
            }
            
            $totals = array_merge_recursive($totals, $monthly);
            $accounts[$key]['monthly'] = $monthly;// array, contains only subtotals with value > 0
        }

        foreach ($totals as $key => $total) {
            $totals[$key] = number_format(array_sum((array)$total), 2);
        }
        // return $accounts;
        return view('home', ['accounts'=>$accounts,'totals'=>$totals,'year'=>$dt->year]);
    }
}
