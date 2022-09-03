const constraints = {
  audio: false,
  video: {
    facingMode: "user",
  },
};

// Access webcam
async function init() {
  try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    console.error(e);
  }
}

// Success
const handleSuccess = (stream) => {
  window.stream = stream;
  video.srcObject = stream;

  var context = canvas.getContext("2d");
  setInterval(function () {
    context.drawImage(video, 0, 0, 640, 480);
    video.play();
  }, 1000);
};
init();
