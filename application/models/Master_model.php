<?php


class Master_model extends  CI_Model{

	public function get_desc(){
		return $this->db->get('master_about_text')->result_array();
	}

    public function get_master_specialities(){
        return $this->db->get('master_speciality_db')->result_array();
    }

    public function get_master_speciality($where){
        return $this->db->where($where)->get('master_speciality_db')->row_array();
    }


}