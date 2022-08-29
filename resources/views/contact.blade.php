@extends('layout.layout')
@section('tittle')
Contacts
@endsection

@section('content')


<div class="inside_wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert alert-info"> Please read our <a href="{{route('faq')}}" target="_blank">Frequently Asked Questions (FAQ)</a> page before creating a ticket. Probably your question has already been answered there!</div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="form-container-support" style="width:100%;">
                    <h2>Send Us a Message</h2>
                    <div class="form-content">


                        <script language=javascript>
                            function checkform() {
                                if (document.mainform.name.value == '') {
                                    alert("Please type your full name!");
                                    document.mainform.name.focus();
                                    return false;
                                }
                                if (document.mainform.email.value == '') {
                                    alert("Please enter your e-mail address!");
                                    document.mainform.email.focus();
                                    return false;
                                }
                                if (document.mainform.message.value == '') {
                                    alert("Please type your message!");
                                    document.mainform.message.focus();
                                    return false;
                                }
                                return true;
                            }
                        </script>

                        <form method=post name=mainform onsubmit="return checkform()" action="{{ route('sendmessage') }}">
                            @csrf
                            <input type="hidden" name="form_id" value="16295454543108"><input type="hidden" name="form_token" value="d295fe605f82c3b623be2b3b55103220">
                            <input type=hidden name=a value=support>
                            <input type=hidden name=action value=send>


                            <table width="100%" border=0 cellpadding=5 cellspacing=5>
                                <tr>
                                    <td>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td width="44%"><label> Your Name:</label>
                                                    <input type="text" name="name" value="" size=30 class=inpts>
                                                </td>
                                                <td width="2%">&nbsp;</td>
                                                <td width="44%"><label>Your Email:</label>
                                                    <input type="text" name="email" value="" size=30 class=inpts>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Your Message:</label>
                                        <textarea name=message class=inpts cols=45 rows=4></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td height="60" colspan="4" valign="bottom">
                                        <input type=submit value="Send" class=sbmt>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="supportright">
                    <div class="phone">
                        <span class="icon"><img src="styles/images/supportphone.png" alt="" /></span>
                        <h2>Phone number:</h2>
                        <p>+1 (917) 341-6299</p>
                    </div>
                    <div class="address">
                        <span class="icon"><img src="styles/images/supportlocation.png" alt="" /></span>
                        <h2>Company Location:</h2>
                        <p>Primeservice LTD Corporation, 669 Columbus Ave , New York, NY 10025, USA</p>
                    </div>
                    <div class="emailblock">
                        <span class="icon"><img src="styles/images/supportemail.png" alt="" /></span>
                        <h2>E-mail:</h2>
                        <p><a href="mailto:admin@crowncapital.ltd">SUPPORT@Primeservice.COM</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="map">

    <iframe src="https://maps.google.com/maps?q=2%20Pennsylvania%20Plaza%201500,%20New%20York,%20NY%2010121,%20United%20States&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>


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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Company Certificate</h4>
            </div>
            <div class="modal-body">
                <p><img src="styles/images/certificate.png" alt="" /></p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
@endsection

@section('scrip111111')
<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
@endsection