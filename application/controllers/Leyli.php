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
        $this->load->model('Services_model');
        $this->load->model('Doctorate_model');
        $this->load->model('Department_model');
        $this->load->model('Laboratory_model');
        date_default_timezone_set('Asia/Dhaka');



    }


    public function index()
	{

        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['last_news']   = $this->News_model->get_last_news();
        $data['last_news2']   = $this->News_model->get_last_news2();
        $data['last_events'] = $this->Events_model->get_last_events();
        $data['all_slide']   = $this->Slide_model->get_all_index();
        $data['count']   = $this->Mecnun_model->getCounts();
        $data["services"] = $this->Services_model->get_services();


		$this->load->view('Front/home_page/whole_page', $data);
	}

	public function about(){
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();

        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['last_events'] = $this->News_model->get_last_news();

        $data['about'] = $this->About_model->about_get();
        $data["services"] = $this->Services_model->get_services();

        $this->load->view('Front/about/whole_page', $data);
    }

    public function contact(){
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();

        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['last_events'] = $this->News_model->get_last_news();

        $data['contact'] = $this->Mecnun_model->getContact();
        $data["services"] = $this->Services_model->get_services();


        $this->load->view('Front/contact/whole_page', $data);
    }

    public function labaratory(){
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();

        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['last_events'] = $this->News_model->get_last_news();

        $data['laboratories'] = $this->Mecnun_model->getLaboratoriesF();

        $data['contact'] = $this->Mecnun_model->getContact();
        $data["services"] = $this->Services_model->get_services();

        $this->load->view('Front/labaratory/whole_page', $data);
    }

    public function actions(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();

        $this->load->library('pagination');

        $config["base_url"]  = base_url($this->uri->segment(1) . "/Actions");
        $config["total_rows"] = $this->Events_model->get_count_events_pagination();
        $config["uri_segment"] = 3;
        $config["per_page"] = 12;
        $config["first_link"] = "<<";
        $config["last_link"] = ">>";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['last_events']   = $this->Events_model->get_events_pagination($config["per_page"], $page);
        $data['links']  = $this->pagination->create_links();
        $this->load->view('Front/actions/whole_page', $data);
    }

    public function news(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();

        $this->load->library('pagination');

        $config["base_url"]  = base_url($this->uri->segment(1) . "/News");
        $config["total_rows"] = $this->News_model->get_count_news_pagination();
        $config["uri_segment"] = 3;
        $config["per_page"] = 12;
        $config["first_link"] = "<<";
        $config["last_link"] = ">>";

        $this->pagination->initialize($config);


        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['last_news']   = $this->News_model->get_news_pagination($config["per_page"], $page);
        $data['links']  = $this->pagination->create_links();
        $this->load->view('Front/news/whole_page', $data);


    }

    public function single_page_news($id){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();

        $data['new']   = $this->News_model->single_new(array(
            "news_id" => $id,
        ));

        $data['last_events'] = $this->News_model->get_last_news();

        //Gallery
        $data["photos"] = $this->Mecnun_model->get_news_gallery([
            "news_id" => $id
        ]);
        //Gallery


        $this->load->view('Front/single_page_news/whole_page', $data);
    }

    public function single_page_events($id){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();

        $data['event']   = $this->Events_model->single_event(array(
            "event_id" => $id,
        ));

        $data['last_events'] = $this->News_model->get_last_news();

        $this->load->view('Front/single_page_events/whole_page', $data);
    }

    public function bachelor(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();
        $data['last_events'] = $this->News_model->get_last_news();

        $data['data'] = $this->Bachelor_model->get_desc();

        $this->load->view('Front/bachelor/whole_page', $data);
    }

    public function bachelor_speciality(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();
        $data['last_events'] = $this->News_model->get_last_news();

        $data['data'] = $this->Bachelor_model->get_bachelor_specialities();

        $this->load->view('Front/bachelor_speciality/whole_page', $data);
    }

    public function bachelor_speciality_single($id){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();
        $data['last_events'] = $this->News_model->get_last_news();

        $data['speciality_info'] = $this->Bachelor_model->get_bachelor_speciality(array(
            "bachelor_id" => $id,
        ));

        $this->load->view('Front/bachelor_speciality_single/whole_page', $data);
    }

    public function bachelor_contact()
    {
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();
        $data['last_events'] = $this->News_model->get_last_news();

        $data['contact']=$this->Bachelor_model->get_contact();

        $this->load->view('Front/bachelor_contact/whole_page',$data);
    }

    public function master(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();
        $data['last_events'] = $this->News_model->get_last_news();

        $data['data'] = $this->Master_model->get_desc();

        $this->load->view('Front/master/whole_page', $data);
    }

    public function master_speciality(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();
        $data['last_events'] = $this->News_model->get_last_news();

        $data['data'] = $this->Master_model->get_master_specialities();

        $this->load->view('Front/master_speciality/whole_page', $data);
    }

    public function master_speciality_single($id){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();
        $data['last_events'] = $this->News_model->get_last_news();

        $data['data'] = $this->Master_model->get_master_speciality(array(
            "master_id" => $id,
        ));

        $this->load->view('Front/master_speciality_single/whole_page', $data);
    }

    public function master_contact()
    {
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();
        $data['last_events'] = $this->News_model->get_last_news();


        $data['contact']=$this->Master_model->get_contact();

        $this->load->view('Front/master_contact/whole_page',$data);
    }


    public function doctorate(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();
        $data['last_events'] = $this->News_model->get_last_news();

        $data['data'] = $this->Doctorate_model->get_desc();

        $this->load->view('Front/doctorate/whole_page', $data);
    }

    public function doctorate_speciality(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();
        $data['last_events'] = $this->News_model->get_last_news();

        $data['data'] = $this->Doctorate_model->get_doctorate_specialities();

        $this->load->view('Front/doctorate_speciality/whole_page', $data);
    }

    public function doctorate_speciality_single($id){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();
        $data['last_events'] = $this->News_model->get_last_news();

        $data['data'] = $this->Doctorate_model->get_doctorate_speciality(array(
            "doctorate_id" => $id,
        ));

        $this->load->view('Front/doctorate_speciality_single/whole_page', $data);
    }

    public function doctorate_contact()
    {
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();
        $data['last_events'] = $this->News_model->get_last_news();


        $data['contact']=$this->Doctorate_model->get_contact();

        $this->load->view('Front/doctorate_contact/whole_page',$data);
    }


    public function department(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data["services"] = $this->Services_model->get_services();

        $id = $this->uri->segment(3);

       $data["department"] = $this->Mecnun_model->get_department_category(array(
            "id" => $id,
        ));


        $data['logo']   = $this->Mecnun_model->get_logo_and_title();

        $data['last_events'] = $this->News_model->get_last_news();

        $this->load->view('Front/department/whole_page', $data);
    }

    public function department_contact(){
        $id = $this->uri->segment(3);
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();

        $data["department"] = $this->Mecnun_model->get_department_category(array(
            "id" => $id,
        ));

        $data['data'] = $this->Department_model->get_desc();

        $data['last_events'] = $this->News_model->get_last_news();

        $this->load->view('Front/department_contact/whole_page', $data);
    }

    public function department_teachers(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();

        $data['data'] = $this->Department_model->get_desc();

        $data['last_events'] = $this->Events_model->get_last_events();

        $id = $this->uri->segment(3);

        $data["department"] = $this->Mecnun_model->get_department_category(array(
            "id" => $id,
        ));

        $department = $data["department"];

        $data['teachers'] = $this->Mecnun_model->get_teacher_result_array(array(
            "department_category_az" => $department["category_name_az"],
        ));
        $data['last_events'] = $this->News_model->get_last_news();

        $this->load->view('Front/department_teachers/whole_page', $data);
    }

    public function department_teachers_single(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['logo']   = $this->Mecnun_model->get_logo_and_title();
        $data["services"] = $this->Services_model->get_services();

        $data['data'] = $this->Department_model->get_desc();

        $data['last_events'] = $this->Events_model->get_last_events();

        $id = $this->uri->segment(3);
        $teacher_id = $this->uri->segment(4);

        $data["department"] = $this->Mecnun_model->get_department_category(array(
            "id" => $id,
        ));

        $data['teacher'] = $this->Mecnun_model->get_teacher(array(
            "teacher_id" => $teacher_id,
        ));
        $data['last_events'] = $this->News_model->get_last_news();

        $this->load->view('Front/department_teachers_single/whole_page', $data);
    }


    public function department_specialities(){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data["services"] = $this->Services_model->get_services();

        $data['all_specialites_of_department']   = $this->Mecnun_model->get_all_specialties();


        $data['logo']   = $this->Mecnun_model->get_logo_and_title();

        $id = $this->uri->segment(3);

        $data["department"] = $this->Mecnun_model->get_department_category(array(
            "id" => $id,
        ));


        $deparment = $data["department"];


        $data['all_specialites_of_department']   = $this->Mecnun_model->get_all_specialties_where(array(
            "department_category_name_az" => $deparment["category_name_az"],
        ));


        $data['data'] = $this->Department_model->get_desc();

        $data['last_events'] = $this->News_model->get_last_news();

        $this->load->view('Front/department_specialities/whole_page', $data);
    }

    public function department_speciality($lang){
        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();
        $data['all_specialites_of_department']   = $this->Mecnun_model->get_all_specialties();
        $data["services"] = $this->Services_model->get_services();

        $data['logo']   = $this->Mecnun_model->get_logo_and_title();

        $id_of_speciality = $this->uri->segment(3);
        $id = $this->uri->segment(4);

        $data["department"] = $this->Mecnun_model->get_department_category(array(
            "id" => $id,
        ));



        $data["speciality"] = $this->Mecnun_model->getSingleSpeciality(array(
            "id" => $id_of_speciality,
        ));


        $data['data'] = $this->Department_model->get_desc();

        $data['last_events'] = $this->News_model->get_last_news();

        $this->load->view('Front/department_specialities_single/whole_page', $data);
    }

    public function department_labaratory(){
        $id = $this->uri->segment(3);
        $data["services"] = $this->Services_model->get_services();

        $department = $this->Mecnun_model->get_department_category(array(
            "id" => $id,
        ));

        $data["department"] = $this->Mecnun_model->get_department_category(array(
            "id" => $id,
        ));

//        $all_labs = $this->Mecnun_model->get_laboratories();

        $data["laboratories"] = $this->Mecnun_model->getLaboratoriesForCatg(array(
            "laboratory_catg_az" => $department["category_name_az"],
        ));


        $data['all_categories_of_department']   = $this->Mecnun_model->get_all_department_categories();

        $data['logo']   = $this->Mecnun_model->get_logo_and_title();

        $data['data'] = $this->Department_model->get_desc();

        $data['last_events'] = $this->News_model->get_last_news();

        $this->load->view('Front/department_labaratory/whole_page', $data);
    }





}
