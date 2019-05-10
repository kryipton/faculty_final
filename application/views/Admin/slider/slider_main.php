<title>Slider</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


    <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
        <div class="row">

            <div class="right">
                <a href="<?php echo base_url('himalaY_slider_elave_et')?>" class="btn btn-info btn-md">
                    <span class="glyphicon glyphicon-plus-sign"></span> Slide əlavə et
                </a>
                <br>

                <br>
                <?php if ($this->session->flashdata('success')){ ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success') ?>
                    </div>
                <?php } ?>

                <?php if ($this->session->flashdata('alert')){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata('alert') ?>
                    </div>
                <?php } ?>


                <?php
                foreach ($sliderInfo as $info) {
                    ?>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="slide-main" style="border: 1px solid black;padding: 10px 20px;">

                                <div class="slide-title" style="padding: 0px 5px">
                                    <b> </b>
                                </div>

                                <div class="slide-img">
                                    <center><img style="height: 250px;width: 100%" src="<?php echo base_url('upload/slide_images/').$info['slide_image']?>" alt="shekil"></center>
                                </div>

                                <div class="slide-in" style="padding: 0px 5px">
                                    <p style="font-size: 15px;line-height: 20px">
                                        <?php echo $info['slide_title_az']?>
                                    </p>
                                </div>
                                <a href="<?php echo base_url('himalaY_slider_duzenle/').$info['slide_id'] ?>" class="btn btn-info btn-md">
                                    <span class="glyphicon glyphicon-pencil pull-right"> </span> Yenilə
                                </a>
                                <a href="<?php echo base_url('himalaY_slider_sil/').$info['slide_id']?>" class="btn btn-danger btn-md">
                                    <span class="glyphicon glyphicon-trash pull-right"></span> Sil
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>


                <br>



            </div>
        </div>
    </div>




<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>