
<title>Haqqımızda</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <h1 style="color: red"><?php echo $this->session->flashdata("alert")?></h1>

            <form action="<?php echo base_url('himalaY_loqo_duzenle_act')?>" method="POST" enctype="multipart/form-data">
                <label for="">Saytın Başlıqı AZ</label>
                <input value="<?php echo $logo_and_title["site_title_az"] ?>" type="text" name="site_title_az">
                <br><br>
                <label for="">Saytın Başlıqı EN</label>
                <input value="<?php echo $logo_and_title["site_title_en"] ?>" type="text" name="site_title_en">
                <br><br>
                <label for="">Saytın Başlıqı RU</label>
                <input value="<?php echo $logo_and_title["site_title_ru"] ?>" type="text" name="site_title_ru">
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











