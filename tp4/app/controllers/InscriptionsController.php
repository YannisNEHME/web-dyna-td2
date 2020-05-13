<?php
namespace controllers;

use Ubiquity\orm\DAO;
use Ubiquity\utils\http\URequest;
use Ubiquity\utils\http\UResponse;
use Ubiquity\utils\http\USession;
 /**
 * Controller InscriptionsController
 **/
class InscriptionsController extends ControllerBase{

	public function index(){
		$this->loadView("InscriptionsController/index.html");
	}


public function Inscription(){

    UResponse::header("location" ,"/");
 
    
    USession::exists("coucou");
    DAO::insert("coucou");
    URequest::SetValuesToObject("coucou");
    
    }
}