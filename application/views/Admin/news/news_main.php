<title>Xəbərlər</title>
<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>




    <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
        <div class="row">

            <div class="right">
                <a href="<?php echo base_url('himalaY_xeber_elave_et') ?>" class="btn btn-info btn-md">
                    <span class="glyphicon glyphicon-plus-sign"></span> Xəbər əlavə et
                </a>
                <br>
                <br>
                <p style="color:black " class="text-center" >Bütün Tədbirlər</p>
                <br>
                <?php if ($this->session->flashdata('success')){ ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success') ?>
                    </div>
                <?php } ?>

                <table class="table table-striped table-bordered news_table">
                    <thead>
                    <tr>
                        <th scope="col">Sıra</th>
                        <th scope="col">Xəbər adı</th>
                        <th scope="col">Xəbər haqqında</th>
                        <th scope="col">Xəbər vaxtı</th>
                        <th scope="col">Xəbər şəkili</th>
                        <th scope="col">Əməliyyat</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                foreach ($allNews as $news) {
                    ?>

                    <tr>

                        <th><?php echo $news['news_id']?></th>
                        <th><?php echo substr($news['news_title_az'], 0,100)  ?></th>
                        <th style="color: black;"><?php echo substr($news['news_description_az'], 0,160)?></th>
                        <th><?php echo $news['news_time'] ?></th>
                        <th>
                            <img style="width: 150px;" src="<?php echo base_url('upload/news_images/'.$news['news_img'])?>" alt="">
                        </th>
                        <td>
                            <a href="<?php echo base_url('himalaY_xeber_duzenle/').$news['news_id']?>" class="btn btn-primary btn-sm"
                               style="background: #3C8DBC; border:0px solid #3C8DBC">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo base_url('himalaY_xeber_sil/').$news['news_id']?>" class="btn btn-primary btn-sm"
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
