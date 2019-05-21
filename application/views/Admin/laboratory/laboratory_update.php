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

            <form action="<?php echo base_url('himalaY_laboratoriya_yenile_act/').$laboratory['id'] ?>" method="POST" enctype="multipart/form-data">

                <div class="tab-content" style="margin-top: 30px">
                    <a href="<?php echo base_url('himalaY_laboratoriya') ?>" class="btn btn-info btn-md">
                        <span class="glyphicon glyphicon-plus-sign"></span> Butun Laborotoriyalar
                    </a>

                    <div id="az" class="tab-pane fade in active">

                        <br>
                        <br>
                        <div class="col-md-8">

                            <label for="">Ad</label>
                            <input type="text" class="form-control" name="laboratory_name_az" value="<?php echo $laboratory['laboratory_name_az']?>" ><br>


                            <label for="">Haqqında</label>
                            <textarea style="resize: none" class="form-control ckeditor" name="laboratory_desc_az" id="" cols="30" rows="10" placeholder="">
                                <?php echo $laboratory['laboratory_desc_az'] ?>
                            </textarea><br>




                            <label for="">Kafedra</label>
                            <select name="laboratory_catg_az" id="" class="form-control" style="height: 40px">

                                <option value="<?php echo $laboratory['laboratory_catg_az']?>"><?php echo $laboratory['laboratory_catg_az']?></option>
                                <?php foreach ($categories as $category){ if ($category["category_name_az"] != $laboratory['laboratory_catg_az'] ) { ?>
                                    <option value="<?php echo $category["category_name_az"] ?>"><?php echo $category["category_name_az"] ?></option>
                                    <?php }
                                } ?>
                            </select>
                            <br>




                        </div>
                    </div>
                    <div id="ru" class="tab-pane fade">
                        <br>
                        <br>
                        <div class="col-md-8">

                            <label for="">Ad</label>
                            <input type="text" class="form-control" name="laboratory_name_ru" value="<?php echo $laboratory['laboratory_name_ru']?>" ><br>

                            <label for="">Haqqında</label>
                            <textarea style="resize: none" class="form-control ckeditor" name="laboratory_desc_ru" id="" cols="30" rows="10" placeholder="">
                                  <?php echo $laboratory['laboratory_desc_ru'] ?>
                            </textarea><br>

                            <label for="">Kafedra</label>
                            <select name="laboratory_catg_ru" id="" class="form-control" style="height: 40px">
                                <?php foreach ($categories as $category){ ?>
                                    <option value="<?php echo $category["category_name_ru"]?>"><?php echo $category["category_name_ru"] ?></option>
                                <?php }?>
                            </select>
                            <br>

                        </div>
                    </div>
                    <div id="en" class="tab-pane fade">

                        <br>
                        <br>
                        <div class="col-md-8">
                            <label for="">Ad</label>
                            <input type="text" class="form-control" name="laboratory_name_en" value="<?php echo $laboratory['laboratory_name_en']?>" ><br>

                            <label for="">Haqqında</label>
                            <textarea style="resize: none" class="form-control ckeditor" name="laboratory_desc_en" id="" cols="30" rows="10" placeholder="">
                                  <?php echo $laboratory['laboratory_desc_en'] ?>
                            </textarea><br>


                            <label for="">Kafedra</label>
                            <select name="laboratory_catg_en" id="" class="form-control" style="height: 40px">
                                <?php foreach ($categories as $category){ ?>
                                    <option value="<?php echo $category["category_name_en"]?>"><?php echo $category["category_name_en"] ?></option>
                                <?php }?>
                            </select>
                            <br>


                        </div>
                    </div>

                    <div class="col-md-8">
                        <label for="">Şəkil</label>
                        <input type="file" class="form-control" name="laboratory_photo"><br>
                    </div>
                    <input type="submit" value="Düzənlə" class="btn btn-info" style="margin-top: 25px; margin-left: 30px">
                </div>

            </form>



        </div>
    </div>
</div>

<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>