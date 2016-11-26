<?php
/*
Description:   Get the Realm XML
                
****************History************************************
Date:         	04.10.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_realm.class.php';


	$objRealm=new realm_webservice();
	$xml = $objRealm->GetRealm();
	unset($objRealm);
	
	print ($xml);
	
?>