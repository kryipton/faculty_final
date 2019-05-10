<title>Slider</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>




<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">
            <a href="<?php echo base_url('himalaY_slider') ?>" class="btn btn-info btn-md">
                <span class="glyphicon glyphicon-plus-sign"></span> Bütün Slide
            </a>
            <br>
            <br>
            <?php if ($this->session->flashdata('alert')){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('alert') ?>
                </div>
            <?php } ?>

            <br>

            <div class="slide-main">
                <form action="<?php echo base_url('himalaY_slider_elave_et_act') ?>" method="post" enctype="multipart/form-data">
                    <label for="">Slide title Az</label>
                    <input type="text" class="form-control" name="slide_title_az">


                    <label for="">Slide title En</label>
                    <input type="text" class="form-control" name="slide_title_en">

                    <label for="">Slide title Ru</label>
                    <input type="text" class="form-control" name="slide_title_ru">

                    <label for="">Slide link</label>
                    <input type="text" class="form-control" name="slide_link">


                    <label for="">Slide haqqında Az </label>
                    <textarea style="resize: none" class="form-control ckeditor" name="slide_desc_az" id="" cols="30" rows="10" placeholder=""></textarea><br>

                    <label for="">Slide haqqında En </label>
                    <textarea style="resize: none" class="form-control ckeditor" name="slide_desc_en" id="" cols="30" rows="10" placeholder=""></textarea><br>

                    <label for="">Slide haqqında Ru </label>
                    <textarea style="resize: none" class="form-control ckeditor" name="slide_desc_ru" id="" cols="30" rows="10" placeholder=""></textarea><br>


                    <input type="file" class="form-control" name="slide_img">

                    <input type="submit" class="btn btn-info btn-md" value="Əlavə et">

                </form>
            </div>


            <br>

        </div>
    </div>
</div>

<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>
