<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout("template");
	}

	public function index()
	{
		$this->layout->setTitle("Home");
		$datos=$this->medicament_model->getMedicament();
		$this->layout->view('index', compact('datos'));
	}#end

	public function editmedicament($id=null){

		if (!$id) {show_404();} #si no existen parametros via get

		$datos=$this->medicament_model->getMedicamentForId($id);
		if (sizeof($datos)==0) { show_404();}
		$this->layout->setTitle("Editar medicamnetos");
		$this->layout->view('editmedicament', compact('datos'));

	}


}#end class

