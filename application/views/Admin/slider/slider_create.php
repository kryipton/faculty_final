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

            <div class="slide-main">
                <form action="<?php echo base_url('Admin/Slide/Slide/create') ?>" method="post" enctype="multipart/form-data">
                    <label for="">Slide title</label>
                    <input type="text" class="form-control" name="slide_title">

                    <label for="">Slide link</label>
                    <input type="text" class="form-control" name="slide_link">


                    <label for="">Slide haqqında </label>
                    <textarea style="resize: none" class="form-control ckeditor" name="slide_desc" id="" cols="30" rows="10" placeholder=""></textarea><br>


                    <input type="file" class="form-control" name="slide_img">

                    <input type="submit" class="btn btn-info btn-md" value="Əlavə et">

                </form>
            </div>


            <br>



        </div>
    </div>
</div>

<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>
