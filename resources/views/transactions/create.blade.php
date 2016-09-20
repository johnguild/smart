@extends('layouts.app')

@section('header')
	<title>Create New Transaction</title>
@stop

@section('content')
	<div class="container">
        <div class="col-md-8 col-xs-12">
        	<form method="POST" action="{{ url('transactions') }}" class="form">
        		{{ csrf_field() }}
        		@include('errors.validation')
        		@include('transactions._form', ['submitText'=>'Submit', 'accounts'=>$accounts] )
        	</form>
        </div>

        <div class="col-md-4 col-xs-12 right-sidebar">
            <br>
            @include('home.accountbalances',
                    ['accounts'=>$accounts])
        </div>
    </div>
@stop