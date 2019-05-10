
<title>Müəllimlər</title>
<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>



<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">
        <div class="right">

            <ul class="nav nav-pills c_nav_pill">
                <li><a data-toggle="pill" href="#az">Az</a></li>
                <li><a data-toggle="pill" href="#ru">Ru</a></li>
                <li><a data-toggle="pill" href="#en">En</a></li>
            </ul>

            <form action="<?php echo base_url('himalaY_muellimler_elave_edilmesi') ?>" method="POST" enctype="multipart/form-data">

            <h2 style="color: red;"><?php echo $this->session->flashdata("alert")?></h2>

            <div class="tab-content" style="margin-top: 30px">

                <div id="az" class="tab-pane fade in active">
                    <a href="<?php echo base_url('himalaY_muellimler') ?>" class="btn btn-info btn-md">
                    <span class="glyphicon glyphicon-plus-sign"></span> Bütün Müəllimlər
                    </a>
                    <br>
                    <br>
                    <div class="col-md-8">

                            <label for="">Ad</label>
                            <input type="text" class="form-control" name="teacher_name_az"><br>

                            <label for="">Soyad</label>
                            <input type="text" class="form-control" name="teacher_surname_az"><br>

                            <label for="">Dərəcə</label>
                            <input type="text" class="form-control" name="teacher_position_az"><br>



                            <label for="">Kafedra</label>
                            <select name="teacher_department_category_az" id="" class="form-control" style="height: 40px">
                                <?php foreach ($categories as $category){ ?>
                                    <option value="<?php echo $category["category_name_az"]?>"><?php echo $category["category_name_az"] ?></option>
                                <?php }?>
                            </select>
                            <br>

                            <label for="">Haqqında</label>
                            <textarea style="resize: none" class="form-control ckeditor" name="teacher_about_az" id="" cols="30" rows="10" placeholder=""></textarea><br>

                    </div>
                </div>
                <div id="ru" class="tab-pane fade">
                    <a href="<?php echo base_url('himalaY_muellimler') ?>" class="btn btn-info btn-md">
                        <span class="glyphicon glyphicon-plus-sign"></span> Bütün Müəllimlər
                    </a>
                    <br>
                    <br>
                    <div class="col-md-8">

                            <label for="">Ad</label>
                            <input type="text" class="form-control" name="teacher_name_ru"><br>

                            <label for="">Soyad</label>
                            <input type="text" class="form-control" name="teacher_surname_ru"><br>

                            <label for="">Dərəcə</label>
                            <input type="text" class="form-control" name="teacher_position_ru"><br>



                            <label for="">Kafedra</label>
                            <select name="teacher_department_category_ru" id="" class="form-control" style="height: 40px">
                                <?php foreach ($categories as $category){ ?>
                                    <option value="<?php echo $category["category_name_ru"]?>"><?php echo $category["category_name_ru"] ?></option>
                                <?php }?>
                            </select>
                            <br>

                            <label for="">Haqqında</label>
                            <textarea style="resize: none" class="form-control ckeditor" name="teacher_about_ru" id="" cols="30" rows="10" placeholder=""></textarea><br>

                    </div>
                </div>
                <div id="en" class="tab-pane fade">
                    <a href="<?php echo base_url('himalaY_muellimler') ?>" class="btn btn-info btn-md">
                        <span class="glyphicon glyphicon-plus-sign"></span> Bütün Müəllimlər
                    </a>
                    <br>
                    <br>
                    <div class="col-md-8">

                            <label for="">Ad</label>
                            <input type="text" class="form-control" name="teacher_name_en"><br>

                            <label for="">Soyad</label>
                            <input type="text" class="form-control" name="teacher_surname_en"><br>

                            <label for="">Dərəcə</label>
                            <input type="text" class="form-control" name="teacher_position_en"><br>



                            <label for="">Kafedra</label>
                            <select name="teacher_department_category_en" id="" class="form-control" style="height: 40px">
                                <?php foreach ($categories as $category){ ?>
                                    <option value="<?php echo $category["category_name_en"]?>"><?php echo $category["category_name_en"] ?></option>
                                <?php }?>
                            </select>
                            <br>

                            <label for="">Haqqında</label>
                            <textarea style="resize: none" class="form-control ckeditor" name="teacher_about_en" id="" cols="30" rows="10" placeholder=""></textarea>
                            <br>


                    </div>
                </div>

                <input type="file" class="form-control" name="teacher_photo"><br>

            </div>

            <input type="submit" value="Əlavə et" class="btn btn-info" style="margin-top: 25px; margin-left: 30px">
<!--            <button type="submit">Elave et</button>-->

            </form>


        </div>
    </div>
</div>






<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>





