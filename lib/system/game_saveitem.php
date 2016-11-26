<?php
/*
Description:    Handle Room Items
                
****************History************************************
Date:         	04.10.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'].'/apps/game/lib/system/ws_realm.class.php';


//$itemid, $roomid, $gridx, $gridy, $objtype, $objid,  $dir

if (isset($_GET['typ']) && isset($_GET['roomid']))
{
	//Call the realm WS
	$objRealm=new realm_webservice();
	
	$xml = '';
	switch($_GET['typ'])
	{
		case 0:
			$xml = $objRealm->BuyItem($_GET['itemid'],$_GET['roomid'],$_GET['gridx'],$_GET['gridy'],$_GET['objtype'],$_GET['objid'],$_GET['dir']);
			print ($xml);
			break;
		case 1:
			if ($_GET['objtype'] == 12)
				$objRealm->SaveRealmChest($_GET['gridx'],$_GET['gridy'],$_GET['dir']);
			else
				$objRealm->SaveItem($_GET['itemid'],$_GET['roomid'],$_GET['gridx'],$_GET['gridy'],$_GET['objtype'],$_GET['objid'],$_GET['dir']);
			break;
		case 2:
			$objRealm->StoreItem($_GET['itemid'],$_GET['roomid']);
			break;			
		case 3:
			$objRealm->SellItem($_GET['itemid'],$_GET['roomid']);
			break;	
		case 4:
			$xml = $objRealm->AddItem($_GET['itemid'],$_GET['roomid'],$_GET['gridx'],$_GET['gridy'],$_GET['objtype'],$_GET['objid'],$_GET['dir']);
			print ($xml);
			break;	
			
	}
	unset($objRealm);
}


?>