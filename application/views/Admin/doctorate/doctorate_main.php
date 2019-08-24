<title>doktorantura</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>



<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <p style="background: lightgrey;padding: 40px 10px;margin-top: 20px;">
                <a href="<?php echo base_url("himalaY_doktorantura_yenile")?>" class="btn btn-info">Ümumi məlumat Edit</a>
                <a href="<?php echo base_url('himalaY_doktorantura_ixtisaslar') ?>" class="btn btn-info">Ixtisaslar</a>
                <a href="<?php echo base_url('himalaY_doktorantura_elaqe') ?>" class="btn btn-info">Əlaqə</a>


            <h1>Haqqimizda</h1>
            <br><br>

            </p>


            <div class="container">

                <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#az">Az</a></li>
                    <li><a data-toggle="pill" href="#ru">Ru</a></li>
                    <li><a data-toggle="pill" href="#en">En</a></li>
                </ul>

                <div class="tab-content">


<!--                    Azerbaycanca olan hisse-->
                    <div id="az" class="tab-pane fade in active">
                        <br><br>
                        <p style="color: black!important;">
                            <?php echo $doctorate_about_text["doctorate_about_text_az"] ?>
                        </p>
                    </div>
<!--                    Azerbaycanca olan hisse-->



<!--                    Rusca olan hisse-->
                    <div id="ru" class="tab-pane fade">
                        <br><br>
                        <p style="color: black;">
                            <?php echo $doctorate_about_text["doctorate_about_text_ru"] ?>
                        </p>
                    </div>
<!--                    Rusca olan hisse-->



<!--                    Ingilisce olan hisse-->
                    <div id="en" class="tab-pane fade">
                        <br><br>
                        <p style="color: black;">
                            <?php echo $doctorate_about_text["doctorate_about_text_en"] ?>
                        </p>
                    </div>
<!--                    Ingilisce olan hisse-->



                </div>
            </div>



        </div>
    </div>
</div>






<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>











