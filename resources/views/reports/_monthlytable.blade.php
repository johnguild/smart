<table class="col-md-12">
	<tr>
		<td class="col-md-6 col-xs-12"><b>Total Earnings</b></td>
		<td class="col-md-6 col-xs-12" style="text-align:center;font-size:14px;"><span class="earning">P {{ number_format(array_sum($totals), 2) }}</span></td>
	</tr>
</table>
<table class="table col-md-12 breakdown-table" style="display:none;">
	<thead>
		<tr>
			<td class="col-md-6 col-xs-12"><i>Month</i></td>
			<td class="col-md-6 col-xs-12 text-center"><i>Subtotal</i></td>
		</tr>
	</thead>
	<tbody>
		@foreach( $totals as $key => $month )
			<tr>
				<td class="col-md-6 col-xs-12"><a href="{{ url('transactions/reports/'.$year.'/'.strtolower($key).'/'.$id) }}">{{ $key }}</a></td>
				<td class="col-md-6 col-xs-12 text-center">P {{ $month }}</td>
			</tr>
		@endforeach
	</tbody>
</table>