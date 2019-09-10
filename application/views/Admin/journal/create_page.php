<title>Jurnallar</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">
        <div class="right">
            <a href="<?php echo base_url('himalaY_jurnallar') ?>" class="btn btn-info btn-md">
                <span class=""></span> Bütün Jurnallar
            </a>
            <br>
            <br>
            <?php if ($this->session->flashdata('alert')){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('alert') ?>
                </div>
            <?php } ?>



            <form action="<?php echo base_url('himalaY_jurnallar_elave_et_act') ?>" method="POST" enctype="multipart/form-data">

                <div class="col-md-12">
                    <label for="">Jurnal adı AZ</label>
                    <input type="text" class="form-control" name="title_az"> <br>

                    <label for="">Jurnal adı EN</label>
                    <input type="text" class="form-control" name="title_en"> <br>

                    <label for="">Jurnal adı RU</label>
                    <input type="text" class="form-control" name="title_ru"> <br>


                    <label for="">Jurnal Triaj no</label>
                    <input type="text" class="form-control" name="edition_no"> <br>

                    <!--Jurnalin haqqinda hissesi-->

                    <label for="">Jurnal Haqqinda</label>
                    <br>

                        <ul class="nav nav-pills">
                            <li class="active"><a data-toggle="pill" href="#az">Az</a></li>
                            <li><a data-toggle="pill" href="#ru">Ru</a></li>
                            <li><a data-toggle="pill" href="#en">En</a></li>
                        </ul>

                        <div class="tab-content">


                            <!--                    Azerbaycanca olan hisse-->
                            <div id="az" class="tab-pane fade in active">
                        <textarea style="resize: none" class="form-control ckeditor" name="desc_az" id="" cols="30" rows="10" placeholder="">
                        </textarea>
                            </div>
                            <!--                    Azerbaycanca olan hisse-->



                            <!--                    Rusca olan hisse-->
                            <div id="ru" class="tab-pane fade">
                        <textarea style="resize: none" class="form-control ckeditor" name="desc_ru" id="" cols="30" rows="10" placeholder="">
                        </textarea>
                            </div>
                            <!--                    Rusca olan hisse-->



                            <!--                    Ingilisce olan hisse-->
                            <div id="en" class="tab-pane fade">
                        <textarea style="resize: none" class="form-control ckeditor" name="desc_en" id="" cols="30" rows="10" placeholder="">
                        </textarea>
                            </div>
                            <!--                    Ingilisce olan hisse-->




                        <br>

                    </div>


                    <!--Jurnalin əlaqə hissesi-->

                    <label for="">Jurnalın əlaqə hissəsi</label>
                    <br>


                        <ul class="nav nav-pills">
                            <li class="active"><a data-toggle="pill" href="#az1">Az</a></li>
                            <li><a data-toggle="pill" href="#ru1">Ru</a></li>
                            <li><a data-toggle="pill" href="#en1">En</a></li>
                        </ul>

                        <div class="tab-content">


                            <!--                    Azerbaycanca olan hisse-->
                            <div id="az1" class="tab-pane fade in active">
                        <textarea style="resize: none" class="form-control ckeditor" name="contact_az" id="" cols="30" rows="10" placeholder="">
                        </textarea>
                            </div>
                            <!--                    Azerbaycanca olan hisse-->



                            <!--                    Rusca olan hisse-->
                            <div id="ru1" class="tab-pane fade">
                        <textarea style="resize: none" class="form-control ckeditor" name="contact_ru" id="" cols="30" rows="10" placeholder="">
                        </textarea>
                            </div>
                            <!--                    Rusca olan hisse-->



                            <!--                    Ingilisce olan hisse-->
                            <div id="en1" class="tab-pane fade">
                        <textarea style="resize: none" class="form-control ckeditor" name="contact_en" id="" cols="30" rows="10" placeholder="">
                        </textarea>
                            </div>
                            <!--                    Ingilisce olan hisse-->




                        <br>

                    </div>





                    <label for="">Jurnal şəkili</label>
                    <input type="file" class="form-control" name="image_name"> <br>
                    <label for="">Jurnal vaxtı</label>
                    <input type="date" class="form-control" name="news_date"> <br>
                    <br>
                    <input type="submit" class="btn btn-info" value="Əlavə et">
                </div>

            </form>

        </div>
    </div>
</div>


















<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>
