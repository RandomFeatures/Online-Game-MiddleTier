<?php
/*
Description:   initalize game game session after login
                
****************History************************************
Date:         	08.01.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/
include ($_SERVER['DOCUMENT_ROOT'].'/lib/system/common/system_start_session.php');


if ((isset($_SESSION['pythia_userid'])) && (!isset($_SESSION['game_realmid'])))
{
	include_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/base.inc.php'); 
	include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_player.class.php';
	
	//Call the player WS
	$objplayer=new player_webservice();
	$returnxml = $objplayer->GetPlayer();
	unset($objplayer);
	
	if (isset($returnxml))
	{
		$xmlParser = new gc_xmlparser($returnxml);
		$objxml = $xmlParser->GetData();
		
		$success = $objxml['Charon-XML']['header']['status']['VALUE'];
			
	    if (strcasecmp($success, 'Success') == 0)
	    {
			//if everything lines up record the data in the session
			if ($_SESSION['pythia_userid'] == $objxml['Charon-XML']['dataset']['player']['userID'])
			{
				$_SESSION['game_playerid'] = $objxml['Charon-XML']['dataset']['player']['id'];
				$_SESSION['game_realmid'] = $objxml['Charon-XML']['dataset']['player']['realmID'];
			}
	    }
	}   
}

?>
