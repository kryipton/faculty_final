<title>Müəllimlər</title>
<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>




<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <h1 style="color: red;"><?php echo $this->session->flashdata('alert');?></h1>

            <h3><?php echo $category["category_name_az"] ?>-sının Haqqında Bölməsi</h3>

            <form action="<?php echo base_url("himalaY_kafedralar_haqqinda_yenileme/"). $category["id"]?>" method="post">
                <br><br>


                <label for="">Haqqında Az</label>
                <textarea style="resize: none" class="form-control ckeditor" name="about_az" id="" cols="30" rows="10" placeholder="">
                    <?php echo $category["category_about_text_az"] ?>
                </textarea>

                <br><br>
                <label for="">Haqqında En</label>
                <textarea style="resize: none" class="form-control ckeditor" name="about_en" id="" cols="30" rows="10" placeholder="">
                    <?php echo $category["category_about_text_en"] ?>
                </textarea>

                <br><br>
                <label for="">Haqqında Ru</label>
                <textarea style="resize: none" class="form-control ckeditor" name="about_ru" id="" cols="30" rows="10" placeholder="">
                    <?php echo $category["category_about_text_ru"] ?>
                </textarea>

                <br><br>
                <input type="submit" class="btn btn-info" value="Yenilə">
            </form>

        </div>
    </div>
</div>

<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>