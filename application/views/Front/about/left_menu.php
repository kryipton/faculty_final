

 <div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">
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


<!--                        burada diger tedbirler foreache salinir-->
                        <?php $this->load->view('Front/include_last_events/last_events'); ?>

                        <!--                        burada diger tedbirler foreache salinir-->


                    </ul>
                </div>
<!--        sol terefde olan diger tedbirler -->


    </div>





 </div>



