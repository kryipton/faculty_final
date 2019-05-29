<?php


class Events_model extends  CI_Model{



    public function events(){
        return $this->db->order_by('event_id','DESC')->get('events_db')->result_array();
    }

    public function event($id){
        return $this->db->where('event_id',$id)->get('events_db')->result_array();
    }

    public function get_last_events(){
        return $this->db->order_by('event_id','DESC')->limit(3)->get('events_db')->result_array();
    }

    public function single_event($where)
    {
        return $this->db->where($where)->get('events_db')->row_array();
    }


}