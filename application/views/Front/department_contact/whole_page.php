<title><?php echo $this->lang->line("elaqe"); ?></title>
<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>

<div class="content_wrapper" style="margin-bottom: 80px;">

    <div class="breadcrumb_wrap">
        <div class="breadcrumb_wrap_inner about_head">
            <div class="container">
                <h1><?php


                    if ($this->session->userdata("dil") == "az"){
                        echo $logo["site_title_az"];
                    }elseif ($this->session->userdata("dil") == "en"){
                        echo $logo["site_title_en"];
                    }elseif ($this->session->userdata("dil") == "ru"){
                        echo $logo["site_title_ru"];
                    }

                    ?></h1>

                <ul class="breadcrumbs">
                    <li><a href="<?php


                        if ($this->session->userdata("dil") == "az"){
                            echo base_url("az/Home");
                        }elseif ($this->session->userdata("dil") == "en"){
                            echo base_url("en/Home");
                        }elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url("ru/Home");
                        }

                        ?>"><?php echo $this->lang->line("ana_sehife"); ?></a> /</li>

                    <li><?php echo $this->lang->line("elaqe"); ?></li>
                </ul>

            </div>
        </div>
    </div>

    <?php $this->load->view('Front/department/left_menu'); ?>

    <div class="col-md-8">
        <div class="about_right" style="padding: 20px 0px 0px 10px">
            <h2><?php echo $this->lang->line("elaqe"); ?></h2>
            <div class="about_right_text" style="color: grey">
                <span> 
                    <?php

                    if ($this->session->userdata("dil") == "az"){
                        echo $department["category_contact_az"];
                    }elseif ($this->session->userdata("dil") == "en"){
                        echo $department["category_contact_en"];
                    }elseif ($this->session->userdata("dil") == "ru"){
                        echo $department["category_contact_ru"];
                    }

                   ?>

                     <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6078.73526600192!2d49.848567!3d40.378544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53a5c1e7cc11c36f!2zQXrJmXJiYXljYW4gRMO2dmzJmXQgTmVmdCB2yZkgU8mZbmF5ZSBVbml2ZXJzaXRldGk!5e0!3m2!1sen!2sus!4v1566812188664!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    <br><br>

                </span>
            </div>
        </div>
    </div>

</div>


<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
