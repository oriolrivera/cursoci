<?php
class medicament_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getMedicament(){

		$query=$this->db
			->select("`id_medicament`,`name_medicament`,`id_reletion`,`date_medicament`")
			->from("medicamentos")
			->get();
			return $query->result();

	}#end

	public function getMedicamentForId($id){

		$query=$this->db
			->select("`id_medicament`,`name_medicament`,`id_reletion`,description_medicament,`date_medicament`")
			->from("medicamentos")
			->where(array("id_medicament"=>$id))
			->get();
			#echo $this->db->last_query();exit; imprimier consulta
			return $query->row();

	}#end

}#end class