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

            <h3 style="color: green;"><?php echo $this->session->flashdata("success")?></h3>

            <br>

            <table class="table table-striped table-bordered news_table">
                <thead>
                <tr>
                    <th  scope="col">Sıra</th>
                    <th scope="col">Adı</th>
                    <th scope="col">Soyadı</th>
                    <th  scope="col">Dərəcə</th>
                    <th scope="col">Kafedra</th>
                    <th  scope="col">Şəkil</th>
                    <th  scope="col">Əməliyyat</th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach ($teachers as $teacher) {
                    ?>

                    <tr>

                        <th><?php echo $teacher["teacher_id"]?></th>
                        <th><?php echo $teacher["teacher_name_az"]?></th>
                        <th><?php echo $teacher["teacher_surname_az"]?></th>
                        <th><?php echo $teacher["teacher_position_az"]?></th>
                        <th><?php echo $teacher["department_category_az"]?></th>
                        <th>
                            <img width="70px" height="70px" src="<?php echo base_url("upload/teacher_images/"). $teacher["teacher_photo"]?>" alt="sekil">
                        </th>
                        <td>
                            <a href="<?php echo base_url('himalaY_muellimler_yenile/').$teacher["teacher_id"] ?>" class="btn btn-primary btn-sm"
                               style="background: #3C8DBC; border:0px solid #3C8DBC">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo base_url('himalaY_muellimler_silme/').$teacher["teacher_id"] ?>" class="btn btn-primary btn-sm"
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