<?php


class Admin_model extends  CI_Model{

    public function login($user_email,$user_password){
        return $this->db->where('user_email',$user_email)->where('user_password',$user_password)->get('users_db')->result_array();
    }

}