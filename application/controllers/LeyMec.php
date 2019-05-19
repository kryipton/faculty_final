<?php
class LeyMec extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LeyMec_model');
    }


}