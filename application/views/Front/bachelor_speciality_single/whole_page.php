<title>Bakalavr ixtisas</title>
<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>


<div class="content_wrapper" style="margin-bottom: 150px;">

    <div class="breadcrumb_wrap" >
        <div class="breadcrumb_wrap_inner" style="background-image: url('../public/images/top1.jpg');height: 250px;">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo base_url("Home")?>">Ana Səhifə</a>  /</li>
                    <li>Ümumi məlumat</li>
                </ul>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 600px !important;margin-top: 20px;">
        <div class="col-md-3">
            <div class="category_course" style="margin-top: 75px;">
                <ul>
                    <li><a href="<?php echo base_url('Bachelor'); ?>">Ümumi məlumat</a></li>
                    <li><a href="<?php echo base_url('Bachelor/Speciality') ?>">İxtisas</a></li>
                </ul>
            </div>
        </div>



        <div class="col-md-8">
            <span class="text-center head_f_p"><?php echo $data['bachelor_text_about']; ?></span>
            <div class="about_right" style="padding: 20px 0px 0px 10px">

                <div><?php echo $data['bachelor_text_text']; ?></div>

            </div>
        </div>
    </div>
</div>


<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
