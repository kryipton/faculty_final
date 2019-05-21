<title>Xəbər</title>

<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>





<?php

if($new){ ?>

    <div class="content_wrapper">

        <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
             style="background: url(images/slider_group_in_campus.jpg); background-attachment: fixed; background-position: 50% 50%;">
            <div class="breadcrumb_wrap_inner">
                <div class="container">
                    <h2 style="text-align: right;color: white"><?php echo substr($new['news_title_az'], 0,71); ?></h2>
                    <ul class="breadcrumbs">
                        <li><a href="index-2.html">Ana Səhifə</a> /</li>
                        <li><a href="course_grid.html">Tədbirlər</a> /</li>
                        <li><?php echo substr($new['news_title_az'], 0,120) ?></li>
                    </ul>
                </div>
            </div>
        </div>


        <div id="dtl_wrap" class="dtl_wrap">

            <div class="container">

                <div class="dtl_wrapper col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <div class="dtl_inner_wrap">

                        <div class="dtl_inner last">
                            <div class="dtl_head">
                                <h1><?php echo substr($new['news_title_az'], 0,71); ?></h1>

                            </div>
                            <div class="dtl_block">
                                <div class="dtl_img">
                                    <img alt="image" src="<?php echo base_url('upload/news_images/'. $new['news_img']) ?>">
                                </div>
                                <div class="detail_text_wrap">
                                    <div class="info_wrapper">
                                        <div class="info_head">
                                            <h4>Ətraflı</h4>
                                            <p><?php echo $new['news_description_az'] ?></p>
                                        </div>
                                    </div>
                                    <div class="info_wrapper">
                                        <span class="glyphicon glyphicon-calendar"></span><?php echo $new['news_time'] ?>

                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="clearfix"></div>
                </div>


                <div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">


                    <div class="course_tutor event_single_right">
                        <h4>Tədbirlər</h4>
                        <ul>

                            <?php foreach($last_events as $last_events_key){ ?>

                                <li>
                                    <div class="tutor_img">
                                        <img alt="Leonardo Bonucci" src="<?php echo base_url('upload/event_images/'.$last_events_key['event_img']) ?>">
                                    </div>
                                    <div class="tutor_info">
                                        <h5>
                                            <a href="<?php echo base_url('Single_page_events/').$last_events_key['event_id']?>"><b><?php echo substr($last_events_key['event_title_az'],0,50) ?></b></a>
                                        </h5>
                                        <p><?php echo substr($last_events_key['event_desc_az'],0,50) ?></p>
                                    </div>
                                </li>

                            <?php } ?>




                        </ul>
                    </div>

                </div>

            </div>

        </div>




    </div>

<?php }else{
    redirect(base_url('Home/error_404'));
}
?>


<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>

