
<title>Haqqımızda</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">

            <h1 style="color: green;"><?php echo $this->session->flashdata("success");?></h1>
            <h1 style="color: red;"><?php echo $this->session->flashdata("alert");?></h1>

            <form action="<?php echo base_url('himalaY_elaqe_duzenle_act')?>" method="POST">
                <br><br>
                <label for="">Əlaqə AZ</label>
                <textarea name="contact_text_az" class="ckeditor" id="" cols="30" rows="10" required>
                        <?php echo $contact['contact_text_az'] ?>
                    </textarea>
                <br><br>
                <label for="">Əlaqə EN</label>
                <textarea name="contact_text_en" class="ckeditor" id="" cols="30" rows="10" required>
                       <?php echo $contact['contact_text_en'] ?>
                    </textarea>
                <br><br>
                <label for="">Əlaqə RU</label>
                <textarea name="contact_text_ru" class="ckeditor" id="" cols="30" rows="10" required>
                       <?php echo $contact['contact_text_ru'] ?>
                    </textarea>
                <br><br>
                <input type="submit" class="btn btn-info" value="Düzənlə">
            </form>

        </div>
    </div>
</div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>











