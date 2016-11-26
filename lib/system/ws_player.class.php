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
include_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/system_start_session.php');

class player_webservice {
	
	public function &GetAvatar() {
		
		if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(PLAYER_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml']);
        	$response = $client->getAvatar($param);
        	$returnxml = $response->return;
		
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
	
    public function &GetPlayer() {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(PLAYER_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml']);
        	$response = $client->getPlayer($param);
        	$returnxml = $response->return;
        	//print('</br>playerparam:</br>');
			//var_dump($param);	
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
	
	public function &GetPlayerStats() {
		
		if (isset($_SESSION['pythia_userid']))
		{
        	$client = new SoapClient(PLAYER_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml']);
        	$response = $client->getPlayerStats($param);
        	$returnxml = $response->return;
        	//print('</br>playerparam:</br>');
			//var_dump($param);	
			unset($response);
			unset($client);
		}
        return $returnxml;
    }
    
    public function &InitalSetup($gender) {
    	if (isset($_SESSION['pythia_userid']))
		{
			$client = new SoapClient(PLAYER_WSDL);
        	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'gender'=>$gender);
        	$response = $client->InitSetup($param);
        	$returnxml = $response->return;
        	 
        	unset($response);
        	unset($client);
        	
        	return $returnxml;
		}
    }
  	
    public function &EquipItem($layer,$equipID) {

    	$client = new SoapClient(PLAYER_WSDL);
        	 	
        $param =  array('sessionxml'=>$_SESSION['pythia_xml'],'layer'=>$layer, 'equipid'=>$equipID);
			
        $response = $client->equipItem($param);
        $returnxml = $response->return;
		
		unset($response);
		unset($client);
		
        return $returnxml;
    }
    
 	public function &BuyEquipment($equipID) {
		$client = new SoapClient(PLAYER_WSDL);
       	 	
       	$param =  array('sessionxml'=>$_SESSION['pythia_xml'],'equipid'=>$equipID);
			
       	$response = $client->buyEquipment($param);
        	                     
       	$returnxml = $response->return;
		
		unset($response);
		unset($client);
        return $returnxml;
    }
    
	public function &SellEquipment($layer) {
		$client = new SoapClient(PLAYER_WSDL);
       	 	
       	$param =  array('sessionxml'=>$_SESSION['pythia_xml'],'layer'=>$layer);
			
       	$response = $client->sellEquipment($param);
       	$returnxml = $response->return;
		
		unset($response);
		unset($client);
        return $returnxml;
    }
    
    public function &UnequipItem($layer) {

    	$client = new SoapClient(PLAYER_WSDL);
        	 	
        $param =  array('sessionxml'=>$_SESSION['pythia_xml'],'layer'=>$layer);
			
        $response = $client->unequipItem($param);
        $returnxml = $response->return;
		
		unset($response);
		unset($client);
		
        return $returnxml;
    }
    
}
?>