<?php

/*
Description:    Player Rooms
                
****************History************************************
Date:         	06.3.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_realm.class.php';

if (isset($_GET['flt']) && isset($_GET['roomid']))
{
	//Call the realm WS
	$objRealm=new realm_webservice();
	
	$xml = '';
	switch($_GET['flt'])
	{
		case 0: //buy room
			$xml = $objRealm->BuyRoom($_GET['roomid'], $_GET['tmpid'], $_GET['objid'], $_GET['floor'], $_GET['gridy'], $_GET['gridx']);
			break;
		case 1://move room
			$objRealm->MoveRoom($_GET['roomid'], $_GET['floor'], $_GET['gridy'],  $_GET['gridx']);
			break;
		case 2://coonect rooms
			$objRealm->ConnectRoom($_GET['roomid'], $_GET['dir'], $_GET['link'], $_GET['floor']);
			break;
		case 3://disconnect rooms
			$objRealm->DisconnectRoom($_GET['roomid'], $_GET['link']);
			break;
		case 4://set chest room
			$objRealm->SetChestRoom($_GET['roomid']);
			break;
		case 5://set start room 
			$objRealm->SetStartRoom($_GET['roomid']);
			break;
		case 6://get update xml
			$xml = $objRealm->GetRoom($_GET['roomid']);
			break;
		case 7://sell room
			$objRealm->SellRoom($_GET['roomid'], $_GET['floor']);
			break;
		case 8://ResetRoom
			$objRealm->DisconnectAll($_GET['roomid']);
			break;
	}
	unset($objRealm);
	//var_dump($xml);
	print ($xml);
}


?>