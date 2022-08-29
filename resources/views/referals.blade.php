@extends('layout.layout')
@section('title')
User profile
@endsection
@section('pageName')
YOUR REFERALS
@endsection
@section('activeYourReferrals')
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
      <br>
      <div class="account_top">
       <div class="acctopbox one">
        <span><img src="styles/images/reficon1.png"></span>
        <h4>0</h4>
        <p>Total Referrals</p>
       </div>
       <div class="acctopbox two">
        <span><img src="styles/images/reficon2.png"></span>
        <h4>0</h4>
        <p>Active Referrals</p>
       </div>
       <div class="acctopbox three">
        <span><img src="styles/images/reficon3.png"></span>
        <h4>$0.00</h4>
        <p>Total Commission</p>
       </div>
      </div>
      <div class="clear"></div>
      <br>

     </div>
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

@endsection