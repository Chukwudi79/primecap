@extends('layout.layout')
@section('title')
User profile
@endsection
@section('pageName')
EDIT ACCOUNT
@endsection
@section('activeEditAccount')
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




      <script language=javascript>
       function IsNumeric(sText) {
        var ValidChars = "0123456789.";
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

       function checkform() {
        if (document.editform.fullname.value == '') {
         alert("Please type your full name!");
         document.editform.fullname.focus();
         return false;
        }


        if (document.editform.password.value != document.editform.password2.value) {
         alert("Please check your password!");
         document.editform.fullname.focus();
         return false;
        }




        if (document.editform.email.value == '') {
         alert("Please enter your e-mail address!");
         document.editform.email.focus();
         return false;
        }



        for (i in document.editform.elements) {
         f = document.editform.elements[i];
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

        return true;
       }
      </script>


      <form action="" method=post onsubmit="return checkform()" name=editform class="my_accont"><input type="hidden" name="form_id" value="16298009291717"><input type="hidden" name="form_token" value="33348baf00317530f14d96e2dde559e6">
       <input type=hidden name=a value=edit_account>
       <input type=hidden name=action value=edit_account>
       <input type=hidden name=say value="">

       <table cellspacing=0 cellpadding=2 border=0 width=100%>
        <tr>
         <td>Account Name:</td>
         <td>Ryan207</td>
        </tr>
        <tr>
         <td>Registration date:</td>
         <td>Aug-15-2021 04:17:17 AM</td>
        </tr>
        <tr>
         <td>Your Full Name:</td>
         <td><input type=text name=fullname value='dr ryan lopez' class=inpts size=30>
        </tr>

        <tr>
         <td>New Password:</td>
         <td><input type=password name=password value="" class=inpts size=30></td>
        </tr>
        <tr>
         <td>Retype Password:</td>
         <td><input type=password name=password2 value="" class=inpts size=30></td>
        </tr>
        <tr>
         <td>Your PerfectMoney acc no:</td>
         <td><input type=text class=inpts size=30 name="pay_account[18]" value="" data-validate="regexp" data-validate-regexp="^U\d{5,}$" data-validate-notice="UXXXXXXX"></td>
        </tr>
        <tr>
         <td>Your Bitcoin acc no:</td>
         <td><input type=text class=inpts size=30 name="pay_account[48]" value="" data-validate="regexp" data-validate-regexp="^[13][a-km-zA-HJ-NP-Z1-9]{25,34}$" data-validate-notice="Bitcoin Address"></td>
        </tr>
        <tr>
         <td>Your E-mail address:</td>
         <td><input type=text name=email value='lryan9361@gmail.com' class=inpts size=30></td>
        </tr>


        <tr>
         <td>&nbsp;</td>
         <td><input type=submit value="Change Account data" class=sbmt></td>
        </tr>
       </table>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection