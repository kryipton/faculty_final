<title><?php echo $this->lang->line("xeberler"); ?></title>

<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>


<!--main content-->
<div  class="content_wrapper m_background"  >



<!--    xeberler hissesi-->

    <br><br>

    <div class="head_part" >
        <h2><?php echo $this->lang->line("xeberler"); ?></h2>
    </div>

    <div class="courses" style="padding-top:41px!important; margin-top: 0px;">
        <div class="container">


           <?php if (!empty($last_news)){ ?>

               <div class="course_wrapper">

                   <?php
                   foreach ($last_news as $last_news_key){ ?>

                       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                           <div class="course_block">
                               <div class="">
                                   <img style="object-fit:cover; height: 230px;" alt="<?php

                                   if ($this->session->userdata("dil") == "az"){
                                       echo substr($last_news_key['news_title_az'], 0,71)."...";
                                   }
                                   elseif ($this->session->userdata("dil") == "en"){
                                       echo substr($last_news_key['news_title_en'], 0,71)."...";
                                   }
                                   elseif ($this->session->userdata("dil") == "ru"){
                                       echo substr($last_news_key['news_title_ru'], 0,71)."...";
                                   }

                                   ?>" src="<?php echo base_url('upload/news_images/'.$last_news_key['news_img']) ?>">


                               </div>



                               <div class="psychology">

                                   <div class="course_info">

                                       <span style="cursor:pointer;" class="c_location_new c_size" data-url = " <?php

                                       if ($this->session->userdata("dil") == "az"){
                                           echo base_url("az/Single_page_news/$last_news_key[news_id]");
                                       }elseif ($this->session->userdata("dil") == "en"){
                                           echo base_url("en/Single_page_news/$last_news_key[news_id]");
                                       }elseif ($this->session->userdata("dil") == "ru"){
                                           echo base_url("ru/Single_page_news/$last_news_key[news_id]");
                                       }

                                       ?>">
                                          <?php

                                          if ($this->session->userdata("dil") == "az"){

                                              if (strlen($last_news_key['news_title_az']) > 70){
                                                  echo substr($last_news_key['news_title_az'],0,70) . "...";
                                              }else{
                                                  echo $last_news_key['news_title_az'];
                                              }

                                          }
                                          elseif ($this->session->userdata("dil") == "en"){

                                              if (strlen($last_news_key['news_title_en']) > 70){
                                                  echo substr($last_news_key['news_title_en'],0,70) . "...";
                                              }else{
                                                  echo $last_news_key['news_title_en'];
                                              }

                                          }
                                          elseif ($this->session->userdata("dil") == "ru"){

                                              if (strlen($last_news_key['news_title_ru']) > 70){
                                                  echo substr($last_news_key['news_title_ru'],0,70) . "...";
                                              }else{
                                                  echo $last_news_key['news_title_ru'];
                                              }
                                          }

                                          ?>
                                       </span>


                                   </div>
                               </div>
                               <div class="psychology course_count_wrap">
                                   <div class="course_count">
                                       <span class="glyphicon glyphicon-calendar"></span><?php echo $last_news_key['news_time'] ?>
                                   </div>
                               </div>
                           </div>
                       </div>

                   <?php }
                   ?>

               </div>

               <br><br>
               <div class="pagination" style="">
                   <center>
                       <?php echo $links?>
                   </center>
               </div>


           <?php }else{ ?>
               <div class="alert alert-info">Məlumat Daxil Edilməmişdir</div>
            <?php } ?>



        </div>
    </div>

<!--    xeberler hissesi-->

    <script>
        $('.item:first-child').addClass( "active" );
    </script>

</div>
<!-- main content-->

<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>



