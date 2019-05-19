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


//    =================================================================Mellimler hissesi=================================================================

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

//    ==================================================================================================================================



    //==================================================   Tedbir emeliyyatlari emeliyatlari =======================================================================


    public function getEvents()
    {
        return $this->db->order_by('event_id','DESC')->get('events_db')->result_array();
    }

    public function deleteEvent($where)
    {
        $this->db->where($where)->delete('events_db');
    }

    public function addEvent($event_data)
    {
        $this->db->insert('events_db',$event_data);
    }


    public function getEvent($where)
    {
        return $this->db->where($where)->get('events_db')->row_array();
    }

    public function updateEvent($where,$event_data)
    {
        $this->db->where($where)->update('events_db',$event_data);
}



//==========================Laboratory Hissesi========================================================================


   public function insert_laboratory($data)
    {
        $this->db->insert('department_labaratory',$data);
    }

    public function get_laboratories()
    {
        return $this->db->order_by('id','DESC')->get('department_labaratory')->result_array();
    }

    public function getLaboratory($where)
    {
        return $this->db->where($where)->get('department_labaratory')->row_array();
    }

    public function delete_laboratory($id)
    {
        $this->db->where('id',$id)->delete('department_labaratory');
    }

    public function updateLab($where,$data)
    {
        $this->db->where($where)->update('department_labaratory',$data);
    }






    //==================================================   Haqqimizda emeliyyatlari emeliyatlari =======================================================================


    public function getAbout($where)
    {
       return $this->db->where($where)->get('about_db')->row_array();

}

    public function updateAbout($where,$data)
    {
        $this->db->where($where)->update('about_db',$data);
}




//==================================================   Bakalavr hissesi=======================================================================

    public function get_bachelor_about_text(){
        return $this->db->where("id", 1)->get("bachelor_about_text")->row_array();
    }

    public function update_bachelor_about_text($data){
        $this->db->where("id", 1)->update("bachelor_about_text", $data);
    }

    public function get_bachelor_all_specialties(){
        return $this->db->get("bachelor_speciality_db")->result_array();
    }

    public function add_bachelor_speciality($data){
        $this->db->insert("bachelor_speciality_db", $data);
    }

    public function delete_bachelor_speciality($where){
        $this->db->where($where)->delete("bachelor_speciality_db");
    }

    public function get_single_speciality($where){
        return $this->db->where($where)->get("bachelor_speciality_db")->row_array();
    }

    public function update_bachelor_speciality($where, $data){
        $this->db->where($where)->update("bachelor_speciality_db", $data);
    }





    //==================================================   Magistr hissesi=======================================================================

    public function get_master_about_text(){
        return $this->db->where("id", 1)->get("master_about_text")->row_array();
    }

    public function update_master_about_text($data){
        $this->db->where("id", 1)->update("master_about_text", $data);
    }

    public function get_master_all_specialties(){
        return $this->db->get("master_speciality_db")->result_array();
    }

    public function add_master_speciality($data){
        $this->db->insert("master_speciality_db", $data);
    }

    public function delete_master_speciality($where){
        $this->db->where($where)->delete("master_speciality_db");
    }

    public function get_single_speciality_master($where){
        return $this->db->where($where)->get("master_speciality_db")->row_array();
    }

    public function update_master_speciality($where, $data){
        $this->db->where($where)->update("master_speciality_db", $data);
    }




    //==================================================   Doktorantura hissesi=======================================================================

    public function get_doctorate_about_text(){
        return $this->db->where("id", 1)->get("doctorate_about_text")->row_array();
    }

    public function update_doctorate_about_text($data){
        $this->db->where("id", 1)->update("doctorate_about_text", $data);
    }

    public function get_doctorate_all_specialties(){
        return $this->db->get("doctorate_speciality_db")->result_array();
    }

    public function add_doctorate_speciality($data){
        $this->db->insert("doctorate_speciality_db", $data);
    }

    public function delete_doctorate_speciality($where){
        $this->db->where($where)->delete("doctorate_speciality_db");
    }

    public function get_single_speciality_doctorate($where){
        return $this->db->where($where)->get("doctorate_speciality_db")->row_array();
    }

    public function update_doctorate_speciality($where, $data){
        $this->db->where($where)->update("doctorate_speciality_db", $data);
    }








//==================================================   Loqo ve basliq hissesi=======================================================================

    public function get_logo_and_title(){
        return $this->db->where("id", 1)->get("logo_and_title")->row_array();
    }

    public function update_logo_and_title($data){
        return $this->db->where("id", 1)->update("logo_and_title", $data);
    }







}