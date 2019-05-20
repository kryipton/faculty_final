<?php
class Mecnun extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mecnun_model');
        if(!get_active_user()){
            redirect(base_url('himalaY_secure'));
        }
    }

    public function index(){

        $this->load->view('Admin/main_page/main');
    }

//     ============= Xeberler Hissesi ================
    public function news()
    {
        $data['allNews']=$this->Mecnun_model->getNews();
        $this->load->view('Admin/news/news_main',$data);
    }

    public function add_news()
    {
        $this->load->view('Admin/news/news_create');
    }

    public function add_news_act()
    {


        $news_title_az = strip_tags($this->input->post('news_title_az'));
        $news_title_en = strip_tags($this->input->post('news_title_en'));
        $news_title_ru = strip_tags($this->input->post('news_title_ru'));
        $news_desc_az  = $this->input->post('news_desc_az');
        $news_desc_en  = $this->input->post('news_desc_en');
        $news_desc_ru  = $this->input->post('news_desc_ru');
        $news_time     = strip_tags($this->input->post('news_date'));

        $config['upload_path']   = 'upload/news_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);

        if(!empty($news_title_az) && !empty($news_desc_az)){
            if($this->upload->do_upload('news_image')) {
                $news_image = $this->upload->data('file_name');

                $news_data = array(

                    'news_title_az' => $news_title_az,
                    'news_title_en' => $news_title_en,
                    'news_title_ru' => $news_title_ru,
                    'news_description_az' => $news_desc_az,
                    'news_description_en' => $news_desc_en,
                    'news_description_ru' => $news_desc_ru,
                    'news_time'           => $news_time,
                    'news_img'            => $news_image

                );

                $this->Mecnun_model->addNews($news_data);
                $msg = 'Xəbər uğurla əlavə olundu! ';
                $this->session->set_flashdata('success',$msg);
                redirect(base_url('himalaY_xeberler'));

            }else{
                $news_data = array(

                    'news_title_az'       => $news_title_az,
                    'news_title_en'       => $news_title_en,
                    'news_title_ru'       => $news_title_ru,
                    'news_description_az' => $news_desc_az,
                    'news_description_en' => $news_desc_en,
                    'news_description_ru' => $news_desc_ru,
                    'news_time'           => $news_time,
                    'news_img'            => 'default.png'
                );

                $this->Mecnun_model->addNews($news_data);

                $msg = 'Xəbər uğurla əlavə olundu! ';
                $this->session->set_flashdata('success',$msg);

                redirect(base_url('himalaY_xeberler'));
            }
        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın!';
            $this->session->set_flashdata('alert',$msg);
            redirect('himalaY_xeber_elave_et');
        }



    }

    public function delete_news($id)
    {
        $msg = 'Xəbər uğurla silindi ! ';
        $this->session->set_flashdata('success',$msg);
        $where =[
            'news_id' => $id,
        ];
        $this->Mecnun_model->deleteNews($where);
        redirect(base_url('himalaY_xeberler'));
    }

    public function update_news($id)
    {
        $where =[
            'news_id' => $id,
        ];
        $data['news']=$this->Mecnun_model->getOneNews($where);

        $this->load->view('Admin/news/news_update',$data);
    }


    public function update_news_act($id)
    {

        $news_title_az = strip_tags($this->input->post('news_title_az'));
        $news_title_en = strip_tags($this->input->post('news_title_en'));
        $news_title_ru = strip_tags($this->input->post('news_title_ru'));
        $news_desc_az  = strip_tags($this->input->post('news_desc_az'));
        $news_desc_en  = strip_tags($this->input->post('news_desc_en'));
        $news_desc_ru  = strip_tags($this->input->post('news_desc_ru'));
        $news_time     = strip_tags($this->input->post('news_date'));

        $config['upload_path']   = 'upload/news_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);
        $where =[
            'news_id' => $id,
        ];
        if(!empty($news_title_az) && !empty($news_desc_az)){
            if($this->upload->do_upload('news_image')) {
                $news_image = $this->upload->data('file_name');

                $news_data = array(

                    'news_title_az' => $news_title_az,
                    'news_title_en' => $news_title_en,
                    'news_title_ru' => $news_title_ru,
                    'news_description_az' => $news_desc_az,
                    'news_description_en' => $news_desc_en,
                    'news_description_ru' => $news_desc_ru,
                    'news_time'           => $news_time,
                    'news_img'            => $news_image

                );

                $this->Mecnun_model->updateNews($where,$news_data);
                $msg = 'Xəbər uğurla düzənləndi! ';
                $this->session->set_flashdata('success',$msg);
                redirect(base_url('himalaY_xeberler'));

            }else{
                $news_data = array(

                    'news_title_az'       => $news_title_az,
                    'news_title_en'       => $news_title_en,
                    'news_title_ru'       => $news_title_ru,
                    'news_description_az' => $news_desc_az,
                    'news_description_en' => $news_desc_en,
                    'news_description_ru' => $news_desc_ru,
                    'news_time'           => $news_time,
                );

                $this->Mecnun_model->updateNews($where,$news_data);

                $msg = 'Xəbər uğurla düzənləndi! ';
                $this->session->set_flashdata('success',$msg);

                redirect(base_url('himalaY_xeberler'));
            }
        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın!';
            $this->session->set_flashdata('alert',$msg);
            redirect('himalaY_xeber_duzenle/'.$id);
        }




    }





    //     ============= Slider Hissesi ================

    public function slider()
    {

        $data['sliderInfo']=$this->Mecnun_model->getSlider();
        $this->load->view('Admin/slider/slider_main',$data);
    }

    public function add_slider()
    {
        $this->load->view('Admin/slider/slider_create');
    }

    public function add_slider_act()
    {

        $slide_title_az = $this->input->post('slide_title_az');
        $slide_title_en = $this->input->post('slide_title_en');
        $slide_title_ru = $this->input->post('slide_title_ru');
        $slide_desc_az  = $this->input->post('slide_desc_az');
        $slide_desc_en  = $this->input->post('slide_desc_en');
        $slide_desc_ru  = $this->input->post('slide_desc_ru');
        $slide_link     = $this->input->post('slide_link');


        $config['upload_path']   = 'upload/slide_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->upload->initialize($config);


        if (!empty($slide_title_az) && !empty($slide_title_en) && !empty($slide_title_ru) && !empty($slide_desc_az)){


            $slide_data = array(

                'slide_title_az' => $slide_title_az,
                'slide_title_en' => $slide_title_en,
                'slide_title_ru' => $slide_title_ru,
                'slide_desc_az'  => $slide_desc_az,
                'slide_desc_en'  => $slide_desc_en,
                'slide_desc_ru'  => $slide_desc_ru,
                'slide_link'     => $slide_link,
                'slide_image'    => ($this->upload->do_upload('slide_img')) ? $this->upload->data('file_name') : 'default.jpg'


                );

                $this->Mecnun_model->addSlider($slide_data);
                $msg = 'Yeni slider əlavə olundu ! ';
                $this->session->set_flashdata('success',$msg);

                redirect(base_url('himalaY_slider'));
            }else{


            $msg = 'Zəhmət olmasa boşluq buraxmayın ! ';
            $this->session->set_flashdata('alert',$msg);

            redirect(base_url('himalaY_slider_elave_et'));
        }

    }


    public function delete_slider($id)
    {
        $where=[
            'slide_id'=>$id
        ];
        $this->Mecnun_model->deleteSlide($where);
        $msg = 'Slider silindi! ';
        $this->session->set_flashdata('success',$msg);

        redirect(base_url('himalaY_slider'));
    }


    public function update_slider($id)
    {
        $where=[
            'slide_id'=>$id
        ];

        $data['slide'] = $this->Mecnun_model->getSlide($where);
        $this->load->view('Admin/slider/slider_update',$data);
    }


    public function  update_slider_act($id)
    {
        $where=[
            'slide_id'=>$id
        ];

        $slide_title_az = $this->input->post('slide_title_az');
        $slide_title_en = $this->input->post('slide_title_en');
        $slide_title_ru = $this->input->post('slide_title_ru');
        $slide_desc_az  = $this->input->post('slide_desc_az');
        $slide_desc_en  = $this->input->post('slide_desc_en');
        $slide_desc_ru  = $this->input->post('slide_desc_ru');
        $slide_link     = $this->input->post('slide_link');


        $config['upload_path']   = 'upload/slide_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->upload->initialize($config);

        if (!empty($slide_title_az) && !empty($slide_title_en) && !empty($slide_title_ru) && !empty($slide_desc_az)){
            if ($this->upload->do_upload('slide_img')) {

                $slide_img = $this->upload->data('file_name');
                $slide_data = array(

                    'slide_title_az' => $slide_title_az,
                    'slide_title_en' => $slide_title_en,
                    'slide_title_ru' => $slide_title_ru,
                    'slide_desc_az' => $slide_desc_az,
                    'slide_desc_en' => $slide_desc_en,
                    'slide_desc_ru' => $slide_desc_ru,
                    'slide_link' => $slide_link,
                    'slide_image' => $slide_img

                );

                $this->Mecnun_model->updateSlider($where, $slide_data);
                $msg = 'Slider düzənləndi !  ';
                $this->session->set_flashdata('success', $msg);

                redirect(base_url('himalaY_slider'));
            }else{
                $slide_data = array(

                    'slide_title_az' => $slide_title_az,
                    'slide_title_en' => $slide_title_en,
                    'slide_title_ru' => $slide_title_ru,
                    'slide_desc_az' => $slide_desc_az,
                    'slide_desc_en' => $slide_desc_en,
                    'slide_desc_ru' => $slide_desc_ru,
                    'slide_link' => $slide_link,
                );
                $this->Mecnun_model->updateSlider($where, $slide_data);
                $msg = 'Slider düzənləndi !  ';
                $this->session->set_flashdata('success', $msg);

                redirect(base_url('himalaY_slider'));
            }

            }else {

            $msg = 'Boşluq buraxmayın ! ';
            $this->session->set_flashdata('alert',$msg);

            redirect(base_url('himalaY_slider'));
        }


    }



    //     ============= Tedbirler Hissesi ================

    public function events()
    {
    $data['allEvents'] = $this->Mecnun_model->getEvents();
        $this->load->view('Admin/events/events_main',$data);
    }


    public function delete_events($id)
    {
        $where=[
            'event_id'=>$id
        ];

    $this->Mecnun_model->deleteEvent($where);
        $msg = 'Tedbir uğurla silindi ! ';
        $this->session->set_flashdata('success',$msg);

    redirect(base_url('himalaY_tedbirler'));
    }

    public function add_events()
    {
        $this->load->view('Admin/events/events_create');
    }

    public function add_events_act(){

        $event_title_az = strip_tags($this->input->post('eventTitleAz'));
        $event_title_en = strip_tags($this->input->post('eventTitleEn'));
        $event_title_ru = strip_tags($this->input->post('eventTitleRu'));
        $event_desc_az  = $this->input->post('eventDescAz');
        $event_desc_en  = $this->input->post('eventDescEn');
        $event_desc_ru  = $this->input->post('eventDescRu');
        $event_time     = strip_tags($this->input->post('eventDate'));

        $config['upload_path']   = 'upload/event_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);

        if (!empty($event_title_az) && !empty($event_title_en) && !empty($event_title_ru) && !empty($event_desc_az)){


            $event_data = array(

                'event_title_az' => $event_title_az,
                'event_title_en' => $event_title_en,
                'event_title_ru' => $event_title_ru,
                'event_desc_az'  => $event_desc_az,
                'event_desc_en'  => $event_desc_en,
                'event_desc_ru'  => $event_desc_ru,
                'event_time'     => $event_time,
                'event_img'    => ($this->upload->do_upload('event_image')) ? $this->upload->data('file_name') : 'default.png'


            );

            $this->Mecnun_model->addEvent($event_data);
            $msg = 'Yeni tədbir əlavə olundu ! ';
            $this->session->set_flashdata('success',$msg);

            redirect(base_url('himalaY_tedbirler'));
        }else{

            $msg = 'Zəhmət olmasa boşluq buraxmayın ! ';
            $this->session->set_flashdata('alert',$msg);

            redirect(base_url('himalaY_tedbirler_elave_et'));
        }
    }

    public function update_events($id)
    {
       $data['event'] = $this->Mecnun_model->getEvent([
            'event_id' => $id
        ]);
        $this->load->view('Admin/events/events_update',$data);
    }

    public function update_events_act($id)
    {
        $where = [
          'event_id' => $id
        ];

        $event_title_az = strip_tags($this->input->post('eventTitleAz'));
        $event_title_en = strip_tags($this->input->post('eventTitleEn'));
        $event_title_ru = strip_tags($this->input->post('eventTitleRu'));
        $event_desc_az  = $this->input->post('eventDescAz');
        $event_desc_en  = $this->input->post('eventDescEn');
        $event_desc_ru  = $this->input->post('eventDescRu');
        $event_time     = strip_tags($this->input->post('eventDate'));

        $config['upload_path']   = 'upload/event_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);

        if (!empty($event_title_az) && !empty($event_title_en) && !empty($event_title_ru) && !empty($event_desc_az)){

            if ($this->upload->do_upload('event_image')) {
                $event_data = array(

                    'event_title_az' => $event_title_az,
                    'event_title_en' => $event_title_en,
                    'event_title_ru' => $event_title_ru,
                    'event_desc_az'  => $event_desc_az,
                    'event_desc_en'  => $event_desc_en,
                    'event_desc_ru'  => $event_desc_ru,
                    'event_time'     => $event_time,
                    'event_img'      =>  $this->upload->data('file_name')

                );

                $this->Mecnun_model->updateEvent($where,$event_data);
                $msg = 'Tedbir düzənləndi ! ';
                $this->session->set_flashdata('success', $msg);

                redirect(base_url('himalaY_tedbirler'));
            }else{
                $event_data = array(

                    'event_title_az' => $event_title_az,
                    'event_title_en' => $event_title_en,
                    'event_title_ru' => $event_title_ru,
                    'event_desc_az'  => $event_desc_az,
                    'event_desc_en'  => $event_desc_en,
                    'event_desc_ru'  => $event_desc_ru,
                    'event_time'     => $event_time,
                );

                $this->Mecnun_model->updateEvent($where,$event_data);
                $msg = 'Tedbir düzənləndi ! ';
                $this->session->set_flashdata('success', $msg);

                redirect(base_url('himalaY_tedbirler'));
            }
        }else{

            $msg = 'Zəhmət olmasa boşluq buraxmayın ! ';
            $this->session->set_flashdata('alert',$msg);

            redirect(base_url('himalaY_tedbirler'));
        }
    }




    //     ============= Muellimler Hissesi ================

    public function teachers()
    {
        $data["teachers"] = $this->Mecnun_model->get_teachers();

        $data["categories"] = $this->Mecnun_model->get_categories();


        $this->load->view('Admin/teachers_category/teachers_main', $data);
    }

    public function add_teachers()
    {
        $data["categories"] = $this->Mecnun_model->get_categories();

        $this->load->view('Admin/teachers_category/teachers_create', $data);
    }

    public function add_teachers_act()
    {

         $teacher_name_az = strip_tags($this->input->post('teacher_name_az'));
         $teacher_name_en = strip_tags($this->input->post('teacher_name_en'));
         $teacher_name_ru = strip_tags($this->input->post('teacher_name_ru'));

         $teacher_surname_az  = strip_tags($this->input->post('teacher_surname_az'));
         $teacher_surname_en  = strip_tags($this->input->post('teacher_surname_en'));
         $teacher_surname_ru  = strip_tags($this->input->post('teacher_surname_ru'));

         $teacher_position_az  = strip_tags($this->input->post('teacher_position_az'));
         $teacher_position_en  = strip_tags($this->input->post('teacher_position_en'));
         $teacher_position_ru  = strip_tags($this->input->post('teacher_position_ru'));


         $teacher_about_az  = $_POST['teacher_about_az'];
         $teacher_about_en  = $_POST['teacher_about_en'];
         $teacher_about_ru  = $_POST['teacher_about_ru'];


         $teacher_department_category_az  = $this->input->post('teacher_department_category_az');
         $teacher_department_category_en  = $this->input->post('teacher_department_category_en');
         $teacher_department_category_ru  = $this->input->post('teacher_department_category_ru');


         $teacher_picture  = $this->input->post('teacher_photo');




        $config['upload_path']   = 'upload/teacher_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);

        if( !empty($teacher_name_az) && !empty($teacher_name_ru) &&  !empty($teacher_name_en) && !empty($teacher_surname_az) && !empty($teacher_surname_en) && !empty($teacher_surname_ru) && !empty($teacher_position_az) && !empty($teacher_position_ru) && !empty($teacher_position_en) && !empty($teacher_about_az) && !empty($teacher_about_ru) && !empty($teacher_about_en) && !empty($teacher_department_category_az) && !empty($teacher_department_category_en) && !empty($teacher_department_category_ru))
        {

                $data = array(

                    'teacher_name_az' => $teacher_name_az,
                    'teacher_name_en' => $teacher_name_en,
                    'teacher_name_ru' => $teacher_name_ru,

                    'teacher_surname_az' => $teacher_surname_az,
                    'teacher_surname_en' => $teacher_surname_en,
                    'teacher_surname_ru' => $teacher_surname_ru,

                    'teacher_position_az' => $teacher_position_az,
                    'teacher_position_en' => $teacher_position_en,
                    'teacher_position_ru' => $teacher_position_ru,

                    'teacher_about_az' => $teacher_about_az,
                    'teacher_about_en' => $teacher_about_en,
                    'teacher_about_ru' => $teacher_about_ru,


                    'department_category_az' => $teacher_department_category_az,
                    'department_category_en' => $teacher_department_category_en,
                    'department_category_ru' => $teacher_department_category_ru,


                    'teacher_photo' => ($this->upload->do_upload('teacher_photo')) ? $this->upload->data('file_name') : "default.png",

                );

                $this->Mecnun_model->add_teacher($data);
                $msg = 'Xəbər uğurla əlavə olundu! ';
                $this->session->set_flashdata('success',$msg);
                redirect(base_url('himalaY_muellimler'));


        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın!';
            $this->session->set_flashdata('alert',$msg);
            redirect('himalaY_muellimler_elave_et');
        }

    }

    public function update_teachers($teacher_id)
    {
        $data["teacher"] = $this->Mecnun_model->get_teacher(array(
            "teacher_id" => $teacher_id,
        ));

        $data["categories"] = $this->Mecnun_model->get_categories();

        $this->load->view('Admin/teachers_category/teachers_update', $data);
    }

    public function delete_teachers($teacher_id)
    {

        $where =array(
          "teacher_id" => $teacher_id,
        );
        $this->Mecnun_model->delete_teacher($where);

        redirect(base_url("himalaY_muellimler"));
    }

    public function update_teachers_act($teacher_id)
    {
        $teacher_name_az = strip_tags($this->input->post('teacher_name_az'));
        $teacher_name_en = strip_tags($this->input->post('teacher_name_en'));
        $teacher_name_ru = strip_tags($this->input->post('teacher_name_ru'));

        $teacher_surname_az  = strip_tags($this->input->post('teacher_surname_az'));
        $teacher_surname_en  = strip_tags($this->input->post('teacher_surname_en'));
        $teacher_surname_ru  = strip_tags($this->input->post('teacher_surname_ru'));

        $teacher_position_az  = strip_tags($this->input->post('teacher_position_az'));
        $teacher_position_en  = strip_tags($this->input->post('teacher_position_en'));
        $teacher_position_ru  = strip_tags($this->input->post('teacher_position_ru'));


        $teacher_about_az  = $_POST['teacher_about_az'];
        $teacher_about_en  = $_POST['teacher_about_en'];
        $teacher_about_ru  = $_POST['teacher_about_ru'];


        $teacher_department_category_az  = $this->input->post('teacher_department_category_az');
        $teacher_department_category_en  = $this->input->post('teacher_department_category_en');
        $teacher_department_category_ru  = $this->input->post('teacher_department_category_ru');


        $teacher_picture  = $this->input->post('teacher_photo');

        $teacher = $this->Mecnun_model->get_teacher(array(
            "teacher_id" => $teacher_id,
        ));




        $config['upload_path']   = 'upload/teacher_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);

        if( !empty($teacher_name_az) && !empty($teacher_name_ru) &&  !empty($teacher_name_en) && !empty($teacher_surname_az) && !empty($teacher_surname_en) && !empty($teacher_surname_ru) && !empty($teacher_position_az) && !empty($teacher_position_ru) && !empty($teacher_position_en) && !empty($teacher_about_az) && !empty($teacher_about_ru) && !empty($teacher_about_en) && !empty($teacher_department_category_az) && !empty($teacher_department_category_en) && !empty($teacher_department_category_ru))
        {

            $data = array(

                'teacher_name_az' => $teacher_name_az,
                'teacher_name_en' => $teacher_name_en,
                'teacher_name_ru' => $teacher_name_ru,

                'teacher_surname_az' => $teacher_surname_az,
                'teacher_surname_en' => $teacher_surname_en,
                'teacher_surname_ru' => $teacher_surname_ru,

                'teacher_position_az' => $teacher_position_az,
                'teacher_position_en' => $teacher_position_en,
                'teacher_position_ru' => $teacher_position_ru,

                'teacher_about_az' => $teacher_about_az,
                'teacher_about_en' => $teacher_about_en,
                'teacher_about_ru' => $teacher_about_ru,


                'department_category_az' => $teacher_department_category_az,
                'department_category_en' => $teacher_department_category_en,
                'department_category_ru' => $teacher_department_category_ru,


                'teacher_photo' => ($this->upload->do_upload('teacher_photo')) ? $this->upload->data('file_name') : $teacher["teacher_photo"],

            );

            $where = array(
              "teacher_id" => $teacher_id,
            );

            $this->Mecnun_model->update_teacher($where, $data);
            $msg = 'Xəbər uğurla yeniləndi';
            $this->session->set_flashdata('success',$msg);
            redirect(base_url('himalaY_muellimler'));


        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın!';
            $this->session->set_flashdata('alert',$msg);
//            $this->load->view("Admin/teachers_category/teachers_update");
            redirect("himalaY_muellimler_yenile/$teacher_id");
        }
    }




    //     ============= Kafedralar Hissesi ================

    public function departments()
    {

        $data["categories"] = $this->Mecnun_model->get_categories();


        $this->load->view('Admin/department_category/category_main', $data);
    }

    public function add_departments()
    {
        $this->load->view('Admin/department_category/category_create');
    }

    public function add_departments_act()
    {

        $departmet_name_az = strip_tags($this->input->post('department_name_az'));
        $departmet_name_en = strip_tags($this->input->post('department_name_en'));
        $departmet_name_ru = strip_tags($this->input->post('department_name_ru'));


        if (!empty($departmet_name_az) && !empty($departmet_name_en) && !empty($departmet_name_ru) )
        {

            $data = array(

                'category_name_az' => $departmet_name_az,
                'category_name_en' => $departmet_name_en,
                'category_name_ru' => $departmet_name_ru,

            );

            $this->Mecnun_model->add_department_category($data);
            $msg = 'Xəbər uğurla əlavə olundu! ';
            $this->session->set_flashdata('success',$msg);
            redirect(base_url('himalaY_kafedralar'));


        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın!';
            $this->session->set_flashdata('alert',$msg);
            redirect('himalaY_kafedralar_elave_et');
        }

    }

    public function update_departments($id)
    {
        $data["category"] = $this->Mecnun_model->get_department_category(array(
            "id" => $id,
        ));

        $this->load->view('Admin/department_category/category_update', $data);
    }

    public function delete_departments($id)
    {

        $where =array(
            "id" => $id,
        );
        $this->Mecnun_model->delete_department_category($where);

        redirect(base_url("himalaY_kafedralar"));
    }

    public function update_departments_act($id)
    {

        $departmet_name_az = strip_tags($this->input->post('department_name_az'));
        $departmet_name_en = strip_tags($this->input->post('department_name_en'));
        $departmet_name_ru = strip_tags($this->input->post('department_name_ru'));

        if (!empty($departmet_name_az) && !empty($departmet_name_en) && !empty($departmet_name_ru) )

        {
            $data = array(
                'category_name_az' => $departmet_name_az,
                'category_name_en' => $departmet_name_en,
                'category_name_ru' => $departmet_name_ru,
            );

            $where = array(
                "id" => $id,
            );

            $this->Mecnun_model->update_department_category($where, $data);
            $msg = 'Xəbər uğurla yeniləndi!';
            $this->session->set_flashdata('success',$msg);
            redirect(base_url('himalaY_kafedralar'));

        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın!';
            $this->session->set_flashdata('alert',$msg);
            redirect("himalaY_kafedralar_yenile/$id");
        }
    }




    public function about_departments(){

        $data["categories"] = $this->Mecnun_model->get_categories();

        $this->load->view('Admin/department_about/category_main', $data);
    }

    public function update_about_department($id){
        $data["category"] = $this->Mecnun_model->get_department_category(array(
            "id" => $id,
        ));

        $this->load->view('Admin/department_about/category_update', $data);
    }

    public function update_about_department_act($id){

        $about_az = $this->input->post("about_az");
        $about_en = $this->input->post("about_en");
        $about_ru = $this->input->post("about_ru");

        if (!empty($about_az) && !empty($about_en) && !empty($about_ru)){

            $data = array(
                "category_about_text_az" => $about_az,
                "category_about_text_en" => $about_en,
                "category_about_text_ru" => $about_ru,
            );

            $where = array(
              "id" => $id,
            );

            $this->Mecnun_model->update_department_category($where, $data);

            $msg = 'Haqqında hissesi uğurla yeniləndi!';
            $this->session->set_flashdata('success',$msg);
            redirect("himalaY_kafedralar_haqqinda");

        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın!';
            $this->session->set_flashdata('alert',$msg);
            redirect("himalaY_kafedralar_haqqinda_yenile/$id");
        }

    }
    
    public function contact_departments(){

        $data["categories"] = $this->Mecnun_model->get_categories();

        $this->load->view('Admin/department_contact/category_main', $data);
    }

    public function update_contact_department($id){
        $data["category"] = $this->Mecnun_model->get_department_category(array(
            "id" => $id,
        ));

        $this->load->view('Admin/department_contact/category_update', $data);
    }

    public function update_contact_department_act($id){

        $contact_az = $this->input->post("category_contact_text_az");
        $contact_en = $this->input->post("category_contact_text_en");
        $contact_ru = $this->input->post("category_contact_text_ru");

        if (!empty($contact_az) && !empty($contact_en) && !empty($contact_ru)){

            $data = array(
                "category_contact_az" => $contact_az,
                "category_contact_en" => $contact_en,
                "category_contact_ru" => $contact_ru,
            );

            $where = array(
                "id" => $id,
            );

            $this->Mecnun_model->update_department_category($where, $data);

            $msg = 'Əlaqə hissesi uğurla yeniləndi!';
            $this->session->set_flashdata('success',$msg);
            redirect("himalaY_kafedralar_elaqe");

        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın!';
            $this->session->set_flashdata('alert',$msg);
            redirect("himalaY_kafedralar_elaqe_yenile/$id");
        }

    }





    //     ============= Laboratory (KAFEDRA) Hissesi ================

    public function laboratory()
    {
        $data["categories"] = $this->Mecnun_model->get_categories();
        $data['laboratories'] = $this->Mecnun_model->get_laboratories();
        $this->load->view('Admin/laboratory/laboratory_main',$data);
    }

    public function update_laboratory($id)
    {
        $where=[
          'id' => $id
        ];

        $data["laboratory"] = $this->Mecnun_model->getLaboratory($where);
        $data["categories"] = $this->Mecnun_model->get_categories();
        $this->load->view('Admin/laboratory/laboratory_update',$data);
    }

    public function update_laboratory_act($id){
        $where =[
          'id' =>$id
        ];
        $laboratory_name_az = strip_tags($_POST['laboratory_name_az']);
        $laboratory_name_ru = strip_tags($_POST['laboratory_name_ru']);
        $laboratory_name_en = strip_tags($_POST['laboratory_name_en']);
        $laboratory_desc_az = $_POST['laboratory_desc_az'];
        $laboratory_desc_ru = $_POST['laboratory_desc_ru'];
        $laboratory_desc_en = $_POST['laboratory_desc_en'];
        $laboratory_catg_az = $_POST['laboratory_catg_az'];
        $laboratory_catg_ru = $_POST['laboratory_catg_ru'];
        $laboratory_catg_en = $_POST['laboratory_catg_en'];

        $config['upload_path']   = 'upload/laboratory_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);
        if (!empty($laboratory_name_az) and !empty($laboratory_name_ru) and !empty($laboratory_name_en) and !empty($laboratory_desc_az) and !empty($laboratory_desc_ru) and !empty($laboratory_desc_en) and !empty($laboratory_catg_en) and !empty($laboratory_catg_az) and !empty($laboratory_catg_ru))
        {
            if($this->upload->do_upload('laboratory_photo')) {
                $data = array(
                    'laboratory_name_az' => $laboratory_name_az,
                    'laboratory_name_ru' => $laboratory_name_ru,
                    'laboratory_name_en' => $laboratory_name_en,
                    'laboratory_desc_az' => $laboratory_desc_az,
                    'laboratory_desc_ru' => $laboratory_desc_ru,
                    'laboratory_desc_en' => $laboratory_desc_en,
                    'laboratory_catg_az' => $laboratory_catg_az,
                    'laboratory_catg_ru' => $laboratory_catg_ru,
                    'laboratory_catg_en' => $laboratory_catg_en,
                    'laboratory_img' =>  $this->upload->data('file_name')
                );
                $this->Mecnun_model->updateLab($where,$data);
                $this->session->set_flashdata('success', 'Labaratoriya düzənləndi');
                redirect(base_url('himalaY_laboratoriya'));
            }else{
                $data = array(
                    'laboratory_name_az' => $laboratory_name_az,
                    'laboratory_name_ru' => $laboratory_name_ru,
                    'laboratory_name_en' => $laboratory_name_en,
                    'laboratory_desc_az' => $laboratory_desc_az,
                    'laboratory_desc_ru' => $laboratory_desc_ru,
                    'laboratory_desc_en' => $laboratory_desc_en,
                    'laboratory_catg_az' => $laboratory_catg_az,
                    'laboratory_catg_ru' => $laboratory_catg_ru,
                    'laboratory_catg_en' => $laboratory_catg_en,
                );
                $this->Mecnun_model->updateLab($where,$data);
                $this->session->set_flashdata('success', 'Labaratoriya düzənləndi');
                redirect(base_url('himalaY_laboratoriya'));

            }

        }else{
            $this->session->set_flashdata('error','Melumatlari duzgun daxil edin');
            redirect(base_url('himalaY_laboratoriya'));
        }

    }

    public function create_laboratory()
    {
        $data["categories"] = $this->Mecnun_model->get_categories();
        $this->load->view('Admin/laboratory/laboratory_create',$data);
    }

    public function create_laboratory_action()
    {
        $laboratory_name_az = strip_tags($_POST['laboratory_name_az']);
        $laboratory_name_ru = strip_tags($_POST['laboratory_name_ru']);
        $laboratory_name_en = strip_tags($_POST['laboratory_name_en']);
        $laboratory_desc_az = $_POST['laboratory_desc_az'];
        $laboratory_desc_ru = $_POST['laboratory_desc_ru'];
        $laboratory_desc_en = $_POST['laboratory_desc_en'];
        $laboratory_catg_az = $_POST['laboratory_catg_az'];
        $laboratory_catg_ru = $_POST['laboratory_catg_ru'];
        $laboratory_catg_en = $_POST['laboratory_catg_en'];

        $config['upload_path']   = 'upload/laboratory_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);

        if (!empty($laboratory_name_az) and !empty($laboratory_name_ru) and !empty($laboratory_name_en) and !empty($laboratory_desc_az) and !empty($laboratory_desc_ru) and !empty($laboratory_desc_en) and !empty($laboratory_catg_en) and !empty($laboratory_catg_az) and !empty($laboratory_catg_ru))
        {
            $data = array(
                'laboratory_name_az' => $laboratory_name_az,
                'laboratory_name_ru' => $laboratory_name_ru,
                'laboratory_name_en' => $laboratory_name_en,
                'laboratory_desc_az' => $laboratory_desc_az,
                'laboratory_desc_ru' => $laboratory_desc_ru,
                'laboratory_desc_en' => $laboratory_desc_en,
                'laboratory_catg_az' => $laboratory_catg_az,
                'laboratory_catg_ru' => $laboratory_catg_ru,
                'laboratory_catg_en' => $laboratory_catg_en,
                'laboratory_img'     => ($this->upload->do_upload('laboratory_photo')) ? $this->upload->data('file_name') : 'default_noimage.jpg',

            );
            $this->Mecnun_model->insert_laboratory($data);
            $this->session->set_flashdata('success','Labaratoriya elave edildi');
            redirect(base_url('himalaY_laboratoriya'));


        }else{
            $this->session->set_flashdata('error','Melumatlari duzgun daxil edin');
            redirect(base_url('himalaY_laboratoriya_elave_et'));
        }

    }

    public function delete_laboratory($id)
    {
        $this->Mecnun_model->delete_laboratory($id);
        $this->session->set_flashdata('success','Labaratoriya silindi');
        redirect(base_url('himalaY_laboratoriya'));
    }




    //     ============= Link Hissesi ================

    public function link()
    {
        $this->load->view('Admin/link/link_main');
    }

    public function add_link()
    {
        $this->load->view('Admin/link/link_create');
    }

    public function update_link()
    {
        $this->load->view('Admin/link/link_update');
    }




