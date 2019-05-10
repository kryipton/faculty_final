<?php


class About_model extends  CI_Model{

	public function update($data){
		$this->db->update('about_db',$data);
	}

	public function about_get(){
		return $this->db->get('about_db')->result_array();
	}

}