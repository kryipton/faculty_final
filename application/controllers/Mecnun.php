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
        $this->load->view('Admin/slider/slider_main');
    }

    public function add_slider()
    {
        $this->load->view('Admin/slider/slider_create');
    }


    public function update_slider()
    {
        $this->load->view('Admin/slider/slider_update');
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
        $data["teachers"] = $this->Mecnun_model->get_teachers();

        $data["categories"] = $this->Mecnun_model->get_categories();


        $this->load->view('Admin/teachers_category/teachers_main', $data);
    }

    public function add_teachers()
    {
        $data["categories"] = $this->Mecnun_model->get_categories();

        $this->load->view('Admin/teachers_category/teachers_create', $data);
    }

    public function update_teachers($teacher_id)
    {


        $this->load->view('Admin/teachers_category/teachers_update');
    }

    public function delete_teachers($teacher_id)
    {


        $this->load->view('Admin/teachers_category/teachers_update');
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



