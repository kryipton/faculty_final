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

            <div class="about_right_text" style="color: grey">
                <br><br>
                <div class="container-fluid">
                    <div class="row">



                        <div class="col-md-4">
                            <img src="<?php echo base_url("upload/teacher_images/$teacher[teacher_photo]")?>" alt="sdasd">
                        </div>

                        <div class="col-md-8">
                            <p style="margin-top: 32px; font-size: 40px; color: black; margin-bottom: 30px" class="c_teacher_name">
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
                            <p class="c_card_title2" style="font-size: 20px; margin-top: 20px"><b><?php echo $this->lang->line("vezife")?>:</b> <?php

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
                            <p class="c_card_title2" style="font-size: 20px; margin-top: 20px"><b><?php echo $this->lang->line("mail")?>:</b> <?php echo $teacher["teacher_mail"];?></p>
                        </div>

                        <div class="col-xs-12">
                            <br>
                            <p style="font-size: 16px">
                                <?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo $teacher["editor1_az"];
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo $teacher["editor1_en"];
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo $teacher["editor1_ru"];
                                }

                                ?>
                            </p>

                            <p style="font-size: 16px">
                                <?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo $teacher["editor2_az"];
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo $teacher["editor2_en"];
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo $teacher["editor2_ru"];
                                }

                                ?>
                            </p>

                        </div>


                    </div>
                </div>











            </div>
        </div>
    </div>

</div>

<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
