<?php


class Slide_model extends  CI_Model
{

        public function insert($slide_data){
            $this->db->insert('slide',$slide_data);
        }

        public function get_all(){
            return $this->db->get('slide')->result_array();
        }

        public function get_all_index(){
            return $this->db->order_by('slide_id','DESC')->limit(3)->get('slide')->result_array();
        }

        public function get_slide_by_id($slide_id){
        	return $this->db->where('slide_id',$slide_id)->get('slide')->result_array();
    	}

    	public function update($slide_data,$slide_id){
    		$this->db->where('slide_id',$slide_id)->update('slide',$slide_data);
    	}

}