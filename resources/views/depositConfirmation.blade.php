@extends('layout.layout')
@section('title') Home @endsection
@section('pageName')
DEPOSIT CONFIRMATION
@endsection
@section('activeMakeDeposit')
style="color: #ed9e92;"
@endsection
@section('content')

        <div class="row">
           <!-- <div class="col-lg-5 col-md-5 col-sm-12" style="padding-left: 5px;">
            <img src="styles/images/btbt.jpg" alt="" style="width:105%; height:670px" >
          </div>  -->
          <div class="col-lg-7 col-md-7 col-sm-12" style="background-color: #004d1a; width: 100% ; margin-left:15px"> 
            <h3>Deposit ID: <span style="color: red;">{{$deposit_request_id}}</span> </h3>
            <br><br>
            <table cellspacing=0 cellpadding=2 class="form deposit_confirm">
              <tr>
                <th>Plan:</th>
                <td>{{$planName }}</td>
                <td rowspan=6></td>
              </tr>
              <tr>
                <th>Profit:</th>
                <td>{{$profit }}% after 24 hours</td>
              </tr>
              <tr>
                <th>Principal Return:</th>
                <td>Yes</td>
              </tr>
              <tr>
                <th>Principal Withdraw:</th>
                <td>
                  Available with
                  0.00% fee </td>
              </tr>
              <!-- <tr>
                <th>Credit Amount:</th>
                <!- <td>$150.00</td> --
              </tr> -->
              <tr>
                <th>Deposit Fee:</th>
                <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
              </tr>
              <tr>
                <th>Debit Amount:</th>
                <td>{{$amount}}</td>
              </tr>
              <!-- <tr>
                <th>USD Debit Amount:</th>
                <!- <td>150.00</td> --
              </tr> -->
            </table>
            @if ( $depositMode == 'process_18')
            <form action="https://perfectmoney.is/api/step1.asp" method="POST">
              <input type="hidden" name="pid" value="G3KS54ZGWSCKJNL2EDR4E0FJ8RVXRAQD"> <input type="hidden" name="PAYEE_ACCOUNT" value="U27708801"> <input type="hidden" name="PAYEE_NAME" value="CrownCapital"> <input type="hidden" name="PAYMENT_ID" value=""> <input type="hidden" name="PAYMENT_AMOUNT" value="150.00"> <input type="hidden" name="PAYMENT_UNITS" value=USD> <input type="hidden" name="SUGGESTED_MEMO" value="Deposit to crowncapital.ltd User Ryan207">
              <input type="hidden" name="STATUS_URL" value="https://crowncapital.ltd/index.php/status/postback/18/"> <input type="hidden" name="PAYMENT_URL" value="https://crowncapital.ltd/?a=return_success"> <input type="hidden" name="PAYMENT_URL_METHOD" value="POST"> <input type="hidden" name="NOPAYMENT_URL" value="https://crowncapital.ltd/?a=return_fails"> <input type="hidden" name="NOPAYMENT_URL_METHOD" value="POST"> <input type="hidden" name="BAGGAGE_FIELDS" value="pid"> <span class="deposit-process-wrap"> <input type="submit" value="Process" class="sbmt deposit-process" /> </span> <span class="deposit-cancel-wrap"> <input type="button" value="Cancel" class="sbmt deposit-cancel" onclick="history.go(-1)"> </span>
<br><br>
              PAYMENT ON PERFECT MONEY THE PROCESS BUTTON ABOVE CAN BE USED.
            </form>
            @endif
            <!-- First column -->
            <script>
              function myFunction1() {
                var copyText = document.getElementById("myInput");
                copyText.select();
                copyText.setSelectionRange(0, 99999)
                document.execCommand("copy");
                alert("Copied the text: " + copyText.value);
              }
            </script>
            <div class="row">
              <div class="col-sm-6 col-md-9 py-4 px-3">
                <h4 class="h4-responsive">Copy the Bitcoin wallet address bellow for bitcoin payment </h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 pb-3">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <label for="">Your deposit bitcoin wallet address</label>
                          <div class="md-form input-group">
                            <!-- <img src="styles/images/bitimage.bmp" width="200" height="200"> -->
                            <div style="font-size:25px; color:red">
														{{ auth()->user()->depositbtcwallet}}
                              <input type="text" class="form-control" value="{{ auth()->user()->depositbtcwallet}}" id="myInput" readonly aria-label="Recipient's username with two button addons" aria-describedby="MaterialButton-addon4">
                              <div class="input-group-append" id="MaterialButton-addon4">
                                <button class="btn btn-warning" type="button" id="show1" onclick="myFunction1()">Copy</button>
                              </div>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <script type="text/javascript">
            window.$crisp = [];
            window.CRISP_WEBSITE_ID = "b1455edb-91eb-4266-aa8c-0127325d06b1";
            (function() {
              d = document;
              s = d.createElement("script");
              s.src = "https://client.crisp.chat/l.js";
              s.async = 1;
              d.getElementsByTagName("head")[0].appendChild(s);
            })();
          </script>

         
        </div>
@endsection