<title>Müəllimlər</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>




<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">
        <div class="right">
            <a href="<?php echo base_url('himalaY_muellimler_elave_et') ?>" class="btn btn-info btn-md">
                <span class="glyphicon glyphicon-plus-sign"></span> Müəllim əlavə et
            </a>
            <br>

            <br>

            <table class="table table-striped table-bordered news_table">
                <thead>
                <tr>
                    <th  scope="col">Sıra</th>
                    <th scope="col">Adı</th>
                    <th  scope="col">Soyad</th>
                    <th scope="col">Telefon</th>

                    <th  scope="col">Dərs</th>
                    <th  scope="col">Əməliyyat</th>
                </tr>
                </thead>
                <tbody>

                <?php

                 ?>

                    <tr>

                        <th><?php  ?></th>
                        <th><?php  ?></th>
                        <th><?php  ?></th>
                        <th><?php  ?></th>
                        <th><?php  ?></th>
                        <td>
                            <a href="<?php echo base_url('') ?>" class="btn btn-primary btn-sm" style="background: #3C8DBC; border:0px solid #3C8DBC">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo base_url('') ?>" class="btn btn-primary btn-sm" style="background: #DD4B39;border:0px solid #DD4B39">
                                <i class="fa fa-times" aria-hidden="true" ></i>
                            </a>
                        </td>


                    </tr>

                <?php

                ?>
                </tbody>
            </table>






        </div>
    </div>
</div>





<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>