//     ============= About Hissesi ================

    public function about()
    {
        $where=[
          'faculty_name' => 'kimya'
        ];
        $data['abouts'] = $this->Mecnun_model->getAbout($where);
        $this->load->view('Admin/about/about_main',$data);
    }

    public function update_about($id)
    {
        $where=[
            'about_id' => $id
        ];
        $data['about'] = $this->Mecnun_model->getAbout($where);

        $this->load->view('Admin/about/about_update',$data);
    }

    public function update_about_act($id)
    {
        $where=[
            'about_id' => $id
        ];

        $data = [
          'about_text_az' => $this->input->post('about_text_az'),
          'about_text_en' => $this->input->post('about_text_en'),
          'about_text_ru' => $this->input->post('about_text_ru'),
        ];

        if (!empty($this->input->post('about_text_az')) && !empty($this->input->post('about_text_en')) && !empty($this->input->post('about_text_ru')) ){

            $this->Mecnun_model->updateAbout($where,$data);
            $msg = 'Haqqımızda hissəsi düzənləndi ! ';
            $this->session->set_flashdata('success', $msg);

            redirect(base_url('himalaY_haqqimizda'));

        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın ! ';
            $this->session->set_flashdata('alert',$msg);

            redirect(base_url('himalaY_haqqimizda'));
        }



    }



