<?php


class Mecnun_model extends  CI_Model{

//==========   Xeberemeliyatlari ===================
    public function getNews()
    {
       return $this->db->order_by('news_id', 'DESC')->get('news_db')-> result_array();
    }

    public function deleteNews($where)
    {
        $this->db->where($where)->delete('news_db');
    }

    public function getOneNews($where)
    {
       return $this->db->where($where)->get('news_db')->row_array();
    }

    public function addNews($news_data)
    {
        $this->db->insert('news_db',$news_data);
    }

    public function updateNews($where,$news_data)
    {
        $this->db->where($where)->update('news_db',$news_data);
    }

    //==================================================   Slider emeliyatlari =======================================================================


    public function getSlider()
    {
        return $this->db->order_by('slide_id','DESC')->get('slide')->result_array();
    }

    public function deleteSlide($where)
    {
        $this->db->where($where)->delete('slide');
    }

    public function addSlider($slide_data){
        $this->db->insert('slide',$slide_data);
    }

    public function updateSlider($where,$slide_data){
        $this->db->where($where)->update('slide',$slide_data);
    }

    public function getSlide($where)
    {
        return $this->db->where($where)->get('slide')->row_array();
    }


//    =================================================================cavidin isleri=================================================================

    public function get_teachers()
    {
        return $this->db->get('teachers_db')->result_array();
    }

    public function get_teacher($where)
    {
        return $this->db->where($where)->get('teachers_db')->row_array();
    }

    public function get_categories()
    {
        return $this->db->get('department_categories')-> result_array();
    }

    public function add_teacher($data){
        $this->db->insert('teachers_db',$data);
    }

    public function update_teacher($where, $data){
        $this->db->where($where)->update('teachers_db',$data);
    }

    public function delete_teacher($where){
        $this->db->where($where)->delete('teachers_db');
    }

//    =================================================================cavidin isleri=================================================================



    //==================================================   Tedbir emeliyyatlari emeliyatlari =======================================================================


    public function getEvents()
    {
        return $this->db->get('events_db')->result_array();
    }


}