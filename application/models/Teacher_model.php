<?php


class Teacher_model extends  CI_Model
{

	public function all(){
		return $this->db->order_by('teacher_id','DESC')->get('teachers_db')->result_array();
	}

    public function insert($data){
    	$this->db->insert('teachers_db',$data);
    }

    public function delete($id){

    	$this->db->where('teacher_id',$id)->delete('teachers_db');

    }

    public function single($id){
    	return $this->db->where('teacher_id',$id)->get('teachers_db')->result_array();
    }

    public function update($data,$id){
    	$this->db->where('teacher_id',$id)->update('teachers_db',$data);
    }

    public function all_teachers(){
        return $this->db->order_by('teacher_id','DESC')->get('teachers_db')->result_array();
    }

    public function single_front($id){
        return $this->db->where('teacher_id',$id)->get('teachers_db')->result_array();
    }

}