<!doctype html>
<html lang="zxx">

<!-- Mirrored from www.pixxett.com/htmldemos/learnmate/teacher_dtl.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2017 10:42:27 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->


    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo base_url('public/') ?>js/html5shiv.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public/') ?>js/respond.min.js"></script>
    <![endif]-->
    
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/bootstrap-select.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/mob_menu.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/style.css"/>

    <link href='https://fonts.googleapis.com/css?family=Raleway:800,500%7CLato:400,300,400italic,700,700italic,300italic,900italic,900,100,100italic%7CRoboto:400,500,600'
          rel='stylesheet' type='text/css'/>
</head>

 <div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">
    <div style="min-height: 450px;padding: 20px 0px 0px 10px">



            <div class="category_course about_left_b">
                <h4>Kimya texnologiya fakültəsi</h4>
                <ul>
                    <li><a href="<?php echo base_url('Home/about'); ?>">Ümumi məlumat</a></li>
                    <li><a href="<?php echo base_url('Home/laboratory'); ?>">Laboratoriyalar</a></li>
                    <li><a href="<?php echo base_url('Home/links'); ?>">Faydalı linklər</a></li>
                    <li><a href="<?php echo base_url('home/teacher') ?>">Müəllimlər</a></li>
                </ul>
            </div>


            <div class="category_events about_left_e">
                    <h4>Tədbirlər</h4>
                    <ul>

                        <?php
                                $last_events = $this->Events_model->get_last_events();
                                    foreach($last_events as $last_events_key){ ?>
                                        <li>
                                            <a href="<?php echo base_url('Home/Event/'.$last_events_key['event_id']) ?>">
                                                
                                                    <div class="date">
                                                <img style="width: 100%" src="<?php echo base_url('upload/event_images/'.$last_events_key['event_img']) ?>" alt="">
                                            </div>

                                            </a>
                                            <div class="event_txt">
                                                <h5><a href="<?php echo base_url('Home/Event/'.$last_events_key['event_id']) ?>"><?php echo $last_events_key['event_title_az'] ?></a></h5>
                                                <p> <?php echo substr($last_events_key['event_desc_az'], 0,50) ?></p>
                                                <span class="month" style="font-size: 12px"><?php echo $last_events_key['event_time'] ?></span>
                                            </div>
                                        </li>
                        <?php } ?>


                        
                        
                    </ul>
                </div>


        </div>





    </div>





<script type="text/javascript" src="<?php echo base_url('public/') ?>js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public/') ?>js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url('public/') ?>js/jquery.dlmenu.js"></script>
<script type="text/javascript" src="<?php echo base_url('public/') ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public/') ?>js/bootstrap-select.js"></script>
<script type="text/javascript" src="<?php echo base_url('public/') ?>js/jquery-plugin-collection.js"></script>
<script type="text/javascript" src="<?php echo base_url('public/') ?>js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public/') ?>js/js-functions.js"></script>
</body>
<script>
    $(document).scroll(function() {

        if($(document).scrollTop() > 90){
            $('.logoIMG').css({
                'width':'100px',
                'background':'white',
                'transition':'0.3s linear'
            })
        }else{
            $('.logoIMG').css({
                'width':'400px',
                'background':'white',
                'transition':'0.3s linear'
            })
        }

    })
</script>
<!-- Mirrored from www.pixxett.com/htmldemos/learnmate/teacher_dtl.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2017 10:42:27 GMT -->
</html>