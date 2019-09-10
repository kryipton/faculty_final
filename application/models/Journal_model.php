<?php class Journal_model extends CI_Model{


    public function get_journals()
    {
        return $this->db->get('journal_db')->result_array();
    }

    public function get_journal($where){
        return $this->db->where($where)->get('journal_db')->row_array();
    }


    public function insert($data){
        $this->db->insert('journal_db',$data);
    }


    public function update($data){
        $this->db->update('journal_db',$data);
    }



}
