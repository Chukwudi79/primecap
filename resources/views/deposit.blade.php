@extends('layout.layout')
@section('title') Home @endsection
@section('pageName')
MAKE A DEPOSIT
@endsection
@section('activeMakeDeposit')
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

						<script language="javascript">
							/* <!--
       function openCalculator(id) {

        w = 225;
        h = 400;
        t = (screen.height - h - 30) / 2;
        l = (screen.width - w - 30) / 2;
        window.open('?a=calendar&type=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" + w + ",height=" + h + ",resizable=1,scrollbars=0");



        for (i = 0; i < document.spendform.h_id.length; i++) {
         if (document.spendform.h_id[i].value == id) {
          document.spendform.h_id[i].checked = true;
         }
        }



       }

       function updateCompound() {
        var id = 0;
        var tt = document.spendform.h_id.type;
        if (tt && tt.toLowerCase() == 'hidden') {
         id = document.spendform.h_id.value;
        } else {
         for (i = 0; i < document.spendform.h_id.length; i++) {
          if (document.spendform.h_id[i].checked) {
           id = document.spendform.h_id[i].value;
          }
         }
        }

        var cpObj = document.getElementById('compound_percents');
        if (cpObj) {
         while (cpObj.options.length != 0) {
          cpObj.options[0] = null;
         }
        }

        if (cps[id] && cps[id].length > 0) {
         document.getElementById('coumpond_block').style.display = '';

         for (i in cps[id]) {
          cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
         }
        } else {
         document.getElementById('coumpond_block').style.display = 'none';
        }
       }
       var cps = {};
       --> */
						</script>

						<form method=post name="spendform" action="{{route('makeDeposit')}}">
							@csrf
							<input type="hidden" name="form_id" value="16296466876436">
							<input type="hidden" name="form_token" value="e2ba8bc029fde51a42f8f51c0ee5b80e">
							<input type=hidden name=a value=deposit>
							Select a plan:
							@if($errors->any())
							<h4 style="color: red;"> {{$errors->first()}}</h4>
							@endif
							
							<div class="my_accont">
								<div class="planRange">
									<table cellspacing=1 cellpadding=2 width=100% >
										<tr>
											<td colspan=3 >
												<input type=radio name=h_id value='1' checked onclick="updateCompound()">
												<!--	<input type=radio name=h_id value='1'  checked  > -->
												<b>TRIAL PLAN</b>
											</td>
										</tr>
										<tr>
											<td class=inheader>Plan</td>
											<td class=inheader width=200>Spent Amount ($)</td>
											<td class=inheader width=100 nowrap>
												<nobr> Profit (%)</nobr>
											</td>
										</tr>
										<tr>
											<td class=item >TRIAL PLAN</td>
											<td class=item align=right>$299.00 - $999.00</td>
											<td class=item align=right >15.00</td>
										</tr>
										<!-- <tr>
										<td colspan=3 align=right>
											<a href="javascript:openCalculator('1')">Calculate your profit </a>
										</td>
									</tr> -->
									</table>
									<script>
										cps[1] = [];
									</script>
									<br><br>
									<table cellspacing=1 cellpadding=2 border=0 width=100% >
										<tr>
											<td colspan=3>
												<input type=radio name=h_id value='2' onclick="updateCompound()">
												<!--	<input type=radio name=h_id value='2'  > -->

												<b>STARTER PLAN</b>
											</td>
										</tr>
										<tr>
											<td class=inheader>Plan</td>
											<td class=inheader width=200>Spent Amount ($)</td>
											<td class=inheader width=100 nowrap>
												<nobr> Profit (%)</nobr>
											</td>
										</tr>
										<tr>
											<td class=item >STARTER PLAN</td>
											<td class=item align=right>$1000.00 - $1999.00</td>
											<td class=item align=right >30.00</td>
										</tr>
										<!-- <tr>
										<td colspan=3 align=right><a href="javascript:openCalculator('2')">Calculate your profit </a></td>
									</tr> -->
									</table>
									<br><br>
									<script>
										cps[2] = [];
									</script>
									<table cellspacing=1 cellpadding=2 border=0 width=100% >
										<tr>
											<td colspan=3 >
												<input type=radio name=h_id value='3' onclick="updateCompound()">
												<!--	<input type=radio name=h_id value='3'  > -->

												<b>CLASSIC PLAN</b>
											</td>
										</tr>
										<tr>
											<td class=inheader>Plan</td>
											<td class=inheader width=200>Spent Amount ($)</td>
											<td class=inheader width=100 nowrap>
												<nobr> Profit (%)</nobr>
											</td>
										</tr>
										<tr>
											<td class=item >CLASSIC PLAN</td>
											<td class=item align=right>$2000.00 - $15000.00</td>
											<td class=item align=right >50.00</td>
										</tr>
										<!-- 	<tr>
										<td colspan=3 align=right><a href="javascript:openCalculator('3')">Calculate your profit </a></td>
									</tr> -->
									</table>
									<script>
										cps[3] = [];
									</script>
									<table cellspacing=1 cellpadding=2 border=0 width=100% >
										<tr>
											<td colspan=3 >
												<input type=radio name=h_id value='4' onclick="updateCompound()">
												<!--	<input type=radio name=h_id value='4'  > -->

												<b>PREMIUM PLAN</b>
											</td>
										</tr>
										<tr>
											<td class=inheader>Plan</td>
											<td class=inheader width=200>Spent Amount ($)</td>
											<td class=inheader width=100 nowrap>
												<nobr> Profit (%)</nobr>
											</td>
										</tr>
										<tr>
											<td class=item >PREMIUM PLAN</td>
											<td class=item align=right>$16000.00 - $25000.00</td>
											<td class=item align=right>70.00</td>
										</tr>
									<!-- 	<tr>
											<td colspan=3 align=right>
												<a href="javascript:openCalculator('4')">Calculate your profit </a>
											</td>
										</tr> -->
									</table>
									<script>
										cps[4] = [];
									</script>



								
									
									<script>
										cps[4] = [];
									</script>
								

									<table cellspacing=0 cellpadding=2 border=0 width=100% style="margin-bottom: 10px; ">
										<tr>
											<td>Your account balance ($):</td>
											<td align=right>${{auth()->user()->account->account_balance}}.00</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td align=right>
												<small>
												</small>
											</td>
										</tr>
										<tr>
											<td>Amount to Spend ($):</td>
											<td align=right><input type=text name=amount placeholder='Enter your deposit amount' class=inpts size=15 style="text-align:right;"></td>
										</tr>
										<tr id="coumpond_block" style="display:none">
											<td>Compounding(%):</td>
											<td align=right>
												<select name="compound" class=inpts id="compound_percents"></select>
											</td>
										</tr>

										<tr>
											<td colspan=2>
												<table cellspacing=0 cellpadding=2 border=0 width=90% >
													<tr>
														<td><input type=radio name=type value="process_48" checked></td>
														<td>Spend funds from Bitcoin</td>
														
													</tr>
												<!-- 	<tr>
														<td><input type=radio name=type value="process_18"></td>
														<td>Spend funds from PerfectMoney</td>
													</tr> -->
												</table>
											</td>
										</tr>
										<tr>
											<td colspan=2><input type=submit value="Continue" class=sbmt>
												@if($errors->any())
												<h4 style="color: red;"> {{$errors->first()}}</h4>
												@endif
											</td>
										</tr>
									</table>
								</div>
						</form>

						<script language=javascript>
							for (i = 0; i < document.spendform.type.length; i++) {
								if ((document.spendform.type[i].value.match(/^process_/))) {
									document.spendform.type[i].checked = true;
									break;
								}
							}
							updateCompound();
						</script>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

@endsection