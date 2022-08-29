<!-- Button trigger modal -->
<button style="display: none" type="button" id="block3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
</button>

<!- Modal ->
	<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel3">Delete Deposit Request 
						<!-- <small> DateCreated: {{$deposit->created_at}}
							TransactionAccount: {{$deposit->amount}}
							TransactionWith: {{$deposit->deposit_request_id}}</small>
					</h5> -->
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Are You sure you want to delete this Deposit request?
				</div>
				<form id="deleteTransactionForm">
					@csrf
					<div class="form-group">
						<input type="hidden" name="deposit" class="form-control" value="{{$deposit->id}}">
					</div>
				</form>

				<div class="modal-footer">
					<div type="button" class="btn btn-secondary float-left" data-bs-dismiss="modal">Cancel</div>
					<div type="button" id="deleteTransactionbtn" class="btn btn-primary float-right">Yes</div>
				</div>
			</div>
		</div>
	</div>