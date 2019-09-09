
<title>Haqqımızda</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <h2>Admin Yeniləmə</h2>


            <?php if ($this->session->flashdata('success')){ ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success') ?>
                </div>
                <br>
            <?php } ?>

            <?php if ($this->session->flashdata('alert')){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('alert') ?>
                </div>
                <br>
            <?php } ?>


            <form action="<?php echo base_url("himalaY_admin_yenileme_act"); ?>" method="POST">
                <label for="">Admin username</label>
                <input type="text" class="form-control" name="name" value="<?php echo $admin["user_name"]?>">
                <br>

                <label for="">Yeni şifrə</label>
                <input type="password" class="form-control" name="password">
                <br>

                <label for="">Yeni şifrə təkrarı</label>
                <input type="password" class="form-control" name="password_again">
                <br>


                <input type="submit" class="btn btn-info" value="Düzənlə">
            </form>

        </div>
    </div>
</div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>











