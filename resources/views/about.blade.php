@extends('layout.layout')
@section('title')
User profile
@endsection
@section('pageName')
WITHDRAWAL HISTORY
@endsection
@section('content')
        <div class="profit-container">
            <div class="container">
                <div class="features-block">
                    <h1>Why <span>investors</span> choose us?</h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="feature">
                                <p><img src="styles/images/middle1.png" alt="" /></p>
                                <h2>Comodo SSL Certificate</h2>
                                <p>All investors transactions are totally safe and secure</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="feature">
                                <p><img src="styles/images/middle2.png" alt="" /></p>
                                <h2>DDoS Protection</h2>
                                <p>Powerful DDoS protection system guarantees stable service work</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="feature">
                                <p><img src="styles/images/middle3.png" alt="" /></p>
                                <h2>Dedicated Server</h2>
                                <p>We use a very powerful dedicated server for fast performance</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="feature">
                                <p><img src="styles/images/middle4.png" alt="" /></p>
                                <h2>Hackers Protection</h2>
                                <p>Our website is totally safe from any hacker attack</p>
                            </div>
                        </div>
                    </div>
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
                            <h2><span>who</span> we are</h2>
                            <p>Our project was born due to the acquaintance of bitcoin enthusiasts until a few years ago. 
															And in November 2018, we registered legally. We have been through it all: cryptocurrency's glory days, the down-lows, 
															the roller coaster spikes, the cliff drops and many other things. 
															But these ordeals have made us some of the strongest-willed holders in the volatile arena of trading. 
															We're used to believing in Crypto's Potential, even if no one else does. 
															It's never easy to keep believing through the bad times, but we crypto traders are of a different tenacity. 
															The Primeservice ltd staff consists of the talented and experienced traders and miners in the field of crypto currency.
															 We trade Bitcoin and altcoins on the most popular exchanges, which brings us and our investors a regular profit.
															  The company implements the latest technologies and strategies of success achievement for a harmonious and stable 
																development of the project every day. We have developed and successfully applied fully automated trading
																 systems based on our trading experience, mathematical analysis and innovative software.
                                Our activities also include mining of Altcoins. Bitcoin Mining is incredibly difficult now. 
																The amount of energy required to mine bitcoin blocks increase as the community nears the maximum 21 million bitcoins. 
																Instead of mining in an overcrowded market, we are currently specializing on mining various Altcoins,
																 which can be then be swapped to Bitcoins by the user. 
																 This way we can circumvent the problem that the difficulty of mining is rising at an incredible pace. 
																 We believe that Altcoins have high importance, because diversity fosters innovative blockchain technology.
																  The many different coins with their strong communities are an inseparable part of the 
																	digital currency sector and we stand by their side with full support. </p>
                            <a href="{{route('signup')}}" target="_blank">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="ourstrategy">
                <h3>Our Strategy</h3>
                <p>Our company is operating several mining farms that are located in Northern Ireland and Scotland. We have equipped them with the most powerful and modern mining hardware that runs around the clock. Currently, our goal is to develop wider European network of mining farms. And we have no limits in achieving our goal, so we are working so actively to expand the project, inviting new investors to cooperate. Many of you have been waiting for such a proposal, and we are confident that you will not be disappointed with our service.
                </p>
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
                <div class="modal-footer"> </div>
            </div>
        </div>
    </div>

@endsection

    


    