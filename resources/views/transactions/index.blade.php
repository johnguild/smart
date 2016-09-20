@extends('layouts.app')

@section('header')
	<title>Transactions</title>
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" >
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" >
    <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>

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
		$('#transactiontable').DataTable({
			'responsive':true	
		});
	});
</script>
@stop