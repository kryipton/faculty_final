<title>Əlaqə</title>
<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>


<div class="content_wrapper" style="margin-bottom: 150px;">

    <div class="breadcrumb_wrap">
        <div class="breadcrumb_wrap_inner about_head">
            <div class="container">
                <h1><?php echo $logo["site_title"]?></h1>
                <ul class="breadcrumbs">
                    <li><a href="<?php echo base_url("Home")?>"><?php echo $this->lang->line("ana_sehife"); ?></a> /</li>
                    <li><?php echo $this->lang->line("elaqe"); ?></li>
                </ul>
            </div>
        </div>
    </div>

    <?php $this->load->view('Front/about/left_menu'); ?>

    <div class="col-md-8">
        <div class="about_right" style="padding: 20px 0px 0px 10px">
            <h2><?php echo $this->lang->line("elaqe"); ?></h2>
            <div class="about_right_text" style="color: grey">
                <?php

                    if ($this->session->userdata("dil") == "az"){
                        echo $contact["contact_text_az"];
                    }elseif ($this->session->userdata("dil") == "en"){
                        echo $contact["contact_text_en"];
                    }elseif ($this->session->userdata("dil") == "ru"){
                        echo $contact["contact_text_ru"];
                    }


                ?>
            </div>
        </div>
    </div>

</div>


<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
