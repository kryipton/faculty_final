<title><?php echo $this->lang->line("muellimler"); ?></title>

<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>

<div class="content_wrapper" style="margin-bottom: 130px;">

    <div class="breadcrumb_wrap">
        <div class="breadcrumb_wrap_inner about_head">
            <div class="container">
                <h1>
                    <?php


                    if ($this->session->userdata("dil") == "az"){
                        echo $logo["site_title_az"];
                    }elseif ($this->session->userdata("dil") == "en"){
                        echo $logo["site_title_en"];
                    }elseif ($this->session->userdata("dil") == "ru"){
                        echo $logo["site_title_ru"];
                    }

                    ?>
                </h1>
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

                        ?>">
                            <?php echo $this->lang->line("ana_sehife"); ?>
                        </a> /</li>
                    <li>  <?php echo $this->lang->line("muellimler"); ?></li>
                </ul>
            </div>
        </div>
    </div>

    <?php $this->load->view('Front/department/left_menu'); ?>

    <div class="col-md-8" style="margin-bottom: 100px">
        <div class="about_right" style="padding: 20px 0px 0px 10px">
            <h2><?php echo $this->lang->line("muellimler"); ?></h2>
            <div class="about_right_text" style="color: grey">
                <br><br>
                <div class="container-fluid">
                    <div class="row">


                        <?php foreach ($teachers as $teacher) { ?>
                            <div class="col-md-6">
                            <div class="c2_container">
                                <div class="c2_images col-md-6 col-sm-12">
                                    <img height="" src="<?php echo base_url("upload/teacher_images/$teacher[teacher_photo]")?>" />
                                </div>

                                <div class="c2_product col-md-6 col-sm-12">
                                    <p style="margin-top: 32px; font-size: 25px; color: black; margin-bottom: 30px">
                                        <?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo $teacher["teacher_name_az"];
                                        }
                                        elseif ($this->session->userdata("dil") == "en"){
                                            echo $teacher["teacher_name_en"];
                                        }
                                        elseif ($this->session->userdata("dil") == "ru"){
                                            echo $teacher["teacher_name_ru"];
                                        }

                                        ?>

                                        <?php


                                        if ($this->session->userdata("dil") == "az"){
                                            echo $teacher["teacher_surname_az"];
                                        }
                                        elseif ($this->session->userdata("dil") == "en"){
                                            echo $teacher["teacher_surname_en"];
                                        }
                                        elseif ($this->session->userdata("dil") == "ru"){
                                            echo $teacher["teacher_surname_ru"];
                                        }

                                        ?>
                                    </p>
                                    <p class="c_card_title2"> <b><?php echo $this->lang->line("vezife")?>:</b> <?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo $teacher["teacher_position_az"];
                                        }
                                        elseif ($this->session->userdata("dil") == "en"){
                                            echo $teacher["teacher_position_en"];
                                        }
                                        elseif ($this->session->userdata("dil") == "ru"){
                                            echo $teacher["teacher_position_ru"];
                                        }

                                        ?></p>
                                    <p class="c_card_title2"> <b><?php echo $this->lang->line("mail")?>:</b> <?php  echo $teacher["teacher_mail"];?></p>
                                </div>



                                <div class="col-sm-12">

                                    <p class="c2_desc" style="font-size: 14px!important">
                                        <?php

                                        if ($this->session->userdata("dil") == "az"){
                                            if (strlen($teacher["editor1_az"]) > 280){
                                                echo substr($teacher["editor1_az"], 0 , 280) . "...";
                                            }else{
                                                echo $teacher["editor1_az"];
                                            }
                                        }
                                        elseif ($this->session->userdata("dil") == "en"){
                                            if (strlen($teacher["editor1_en"]) > 280){
                                                echo substr($teacher["editor1_en"], 0 , 280) . "...";
                                            }else{
                                                echo $teacher["editor1_en"];
                                            }
                                        }
                                        elseif ($this->session->userdata("dil") == "ru"){
                                            if (strlen($teacher["editor1_ru"]) > 280){
                                                echo substr($teacher["editor1_ru"], 0 , 280) . "...";
                                            }else{
                                                echo $teacher["editor1_ru"];
                                            }
                                        }

                                        ?>
                                    </p>

                                    <a href="<?php

                                    $department_id = $this->uri->segment(3);

                                    if ($this->session->userdata("dil") == "az"){
                                        echo base_url("az/Department_Teachers_Single/$department_id/$teacher[teacher_id]");
                                    }
                                    elseif ($this->session->userdata("dil") == "en"){
                                        echo base_url("en/Department_Teachers_Single/$department_id/$teacher[teacher_id]");
                                    }
                                    elseif ($this->session->userdata("dil") == "ru"){
                                        echo base_url("ru/Department_Teachers_Single/$department_id/$teacher[teacher_id]");
                                    }

                                    ?>" type="button" class="btn btn-sm btn-primary" style="color: white!important; background-color: #0f61a0;; float: right; font-size: 12px;">
                                        <?php echo $this->lang->line("etrafli")?>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <?php }?>

                    </div>
                </div>











            </div>
        </div>
    </div>

</div>

<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
