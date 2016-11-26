<?php
/*
Description:   get item details
                
****************History************************************
Date:         	04.10.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_items.class.php';

if (isset($_GET['typ']) && isset($_GET['id']))
{
	//Call the game login WS
	$objItems=new items_webservice();
	
	$xml = '';
	switch($_GET['typ'])
	{
		case 0:
		case 1:
			$xml = $objItems->GetWall($_GET['id']);
			break;
		case 2:
			$xml = $objItems->GetFloor($_GET['id']);
			break;
		case 5:
			$xml = $objItems->GetTrap($_GET['id']);
			break;
		case 6:
			$xml = $objItems->GetMonster($_GET['id']);
			break;
		case 3:	
		case 4:
		case 7:
		case 8:
		case 9:
		case 10:
			$xml = $objItems->GetItem($_GET['id']);
			break;
		case 11:
			$xml = $objItems->GetEquip($_GET['id']);
			break;				
		case 15:
			$xml = $objItems->GetRoom($_GET['id']);
			break;				
			
	}
	//var_dump($xml);
	print ($xml);
}


?>