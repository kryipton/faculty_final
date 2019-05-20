<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leyli extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $dil = $this->uri->segment(1);
        if ($dil == ""){
            $dil = "az";
        }
        $this->lang->load($dil, $dil);

        $this->session->set_userdata("dil", $dil);

        $this->load->model('News_model');
        $this->load->model('Events_model');
        $this->load->model('Slide_model');
        $this->load->model('Teacher_model');
        $this->load->model('About_model');
        $this->load->model('Link_model');
        $this->load->model('Bachelor_model');
        $this->load->model('Master_model');
        $this->load->model('Mecnun_model');
        $this->load->model('Doctorate_model');
        $this->load->model('Department_model');
        $this->load->model('Laboratory_model');
        date_default_timezone_set('Asia/Dhaka');


    }


    public function index()
	{

        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['last_news']   = $this->News_model->get_last_news();
        $data['last_events'] = $this->Events_model->get_last_events();
        $data['all_slide']   = $this->Slide_model->get_all_index();

		$this->load->view('Front/home_page/whole_page', $data);
	}

	public function about(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['last_events'] = $this->Events_model->get_last_events();

        $data['about'] = $this->About_model->about_get();

        $this->load->view('Front/about/whole_page', $data);
    }

    public function contact(){

        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['last_events'] = $this->Events_model->get_last_events();

        $this->load->view('Front/contact/whole_page', $data);
    }

    public function labaratory(){

        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['last_events'] = $this->Events_model->get_last_events();

        $this->load->view('Front/labaratory/whole_page', $data);
    }

    public function actions(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['last_events'] = $this->Events_model->get_last_events();

        $this->load->view('Front/actions/whole_page', $data);
    }

    public function news(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['last_news']   = $this->News_model->get_last_news();

        $this->load->view('Front/news/whole_page', $data);
    }

    public function single_page_news($id){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['new']   = $this->News_model->single_new(array(
            "news_id" => $id,
        ));

        $data['last_events']   = $this->Events_model->get_last_events();

        $this->load->view('Front/single_page_news/whole_page', $data);
    }

    public function single_page_events($id){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['event']   = $this->Events_model->single_event(array(
            "event_id" => $id,
        ));

        $data['last_events']   = $this->Events_model->get_last_events();

        $this->load->view('Front/single_page_events/whole_page', $data);
    }

    public function bachelor(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Bachelor_model->get_desc();

        $this->load->view('Front/bachelor/whole_page', $data);
    }

    public function bachelor_speciality(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Bachelor_model->get_bachelor_specialities();

        $this->load->view('Front/bachelor_speciality/whole_page', $data);
    }

    public function bachelor_speciality_single($id){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Bachelor_model->get_bachelor_speciality(array(
            "bachelor_id" => $id,
        ));

        $this->load->view('Front/bachelor_speciality_single/whole_page', $data);
    }

    public function master(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Master_model->get_desc();

        $this->load->view('Front/master/whole_page', $data);
    }

    public function master_speciality(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Master_model->get_master_specialities();

        $this->load->view('Front/master_speciality/whole_page', $data);
    }

    public function master_speciality_single($id){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Master_model->get_master_speciality(array(
            "master_id" => $id,
        ));

        $this->load->view('Front/master_speciality_single/whole_page', $data);
    }

    public function doctorate(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Doctorate_model->get_desc();

        $this->load->view('Front/doctorate/whole_page', $data);
    }

    public function doctorate_speciality(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Doctorate_model->get_doctorate_specialities();

        $this->load->view('Front/doctorate_speciality/whole_page', $data);
    }

    public function doctorate_speciality_single($id){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Doctorate_model->get_doctorate_speciality(array(
            "doctorate_id" => $id,
        ));

        $this->load->view('Front/doctorate_speciality_single/whole_page', $data);
    }

    public function department(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Department_model->get_desc();

        $data['last_events'] = $this->Events_model->get_last_events();

        $this->load->view('Front/department/whole_page', $data);
    }

    public function department_contact(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Department_model->get_desc();

        $data['last_events'] = $this->Events_model->get_last_events();

        $this->load->view('Front/department_contact/whole_page', $data);
    }

    public function department_teachers(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Department_model->get_desc();

        $data['last_events'] = $this->Events_model->get_last_events();

        $this->load->view('Front/department_teachers/whole_page', $data);
    }

    public function department_specialities(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Department_model->get_desc();

        $data['last_events'] = $this->Events_model->get_last_events();

        $this->load->view('Front/department_specialities/whole_page', $data);
    }

    public function department_labaratory(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['data'] = $this->Department_model->get_desc();

        $data['last_events'] = $this->Events_model->get_last_events();

        $this->load->view('Front/department_labaratory/whole_page', $data);
    }





}
