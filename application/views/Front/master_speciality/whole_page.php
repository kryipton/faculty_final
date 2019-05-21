<title>Magistratura ixtisasları</title>

<?php $this->load->view('Front/includes_for_whole_files/header_menu'); ?>


<div class="content_wrapper" style="margin-bottom: 150px;">

    <div class="breadcrumb_wrap" >
        <div class="breadcrumb_wrap_inner" style="background-image: url('../public/images/top1.jpg');height: 250px;">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo base_url("Home")?>">Ana Səhifə</a>  /</li>
                    <li>Ümumi məlumat</li>
                </ul>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 600px !important;margin-top: 20px;">
        <div class="col-md-3">
            <div class="category_course" style="margin-top: 75px;">
                <ul>
                    <li><a href="<?php echo base_url('Master'); ?>">Ümumi məlumat</a></li>
                    <li><a href="<?php echo base_url('Master/Speciality') ?>">İxtisas</a></li>
                </ul>
            </div>
        </div>



        <div class="col-md-9">
            <h2>İxtisaslar</h2>
            <div class="about_right" style="padding: 20px 0px 0px 10px">

                <div class="about_right_text">


                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 30%;">İxtisas kodu</th>
                            <th>İxtisas</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php


                        foreach($data as $data_key){ ?>
                        <tr>
                            <td><?php echo $data_key['master_text'] ?></td>
                            <td>

                                <a href="<?php echo base_url('Master/Speciality/'.$data_key['master_id']); ?>"><?php echo $data_key['master_text_about'] ?></a>

                            </td>
                        </tr>
                        </tbody>
                        <?php  }
                        ?>

                    </table>

                </div>
            </div>
        </div>
    </div>



</div>


<?php $this->load->view('Front/includes_for_whole_files/footer_menu'); ?>