//     ============= Elaqe Hissesi ================

    public function contact()
    {

        $data["contact_text"] = $this->Mecnun_model->getContact();

        $this->load->view('Admin/contact/contact_main',$data);
    }

    public function update_contact()
    {

        $data["contact"] = $this->Mecnun_model->getContact();

        $this->load->view('Admin/contact/contact_update',$data);
    }

    public function update_contact_act()
    {

        $data = [
            'contact_text_az' => $this->input->post('contact_text_az'),
            'contact_text_en' => $this->input->post('contact_text_en'),
            'contact_text_ru' => $this->input->post('contact_text_ru'),
        ];

        if (!empty($this->input->post('contact_text_az')) && !empty($this->input->post('contact_text_en')) && !empty($this->input->post('contact_text_ru')) ){

            $this->Mecnun_model->updateContact($data);
            $msg = 'Əlaqə hissəsi düzənləndi ! ';
            $this->session->set_flashdata('success', $msg);

            redirect(base_url('himalaY_elaqe'));

        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın ! ';
            $this->session->set_flashdata('alert',$msg);

            redirect(base_url('himalaY_elaqe_duzenle'));
        }



    }



//     ============= Loqo ve saytin basliqi hissesi Hissesi ================

    public function logo()
    {
        $data['logo_and_title'] = $this->Mecnun_model->get_logo_and_title();

        $this->load->view('Admin/logo_and_title/logo_main',$data);
    }

    public function update_logo_and_title()
    {

        $data['logo_and_title'] = $this->Mecnun_model->get_logo_and_title();

        $this->load->view('Admin/logo_and_title/logo_update',$data);
    }

    public function update_logo_and_title_act()
    {
        $site_title = $this->input->post("site_title");

        $config['upload_path']   = 'public/images/faculty_logo/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);

        if (!empty($site_title)){

            $data = array(
              "site_title" => $site_title,
              "logo_img"   => ($this->upload->do_upload('site_loqo')) ? $this->upload->data('file_name') : "kimya2.png",
            );

            $this->Mecnun_model->update_logo_and_title($data);

            redirect("himalaY_loqo");

        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın!';
            $this->session->set_flashdata('alert',$msg);
            redirect("himalaY_loqo_duzenle");
        }


    }




