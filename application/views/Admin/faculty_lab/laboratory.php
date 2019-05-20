<title>Laboratoriya</title>

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
            <?php if ($this->session->flashdata('error')){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('error') ?>
                </div>
            <?php } ?>
            <a href="<?php echo base_url('himalaY_fakulte_laboratoriya_elave_et') ?>" class="btn btn-info btn-md">
                <span class="glyphicon glyphicon-plus-sign"></span> Laboratoriya əlavə et
            </a>
            <br>

            <br>

            <table class="table table-striped table-bordered news_table">
                <thead>
                <tr>
                    <th scope="col">Adı</th>
                    <th  scope="col">Haqqında</th>
                    <th  scope="col">Şəkil</th>
                    <th  scope="col">Əməliyyat</th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach ($laboratories as $lab) {
                    ?>

                    <tr>

                        <th><?php echo $lab["lab_title_az"]?></th>
                        <th><?php echo $lab["lab_text_az"]?></th>
                        <th>
                            <img style="width: 150px;" src="<?php echo base_url('upload/laboratory_images/'.$lab['laboratory_img'])?>" alt="">
                        </th>
                        <td>
                            <a href="<?php echo base_url('himalaY_fakulte_laboratoriya_yenile/').$lab["id"] ?>" class="btn btn-primary btn-sm"
                               style="background: #3C8DBC; border:0px solid #3C8DBC">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo base_url('himalaY_fakulte_laboratoriya_sil/').$lab["id"] ?>" class="btn btn-primary btn-sm"
                               style="background: #DD4B39;border:0px solid #DD4B39">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>


                    </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>






        </div>
    </div>
</div>





<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>