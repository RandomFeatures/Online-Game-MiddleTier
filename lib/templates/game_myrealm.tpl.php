<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>My Game</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" media="screen" href="/public/css/screen.css" />
	<script type="text/javascript" src="/public/js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="/public/js/jquery.validate.js"></script>
	<script src="http://[var.myserver]/public/scripts/httpcookie.js" type="text/javascript"></script>
	<script src="http://[var.myserver]/public/js/swfobject.js" type="text/javascript"></script>
	<script src="http://[var.myserver]/apps/game/facebook/public/scripts/external_calls.js" type="text/javascript"></script>
	<script type="text/javascript">

		function reloadGame(){
			window.location = "http://[var.myserver]";	
		}

		function switchBuyBucksScreen(){
			window.location = "http://[var.myserver]/apps/game/index.php?buy";	
		}
	
		function loadSWF(gametype) {
		var flashvars = {
			type: gametype,
			baseurl: "http://[var.myserver]/apps/game/",
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
			id:"NewProject"
		};
		
		swfobject.embedSWF("http://[var.myserver]/apps/game/engine/MyRealm.swf", "altContent", "760", "640", "9.0.0", "http://[var.myserver]/game/expressInstall.swf", flashvars, params, attributes);
		}
		
		loadSWF("hom");
	</script>
	<style>
		html, body { height:100%; }
		body { margin:0; }
	</style>
	


</head>
<body>
	<div id="page2">

		<div id="header">
			<h1>My Game</h1>
		</div>

		<div id="content">
			<div id="altContent">
				<h1>New Project</h1>
				<p>Alternative content</p>
				<p> <a href="http://www.adobe.com/go/getflashplayer"><img 
					src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" 
					alt="Get Adobe Flash player" /></a></p>
			</div>
		</div>
	</div>
	
</body>
</html>