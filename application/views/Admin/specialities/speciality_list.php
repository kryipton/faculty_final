<title>İxtisaslar</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">
            <a class="btn btn-primary" href="<?php echo base_url("himalaY_ixtisas_elave_et") ?>">Əlavə et</a>
            <h3>İxtİsaslar</h3>
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
            <br>
            <br>

            <table class="table table-hover" style="background-color: lightgrey">
                <thead>
                <tr>
                    <th style="width: 40%;">İxtisas kodu</th>
                    <th>İxtisas</th>
                    <th>Əməliyyat</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($all_specialities as $speciality) {
                ?>
                <tr>
                    <td>
                        <p style="color: black!important;">
                            <?php echo $speciality["speciality_code"] ?>
                        </p>
                    </td>


                    <td>
                        <p style="color: black!important;">
                            <?php echo $speciality["speciality_name_az"] ?>
                        </p>
                    </td>


                    <td>
                        <a href="<?php echo base_url("himalaY_ixtisas_silme/$speciality[id]") ?>" class="btn btn-danger">Sil</a>
                        <a href="<?php echo base_url("himalaY_ixtisas_yenile/$speciality[id]")?>" class="btn btn-warning">Yenilə</a>
                    </td>
                </tr>
                </tbody>
                <?php
                }
                ?>

            </table>


        </div>
    </div>
</div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>

