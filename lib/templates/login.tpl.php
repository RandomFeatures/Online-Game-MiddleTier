<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Account Login</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" media="screen" href="/public/css/screen.css" />
	
	<script type="text/javascript" src="/public/js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="/public/js/jquery.validate.js"></script>

	<script type="text/javascript">
		
	$(function() {
		// highlight 
		var elements = $("input[type!='submit'], textarea, select");
		elements.focus(function(){
			$(this).parents('p').addClass('highlight');
		});
		elements.blur(function(){
			$(this).parents('p').removeClass('highlight');
		});
		
		/*$("#forgotpassword").click(function() {
			$("#password").removeClass("required");
			$("#login").submit();
			$("#password").addClass("required");
			return false;
		});*/
		
		$("#login").validate()
	});
	</script>
	
</head>
<body>
	<div id="page">

		<div id="header">
			<h1>Game Login</h1>
		</div>

		<div id="content">
			<p id="status"></p>
			<form action="/apps/game/lib/system/game_game_login.php" method="post" id="login">
				<fieldset>
					<legend>Login details</legend>
						<p>
							<label for="username"><span class="required">User Name</span></label>
							<input id="username" name="username" class="text required" type="text" />
							<label for="username" class="error">This must be a valid user name</label>
						</p>
						
						<p>
							<label for="password"><span class="required">Password</span></label>
							<input name="password" type="password" class="text required" id="password" minlength="4" maxlength="20" />
						</p>

						<p>
							<label class="centered info"><a id="forgotpassword" href="http://[var.myserver]/?sendpass">Email my password...</a></label>
						</p>
						<p>
							<input type="submit" class="submit" value="Login..." />
						</p>
				</fieldset>
				
				<div class="clear"></div>
			</form>
			
			</div>
			<br/><br/>
			
			<p><a href="http://[var.myserver]/apps/game/?register" >Click here to register a New User</a></p>
	</div>
	
</body>
</html>
