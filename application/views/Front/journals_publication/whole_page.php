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
                        echo $journal["name_az"];
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo $journal["name_en"];
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo $journal["name_ru"];
                    }

                    ?></h4>
                <ul>
                    <li><a href="<?php


                        if ($this->session->userdata("dil") == "az"){
                            echo base_url("az/Journals_about/$journal[id]");
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url("en/Journals_about/$journal[id]");
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url("ru/Journals_about/$journal[id]");
                        }

                        ?>"><?php echo $this->lang->line("umumi_melumat"); ?></a></li>


                    <li><a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url("az/Journals_publication/$journal[id]");
                        }elseif ($this->session->userdata("dil") == "en"){
                            echo base_url("en/Journals_publication/$journal[id]");
                        }elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url("ru/Journals_publication/$journal[id]");
                        }

                        ?>"><?php echo $this->lang->line("dercler"); ?></a></li>


                    <li><a href="<?php
                        if ($this->session->userdata("dil") == "az"){
                            echo base_url("az/Journals_contact/$journal[id]");
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url("en/Journals_contact/$journal[id]");
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url("ru/Journals_contact/$journal[id]");
                        }

                        ?>"><?php echo $this->lang->line("elaqe"); ?></a></li>
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
            <h2><?php echo $this->lang->line("dercler"); ?></h2>

            <div class="about_right_text" style="color: grey">

                <?php foreach ($journal_publications as $journal_publication) { ?>

                    <div class="col-sm-3 c_bottom" style="margin-bottom: 20px">

                        <div class="col-xs-12" style="border-radius: 10px;background-color: #fff; padding: 10px;padding-top: 22px; box-shadow: 0 9px 10px -1px rgba(0, 0, 0, 0.1);">
                            <center>
                                <div class="col-xs-12">
                                    <img style="height: 270px;object-fit: contain; border-radius: 10px" src="<?php echo base_url("upload/publications_files/$journal_publication[img_name]")?>" alt="">
                                </div>

                                <div class="col-xs-12">
                                    <br>
                                    <p><?php echo $journal_publication["time"]?></p>
                                    <p>
                                        <?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo $journal_publication["name_az"];
                                            }
                                            elseif ($this->session->userdata("dil") == "en"){
                                                echo $journal_publication["name_en"];
                                            }
                                            elseif ($this->session->userdata("dil") == "ru"){
                                                echo $journal_publication["name_ru"];
                                            }

                                        ?>
                                    </p>
                                    <a

                                       <?php if ($journal_publication["file_name"] != ""){?>
                                       href="<?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo base_url("upload/publications_files/$journal_publication[file_name]");
                                        }
                                        elseif ($this->session->userdata("dil") == "en"){
                                            echo base_url("upload/publications_files/$journal_publication[file_name]");
                                        }
                                        elseif ($this->session->userdata("dil") == "ru"){
                                            echo base_url("upload/publications_files/$journal_publication[file_name]");
                                        }

                                    ?>"
                                       <?php }?>

                                       <?php echo ($journal_publication["file_name"] != "") ? "download" : ""?>
                                       class="btn btn-sm btn-primary c_publication_link"
                                       style="color: white!important; background-color: #0f61a0; font-size: 12px;"
                                       data-url="<?php echo $journal_publication["link"]?>">

                                        <?php echo $this->lang->line("yukle")?>
                                    </a>

                                </div>

                            </center>
                        </div>

                    </div>

                <?php }?>

                <div class="pagination" style="margin-bottom: 40px; margin-top: 30px">
                    <center>
                        <?php echo $links?>
                    </center>
                </div>


            </div>

        </div>
    </div>

</div>

<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
