<?php
/*
Description:    Publish the current realm
                
****************History************************************
Date:         	04.10.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'].'/apps/game/lib/system/ws_realm.class.php';


	//Call the realm WS
	$objRealm=new realm_webservice();
	$objRealm->PublishRealm();
	unset($objRealm);
		

?>