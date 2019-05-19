<title>Müəllimlər</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">
        <div class="right">

            <h1 style="color: green;"><?php echo $this->session->flashdata('success');?></h1>

            <h1>Əlaqə</h1>

            <br><br>

            <table class="table table-striped table-bordered news_table">
                <thead>
                <tr>

                    <th scope="col">Kafedra Adı</th>

                    <th scope="col">
                        Əlaqə
                    </th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($categories as $category) { ?>

                    <tr>
                            <td><?php echo $category["category_name_az"]?></td>
                            <td>
                                <a href="<?php echo base_url("himalaY_kafedralar_elaqe_yenile/$category[id]")?>" class="btn btn-primary">Əlaqə</a>
                            </td>
                    </tr>

                <?php } ?>
                </tbody>
            </table>






        </div>
    </div>
</div>





<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>