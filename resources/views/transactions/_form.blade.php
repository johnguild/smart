<div class="form-group">
	<label for="type">Type</label>
	<select id="type" name="type" class="form-control" style="width:auto;">
		<option value="padala" @if($type=='padala') selected @endif >Padala</option>
		<option value="encashment" @if($type=='encashment') selected @endif >Encashment</option>
	</select>
</div>

<div class="form-group">
	<label for="transacted-at">Date</label>
	<input type="datetime-local" id="transacted-at" name="transacted_at" class="form-control" style="width:auto;" value="{{ date('Y-m-d\TH:i:s') }}">
</div>

<div class="form-group">
	<label for="account-name">Account</label>
	<div class="form-inline">
		<select id="account-name" name="name" class="form-control col-md-6 col-xs-12">
			<option value="">Select account</option>
			@foreach ( $accounts as $account )
				<!-- <option value="{{ $account->id }}" data-accountname="{{ $account->name }}" data-accbalance="{{ $account->balance }}">{{ $account->account_number }}</option> -->
				<option value="{{ $account->name }}" data-accountid="{{$account->id}}" data-accnumber="{{$account->account_number}}""  data-accbalance="{{$account->balance}}">{{ $account->name }}</option>
			@endforeach
		</select>&nbsp
		<div class="form-group">
			<!-- <input type="text" id="name" name="name" class="form-control col-md-6 col-xs-12" value="{{ $transaction->name or old('name') }}" disabled="true" placeholder="Name"> -->
			<input type="hidden" id="account-id" name="account_id" class="form-control col-md-6 col-xs-12" value="{{ $transaction->account_id or old('account_id') }}"  placeholder="ID">
			<input type="text" id="account-number" name="account_number" class="form-control col-md-6 col-xs-12" value="{{ old('account_number') }}" disabled="true" placeholder="Number">
		</div>&nbsp
		<div class="form-group">
			<input type="text" id="balance" name="balance" class="form-control col-xs-12" value="{{ $transaction->balance or old('balance') }}" disabled="true" placeholder="Balance">
		</div>
	</div>
</div>
	
<script type="text/javascript">
	$(document).ready(function(){
		$('#account-name').change(function(){
			$('#account-id').val($(this).find(':selected').attr('data-accountid'));
			$('#account-number').val($(this).find(':selected').attr('data-accnumber'));
			$('#balance').val($(this).find(':selected').attr('data-accbalance'));
		});
	});
</script>

<div class="form-group">
	<label for="amount">Amount</label>
	<input type="text" id="amount" name="amount" class="form-control col-xs-12" value="{{ $transaction->amount or old('amount') }}">
</div>

<div class="form-group">
	<label for="mobile-receiver">Receivers' Mobile Number</label>
	<input type="text" id="mobile-receiver" name="mobile_receiver" class="form-control col-xs-12" value="{{ $transaction->mobile_receiver or old('mobile_receiver') }}">
</div>

@if($type != "encashment")
<div class="form-group">
	<label for="accnumber-receiver">Receivers' Account Number</label>
	<input type="text" id="accnumber-receiver" name="accnumber_receiver" class="form-control col-xs-12" value="{{ $transaction->accnumber_receiver or old('accnumber_receiver') }}">
</div>
@endif

<div class="form-group">
	<label for="reference">Reference</label>
	<input type="text" id="reference" name="reference" class="form-control col-xs-12" value="{{ $transaction->reference or old('reference') }}">
</div>

<div class="form-group">
	<label for="submit">&nbsp</label><br>
	<input type="submit" id="submit" name="submit" value="{{ $submitText }}" class="btn btn-primary col-md-4 col-xs-12">
</div>