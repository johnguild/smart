@extends('layouts.app')

@section('header')
	<title>Transaction #{{ $transaction->id }}</title>
@stop

@section('content')
	<div class="container">
		<div class="col-md-8 col-xs-12">
			<div class="navbar-right account-show">
				<!-- <form method="POST" action="{{ url('transactions/'.$transaction->id) }}" >
					{{ method_field('DELETE') }}
					{{ csrf_field() }}			
					<input type="submit" name="submit" value="Delete" class="btn btn-danger">
				</form> -->
				@include('others.deleteitem',
						['item_url'=>url('transactions/'), 'item_id'=>$transaction->id, 'item_name'=>'transaction'])
			</div>
			<h1>Details</h1>
		
			<table class="table">
			<thead>
				<th>Transaction Date</th>
				<th>{{ $transaction->transacted_at }}</th>
			</thead>
			<tbody>
				<tr>
					<td>Type</td>
					<td>{{ ucfirst($transaction->type) }}</td>
				</tr>
				<tr>
					<td>Account Holder</td>
					<td><a href="{{url('accounts/'.$transaction->account_id)}}" class="plain-link">{{ $transaction->account->name }}</a></td>
				</tr>
				<tr>
					<td>Account #</td>
					<td>{{ $transaction->account->account_number }}</td>
				</tr>
				<tr>
					<td>Receivers' Mobile #</td>
					<td>{{ $transaction->mobile_receiver }}</td>
				</tr>
				<tr>
					<td>Receivers' Account #</td>
					<td>{{ $transaction->accnumber_receiver }}</td>
				</tr>
				<tr>
					<td>Reference #</td>
					<td>{{ $transaction->reference }}</td>
				</tr>
				<tr>
					<td>Account Balance</td>
					<td>P {{ number_format($transaction->balance, 2) }}</td>
				</tr>
				<tr>
					<td>Amount</td>
					<td>P {{ number_format($transaction->amount, 2) }}</td>
				</tr>
				<tr>
					<td>Surcharge</td>
					<td>P {{ number_format($transaction->surcharge, 2) }}</td>
				</tr>
				<tr>
					<td><b class="earning">Earning</b></td>
					<td><b class="earning">P {{ number_format($transaction->earnings, 2) }}</b></td>
				</tr>
				<tr>
					<td><b>New Balance</b></td>
					<td><b>P {{ number_format($transaction->new_balance, 2) }}</b></td>
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