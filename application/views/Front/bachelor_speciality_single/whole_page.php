<title><?php echo $this->lang->line("ixtisaslar"); ?></title>
<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>


<div class="content_wrapper" style="margin-bottom: 150px;">

    <div class="breadcrumb_wrap" >
        <div class="breadcrumb_wrap_inner" style="background-image: url('<?php echo base_url("public/images/top1.jpg")?>');height: 250px;">
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

                        ?>"><?php echo $this->lang->line("ana_sehife"); ?></a>  /   </li>
                    <li><?php echo $this->lang->line("umumi_melumat"); ?></li>
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
                            echo base_url('az/Bachelor');
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Bachelor');
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Bachelor');
                        }

                        ?>"><?php echo $this->lang->line("umumi_melumat"); ?></a></li>
                    <li><a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/Bachelor/Speciality');
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Bachelor/Speciality');
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Bachelor/Speciality');
                        }

                        ?>"><?php echo $this->lang->line("ixtisaslar"); ?></a></li>

                    <li><a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/Bachelor/Contact');
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Bachelor/Contact');
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Bachelor/Contact');
                        }

                        ?>"><?php echo $this->lang->line("elaqe"); ?></a></li>
                </ul>
            </div>
        </div>



        <div class="col-md-8">
            <h2 class="text-center head_f_p"><?php

                if ($this->session->userdata("dil") == "az"){
                    echo $speciality_info['bachelor_text_about_az'];
                }
                elseif ($this->session->userdata("dil") == "en"){
                    echo $speciality_info['bachelor_text_about_en'];
                }
                elseif ($this->session->userdata("dil") == "ru"){
                    echo $speciality_info['bachelor_text_about_ru'];
                }

                ?></h2>
            <div class="about_right" style="padding: 20px 0px 0px 10px">

                <div><?php

                    if ($this->session->userdata("dil") == "az"){
                        echo $speciality_info['bachelor_text_text_az'];
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo $speciality_info['bachelor_text_text_en'];
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo $speciality_info['bachelor_text_text_ru'];
                    }

                    ?></div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
