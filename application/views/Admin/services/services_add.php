<title>İxtisaslar</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <h1 style="color: red;">
                <?php echo $this->session->flashdata("error");?>
            </h1>



            <form action="<?php echo base_url('himalaY_xidmetler_elave_edilmesi') ?>" method="POST">

                <h2 style="color: red;"><?php echo $this->session->flashdata("alert")?></h2>

                <div class="tab-content" style="margin-top: 30px">


                    <label for="">Xidmətin Adı AZ</label>
                    <input type="text" class="form-control" name="name_az"><br>
                    <br>

                    <label for="">Xidmətin Adı EN</label>
                    <input type="text" class="form-control" name="name_en"><br>
                    <br>

                    <label for="">Xidmətin Adı RU</label>
                    <input type="text" class="form-control" name="name_ru"><br>
                    <br>

                    <label for="">Xidmətin linki</label>
                    <input type="text" class="form-control" name="link"><br>
                    <br>

                    <input type="submit" value="Əlavə et" class="btn btn-info" style="margin-top: 25px; margin-left: 30px">
                    <!--            <button type="submit">Elave et</button>-->

                </div>
                    <!--                    Az dilinde olan hisse-->






            </form>


        </div>
    </div>
</div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>










