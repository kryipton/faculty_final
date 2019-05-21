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
                    <li><?php echo $this->lang->line("labaratoriyalar"); ?></li>
                </ul>
            </div>
        </div>
    </div>

    <!--    left menu-->
    <div class="aside_wrapper col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div style="min-height: 450px;padding: 20px 0px 0px 10px">



            <!--        sol terefde olan linkler-->
            <div class="category_course about_left_b">
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
            <div class="category_events about_left_e">
                <h4><?php echo $this->lang->line("tedbirler"); ?></h4>
                <ul>


                    <!--                        burada diger tedbirler foreache salinir-->
                    <?php foreach($last_events as $last_events_key){ ?>

                        <li>
                            <a href="<?php echo base_url('Single_page_events/').$last_events_key['event_id']?>">

                                <div class="date">
                                    <img style="width: 100%" src="<?php echo base_url('upload/event_images/'.$last_events_key['event_img']) ?>" alt="">
                                </div>

                            </a>
                            <div class="event_txt">
                                <h5>
                                    <a href="<?php echo base_url('Single_page_events/').$last_events_key['event_id']?>">
                                        <?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo $last_events_key['event_title_az'];
                                        }elseif ($this->session->userdata("dil") == "en"){
                                            echo $last_events_key['event_title_en'];
                                        }elseif ($this->session->userdata("dil") == "ru"){
                                            echo $last_events_key['event_title_ru'];
                                        }
                                        ?>
                                    </a>
                                </h5>
                                <p> <?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo substr($last_events_key['event_desc_az'], 0,50);
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo substr($last_events_key['event_desc_en'], 0,50);
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo substr($last_events_key['event_desc_ru'], 0,50);
                                    }

                                    ?></p>
                                <span class="month" style="font-size: 12px"><?php echo $last_events_key['event_time'] ?></span>
                            </div>
                        </li>



                                    ?></p>
                                <span class="month" style="font-size: 12px"><?php echo $last_events_key['event_time'] ?></span>
                            </div>
                        </li>


                    <?php } ?>
                    <!--                        burada diger tedbirler foreache salinir-->


                </ul>
            </div>
            <!--        sol terefde olan diger tedbirler -->


        </div>





    </div>
    <!--    left menu-->


    <div class="col-md-9">
        <div class="about_right" style="padding: 20px 0px 0px 10px">
            <h2><?php echo $this->lang->line("labaratoriyalar"); ?></h2>

            <div class="about_right_text" style="color: grey">


                <?php
                $count = 0;
                foreach ($laboratories as $lab){ ?>

                    <?php if ($count%2 == 0){?>
                        <div class="blog-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url(<?php echo base_url("upload/laboratory_images/$lab[laboratory_img]")?>)"></div>
                            </div>
                            <div class="description">
                                <h1>
                                    <?php
                                        if ($this->session->userdata("dil") == "az"){
                                            echo $lab["lab_title_az"] ;
                                        }elseif ($this->session->userdata("dil") == "en"){
                                            echo $lab["lab_title_en"] ;
                                        }elseif ($this->session->userdata("dil") == "ru"){
                                            echo $lab["lab_title_ru"] ;
                                        }
                                    ?>
                                </h1>
                                <p>

                                    <?php
                                    if ($this->session->userdata("dil") == "az"){
                                        echo $lab["lab_text_az"] ;
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo $lab["lab_text_en"] ;
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo $lab["lab_text_ru"] ;
                                    }
                                    ?>

                                </p>
                                <p class="read-more">
<!--                                    <a href="#">Read More</a>-->
                                </p>
                            </div>
                        </div>
                    <?php }else{ ?>
                        <div class="blog-card alt">
                            <div class="meta">
                                <div class="photo" style="background-image: url(<?php echo base_url("upload/laboratory_images/$lab[laboratory_img]")?>)"></div>
                            </div>
                            <div class="description">
                                <h1>
                                    <?php
                                    if ($this->session->userdata("dil") == "az"){
                                        echo $lab["lab_title_az"] ;
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo $lab["lab_title_en"] ;
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo $lab["lab_title_ru"] ;
                                    }
                                    ?>
                                </h1>
                                <p>
                                    <?php
                                    if ($this->session->userdata("dil") == "az"){
                                        echo $lab["lab_text_az"] ;
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo $lab["lab_text_en"] ;
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo $lab["lab_text_ru"] ;
                                    }
                                    ?>
                                </p>
                                <p class="read-more">
<!--                                    <a href="#">Read More</a>-->
                                </p>
                            </div>
                        </div>
                    <?php }?>


                <?php $count++; } ?>






            </div>

        </div>
    </div>

</div>


<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
