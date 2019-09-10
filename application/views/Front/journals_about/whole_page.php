<title><?php echo $this->lang->line("jurnallar"); ?></title>

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

            </div>
        </div>
    </div>

    <!--    left menu-->
    <div class="aside_wrapper col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div style="min-height: 450px;padding: 20px 10px 0px 10px">



            <!--        sol terefde olan linkler-->
            <div class="category_course about_left_b" style="border-radius: 10px">
                <h4><?php


                    if ($this->session->userdata("dil") == "az"){
                        echo $logo["site_title_az"];
                    }elseif ($this->session->userdata("dil") == "en"){
                        echo $logo["site_title_en"];
                    }elseif ($this->session->userdata("dil") == "ru"){
                        echo $logo["site_title_ru"];
                    }

                    ?></h4>
                <ul>
                    <li><a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/About');
                        }elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/About');
                        }elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/About');
                        }

                        ?>"><?php echo $this->lang->line("umumi_melumat"); ?></a></li>


                    <li><a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/Labaratory');
                        }elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Labaratory');
                        }elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Labaratory');
                        }

                        ?>"><?php echo $this->lang->line("labaratoriyalar"); ?></a></li>
                    <!--                    <li><a href="--><?php //echo base_url('Home/links'); ?><!--">Faydalı linklər</a></li>-->
                    <!--                    <li><a href="--><?php //echo base_url('home/teacher') ?><!--">Müəllimlər</a></li>-->
                </ul>
            </div>
            <!--        sol terefde olan linkler-->



            <!--        sol terefde olan diger tedbirler -->
            <div class="category_events about_left_e" style="border-radius: 10px">
                <h4><?php echo $this->lang->line("diger_xeberler"); ?></h4>
                <ul>


                    <!--      burada diger tedbirler foreache salinir-->
                    <?php $this->load->view('Front/include_last_events/last_events'); ?>

                    <!--  burada diger tedbirler foreache salinir-->


                </ul>
            </div>
            <!--        sol terefde olan diger tedbirler -->


        </div>





    </div>
    <!--    left menu-->

    <div class="col-md-8" style="margin-bottom: 100px">
        <div class="about_right" style="padding: 20px 0px 0px 10px">

<!--         burda jurnalin adi -->
            <h2><?php echo $this->lang->line("jurnallar"); ?></h2>

            <div class="about_right_text" style="color: grey">
                <br><br>
                <div class="container-fluid">
                    <div class="row">

                        <center>
                            <img class="c_journal_single_img" src="http://localhost/faculty/upload/news_images/5ce66bfd19f7d.jpg" alt="">
                        </center>

                        <div class="c_journa_right_text">

                            <h3>Adı: adasdasd</h3>
                            <h3>Adı: adasdasd</h3>
                            <h3>Adı: adasdasd</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam amet autem dolores eaque, eveniet iste itaque laudantium nam nisi obcaecati quas ratione repellat repellendus sapiente totam voluptas, voluptate, voluptates.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequatur culpa deleniti, enim excepturi, libero possimus qui repudiandae, sed sit soluta suscipit? Ab architecto assumenda blanditiis facere, ipsum quam vitae.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae commodi cupiditate ducimus eligendi eum ex exercitationem explicabo illo, necessitatibus neque provident quos repudiandae rerum sapiente sunt ullam vel voluptatum.
                            </p>


                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
