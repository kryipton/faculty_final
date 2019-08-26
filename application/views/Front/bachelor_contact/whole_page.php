<title><?php echo $this->lang->line("bakalavr"); ?></title>
<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>


<div class="content_wrapper" style="margin-bottom: 150px;">

    <div class="breadcrumb_wrap" >
        <div class="breadcrumb_wrap_inner" style="background-image: url('<?php echo base_url("public/images/top1.jpg")?>');height: 250px;">
            <div class="container"style="margin-top: 75px;" >
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
            <div class="category_course" style="margin-top: 75px;border-radius: 10px">
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

                        ?>"> <?php echo $this->lang->line("umumi_melumat"); ?> </a></li>
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

            <!--        sol terefde olan diger tedbirler -->
            <div class="category_events about_left_e" style="border-radius: 10px">
                <h4><?php echo $this->lang->line("xeberler"); ?></h4>
                <ul>


                    <!--                        burada diger tedbirler foreache salinir-->

                    <?php $this->load->view('Front/include_last_events/last_events'); ?>

                    <!--                        burada diger tedbirler foreache salinir-->



                </ul>
            </div>
            <!--        sol terefde olan diger tedbirler -->


        </div>

        <div class="col-md-8">
            <h2><?php echo $this->lang->line("elaqe"); ?></h2>
            <div class="about_right" style="padding: 20px 0px 0px 10px">

                <div class="about_right_text">

                    <?php

                    if ($this->session->userdata("dil") == "az"){
                        echo $contact['contact_az'];
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo $contact['contact_en'];
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo $contact['contact_ru'];
                    }

                    ?>

                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6078.73526600192!2d49.848567!3d40.378544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53a5c1e7cc11c36f!2zQXrJmXJiYXljYW4gRMO2dmzJmXQgTmVmdCB2yZkgU8mZbmF5ZSBVbml2ZXJzaXRldGk!5e0!3m2!1sen!2sus!4v1566812188664!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    <br><br>

                </div>

            </div>
        </div>
    </div>



</div>


<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
