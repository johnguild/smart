@extends('layouts.app')

@section('header')
	<title>Transaction #{{ $transaction->id }}</title>
@stop

@section('content')
	<div class="container">
		<div class="col-md-8 col-xs-12">
			<div class="navbar-right account-show">
				<form method="POST" action="{{ url('transactions/'.$transaction->id) }}" >
					{{ method_field('DELETE') }}
					{{ csrf_field() }}			
					<input type="submit" name="submit" value="Delete" class="btn btn-danger">
				</form>
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
					<td>{{ $transaction->account->name }}</td>
				</tr>
				<tr>
					<td>Account #</td>
					<td>{{ $transaction->account->account_number }}</td>
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
					<td>Earning</td>
					<td>P {{ number_format($transaction->earnings, 2) }}</td>
				</tr>
				<tr>
					<td><b>New Balance</b></td>
					<td><b>P {{ number_format($transaction->new_balance, 2) }}</b></td>
				</tr>
			</tbody>
			</table>
			
		</div>
		
		<div class="col-md-4">
			<br>
			@include('home.maketransaction')
			@include('home.accountbalances')
		</div>
	</div>
@stop