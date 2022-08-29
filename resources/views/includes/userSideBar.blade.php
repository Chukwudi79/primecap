<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="accountloginleft">

		<div class="acclog1"> <span><img src="styles/images/iconusername.png" alt="" /></span>
			<p>Welcome</p>
			<h2>{{auth()->user()->fullname}}</h2>
		</div>
		<div class="acclog2"> <span><img src="styles/images/iconlastaccess.png" alt="" /></span>
			<p>Registration Date</p>
			<h2>{{date('d M y, h:i a', strtotime(auth()->user()->created_at))}}</h2>
		</div>
		<div class="membersidebar">
			<ul>
				<li>
				<a href="{{route('userprofile')}}">
				<span><img src="styles/images/settings.png" alt="" /></span><span @yield('activeAccount')> Account Overview</span></a> </li>
				<li><a href="{{route('deposit')}}"><span><img src="styles/images/deposit.png" alt="" /></span><span @yield('activeMakeDeposit')> Make Deposit</span></a></li>
				<li><a href="{{route('depositlist')}}"><span><img src="styles/images/deposit-list.png" alt="" /></span><span @yield('activeYourDeposits')> Your Deposits</span></a></li>
				<li><a href="{{route('deposithistory')}}"><span><img src="styles/images/history.png" alt="" /></span><span @yield('activeDepositsHistory')> Deposits History</span></a></li>
				<li><a href="{{route('withdraw')}}"><span><img src="styles/images/w-history.png" alt="" /></span><span @yield('activeWithdrawFunds')> Withdraw Funds</span></a></li>
				<li><a href="{{route('earnings')}}"><span><img src="styles/images/money.png" alt="" /></span><span @yield('activeEarningsHistory')> Earnings History</span></a></li>
				<li><a href="{{route('withdrawhistory')}}"><span><img src="styles/images/history.png" alt="" /></span><span @yield('activeWithdrawalsHistory')> Withdrawals History</span></a></li>
				<!--  <li><a href="{{route('referals')}}"><span><img src="styles/images/users.png" alt="" /></span><span @yield('activeYourReferrals')> Your Referrals</span></a> </li>
    <li><a href="{{route('referallinks')}}"><span><img src="styles/images/banners.png" alt="" /></span><span @yield('activeBanners')> Banners</span></a></li>
    <li><a href="{{route('editaccount')}}"><span><img src="styles/images/settings.png" alt="" /></span><span @yield('activeEditAccount')> Edit Account</span></a> </li>
     -->
				<li><a href="{{route('logout')}}"><span><img src="styles/images/deposit-list.png" alt="" /></span> Logout</a></li>
			</ul>
		</div>
	</div>
</div>