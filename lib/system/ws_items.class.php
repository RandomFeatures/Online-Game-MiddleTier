<?php
/*
 Description:    Wrapper for the Player Webservice
 
 ****************History************************************
 Date:         	04.07.2010
 Author:       	Allen Halsted
 Mod:          	Creation
 ***********************************************************
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/apps/game/lib/configs/config.inc.php');

class items_webservice {
	
	private $NoResults = '<?xml version="1.0"?><Charon-XML><header id="ItemsWS"><status>Failure</status></header><dataset><row><fieldlist><field name="ErrorID" type="int">0</field><field name="EventCode" type="int">0</field><field name="Message" type="string"><![CDATA[No Results]]></field><field name="SystemMessage" type="string"><![CDATA[Session Failed]]></field></fieldlist></row></dataset></Charon-XML>';
	
	public function &GetMonster($monsterID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('monsterid'=>$monsterID);
        	$response = $client->getMonsterDetails($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
	
	public function &GetRandomMonster() {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$monsterID = '0';
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('monsterid'=>$monsterID);
        	$response = $client->getMonsterDetails($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
    public function &GetMonsterList($tilesetID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('tilesetid'=>$tilesetID);
        	$response = $client->getMonsterList($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &GetTrap($trapID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('trapid'=>$trapID);
        	$response = $client->getTrapDetails($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
 	public function &GetTrapList($tilesetID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('tilesetid'=>$tilesetID);
        	$response = $client->getTrapList($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &GetItem($itemID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('itemid'=>$itemID);
        	$response = $client->getItemDetails($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &GetAllItemList($tilesetID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('tilesetid'=>$tilesetID);
        	$response = $client->getAllItemList($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &GetRoomItemList($tilesetID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('tilesetid'=>$tilesetID);
        	$response = $client->getRoomItemList($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &GetWallItemList($tilesetID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('tilesetid'=>$tilesetID);
        	$response = $client->getWallItemList($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &GetAllList($tilesetID, $objType) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('tilesetid'=>$tilesetID, 'objecttype'=>$objType);
        	$response = $client->getItemList($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }	
    
	public function &GetFloor($floorID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('structurid'=>$floorID);
        	$response = $client->getFloorDetails($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
	public function &GetFloorList($tilesetID, $template) {
		$returnxml = $NoResults;
		
		if ($template == "") $template = 1;	
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('tilesetid'=>$tilesetID, "templateid"=>$template);
        	$response = $client->getFloorList($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
	public function &GetWall($wallID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('structurid'=>$wallID);
        	$response = $client->getWallDetails($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
	public function &GetWallList($tilesetID, $template) {
		$returnxml = $NoResults;
		
		if ($template == "") $template = 1;	
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('tilesetid'=>$tilesetID, "templateid"=>$template);
        	$response = $client->getWallList($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
    public function &GetEquip($equipID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('equipid'=>$equipID);
        	$response = $client->getEquipmentDetails($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
 	
    public function &GetEquipList($layer,$tileset,$gender) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('layer'=>$layer,'tileset'=>$tileset, 'gender'=>$gender);
        	$response = $client->getEquipmentList($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }  
    
	public function &TileSetList() {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array();
        	$response = $client->getTileSetList();
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &GetRoomList() {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array();
        	$response = $client->getRoomList();
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &GetRoom($roomid) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
			$param = array('roomid'=>$roomid);
        	$response = $client->getRoomDetails($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &GetInventoryList() {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('sessionxml'=>$_SESSION['pythia_xml']);
        	$response = $client->getInventory($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
    public function &GetEquipmentInventoryList() {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	$param = array('sessionxml'=>$_SESSION['pythia_xml']);
        	$response = $client->getEquipmentInventory($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &AddToInventory($objectType,$objectID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	 	
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'],'objecttype'=>$objectType, 'objectid'=>$objectID);
			
        	$response = $client->addToInventory($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
    public function &RemoveFromInventory($objectType,$objectID) {
		$returnxml = $NoResults;
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(ITEMS_WSDL);
        	 	
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'],'objecttype'=>$objectType, 'objectid'=>$objectID);
			
        	$response = $client->removeFromInventory($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
   
    
}