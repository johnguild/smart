<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Account;
 use Carbon\Carbon;

class AccountsController extends Controller
{
    public function __construct(  ){

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
                'name'=>'required',
                'account_number'=>'required|numeric',
                'mobile_number'=>'required|numeric'
            ]);

        $request['balance'] = 0;
        $account = Account::create($request->all());

        return redirect("/accounts/". $account['id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account) {

        $dt = Carbon::now();
        // get all monthly total, using carbon we determine the current year
        $monthly = [];
        for($m=1; $m<=12; $m++){
            $totalpermonth =  $account->monthlyTransactions($m, $dt->year, true);
            if($totalpermonth){
                $dt->month = $m;
                $monthly[$dt->format('F')] = $totalpermonth;
            }
        }

        $account['monthly'] = $monthly;// array, contains only subtotals with value > 0

        return view('accounts.show', 
                    ['account'=>$account, 'year'=>$dt->year]);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Account $account) {

        return view('accounts.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account ) {
       
       $this->validate($request, [
                'name'=>'required',
                'account_number'=>'required|numeric',
                'mobile_number'=>'required|numeric'
            ]);

       $account->update($request->all());
       return redirect('/accounts/'.$account->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Account $account ){

        $account->delete();
        return redirect('/accounts');
    }

    public function balance( Account $account, $type ){
        
        $accounts = Account::where('id','!=',$account->id)->get();

        return view('accounts.balance', 
                    ['account'=>$account, 'type'=>$type, 'accounts'=>$accounts]);
    }

    /**
     * Widthraws an amount
     *
     * @param  int  $id
     */
    public function widthraw( Request $request, Account $account ){

        $this->validate($request, [
            'amount'=>"required|numeric|min:1|max:".$account->balance 
        ]);

        $account->balance -= $request['amount']; 
        $account->save();

        return redirect('/accounts/'.$account->id);
    }

    /**
     * Deposits an amount
     *
     * @param  int  $id
     */
    public function deposit( Request $request, Account $account ){
        
        $this->validate($request, [
            'amount'=>"required|numeric|min:100"
        ]);

        $account->balance += $request['amount']; 
        $account->save();

        return redirect('/accounts/'.$account->id);
    }

}
