@extends('layout.layout')
@section('title')
coinkracken
@endsection
@section('pageName')
HOME
@endsection

@section('content')

<div class="investmentwrap">
	<div class="container">
		<div class="row">
			<h2>Investment <span>Plans</span></h2>
			<div class="col-lg-12">
				<div class="planwrap">
					<div class="planbox">
						<div class="icon"><img src="styles/images/planicon1.png" alt=""></div>
						<div class="planpercent">15<span>%</span></div>
						<div class="minmax">min deposit: $200</div>
						<div class="minmax">Max deposit: $500</div>
						<div class="plan">TRIAL PLAN</div>
					</div>
					<div class="planbox">
						<div class="icon"><img src="styles/images/planicon2.png" alt=""></div>
						<div class="planpercent">30<span>%</span></div>
						<div class="minmax">min deposit: $600</div>
						<div class="minmax">max deposit: $1000</div>
						<div class="plan">STARTER PLAN</div>
					</div>
					<div class="planbox">
						<div class="icon"><img src="styles/images/planicon3.png" alt=""></div>
						<div class="planpercent">50<span>%</span></div>
						<div class="minmax">min deposit: $2000</div>
						<div class="minmax">max deposit: $4000</div>
						<div class="plan">CLASSIC PLAN</div>
					</div>
					<div class="planbox">
						<div class="icon"><img src="styles/images/planicon4.png" alt=""></div>
						<div class="planpercent">70<span>%</span></div>
						<div class="minmax">min deposit: $5000</div>
						<div class="minmax">max deposit: $8000</div>
						<div class="plan">PREMIUM PLAN</div>
					</div>
					<div class="planbox" >
						<div class="icon"><img src="styles/images/planicon4.png" alt=""></div>
						<div class="planpercent">80<span>%</span></div>
						<div class="minmax">min deposit: $10000</div>
						<div class="minmax">max deposit: $40000</div>
						<div class="plan">EXECUTIVE PLAN</div>
					</div>
					<div class="planbox">
						<div class="icon"><img src="styles/images/planicon4.png" alt=""></div>
						<div class="planpercent">100<span>%</span></div>
						<div class="minmax">min deposit: $50000</div>
						<div class="minmax">max deposit: $100000</div>
						<div class="plan">GLOBAL AMBASSADOR PLAN</div>
					</div>
				</div>

				<!-- latest statics area start -->
				<div class="services-area area-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="section-headline text-center">
								<!-- 	<h3>Live Chart <span class="color">AIRCOINFX Currency</span></h3> -->
									<p></p>
								</div>
								<div class="post2">
								 	<script type="text/javascript"> 
										baseUrl = "https://widgets.cryptocompare.com/";
										var scripts = document.getElementsByTagName("script");
										var embedder = scripts[scripts.length - 1];
										(function() {
											var appName = encodeURIComponent(window.location.hostname);
											if (appName == "") {
												appName = "local";
											}
											var s = document.createElement("script");
											s.type = "text/javascript";
											s.async = true;
											var theUrl = baseUrl + 'serve/v3/coin/chart?fsym=BTC&tsyms=USD,EUR,CNY,GBP';
											s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
											embedder.parentNode.appendChild(s);
										})();
									</script> 
								</div>
							</div>
						</div>
						<br>
					</div>
				</div>
			</div>
			<div class="aboutwrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="aboutthumb"><img src="styles/images/aboutthumb.png" alt=""></div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12">
							<div class="abouttexts">
								<h2><span>about</span> Primeservice ltd</h2>
								<p>We are aircoin forex, a United States-based company involved in cryptocurrency trading and mining. 
									It's a very profitable business, and this kind of activity brings us a decent income. 
									Nevertheless, cryptocurrency trading is not for the weak - hearted, the crypto markets are fast paced and volatile.
									 There are risks in trading. Similarly, there are risks in mining. 
									 But, as Steve Jobs said, the only way to do great work is to love what you do. 
									 Our company is made up of digital currency enthusiasts, and we completely commit ourselves to our business. 
									 We love what we do as innovation professionals. We continuously research and integrate effective trading patterns.
									  Our innovative approaches have attracted to us a number of top traders who 
										demonstrate excellent long term performance. 
										We also monitor the growing market of cryptocurrency, the list of the currencies used 
										in work constantly extends. We invite you to join us on this journey! With investment support,
										 we can not only expand our borders, but also increase returns. The Primeservice ltd
										 company has all the necessary tools, intellectual and temporal resources to manage the assets of our investors. 
										 All our activities are based on the interest to maximize the return for our partners, 
										 while minimizing the risks involved. Time is valuable, 
										 but it is even more valuable on the cryptocurrency market. Do not waste your time, join us! </p>
								<a href="?a=cust&page=about" target="_blank" class="hvr-sink">more info</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="commissionbox">
					<div class="thumb"><img src="styles/images/referralthumb.png" alt=""></div>
					<h3>5% referral</h3>
					<h2>commission</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="onlinestatwrap">
	<div class="container">
		<div class="row">
			<h2 class="zoomIn wow"><span>online</span> statistics</h2>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="onlinestatbox hvr-shrink"> <span><img src="styles/images/staticon1.png" alt=""></span>
					<p>RUNNING DAYS</p>
					<h3>3886</h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="onlinestatbox"> <span><img src="styles/images/staticon2.png" alt=""></span>
					<p>TOTAL DEPOSITS</p>
					<h3>$ 602212678.75</h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="onlinestatbox"> <span><img src="styles/images/staticon3.png" alt=""></span>
					<p>total withdraw</p>
					<h3>$ 570593941.07</h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="onlinestatbox"> <span><img src="styles/images/staticon6.png" alt=""></span>
					<p>TOTAL ACCOUNTS</p>
					<h3>3573</h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="onlinestatbox"> <span><img src="styles/images/staticon7.png" alt=""></span>
					<p>ACTIVE ACCOUNTS</p>
					<h3>3472</h3>
				</div>
			</div>

			 <!-- <iframe frameborder=0 height=400 width=100% scrolling=no src='https://forex-grow.ltd/uniload/deposit.php'></iframe>  -->

<br><br>
			<div class="footerpayments">
				<div class="container">
					<div class="row">
						<div class="col-lg-12"> <span><img src="styles/images/payment/pm.png" alt="">
								<h4>PerfectMoney</h4>
							</span> <span><img src="styles/images/payment/payeer.png" alt="">
								<h4>Payeer</h4>
							</span> <span><img src="styles/images/payment/bitcoin.png" alt="">
								<h4>Bitcoin</h4>
							</span> <span><img src="styles/images/payment/litecoin.png" alt="">
								<h4>Litecoin</h4>
							</span> <span><img src="styles/images/payment/etherium.png" alt="">
								<h4>Ethereum</h4>
							</span> <span><img src="styles/images/payment/bitcoincash.png" alt="">
								<h4>Bitcoin Cash</h4>
							</span> <span><img src="styles/images/payment/dodgecoin.png" alt="">
								<h4>Dogecoin</h4>
							</span> </div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Company Certificate</h4>
			</div>
			<div class="modal-body">
				<p><img src="styles/images/certificate.jpg" alt="" /></p>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>


@endsection