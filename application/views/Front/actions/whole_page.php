<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>


<!--main content-->
<div class="content_wrapper" >


<!--    tedbirler hissesi-->
    <div class="courses">
        <div class="container">
            <div class="head_part">
                <h2>Tədbirlər</h2>
            </div>
            <div class="course_wrapper">

                <?php
                foreach ($last_events as $last_events_key){ ?>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="course_block">
                            <div class="">
                                <img style="height: 230px;" alt="<?php echo $last_events_key['event_title_az'] ?>" src="<?php echo base_url('upload/event_images/'.$last_events_key['event_img']) ?>">
                                <div class="course_img_hoverlay_btn"><a href="<?php echo base_url('Single_page_events/'.$last_events_key['event_id']) ?>" title="Ətraflı"
                                                                        class="fa fa-eye"></a></div>
                            </div>
                            <div class="psychology">

                                <div class="course_info">
                                    <h4><?php echo $last_events_key['event_title_az'] ?></h4>
                                    <?php echo substr($last_events_key['event_desc_az'], 0,150) ?>
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
        </div>
    </div>
<!--    tedbirler hissesi-->

</div>
<!-- main content-->

<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>



