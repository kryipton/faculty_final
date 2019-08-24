<title>doktorantura</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <?php if ($this->session->flashdata('success')){ ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success') ?>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('danger')){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('danger') ?>
                </div>
            <?php } ?>

            <form action="<?php echo base_url("himalaY_doktorantura_elaqe_update")?>" method="post">
                <div class="container">

                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#az">Az</a></li>
                        <li><a data-toggle="pill" href="#ru">Ru</a></li>
                        <li><a data-toggle="pill" href="#en">En</a></li>
                    </ul>

                    <div class="tab-content">


                        <!--                    Azerbaycanca olan hisse-->
                        <div id="az" class="tab-pane fade in active">
                        <textarea style="resize: none" class="form-control ckeditor" name="master_about_az" id="" cols="30" rows="10" placeholder="">
                            <?php echo $contact["contact_az"] ?>
                        </textarea>
                        </div>
                        <!--                    Azerbaycanca olan hisse-->



                        <!--                    Rusca olan hisse-->
                        <div id="ru" class="tab-pane fade">
                        <textarea style="resize: none" class="form-control ckeditor" name="master_about_ru" id="" cols="30" rows="10" placeholder="">
                            <?php echo $contact["contact_ru"] ?>
                        </textarea>
                        </div>
                        <!--                    Rusca olan hisse-->



                        <!--                    Ingilisce olan hisse-->
                        <div id="en" class="tab-pane fade">
                        <textarea style="resize: none" class="form-control ckeditor" name="master_about_en" id="" cols="30" rows="10" placeholder="">
                            <?php echo $contact["contact_en"] ?>
                        </textarea>
                        </div>
                        <!--                    Ingilisce olan hisse-->



                    </div>
                    <br><br>
                    <button class="btn btn-primary" type="submit">Yenilə</button>
                </div>
            </form>


        </div>

    </div>
</div>

<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>