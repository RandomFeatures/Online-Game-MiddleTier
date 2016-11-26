<?php
/*
Description:    verify the username and password with the WS
                
****************History************************************
Date:         	10.11.2009
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/system_destroy_session.php';
include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/base.inc.php');
include ($_SERVER['DOCUMENT_ROOT'].'/apps/game/lib/configs/config.inc.php');
include ($_SERVER['DOCUMENT_ROOT'].'/apps/game/lib/configs/web.config.inc.php');
include_once $_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/ws_gameplay.class.php';


if (isset($_POST['username']) && isset($_POST['password']))
{
	
	//Log in and start the game form an http post
	$objGamePlay=new game_play_webservice(SESSION_EXP, GAME_NAME, GAME_SOURCE);
	$success = $objGamePlay->Login($_POST['username'], $_POST['password']);
	unset($objGamePlay);
	if ($success)
	{
		header ("Location:http://".$_SERVER['SERVER_NAME']."/apps/game/index.php?myrealm");
    	die(); //
	}else
		print "Login Failed";
	
}elseif (isset($_GET['username']) && isset($_GET['password']))
{
	//Allow a URL request with user name and pss so set the session
	$objGamePlay=new game_play_webservice(SESSION_EXP, GAME_NAME, GAME_SOURCE);
	$success = $objGamePlay->Login($_GET['username'], $_GET['password']);
	unset($objGamePlay);
	if ($success)
	{
    	print "Login Success";	 	
	}else
		print "Login Failed";	
}


?>
