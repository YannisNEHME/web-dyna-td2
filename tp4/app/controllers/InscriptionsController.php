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
    
        if(DAO::insert($variable)){
                echo "Correct, Incorrect";
                UResponse::header("location" ,"/InscriptionsController"); 
            }
            else{
                echo "<div class='ui blue message'><p>Votre adresse Mail " . $_POST["email"] . " n'a pas fonctionnée pour votre inscription</p><a href='/inscriptionsController'>Vous aller retourner à la page d'accueil</a></div>";
            }
    
    }
}
