<?php
/*
Description:   Player Equipment
                
****************History************************************
Date:         	04.26.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_player.class.php';


if (isset($_GET['typ']))
{
	$objplayer=new player_webservice();
	
	switch ($_GET['typ'])
	{
		case 0:
			if (isset($_GET['lyr']) && isset($_GET['id']))		
				$objplayer->EquipItem($_GET['lyr'],$_GET['id']);	
			break;
		case 1:
			if (isset($_GET['lyr']))		
				$objplayer->UnequipItem($_GET['lyr']);	
			break;
		case 2:
			if (isset($_GET['id']))
			{		
				$xml = $objplayer->BuyEquipment($_GET['id']);
				print $xml;
			}	
			break;
		case 3:
			if (isset($_GET['lyr']))		
				$objplayer->SellEquipment($_GET['lyr']);	
			break;
		
	}
	unset($objplayer);
}

?>