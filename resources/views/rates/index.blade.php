@extends('layouts.app')

@section('header')
	<title>Rates</title>

@stop

@section('content')
<div class="container">
    <div class="col-md-8">
    	<h1>Rates Table<!--  <small><a href="{{ url('transactions/create') }}" class="btn btn-primary">Create new</a> --></small></h1>

    	<table class="table">
    	<thead>
            <tr>
    		  <th class="text-center">From</th>
    		  <th class="text-center">Upto</th>
    		  <th class="text-center">Amount</th>
            </tr>
    	</thead>
    	<tbody>
    	@foreach( $rates as $rate )
    		<tr>
    			<td class="text-center">{{ number_format($rate->min, 2) }}</td>
    			<td class="text-center">{{ number_format($rate->max, 2) }}</td>
    			<td class="text-center">{{ number_format($rate->amount, 2) }}</td>
    		</tr>
    	@endforeach
            <tr>
                <td class="text-center">10500.01</td>
                <td class="text-center">above</td>
                <td class="text-center">2 % of amount</td>
            </tr>
    	</tbody>
    	</table>
    </div>
    <div class="col-md-4 col-xs-12 right-sidebar">
        <br>
        @include('home.maketransaction')
        @include('home.accountbalances')
    </div>
</div>
@stop