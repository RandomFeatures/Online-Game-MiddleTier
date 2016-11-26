<?php
/*
Description:    Register the user if necessary
                
****************History************************************
Date:         	08.01.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/base.inc.php');
include ($_SERVER['DOCUMENT_ROOT'].'/apps/game/lib/configs/facebook.config.inc.php');
include_once $_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/ws_gameplay.class.php';

	//Log in and start the game form an http post
	$objGamePlay=new game_play_webservice(SESSION_EXP, GAME_NAME, GAME_SOURCE);
	
	if(isset($facebook))
			$FacebookID = $facebook->getUser();
	
	if(isset($FacebookID))//try to log in
		$success = $objGamePlay->xRefLoginCheck($FacebookID);
	
	if (!$success)
	{
		include_once $_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/common.php';
		require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/system/facebook/facebook.php');
		if(!isset($fbme))
		{
			//try to log in and get settings
			$facebook = new Facebook(array(
			                'appId'  => $appid,
			                'secret' => $appsecret,
			                'cookie' => true,));
			$session = $facebook->getSession();
			$fbme = null;  
			if ($session) {  
			    try {  
			    	$fbme = $facebook->api('/me');
			    } catch (FacebookApiException $e) {
					error_log($e);
			    }  
			} 
			$FacebookID = $facebook->getUser();
		}
		$firstname = $fbme['first_name'];
		$lastname = $fbme['last_name'];
		$email = $fbme['email'];
		if (!isset($email)) $email = 'n/a';
		$username = $lastname.generatePassword(4,2);
		$password = generatePassword(8,2);
		$success = $objGamePlay->xRefRegister($username, $password, $firstname, $lastname, $email, $FacebookID);
	}
		
	unset($objGamePlay);	


?>