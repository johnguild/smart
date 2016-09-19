@extends('layouts.app')

@section('header')
	<title>Create New Account</title>
@stop

@section('content')
	<div class="container">
        <div class="col-md-8 col-xs-12">
        	<form method="POST" action="{{ url('accounts') }}" class="form">
        		{{ csrf_field() }}
        		@include('errors.validation')
        		@include('accounts._form', ['submitText'=>'Create Account'])
        	</form>
        </div>
        
        <div class="col-md-4">
            <br>
            @include('home.maketransaction')
        </div>
    </div>
@stop