@extends('layouts.app')

@section('header')
    <title>Smart Padala</title>
@stop

@section('content')
<div class="container">
    <div class="row">
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

        <div class="col-md-4">
            <br>
            @include('home.maketransaction')
            @include('home.accountbalances',
                    ['accounts'=>$accounts])
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.account-monthly-total').each(function(){
            var panel = $(this);
            panel.find('.account-monthly-breakdown').click(function(){
                $(this).text(function(i, text){
                    return text === "show breakdown" ? "hide breakdown" : "show breakdown";
                });
                panel.find('.breakdown-table').toggle('1000');
            });
        });
    });
</script>
@stop