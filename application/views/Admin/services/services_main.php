<title>Haqqımızda</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <a class="btn btn-primary" href="<?php echo base_url("himalaY_xidmetler_elave_et") ?>">Əlavə et</a>


            <?php if ($this->session->flashdata('success')){ ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success') ?>
                </div>
            <?php } ?>
            <br>
            <br>
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
                    <th>Servisin adı AZ</th>
                    <th>Servisin adı EN</th>
                    <th>Servisin adı RU</th>
                    <th>Servisin linki</th>
                    <th>Əməliyyat</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($services as $service ) {
                ?>
                <tr>
                    <td>
                        <p style="color: black!important;">
                            <?php echo $service["name_az"] ?>
                        </p>
                    </td>


                    <td>
                        <p style="color: black!important;">
                            <?php echo $service["name_en"] ?>
                        </p>
                    </td>

                    <td>
                        <p style="color: black!important;">
                            <?php echo $service["name_ru"] ?>
                        </p>
                    </td>


                    <td>
                        <p style="color: black!important;">
                            <?php echo $service["link"] ?>
                        </p>
                    </td>


                    <td>
                        <a href="<?php echo base_url("himalaY_xidmetler_silme/$service[id]") ?>" class="btn btn-danger">Sil</a>
                        <a href="<?php echo base_url("himalaY_xidmetler_yenile/$service[id]")?>" class="btn btn-warning">Yenilə</a>
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