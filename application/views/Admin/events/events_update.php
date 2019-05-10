<title>Tədbirlər</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<title>Tədbiri yenilə</title>

<?php
if($this->session->userdata('success_event_add')){ ?>
    <span style="padding: 2px" class="alert alert-success"><?php echo $this->session->userdata('success_event_add') ?></span>
<?php };
$this->session->unset_userdata('success_event_add');
?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">


            <a href="<?php echo base_url('') ?>" class="btn btn-info btn-md">
                <span class="">Bütün Tədbirlər</span>
            </a>
            <br>
            <?php //print_r($eventData) ?>

            <form action="<?php  ?>" method="POST" enctype="multipart/form-data">
                <br>
                <br>

                <div class="col-md-12">
                    <label for="">Tədbir adı AZ</label>
                    <input type="text" class="form-control" name="eventTitleAz" value="<?php ?>"> <br>

                    <label for="">Tədbir adı EN</label>
                    <input type="text" class="form-control" name="eventTitleEn" value="<?php ?>"> <br>

                    <label for="">Tədbir adı RU</label>
                    <input type="text" class="form-control" name="eventTitleRu" value="<?php ?>"> <br>



                    <label for="">Tədbir haqqında AZ</label>
                    <textarea style="resize: none" class="form-control ckeditor" name="eventDescAz" id="" cols="30" rows="10" placeholder="Tədbir haqqında">
                            <?php ?>
                        </textarea><br>

                    <label for="">Tədbir haqqında EN</label>
                    <textarea style="resize: none" class="form-control ckeditor" name="eventDescEn" id="" cols="30" rows="10" placeholder="About event">
                             <?php ?>
                        </textarea><br>

                    <label for="">Tədbir haqqında RU</label>
                    <textarea style="resize: none" class="form-control ckeditor" name="eventDescRu" id="" cols="30" rows="10" placeholder="Tədbir haqqında">
                             <?php   ?>
                        </textarea><br>




                    <label for="">Tədbir şəkili</label>
                    <input type="file" class="form-control" name="event_image" value=""> <br>
                    <img src="<?php ?>" alt="" style="width: 250px;height: 120px;">
                    <br>
                    <br>
                    <label for="">Tədbir vaxtı</label>
                    <input type="date" class="form-control" name="eventDate" value="<?php  ?>"> <br>

                    <button type="submit" class="btn btn-info btn-md">Əlavə et</button>
                </div>
            </form>
        </div>
    </div>
</div>





<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>