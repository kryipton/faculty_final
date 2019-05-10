<title>Tədbirlər</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<title>Tədbiri yenilə</title>

<?php if ($this->session->flashdata('alert')){ ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $this->session->flashdata('alert') ?>
    </div>
<?php } ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">


            <a href="<?php echo base_url('himalaY_tedbirler') ?>" class="btn btn-info btn-md">
                <span class="">Bütün Tədbirlər</span>
            </a>
            <br>
            <br>

            <?php if ($this->session->flashdata('alert')){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('alert') ?>
                </div>
            <?php } ?>
            <br>
            <br>

            <form action="<?php echo base_url('himalaY_tedbirler_duzenle_act/').$event['event_id']?>" method="POST" enctype="multipart/form-data">
                <br>
                <br>

                <div class="col-md-12">
                    <label for="">Tədbir adı AZ</label>
                    <input type="text" class="form-control" name="eventTitleAz" value="<?php echo $event['event_title_az']?>"> <br>

                    <label for="">Tədbir adı EN</label>
                    <input type="text" class="form-control" name="eventTitleEn" value="<?php  echo $event['event_title_en'] ?>"> <br>

                    <label for="">Tədbir adı RU</label>
                    <input type="text" class="form-control" name="eventTitleRu" value="<?php  echo $event['event_title_ru'] ?>"> <br>



                    <label for="">Tədbir haqqında AZ</label>
                    <textarea style="resize: none" class="form-control ckeditor" name="eventDescAz" id="" cols="30" rows="10" placeholder="Tədbir haqqında">
                            <?php  echo $event['event_desc_az'] ?>
                        </textarea><br>

                    <label for="">Tədbir haqqında EN</label>
                    <textarea style="resize: none" class="form-control ckeditor" name="eventDescEn" id="" cols="30" rows="10" placeholder="About event">
                             <?php  echo $event['event_desc_en'] ?>
                        </textarea><br>

                    <label for="">Tədbir haqqında RU</label>
                    <textarea style="resize: none" class="form-control ckeditor" name="eventDescRu" id="" cols="30" rows="10" placeholder="Tədbir haqqında">
                             <?php  echo $event['event_desc_ru']  ?>
                        </textarea><br>




                    <label for="">Tədbir şəkili</label>
                    <input type="file" class="form-control" name="event_image" value=""> <br>
                    <img src="<?php echo base_url('upload/event_images/').$event['event_img']?>" alt="" style="width: 250px;height: 120px;">
                    <br>
                    <br>
                    <label for="">Tədbir vaxtı</label>
                    <input type="date" class="form-control" name="eventDate" value="<?php echo $event['event_time']?>"> <br>

                    <button type="submit" class="btn btn-info btn-md">Əlavə et</button>
                </div>
            </form>
        </div>
    </div>
</div>





<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>