<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Transaction;
 use App\Account;
 use App\Rate;

class TransactionsController extends Controller
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

        $transactions = Transaction::with('account')->orderBy('transacted_at', 'desc')->get();
        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $type = null) {

        $accounts = Account::all();
        return view('transactions.create', ['accounts'=>$accounts,'type'=>$type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->validate($request, [
                'account_id' => 'required',
            ]);
        $account = Account::find($request['account_id']);

        if($request['type'] == 'padala'){
            $amountvalidation = 'required|numeric|min:1|max:'.$account->balance;
        }else if($request['type'] == 'encashment'){
            $amountvalidation = 'required|numeric|min:100';
        }

        $this->validate($request, [
                'transacted_at' => 'date|required',
                'type' => 'required',
                'mobile_receiver'=> 'required|numeric',
                'accnumber_receiver'=> 'required|numeric',
                'reference' =>  'required|numeric',
                'amount'    =>  $amountvalidation
            ]);

        // FIX !!! the amount should be the last of the rates and earning/fee
        if($request['amount'] > 50000){
            $request['earnings'] = 1250.00;
        }else{
            $cost = Rate::whereRaw('min <= ? AND max >= ?', array($request['amount'],$request['amount']))->first(array('amount'));
            $request['earnings'] = $cost['amount'];
        }

        
        $request['mobile_sender'] = $account->mobile_number;
        $request['balance'] = $account->balance;

        if($request['type'] == 'padala'){
            $new_balance = $account->balance - $request['amount'];
        }else if($request['type'] == 'encashment'){
            $new_balance = $account->balance + $request['amount'];
        }
        
        $request['new_balance'] = $new_balance;
        $request['closed'] = 0;

        $transaction = Transaction::create($request->all());
        $account->balance = $new_balance;
        $account->save();

        return redirect('/transactions/'.$transaction->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {

        $transaction = Transaction::with('account')->find($id);
        $accounts = Account::all();
        return view('transactions.show', ['transaction'=>$transaction, 'accounts'=>$accounts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        
        $transaction = Transaction::with('account')->find($id);
        return view('transactions.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Transaction $transaction ) {
        
        $transaction->delete();
        return redirect('/transactions/');
    }


    public function reports( $year, $month, $account=null){
        
        $date = date_parse(ucfirst($month));

        if($account){
            $account = Account::find($account);
            $account['transactions'] = $account->monthlyTransactions($date['month'], $year);
        }else{
            $account = new Account;
            $account['transactions'] = Transaction::with('account')->monthly($date['month'], $year)->get();
        }

        $account['month'] = ucfirst($month);
        $account['year']  = $year;

        return view('reports.show', ['account'=>$account]);
    }

}
