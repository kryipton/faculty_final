<?php


class Bachelor_model extends  CI_Model{

	public function get_desc(){
		return $this->db->get('bachelor_about_text')->result_array();
	}

    public function get_bachelor_specialities(){
        return $this->db->get('bachelor_speciality_db')->result_array();
    }

    public function get_bachelor_speciality($where){
        return $this->db->where($where)->get('bachelor_speciality_db')->row_array();
    }


    public function get_contact()
    {
        return $this->db->get('bachelor_contact')->row_array();

    }

    public function update_contact($data)
    {
        $this->db->update("bachelor_contact",$data);
    }

}