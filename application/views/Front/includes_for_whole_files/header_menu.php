<!--


 DEVELOPERS 
    
    Cavid Lələyev    cavidleleyev@gmail.com
    Mütalib Qədirov  mutalib0101@gmail.com

-->

<!doctype html>
<html lang="zxx">

<head>
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
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

    <link rel="icon" href="<?php echo base_url("public/images/faculty_logo/$logo[logo_img]") ?>" type="image/x-icon"/>
    <title><?php echo $this->lang->line("ana_sehife"); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/bootstrap-select.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/fontello.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/mob_menu.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/rev/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/rev/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/rev/settings.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/rev/layers.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/rev/navigation.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/rev/rev_responsive.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/style.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/circularCountdown.css"/>

    <link href='https://fonts.googleapis.com/css?family=Raleway:800,500%7CLato:400,300,400italic,700,700italic,300italic,900italic,900,100,100italic%7CRoboto:400,500,600'
          rel='stylesheet' type='text/css'/>
</head>
<body id="home" class="cms_index4" style="background: url(<?php echo base_url('public/') ?>/images/websiteback.svg) repeat">

    <link rel="icon" href="<?php echo base_url('public/') ?>/images/faculty_logo/kimya.png" type="image/x-icon"/>
    <title>Laboratoriya</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/bootstrap-select.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/mob_menu.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/lightbox.min.css"/>

    <link href='https://fonts.googleapis.com/css?family=Raleway:800,500%7CLato:400,300,400italic,700,700italic,300italic,900italic,900,100,100italic%7CRoboto:400,500,600'
          rel='stylesheet' type='text/css'/>



    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/') ?>css/cavid.css"/>



<header>
<!--navbar-->
    <nav>
        <div class="container">
            <div id="navbar" class="navbar navbar-default">


<!--                navbarin loqosu-->
                <div class="navbar-header col-md-2 col-sm-4 col-xs-4">
<!--                    <a class="navbar-brand trigger" href="--><?php //echo base_url('Home') ?><!--" title="LearnMate"><img alt="Logo" src="http://asoiu.edu.az/newabout/ktf.png"></a>-->
                    <a class="" href="<?php

                    if ($this->session->userdata("dil") == "az"){
                        echo base_url('az/Home');
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo base_url('en/Home');
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo base_url('ru/Home');
                    }

                    ?>" title=""><img class="logoIMG" style="border-radius: 50%;background: white;border: 7px solid white;box-sizing: border-box alt="Logo src="<?php echo base_url("public/images/faculty_logo/$logo[logo_img]") ?>"></a>
                </div>
<!--                navbarin loqosu-->



<!--                mobil ve esas navbar-->
                <div class="col-md-10 col-sm-7 col-xs-7 pull-xs-right">


