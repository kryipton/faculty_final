<?php


class Events_model extends  CI_Model{


    public function eventsInsert($event_data)
    {
        $this->db->insert('events_db',$event_data);

    }

    public function getAllEvents()
    {
        return $this->db->order_by('event_id','DESC')->get('events_db')->result();
    }

    public function eventDelete($eventId)
    {
        $this->db->where('event_id',$eventId)->delete('events_db');
    }

    public function event_data($event_id)
    {
        return $this->db->where('event_id',$event_id)->get('events_db')->row();
    }

    public function eventsUpdate($event_update_data,$event_id)
    {
        $this->db->where('event_id',$event_id)->update('events_db',$event_update_data);
    }

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