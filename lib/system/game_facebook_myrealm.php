<?php
/*
Description:    show the main game play screen
                
****************History************************************
Date:         	8.01.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/
include ($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/configs/facebook.config.inc.php');


$releaseswf = 'MyRealm.swf';
$dynamicvars = '';

if(isset($facebookID)){
	$dungeonid=$facebookID;
}
if (isset($realmID)){
	$dynamicvars = $dynamicvars.'friendrealm: '.$realmID.',';
}
if (isset($accesstoken)){  
	$dynamicvars = $dynamicvars.'tokenid: "'.$accesstoken.'",';
}

if (isset($_SESSION['game_realmid']))
 	$startype = "1";
  else
  	$startype = "0";
  	
//	$tmplatename = 'facebook_myrealm.tpl.php';
//else
//  	$tmplatename = 'facebook_gender.tpl.php';

$tmplatename = 'facebook_myrealm.tpl.php';
  	
  	
?>