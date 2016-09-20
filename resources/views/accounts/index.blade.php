@extends('layouts.app')

@section('header')
	<title>Accounts</title>
@stop

@section('content')
<div class="container">
    <div class="col-md-8">
    	<h1>All Accounts <small><a href="{{ url('accounts/create') }}" class="btn btn-primary">Add new</a></small></h1>

    	@foreach( $accounts as $account )
				<div class="account-container col-md-10 col-xs-12">
					<h4><a href="{{ url('accounts/'.$account->id) }}" class="plain-link account-link">{{ $account->name }}</a></h4>
					Account number : <strong>{{ $account->account_number }}</strong><br>
					Mobile number : <strong>{{ $account->mobile_number }}</strong><br>
					Balance : <b>{{ $account->balance }}</b	><br>
					<div class="text-right form-inline">
						<a href="{{ url('accounts/'.$account->id.'/balance/widthraw') }}" class="btn btn-primary bank-action">Widthraw</a>
						<a href="{{ url('accounts/'.$account->id.'/balance/deposit') }}" class="btn btn-warning bank-action">Deposit</a>
					</div>
				</div>
    	@endforeach
    	<div style="clear:both;"></div>
    </div>

    <div class="col-md-4 col-xs-12 right-sidebar">
    	<br>
        @include('home.maketransaction')
    </div>
</div>
@stop