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
	<label for="account-id">Account Number</label>
	<div class="form-inline">
		<select id="account-id" name="account_id" class="form-control col-md-6 col-xs-12">
			<option value="">Select account</option>
			@foreach ( $accounts as $account )
				<option value="{{ $account->id }}" data-accountname="{{ $account->name }}" data-accbalance="{{ $account->balance }}">{{ $account->account_number }}</option>
			@endforeach
		</select>&nbsp
		<div class="form-group">
			<input type="text" id="name" name="name" class="form-control col-md-6 col-xs-12" value="{{ $transaction->name or old('name') }}" disabled="true" placeholder="Name">
		</div>&nbsp
		<div class="form-group">
			<input type="text" id="balance" name="balance" class="form-control col-xs-12" value="{{ $transaction->balance or old('balance') }}" disabled="true" placeholder="Balance">
		</div>
	</div>
</div>
	
<script type="text/javascript">
	$(document).ready(function(){
		$('#account-id').change(function(){
			$('#name').val($(this).find(':selected').attr('data-accountname'));
			$('#balance').val($(this).find(':selected').attr('data-accbalance'));
		});
	});
</script>

<div class="form-group">
	<label for="amount">Amount</label>
	<input type="text" id="amount" name="amount" class="form-control col-xs-12" value="{{ $transaction->amount or old('amount') }}">
</div>

<div class="form-group">
	<label for="mobile-reciever">Reciever's Mobile Number</label>
	<input type="text" id="mobile-reciever" name="mobile_reciever" class="form-control col-xs-12" value="{{ $transaction->mobile_reciever or old('mobile_reciever') }}">
</div>

<div class="form-group">
	<label for="reference">Reference</label>
	<input type="text" id="reference" name="reference" class="form-control col-xs-12" value="{{ $transaction->reference or old('reference') }}">
</div>

<div class="form-group">
	<label for="submit">&nbsp</label><br>
	<input type="submit" id="submit" name="submit" value="{{ $submitText }}" class="btn btn-primary col-md-4 col-xs-12">
</div>