<?php
/*
Description:    Filter store item lists
                
****************History************************************
Date:         	04.10.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_items.class.php';

if (isset($_GET['flt']) && isset($_GET['ts']))
{
	//Call the game login WS
	$objItems=new items_webservice();
	
	$xml = '';
	switch($_GET['flt'])
	{
		case 0: //get a list of tile
			$xml = $objItems->TileSetList();
			break;
		case 1://list of room items by tile set
			$xml = $objItems->GetRoomItemList($_GET['ts']);
			break;
		case 2://list of monster by tile set
			$xml = $objItems->GetMonsterList($_GET['ts']);
			break;
		case 3://list of doors by tile set
			break;
		case 4://list of wall items by tile set
			$xml = $objItems->GetWallItemList($_GET['ts']);
			break;
		case 5://list of floors by tile set 
			$xml = $objItems->GetFloorList($_GET['ts'],$_GET['tmp']);
			break;
		case 6://list of walls by tile set
			$xml = $objItems->GetWallList($_GET['ts'],$_GET['tmp']);
			break;
		case 7://list ot traps by tile set
			$xml = $objItems->GetTrapList($_GET['ts']);
			break;
		case 8://list of equipment by layer and tile set
			$xml = $objItems->GetEquipList($_GET['lyr'],$_GET['ts'],$_GET['gen']);
			break;
		case 9:
			$xml = $objItems->GetInventoryList();
			break;	
		case 10:
			$xml = $objItems->GetRoomList();
			break;
		case 11:
			$xml = $objItems->GetEquipmentInventoryList();
			break;	
			
	}
	unset($objItems);
	//var_dump($xml);
	print ($xml);
	
}


?>