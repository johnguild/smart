<div class="panel {{ $classes }} account-monthly-total">
	<div class="panel-heading label-success account-btn col-md-12"><b>{{ $title }}</b>
	    <div class="navbar-right" style="margin-right:3px;">
	        <a class="plain-link account-monthly-breakdown">show breakdown</a>
	    </div>
	</div>
	<div class="panel-body">
		<br><br>
	    @include('reports._monthlytable', 
	    	[ 'totals'=>$totals, 'id'=>$id, 'year'=>$year ])
	</div>
</div>