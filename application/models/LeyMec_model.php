<?php


class LeyMec_model extends  CI_Model{

    public function getAdmin($where)
    {
        return $this->db->where($where)->get('users_db')->row_array();
    }
}