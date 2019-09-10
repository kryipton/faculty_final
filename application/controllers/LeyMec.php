<?php
date_default_timezone_set('Asia/Baku');
class LeyMec extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('LeyMec_model');
    }

    public function login()
    {

        if (get_active_user()){
            redirect(base_url('himalaY'));
        }
        $this->load->view('Admin/login/login');
    }

    public function login_act()
    {

        if (get_active_user()){
            redirect(base_url('himalaY'));
        }
        $this->load->library("form_validation");

        // Qaydalar yazilir..
        $this->form_validation->set_rules("usr", "Username", "required|trim");
        $this->form_validation->set_rules("psw", "Password", "required|trim|min_length[6]|max_length[13]");

        $this->form_validation->set_message(
            array(
                "required"    => "<b>{field}</b> hissəsini boş qoymayın",
                "min_length"  => "Parol minimum 6 karakterden ibaret olmalidir",
                "max_length"  => "Parol maksimum 13 karakterden ibaret olmalidir",
            )
        );

        // Form Validation ise dusur..
        $this->form_validation->run();


        if ($this->form_validation->run() == TRUE){

            $user = $this->LeyMec_model->getAdmin(
                array(
                    "user_name" => strip_tags($this->input->post("usr")),
                    "user_password" => md5(strip_tags($this->input->post("psw"))),
                )
            );

            if($user){
                $this->session->set_userdata("user", $user['user_id']);
                $this->session->set_userdata("user_mail", $user['user_email']);
                redirect(base_url("himalaY"));

            }else{

                $fail = "İstifadəçı adı və ya şifrə yalnışdır";
                $this->session->set_flashdata("fail", $fail);
                redirect(base_url("himalaY_secure"));

            }

        }else{
            $viewData = new stdClass();
            $viewData->form_error = true;
            $this->load->view('Admin/login/login', $viewData);
        }

    }

    public function logOut()
    {
        $this->session->unset_userdata('user');
        redirect(base_url('himalaY_secure'));
    }

}