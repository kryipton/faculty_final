<title>Fakültə Müəllimləri</title>

<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>

<div class="content_wrapper" style="margin-bottom: 150px;">

    <div class="breadcrumb_wrap">
        <div class="breadcrumb_wrap_inner about_head">
            <div class="container">
                <h1>Kimya texnologiya fakültəsi</h1>
                <ul class="breadcrumbs">
                    <li><a href="<?php echo base_url("Home")?>">Ana Səhifə</a> /</li>
                    <li>Ümumi Məlumat</li>
                </ul>
            </div>
        </div>
    </div>

    <?php $this->load->view('Front/department/left_menu'); ?>

    <div class="col-md-8">
        <div class="about_right" style="padding: 20px 0px 0px 10px">
            <h2>Muellimler</h2>
            <div class="about_right_text" style="color: grey">
                <span> 
                    mullimler
                </span>
            </div>
        </div>
    </div>

</div>


<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
