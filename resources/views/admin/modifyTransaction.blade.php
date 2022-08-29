<div class="contact-main">
	<div class="container">
		<!-- Content Row -->
		<div class="row">
			<!-- Map Column -->
			<div class="col-lg-8 mb-4 contact-left">
				<h3>Confirm a deposit</h3>
				<form id="modifyTransactionForm">
					@csrf
					<div class="control-group form-group">
						<label>Created AT </label>
						<div class="controls">
							<input type="hidden" name="depositId" value="{{$deposit->id}}">
							<input type="hidden" name="user" value="{{$user}}">
							<input name="depositDate" type="text" value="{{$deposit->created_at}}" class="form-control" required data-validation-required-message="Please enter the transaction date.">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<label for="amount">Amount</label>
						<div class="controls">
							<input name="depositAmount" type="text" value="{{$deposit->amount}}" class="form-control" required data-validation-required-message="Please enter the transaction amount.">
						</div>
					</div>
					<div class="control-group form-group">
						<label for="transactionType">Deposit Status</label>

						<div class="controls">
							<select name="depositType" class="form-control custom-select" required>
								<option value="{{$deposit->confirmed}}">Sellect to confirm deposit</option>
								<option value="1">Complete</option>
								<option value="0">Not Complete</option>
							</select>
						</div>
					</div>
					<div class="control-group form-group">
						<label for="transactionWith">Request Deposit ID</label>
						<div class="controls">
							<input name="transactionWith" type="text" value="{{$deposit->deposit_request_id}}" class="form-control" required data-validation-required-message="Please enter the sender/receiver's name.">
						</div>
					</div>

					<button type="submit" class="btn btn-primary" id="modifyTransaction">Save changes</button>
				</form>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</div>