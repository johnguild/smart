<div class="form-group">
	<label for="name">Name</label>
	<input type="text" id="name" name="name" class="form-control col-xs-12" value="{{ $account->name or old('name') }}">
</div>

<div class="form-group">
	<label for="account-number">Account #</label>
	<input type="text" id="account-number" name="account_number" class="form-control col-xs-12" value="{{ $account->account_number or old('account_number') }}">
</div>

<div class="form-group">
	<label for="mobile-number">Mobile #</label>
	<input type="text" id="mobile-number" name="mobile_number" class="form-control col-xs-12" value="{{ $account->mobile_number or old('mobile_number') }}">
</div>


<div class="form-group">
	<label for="submit">&nbsp</label><br>
	<input type="submit" id="submit" name="submit" value="{{ $submitText }}" class="btn btn-primary col-md-4 col-xs-12">
</div>