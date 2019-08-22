<?php


class Services_model extends  CI_Model{

	public function get_services(){
		return $this->db->get('services')->result_array();
	}

    public function get_service($where){
        return $this->db->where($where)->get('services')->row_array();
    }

	public function add_service($data){
	    $this->db->insert("services", $data);
    }

    public function delete_service($where){
	    $this->db->where($where)->delete("services");
    }

    public function update_service($where, $data){
        $this->db->where($where)->update("services", $data);
    }




}