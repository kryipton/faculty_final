
<title>Laboratoriya</title>
<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>



<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">
        <div class="right">
            <?php if ($this->session->flashdata('error')){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('error') ?>
                </div>
            <?php } ?>


            <ul class="nav nav-pills">
                <li><a data-toggle="pill" href="#az">Az</a></li>
                <li><a data-toggle="pill" href="#ru">Ru</a></li>
                <li><a data-toggle="pill" href="#en">En</a></li>
            </ul>

            <form action="<?php echo base_url('himalaY_fakulte_laboratoriya_elave_etme') ?>" method="POST" enctype="multipart/form-data">

            <div class="tab-content" style="margin-top: 30px">
                <a href="<?php echo base_url('himalaY_fakulte_laboratoriya') ?>" class="btn btn-info btn-md">
                    <span class="glyphicon glyphicon-plus-sign"></span> Butun Laborotoriyalar
                </a>

                <div id="az" class="tab-pane fade in active">

                    <br>
                    <br>
                    <div class="col-md-8">

                        <label for="">Ad</label>
                        <input type="text" class="form-control" name="laboratory_name_az"><br>


                        <label for="">Haqqında</label>
                        <textarea style="resize: none" class="form-control ckeditor" name="laboratory_desc_az" id="" cols="30" rows="10" placeholder=""></textarea><br>



                    </div>
                </div>
                <div id="ru" class="tab-pane fade">
                    <br>
                    <br>
                    <div class="col-md-8">

                        <label for="">Ad</label>
                        <input type="text" class="form-control" name="laboratory_name_ru"><br>

                        <label for="">Haqqında</label>
                        <textarea style="resize: none" class="form-control ckeditor" name="laboratory_desc_ru" id="" cols="30" rows="10" placeholder=""></textarea><br>

                    </div>
                </div>
                <div id="en" class="tab-pane fade">

                    <br>
                    <br>
                    <div class="col-md-8">
                        <label for="">Ad</label>
                        <input type="text" class="form-control" name="laboratory_name_en"><br>

                        <label for="">Haqqında</label>
                        <textarea style="resize: none" class="form-control ckeditor" name="laboratory_desc_en" id="" cols="30" rows="10" placeholder=""></textarea><br>

                    </div>
                </div>

                    <div class="col-md-8">
                        <label for="">Şəkil</label>
                        <input type="file" class="form-control" name="laboratory_photo"><br>
                    </div>
                    <input type="submit" value="Əlavə et" class="btn btn-info" style="margin-top: 25px; margin-left: 30px">
            </div>

            </form>



        </div>
    </div>
</div>






<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>






