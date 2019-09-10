<?php
date_default_timezone_set('Asia/Baku');
class Mecnun extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mecnun_model');
        $this->load->model('Services_model');
        $this->load->model('Master_model');
        $this->load->model('Bachelor_model');
        $this->load->model('Doctorate_model');
        $this->load->model('Admin_model');
        $this->load->model('Journal_model');
        if(!get_active_user()){
            redirect(base_url('himalaY_secure'));
        }
    }

//  =================  DASHBOARD telebe lab mellim saylari ============================

    public function index(){
        $data['counts'] = $this->Mecnun_model->getCounts();
        $this->load->view('Admin/main_page/main',$data);
    }

    public function updateCounts()
    {
        $teacher_count = strip_tags($this->input->post('teacher_count'));
        $student_count = strip_tags($this->input->post('student_count'));
        $lab_count = strip_tags($this->input->post('lab_count'));
        if(!empty($teacher_count) && !empty($student_count) && !empty($lab_count)  ) {
            $data = [
              'teacher_count' => $teacher_count,
              'student_count' => $student_count,
              'lab_count' =>$lab_count,
            ];
            $this->Mecnun_model->updateCounts($data);
            $msg = 'Saylar uğurla düzənləndi! ';
            $this->session->set_flashdata('success',$msg);
            redirect(base_url('himalaY'));
           }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın! ';
            $this->session->set_flashdata('alert',$msg);
            redirect(base_url('himalaY'));
        }

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
        $this->Mecnun_model->news_gallery_delete(array(
            "news_id" => $id,
        ));

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


    public function gallery($id){
        $data["photos"] = $this->Mecnun_model->get_news_gallery([
            "news_id" => $id
        ]);
        $data["news"] = $this->Mecnun_model->getOneNews([
            "news_id" => $id
        ]);
        $this->load->view('Admin/news/news_gallery/whole_page',$data);
    }

    public function news_gallery_add($id){
        //      sekiller dropzonedan upload edilir
        $config['upload_path'] = 'upload/news_images/gallery';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['file']['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $cond = $this->upload->do_upload("file");


        //      upload edilecek sekil database e yuklenir
        $data  = array(
            "name"                  => ($cond) ? $this->upload->data('file_name') : "default.png",
            "upload_date"           => date("Y/m/d"),
            "news_id"               =>   $id,
        );


        //      eyger sekil upload oldusa succes olmadisa warning alerti versin
        if ($cond){
            $this->session->set_flashdata("alert", "Şəkil Yükləndi!");
        }else{
            $this->session->set_flashdata("alert_danger", "Şəkil Yüklənmədi!");
        }

        $this->Mecnun_model->news_gallery_add($data);
    }


    public function news_gallery_refresh($id)
    {
        $data["photos"] = $this->Mecnun_model->get_news_gallery([
            "news_id" => $id
        ]);
        $data["news"] = $this->Mecnun_model->getOneNews([
            "news_id" => $id
        ]);
      $render =  $this->load->view('Admin/news/news_gallery/render_page/news_table_list',$data, true);
      echo $render;
    }

    public function news_gallery_delete($news_id, $gallery_id){

        $photo= $this->Mecnun_model->get_news_gallery_one([
            "id" => $gallery_id
        ]);

        $this->Mecnun_model->news_gallery_delete(array(
            "id" => $gallery_id,
        ));

        if ($photo['name'] != "default.png"){
            unlink("upload/news_images/gallery/".$photo['name']);
        }

        $data["photos"] = $this->Mecnun_model->get_news_gallery([
            "news_id" => $news_id
        ]);
        $data["news"] = $this->Mecnun_model->getOneNews([
            "news_id" => $news_id
        ]);
    redirect(base_url("himalaY_xeber_gallery/").$news_id);
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

        $slide_link     = $this->input->post('slide_link');


        $config['upload_path']   = 'upload/slide_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->upload->initialize($config);


        if (!empty($slide_title_az) && !empty($slide_title_en) && !empty($slide_title_ru) && !empty($slide_link)){


            $slide_data = array(

                'slide_title_az' => $slide_title_az,
                'slide_title_en' => $slide_title_en,
                'slide_title_ru' => $slide_title_ru,

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

        $slide_link     = $this->input->post('slide_link');


        $config['upload_path']   = 'upload/slide_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->upload->initialize($config);

        if (!empty($slide_title_az) && !empty($slide_title_en) && !empty($slide_title_ru) && !empty($slide_link)){
            if ($this->upload->do_upload('slide_img')) {

                $slide_img = $this->upload->data('file_name');
                $slide_data = array(

                    'slide_title_az' => $slide_title_az,
                    'slide_title_en' => $slide_title_en,
                    'slide_title_ru' => $slide_title_ru,
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
        $config['file_name'] = $_FILES['event_image']['name'];

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
        $config['file_name'] = $_FILES['event_image']['name'];

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


        $teacher_knowledge_position_az  = strip_tags($this->input->post('teacher_knowledge_position_az'));
        $teacher_knowledge_position_en  = strip_tags($this->input->post('teacher_knowledge_position_en'));
        $teacher_knowledge_position_ru  = strip_tags($this->input->post('teacher_knowledge_position_ru'));


        $teacher_department_category_az  = $this->input->post('teacher_department_category_az');
         $teacher_department_category_en  = $this->input->post('teacher_department_category_en');
         $teacher_department_category_ru  = $this->input->post('teacher_department_category_ru');


        $teacher_editor1_az  = $this->input->post('c1_text_az');
        $teacher_editor1_en  = $this->input->post('c1_text_en');
        $teacher_editor1_ru  = $this->input->post('c1_text_ru');

        $teacher_editor2_az  = $this->input->post('c2_text_az');
        $teacher_editor2_en  = $this->input->post('c2_text_en');
        $teacher_editor2_ru  = $this->input->post('c2_text_ru');

        $teacher_mail  = strip_tags($this->input->post('teacher_mail'));

        $teacher_picture  = $this->input->post('teacher_photo');




        $config['upload_path']   = 'upload/teacher_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);

        if( !empty($teacher_name_az) && !empty($teacher_name_ru) &&  !empty($teacher_name_en) && !empty($teacher_surname_az) && !empty($teacher_surname_en) && !empty($teacher_surname_ru) && !empty($teacher_position_az) && !empty($teacher_position_ru) && !empty($teacher_position_en) && !empty($teacher_department_category_az) && !empty($teacher_department_category_en) && !empty($teacher_department_category_ru) && !empty($teacher_editor1_az) && !empty($teacher_editor1_en) && !empty($teacher_editor1_ru) && !empty($teacher_editor2_az) && !empty($teacher_editor2_en) && !empty($teacher_editor2_ru) && !empty($teacher_mail))
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

                    'teacher_knowledge_position_az' => $teacher_knowledge_position_az,
                    'teacher_knowledge_position_en' => $teacher_knowledge_position_en,
                    'teacher_knowledge_position_ru' => $teacher_knowledge_position_ru,

                    'editor1_az' => $teacher_editor1_az,
                    'editor1_en' => $teacher_editor1_en,
                    'editor1_ru' => $teacher_editor1_ru,

                    'editor2_az' => $teacher_editor2_az,
                    'editor2_en' => $teacher_editor2_en,
                    'editor2_ru' => $teacher_editor2_ru,

                    'teacher_mail' => $teacher_mail,


                    'department_category_az' => $teacher_department_category_az,
                    'department_category_en' => $teacher_department_category_en,
                    'department_category_ru' => $teacher_department_category_ru,


                    'teacher_photo' => ($this->upload->do_upload('teacher_photo')) ? $this->upload->data('file_name') : "default.png",

                );

                $this->Mecnun_model->add_teacher($data);
                $msg = 'Müəllim uğurla əlavə olundu! ';
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

        $teacher_knowledge_position_az  = strip_tags($this->input->post('teacher_knowledge_position_az'));
        $teacher_knowledge_position_en  = strip_tags($this->input->post('teacher_knowledge_position_en'));
        $teacher_knowledge_position_ru  = strip_tags($this->input->post('teacher_knowledge_position_ru'));


        $teacher_editor1_az  = $this->input->post('c1_text_az');
        $teacher_editor1_en  = $this->input->post('c1_text_en');
        $teacher_editor1_ru  = $this->input->post('c1_text_ru');

        $teacher_editor2_az  = $this->input->post('c2_text_az');
        $teacher_editor2_en  = $this->input->post('c2_text_en');
        $teacher_editor2_ru  = $this->input->post('c2_text_ru');

        $teacher_mail  = strip_tags($this->input->post('teacher_mail'));


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

        if( !empty($teacher_name_az) && !empty($teacher_name_ru) &&  !empty($teacher_name_en) && !empty($teacher_surname_az) && !empty($teacher_surname_en) && !empty($teacher_surname_ru) && !empty($teacher_position_az) && !empty($teacher_position_ru) && !empty($teacher_position_en) && !empty($teacher_department_category_az) && !empty($teacher_department_category_en) && !empty($teacher_department_category_ru) && !empty($teacher_editor1_az) && !empty($teacher_editor1_en) && !empty($teacher_editor1_ru) && !empty($teacher_editor2_az) && !empty($teacher_editor2_en) && !empty($teacher_editor2_ru) && !empty($teacher_mail))
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

                'teacher_knowledge_position_az' => $teacher_knowledge_position_az,
                'teacher_knowledge_position_en' => $teacher_knowledge_position_en,
                'teacher_knowledge_position_ru' => $teacher_knowledge_position_ru,

                'editor1_az' => $teacher_editor1_az,
                'editor1_en' => $teacher_editor1_en,
                'editor1_ru' => $teacher_editor1_ru,

                'editor2_az' => $teacher_editor2_az,
                'editor2_en' => $teacher_editor2_en,
                'editor2_ru' => $teacher_editor2_ru,

                'teacher_mail' => $teacher_mail,

                'department_category_az' => $teacher_department_category_az,
                'department_category_en' => $teacher_department_category_en,
                'department_category_ru' => $teacher_department_category_ru,


                'teacher_photo' => ($this->upload->do_upload('teacher_photo')) ? $this->upload->data('file_name') : $teacher["teacher_photo"],

            );

            $where = array(
              "teacher_id" => $teacher_id,
            );

            $this->Mecnun_model->update_teacher($where, $data);
            $msg = 'Məllim uğurla yeniləndi';
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


//     ============= Xidmetler Hissesi ================

    public function services()
    {

        $data['services'] = $this->Services_model->get_services();
        $this->load->view('Admin/services/services_main',$data);
    }

    public function add_services()
    {
        $this->load->view('Admin/services/services_add');
    }

    public function add_services_act()
    {

        $name_az = strip_tags($this->input->post("name_az"));
        $name_en = strip_tags($this->input->post("name_en"));
        $name_ru = strip_tags($this->input->post("name_ru"));
        $link = strip_tags($this->input->post("link"));

        if (!empty($name_az) && !empty($name_ru) &&!empty($name_en) &&!empty($link)){

            $this->Services_model->add_service(array(
                "name_az" => $name_az,
                "name_en" => $name_en,
                "name_ru" => $name_ru,
                "link" => $link,
            ));

            $this->session->set_flashdata('success', "Xidmət Əlavə olundu");
            redirect(base_url('himalaY_xidmetler'));

        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın ! ';
            $this->session->set_flashdata('alert',$msg);

            redirect(base_url('himalaY_xidmetler_elave_et'));
        }



    }

    public function delete_services($id){

        $this->Services_model->delete_service(array("id" => $id));


        $this->session->set_flashdata('success', "Xidmət silindi");
        redirect(base_url('himalaY_xidmetler'));

    }

    public function update_services($id){
        $data["service"] = $this->Services_model->get_service(array(
            "id" => $id,
        ));

        $this->load->view("Admin/services/services_update", $data);
    }

    public function update_services_act($id){
        $name_az = strip_tags($this->input->post("name_az"));
        $name_en = strip_tags($this->input->post("name_en"));
        $name_ru = strip_tags($this->input->post("name_ru"));
        $link = strip_tags($this->input->post("link"));

        if (!empty($name_az) && !empty($name_ru) &&!empty($name_en) &&!empty($link)){
            $this->Services_model->update_service(

                array(
                    "id" => $id,
                ),

                array(
                "name_az" => $name_az,
                "name_en" => $name_en,
                "name_ru" => $name_ru,
                "link" => $link,
                )
            );

            $this->session->set_flashdata('success', "Xidmət Yeniləndi");
            redirect(base_url('himalaY_xidmetler'));

        }else{
            $msg = 'Zəhmət olmasa boşluq buraxmayın ! ';
            $this->session->set_flashdata('alert',$msg);

            redirect(base_url("himalaY_xidmetler_yenile/$id"));
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
        $logo_and_title = $this->Mecnun_model->get_logo_and_title();

        $site_title_az = $this->input->post("site_title_az");
        $site_title_en = $this->input->post("site_title_en");
        $site_title_ru = $this->input->post("site_title_ru");

        $config['upload_path']   = 'public/images/faculty_logo/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->upload->initialize($config);

        if (!empty($site_title_az) && !empty($site_title_en) && !empty($site_title_ru) ){

            $data = array(
              "site_title_az" => $site_title_az,
              "site_title_en" => $site_title_en,
              "site_title_ru" => $site_title_ru,
              "logo_img"   => ($this->upload->do_upload('site_loqo')) ? $this->upload->data('file_name') : $logo_and_title["logo_img"],
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

    public function bachelor_contact()
    {
        $data['contact']=$this->Bachelor_model->get_contact();

        $this->load->view('Admin/bachelor/bachelor_contact',$data);
    }

    public function update_bachelor_contact()
    {
        $text_az = $this->input->post("master_about_az");
        $text_en = $this->input->post("master_about_en");
        $text_ru = $this->input->post("master_about_ru");

        if (!empty($text_az) && !empty($text_ru) && !empty($text_en)){
            $data = array(
                "contact_az" => $text_az,
                "contact_en" => $text_en,
                "contact_ru" => $text_ru,
            );

            $this->Bachelor_model->update_contact($data);

            $this->session->set_flashdata("success", "Melumat yenilendi");

            redirect("himalaY_bakalavr_elaqe");

        }else{
            $this->session->set_flashdata("danger", "Boşluq buraxmayın");
            redirect("himalaY_bakalavr_elaqe");
        }


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

    public function master_contact()
    {
        $data['contact']=$this->Master_model->get_contact();

        $this->load->view('Admin/master/master_contact',$data);
    }

    public function update_master_contact()
    {
        $text_az = $this->input->post("master_about_az");
        $text_en = $this->input->post("master_about_en");
        $text_ru = $this->input->post("master_about_ru");

        if (!empty($text_az) && !empty($text_ru) && !empty($text_en)){
            $data = array(
                "contact_az" => $text_az,
                "contact_en" => $text_en,
                "contact_ru" => $text_ru,
            );

            $this->Master_model->update_contact($data);

            $this->session->set_flashdata("success", "Melumat yenilendi");

            redirect("himalaY_magistr_elaqe");

        }else{
            $this->session->set_flashdata("danger", "Boşluq buraxmayın");
            redirect("himalaY_magistr_elaqe");
        }


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

    public function doctorate_contact()
    {
        $data['contact']=$this->Doctorate_model->get_contact();

        $this->load->view('Admin/doctorate/doctorate_contact',$data);
    }

    public function update_doctorate_contact()
    {
        $text_az = $this->input->post("master_about_az");
        $text_en = $this->input->post("master_about_en");
        $text_ru = $this->input->post("master_about_ru");

        if (!empty($text_az) && !empty($text_ru) && !empty($text_en)){
            $data = array(
                "contact_az" => $text_az,
                "contact_en" => $text_en,
                "contact_ru" => $text_ru,
            );

            $this->Doctorate_model->update_contact($data);

            $this->session->set_flashdata("success", "Melumat yenilendi");

            redirect("himalaY_doktorantura_elaqe");

        }else{
            $this->session->set_flashdata("danger", "Boşluq buraxmayın");
            redirect("himalaY_doktorantura_elaqe");
        }


    }





    //     ============================ Kafedra(ixtisaslar) Hissesi ================================
    public function specialities()
    {
        $data["all_specialities"] = $this->Mecnun_model->get_all_specialties();
        $this->load->view('Admin/specialities/speciality_list',$data);
    }

    public function speciality_add()
    {
        $data["categories"] = $this->Mecnun_model->get_categories();

        $this->load->view('Admin/specialities/speciality_add', $data);

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


        $speciality_department_az = $this->input->post("speciality_department_category_az");
        $speciality_department_en = $this->input->post("speciality_department_category_en");
        $speciality_department_ru = $this->input->post("speciality_department_category_ru");

        if (!empty($speciality_department_ru) && !empty($speciality_department_en) && !empty($speciality_department_az) && !empty($speciality_code) && !empty($speciality_name_az) && !empty($speciality_about_az) && !empty($speciality_about_ru) && !empty($speciality_name_en) && !empty($speciality_about_en) && !empty($speciality_name_ru)) {
                $data = array(
                    "speciality_code" => $speciality_code,
                    "speciality_name_az" => $speciality_name_az,
                    "speciality_desc_az" => $speciality_about_az,
                    "speciality_name_en" => $speciality_name_en,
                    "speciality_desc_en" => $speciality_about_en,
                    "speciality_name_ru" => $speciality_name_ru,
                    "speciality_desc_ru" => $speciality_about_ru,
                    "department_category_name_az" => $speciality_department_az,
                    "department_category_name_en" => $speciality_department_en,
                    "department_category_name_ru" => $speciality_department_ru,
                );

                $this->Mecnun_model->addSpeciality($data);
                $msg = 'Ixtisas uğurla əlavə edildi ! ';
                $this->session->set_flashdata('success', $msg);
                redirect("himalaY_ixtisaslar");

            } else {
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

        $data["categories"] = $this->Mecnun_model->get_categories();

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

        $speciality_department_az = $this->input->post("speciality_department_category_az");
        $speciality_department_en = $this->input->post("speciality_department_category_en");
        $speciality_department_ru = $this->input->post("speciality_department_category_ru");

        if (!empty($speciality_code) && !empty($speciality_name_az) && !empty($speciality_about_az) && !empty($speciality_about_ru) && !empty($speciality_name_en) && !empty($speciality_about_en) && !empty($speciality_name_ru)){
            $data = array(
                "speciality_code" => $speciality_code,
                "speciality_name_az" => $speciality_name_az,
                "speciality_desc_az" => $speciality_about_az,
                "speciality_name_en" => $speciality_name_en,
                "speciality_desc_en" => $speciality_about_en,
                "speciality_name_ru" => $speciality_name_ru,
                "speciality_desc_ru" => $speciality_about_ru,
                "department_category_name_az" => $speciality_department_az,
                "department_category_name_en" => $speciality_department_en,
                "department_category_name_ru" => $speciality_department_ru,
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



    //     ============= Admin update Hissesi ================

    public function admin_update(){
        $data["admin"] = $this->Admin_model->get_admin();
        $this->load->view('Admin/admin_update/admin_update',$data);
    }


    public function admin_update_act(){
        $username = strip_tags($this->input->post("name"));
        $password = strip_tags($this->input->post("password"));
        $password_again = strip_tags($this->input->post("password_again"));

        if (!empty($username) && !empty($password_again) && !empty($password)){

            if ($password_again == $password){
                $this->Admin_model->update_admin(array(
                    "user_name" => $username,
                    "user_password" => md5($password),
                ));

                $this->session->set_flashdata("success", "Admin məlumatları yeniləndi");
                redirect(base_url("himalaY_admin_yenileme"));

            }else{
                $this->session->set_flashdata("alert", "Şifrələri eyni daxil edin!");
                redirect(base_url("himalaY_admin_yenileme"));
            }

        }else{
           $this->session->set_flashdata("alert", "Boşluq buraxmayın!");
           redirect(base_url("himalaY_admin_yenileme"));
        }
    }

    //     ============= Admin update Hissesi ================








    //     ================================================= Jurnallar hissesi Hissesi ===========================================================
    public function journal_main()
    {
        $data["journals"] = $this->Journal_model->get_journals();
        $this->load->view('Admin/journal/whole_page',$data);
    }

    public function journal_add()
    {
        $this->load->view('Admin/journal/create_page');
    }


    public function journal_add_act()
    {

        $title_az = strip_tags($this->input->post('title_az'));
        $title_en = strip_tags($this->input->post('title_en'));
        $title_ru = strip_tags($this->input->post('title_ru'));
        $desc_az  = $this->input->post('desc_az');
        $desc_en  = $this->input->post('desc_en');
        $desc_ru  = $this->input->post('desc_ru');
        $contact_az  = $this->input->post('contact_az');
        $contact_ru  = $this->input->post('contact_ru');
        $contact_en  = $this->input->post('contact_en');
        $time     = strip_tags($this->input->post('news_date'));
        $edition_no   = strip_tags($this->input->post('edition_no'));

        $config['upload_path']   = 'upload/journal_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $_FILES['image_name']['name'];

        $this->upload->initialize($config);

        if (!empty($title_az) && !empty($title_en) && !empty($title_ru) && !empty($desc_az)){


            $data = array(

                'name_az' => $title_az,
                'name_en' => $title_en,
                'name_ru' =>  $title_ru,
                'desc_az'  => $desc_az,
                'desc_en'  => $desc_en,
                'desc_ru'  => $desc_ru,
                'contact_az'  => $contact_az,
                'contact_ru'  => $contact_ru,
                'contact_en'  => $contact_en,
                'time'  => $time,
                'edition_no '  => $edition_no,
                'img_name'    => ($this->upload->do_upload('image_name')) ? $this->upload->data('file_name') : 'default.png'


            );

            $this->Journal_model->insert($data);
            $msg = 'Yeni jurnal əlavə olundu ! ';
            $this->session->set_flashdata('success',$msg);

            redirect(base_url('himalaY_jurnallar'));
        }else{

            $msg = 'Zəhmət olmasa boşluq buraxmayın ! ';
            $this->session->set_flashdata('alert',$msg);

            redirect(base_url('himalaY_jurnallar_elave_et'));
        }
    }


    public function journal_delete($id)
    {
        $this->Journal_model->delete([
            'id' => $id
        ]);
        $this->session->set_flashdata('success','Jurnal silindi');
        redirect(base_url('himalaY_jurnallar'));
    }

    public function journal_update($id)
    {
        $data["journal"] = $this->Journal_model->get_journal([
            'id' => $id
        ]);
        $this->load->view('Admin/journal/update_page',$data);
    }

    public function journal_update_act($id)
    {


        $title_az = strip_tags($this->input->post('title_az'));
        $title_en = strip_tags($this->input->post('title_en'));
        $title_ru = strip_tags($this->input->post('title_ru'));
        $desc_az  = $this->input->post('desc_az');
        $desc_en  = $this->input->post('desc_en');
        $desc_ru  = $this->input->post('desc_ru');
        $contact_az  = $this->input->post('contact_az');
        $contact_ru  = $this->input->post('contact_ru');
        $contact_en  = $this->input->post('contact_en');
        $time     = strip_tags($this->input->post('news_date'));
        $edition_no   = strip_tags($this->input->post('edition_no'));

        $config['upload_path']   = 'upload/journal_images/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $_FILES['image_name']['name'];

        $this->upload->initialize($config);

        if (!empty($title_az) && !empty($title_en) && !empty($title_ru) && !empty($desc_az)){

            if ($this->upload->do_upload('image_name')){
            $data = array(

                'name_az' => $title_az,
                'name_en' => $title_en,
                'name_ru' =>  $title_ru,
                'desc_az'  => $desc_az,
                'desc_en'  => $desc_en,
                'desc_ru'  => $desc_ru,
                'contact_az'  => $contact_az,
                'contact_ru'  => $contact_ru,
                'contact_en'  => $contact_en,
                'time'  => $time,
                'edition_no '  => $edition_no,
                'img_name'    => $this->upload->data('file_name')


            );}else{

                $data = array(

                    'name_az' => $title_az,
                    'name_en' => $title_en,
                    'name_ru' =>  $title_ru,
                    'desc_az'  => $desc_az,
                    'desc_en'  => $desc_en,
                    'desc_ru'  => $desc_ru,
                    'contact_az'  => $contact_az,
                    'contact_ru'  => $contact_ru,
                    'contact_en'  => $contact_en,
                    'time'  => $time,
                    'edition_no '  => $edition_no,
                );

            }

            $this->Journal_model->update($data);
            $msg = 'Jurnal düzənləndi!';

            $this->session->set_flashdata('success',$msg);

            redirect(base_url('himalaY_jurnallar'));
        }else{

            $msg = 'Zəhmət olmasa boşluq buraxmayın ! ';
            $this->session->set_flashdata('alert',$msg);

            redirect(base_url('himalaY_jurnallar_duzenle/').$id);
        }
    }


    public function journal_publication($id)
    {
        $data["publications"] = $this->Journal_model->get_publications([
            'journal_id' => $id
        ]);

        $data["journal"] = $this->Journal_model->get_journal([
            'id' => $id
        ]);
        $this->load->view('Admin/journal/publication',$data);
    }

    public function publication_add($id)
    {
        $data["journal"] = $this->Journal_model->get_journal([
            'id' => $id
        ]);
        $this->load->view('Admin/journal/publication_add',$data);
    }

    public function publication_add_act($id)
    {
        $title_az = strip_tags($this->input->post('title_az'));
        $title_en = strip_tags($this->input->post('title_en'));
        $title_ru = strip_tags($this->input->post('title_ru'));
        $time = strip_tags($this->input->post('time'));
        $link = strip_tags($this->input->post('link'));


        $config['upload_path']   = 'upload/publications_files/';
        $config['max_size']     = '10000';
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['file_name'] = $_FILES['image_name']['name'];

        $this->upload->initialize($config);

        if (!empty($time) ){


            $data = array(

                'name_az' => $title_az,
                'name_en' => $title_en,
                'name_ru' =>  $title_ru,
                'journal_id' => $id,
                'time'  => $time,
                'link' => $link,
                'file_name'    => $this->upload->data('file_name')


            );

            $this->Journal_model->insert_publication($data);
            $msg = 'Yeni derc əlavə olundu ! ';
            $this->session->set_flashdata('success',$msg);

            redirect(base_url('himalaY_jurnallar'));
        }else{

            $msg = 'Zəhmət olmasa boşluq buraxmayın ! ';
            $this->session->set_flashdata('alert',$msg);

            redirect(base_url('himalaY_jurnallar_elave_et'));
        }
    }

    public function publication_delete($id)
    {
        $this->Journal_model->delete_publication([
            'id' => $id
        ]);
        $this->session->set_flashdata('success','Derc silindi');
        redirect(base_url('himalaY_jurnallar_dercler/').$id);
    }
}


