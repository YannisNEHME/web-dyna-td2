<?php
namespace controllers;
 /**
 * Controller InsciptionsControler
 **/
class InsciptionsControler extends ControllerBase{

	public function index(){
		$this->loadView("InsciptionsControler/index.html");
	}
}
