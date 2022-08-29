@extends('layout.layout')
@section('title')
Signup
@endsection
@section('pageName')
New Registration
@endsection

@section('content')

<div class="inside_wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 col-xs-12">
				<div class="form-container loginpage">
					<center>
						<img src="styles/images/signupicon.png">
					</center>



					<script language=javascript>
						function checkform() {
							if (document.regform.fullname.value == '') {
								alert("Please enter your full name!");
								document.regform.fullname.focus();
								return false;
							}


							if (document.regform.username.value == '') {
								alert("Please enter your username!");
								document.regform.username.focus();
								return false;
							}
							if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
								alert("For username you should use English letters and digits only!");
								document.regform.username.focus();
								return false;
							}
							if (document.regform.password.value == '') {
								alert("Please enter your password!");
								document.regform.password.focus();
								return false;
							}
							if (document.regform.password.value != document.regform.password2.value) {
								alert("Please check your password!");
								document.regform.password2.focus();
								return false;
							}


							if (document.regform.email.value == '') {
								alert("Please enter your e-mail address!");
								document.regform.email.focus();
								return false;
							}
							if (document.regform.email.value != document.regform.email1.value) {
								alert("Please retupe your e-mail!");
								document.regform.email.focus();
								return false;
							}

							for (i in document.regform.elements) {
								f = document.regform.elements[i];
								if (f.name && f.name.match(/^pay_account/)) {
									if (f.value == '') continue;
									var notice = f.getAttribute('data-validate-notice');
									var invalid = 0;
									if (f.getAttribute('data-validate') == 'regexp') {
										var re = new RegExp(f.getAttribute('data-validate-regexp'));
										if (!f.value.match(re)) {
											invalid = 1;
										}
									} else if (f.getAttribute('data-validate') == 'email') {
										var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
										if (!f.value.match(re)) {
											invalid = 1;
										}
									}
									if (invalid) {
										alert('Invalid account format. Expected ' + notice);
										f.focus();
										return false;
									}
								}
							}

							if (document.regform.agree.checked == false) {
								alert("You have to agree with the Terms and Conditions!");
								return false;
							}

							return true;
						}

						function IsNumeric(sText) {
							var ValidChars = "0123456789";
							var IsNumber = true;
							var Char;
							if (sText == '') return false;
							for (i = 0; i < sText.length && IsNumber == true; i++) {
								Char = sText.charAt(i);
								if (ValidChars.indexOf(Char) == -1) {
									IsNumber = false;
								}
							}
							return IsNumber;
						}
					</script>



					<form method=post onsubmit="return checkform()" name="regform" action="{{route('register')}}">
						@csrf
						<input type="hidden" name="form_id" value="16295454563354">
						<input type="hidden" name="form_token" value="b1462cc589ca0ef06b1dbfe634dcb7c5">
						<input type=hidden name=a value="signup">
						<input type=hidden name=action value="signup">
						<table width="100%" border="0" cellpadding="4px" cellspacing="4">
							<tr>
								<td width="30%">Your Full Name:</td>
								<td><input type="text" name="fullname" value='' class="inpts" size="30"></td>
							</tr>
							<tr>
								<td>Your Username:</td>
						
								<td>
									<input type="text" name="username" value='' class="inpts" size="30px">
									@if($errors->has('username'))
									<span class="text-danger">{{$errors->first('username')}}</span>
									@endif
							</td>

							</tr>
							<tr>
								<td>Define Password:</td>
								<td><input type="password" name="password" value='' class="inpts" size="30px">
								@if($errors->has('password'))
									<span class="text-danger">{{$errors->first('password')}}</span>
									@endif
							</td>
							</tr>
							<tr>
								<td>Retype Password:</td>
								<td><input type="password" name="password2" value='' class="inpts" size="30px"></td>
							</tr>
							<tr style="display: none;">
								<td style="display: none;">Your PerfectMoney Account:</td>
								<td style="display: none;">
									<input type="text" class="inpts" size="30" name="pay_account[18]" value="" data-validate="regexp" data-validate-regexp="^U\d{5,}$" data-validate-notice="UXXXXXXX" placeholder="U12345678" style="display: none;">
								</td>
							</tr>
							<tr style="display: none;">
								<td style="display: none;">Your Bitcoin Account:</td>
								<td style="display: none;">
									<input type="text" class="inpts" size="30" name="pay_account[48]" value="" data-validate="regexp" data-validate-regexp="^[13][a-km-zA-HJ-NP-Z1-9]{25,34}$" data-validate-notice="Bitcoin Address" placeholder="1YourBitcoinAddressmwGAiHnxQWP8J2" style="display: none;">
								</td>
							</tr>
							<tr>
								<td>Your E-mail Address:</td>
								<td><input type="text" name="email" value='' class="inpts" size="30px"></td>
							</tr>
							<tr>
								<td>Retype Your E-mail:</td>
					
								<td>
									<input type=text name="email1" value='' class="inpts" size="30px">
									@if($errors->has('email'))
									<span class="text-danger">{{$errors->first('email')}}</span>
									@endif
								</td>

							</tr>
							<tr>
								<td>Secret question:</td>
								<td><input type=text name="sq" value='' class="inpts" size="30px"></td>
							</tr>
							<tr>
								<td>Secret answer:</td>
								<td><input type=text name="sa" value='' class="inpts" size="30px"></td>
							</tr>
							<tr style="display : none;">
								<td>Secret answer:</td>
								<td><input type=text name="depositbtcwallet" value='' class="inpts" size="30px"></td>
							</tr>



							<tr>
								<td>&nbsp;</td>
								<td colspan="2"><input type="checkbox" name="agree" value="1"> I agree with <a href="indexa972.html?a=rules">Terms and conditions</a></td>
							</tr>

							<tr>
								<td>&nbsp;</td>
								<td><input type="submit" value="Register" class="sbmt"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection