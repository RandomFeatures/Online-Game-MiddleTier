<?php
/*
Description:    Get the Avatar XML
                
****************History************************************
Date:         	04.10.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_player.class.php';

	//Call the player WS
	$objplayer=new player_webservice();
	$xml = $objplayer->GetAvatar();
	unset($objplayer);
	
	print ($xml);
	
?>