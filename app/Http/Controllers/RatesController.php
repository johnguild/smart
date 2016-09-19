<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Rate;
 use App\Account;

class RatesController extends Controller
{

    public function __construct(  ){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rates = Rate::all();
        $accounts = Account::all();
        return view('rates.index', ['rates'=>$rates,'accounts'=>$accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //         Rate::create(array('min'=>0.01,'max'=>1000,'amount'=>25.00));
        // Rate::create(array('min'=>1000.01,'max'=>1500,'amount'=>37.50));
        // Rate::create(array('min'=>1500.01,'max'=>2000,'amount'=>50.00));
        // Rate::create(array('min'=>2000.01,'max'=>2500,'amount'=>62.50));
        // Rate::create(array('min'=>2500.01,'max'=>3000,'amount'=>75.00));
        // Rate::create(array('min'=>3000.01,'max'=>3500,'amount'=>87.50));
        // Rate::create(array('min'=>3500.01,'max'=>4000,'amount'=>100.00));
        // Rate::create(array('min'=>4000.01,'max'=>4500,'amount'=>112.50));
        // Rate::create(array('min'=>4500.01,'max'=>5000,'amount'=>125.00));
        // Rate::create(array('min'=>5000.01,'max'=>5500,'amount'=>137.50));
        // Rate::create(array('min'=>5500.01,'max'=>6000,'amount'=>150.00));
        // Rate::create(array('min'=>6000.01,'max'=>6500,'amount'=>162.50));
        // Rate::create(array('min'=>6500.01,'max'=>7000,'amount'=>175.00));
        // Rate::create(array('min'=>7000.01,'max'=>7500,'amount'=>187.50));
        // Rate::create(array('min'=>7500.01,'max'=>8000,'amount'=>200.00));
        // Rate::create(array('min'=>8000.01,'max'=>8500,'amount'=>212.50));
        // Rate::create(array('min'=>8500.01,'max'=>9000,'amount'=>225.00));
        // Rate::create(array('min'=>9000.01,'max'=>9500,'amount'=>237.50));
        // Rate::create(array('min'=>9500.01,'max'=>10000,'amount'=>250.00));
        // Rate::create(array('min'=>10000.01,'max'=>10500,'amount'=>262.50));
        return 'under construction';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'under construction';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'under construction';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'under construction';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return 'under construction';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'under construction';
    }
}