<!--                    mobil navbar-->
                    <div id="dl-menu" class="dl-menuwrapper">
                        <button class="dl-trigger visible-sm visible-xs"><i class="fa fa-bars"></i></button>
                        <ul class="dl-menu c_dl_menu">
                            <li>

                            </li>

                            <li>
                                <a href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo "http://asoiu.edu.az/az";
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo "http://asoiu.edu.az/en";
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo "http://asoiu.edu.az/ru";
                                }

                                ?>">
                                    <?php echo $this->lang->line("adnsu"); ?>
                                </a>

                            </li>

                            <li>
                                <a class="trigger" href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo base_url('az/About');
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo base_url('en/About');
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo base_url('ru/About');
                                }

                                ?>">
                                    <?php echo $this->lang->line("haqqimizda"); ?>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <?php echo $this->lang->line("kafedralar"); ?>

                                </a>
                                <ul class="dl-submenu">

                                    <?php foreach ($all_categories_of_department as $category){ ?>
                                        <li>

<!--                                            burada kateqoriyalarin hrefi dile gore siralanir-->
                                            <a href="<?php

                                                if ($this->session->userdata("dil") == "az"){
                                                    echo base_url("az/Department/$category[id]");
                                                }
                                                elseif ($this->session->userdata("dil") == "en"){
                                                    echo base_url("en/Department/$category[id]");
                                                }
                                                elseif ($this->session->userdata("dil") == "ru"){
                                                    echo base_url("ru/Department/$category[id]");
                                                }

                                            ?>">
<!--                                            burada kateqoriyalarin hrefi dile gore siralanir-->



<!--                                                burda kateqoriyalar dile gore siralanir-->
                                                <?php if ($this->session->userdata("dil") == "az"){
                                                    echo $category["category_name_az"];
                                                }?>

                                                <?php if ($this->session->userdata("dil") == "en"){
                                                    echo $category["category_name_en"];
                                                }?>

                                                <?php if ($this->session->userdata("dil") == "ru"){
                                                    echo $category["category_name_ru"];
                                                }?>
<!--                                                burda kateqoriyalar dile gore siralanir-->


                                            </a>
                                        </li>
                                    <?php }?>

                                </ul>
                            </li>

                            <li>
                                <a class="trigger" href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo base_url('az/Labaratory');
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo base_url('en/Labaratory');
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo base_url('ru/Labaratory');
                                }

                                ?>">
                                    <?php echo $this->lang->line("labaratoriyalar"); ?>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <?php echo $this->lang->line("xidmetler"); ?>

                                </a>
                                <ul class="dl-submenu">

                                    <?php foreach ($services as $service){?>
                                        <li>

                                            <!--                                            burada kateqoriyalarin hrefi dile gore siralanir-->
                                            <a href="<?php

                                            echo $service["link"];

                                            ?>">
                                                <!--                                            burada kateqoriyalarin hrefi dile gore siralanir-->



                                                <!--                                                burda kateqoriyalar dile gore siralanir-->

                                                <?php if ($this->session->userdata("dil") == "az"){
                                                    echo $service["name_az"];
                                                }?>

                                                <?php if ($this->session->userdata("dil") == "en"){
                                                    echo $service["name_en"];
                                                }?>

                                                <?php if ($this->session->userdata("dil") == "ru"){
                                                    echo $service["name_ru"];
                                                }?>
                                                <!--                                                burda kateqoriyalar dile gore siralanir-->


                                            </a>
                                        </li>
                                    <?php }?>

                                </ul>
                            </li>

                            <li style="margin-bottom: 10px!important;" >
                                <a class="trigger" href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo base_url('az/Contact');
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo base_url('en/Contact');
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo base_url('ru/Contact');
                                }

                                ?>">
                                    <?php echo $this->lang->line("elaqe"); ?>
                                </a>
                            </li>

                            <a class="c_navbar_mobil_lang" href="">
                                <a style="padding: 0px!important; float: left; color: black; margin-left: 9px;" href="<?php echo base_url("az/" . $this->uri->segment(2) . "/"  . $this->uri->segment(3). "/"  . $this->uri->segment(4))?>">
                                    <img width="35px" height="20px" src="<?php echo base_url("upload/language_images/azerbaijan2.jpg")?>" alt="sekil">
                                </a>

                                <a style="padding: 0px!important; float: left; color: black; margin-left: 9px" href="<?php echo base_url("ru/" . $this->uri->segment(2) . "/"  . $this->uri->segment(3). "/"  . $this->uri->segment(4))?>">
                                    <img width=35px" height="20px" src="<?php echo base_url("upload/language_images/russia.png")?>" alt="sekil">
                                </a>

                                <a style="padding: 0px!important; float: left; color: black; margin-left: 9px;" href="<?php echo base_url("en/" . $this->uri->segment(2) . "/"  . $this->uri->segment(3). "/"  . $this->uri->segment(4))?>">
                                    <img width="35px" height="20px" src="<?php echo base_url("upload/language_images/english.png")?>" alt="sekil">
                                </a>
                            </a>


                        </ul>

                    </div>
<!--                    mobil navbar-->


