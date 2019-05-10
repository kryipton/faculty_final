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

        $slide_title = $this->input->post('slide_title');
        $slide_desc  = $this->input->post('slide_desc');
        $slide_link  = $this->input->post('slide_link');


        $config['upload_path']   = 'upload/slide_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('slide_img')){
            if (!empty($slide_link)) {
            $slide_img = $this->upload->data('file_name');
            $slide_data = array(

                'slide_title' => $slide_title,
                'slide_desc'  => $slide_desc,
                'slide_link'  => $slide_link,
                'slide_image' => $slide_img

            );

            $this->Mecnun_model->addSlider($slide_data);
            $msg = 'Yeni slider əlavə olundu ! ';
            $this->session->set_flashdata('success',$msg);

            redirect(base_url('himalaY_slider'));
            }else {
                $slide_img = $this->upload->data('file_name');
                $slide_data = array(

                    'slide_title' => $slide_title,
                    'slide_desc'  => $slide_desc,
                    'slide_link'  => base_url('home'),
                    'slide_image' => $slide_img

                );

                $this->Mecnun_model->addSlider($slide_data);
                $msg = 'Yeni slider əlavə olundu ! ( link əlavə etmədiniz ) ';
                $this->session->set_flashdata('success',$msg);

                redirect(base_url('himalaY_slider'));

            }

        }else{
            $msg = 'Şəkilsiz slider əlavə etmək mümkün deyil! ';
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

        $slide_title = $this->input->post('slide_title');
        $slide_desc  = $this->input->post('slide_desc');
        $slide_link  = $this->input->post('slide_link');


        $config['upload_path']   = 'upload/slide_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('slide_img')){
            if (!empty($slide_link)) {
                $slide_img = $this->upload->data('file_name');
                $slide_data = array(

                    'slide_title' => $slide_title,
                    'slide_desc'  => $slide_desc,
                    'slide_link'  => $slide_link,
                    'slide_image' => $slide_img

                );

                $this->Mecnun_model->updateSlider($where,$slide_data);
                $msg = 'Slider düzənləndi !  ';
                $this->session->set_flashdata('success',$msg);

                redirect(base_url('himalaY_slider'));
            }else {
                $slide_img = $this->upload->data('file_name');
                $slide_data = array(

                    'slide_title' => $slide_title,
                    'slide_desc'  => $slide_desc,
                    'slide_link'  => base_url('home'),
                    'slide_image' => $slide_img

                );

                $this->Mecnun_model->updateSlider($where,$slide_data);
                $msg = 'Slider düzənləndi! ';
                $this->session->set_flashdata('success',$msg);

                redirect(base_url('himalaY_slider'));

            }

        }else{
            $slide_data = array(

                'slide_title' => $slide_title,
                'slide_desc'  => $slide_desc,
                'slide_link'  => base_url('home'),


            );

            $this->Mecnun_model->updateSlider($where,$slide_data);
            $msg = 'Slider düzənləndi! ';
            $this->session->set_flashdata('success',$msg);

            redirect(base_url('himalaY_slider'));
        }


    }



    //     ============= Tedbirler Hissesi ================

    public function events()
    {
        $this->load->view('Admin/events/events_main');
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
        $this->load->view('Admin/teachers/teachers_main');
    }
    public function add_teachers()
    {
        $this->load->view('Admin/teachers/teachers_create');
    }
    public function update_teachers()
    {
        $this->load->view('Admin/teachers/teachers_update');
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


