<title>Haqqımızda</title>

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
            <br>

            <?php if ($this->session->flashdata('alert')){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('alert') ?>
                </div>
            <?php } ?>
            <br>


            <a href="<?php echo base_url('himalaY_elaqe_duzenle')?>" class="btn btn-info btn-md">
                <span class="glyphicon glyphicon-plus-sign"></span> Editlə
            </a>
            <br>
            <br>


            <label for="">Haqqimizda AZ</label>
            <div style="background: lightgrey;padding: 30px;">
                <?php
                echo $contact_text['contact_text_az'];
                ?>
            </div>


            <br>


            <label for="">Haqqimizda EN</label>
            <div style="background: lightgrey;padding: 30px;">
                <?php
                echo $contact_text['contact_text_en'];
                ?>
            </div>


            <br>



            <label for="">Haqqimizda RU</label>
            <div style="background: lightgrey;padding: 30px;">
                <?php
                echo $contact_text['contact_text_ru'];
                ?>
            </div>

        </div>
    </div>
</div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>