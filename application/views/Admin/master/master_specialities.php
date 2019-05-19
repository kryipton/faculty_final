<title>İxtisaslar</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">
            <a class="btn btn-primary" href="<?php echo base_url("himalaY_magistr_ixtisas_elave_et") ?>">Əlavə et</a>
            <h3>İxtİsaslar</h3>

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
                            <?php echo $speciality["master_text"] ?>
                        </p>
                    </td>


                    <td>
                        <p style="color: black!important;">
                            <?php echo $speciality["master_text_about_az"] ?>
                        </p>
                    </td>


                    <td>
                        <a href="<?php echo base_url("himalaY_magistr_ixtisas_silme/$speciality[master_id]") ?>" class="btn btn-danger">Sil</a>
                        <a href="<?php echo base_url("himalaY_magistr_ixtisas_yenile/$speciality[master_id]")?>" class="btn btn-warning">Yenilə</a>
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










