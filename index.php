<?php
/*
Description:    Main game index page
                
****************History************************************
Date:         	10.11.2009
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/
  include_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/system_start_session.php');
  
  //default settings
  $myserver = $_SERVER['SERVER_NAME'];
  
  if (isset($_GET['item']))
  {
    //get game item
   	include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_item.php');
  }elseif (isset($_GET['avatar']))
  {
   	//Get player avatar
   	include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_avatar.php');
  }elseif (isset($_GET['realm']))
  {
   	//Get player realm
   	include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_realm.php');
  }elseif (isset($_GET['filter']))
  {
   	//Item filter
  	include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_filter.php');
  }elseif (isset($_GET['rooms']))
  {
   	//Realm Save Room
   	include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_room.php');
  }elseif (isset($_GET['equipment']))
  {
   	//Player Equipment
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_equipment.php');
  }elseif (isset($_GET['combat']))
  {
   	//Encounter Combat
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_combat.php');
  }elseif (isset($_GET['trap']))
  {
   	//Encounter Traps
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_trap.php');
  }elseif (isset($_GET['saveitem']))
  {
   	//Realm Items
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_saveitem.php');
  }elseif (isset($_GET['keeper']))
  {
   	//Realsm Keepers
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_keepers.php');
  }elseif (isset($_GET['findencounter']))
  {
   	//Find Encounter
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_findencounter.php');
  }elseif (isset($_GET['publish']))
  {
   	//Find Encounter
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_publish.php');
  }elseif (isset($_GET['mastchest']))
  {
   	//Pop The master chest
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_masterchest.php');
  }elseif (isset($_GET['friendrealm']))
  {
   	//Get friends realm
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_friendrealm.php');
  }elseif (isset($_GET['init']))
  {
  	//Inital setup for my realm
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_setup.php');
  }elseif (isset($_GET['stats']))
  {
  	//Get the player stats
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_player_stats.php');
  }elseif (isset($_GET['store']))
  {
  	//Access the game store
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_store.php');
  }elseif (isset($_GET['monsterbag']))
  {
   	//Open monster bag
    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_game_monsterbag.php');
  }else
  {
	
  	include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/tbs.inc.php');
	$tpl = new clsTinyButStrong;
	  	
	if (isset($_GET['login']))
	{//Load Login Page
		
		include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_show_login.php');
	}elseif (isset($_GET['register']))
	{//Realm Builder
		include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_show_register.php');
	}elseif (isset($_GET['myrealm']))
	{//Realm Builder
		include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_show_myrealm.php');
	}
	/*
	elseif (isset($_GET['fbmyrealm']))
	{//Facebook version of Realm Builder
		include ($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_facebook_login.php');
		include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_facebook_myrealm.php');
	}
	*/
	elseif (isset($_GET['3I77n1ixX14IX6nX2Y9BA5UYL18bvns0']))
	{//Facebook version of Realm Builder
		$param = explode('^',base64_decode($_GET['3I77n1ixX14IX6nX2Y9BA5UYL18bvns0']));
		$facebookID = $param[0];
		$username = $param[1];
		$accesstoken = $param[2];
		
		include ($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_facebook_login.php');
		include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_facebook_myrealm.php');
	}elseif (isset($_GET['664UH88P37WRE16Yho74RjE95Gih8m5b']))
	{//Facebook version of Realm Builder
		$param = explode('^',base64_decode($_GET['664UH88P37WRE16Yho74RjE95Gih8m5b']));
		$realmID = $param[0];
		$facebookID = $param[1];
		$username = $param[2];
		$accesstoken = $param[3];
		
		include ($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_facebook_login.php');
		include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_facebook_myrealm.php');
	}elseif (isset($_GET['buy']))
	{
   		//Show the buy bucks screen
    	include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_show_buybucks.php');
  	}else //Load Login Page
	    include($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/system/game_show_login.php');
 	 	
	//Load and display the template
	$tpl->LoadTemplate($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/templates/' . $tmplatename);
	$tpl->Show();
  }
 
?>
