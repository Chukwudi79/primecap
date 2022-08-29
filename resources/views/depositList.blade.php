@extends('layout.layout')
@section('title')
User profile
@endsection
@section('pageName')
DEPOSIT PLAN
@endsection
@section('activeYourDeposits')
style="color: #ed9e92;"
@endsection

@section('content')

<script>
	$(document).ready(function() {

		var actDe = document.getElementById('activeB').innerHTML;
		var actDeToInt = parseInt(actDe);

		if (actDeToInt > 500) {
			document.getElementById('TRIALP').innerHTML = "You have completed this plan";
		} else if (actDeToInt >= 200 && actDeToInt < 500) {
			document.getElementById('TRIALP').innerHTML = "You are currently on Trial Plan."
		} else {
			document.getElementById('TRIALP').innerHTML = "You have completed this plan."
		}

		if (actDeToInt > 1000) {
			document.getElementById('STARTERP').innerHTML = "You have completed this plan";
		} else if (actDeToInt >= 600 && actDeToInt < 1000) {
			document.getElementById('STARTERP').innerHTML = "You are currently on Starter Plan.";
		} else {
			document.getElementById('STARTERP').innerHTML = "No deposit for this plan"
		}


		if (actDeToInt > 4000) {
			document.getElementById('CLASSICP').innerHTML = "You have completed this plan";
		} else if (actDeToInt >= 2000 && actDeToInt < 4000) {
			document.getElementById('CLASSICP').innerHTML = "You are currently on Clasic Plan.";
		} else {
			document.getElementById('CLASSICP').innerHTML = "No deposit for this plan"
		}


		if (actDeToInt > 8000) {
			document.getElementById('PREMIUMP').innerHTML = "You have completed this plan";
		} else if (actDeToInt >= 5000 && actDeToInt < 8000) {
			document.getElementById('PREMIUMP').innerHTML = "You are currently on Premium Plan.";
		} else {
			document.getElementById('PREMIUMP').innerHTML = "No deposit for this plan"
		}

		if (actDeToInt > 40000) {
			document.getElementById('EXECUTIVEP').innerHTML = "You have completed this plan";
		} else if (actDeToInt >= 10000 && actDeToInt < 40000) {
			document.getElementById('EXECUTIVEP').innerHTML = "You are currently on Executive Plan.";
		} else {
			document.getElementById('EXECUTIVEP').innerHTML = "No deposit for this plan"
		}

		if (actDeToInt == 100000) {
			document.getElementById('GLOBALP').innerHTML = "Congraturation !! you have reached Global Ambassador Plan.";
		} else if (actDeToInt >= 50000 && actDeToInt < 100000) {
			document.getElementById('GLOBALP').innerHTML = "You are currently on Global Ambassador Plan.";
		} else{
			document.getElementById('GLOBALP').innerHTML = "No deposit for this plan"
		}

	});
</script>

