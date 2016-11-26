<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<title>My Game</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script src="http://[var.myserver]/public/scripts/swfobject.js" type="text/javascript"></script>
<script src="http://[var.myserver]/public/scripts/httpcookie.js" type="text/javascript"></script>
<script src="http://[var.myserver]/apps/game/facebook/public/scripts/external_calls.js" type="text/javascript"></script>
<script type="text/javascript">
		var server = "http://[var.myserver]";
		var username = "[var.username;noerr]";
		var dungeonid = "[var.dungeonid;noerr]";
		
		var flashvars = {
				[var.dynamicvars;htmlconv=no;protect=no;noerr]
				baseurl: server + "/apps/game/",
				start:[var.startype]
		};
		var params = {
			menu: "false",
			scale: "noScale",
			allowFullscreen: "true",
			allowScriptAccess: "always",
			bgcolor: "#FFFFFF",
			wmode: "transparent"
		};
		var attributes = {
			id:"MyGame"
		};

		swfobject.embedSWF(server + "/apps/game/engine/[var.releaseswf]", "altContent", "760", "640", "9.0.0", server + "/game/expressInstall.swf", flashvars, params, attributes);
	</script>
<style>
html,body {
	height: 100%;
}

body {
	margin: 0;
}
</style>

</head>
<body>
	<div id="content">
		<div id="altContent">
			<p>Alternative content</p>
			<p> <a href="http://www.adobe.com/go/getflashplayer"><img 
				src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" 
				alt="Get Adobe Flash player" /></a></p>
		</div>
	</div>
	
	<div id="fb-root"></div>
    <script src="http://connect.facebook.net/en_US/all.js"></script>
	<script>
	    // initialize the library with the API key
		FB.init({
			 appId  : '[var.api_key]',
			 status : true, // check login status
			 cookie : true, // enable cookies to allow the server to access the session
			 xfbml  : true  // parse XFBML
		  });
		// fetch the status on load
		FB.getLoginStatus(handleSessionResponse);

		function handleSessionResponse(response) 
		{
			if (!response.session){
				FB.login(handleSessionResponse); 
			}
		}
	</script>
	
	
</body>
</html>