<?php
/*
Description:    Get the registration data from the from facebook
				and submit it to the webservice
               
****************History************************************
Date:         	08.01.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/system_destroy_session.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/configs/web.config.inc.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/ws_gameplay.class.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/common.php';


if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST[captcha]))
{
	$success = FALSE;
	
	if($_POST[captcha] == $_SESSION[captcha])
	{
		$objGamePlay=new game_play_webservice(SESSION_EXP, GAME_NAME, GAME_SOURCE);
		$username = (isset($_POST['username'])) ? $_POST['username'] : ''; 
		$password = (isset($_POST['password'])) ? $_POST['password'] : ''; 
		$firstname = (isset($_POST['firstname'])) ? $_POST['firstname'] : ''; 
		$lastname = (isset($_POST['lastname'])) ? $_POST['lastname'] : ''; 
		$email = (isset($_POST['email'])) ? $_POST['email'] : ''; 
	
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		
		$success = $objGamePlay->Register($username, $password, $firstname, $lastname, $email);
		unset($_SESSION[captcha]); 
		unset($objGamePlay);
		
	}
	
	if ($success)
	{
		header ("Location:http://".$_SERVER['SERVER_NAME']."/apps/game/?myrealm");
		die();
	}else
		print "Registeration Failed - You failed the Captcha test";
	
	
}else
	print "Registeration Failed - You have to provide a username, password and pass the Captcha test";
	
		
		
		
		
?>
