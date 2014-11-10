<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout("template");
	}

	public function index()
	{
		$this->layout->setTitle("Gestor medicamnetos");
		$datos=$this->medicament_model->getMedicament();
		$this->layout->view('index', compact('datos'));
	}#end

	public function gestortypemedicamet(){
		$this->layout->setTitle("Gestor tipo de medicaments");
		$datos=$this->medicament_model->getTypeMedicament();
		$this->layout->view("gestortypemedicamet",compact('datos'));
	}#end


	public function editypemedicament($id=null){

		if (!$id) {show_404();} #si no existen parametros via get

		$datos=$this->medicament_model->getTypeMedicamentForId($id);
		if (sizeof($datos)==0) { show_404();}
		$this->layout->setTitle("Editar medicamnetos");


		if ($this->input->post()) {
			#die("si post");
			if($this->form_validation->run("add_type_medicament"))
			{
				#die("edit");
				
				$queryUpdate=array(
					"name_type_medicament"=>$this->input->post("type_medicament",true),
					"description_type_medicament"=>$this->input->post("desc_type_medicament",true),
				
				);
				$edit=$this->medicament_model->updateTypeMedicament($queryUpdate,$this->input->post("id",true));
				$this->session->set_flashdata("mensaje","El registro ha sido editado exitosamente");
				redirect(base_url()."home/editypemedicament/".$this->input->post("id",true));
			}#end


		}#end post


		$this->layout->view('editypemedicament', compact('datos'));

	}

	

	public function addtypemedicamente(){
		$this->layout->setTitle("Crear tipo medicamnetos");

		if ($this->input->post()) {
			#die("si post");
			if($this->form_validation->run("add_type_medicament"))
			{
				#die("insert");
				#INSERT INTO `medicamento`.`tipo_medicamento` (`id_type_medicament`, `name_type_medicament`, `description_type_medicament`, `date_type_medicament`) VALUES (NULL, 'nom', 'des', NOW());
				$queryInsert=array(
					"name_type_medicament"=>$this->input->post("type_medicament",true),
					"description_type_medicament"=>$this->input->post("desc_type_medicament",true),
					"date_type_medicament"=>date("Y-m-d"),
				);
				#echo $this->db->last_query();exit;
				#print_r($queryInsert);
				$save=$this->medicament_model->addTypeMedicament($queryInsert);
				#echo $save;
				$this->session->set_flashdata("mensaje","El registro ha sido creado exitosamente");
				redirect(base_url()."home/addtypemedicamente");
			}#end


		}#end post

		$this->layout->view('addtypemedicamente');
	}#end addmedicamente

	public function addmedicamente(){


		if ($this->input->post()) {
			#die("post");
			if($this->form_validation->run("add_medicament"))
			{
				$queryInsert=array(
					"name_medicament"=>$this->input->post("name",true),
					"id_reletion"=>$this->input->post("type",true),
					"description_medicament"=>$this->input->post("desc",true),
					"date_medicament"=>date("Y-m-d"),
				);

				$save=$this->medicament_model->addMedicament($queryInsert);
				$this->session->set_flashdata("mensaje","El registro ha sido creado exitosamente");
				redirect(base_url()."home/addmedicamente");

			}#end validation
		}#end if post

		$datos=$this->medicament_model->getTypeMedicament();
		$this->layout->view('addmedicamente',compact('datos'));

	}#end

	public function editmedicament($id=null){

		if (!$id) {show_404();} #si no existen parametros via get

		$datos=$this->medicament_model->getMedicamentForId($id);
		if (sizeof($datos)==0) { show_404();}
		$this->layout->setTitle("Editar medicamentos");


		if ($this->input->post()) {
			#die("si post");
			if($this->form_validation->run("add_medicament"))
			{
				#die("edit");
				
				$queryUpdate=array(
					"name_medicament"=>$this->input->post("name",true),
					"id_reletion"=>$this->input->post("type",true),
					"description_medicament"=>$this->input->post("desc",true),
					
				);
				$save=$this->medicament_model->editMedicament($queryUpdate,$this->input->post("id",true));
				$this->session->set_flashdata("mensaje","El registro ha sido editado exitosamente");
				redirect(base_url()."home/editmedicament/".$this->input->post("id",true));
			}#end


		}#end post
		$datosTypes=$this->medicament_model->getTypeMedicament();
		$this->layout->view('editmedicament', compact('datos','datosTypes'));

	}#end

	public function deleteMedicament(){	
		
		if ($this->uri->segment(3)){
			$id = $this->uri->segment(3, 0);
			$del=$this->medicament_model->deleteMedicament($id);
			$this->session->set_flashdata("mensaje","El registro ha sido eliminado exitosamente");
			redirect(base_url());
		
		}else{
		   show_404();
		}
		
	}#end

	public function deletetypemedicament(){	
				
		if ($this->uri->segment(3)){
			$id = $this->uri->segment(3, 0);
			$del=$this->medicament_model->deleteTypeMedicament($id);
			#echo $del;
			
		
		}else{
		   show_404();
		}
		
	}#end


}#end class

