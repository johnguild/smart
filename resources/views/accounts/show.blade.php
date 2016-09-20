@extends('layouts.app')

@section('header')
	<title>{{ $account->name }}</title>
@stop

@section('content')
	<div class="container">
		<div class="col-md-8">
			
			<h1>{{ $account->name }} 
				<small>
					<div class="navbar-right account-show">
						<a href="{{ url('accounts/'.$account->id.'/edit') }}" class="btn btn-default" >Edit</a>
						<!-- <form method="POST" action="{{ url('accounts/'.$account->id) }}" >
							{{ method_field('DELETE') }}
							{{ csrf_field() }}			
							<input type="submit" name="submit" value="Delete" class="btn btn-danger">
						</form> -->
						@include('others.deleteitem',
								['item_url'=>url('accounts/'), 'item_id'=>$account->id, 'item_name'=>'account'])
					</div>
				</small>
			</h1>
			
			Account number : <strong>{{ $account->account_number }}</strong><br>
			Mobile number : <strong>{{ $account->mobile_number }}</strong><br>
			Balance : <b>P {{ number_format($account->balance, 2) }}</b	><br>
			<a href="{{ url('accounts/'.$account->id.'/balance/widthraw') }}" class="plain-link btn btn-primary bank-action">Widthraw</a>
			<a href="{{ url('accounts/'.$account->id.'/balance/deposit') }}" class="plain-link btn btn-warning bank-action">Deposit</a>
			
			<br><br>
			<div class="panel">
				@include('reports._monthlypanel', 
	                        ['title'=>$account->name.' Account',
	                         'totals'=>$account->monthly,
	                         'id'=>$account->id,
	                         'year'=>$year,
	                         'classes'=>'panel-info',
	                         'breakdown'=>true])
			</div>
		</div>

		<div class="col-md-4 col-xs-12 right-sidebar">
			<br>
            @include('home.maketransaction')
        </div>
    </div>
@stop

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