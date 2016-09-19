@extends('layouts.app')

@section('header')
	<title>Transactions</title>
@stop

@section('content')
<div class="container">
    <div class="row">
    	<h1>All Transactions <small><a href="{{ url('transactions/create') }}" class="btn btn-primary">Create new</a></small></h1>

    	@include('transactions._table', ['transactions'=>$transactions])
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