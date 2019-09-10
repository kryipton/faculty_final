<title>Jurnallar</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>

<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <a href="<?php echo base_url('himalaY_jurnallar_elave_et') ?>" class="btn btn-info btn-md">
                <span class="glyphicon glyphicon-plus-sign"></span> <span>Jurnal əlavə et</span>
            </a>
            <br>
            <br>
            <p>Bütün Jurnallar</p>
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
                    <th  scope="col">Tiraj No</th>
                    <th  scope="col">Jurnal adı</th>
                    <th  scope="col">Dərcləri</th>
                    <th  scope="col">Jurnal vaxtı</th>
                    <th  scope="col">Jurnal şəkili</th>
                    <th  scope="col">Dəyiş / Sil</th>
                </tr>
                </thead>
                <tbody>



                <?php foreach ($journals as $journal) { ?>

                    <tr>

                        <th><?php  echo $journal['edition_no']?></th>
                        <th><?php  echo substr($journal['name_az'], 0,100)?></th>
                        <td>
                            <a href="<?php echo base_url('himalaY_jurnallar_dercler/').$journal['id'] ?>" class="btn btn-primary btn-sm"
                               style="margin: 30px; background: #854df1; border:0px solid #DD4B39 " >
                                <i class="fa fa-image" aria-hidden="true"></i><span>Dercler</span>
                            </a>
                        </td>

                        <th><?php  echo $journal['time']?></th>
                        <th>
                            <img style="width: 150px; height: 90px" src="<?php  echo base_url('upload/journal_images/'.$journal['img_name']) ?>" alt="">
                        </th>
                        <td>
                            <a href="<?php echo base_url('himalaY_jurnallar_duzenle/').$journal['id'] ?>" class="btn btn-primary btn-sm"
                               style="background: #3C8DBC; border:1px solid #3C8DBC">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo base_url('himalaY_jurnallar_silme/').$journal['id']?>" class="btn btn-primary btn-sm"
                               style="background: #DD4B39;border:1px solid #DD4B39">
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