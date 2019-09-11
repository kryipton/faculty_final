<?php class Journal_model extends CI_Model{


    public function get_journals()
    {
        return $this->db->order_by("id","DESC")->get('journal_db')->result_array();
    }

    public function get_journals_pagination($limit, $count)
    {
        return $this->db->limit($limit, $count)->order_by("id","DESC")->get('journal_db')->result_array();
    }

    public function get_count_journals_pagination(){
        return $this->db->count_all('journal_db');
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

    public function delete($where)
    {
        $this->db->where($where)->delete("journal_db");
    }


    public function get_publications($where){
        return $this->db->where($where)->get('publications')->result_array();
    }


    public function get_publication_pagination($limit, $count)
    {
        return $this->db->limit($limit, $count)->order_by("id","DESC")->get('publications')->result_array();
    }

    public function get_count_publication_pagination(){
        return $this->db->count_all('publications');
    }


    public function delete_publication($where)
    {
        $this->db->where($where)->delete("publications");
    }

    public function insert_publication($data){
        $this->db->insert('publications',$data);
    }

}
