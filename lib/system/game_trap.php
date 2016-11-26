<?php
/*
Description:   Trap
                
****************History************************************
Date:         	04.26.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_encounter.class.php';

if (isset($_GET['trapid']))
{
		//Call the game login WS
		$objencounter=new encounter_webservice();
		$xml = $objencounter->ResolveTrap($_GET['trapid']);
		unset($objencounter);
		print($xml);
}

?>