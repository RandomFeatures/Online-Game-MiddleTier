<?php
/*
Description:   Combat
                
****************History************************************
Date:         	04.26.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_encounter.class.php';

if (isset($_GET['realmid']))
{
	//Call the game encounter WS
	$objencounter=new encounter_webservice();
	$xml = $objencounter->PopMasterChest($_GET['realmid']);
	unset($objencounter);
	
	print($xml);
}

?>