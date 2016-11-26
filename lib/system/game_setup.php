<?php
/*
Description:   inital setup after player chooses gender
                
****************History************************************
Date:         	08.01.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/
include ($_SERVER['DOCUMENT_ROOT'].'/apps/game/lib/configs/facebook.config.inc.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/ws_player.class.php');

if (isset($_GET['gender']))
{
	$xml = '';
	//Get the webservice
	$objplayer=new player_webservice();
	//Insert the default player
	$xml = $objplayer->InitalSetup($_GET['gender']);	

	unset($objplayer);
	print($xml);
	//if ($_SESSION['pythia_sourceid'] == 0)
	//	header ("Location:http://".$_SERVER['SERVER_NAME']."/apps/game/index.php?fbmyrealm");
	//if ($_SESSION['pythia_sourceid'] == 1)
	//	header ("Location:http://".$_SERVER['SERVER_NAME']."/apps/game/index.php?myrealm");
   
}

?>