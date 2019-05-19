
<title>Haqqımızda</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">


            <form action="<?php echo base_url('himalaY_haqqimizda_duzenle_act/').$about['about_id']; ?>" method="POST">
                <label for="">Haqqımızda AZ</label>
                <textarea name="about_text_az" class="ckeditor" id="" cols="30" rows="10" required>
                        <?php echo $about['about_text_az'] ?>
                    </textarea>
                <br>
                <label for="">Haqqımızda EN</label>
                <textarea name="about_text_en" class="ckeditor" id="" cols="30" rows="10" required>
                       <?php echo $about['about_text_en'] ?>
                    </textarea>
                <br>
                <label for="">Haqqımızda RU</label>
                <textarea name="about_text_ru" class="ckeditor" id="" cols="30" rows="10" required>
                       <?php echo $about['about_text_ru'] ?>
                    </textarea>
                <br>
                <input type="submit" class="btn btn-info" value="Düzənlə">
            </form>

        </div>
    </div>
</div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>











