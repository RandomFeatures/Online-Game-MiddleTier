<?php
/*
 Description:    Wrapper for the Encounter Webservice
 
 ****************History************************************
 Date:         	04.07.2010
 Author:       	Allen Halsted
 Mod:          	Creation
 ***********************************************************
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/apps/game/lib/configs/config.inc.php');

class encounter_webservice {
	
    
	 public function &GetEncounter() {
       	$client = new SoapClient(ADVENTURE_WSDL);
       	$param =  array('sessionxml'=>$_SESSION['pythia_xml']);
       	$response = $client->getEncounter($param);
       	$returnxml = $response->return;
			
		unset($response);
		unset($client);
        return $returnxml;
    }
	
 	public function &GetXRefFriendRealm($xref) {
       	$client = new SoapClient(ADVENTURE_WSDL);
       	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'xref'=>$xref);
       	$response = $client->getXRefFriendRealm($param);
       	$returnxml = $response->return;
			
		unset($response);
		unset($client);
        return $returnxml;
    }
    
 	public function &GetFriendRealm($userid) {
       	$client = new SoapClient(ADVENTURE_WSDL);
       	$param =  array('sessionxml'=>$_SESSION['pythia_xml'], 'userid'=>$userid);
       	$response = $client->getFriendRealm($param);
       	$returnxml = $response->return;
			
		unset($response);
		unset($client);
        return $returnxml;
    }
    
	public function &ResolveCombat($MonsterID) {
		$client = new SoapClient(ADVENTURE_WSDL);
       	 	
       	$param =  array('sessionxml'=>$_SESSION['pythia_xml'],'monsterid'=>$MonsterID);
		
       	$response = $client->resolveCombat($param);
       	$returnxml = $response->return;
		
		unset($response);
		unset($client);

		return $returnxml;
    }
    
	public function &PopMasterChest($RealmID) {
		$client = new SoapClient(ADVENTURE_WSDL);
       	 	
       	$param =  array('sessionxml'=>$_SESSION['pythia_xml']);
			
       	$response = $client->popMasterChest($param);
       	$returnxml = $response->return;
		
		unset($response);
		unset($client);

		return $returnxml;
    }
    
    public function &PopMonsterBag($RealmID) {
		$client = new SoapClient(ADVENTURE_WSDL);
       	 	
       	$param =  array('sessionxml'=>$_SESSION['pythia_xml']);
			
       	$response = $client->popMonsterBag($param);
       	$returnxml = $response->return;
		
		unset($response);
		unset($client);

		return $returnxml;
    }
    
	public function &ResolveTrap($TrapID) {

		$client = new SoapClient(ADVENTURE_WSDL);
         	
        $param =  array('sessionxml'=>$_SESSION['pythia_xml'],'trapid'=>$TrapID);
		
        $response = $client->resolveTrap($param);
        $returnxml = $response->return;
		
		unset($response);
		unset($client);

		return $returnxml;
    }
    
    
}
?>
