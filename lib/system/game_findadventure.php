<?php
/*
Description:   Find a random encounter
                
****************History************************************
Date:         	04.26.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_encounter.class.php';


$objencounter=new encounter_webservice();
$xml = $objencounter->GetEncounter();
unset($objencounter);

print($xml);


?>