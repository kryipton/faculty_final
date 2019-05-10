<?php
class Mecnun extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mecnun_model');
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
        $news_desc_az  = strip_tags($this->input->post('news_desc_az'));
        $news_desc_en  = strip_tags($this->input->post('news_desc_en'));
        $news_desc_ru  = strip_tags($this->input->post('news_desc_ru'));
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

    public function add_events()
    {
        $this->load->view('Admin/events/events_create');
    }

    public function update_events()
    {
        $this->load->view('Admin/events/events_update');
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
                    'teacher_name_en' => $teacher_name_ru,
                    'teacher_name_ru' => $teacher_name_en,

                    'teacher_surname_az' => $teacher_surname_az,
                    'teacher_surname_en' => $teacher_surname_ru,
                    'teacher_surname_ru' => $teacher_surname_en,

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




        $config['upload_path']   = 'upload/teacher_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);

        if( !empty($teacher_name_az) && !empty($teacher_name_ru) &&  !empty($teacher_name_en) && !empty($teacher_surname_az) && !empty($teacher_surname_en) && !empty($teacher_surname_ru) && !empty($teacher_position_az) && !empty($teacher_position_ru) && !empty($teacher_position_en) && !empty($teacher_about_az) && !empty($teacher_about_ru) && !empty($teacher_about_en) && !empty($teacher_department_category_az) && !empty($teacher_department_category_en) && !empty($teacher_department_category_ru))
        {

            $data = array(

                'teacher_name_az' => $teacher_name_az,
                'teacher_name_en' => $teacher_name_ru,
                'teacher_name_ru' => $teacher_name_en,

                'teacher_surname_az' => $teacher_surname_az,
                'teacher_surname_en' => $teacher_surname_ru,
                'teacher_surname_ru' => $teacher_surname_en,

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






    //     ============= Laboratory Hissesi ================

    public function laboratory()
    {
        $this->load->view('Admin/laboratory/laboratory_main');
    }

    public function update_laboratory()
    {
        $this->load->view('Admin/laboratory/laboratory_update');
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
        $this->load->view('Admin/about/about_main');
    }

    public function add_about()
    {
        $this->load->view('Admin/about/about_create');
    }

    public function update_about()
    {
        $this->load->view('Admin/about/about_update');
    }




//     ============= Bakalavr Hissesi ================

    public function bachelor()
    {
        $this->load->view('Admin/bachelor/bachelor_main');
    }

    public function bachelor_specialities()
    {
        $this->load->view('Admin/bachelor/bachelor_specialities');
    }

    public function add_bachelor_speciality()
    {
        $this->load->view('Admin/bachelor/bachelor_speciality_create');
    }

    public function update_bachelor_info()
    {
        $this->load->view('Admin/bachelor/bachelor_info_update');
    }














}


