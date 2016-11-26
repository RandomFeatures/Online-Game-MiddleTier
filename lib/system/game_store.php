<?php
/*
Description:    Access the Game Store
                
****************History************************************
Date:         	09.5.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'].'/apps/game/lib/system/ws_realm.class.php';


if (isset($_GET['typ']))
{
	//Call the realm WS
	$objRealm=new realm_webservice();
	
	$xml = '';
	switch($_GET['typ'])
	{
		case 0:
			$xml = $objRealm->GetStoreList($_GET['type']);
			break;
		case 1:
			$xml = $objRealm->PurchaseGameStore($_GET['id']);
			break;
	}
	unset($objRealm);
	print($xml);	
	
}


?>