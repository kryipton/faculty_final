<title>Xəbərlər</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>

<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">









<!--basliq-->
<h1 class="c_about text-center bold">Galereya Bölməsi</h1>
<!--basliq-->
<br><br>
            <br>
            <?php if ($this->session->flashdata('alert')){ ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('alert') ?>
                </div>
            <?php } ?>
            <br>
            <?php if ($this->session->flashdata('alert_danger')){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('alert_danger') ?>
                </div>
            <?php } ?>

            <!--dropzone-->
            <form action   =   "<?php echo base_url("himalaY_xeber_gallery_add/".$news['news_id'])?>"
                  data-url =   "<?php echo base_url("himalaY_xeber_gallery_refresh/".$news['news_id'])?>"
                  class="dropzone c_dropzone"
                  enctype="multipart/form-data"
                  id="dropzone">
                <div class="fallback">
                    <input name="file" type="file" multiple style="visibility: hidden;"/>
                </div>

            </form>
            <!--dropzone-->



<br><br><br>
<!--eger mulamt varsa bu div cixacaq-->


    <!--sekillerin tablesi-->
    <div class="col-lg-12">
        <div class="widget-container fluid-height clearfix">
            <div class="widget-content padded clearfix  refresh_gallery">

                <?php $this->load->view('Admin/news/news_gallery/render_page/news_table_list'); ?>

            </div>
        </div>
    </div>
    <!--sekillerin tablesi-->


        </div>
    </div>
</div>


<!--======================================Page Content========================================================================-->




<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>

<script>

    Dropzone.autoDiscover =false;
        //dropzone nun dinamik sekilleri yuklemesi
    var name = "dropzone";
    if($("#" + name).length != 0) {
        var myDropzone = new Dropzone("#dropzone");
        myDropzone.on("complete", function(file) {
            $data_url_of_dropzone = $('#dropzone').data("url");

            $.post( $data_url_of_dropzone, {}, function (response) {
                $('.refresh_gallery').html(response);

            })
        });
    }

</script>
