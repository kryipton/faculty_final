<title><?php echo $this->lang->line("tedbirler"); ?></title>
<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>


<!--main content-->
<div class="content_wrapper m_background"  >


    <br><br><br>
    <div class="head_part">
        <h2><?php echo $this->lang->line("tedbirler")?></h2>
    </div>


    <!--    tedbirler hissesi-->
    <div class="courses"   >

        <div class="container">
            <div class="course_wrapper"  >


                <?php if (!empty($last_events)){ ?>

                    <div class="course_wrapper" >

                        <?php
                        foreach ($last_events as $last_events_key){ ?>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="course_block">
                                    <div class="">
                                        <img style="height: 230px;" alt="<?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo $last_events_key['event_title_az'];
                                        }elseif ($this->session->userdata("dil") == "en"){
                                            echo $last_events_key['event_title_en'];
                                        }elseif ($this->session->userdata("dil") == "ru"){
                                            echo $last_events_key['event_title_ru'];
                                        }

                                        ?>" src="<?php echo base_url('upload/event_images/'.$last_events_key['event_img']) ?>">

                                    </div>


                                    <div class="psychology c_title_href" data-url = "<?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo base_url('az/Single_page_events/').$last_events_key['event_id'];
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo base_url('en/Single_page_events/').$last_events_key['event_id'];
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo base_url('ru/Single_page_events/').$last_events_key['event_id'];
                                    }

                                    ?>">

                                        <div class="course_info">

                                            <!--                                    tedbirin basliqi-->
                                            <span style="cursor:pointer;" class="c_size">
                                            <?php

                                            if ($this->session->userdata("dil") == "az"){

                                                if (strlen($last_events_key['event_title_az']) > 70){
                                                    echo substr($last_events_key['event_title_az'], 0 , 70) . "...";
                                                }else{
                                                    echo $last_events_key['event_title_az'];
                                                }

                                            }elseif ($this->session->userdata("dil") == "en"){

                                                if (strlen($last_events_key['event_title_en']) > 70){
                                                    echo substr($last_events_key['event_title_en'], 0 , 70) . "...";
                                                }else{
                                                    echo $last_events_key['event_title_en'];
                                                }

                                            }elseif ($this->session->userdata("dil") == "ru"){


                                                if (strlen($last_events_key['event_title_ru']) > 70){
                                                    echo substr($last_events_key['event_title_ru'], 0 , 70) . "...";
                                                }else{
                                                    echo $last_events_key['event_title_ru'];
                                                }

                                            }

                                            ?>
                                        </span>
                                            <!--                                    tedbirin basliqi-->





                                        </div>
                                    </div>
                                    <div class="psychology course_count_wrap">
                                        <div class="course_count">
                                            <span class="glyphicon glyphicon-calendar"></span><?php echo $last_events_key['event_time'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php }
                        ?>

                    </div>

                    <br><br>

                    <div class="pagination" style="text-align: center">
                       <center>
                           <?php echo $links?>
                       </center>
                    </div>


                <?php }else{ ?>
                    <div class="alert alert-info">Məlumat Daxil Edilməmişdir</div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!--    tedbirler hissesi-->

</div>
<!-- main content-->

<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>