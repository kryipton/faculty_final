<title>Dercler</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>



<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <a href="<?php echo base_url('himalaY_jurnallar_dercler_elave_et/').$journal['id'] ?>" class="btn btn-info btn-md">
                <span class="glyphicon glyphicon-plus-sign"></span> <span>Derc əlavə et</span>
            </a>
            <br>
            <br>
            <p>Dercler</p>
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
            <table class="table table-striped table-bordered table-dark news_table">
                <thead>
                <tr>
                    <th  scope="col">Dərc şəkili</th>
                    <th  scope="col">Dərc adı</th>
                    <th  scope="col">Dərc vaxtı</th>
                    <th  scope="col">Sil</th>
                </tr>
                </thead>
                <tbody>



                <?php foreach ($publications as $publication) { ?>

                    <tr>

                        <th>
                            <img style="width: 150px; height: 90px" src="<?php  echo base_url('upload/publications_files/'.$publication['img_name']) ?>" alt="">
                        </th>
                        <th><?php  echo $publication['name_az']?></th>

                        <th><?php  echo $publication['time']?></th>

                        <td>
                            <a href="<?php echo base_url('himalaY_jurnallar_dercler_silme/').$publication['id'].'/'.$journal['id']?>" class="btn btn-primary btn-sm"
                               style="background: #DD4B39;border:1px solid #DD4B39">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>

                    </tr>

                    <?php
                }
                ?>

                </tbody>



        </div>
    </div>
</div>


















<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>
