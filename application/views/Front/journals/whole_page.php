<title><?php echo $this->lang->line("jurnallar"); ?></title>


<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>


<div class="content_wrapper" style="margin-bottom: 150px;">

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


    <div class="col-md-9">
        <div class="about_right" style="padding: 20px 10px 0px 10px">
            <h2><?php echo $this->lang->line("jurnallar"); ?></h2>

            <div class="about_right_text" style="color: grey">

                <?php foreach ($journals as $journal) { ?>

                    <div class="col-xs-12 c_journal_card_div">
                        <div class="col-sm-3 col-xs-5">
                            <img src="<?php echo base_url("upload/journal_images/$journal[img_name]")?>" alt="Şəkil Yüklənmədi">
                        </div>

                        <div class="col-sm-9 col-xs-7">

                            <a href="<?php

                            if ($this->session->userdata("dil") == "az"){
                                echo base_url("az/Journals_about/$journal[id]");
                            }
                            elseif ($this->session->userdata("dil") == "en"){
                                echo base_url("en/Journals_about/$journal[id]");
                            }
                            elseif ($this->session->userdata("dil") == "ru"){
                                echo base_url("ru/Journals_about/$journal[id]");
                            }

                            ?>" class="c_card_journal_title">
                                <?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo $journal["name_az"];
                                    }
                                    elseif ($this->session->userdata("dil") == "en"){
                                        echo $journal["name_en"];
                                    }
                                    elseif ($this->session->userdata("dil") == "ru"){
                                        echo $journal["name_ru"];
                                    }

                                ?>
                            </a>
                            <br><br>
                            <p><?php echo $this->lang->line("tiraj") . ":" . $journal["edition_no"]?></p>

                            <p>
                                <?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo $journal["desc_az"];
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo $journal["desc_en"];
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo $journal["desc_ru"];
                                }

                                ?>
                            </p>

                        </div>
                    </div>

                <?php }?>


<!--                <div class="pagination" style="">-->
<!--                    <center>-->
<!--                        --><?php //echo $links?>
<!--                    </center>-->
<!--                </div>-->

            </div>

        </div>
    </div>

</div>


<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
