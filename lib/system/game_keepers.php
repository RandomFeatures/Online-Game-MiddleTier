<?php
/*
Description:    Manage Keepers
                
****************History************************************
Date:         	04.10.2010
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
			$xml = $objRealm->ActivateKeeper();
			break;
		case 1:
			$xml = $objRealm->StatusKeeper();
			break;
		case 2:
			$xml = $objRealm->CollectKeeper();
			break;			
	}
	unset($objRealm);
	print($xml);	
	
}


?>