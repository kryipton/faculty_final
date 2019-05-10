<title>Laboratoriya</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">
            <form action="<?php echo base_url('') ?>" method="POST">

                <label for="">Laboratoriyalar</label>
                <textarea name="lab_text" class="ckeditor" id="" cols="30" rows="10">
                        <?php

                        ?>
                    </textarea>
                <br>
                <br>
                <input type="submit" class="btn btn-info" value="Düzənlə">

            </form>
        </div>
    </div>
</div>

<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>