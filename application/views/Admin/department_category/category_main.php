<title>Müəllimlər</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">
        <div class="right">

            <h1 style="color: green;"><?php echo $this->session->flashdata('success');?></h1>

            <br>
            <a href="<?php echo base_url('himalaY_kafedralar_elave_et') ?>" class="btn btn-info btn-md">
                <span class="glyphicon glyphicon-plus-sign"></span>
                Kafedra əlavə et
            </a>
            <br><br><br>

            <table class="table table-striped table-bordered news_table">
                <thead>
                <tr>
                    <th  scope="col">Sıra</th>
                    <th scope="col">Adı (Az)</th>
                    <th scope="col">Adı (En)</th>
                    <th scope="col">Adı (Ru)</th>
                    <th scope="col">Ətrafli</th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach ($categories as $category) {
                    ?>


                    <tr>
                            <td><?php echo $category["id"]?></td>
                            <td><?php echo $category["category_name_az"]?></td>
                            <td><?php echo $category["category_name_en"]?></td>
                            <td><?php echo $category["category_name_ru"]?></td>
                            <td>
                                <a href="<?php echo base_url("himalaY_kafedralar_silme/") . $category["id"] ?>" class="btn btn-danger">Sil</a>
                                <a href="<?php echo base_url("himalaY_kafedralar_yenile/") . $category["id"] ?>" class="btn btn-warning">Yenilə</a>
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