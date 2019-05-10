<?php


class Link_model extends  CI_Model{

	public function insert($data){
		$this->db->insert('use_links_db',$data);
	}

	public function get(){
		return $this->db->order_by('link_id','DESC')->get('use_links_db')->result_array();
	}
	
	public function update($data){
		$this->db->update('use_links_db',$data);
	}
}