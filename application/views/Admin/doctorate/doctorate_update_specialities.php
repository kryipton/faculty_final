<title>İxtisaslar</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <h1 style="color: red;">
                <?php echo $this->session->flashdata("doctorate_about_error_message");?>
            </h1>

            <ul class="nav nav-pills c_nav_pill">
                <li class="active"><a data-toggle="pill" href="#az">Az</a></li>
                <li><a data-toggle="pill" href="#ru">Ru</a></li>
                <li><a data-toggle="pill" href="#en">En</a></li>
            </ul>

            <form action="<?php echo base_url('himalaY_doktorantura_ixtisas_yenileme/') . $speciality["doctorate_id"] ?>" method="POST">

                <h2 style="color: red;"><?php echo $this->session->flashdata("alert")?></h2>

                <div class="tab-content" style="margin-top: 30px">

                    <!--                    Az dilinde olan hisse-->
                    <div id="az" class="tab-pane fade in active">

                        <label for="">Ixtisasın Kodu</label>
                        <input value="<?php echo $speciality["doctorate_text"]?>" type="text" class="form-control" name="speciality_code"><br>

                        <label for="">İxtisasın adı</label>
                        <input value="<?php echo $speciality["doctorate_text_about_az"]?>" type="text" class="form-control" name="speciality_name_az"><br>
                        <br>

                        <label for="">İxtisas Haqqında</label>
                        <textarea style="resize: none" class="form-control ckeditor" name="speciality_about_az" id="" cols="30" rows="10" placeholder="">
                            <?php echo $speciality["doctorate_text_text_az"]?>
                        </textarea><br>

                    </div>
                    <!--                    Az dilinde olan hisse-->


                    <!--                    Rus dilinide olan hisse-->
                    <div id="ru" class="tab-pane fade">

                        <label for="">İxtisasın adı</label>
                        <input value="<?php echo $speciality["doctorate_text_about_ru"]?>" type="text" class="form-control" name="speciality_name_ru"><br>
                        <br>

                        <label for="">İxtisas Haqqında</label>
                        <textarea style="resize: none" class="form-control ckeditor" name="speciality_about_ru" id="" cols="30" rows="10" placeholder="">
                            <?php echo $speciality["doctorate_text_text_ru"]?>
                        </textarea><br>

                    </div>
                    <!--                    Rus dilinide olan hisse-->


                    <!--                    Ingilis dilinide olan hisse-->
                    <div id="en" class="tab-pane fade">


                        <label for="">İxtisasın adı</label>
                        <input value="<?php echo $speciality["doctorate_text_about_en"]?>" type="text" class="form-control" name="speciality_name_en"><br>
                        <br>

                        <label for="">İxtisas Haqqında</label>
                        <textarea style="resize: none" class="form-control ckeditor" name="speciality_about_en" id="" cols="30" rows="10" placeholder="">
                            <?php echo $speciality["doctorate_text_text_en"]?>
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










