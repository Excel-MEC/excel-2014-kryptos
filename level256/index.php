<?php
	session_start();
	ini_set('session.cookie_lifetime',  0);
	if(!isset($_SESSION['usrno']) || $_SESSION['lev']!='level34.php')
	{
		header('Location: ../validate.php');
	}
	else 
	{
	?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
	
	<!-- This ensures the canvas works on IE9+.-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<!-- Standardised web app manifest -->
	<link rel="manifest" href="app.manifest" />
	
	<!-- Allow fullscreen mode on iOS devices. (These are Apple specific meta tags.) -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="apple-touch-icon" sizes="256x256" href="icon-256.png" />
	<meta name="HandheldFriendly" content="true" />
	
	<!-- Chrome for Android web app tags -->
	<meta name="mobile-web-app-capable" content="yes" />
	<link rel="shortcut icon" sizes="256x256" href="icon-256.png" />
	
	<title>PacMan</title>
	
	<style type="text/css">
		html, body {
			background-color: black;
			color: white;
			padding: 0;
			margin: 0;
			overflow: hidden;
		}
		canvas {
			-ms-touch-action: none;
		}
	</style>
	

</head> 
 
<body> 
	<div id="fb-root"></div>
	<div style="text-align: center;">

	<script>
	(function(){
		if (window.location.protocol.substr(0, 4) === "file")
		{
			alert("Exported games won't work until you upload them.");
		}
	})();
	</script>

		<!-- The canvas must be inside a div called c2canvasdiv -->
		<div id="c2canvasdiv" style="width: 640px; height: 640px;">
		
			<!-- The canvas the project will render to.-->
			<canvas id="c2canvas" width="640" height="640">
				<!-- This text is displayed if the browser does not support HTML5.-->
				Your browser does not appear to support HTML5.  Try upgrading your browser to the latest version.  <a href="http://www.whatbrowser.org">What is a browser?</a>
				<br/><br/><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Microsoft Internet Explorer</a><br/>
				<a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a><br/>
				<a href="http://www.google.com/chrome/">Google Chrome</a><br/>
				<a href="http://www.apple.com/safari/download/">Apple Safari</a><br/>
				<a href="http://www.google.com/chromeframe">Google Chrome Frame for Internet Explorer</a><br/>
			</canvas>
			
		</div>
	</div>
	
		<script src="jquery-2.0.0.min.js"></script>


	
    <!-- The runtime script.-->
	<script src="c2runtime.js"></script>

    <script>
		jQuery(window).resize(function() {
			cr_sizeCanvas(jQuery(window).width(), jQuery(window).height());
		});

		jQuery(document).ready(function ()
		{
			// Create new runtime using the c2canvas
			cr_createRuntime("c2canvas");
		});
		
		// Pause and resume on page becoming visible/invisible
		function onVisibilityChanged() {
			if (document.hidden || document.mozHidden || document.webkitHidden || document.msHidden)
				cr_setSuspended(true);
			else
				cr_setSuspended(false);
		};
		
		document.addEventListener("visibilitychange", onVisibilityChanged, false);
		document.addEventListener("mozvisibilitychange", onVisibilityChanged, false);
		document.addEventListener("webkitvisibilitychange", onVisibilityChanged, false);
		document.addEventListener("msvisibilitychange", onVisibilityChanged, false);
    </script>
</body> 
</html> 
<?php
}
?>