<!--                    main navbar-->
                    <div class="main_menu_wrap c_main_menu_wrap">
                        <ul class="main_menu">


                            <li>
                                <a  class="trigger" target="_blank" href="<?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo "http://asoiu.edu.az/az";
                                    }
                                    elseif ($this->session->userdata("dil") == "en"){
                                        echo "http://asoiu.edu.az/en";
                                    }
                                    elseif ($this->session->userdata("dil") == "ru"){
                                        echo "http://asoiu.edu.az/ru";
                                    }

                                ?>" >
                                    <?php echo $this->lang->line("adnsu"); ?>
                                </a>
                            </li>
                            
                            <li>
                                <a class="trigger" href="<?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo base_url('az/About');
                                    }
                                    elseif ($this->session->userdata("dil") == "en"){
                                        echo base_url('en/About');
                                    }
                                    elseif ($this->session->userdata("dil") == "ru"){
                                        echo base_url('ru/About');
                                    }

                                ?>">
                                    <?php echo $this->lang->line("haqqimizda"); ?>
                                </a>
                            </li>

                            <li>
                                <a class="trigger">
                                    <?php echo $this->lang->line("kafedralar"); ?>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="submenu">


                                    <?php foreach ($all_categories_of_department as $category){?>
                                        <li>
                                            <a href="<?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo base_url("az/Department/$category[id]");
                                            }
                                            elseif ($this->session->userdata("dil") == "en"){
                                                echo base_url("en/Department/$category[id]");
                                            }
                                            elseif ($this->session->userdata("dil") == "ru"){
                                                echo base_url("ru/Department/$category[id]");
                                            }

                                             ?>">

                                                <?php if ($this->session->userdata("dil") == "az"){
                                                    echo $category["category_name_az"];
                                                }?>

                                                <?php if ($this->session->userdata("dil") == "en"){
                                                    echo $category["category_name_en"];
                                                }?>

                                                <?php if ($this->session->userdata("dil") == "ru"){
                                                    echo $category["category_name_ru"];
                                                }?>

                                            </a>
                                        </li>
                                        <br>
                                    <?php }?>

                                </ul>
                            </li>

                            <li>
                                <a class="trigger" href="<?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo base_url('az/Labaratory');
                                    }
                                    elseif ($this->session->userdata("dil") == "en"){
                                        echo base_url('en/Labaratory');
                                    }
                                    elseif ($this->session->userdata("dil") == "ru"){
                                        echo base_url('ru/Labaratory');
                                    }

                                ?>">
                                    <?php echo $this->lang->line("labaratoriyalar"); ?>
                                </a>
                            </li>

                            <li>
                                <a class="trigger">
                                    <?php echo $this->lang->line("xidmetler"); ?>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="submenu">


                                    <?php foreach ($services as $service){?>
                                        <li>
                                            <a href="<?php

                                            echo $service["link"];

                                            ?>">

                                                <?php if ($this->session->userdata("dil") == "az"){
                                                    echo $service["name_az"];
                                                }?>

                                                <?php if ($this->session->userdata("dil") == "en"){
                                                    echo $service["name_en"];
                                                }?>

                                                <?php if ($this->session->userdata("dil") == "ru"){
                                                    echo $service["name_ru"];
                                                }?>

                                            </a>
                                        </li>
                                        <br>
                                    <?php }?>

                                </ul>
                            </li>

                            <li>
                                <a class="trigger" href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo base_url('az/Contact');
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo base_url('en/Contact');
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo base_url('ru/Contact');
                                }
                                ?>">
                                    <?php echo $this->lang->line("elaqe"); ?>
                                </a>
                            </li>

                            <li>

                                <div class="dropdown" style="cursor: pointer;">
                                    <p href="#" class="dropbtn trigger">

                                        <?php

                                        if ($this->session->userdata("dil") == "az"){ ?>
                                            <a style="padding: 0px!important; float: left; color: black; margin-left: 9px;" href="<?php

                                            $segment2 = $this->uri->segment(2);
                                            $segment3 = $this->uri->segment(3);
                                            $segment4 = $this->uri->segment(4);

                                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                                echo base_url("az/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                                echo base_url("az/" . $segment2   . "/" .  $segment3);
                                            }elseif(!empty($this->uri->segment(2))){
                                                echo base_url("az/" . $segment2);
                                            }else{
                                                echo base_url("az/Home");
                                            }

                                            ?>">
                                                <img width="35px" height="20px" src="<?php echo base_url("upload/language_images/azerbaijan2.jpg")?>" alt="sekil">
                                            </a>
                                        <?php } elseif ($this->session->userdata("dil") == "en"){ ?>
                                            <a style="padding: 0px!important; float: left; color: black; margin-left: 9px;" href="<?php

                                            $segment2 = $this->uri->segment(2);
                                            $segment3 = $this->uri->segment(3);
                                            $segment4 = $this->uri->segment(4);

                                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                                echo base_url("az/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                                echo base_url("az/" . $segment2   . "/" .  $segment3);
                                            }elseif(!empty($this->uri->segment(2))){
                                                echo base_url("az/" . $segment2);
                                            }else{
                                                echo base_url("az/Home");
                                            }

                                            ?>">
                                                <img width="35px" height="20px" src="<?php echo base_url("upload/language_images/english.png")?>" alt="sekil">
                                            </a>
                                        <?php } elseif ($this->session->userdata("dil") == "ru"){?>
                                            <a style="padding: 0px!important; float: left; color: black; margin-left: 9px;" href="<?php

                                            $segment2 = $this->uri->segment(2);
                                            $segment3 = $this->uri->segment(3);
                                            $segment4 = $this->uri->segment(4);

                                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                                echo base_url("az/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                                echo base_url("az/" . $segment2   . "/" .  $segment3);
                                            }elseif(!empty($this->uri->segment(2))){
                                                echo base_url("az/" . $segment2);
                                            }else{
                                                echo base_url("az/Home");
                                            }

                                            ?>">
                                                <img width="35px" height="20px" src="<?php echo base_url("upload/language_images/russia.png")?>" alt="sekil">
                                            </a>
                                        <?php } ?>

                                    </p>
                                    <div class="dropdown-content c_dropdown_content">

                                        <?php

                                        if ($this->session->userdata("dil") == "az"){ ?>


                                            <a class="c_language_flag" style="padding: 0px!important; float: left; color: black; margin-left: 9px" href="<?php

                                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                                echo base_url("ru/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                                echo base_url("ru/" . $segment2   . "/" .  $segment3);
                                            }elseif(!empty($this->uri->segment(2))){
                                                echo base_url("ru/" . $segment2);
                                            }else{
                                                echo base_url("ru/Home");
                                            }

                                            ?>">
                                                <img width=35px" height="20px" src="<?php echo base_url("upload/language_images/russia.png")?>" alt="sekil">
                                            </a>

                                            <a class="c_language_flag" style="padding: 0px!important; float: left; color: black; margin-left: 9px;" href="<?php

                                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                                echo base_url("en/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                                echo base_url("en/" . $segment2   . "/" .  $segment3);
                                            }elseif(!empty($this->uri->segment(2))){
                                                echo base_url("en/" . $segment2);
                                            }else{
                                                echo base_url("en/Home");
                                            }

                                            ?>">
                                                <img width="35px" height="20px" src="<?php echo base_url("upload/language_images/english.png")?>" alt="sekil">
                                            </a>

                                        <?php }elseif ($this->session->userdata("dil") == "en"){ ?>

                                            <a class="c_language_flag" style="padding: 0px!important; float: left; color: black; margin-left: 9px;" href="<?php

                                            $segment2 = $this->uri->segment(2);
                                            $segment3 = $this->uri->segment(3);
                                            $segment4 = $this->uri->segment(4);

                                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                                echo base_url("az/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                                echo base_url("az/" . $segment2   . "/" .  $segment3);
                                            }elseif(!empty($this->uri->segment(2))){
                                                echo base_url("az/" . $segment2);
                                            }else{
                                                echo base_url("az/Home");
                                            }

                                            ?>">
                                                <img width="35px" height="20px" src="<?php echo base_url("upload/language_images/azerbaijan2.jpg")?>" alt="sekil">
                                            </a>

                                            <a class="c_language_flag" style="padding: 0px!important; float: left; color: black; margin-left: 9px;" href="<?php

                                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                                echo base_url("ru/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                                echo base_url("ru/" . $segment2   . "/" .  $segment3);
                                            }elseif(!empty($this->uri->segment(2))){
                                                echo base_url("ru/" . $segment2);
                                            }else{
                                                echo base_url("ru/Home");
                                            }

                                            ?>">
                                                <img width="35px" height="20px" src="<?php echo base_url("upload/language_images/russia.png")?>" alt="sekil">
                                            </a>

                                        <?php  } elseif ($this->session->userdata("dil") == "ru"){?>

                                            <a class="c_language_flag" style="padding: 0px!important; float: left; color: black; margin-left: 9px;" href="<?php

                                            $segment2 = $this->uri->segment(2);
                                            $segment3 = $this->uri->segment(3);
                                            $segment4 = $this->uri->segment(4);

                                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                                echo base_url("az/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                                echo base_url("az/" . $segment2   . "/" .  $segment3);
                                            }elseif(!empty($this->uri->segment(2))){
                                                echo base_url("az/" . $segment2);
                                            }else{
                                                echo base_url("az/Home");
                                            }

                                            ?>">
                                                <img width="35px" height="20px" src="<?php echo base_url("upload/language_images/azerbaijan2.jpg")?>" alt="sekil">
                                            </a>

                                            <a class="c_language_flag" style="padding: 0px!important; float: left; color: black; margin-left: 9px;" href="<?php

                                            if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                                echo base_url("en/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                                            }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                                echo base_url("en/" . $segment2   . "/" .  $segment3);
                                            }elseif(!empty($this->uri->segment(2))){
                                                echo base_url("en/" . $segment2);
                                            }else{
                                                echo base_url("en/Home");
                                            }

                                            ?>">
                                                <img width="35px" height="20px" src="<?php echo base_url("upload/language_images/english.png")?>" alt="sekil">
                                            </a>

                                        <?php }

                                        ?>


                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
<!--                    main navbar-->


                </div>
<!--                mobil ve esas navbar-->

            </div>
        </div>
    </nav>
<!--navbar-->
</header>

<style>
    .slotholder{
        top: 150px;
    }
</style>