<div class="inside_wrap member_wrap">
	<div class="container">
		<div class="row">
			@include('includes.userSideBar')
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="member-container">
					<div class="member-right">
						<div id="activeB" style="display:none"> {{auth()->user()->account->active_deposit}}</div>
						<div class="account_header">Total: <span>$<b>{{auth()->user()->account->active_deposit}}.00 </b></span></div>

						<div class="my_accont">

							<table cellspacing=1 cellpadding=2 border=0 width=100% class=line>
								<tr>
									<td class=item>
										<table cellspacing=1 cellpadding=2 border=0 width=100%>
											<tr>
												<td colspan=3 align=center><b>TRIAL PLAN</b></td>
											</tr>
											<tr>
												<td class=inheader>Plan</td>
												<td class=inheader width=200>Deposit Amount</td>
												<td class=inheader width=100 nowrap>
													<nobr> Profit (%)</nobr>
												</td>
											</tr>
											<tr>
												<td class=item>TRIAL PLAN</td>
												<td class=item align=right>$200.00 - $500.00</td>
												<td class=item align=right>15.00</td>
											</tr>
										</table>
										<br>


										<table cellspacing=1 cellpadding=2 border=0 width=100%>
											<tr>
												<td colspan=4><b id="TRIALP"></b>
												</td>
											</tr>
										</table>
										<br>
									</td>
								</tr>
							</table>
							<br>
							<table cellspacing=1 cellpadding=2 border=0 width=100% class=line>
								<tr>
									<td class=item>
										<table cellspacing=1 cellpadding=2 border=0 width=100%>
											<tr>
												<td colspan=3 align=center><b>STARTER PLAN</b></td>
											</tr>
											<tr>
												<td class=inheader>Plan</td>
												<td class=inheader width=200>Deposit Amount</td>
												<td class=inheader width=100 nowrap>
													<nobr> Profit (%)</nobr>
												</td>
											</tr>
											<tr>
												<td class=item>STARTER PLAN</td>
												<td class=item align=right>$600.00 - $1000.00</td>
												<td class=item align=right>30.00</td>
											</tr>
										</table>
										<br>
										<table cellspacing=1 cellpadding=2 border=0 width=100%>
											<tr>
												<td colspan=4><b id="STARTERP">No deposits for this plan</b></td>
											</tr>
										</table>
										<br>
									</td>
								</tr>
							</table>
							<br>
							<table cellspacing=1 cellpadding=2 border=0 width=100% class=line>
								<tr>
									<td class=item>
										<table cellspacing=1 cellpadding=2 border=0 width=100%>
											<tr>
												<td colspan=3 align=center><b>CLASSIC PLAN</b></td>
											</tr>
											<tr>
												<td class=inheader>Plan</td>
												<td class=inheader width=200>Deposit Amount</td>
												<td class=inheader width=100 nowrap>
													<nobr> Profit (%)</nobr>
												</td>
											</tr>
											<tr>
												<td class=item>CLASSIC PLAN</td>
												<td class=item align=right>$2000.00 - $4000.00</td>
												<td class=item align=right>50.00</td>
											</tr>
										</table>
										<br>
										<table cellspacing=1 cellpadding=2 border=0 width=100%>
											<tr>
												<td colspan=4><b id="CLASSICP">No deposits for this plan</b></td>
											</tr>
										</table>
										<br>
									</td>
								</tr>
							</table>
							<br>
							<table cellspacing=1 cellpadding=2 border=0 width=100% class=line>
								<tr>
									<td class=item>
										<table cellspacing=1 cellpadding=2 border=0 width=100%>
											<tr>
												<td colspan=3 align=center><b>PREMIUM PLAN</b></td>
											</tr>
											<tr>
												<td class=inheader>Plan</td>
												<td class=inheader width=200>Deposit Amount</td>
												<td class=inheader width=100 nowrap>
													<nobr> Profit (%)</nobr>
												</td>
											</tr>
											<tr>
												<td class=item>PREMIUM PLAN</td>
												<td class=item align=right>$5000.00 - $8000.00</td>
												<td class=item align=right>70.00</td>
											</tr>
										</table>
										<br>
										<table cellspacing=1 cellpadding=2 border=0 width=100%>
											<tr>
												<td colspan=4><b id="PREMIUMP">No deposits for this plan</b></td>
											</tr>
										</table>
										<br>
									</td>
								</tr>
							</table>
							<br>
							<table cellspacing=1 cellpadding=2 border=0 width=100% class=line>
								<tr>
									<td class=item>
										<table cellspacing=1 cellpadding=2 border=0 width=100%>
											<tr>
												<td colspan=3 align=center><b>EXECUTIVE PLAN</b></td>
											</tr>
											<tr>
												<td class=inheader>Plan</td>
												<td class=inheader width=200>Deposit Amount</td>
												<td class=inheader width=100 nowrap>
													<nobr> Profit (%)</nobr>
												</td>
											</tr>
											<tr>
												<td class=item> EXECUTIVE PLAN</td>
												<td class=item align=right>$10000.00 - $40000.00.00</td>
												<td class=item align=right>80.00</td>
											</tr>
										</table>
										<br>
										<table cellspacing=1 cellpadding=2 border=0 width=100%>
											<tr>
												<td colspan=4><b id="EXECUTIVEP">No deposits for this plan</b></td>
											</tr>
										</table>
										<br>
									</td>
								</tr>
							</table>
							<br>

							<table cellspacing=1 cellpadding=2 border=0 width=100% class=line>
								<tr>
									<td class=item>
										<table cellspacing=1 cellpadding=2 border=0 width=100%>
											<tr>
												<td colspan=3 align=center><b>GLOBAL AMBASSADOR PLAN</b></td>
											</tr>
											<tr>
												<td class=inheader>Plan</td>
												<td class=inheader width=200>Deposit Amount</td>
												<td class=inheader width=100 nowrap>
													<nobr> Profit (%)</nobr>
												</td>
											</tr>
											<tr>
												<td class=item>GLOBAL AMBASSADOR PLAN</td>
												<td class=item align=right>$50000.00 - $100000.00</td>
												<td class=item align=right>100.00</td>
											</tr>
										</table>
										<br>
										<table cellspacing=1 cellpadding=2 border=0 width=100%>
											<tr>
												<td colspan=4><b id="GLOBALP">No deposits for this plan</b></td>
											</tr>
										</table>
										<br>
									</td>
								</tr>
							</table>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection