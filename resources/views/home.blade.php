@extends('layouts.app')

@section('header')
    <title>Smart Padala</title>
@stop

@section('content')
<div class="container">
    <div class="col-md-8">
        <br>
        @include('reports._monthlypanel', 
            ['title'=>'This Year Current Earnings',
             'totals'=>$totals,
             'id'=>null,
             'year'=>$year,
             'classes'=>'panel-success'])

        @foreach( $accounts as $account )
            @if($account->monthly)
                @include('reports._monthlypanel', 
                    ['title'=>$account->name.' Account',
                     'totals'=>$account->monthly,
                     'id'=>$account->id,
                     'year'=>$year,
                     'classes'=>'panel-info'])
            @endif
        @endforeach     
    </div>

    <div class="col-md-4 col-xs-12 right-sidebar">
        <br>
        @include('home.maketransaction')
        @include('home.accountbalances',
                ['accounts'=>$accounts])
    </div>
</div>
@endsection

@section('script')
    
@stop