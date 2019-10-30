<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<!--
		Ideally these elements aren't created until it's confirmed that the
		client supports video/camera, but for the sake of illustrating the
		elements involved, they are created with markup (not JavaScript)
		-->
		<video id="video" width="640" height="480" autoplay></video>
		<button id="snap">Snap Photo</button>
		<canvas id="canvas" width="640" height="480"></canvas>
		<script type="text/javascript">
			// Grab elements, create settings, etc.
			var video = document.getElementById('video');

			// Get access to the camera!
			if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
				navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
					//video.src = window.URL.createObjectURL(stream);
					video.srcObject = stream;
					video.play();
				});
			}

			// Elements for taking the snapshot
			var canvas = document.getElementById('canvas');
			var context = canvas.getContext('2d');
			var video = document.getElementById('video');

			// Trigger photo take
			document.getElementById("snap").addEventListener("click", function() {
				context.drawImage(video, 0, 0, 640, 480);

				uploadCanvas();
			});

			// Send img to server
			function uploadCanvas() {
				var dataURL = canvas.toDataURL();
				var xhttp = new XMLHttpRequest();
				//console.log(dataURL);
				xhttp.onreadystatechange = function() {
					//console.log(this.readyState + " : " + this.status);
					if (this.readyState == 4 && this.status == 200) {
						//console.log(this.responseText);
					}
				};
				xhttp.open("POST", "uploadReceiver.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send("img=" + dataURL);
			}
		</script>
	</body>
</html>
<!--
https://davidwalsh.name/browser-camera
https://www.askingbox.com/tutorial/jquery-send-html5-canvas-to-server-via-ajax
-->