<?php
/*
Description:    Log the user in and goto the game screen
                
****************History************************************
Date:         	08.01.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/system_destroy_session.php';
include ($_SERVER['DOCUMENT_ROOT'].'/apps/game/lib/configs/facebook.config.inc.php');
include_once $_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/ws_gameplay.class.php';


	if (!isset($_SESSION['pythia_userid']))
	{
		//Log in and start the game 
		$objGamePlay=new game_play_webservice(SESSION_EXP, GAME_NAME, GAME_SOURCE);
		
		if(isset($facebookID ))
			$success = $objGamePlay->xRefLogin($facebookID );
	
		if ($success)
		{
			//woo hoo??
		}
		
		unset($objGamePlay);	
		
	}	

	include ($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_init.php');
	
?>