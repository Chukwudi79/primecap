@extends('layout.layout')
@section('title')
User profile
@endsection
@section('pageName')
WITHDRAW FUNDS
@endsection
@section('activeEarningsHistory')
style="color: #ed9e92;"
@endsection

@section('content')
<div class="inside_wrap member_wrap">
	<div class="container">
		<div class="row">
			@include('includes.userSideBar')

			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="member-container">
					<div class="member-right">

						<div class="my_accont">


							<table cellspacing=0 cellpadding=2 border=0 width=100%>
								<tr>
									<td>Account Balance:</td>
									<td>$<b>{{auth()->user()->account->account_balance}}.00</b></td>
								</tr>

							</table>

							<table cellspacing=0 cellpadding=2 border=0 width=100%>
								<tr>
								
									
									<th>Bitcoin address</th>
									<th>Date Confirmed</th>
									<th>Amount</th>
								
								</tr>
								@foreach (auth()->user()->transactions as $transaction)
								@if ($transaction->is_sent)
								<tr>							
									<td><b style="color:green">{{ $transaction->bitcoin_wallet }}</b></td>
									<td><b style="color:red">{{ $transaction->updated_at }}</b></td>
									<td><b style="color:green">	{{ $transaction->amount }}</b></td>
																	
								</tr>
								@endif

								@endforeach
							</table>
	
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection