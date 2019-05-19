<title>Xəbərlər</title>

<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>


<!--main content-->
<div class="content_wrapper" >



<!--    xeberler hissesi-->

    <div class="courses" style="margin-top: 50px;">
        <div class="container">
            <div class="head_part">
                <h2>Xəbərlər</h2>
            </div>
            <div class="course_wrapper">

                <?php
                foreach ($last_news as $last_news_key){ ?>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="course_block">
                            <div class="">
                                <img style="height: 230px;" alt="<?php echo $last_news_key['news_title_az'] ?>" src="<?php echo base_url('upload/news_images/'.$last_news_key['news_img']) ?>">
                                <div class="course_img_hoverlay_btn"><a href="#" title="Ətraflı"
                                                                        class="fa fa-eye"></a></div>
                            </div>
                            <div class="psychology">

                                <div class="course_info">
<!--                                    <h4>--><?php //echo $last_news_key['news_title_az'] ?><!--</h4>-->
                                    <?php echo substr($last_news_key['news_title_az'], 0,150) ?>
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

                <?php
                foreach ($last_news as $last_news_key){ ?>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="course_block">
                            <div class="">
                                <img style="height: 230px;" alt="<?php echo $last_news_key['news_title_az'] ?>" src="<?php echo base_url('upload/news_images/'.$last_news_key['news_img']) ?>">
                                <div class="course_img_hoverlay_btn"><a href="#" title="Ətraflı"
                                                                        class="fa fa-eye"></a></div>
                            </div>
                            <div class="psychology">

                                <div class="course_info">
                                    <!--                                    <h4>--><?php //echo $last_news_key['news_title_az'] ?><!--</h4>-->
                                    <?php echo substr($last_news_key['news_title_az'], 0,150) ?>
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

                <?php
                foreach ($last_news as $last_news_key){ ?>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="course_block">
                            <div class="">
                                <img style="height: 230px;" alt="<?php echo $last_news_key['news_title_az'] ?>" src="<?php echo base_url('upload/news_images/'.$last_news_key['news_img']) ?>">
                                <div class="course_img_hoverlay_btn"><a href="#" title="Ətraflı"
                                                                        class="fa fa-eye"></a></div>
                            </div>
                            <div class="psychology">

                                <div class="course_info">
                                    <!--                                    <h4>--><?php //echo $last_news_key['news_title_az'] ?><!--</h4>-->
                                    <?php echo substr($last_news_key['news_title_az'], 0,150) ?>
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

                <?php
                foreach ($last_news as $last_news_key){ ?>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="course_block">
                            <div class="">
                                <img style="height: 230px;" alt="<?php echo $last_news_key['news_title_az'] ?>" src="<?php echo base_url('upload/news_images/'.$last_news_key['news_img']) ?>">
                                <div class="course_img_hoverlay_btn"><a href="#" title="Ətraflı"
                                                                        class="fa fa-eye"></a></div>
                            </div>
                            <div class="psychology">

                                <div class="course_info">
                                    <!--                                    <h4>--><?php //echo $last_news_key['news_title_az'] ?><!--</h4>-->
                                    <?php echo substr($last_news_key['news_title_az'], 0,150) ?>
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

                <?php
                foreach ($last_news as $last_news_key){ ?>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="course_block">
                            <div class="">
                                <img style="height: 230px;" alt="<?php echo $last_news_key['news_title_az'] ?>" src="<?php echo base_url('upload/news_images/'.$last_news_key['news_img']) ?>">
                                <div class="course_img_hoverlay_btn"><a href="#" title="Ətraflı"
                                                                        class="fa fa-eye"></a></div>
                            </div>
                            <div class="psychology">

                                <div class="course_info">
                                    <!--                                    <h4>--><?php //echo $last_news_key['news_title_az'] ?><!--</h4>-->
                                    <?php echo substr($last_news_key['news_title_az'], 0,150) ?>
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
        </div>
    </div>

<!--    xeberler hissesi-->

    <script>
        $('.item:first-child').addClass( "active" );
    </script>

</div>
<!-- main content-->

<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>



