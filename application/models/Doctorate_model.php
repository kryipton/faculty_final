<?php


class Doctorate_model extends  CI_Model{

	public function get_desc(){
		return $this->db->get('doctorate_about_text')->result_array();
	}

    public function get_doctorate_specialities(){
        return $this->db->get('doctorate_speciality_db')->result_array();
    }

    public function get_doctorate_speciality($where){
        return $this->db->where($where)->get('doctorate_speciality_db')->row_array();
    }

    public function get_contact()
    {
        return $this->db->get('doctorate_contact')->row_array();

    }

    public function update_contact($data)
    {
        $this->db->update("doctorate_contact",$data);
    }



}