
<title>Xəbərlər</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


    <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
        <div class="row">
            <div class="right">
                <a href="<?php echo base_url('himalaY_xeberler') ?>" class="btn btn-info btn-md">
                    <span class=""></span> Bütün xəbərlər
                </a>
                <br>
                <br>
                <?php if ($this->session->flashdata('alert')){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata('alert') ?>
                    </div>
                <?php } ?>



                <form action="<?php echo base_url('himalaY_xeber_elave_et_act') ?>" method="POST" enctype="multipart/form-data">

                    <div class="col-md-12">
                        <label for="">Xəbər adı AZ</label>
                        <input type="text" class="form-control" name="news_title_az"> <br>

                        <label for="">Xəbər adı EN</label>
                        <input type="text" class="form-control" name="news_title_en"> <br>

                        <label for="">Xəbər adı RU</label>
                        <input type="text" class="form-control" name="news_title_ru"> <br>



                        <label for="">Xəbər haqqında AZ</label>
                        <textarea style="resize: none" class="form-control ckeditor" name="news_desc_az" id="" cols="30" rows="10" placeholder="Kurs haqqında"></textarea><br>

                        <label for="">Xəbər haqqında EN</label>
                        <textarea style="resize: none" class="form-control ckeditor" name="news_desc_en" id="" cols="30" rows="10" placeholder="Kurs haqqında"></textarea><br>

                        <label for="">Xəbər haqqında RU</label>
                        <textarea style="resize: none" class="form-control ckeditor" name="news_desc_ru" id="" cols="30" rows="10" placeholder="Kurs haqqında"></textarea><br>




                        <label for="">Xəbər şəkili</label>
                        <input type="file" class="form-control" name="news_image"> <br>
                        <label for="">Xəbər vaxtı</label>
                        <input type="date" class="form-control" name="news_date"> <br>
                        <br>
                        <input type="submit" class="btn btn-info" value="Əlavə et">
                    </div>

                </form>

            </div>
        </div>
    </div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>