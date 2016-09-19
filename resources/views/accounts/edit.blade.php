@extends('layouts.app')

@section('header')
	<title>Editig {{ $account->title }}</title>
@stop

@section('content')
	<div class="container">
        <div class="col-md-8 col-xs-12">
            <br>
        	<form method="POST" action="{{ url('accounts/'.$account->id) }}" class="form">
        		{{ method_field('PATCH') }}
        		{{ csrf_field() }}
        		@include('errors.validation')
                @include('accounts._form', ['submitText'=>'Save Changes'])
        	</form>
        </div>

        <div class="col-md-4">
            <br>
            @include('home.maketransaction')
        </div>
    </div>
@stop