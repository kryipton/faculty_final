<title>Tədbirlər</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>



<title>Tədbirlər</title>

<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <a href="<?php echo base_url('himalaY_tedbirler_elave_et') ?>" class="btn btn-info btn-md">
                <span class="glyphicon glyphicon-plus-sign"></span> <span>Tədbir əlavə et</span>
            </a>
            <br>
            <br>
            <p>Bütün Tədbirlər</p>
            <br>

            <table class="table table-striped table-bordered table-dark news_table">
                <thead>
                <tr>
                    <th  scope="col">Sıra</th>
                    <th scope="col">Tədbir adı</th>
                    <th  scope="col">Tədbir haqqında</th>
                    <th scope="col">Tədbir vaxtı</th>
                    <th  scope="col">Tədbir şəkili</th>
                    <th>Dəyiş / Sil</th>
                </tr>
                </thead>
                <tbody>



                <?php foreach ($allEvents as $event) { ?>

                    <tr>


                        <td><?php  echo $event['event_id']?></td>
                        <td><?php  echo substr($event['event_title_az'], 0,100)?></td>
                        <td><?php  echo substr($event['event_desc_az'], 0,160)?></td>
                        <td><?php  echo $event['event_time']?></td>
                        <td>
                            <?php ?>
                            <img style="width: 150px; height: 90px" src="<?php  echo base_url('upload/event_images/'.$event['event_img']) ?>" alt="">
                            <?php ?>

                        </td>
                        <td>
                            <a href="<?php ?>" class="btn btn-primary btn-sm"
                               style="background: #3C8DBC; border:1px solid #3C8DBC">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a href="<?php ?>" class="btn btn-primary btn-sm"
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











