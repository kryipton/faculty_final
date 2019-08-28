<?php


class Admin_model extends  CI_Model{

	public function update_admin($data){
		$this->db->where("user_id", 1)->update('users_db',$data);
	}

	public function get_admin(){
		return $this->db->get('users_db')->row_array();
	}

}