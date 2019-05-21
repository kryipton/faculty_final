

 <div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">
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
                            echo base_url("az/Department/$department[id]");
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url("en/Department/$department[id]");
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url("ru/Department/$department[id]");
                        }

                         ?>"><?php echo $this->lang->line("umumi_melumat"); ?></a></li>

                    <li><a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url("az/Department_Specialities/$department[id]");
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url("en/Department_Specialities/$department[id]");
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url("ru/Department_Specialities/$department[id]");
                        }

                        ?>"><?php echo $this->lang->line("ixtisaslar"); ?></a></li>

                    <li><a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url("az/Department_Labaratories/$department[id]");;
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url("en/Department_Labaratories/$department[id]");;
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url("ru/Department_Labaratories/$department[id]");;
                        }

                         ?>"><?php echo $this->lang->line("labaratoriyalar"); ?></a></li>

                    <li><a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url("az/Department_Teachers/$department[id]");;
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url("en/Department_Teachers/$department[id]");;
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url("ru/Department_Teachers/$department[id]");;
                        }

                         ?>"><?php echo $this->lang->line("muellimler"); ?></a></li>

                    <li><a href="<?php



                        if ($this->session->userdata("dil") == "az"){
                            echo base_url("az/Department_Contact/$department[id]");;
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url("en/Department_Contact/$department[id]");;
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url("ru/Department_Contact/$department[id]");;
                        }

                        ?>"><?php echo $this->lang->line("elaqe"); ?></a></li>
                    <li><a href="<?php echo base_url('Department_Labaratories'); ?>"><?php echo $this->lang->line("labaratoriyalar"); ?></a></li>
                    <li><a href="<?php echo base_url('Department_Teachers'); ?>"><?php echo $this->lang->line("muellimler"); ?></a></li>
                    <li><a href="<?php echo base_url('Department_Contact'); ?>"><?php echo $this->lang->line("elaqe"); ?></a></li>
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


                <?php } ?>
                <!--                        burada diger tedbirler foreache salinir-->


            </ul>
        </div>
        <!--        sol terefde olan diger tedbirler -->


    </div>





 </div>



