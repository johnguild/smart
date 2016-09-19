@extends('layouts.app')

@section('header')
	<title>Manage Account Balance</title>
@stop

@section('content')
	<div class="container">
		<div class="col-md-8">
			<h3>{{ ucfirst($account->name) }}</h3>

			@include('errors.validation')
			<form method="POST" action="{{ url('accounts/'.$account->id.'/'.$type) }}" class="form">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}
				<div class="form-group">
					Current Balance
					<label id="balance">{{ $account->balance }}</label>
				</div>
				<div class="form-group">
					<label for="amount">Amount</label>
					<input type="type" id="amount" name="amount" class="form-control" value="{{ old('amount') }}">
				</div>
				<div class="form-group">
				<input type="submit" name="submit" value="{{ ucfirst($type) }}" class="btn btn-primary">
				</div>
			</form>
		</div>

		<div class="col-md-4">
			<br>
            @include('home.maketransaction')
            @include('home.accountbalances',
            		['accounts'=>$accounts])
        </div>
	</div>
@stop