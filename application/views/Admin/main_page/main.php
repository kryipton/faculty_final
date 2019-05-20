<title>Ana səhifə</title>
<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>

<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>

<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">
        <div class="right">
            <br>
            <?php if ($this->session->flashdata('success')){ ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success') ?>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('alert')){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('alert') ?>
                </div>
            <?php } ?>
            <br>
            <form action="<?php echo base_url("himalaY_say_deyis")?>" method="post">
                <br><br>
                <label for="">Fakültədəki Müəllim sayı</label>
                <input type="text" name="teacher_count" value="<?php echo $counts['teacher_count'] ?>" >
                <br><br>

                <label for="">Fakültədəki Tələbə sayı</label>
                <input type="text" name="student_count" value="<?php echo $counts['student_count'] ?>" >
                <br><br>

                <label for="">Fakültədəki laboratoriya sayı</label>
                <input type="text" name="lab_count" value="<?php echo $counts['lab_count'] ?>" >
                <br><br>

                <input type="submit" class="btn btn-info" value="Düzənlə">
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>

