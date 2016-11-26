<?php
/*
 Description:    Wrapper for the Player Realm Webservice
 
 ****************History************************************
 Date:         	04.07.2010
 Author:       	Allen Halsted
 Mod:          	Creation
 ***********************************************************
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/apps/game/lib/configs/config.inc.php');

class realm_webservice {
	
    public function &GetRealm() {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml']);
        	$response = $client->getRealm($param);
        	$returnxml = $response->return;
			
			unset($response);
			unset($client);
		}
        return $returnxml;
    }

	public function &PublishRealm() {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml']);
        	$client->publishRealm($param);
			unset($client);
		}
    }    

	public function &SaveRealm($floorcount, $gridcol, $gridrow, $roomcount, $startroom,$chestroom) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'floorcount'=>$floorcount, 'gridcol'=>$gridcol, 
        					'gridrow'=>$gridrow, 'roomcount'=>$roomcount, 'startroom'=>$startroom, 'chestroom'=>$chestroom);
        	$response = $client->saveRealm($param);
        	
			unset($response);
			unset($client);
		}
    }
    
	public function &SaveItem($itemid, $roomid, $gridx, $gridy, $objtype, $objid,  $dir) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'itemid'=>$itemid, 'roomid'=>$roomid, 'gridy'=>$gridy, 
        					'gridx'=>$gridx, 'objecttype'=>$objtype, 'objectid'=>$objid, 'direction'=>$dir);
        	$client->saveRoomItem($param);
			
			unset($client);
		}
    }

	public function &AddItem($itemid, $roomid, $gridx, $gridy, $objtype, $objid,  $dir) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'itemid'=>$itemid, 'roomid'=>$roomid, 'gridy'=>$gridy, 
        					'gridx'=>$gridx, 'objecttype'=>$objtype, 'objectid'=>$objid, 'direction'=>$dir);
        	$response = $client->addRoomItem($param);
        	$returnxml = $response->return;
        	
			unset($response);
			unset($client);
		}
		return $returnxml;
    }
    
	public function &SaveRealmChest($gridx, $gridy, $dir) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'chesty'=>$gridy, 'chestx'=>$gridx, 'direction'=>$dir);
        	$client->saveRealmChest($param);
			
			unset($client);
		}
    } 
    
	public function &StoreItem($itemid, $roomid) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'itemid'=>$itemid, 'roomid'=>$roomid);
        	$client->storeRoomItem($param);
			
			unset($client);
		}
    }
    
	public function &SellItem($itemid, $roomid) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'itemid'=>$itemid, 'roomid'=>$roomid);
        	$client->sellRoomItem($param);
			
			unset($client);
		}
    }
    
	public function &BuyItem($itemid, $roomid, $gridx, $gridy, $objtype, $objid,  $dir) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'itemid'=>$itemid, 'roomid'=>$roomid, 'gridy'=>$gridy, 
        					'gridx'=>$gridx, 'objecttype'=>$objtype, 'objectid'=>$objid, 'direction'=>$dir);
        	$response = $client->buyRoomItem($param);
        	$returnxml = $response->return;
        	
			unset($response);
			unset($client);
		}
		return $returnxml;
    }
    
	public function &MoveRoom($roomid, $floor, $gridy, $gridx) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'roomid'=>$roomid, 'floor'=>$floor, 
        					'gridy'=>$gridy, 'gridx'=>$gridx);
        	$client->moveRoom($param);
        	
			unset($client);
		}
    }

    public function &SellRoom($roomid, $floor) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'roomid'=>$roomid, 'floor'=>$floor);
        	$client->sellRoom($param);
        	
			unset($client);
		}
    }
			
    
	public function &BuyRoom($roomid, $tempID, $objID, $floor, $gridy, $gridx) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'roomid'=>$roomid, 'templateid'=>$tempID,'objectid'=>$objID, 'floor'=>$floor, 
        					'gridy'=>$gridy, 'gridx'=>$gridx);
        	$response = $client->buyRoom($param);
        	$returnxml = $response->return;
        	
			unset($response);
			unset($client);
		}
		return $returnxml;
    }
    
	public function &ConnectRoom($roomid, $dir, $link, $floor) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'roomid'=>$roomid, 'direction'=>$dir, 'linkroomid'=>$link, 'floor'=>$floor);
        	$client->connectRoom($param);

        	unset($client);
		}
    }
    
	public function &DisconnectRoom($roomid, $link) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'roomid'=>$roomid, 'linkroomid'=>$link);
        	$client->disconnectRoom($param);
        	
			unset($client);
		}
    }
    
	public function &DisconnectAll($roomid) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'roomid'=>$roomid);
        	$client->disconnectAll($param);
        	
			unset($client);
		}
    }
    
    public function &SetChestRoom($roomid) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'chestroom'=>$roomid);
        	$client->setChestRoom($param);
        	
			unset($client);
		}
    }
	
    public function &SetStartRoom($roomid) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'startroom'=>$roomid);
        	$client->setStartRoom($param);
        	
			unset($client);
		}
    }

    
 	public function &GetRoom($roomid) {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'roomid'=>$roomid);
        	$response = $client->getRoom($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
		return $returnxml;
    }
    
  	public function &ActivateKeeper() {
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml']);
        	$response = $client->activateRealmKeeper($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &StatusKeeper() {
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml']);
        	$response = $client->statusRealmKeeper($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &CollectKeeper() {
				
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml']);
        	$response = $client->collectRealmKeeper($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
	public function &GetStoreList($ItemType){
				
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'itemtype'=>$ItemType);
        	$response = $client->getStoreList($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
    public function &PurchaseGameStore($ItemID){
				
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(REALM_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'itemid'=>$ItemID);
        	$response = $client->purchaseGameStore($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
    
}
?>
