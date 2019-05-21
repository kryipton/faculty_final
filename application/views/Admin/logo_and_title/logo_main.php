<title>Haqqımızda</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right text-center">
            <h1 class="text-center"><?php echo $logo_and_title["site_title_az"] ?></h1>
            <img width="300px" height="300px" src="<?php echo base_url('public/images/faculty_logo/') . $logo_and_title["logo_img"] ?>" alt="sekil">
            <br><br>
            <div class="col-md-12">
                <a href="<?php echo base_url("himalaY_loqo_duzenle")?>" class="btn btn-primary">Dəyiş</a>
            </div>

        </div>
    </div>
</div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>