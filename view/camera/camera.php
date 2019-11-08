
<?php
	function html_camera() {

?>
<div class="col-sm" id="camera">
	<div class="post">
		<div class="head-info">
			<h3 style="text-align: center; color: black;">Picture</h3>
		</div>
		<!--
		Ideally these elements aren't created until it's confirmed that the
		client supports video/camera, but for the sake of illustrating the
		elements involved, they are created with markup (not JavaScript)
		-->
		<video id="video" style="width: 100%; height: auto;" width="640" height="480" autoplay></video>
		<div class="head-info">
			<?php

				require_once $_SERVER["DOCUMENT_ROOT"] . '/view/filters/filters.php';
				filters();

			?>
		</div>
		<div class="head-info" style="text-align: center;">
			<button id="snap" class="insto-button">Snap Photo</button>
		</div>
		<canvas id="canvas" style="display: none; width: 100%; height: auto;" width="640" height="480"></canvas>
	</div>

	<div class="post">
		<div class="head-info">
			<h3 style="text-align: center; color: black;">Result</h3>
		</div>
		<img id="output-img" class="picture" src="">
	</div>

	<script type="text/javascript" src="../../view/camera/camera.js"></script>
</div>
<?php

	}
	// https://davidwalsh.name/browser-camera
	// https://www.askingbox.com/tutorial/jquery-send-html5-canvas-to-server-via-ajax
?>
