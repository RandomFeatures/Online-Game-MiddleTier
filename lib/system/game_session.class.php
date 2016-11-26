<?php
 /*
Description:    Class for storing and retrieving the LoA Data
				form the session
                
****************History************************************
Date:         	04.07.2010
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/
include_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/base.inc.php'); 
include_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/system_start_session.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/apps/game/lib/configs/config.inc.php');

global $objGameSession;

if (!$objGameSession)
{ //create a new globlal instance of the dao is one does not exist
	// variables come from the config
	$objGameSession = new GameGameSession();
}

class GameGameSession{
    
    private $playerID = 0; //Player ID
    private $realmID = 0; //Realm ID
	private $gameID = 0; //Game ID
    private $sourceID = 0; //Source ID
    private $userID = 0;
    private $sessionID = '';
    private $sessionXML = '';
    
	function __construct() {
		
        $this->playerID = (isset($_SESSION['game_playerid'])) ? $_SESSION['game_playerid'] : 0;
        $this->realmID = (isset($_SESSION['game_realmid'])) ? $_SESSION['game_realmid'] : 0;
        $this->gameID = (isset($_SESSION['pythia_gameid'])) ? $_SESSION['pythia_gameid'] : 0;
        $this->sourceID = (isset($_SESSION['pythia_sourceid'])) ? $_SESSION['pythia_sourceid'] : 0;
        $this->userID = (isset($_SESSION['pythia_userid'])) ? $_SESSION['pythia_userid'] : 0;
        $this->sessionID = session_id();
        $this->sessionXML = (isset($_SESSION['pythia_xml'])) ? $_SESSION['pythia_xml'] :'';
        $this->GetPlayerData();
    }
	

	public function GetPlayerData()
	{
		//go get player and realm data is it is not present
        if ((isset($_SESSION['pythia_userid'])) && ($this->playerID == 0 || $this->realmID == 0))
        {
        	//call the player webserice
			$client = new SoapClient(PLAYER_WSDL);
        	$param =  array('sessionxml'=>$this->sessionXML);
        	$response = $client->getPlayer($param);
        	$returnxml = $response->return;
			unset($response);
			unset($client);

			$xmlParser = new gc_xmlparser($returnxml);
			$objxml = $xmlParser->GetData();
			
			//if everything lines up record the data in the session
			if ($_SESSION['pythia_userid'] == $objxml['Charon-XML']['dataset']['player']['userID'])
			{
				$this->SetPlayerID($objxml['Charon-XML']['dataset']['player']['id']);
				$this->SetRealmID($objxml['Charon-XML']['dataset']['player']['realmID']);
			}
        	
        }
	}
	
	 
	public function GetPlayerID()
	{
		return $this->playerID;
	}
	
	public function SetPlayerID($playerid)
	{
		$this->playerID = $playerid;
		$_SESSION['game_playerid'] = $playerid;
	}
	
	public function GetRealmID()
	{
		return  $this->realmID;	
	}
	
	public function SetRealmID($realmid)
	{
		 $this->realmID = $realmid;
		 $_SESSION['game_realmid'] = $realmid;
	}
	
	public function GetGameSessionArray()
	{
		return array('sessionxml'=>$this->sessionXML,'playerid'=> $this->playerID,'realmid'=> $this->realmID);
	}
}
?>