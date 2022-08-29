@extends('layout.layout')
@section('title')
User profile
@endsection
@section('pageName')
YOUR REFERAL'S LINK
@endsection
@section('activeBanners')
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
      Your Referral Link:<br>
      <div class="refbox">
       <button id="copyButton">Copy</button>
       <input id="copyTarget" value="https://crowncapital.ltd/?ref=Ryan207">
       <span id="msg"></span>
       <div class="getban"><a href="?a=referallinks" target="_blank"> Get Banners</a></div>
      </div>

      <div class="my_accont">
       <table border="0" cellpadding="4" cellspacing="4" width="100%" align="center">
        <tr>
         <td class="inheader" colspan="3" align="center">728x90 banner</td>
        </tr>
        <tr>
         <td colspan="3" align="center">
          <center>
           <img src="https://crowncapital.ltd/banners/banner728.gif" alt="" width="728" height="90" />
          </center>
          <br />
          <textarea style="width:100%"><a href="https://crowncapital.ltd/?ref=Ryan207">
<img src="https://crowncapital.ltd/banners/banner728.gif" alt="" width="728" height="90" /></a></textarea>
         </td>
        </tr>

        <tr>
         <td colspan="2" class="inheader" align="center">468x60 banner</td>

        </tr>
        <tr>
         <td colspan="2">
          <center>
           <img src="https://crowncapital.ltd/banners/banner468.gif" alt="" width="468" height="60" />
          </center>
          <br />
          <textarea style="width:100%"><a href="https://crowncapital.ltd/?ref=Ryan207">
        <img src="https://crowncapital.ltd/banners/banner468.gif" alt="" width="468" height="60"></a>
</textarea>
  </td>


        </tr>

        <tr>
         <td colspan="2" class="inheader" align="center">125x125 banner</td>
        </tr>
        <tr>
         <td width="200" align="center"><img src="https://crowncapital.ltd/banners/banner125.gif" alt="" width="125" height="125" /></td>
         <td><textarea style="height:130px;"><a href="https://crowncapital.ltd/?ref=Ryan207">
        <img src="https://crowncapital.ltd/banners/banner125.gif" alt="" width="125" height="125">
       </a>
      </textarea>
         </td>
        </tr>







       </table>
      </div>







     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</div>
</div>

@endsection