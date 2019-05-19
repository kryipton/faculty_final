
<title>Haqqımızda</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <h1 style="color: red"><?php echo $this->session->flashdata("alert")?></h1>

            <form action="<?php echo base_url('himalaY_loqo_duzenle_act')?>" method="POST" enctype="multipart/form-data">
                <label for="">Saytın Başlıqı</label>
                <input value="<?php echo $logo_and_title["site_title"] ?>" type="text" name="site_title">
                <br><br>
                <label for="">Saytın Loqosu</label>
                <input type="file" name="site_loqo">
                <br><br>
                <input type="submit" class="btn btn-info" value="Düzənlə">
            </form>

        </div>
    </div>
</div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>











