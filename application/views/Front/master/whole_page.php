<title>Magistratura</title>

<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>


<div class="content_wrapper" style="margin-bottom: 150px;">

    <div class="breadcrumb_wrap" >
        <div class="breadcrumb_wrap_inner" style="background-image: url('../public/images/top1.jpg');height: 250px;">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/Home');
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Home');
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Home');
                        }

                        ?>">Ana Səhifə</a>  /</li>
                    <li>Ümumi məlumat</li>
                </ul>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 600px !important;margin-top: 20px;">
        <div class="col-md-3">
            <div class="category_course" style="margin-top: 75px;">
                <ul>
                    <li><a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/Master');
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Master');
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Master');
                        }

                        ?>">Ümumi məlumat</a></li>
                    <li><a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/Master/Speciality');
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Master/Speciality');
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Master/Speciality');
                        }

                        ?>">İxtisas</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-8">
            <h2>Magistr təhsili</h2>
            <div class="about_right" style="padding: 20px 0px 0px 10px">

                <div class="about_right_text">

                    <?php
                    echo $data[0]['master_about_text'];
                    ?>

                </div>

            </div>
        </div>
    </div>



</div>


<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
