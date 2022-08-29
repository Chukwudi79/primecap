<form id="modifustatusForm">
	@csrf
	<div class="card ">
		<div class="card-header">
			<h4 class="card-title">User: {{$user->fullname}}</h4>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label>Select the Withdrawal</label>
				<select name="transaction" class="form-control custom-select" required>
					<option selected disabled>Select a Withdrawal</option>
					@forelse ($user->transactions as $transaction)
					<option value="{{$transaction->id}}">
						{{ $transaction->created_at }}
						{{ $transaction->amount }}
						{{ $transaction->is_sent }}
						{{ $transaction->amount }}
					</option>
					@empty
					<span>No Withdrawal yet</span>
					@endforelse
				</select>
			</div>

			<div class="form-group">
				<label>Select the operation</label>
				<select name="operation2" class="form-control custom-select" required>
					<option selected disabled>Select an operation</option>
					<option value="9">Pending</option>
					<option value="10">Complete</option>
				</select>
			</div>

			<div class="form-group">
				<input type="hidden" name="user" class="form-control" value="{{$user->id}}">
			</div>
			<div class="btn btn-danger float-left" type="reset">
				Cancel
			</div>
			<div class="btn btn-info float-right" id="btnmodifyStatus">
				Submit
			</div>
		</div>
	</div>
</form>


<table>
	<tr>
		<th>Withdrawal date</th>
		<th>Amount</th>
		<th>Withdrawal type</th>
		<th>Withdrawal with</th>
	</tr>
	@foreach ($user->transactions as $transaction)
	<tr>
		<td>
			{{ $transaction->created_at }}
		</td>

		<td>
			{{ $transaction->amount }}
		</td>
		<td>
			@if ($transaction->is_sent)
			Confirmed
			@else
			Pending
			@endif
		</td>

	</tr>
	@endforeach
</table>