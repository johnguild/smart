@extends('layouts.app')

@section('header')
	<title>@if($account->name){{ $account->name }} - @endif
	{{ ucfirst($account->month).' Report' }}</title>
@stop


@section('content')
	<div class="container">
		<div class="col-md-8">
			<br>
			<div class="panel panel-info">
				<div class="panel panel-heading">
					<h4>@if($account->name){{ $account->name }} - @endif
					{{ $account->month }} Report</h4>
				</div>
				<div class="panel panel-body">
					<table id="transactiontable" class="table">
					<thead>
						<tr>
							<th>Date</th>
							<th>Account Balance</th>
							<th>Amount</th>
							<th>Earning</th>
							<th>New Balance</th>
							<th>Type</th>
							@if( !$account->name )
								<th>Account Holder</th>
							@endif
						</tr>
					</thead>
					<tbody>
					@foreach( $account->transactions as $key => $transaction )
						<tr>
							<td>{{ date($transaction->transacted_at ) }}</td>
							<td>{{ $transaction->balance }}</td>
							<td>{{ $transaction->amount }}</td>
							<td>{{ $transaction->earnings }}</td>
							<td>{{ $transaction->new_balance }}</td>
							<td><a href="{{ url('transactions/'.$transaction->id) }}">{{ ucfirst($transaction->type) }}</a></td>
							@if( !$account->name )
								<td><a href="{{ url('account/'.$transaction->account->id) }}">{{ $transaction->account->name }}</a></td>
							@endif
						</tr>
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<br>
			@include('home.maketransaction')
		</div>
	</div>
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#transactiontable').DataTable();
	});
</script>
@stop