//     ============= Bakalavr Hissesi ================

    public function bachelor()
    {

        $data["bachelor_about_text"] = $this->Mecnun_model->get_bachelor_about_text();

        $this->load->view('Admin/bachelor/bachelor_main', $data);
    }

    public function update_bachelor_info()
    {
        $data["bachelor_about_text"] = $this->Mecnun_model->get_bachelor_about_text();

        $this->load->view('Admin/bachelor/bachelor_info_update', $data);
    }

    public function update_bachelor_info_act()
    {
        $text_az = $this->input->post("bachelor_about_az");
        $text_en = $this->input->post("bachelor_about_en");
        $text_ru = $this->input->post("bachelor_about_ru");

        if (!empty($text_az) && !empty($text_ru) && !empty($text_en)){
            $data = array(
              "bachelor_about_text_az" => $text_az,
              "bachelor_about_text_en" => $text_en,
              "bachelor_about_text_ru" => $text_ru,
            );

            $this->Mecnun_model->update_bachelor_about_text($data);

            redirect("himalaY_bakalavr");

        }else{
            $this->session->set_flashdata("bachelor_about_error_message", "Boşluq buraxmayın");
            redirect("himalaY_bakalavr_yenile");
        }

        die();

    }

    public function bachelor_specialities()
    {

        $data["all_specialities"] = $this->Mecnun_model->get_bachelor_all_specialties();

        $this->load->view('Admin/bachelor/bachelor_specialities', $data);
    }

    public function add_bachelor_speciality()
    {
        $this->load->view('Admin/bachelor/bachelor_add_specialities');
    }

    public function add_bachelor_speciality_act()
    {

       $speciality_code = $this->input->post("speciality_code");

       $speciality_name_az = $this->input->post("speciality_name_az");
       $speciality_about_az = $this->input->post("speciality_about_az");


       $speciality_name_en = $this->input->post("speciality_name_en");
       $speciality_about_en = $this->input->post("speciality_about_en");


       $speciality_name_ru = $this->input->post("speciality_name_ru");
       $speciality_about_ru = $this->input->post("speciality_about_ru");

        if (!empty($speciality_code) && !empty($speciality_name_az) && !empty($speciality_about_az) && !empty($speciality_about_ru) && !empty($speciality_name_en) && !empty($speciality_about_en) && !empty($speciality_name_ru)){
            $data = array(
                "bachelor_text" => $speciality_code,
                "bachelor_text_about_az" => $speciality_name_az,
                "bachelor_text_text_az" => $speciality_about_az,
                "bachelor_text_about_en" => $speciality_name_en,
                "bachelor_text_text_en" => $speciality_about_en,
                "bachelor_text_about_ru" => $speciality_name_ru,
                "bachelor_text_text_ru" => $speciality_about_ru,
            );

            $this->Mecnun_model->add_bachelor_speciality($data);

            redirect("himalaY_bakalavr_ixtisaslar");

        }else{
            $this->session->set_flashdata("bachelor_about_error_message", "Boşluq buraxmayın");
            redirect("himalaY_bakalavr_ixtisas_elave_et");
        }


    }

    public function update_bachelor_speciality($id)
    {
        $data["speciality"] = $this->Mecnun_model->get_single_speciality(array(
            "bachelor_id" => $id,
        ));

        $this->load->view('Admin/bachelor/bachelor_update_specialities', $data);
    }

    public function update_bachelor_speciality_act($id)
    {
        $speciality_code = $this->input->post("speciality_code");

        $speciality_name_az = $this->input->post("speciality_name_az");
        $speciality_about_az = $this->input->post("speciality_about_az");


        $speciality_name_en = $this->input->post("speciality_name_en");
        $speciality_about_en = $this->input->post("speciality_about_en");


        $speciality_name_ru = $this->input->post("speciality_name_ru");
        $speciality_about_ru = $this->input->post("speciality_about_ru");

        if (!empty($speciality_code) && !empty($speciality_name_az) && !empty($speciality_about_az) && !empty($speciality_about_ru) && !empty($speciality_name_en) && !empty($speciality_about_en) && !empty($speciality_name_ru)){
            $data = array(
                "bachelor_text" => $speciality_code,
                "bachelor_text_about_az" => $speciality_name_az,
                "bachelor_text_text_az" => $speciality_about_az,
                "bachelor_text_about_en" => $speciality_name_en,
                "bachelor_text_text_en" => $speciality_about_en,
                "bachelor_text_about_ru" => $speciality_name_ru,
                "bachelor_text_text_ru" => $speciality_about_ru,
            );

            $where = array(
              "bachelor_id" => $id,
            );

            $this->Mecnun_model->update_bachelor_speciality($where, $data);

            redirect("himalaY_bakalavr_ixtisaslar");

        }else{
            $this->session->set_flashdata("bachelor_about_error_message", "Boşluq buraxmayın");
            redirect("himalaY_bakalavr_ixtisas_yenile/$id");
        }

    }

    public function delete_bachelor_speciality($id)
    {
        $this->Mecnun_model->delete_bachelor_speciality(array(
            "bachelor_id" => $id,
        ));

        redirect("himalaY_bakalavr_ixtisaslar");
    }





    //     ============= Magistr Hissesi ================

    public function master()
    {

        $data["master_about_text"] = $this->Mecnun_model->get_master_about_text();

        $this->load->view('Admin/master/master_main', $data);
    }

    public function update_master_info()
    {
        $data["master_about_text"] = $this->Mecnun_model->get_master_about_text();

        $this->load->view('Admin/master/master_info_update', $data);
    }

    public function update_master_info_act()
    {
        $text_az = $this->input->post("master_about_az");
        $text_en = $this->input->post("master_about_en");
        $text_ru = $this->input->post("master_about_ru");

        if (!empty($text_az) && !empty($text_ru) && !empty($text_en)){
            $data = array(
                "master_about_text_az" => $text_az,
                "master_about_text_en" => $text_en,
                "master_about_text_ru" => $text_ru,
            );

            $this->Mecnun_model->update_master_about_text($data);

            redirect("himalaY_magistr");

        }else{
            $this->session->set_flashdata("bachelor_about_error_message", "Boşluq buraxmayın");
            redirect("himalaY_magistr_yenile");
        }

        die();

    }

    public function master_specialities()
    {

        $data["all_specialities"] = $this->Mecnun_model->get_master_all_specialties();

        $this->load->view('Admin/master/master_specialities', $data);
    }

    public function add_master_speciality()
    {
        $this->load->view('Admin/master/master_add_specialities');
    }

    public function add_master_speciality_act()
    {

        $speciality_code = $this->input->post("speciality_code");

        $speciality_name_az = $this->input->post("speciality_name_az");
        $speciality_about_az = $this->input->post("speciality_about_az");


        $speciality_name_en = $this->input->post("speciality_name_en");
        $speciality_about_en = $this->input->post("speciality_about_en");


        $speciality_name_ru = $this->input->post("speciality_name_ru");
        $speciality_about_ru = $this->input->post("speciality_about_ru");

        if (!empty($speciality_code) && !empty($speciality_name_az) && !empty($speciality_about_az) && !empty($speciality_about_ru) && !empty($speciality_name_en) && !empty($speciality_about_en) && !empty($speciality_name_ru)){
            $data = array(
                "master_text" => $speciality_code,
                "master_text_about_az" => $speciality_name_az,
                "master_text_text_az" => $speciality_about_az,
                "master_text_about_en" => $speciality_name_en,
                "master_text_text_en" => $speciality_about_en,
                "master_text_about_ru" => $speciality_name_ru,
                "master_text_text_ru" => $speciality_about_ru,
            );

            $this->Mecnun_model->add_master_speciality($data);

            redirect("himalaY_magistr_ixtisaslar");

        }else{
            $this->session->set_flashdata("bachelor_about_error_message", "Boşluq buraxmayın");
            redirect("himalaY_magistr_ixtisas_elave_et");
        }


    }

    public function update_master_speciality($id)
    {
        $data["speciality"] = $this->Mecnun_model->get_single_speciality_master(array(
            "master_id" => $id,
        ));

        $this->load->view('Admin/master/master_update_specialities', $data);
    }

    public function update_master_speciality_act($id)
    {
        $speciality_code = $this->input->post("speciality_code");

        $speciality_name_az = $this->input->post("speciality_name_az");
        $speciality_about_az = $this->input->post("speciality_about_az");


        $speciality_name_en = $this->input->post("speciality_name_en");
        $speciality_about_en = $this->input->post("speciality_about_en");


        $speciality_name_ru = $this->input->post("speciality_name_ru");
        $speciality_about_ru = $this->input->post("speciality_about_ru");

        if (!empty($speciality_code) && !empty($speciality_name_az) && !empty($speciality_about_az) && !empty($speciality_about_ru) && !empty($speciality_name_en) && !empty($speciality_about_en) && !empty($speciality_name_ru)){
            $data = array(
                "master_text" => $speciality_code,
                "master_text_about_az" => $speciality_name_az,
                "master_text_text_az" => $speciality_about_az,
                "master_text_about_en" => $speciality_name_en,
                "master_text_text_en" => $speciality_about_en,
                "master_text_about_ru" => $speciality_name_ru,
                "master_text_text_ru" => $speciality_about_ru,
            );

            $where = array(
                "master_id" => $id,
            );

            $this->Mecnun_model->update_master_speciality($where, $data);

            redirect("himalaY_magistr_ixtisaslar");

        }else{
            $this->session->set_flashdata("bachelor_about_error_message", "Boşluq buraxmayın");
            redirect("himalaY_magistr_ixtisas_yenile/$id");
        }

    }

    public function delete_master_speciality($id)
    {
        $this->Mecnun_model->delete_master_speciality(array(
            "master_id" => $id,
        ));

        redirect("himalaY_magistr_ixtisaslar");
    }






    //     ============= Doktorantura Hissesi ================


    public function doctorate()
    {

        $data["doctorate_about_text"] = $this->Mecnun_model->get_doctorate_about_text();

        $this->load->view('Admin/doctorate/doctorate_main', $data);
    }

    public function update_doctorate_info()
    {
        $data["doctorate_about_text"] = $this->Mecnun_model->get_doctorate_about_text();

        $this->load->view('Admin/doctorate/doctorate_info_update', $data);
    }

    public function update_doctorate_info_act()
    {
        $text_az = $this->input->post("doctorate_about_az");
        $text_en = $this->input->post("doctorate_about_en");
        $text_ru = $this->input->post("doctorate_about_ru");

        if (!empty($text_az) && !empty($text_ru) && !empty($text_en)){
            $data = array(
                "doctorate_about_text_az" => $text_az,
                "doctorate_about_text_en" => $text_en,
                "doctorate_about_text_ru" => $text_ru,
            );

            $this->Mecnun_model->update_doctorate_about_text($data);

            redirect("himalaY_doktorantura");

        }else{
            $this->session->set_flashdata("doctorate_about_error_message", "Boşluq buraxmayın");
            redirect("himalaY_doktorantura_yenile");
        }

        die();

    }

    public function doctorate_specialities()
    {

        $data["all_specialities"] = $this->Mecnun_model->get_doctorate_all_specialties();

        $this->load->view('Admin/doctorate/doctorate_specialities', $data);
    }

    public function add_doctorate_speciality()
    {
        $this->load->view('Admin/doctorate/doctorate_add_specialities');
    }

    public function add_doctorate_speciality_act()
    {

        $speciality_code = $this->input->post("speciality_code");

        $speciality_name_az = $this->input->post("speciality_name_az");
        $speciality_about_az = $this->input->post("speciality_about_az");


        $speciality_name_en = $this->input->post("speciality_name_en");
        $speciality_about_en = $this->input->post("speciality_about_en");


        $speciality_name_ru = $this->input->post("speciality_name_ru");
        $speciality_about_ru = $this->input->post("speciality_about_ru");

        if (!empty($speciality_code) && !empty($speciality_name_az) && !empty($speciality_about_az) && !empty($speciality_about_ru) && !empty($speciality_name_en) && !empty($speciality_about_en) && !empty($speciality_name_ru)){
            $data = array(
                "doctorate_text" => $speciality_code,
                "doctorate_text_about_az" => $speciality_name_az,
                "doctorate_text_text_az" => $speciality_about_az,
                "doctorate_text_about_en" => $speciality_name_en,
                "doctorate_text_text_en" => $speciality_about_en,
                "doctorate_text_about_ru" => $speciality_name_ru,
                "doctorate_text_text_ru" => $speciality_about_ru,
            );

            $this->Mecnun_model->add_doctorate_speciality($data);

            redirect("himalaY_doktorantura_ixtisaslar");

        }else{
            $this->session->set_flashdata("doctorate_about_error_message", "Boşluq buraxmayın");
            redirect("himalaY_doktorantura_ixtisas_elave_et");
        }


    }

    public function update_doctorate_speciality($id)
    {
        $data["speciality"] = $this->Mecnun_model->get_single_speciality_doctorate(array(
            "doctorate_id" => $id,
        ));

        $this->load->view('Admin/doctorate/doctorate_update_specialities', $data);
    }

    public function update_doctorate_speciality_act($id)
    {
        $speciality_code = $this->input->post("speciality_code");

        $speciality_name_az = $this->input->post("speciality_name_az");
        $speciality_about_az = $this->input->post("speciality_about_az");


        $speciality_name_en = $this->input->post("speciality_name_en");
        $speciality_about_en = $this->input->post("speciality_about_en");


        $speciality_name_ru = $this->input->post("speciality_name_ru");
        $speciality_about_ru = $this->input->post("speciality_about_ru");

        if (!empty($speciality_code) && !empty($speciality_name_az) && !empty($speciality_about_az) && !empty($speciality_about_ru) && !empty($speciality_name_en) && !empty($speciality_about_en) && !empty($speciality_name_ru)){
            $data = array(
                "doctorate_text" => $speciality_code,
                "doctorate_text_about_az" => $speciality_name_az,
                "doctorate_text_text_az" => $speciality_about_az,
                "doctorate_text_about_en" => $speciality_name_en,
                "doctorate_text_text_en" => $speciality_about_en,
                "doctorate_text_about_ru" => $speciality_name_ru,
                "doctorate_text_text_ru" => $speciality_about_ru,
            );

            $where = array(
                "doctorate_id" => $id,
            );

            $this->Mecnun_model->update_doctorate_speciality($where, $data);

            redirect("himalaY_doktorantura_ixtisaslar");

        }else{
            $this->session->set_flashdata("doctorate_about_error_message", "Boşluq buraxmayın");
            redirect("himalaY_doktorantura_ixtisas_yenile/$id");
        }

    }

    public function delete_doctorate_speciality($id)
    {
        $this->Mecnun_model->delete_doctorate_speciality(array(
            "doctorate_id" => $id,
        ));

        redirect("himalaY_doktorantura_ixtisaslar");
    }




    //     ============================ Kafedra(ixtisaslar) Hissesi ================================
    public function specialities()
    {
        $data["all_specialities"] = $this->Mecnun_model->get_all_specialties();
        $this->load->view('Admin/specialities/speciality_list',$data);
    }

    public function speciality_add()
    {
        $this->load->view('Admin/specialities/speciality_add');
    }

    public function speciality_add_act()
    {
        $speciality_code = $this->input->post("speciality_code");

        $speciality_name_az = $this->input->post("speciality_name_az");
        $speciality_about_az = $this->input->post("speciality_about_az");


        $speciality_name_en = $this->input->post("speciality_name_en");
        $speciality_about_en = $this->input->post("speciality_about_en");


        $speciality_name_ru = $this->input->post("speciality_name_ru");
        $speciality_about_ru = $this->input->post("speciality_about_ru");

        if (!empty($speciality_code) && !empty($speciality_name_az) && !empty($speciality_about_az) && !empty($speciality_about_ru) && !empty($speciality_name_en) && !empty($speciality_about_en) && !empty($speciality_name_ru)){
            $data = array(
                "speciality_code" => $speciality_code,
                "speciality_name_az" => $speciality_name_az,
                "speciality_desc_az" => $speciality_about_az,
                "speciality_name_en" => $speciality_name_en,
                "speciality_desc_en" => $speciality_about_en,
                "speciality_name_ru" => $speciality_name_ru,
                "speciality_desc_ru" => $speciality_about_ru,
            );

            $this->Mecnun_model->addSpeciality($data);
            $msg = 'Ixtisas uğurla əlavə edildi ! ';
            $this->session->set_flashdata('success',$msg);
            redirect("himalaY_ixtisaslar");

        }else{
            $this->session->set_flashdata("error", "Boşluq buraxmayın");
            redirect("himalaY_ixtisas_elave_et");
        }


    }

    public function speciality_delete($id)
    {
        $this->Mecnun_model->deleteSpeciality([
            "id" => $id,
        ]);
        $msg = 'Ixtisas uğurla silindi ! ';
        $this->session->set_flashdata('success',$msg);

        redirect("himalaY_ixtisaslar");
    }

    public function speciality_update($id)
    {
        $data["speciality"] = $this->Mecnun_model->getSingleSpeciality([
            "id" => $id,
        ]);

        $this->load->view('Admin/specialities/speciality_update',$data);
    }

    public function speciality_update_act($id)
    {
        $speciality_code = $this->input->post("speciality_code");

        $speciality_name_az = $this->input->post("speciality_name_az");
        $speciality_about_az = $this->input->post("speciality_about_az");


        $speciality_name_en = $this->input->post("speciality_name_en");
        $speciality_about_en = $this->input->post("speciality_about_en");


        $speciality_name_ru = $this->input->post("speciality_name_ru");
        $speciality_about_ru = $this->input->post("speciality_about_ru");

        if (!empty($speciality_code) && !empty($speciality_name_az) && !empty($speciality_about_az) && !empty($speciality_about_ru) && !empty($speciality_name_en) && !empty($speciality_about_en) && !empty($speciality_name_ru)){
            $data = array(
                "speciality_code" => $speciality_code,
                "speciality_name_az" => $speciality_name_az,
                "speciality_desc_az" => $speciality_about_az,
                "speciality_name_en" => $speciality_name_en,
                "speciality_desc_en" => $speciality_about_en,
                "speciality_name_ru" => $speciality_name_ru,
                "speciality_desc_ru" => $speciality_about_ru,
            );

            $where = array(
                "id" => $id,
            );

            $this->Mecnun_model->updateSpeciality($where, $data);
            $msg = 'Ixtisas düzənləndi ! ';
            $this->session->set_flashdata('success',$msg);
            redirect("himalaY_ixtisaslar");

        }else{
            $this->session->set_flashdata("error", "Boşluq buraxmayın");
            redirect("himalaY_ixtisas_yenile/$id");
        }
    }



    //     ============= Laboratory (FAKULTE) Hissesi ================

    public function faculty_laboratory()
    {
        $data['laboratories']=$this->Mecnun_model->getLaboratoriesF();
        $this->load->view('Admin/faculty_lab/laboratory',$data);
    }

    public function update_faculty_laboratory($id)
    {
        $where=[
            'id' => $id
        ];

        $data["laboratory"] = $this->Mecnun_model->getLaboratoryF($where);
        $this->load->view('Admin/faculty_lab/laboratory_update',$data);
    }

    public function update_faculty_laboratory_act($id){
        $where =[
            'id' =>$id
        ];
        $laboratory_name_az = strip_tags($_POST['laboratory_name_az']);
        $laboratory_name_ru = strip_tags($_POST['laboratory_name_ru']);
        $laboratory_name_en = strip_tags($_POST['laboratory_name_en']);
        $laboratory_desc_az = $_POST['laboratory_desc_az'];
        $laboratory_desc_ru = $_POST['laboratory_desc_ru'];
        $laboratory_desc_en = $_POST['laboratory_desc_en'];


        $config['upload_path']   = 'upload/laboratory_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);
        if (!empty($laboratory_name_az) and !empty($laboratory_name_ru) and !empty($laboratory_name_en) and !empty($laboratory_desc_az) and !empty($laboratory_desc_ru))
        {
            if($this->upload->do_upload('laboratory_photo')) {
                $data = array(
                    'lab_title_az' => $laboratory_name_az,
                    'lab_title_ru' => $laboratory_name_ru,
                    'lab_title_en' => $laboratory_name_en,
                    'lab_text_az' => $laboratory_desc_az,
                    'lab_text_ru' => $laboratory_desc_ru,
                    'lab_text_en' => $laboratory_desc_en,

                    'laboratory_img' =>  $this->upload->data('file_name')
                );
                $this->Mecnun_model->updateLaboratoryF($where,$data);
                $this->session->set_flashdata('success', 'Labaratoriya düzənləndi');
                redirect(base_url('himalaY_fakulte_laboratoriya'));
            }else{
                $data = array(
                    'lab_title_az' => $laboratory_name_az,
                    'lab_title_ru' => $laboratory_name_ru,
                    'lab_title_en' => $laboratory_name_en,
                    'lab_text_az' => $laboratory_desc_az,
                    'lab_text_ru' => $laboratory_desc_ru,
                    'lab_text_en' => $laboratory_desc_en,
                );
                $this->Mecnun_model->updateLaboratoryF($where,$data);
                $this->session->set_flashdata('success', 'Labaratoriya düzənləndi');
                redirect(base_url('himalaY_fakulte_laboratoriya'));

            }

        }else{
            $this->session->set_flashdata('error','Melumatlari duzgun daxil edin');
            redirect(base_url('himalaY_fakulte_laboratoriya'));
        }

    }

    public function create_faculty_laboratory()
    {
        $this->load->view('Admin/faculty_lab/laboratory_create');
    }

    public function create_faculty_laboratory_action()
    {
        $laboratory_name_az = strip_tags($_POST['laboratory_name_az']);
        $laboratory_name_ru = strip_tags($_POST['laboratory_name_ru']);
        $laboratory_name_en = strip_tags($_POST['laboratory_name_en']);
        $laboratory_desc_az = $_POST['laboratory_desc_az'];
        $laboratory_desc_ru = $_POST['laboratory_desc_ru'];
        $laboratory_desc_en = $_POST['laboratory_desc_en'];

        $config['upload_path']   = 'upload/laboratory_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);

        if (!empty($laboratory_name_az) and !empty($laboratory_name_ru) and !empty($laboratory_name_en) and !empty($laboratory_desc_az) and !empty($laboratory_desc_ru) and !empty($laboratory_desc_en) )
        {
            $data = array(
                'lab_title_az' => $laboratory_name_az,
                'lab_title_ru' => $laboratory_name_ru,
                'lab_title_en' => $laboratory_name_en,
                'lab_text_az' => $laboratory_desc_az,
                'lab_text_ru' => $laboratory_desc_ru,
                'lab_text_en' => $laboratory_desc_en,
                'laboratory_img'     => ($this->upload->do_upload('laboratory_photo')) ? $this->upload->data('file_name') : 'default_noimage.jpg',

            );
            $this->Mecnun_model->insertLaboratoryF($data);
            $this->session->set_flashdata('success','Labaratoriya elave edildi');
            redirect(base_url('himalaY_fakulte_laboratoriya'));


        }else{
            $this->session->set_flashdata('error','Boşluq buraxmayın');
            redirect(base_url('himalaY_fakulte_laboratoriya_elave_et'));
        }

    }

    public function delete_faculty_laboratory($id)
    {
        $this->Mecnun_model->deleteLaboratoryF([
            'id' => $id
        ]);
        $this->session->set_flashdata('success','Labaratoriya silindi');
        redirect(base_url('himalaY_fakulte_laboratoriya'));
    }






}


