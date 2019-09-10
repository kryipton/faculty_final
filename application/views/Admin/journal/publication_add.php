<title>Dercler</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>




<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <a href="<?php echo base_url('himalaY_jurnallar_dercler/').$journal['id'] ?>" class="btn btn-info btn-md">
                <span class="glyphicon glyphicon-plus-sign"></span> Evvelki sehife
            </a>
            <br>
            <br>
            <br>


            <div class="col-md-8">

                <form action="<?php echo base_url('himalaY_jurnallar_dercler_elave_et_act/').$journal['id'] ?>"  enctype="multipart/form-data" method="POST">
                    
                    
                    <label for="">Başlıq az</label>
                    <input type="text" class="form-control" name="title_az">

                    <label for="">Başlıq ru</label>
                    <input type="text" class="form-control" name="title_ru">

                    <label for="">Başlıq en</label>
                    <input type="text" class="form-control" name="title_en">

                    <label for="">Vaxt</label>
                    <input type="date" class="form-control" name="time">

                    <label for="">Link URL</label>
                    <input type="text" class="form-control" name="link">                    <br>

                    <label for="">Jurnal şəkili</label>
                    <input type="file" class="form-control" name="file_name"> <br>

                    <input type="submit" class="btn btn-info" value="Əlavə et">
                </form>

            </div>



        </div>
    </div>
</div>
















<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>
