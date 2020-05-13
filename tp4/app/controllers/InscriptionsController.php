<?php
namespace controllers;

use Ubiquity\orm\DAO;
use Ubiquity\utils\http\URequest;
use Ubiquity\utils\http\UResponse;
use Ubiquity\utils\http\USession;
use models\Inscription;

 /**
 * Controller InscriptionsController
 **/
class InscriptionsController extends ControllerBase{

	public function index(){
		$this->loadView("InscriptionsController/index.html");
	}


public function Inscription(){

    		$this->loadView("InscriptionsController/inscription.html");

    }
    
    
public function do(){
    
    $variable = new Inscription();
        $variable->setNom($_POST["pseudo"]);
        $variable->setEmail($_POST["email"]);
        DAO::insert($variable);
    
    if(DAO::insert($var)){
            echo "Confirmé, redirection...";
            UResponse::header("location" ,"/inscriptionsController"); 
        }
        else{
            echo "<div class='ui red message'><p>Votre adresse Mail " . $_POST["email"] . " n'a pas fonctionnée pour votre inscription</p><a href='/inscriptionsController'>Retour à la page d'accueil</a></div>";
        }
    
    }
}