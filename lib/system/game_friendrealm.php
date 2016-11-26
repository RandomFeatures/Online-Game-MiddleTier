<?php
/*
Description:  load a friends realm
                
****************History************************************
Date:         	08.01.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_encounter.class.php';



if (isset($_GET['type']))
{
	//Call the realm WS
	$objencounter=new encounter_webservice();
	
	$xml = '';
	switch($_GET['type'])
	{
		case 0:
			$xml = $objencounter->GetFriendRealm($_GET['id']);
			break;
		case 1:
			$xml = $objencounter->GetXRefFriendRealm($_GET['id']);
			break;
	}
	unset($objencounter);
	print($xml);	
	
}

?>