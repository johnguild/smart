<table id="transactiontable" class="table">
<thead>
	<tr>
		<th>Date</th>
		<!-- <th>Account Balance</th> -->
		<!-- <th>Account Number</th>
		<th>Type</th>
		<th>Reference Number</th> -->
		<th>Amount</th>
		<th>Earning</th>
		<th>New Balance</th>
		<th>Type</th>
		<th>Account Holder</th>
	</tr>
</thead>
<tbody>
@foreach( $transactions as $transaction )
	<tr>
		<td>{{ $transaction->transacted_at }}</td>
		<!-- <td>{{ $transaction->balance }}</td> -->
		<!-- <td>{{ $transaction->account->account_number }}</td>
		<td>{{ ucfirst($transaction->type) }}</td>
		<td>{{ $transaction->reference }}</td> -->
		<td>P {{ number_format($transaction->amount, 2) }}</td>
		<td>P {{ number_format($transaction->earnings, 2) }}</td>
		<td>P {{ number_format($transaction->new_balance, 2) }}</td>
		<td><a href="{{ url('transactions/'.$transaction->id) }}">{{ ucfirst($transaction->type) }}</a></td>
		<td><a href="{{ url('accounts/'.$transaction->account->id) }}">{{ $transaction->account->name }}</a></td>
	</tr>
@endforeach
</tbody>
</table>
