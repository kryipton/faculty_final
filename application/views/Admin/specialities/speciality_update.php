<title>İxtisaslar</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <h1 style="color: red;">
                <?php echo $this->session->flashdata("error");?>
            </h1>

            <ul class="nav nav-pills c_nav_pill">
                <li class="active"><a data-toggle="pill" href="#az">Az</a></li>
                <li><a data-toggle="pill" href="#ru">Ru</a></li>
                <li><a data-toggle="pill" href="#en">En</a></li>
            </ul>

            <form action="<?php echo base_url('himalaY_ixtisas_yenile_act/') . $speciality["id"] ?>" method="POST">

                <h2 style="color: red;"><?php echo $this->session->flashdata("alert")?></h2>

                <div class="tab-content" style="margin-top: 30px">

                    <!--                    Az dilinde olan hisse-->
                    <div id="az" class="tab-pane fade in active">

                        <label for="">Ixtisasın Kodu</label>
                        <input value="<?php echo $speciality["speciality_code"]?>" type="text" class="form-control" name="speciality_code"><br>

                        <label for="">İxtisasın adı</label>
                        <input value="<?php echo $speciality["speciality_name_az"]?>" type="text" class="form-control" name="speciality_name_az"><br>
                        <br>


                        <label for="">Kafedra</label>
                        <select name="speciality_department_category_az" id="" class="form-control" style="height: 40px">
                            <option value="<?php echo $speciality["department_category_name_az"]?>"><?php echo $speciality["department_category_name_az"] ?></option>

                            <?php foreach ($categories as $category){ ?>

                                <?php if ($speciality["department_category_name_az"] != $category["category_name_az"]){ ?>
                                    <option value="<?php echo $category["category_name_az"]?>"><?php echo $category["category_name_az"] ?></option>
                                <?php }?>
                            <?php }?>
                        </select>
                        <br>

                        <label for="">İxtisas Haqqında</label>
                        <textarea style="resize: none" class="form-control ckeditor" name="speciality_about_az" id="" cols="30" rows="10" placeholder="">
                            <?php echo $speciality["speciality_desc_az"]?>
                        </textarea><br>

                    </div>
                    <!--                    Az dilinde olan hisse-->


                    <!--                    Rus dilinide olan hisse-->
                    <div id="ru" class="tab-pane fade">

                        <label for="">İxtisasın adı</label>
                        <input value="<?php echo $speciality["speciality_name_ru"]?>" type="text" class="form-control" name="speciality_name_ru"><br>
                        <br>


                        <label for="">Kafedra</label>
                        <select name="speciality_department_category_ru" id="" class="form-control" style="height: 40px">
                            <option value="<?php echo $speciality["department_category_name_ru"]?>"><?php echo $speciality["department_category_name_ru"] ?></option>

                            <?php foreach ($categories as $category){ ?>

                                <?php if ($speciality["department_category_name_ru"] != $category["category_name_ru"]){ ?>
                                    <option value="<?php echo $category["category_name_ru"]?>"><?php echo $category["category_name_ru"] ?></option>
                                <?php }?>
                            <?php }?>
                        </select>
                        <br>

                        <label for="">İxtisas Haqqında</label>
                        <textarea style="resize: none" class="form-control ckeditor" name="speciality_about_ru" id="" cols="30" rows="10" placeholder="">
                            <?php echo $speciality["speciality_desc_ru"]?>
                        </textarea><br>

                    </div>
                    <!--                    Rus dilinide olan hisse-->


                    <!--                    Ingilis dilinide olan hisse-->
                    <div id="en" class="tab-pane fade">


                        <label for="">İxtisasın adı</label>
                        <input value="<?php echo $speciality["speciality_name_en"]?>" type="text" class="form-control" name="speciality_name_en"><br>
                        <br>


                        <label for="">Kafedra</label>
                        <select name="speciality_department_category_en" id="" class="form-control" style="height: 40px">
                            <option value="<?php echo $speciality["department_category_name_en"]?>"><?php echo $speciality["department_category_name_en"] ?></option>

                            <?php foreach ($categories as $category){ ?>

                                <?php if ($speciality["department_category_name_en"] != $category["category_name_en"]){ ?>
                                    <option value="<?php echo $category["category_name_en"]?>"><?php echo $category["category_name_en"] ?></option>
                                <?php }?>
                            <?php }?>
                        </select>
                        <br>

                        <label for="">İxtisas Haqqında</label>
                        <textarea style="resize: none" class="form-control ckeditor" name="speciality_about_en" id="" cols="30" rows="10" placeholder="">
                            <?php echo $speciality["speciality_desc_en"]?>
                        </textarea><br>

                    </div>
                    <!--                    Ingilis dilinide olan hisse-->

                </div>

                <input type="submit" value="Yenilə" class="btn btn-info" style="margin-top: 25px; margin-left: 30px">
            </form>


        </div>
    </div>
</div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>










