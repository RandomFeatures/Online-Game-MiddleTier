<?php
/*
Description:    Get the Player Stats
                
****************History************************************
Date:         	08.26.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_player.class.php';

	//Call the player WS
	$objplayer=new player_webservice();
	$xml = $objplayer->GetPlayerStats();
	unset($objplayer);
	
	print ($xml);
	
?>