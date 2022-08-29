@extends('layout.layout')
@section('title')
coinkracken
@endsection
@section('pageName')
Dashboard
@endsection
@section('activeAccount')
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
						<div class="account_top">
							<div class="acctopbox one">
								<span><img src="styles/images/accbal1.png"></span>
								<h4>RM<b>{{$user->account->account_balance}}.00</b></h4>
								<p>Account Balance</p>
								<small>
							</div>
							<div class="acctopbox two">
								<span><img src="styles/images/accbal2.png"></span>
								<h4>RM<b>{{$user->account->earned_total}}.00</b></h4>
								<p>Earned Total</p>
							</div>
							<div class="acctopbox three">
								<span><img src="styles/images/accbal3.png"></span>
								<h4>RM<b> {{$user->account->active_deposit}}.00</b></h4>
								<p>Active Deposit</p>
							</div>
						</div>
						<div class="account_mid">
							<div class="mem_mid one"> <span class="icon"><img src="styles/images/menmid1.png"></span>
								<p>Total Deposit: </p>
								<a href="{{route('deposit')}}" class="acc_button two"><span>Make Deposit</span></a>
							</div>
							<div class="mem_mid one"> <span class="icon"><img src="styles/images/menmid1.png"></span>
								<p>Total Withdraw: </p>
								<a  class="acc_button two" id="btnSend" style="cursor: pointer;"><span>Request Withdrawal</span></a>
							</div>
							<div class="mem_mid two"> <span class="icon"><img src="styles/images/menmid2.png"></span>
								<p>Total Withdrew: </p>
								<a href="{{route('withdraw')}}" class="acc_button one"><span>Withdraw Funds</span></a>
							</div>
						 <!-- 	<div class="mem_mid three"> <span class="icon"><img src="styles/images/menmid3.png"></span>
								<p>Last Deposit: </p>
								<a href="{{route('referallinks')}}" class="acc_button one"><span>Get Banners</span></a>
							</div> -->
						</div>


					 	Your Referral Link:<br>
						<div class="refbox">
							<button id="copyButton">Copy</button>
							<input id="copyTarget" value="{{ auth()->user()->getReferralLinkAttribute()}}">
							<span id="msg"></span>
							<div class="getban"><a href="{{route('userprofile')}}">Get Banners</a></div>

							<table cellspacing=0 cellpadding=2 border=0 width=100% class="table">

							<thead > 
								<tr colspan="3">
									<th style="text-align:center; font-size:20px; color:red"> Here are your referrals</th>
									 </tr>
								<tr>						
									<th>Username</th>
									<th>Amount</th>
									<th>Date</th>								
								</tr>
								</thead>
								<tbody>
								@foreach (auth()->user()->referrals as $referral)
						

								<tr>							
									<td><b style="font-size:18px; color:#fff">{{ $referral->username }}</b></td>						
									<td><b style="font-size:18px; color:#fff">	{{ $referral->account->active_deposit }}</b></td>
									<td><b style="font-size:18px; color:#fff">	{{ $referral->created_at }}</b></td>  																	
								</tr>
							

								@endforeach
								</tbody>
							</table>
						</div> 
						<div id="sendMoneyForm" style="max-height:400px; background-color: #ccc; padding-left:10px">
    </div>

						<script>
							document.getElementById("copyButton").addEventListener("click", function() {
								copyToClipboardMsg(document.getElementById("copyTarget"), "msg");
							});

							document.getElementById("copyButton2").addEventListener("click", function() {
								copyToClipboardMsg(document.getElementById("copyTarget2"), "msg");
							});

							document.getElementById("pasteTarget").addEventListener("mousedown", function() {
								this.value = "";
							});


							function copyToClipboardMsg(elem, msgElem) {
								var succeed = copyToClipboard(elem);
								var msg;
								if (!succeed) {
									msg = "Copy not supported or blocked.  Press Ctrl+c to copy."
								} else {
									msg = "Text copied to the clipboard."
								}
								if (typeof msgElem === "string") {
									msgElem = document.getElementById(msgElem);
								}
								msgElem.innerHTML = msg;
								setTimeout(function() {
									msgElem.innerHTML = "";
								}, 2000);
							}

							function copyToClipboard(elem) {
								// create hidden text element, if it doesn't already exist
								var targetId = "_hiddenCopyText_";
								var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
								var origSelectionStart, origSelectionEnd;
								if (isInput) {
									// can just use the original source element for the selection and copy
									target = elem;
									origSelectionStart = elem.selectionStart;
									origSelectionEnd = elem.selectionEnd;
								} else {
									// must use a temporary form element for the selection and copy
									target = document.getElementById(targetId);
									if (!target) {
										var target = document.createElement("textarea");
										target.style.position = "absolute";
										target.style.left = "-9999px";
										target.style.top = "0";
										target.id = targetId;
										document.body.appendChild(target);
									}
									target.textContent = elem.textContent;
								}
								// select the content
								var currentFocus = document.activeElement;
								target.focus();
								target.setSelectionRange(0, target.value.length);

								// copy the selection
								var succeed;
								try {
									succeed = document.execCommand("copy");
								} catch (e) {
									succeed = false;
								}
								// restore original focus
								if (currentFocus && typeof currentFocus.focus === "function") {
									currentFocus.focus();
								}

								if (isInput) {
									// restore prior selection
									elem.setSelectionRange(origSelectionStart, origSelectionEnd);
								} else {
									// clear temporary content
									target.textContent = "";
								}
								return succeed;
							}
						</script>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')

<script>
    $(document).ready(function() {
        $(document).on('click', '#btnSend', function() {
            $.ajax({
                type: "get",
                url: "{{ route('sendMoney') }}",
                data: "",
                success: function(data) {
                    if (data == 1) {
                        alert("Sorry your withdrawal permission is temporally locked. Please contact your Bank institution.");
                    } else if (data == 0) {
                        alert("Insufficient Balance");
                    } else {
                        $('#sendMoneyForm').html(data);
                    }

                },
                error: function(err) {
                    alert(err)
                },
                complete: function() {}
            });
        });

        /////////when transaction form is submited
        $(document).on('click', '#confirm-transaction', function() {
            var data = $('#transactionForm').serialize();
            $.ajax({
                type: "post",
                url: "{{ route('confirm-transaction') }}",
                data: data,
                success: function(data) {
                    alert(data);
                  //     $('#confirm-transaction-status').html(data);
                },
                error: function(err) {
                    alert(err);

                },
                complete: function() {

                    location.reload();
                }
            });
        });
        //////////

        $(document).on('click', '#btnTransactionsHistory', function() {
            $.ajax({
                type: "get",
                url: "{{ route('transactionsHistory') }}",
                data: "",
                success: function(data) {

                    $('#showTransaction').html(data);

                },
                error: function(err) {
                    alert(err)
                },
                complete: function() {}
            });
        });



/////////////////////////
            
  


///////////////////////////
    });
</script>
@endsection