<?php


class Laboratory_model extends  CI_Model{

	public function update($data){
		$this->db->update('laboratory_db',$data);
	}
	public function get_all(){
		return $this->db->get('laboratory_db')->result_array();
	}
	
}