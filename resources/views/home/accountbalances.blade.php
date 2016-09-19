<div class="panel panel-default">
    <div class="panel-heading">Accounts</div>
    
    <div class="panel-body">
        <table class="table-striped col-md-12  col-xs-12">
        @foreach( $accounts as $account )
            <tr>
                <td><a href="{{ url('accounts/'.$account->id) }}" class="plain-link">{{ $account->name }}</a></td>
                <td>P {{ number_format($account->balance, 2) }}</td>
            </tr>
        @endforeach
        </table>
    </div>
</div>