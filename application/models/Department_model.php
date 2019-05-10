<?php


class Department_model extends  CI_Model{

    public function get_desc(){
        return $this->db->get('department_about_text')->result_array();
    }

    public function get_bachelor_specialities(){
        return $this->db->get('department_speciality_db')->result_array();
    }

    public function get_bachelor_speciality($where){
        return $this->db->where($where)->get('department_speciality_db')->row_array();
    }

}