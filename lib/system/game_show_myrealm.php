<?php
/*
Description:    log into a game
                
****************History************************************
Date:         	10.11.2009
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/
include ($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_init.php');

  if (isset($_SESSION['game_realmid']))
  	$startype = "1";
  else
  	$startype = "0";
//  	$tmplatename = 'game_myrealm.tpl.php';
//  else
//  	$tmplatename = 'web_gender.tpl.php';

  	
  $tmplatename = 'game_myrealm.tpl.php';
  	
?>