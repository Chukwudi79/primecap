<!DOCTYPE html>
<html lang="en">

<head>
	@include('head')
	@yield('head')
	<title> @yield('title')</title>
</head>

<body>
	<div class="wrapper">
		<div class="headerwrap">
			<div class="container">

				<div class="row">
					<div class="col-lg-12">
						<div class="logowrap">

							<div class="nav_wrap">

								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i> </button>
								<a class="navbar-brand page-scroll hide" href="{{route('home')}}"><img src="styles/images/logo.png" alt="" /></a>
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">

										<li class="hvr-shrink"><a href="{{route('home')}}">Home</a></li>
										<li class="hvr-shrink"><a href="{{route('about')}}">About us</a></li>
										<li class="hvr-shrink"><a href="{{route('faq')}}">FAQ</a></li>
										<li class="hvr-shrink"><a href="{{route('contact')}}">Contact Us</a></li>
									</ul>
								</div>
								<div id="google_translate_element"></div>
							</div>
							<div class="servertime">SERVER TIME: <span id="clockbox"></span></div>
							<!-- <div class="headersocial">
								 	<a href="https://t.me/wealthycryptobiz" target="_blank"><img src="styles/images/telegram.png" alt=""></a>
															 <a href="https://www.facebook.com/groups/wealthycryptobiz" target="_blank"><img src="styles/images/facebookicon.png" alt=""></a>
														 
							</div> -->

							<div id="google_translate_element"></div>

							<div class="headerloginwrap">
								@auth
								@if (auth()->id()== 1 || auth()->id()== 2)
								<a href="{{route('dashboard')}}" class="login hvr-shrink">Admin Dashboard</a>
								@endif
								<a href="{{route('userprofile')}}" class="login hvr-shrink">Account</a>
								<a href="{{route('logout')}}" class="register hvr-shrink">Logout</a>
								@else
								<a href="{{route('login')}}" class="login hvr-shrink">login</a>
								<a href="{{route('signup')}}" class="register hvr-shrink">register</a>
								@endauth
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-12">
						<div class="bannercontent insideheaders">
							<div class="logo"><a href="{{route('home')}}"><img src="styles/images/btcprime-logo.jpeg" alt="" style=" width: 300px; height:200px; "></a></div>
						</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-12">

						<div class="pagenames">@yield('pageName')</div>
					</div>
				</div>
			</div>
		</div>


		<!--  @yield("membersidebar")
        <div class="membersidebar">
            <ul>
                <li><a href="{{route('userprofile')}}"><span><img src="styles/images/settings.png" alt="" /></span> Account Overview</a> </li>
                <li><a href="{{route('deposit')}}"><span><img src="styles/images/deposit.png" alt="" /></span> Make Deposit</a></li>
                <li><a href="{{route('depositlist')}}"><span><img src="styles/images/deposit-list.png" alt="" /></span> Your Deposits</a></li>
                <li><a href="{{route('deposithistory')}}"><span><img src="styles/images/history.png" alt="" /></span> Deposits History</a></li>
                <li><a href="{{route('withdraw')}}"><span><img src="styles/images/w-history.png" alt="" /></span> Withdraw Funds</a></li>
                <li><a href="{{route('earnings')}}"><span><img src="styles/images/money.png" alt="" /></span> Earnings History</a></li>
                <li><a href="{{route('withdrawhistory')}}"><span><img src="styles/images/history.png" alt="" /></span> Withdrawals History</a></li>
                <li><a href="{{route('referals')}}"><span><img src="styles/images/users.png" alt="" /></span> Your Referrals</a> </li>
                <li><a href="{{route('referallinks')}}"><span><img src="styles/images/banners.png" alt="" /></span> Banners</a></li>
                <li><a href="{{route('editaccount')}}"><span><img src="styles/images/settings.png" alt="" /></span> Edit Account</a> </li>
                <li><a href="{{route('logout')}}"><span><img src="styles/images/deposit-list.png" alt="" /></span> Logout</a></li>
            </ul>
        </div> -->

	</div>

	@yield("content")

<script type="text/javascript">
    window.$crisp=[];
    window.CRISP_WEBSITE_ID="7c17854f-07a6-4f70-833a-f6588787c6ef";
    (function(){d=document;s=d.createElement("script");
    s.src="https://client.crisp.chat/l.js";
    s.async=1;
    d.getElementsByTagName("head")[0].appendChild(s);
    })();
    </script>


	<div class="footerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="footercopyright">
						<p><a href="indexbc14.html?a=home"><img src="styles/images/logo.png" alt=""></a></p>
						<p>&copy; Copyright 2020. Primeservice.COM All Rights Reserved</p>
						<!-- <p><a href="#" target="_blank"><img src="styles/images/telegram.png" alt=""></a>
							<a href="#" target="_blank"><img src="styles/images/facebookicon.png" alt=""></a>
						</p> -->
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="usefullinks">
						<h4>USEFUL LINKS</h4>
						<ul>
							<li><a href="{{route('about')}}">About Us</a></li>
							<li><a href="{{route('faq')}}">FAQ</a></li>
							<li><a href="{{route('contact')}}">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="companyinfos">
						<h4>company information</h4>
						<p class="footeraddress">Primeservice Corporation, Labuan, WP Labuan 87007 Malaysia./p>
						<p class="footerphone">+60 11-2881 4675</p>
						<p class="footeremail">SUPPORT@Primeservice.COM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="footersecurity"><img src="styles/images/footercomodo.png" alt=""></div>
					<div class="footersecurity"><img src="styles/images/footerantidds.png" alt=""></div>
					<div class="footersecurity"><img src="styles/images/footerdedicatedserver.png" alt=""></div>
				</div>
			</div>
		</div>
	</div>
	</div>




	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'en',
				layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
			}, 'google_translate_element');
		}

		</script>

	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="cc941b74-4df0-4296-8cb9-035e3d4c72e2";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script type="text/javascript">
		(function(){
			var toReplace = '$';
			var replaceWith ='RM';
			document.body.innerHTML = document.body.innerHTML.replace(toReplace, replaceWith);
			console.log('We are here');
		})();
	</script>
	@yield('script')
</body>

<!-- Mirrored from crowncapital.ltd/?a=signup by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Aug 2021 11:31:47 GMT -->

</html>


<div style="    position: fixed;bottom: 20px; left: 0px;right: 0px;height:62px; background-color: #24262e; overflow:hidden; box-sizing: border-box;border-radius: 4px; text-align: right; line-height:14px; block-size:36px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; padding: 0px;width: 100%;margin-bottom: -21px;">
	<div style="height:40px; padding:0px; margin:0px; width: 100%;">
		<iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=light&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
	</div>
	<div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
		<a href="https://coinlib.io/" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib
	</div>
</div>