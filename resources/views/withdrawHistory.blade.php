@extends('layout.layout')
@section('title')
User profile
@endsection
@section('pageName')
WITHDRAWAL HISTORY
@endsection
@section('activeWithdrawalsHistory')
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


						<script language=javascript>
							function go(p) {
								document.opts.page.value = p;
								document.opts.submit();
							}
						</script>

						<div class="my_accont">
							<table cellspacing=0 cellpadding=0 border=0 width=100%>
								<tr>
									<td colspan=3>
										<h3>History:</h3>
									</td>

								</tr>
								<tr>
									<th>Withdrawal request date</th>
									<th>Amount</th>
									<th>Withdrawal status</th>
								<!-- 	<th>Sender / Receiver's Name</th> -->
								</tr>
								@foreach (auth()->user()->transactions as $transaction)
								<tr>
									<td>
										{{ $transaction->created_at }}
									</td>

									<td>
										{{ $transaction->amount }}
									</td>
									<td>
										@if ($transaction->is_sent)								
										Completed
										@else
										Pending
										@endif
									</td>

									<!-- <td>
										{{ $transaction->transaction_with }}
									</td> -->
								</tr>
								@endforeach
							</table>
							<!-- 	<tr>

									<form method=post name=opts>
										<input type="hidden" name="form_id" value="16297896282458">
										<input type="hidden" name="form_token" value="bdf7472ec48918ea5fdee24bfb614a51">
										<input type=hidden name=a value=history>
										<input type=hidden name=page value=1>
										<td>
											<select name=type class=inpts onchange="document.opts.submit();">
												<option value="">All transactions</option>
												<option value="deposit">Deposit</option>
												<option value="withdrawal" selected>Withdrawal</option>
												<option value="earning">Earning</option>
												<option value="commissions">Referral commission</option>
											</select>
											<br><img src=images/q.gif width=1 height=4><br>
											<select name=ec class=inpts>
												<option value=-1>All eCurrencies</option>
												<option value=18>PerfectMoney</option>
												<option value=48>Bitcoin</option>
											</select>
										</td>
										<td align=right>
											From: <select name=month_from class=inpts>
												<option value=1>Jan
												<option value=2>Feb
												<option value=3>Mar
												<option value=4>Apr
												<option value=5>May
												<option value=6>Jun
												<option value=7>Jul
												<option value=8 selected>Aug
												<option value=9>Sep
												<option value=10>Oct
												<option value=11>Nov
												<option value=12>Dec
											</select> &nbsp;
											<select name=day_from class=inpts>
												<option value=1>1
												<option value=2>2
												<option value=3>3
												<option value=4>4
												<option value=5>5
												<option value=6>6
												<option value=7>7
												<option value=8>8
												<option value=9>9
												<option value=10>10
												<option value=11>11
												<option value=12>12
												<option value=13>13
												<option value=14>14
												<option value=15 selected>15
												<option value=16>16
												<option value=17>17
												<option value=18>18
												<option value=19>19
												<option value=20>20
												<option value=21>21
												<option value=22>22
												<option value=23>23
												<option value=24>24
												<option value=25>25
												<option value=26>26
												<option value=27>27
												<option value=28>28
												<option value=29>29
												<option value=30>30
												<option value=31>31
											</select> &nbsp;

											<select name=year_from class=inpts>
												<option value=2011>2011
												<option value=2012>2012
												<option value=2013>2013
												<option value=2014>2014
												<option value=2015>2015
												<option value=2016>2016
												<option value=2017>2017
												<option value=2018>2018
												<option value=2019>2019
												<option value=2020>2020
												<option value=2021 selected>2021
											</select><br><img src=images/q.gif width=1 height=4><br>

											To: <select name=month_to class=inpts>
												<option value=1>Jan
												<option value=2>Feb
												<option value=3>Mar
												<option value=4>Apr
												<option value=5>May
												<option value=6>Jun
												<option value=7>Jul
												<option value=8 selected>Aug
												<option value=9>Sep
												<option value=10>Oct
												<option value=11>Nov
												<option value=12>Dec
											</select> &nbsp;
											<select name=day_to class=inpts>
												<option value=1>1
												<option value=2>2
												<option value=3>3
												<option value=4>4
												<option value=5>5
												<option value=6>6
												<option value=7>7
												<option value=8>8
												<option value=9>9
												<option value=10>10
												<option value=11>11
												<option value=12>12
												<option value=13>13
												<option value=14>14
												<option value=15>15
												<option value=16>16
												<option value=17>17
												<option value=18>18
												<option value=19>19
												<option value=20>20
												<option value=21>21
												<option value=22>22
												<option value=23>23
												<option value=24 selected>24
												<option value=25>25
												<option value=26>26
												<option value=27>27
												<option value=28>28
												<option value=29>29
												<option value=30>30
												<option value=31>31
											</select> &nbsp;

											<select name=year_to class=inpts>
												<option value=2011>2011
												<option value=2012>2012
												<option value=2013>2013
												<option value=2014>2014
												<option value=2015>2015
												<option value=2016>2016
												<option value=2017>2017
												<option value=2018>2018
												<option value=2019>2019
												<option value=2020>2020
												<option value=2021 selected>2021
											</select>

										</td>
										<td>
											&nbsp; <input type=submit value="Go" class=sbmt>
										</td>
								</tr>
							</table>
							</form> -->
						</div>
						<br><br>

						<div class="my_accont">
							<!-- <table cellspacing=1 cellpadding=2 border=0 width=100%>
								<tr>
									<td class=inheader><b>Type</b></td>
									<td class=inheader width=200><b>Amount</b></td>
									<td class=inheader width=170><b>Date</b></td>
								</tr>
								<tr>
									<td colspan=3 align=center>No transactions found</td>
								</tr>
								<tr>
									<td colspan=3>&nbsp;</td>

								<tr>
									<td colspan=2>Total:</td>
									<td align=right><b>$ 0.00</b></td>
								</tr>
							</table>
 -->
							<ul class="pagination">
								<li class="page-item"><a class="prev page-link disabled">&lt;&lt;</a></li>
								<li class="page-item active"><a class="page-link">1</a></li>
								<li class="page-item"><a class="next page-link disabled">&gt;&gt;</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

@endsection('content')