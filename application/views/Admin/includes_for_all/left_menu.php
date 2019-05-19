
<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: inline-block; float: left;">
    <div class="row">

        <div class="left">
            <div class="userProfile">
                <span class="pull-right" style="margin-right: 10px;"><a href="<?php echo base_url('himalaY_secure_out')?>">Çıxış</a></span>
                <center>

                    <div class="imgPhoto">
                        <a href=""> <img src="<?php echo base_url("public/admin/img/admin.png")?>" alt=""></a>
                    </div>

                    <span class="adminText"><?php echo $this->session->userdata('user_mail') ?></span>

                </center>

            </div>
            <style>
                .a2:hover{
                    text-decoration: none;
                }
            </style>

            <a class="a2" href="<?php echo base_url('himalaY') ?>"><li class="a1">Dashboard</li></a>

            <a class="a2" href="<?php echo base_url('himalaY_haqqimizda') ?>"><li class="a1">Haqqımızda</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_loqo') ?>"><li class="a1">Loqo Və Başlıqı</li></a>

            <a class="a2" href="<?php echo base_url('himalaY_xeberler') ?>"><li class="a1">Xəbərlər</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_slider') ?>"><li class="a1">Slider</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_tedbirler') ?>"><li class="a1">Tədbirlər</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_link') ?>"><li class="a1">Linklər</li></a>

            <a class="a2" href="<?php echo base_url('himalaY_bakalavr') ?>"><li class="a1">Bakalavr</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_magistr') ?>"><li class="a1">Magistratura</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_doktorantura') ?>"><li class="a1">Doktorantura</li></a>


            <a class="a2" href="<?php echo base_url('himalaY_kafedralar') ?>"><li class="a1">Kafedralar(Adları)</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_muellimler') ?>"><li class="a1">Kafedralar(Müəllimlər)</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_laboratoriya') ?>"><li class="a1">Kafedralar(Laboratoriya)</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_ixtisaslar') ?>"><li class="a1">Kafedralar(Ixtisaslar)</li></a>





        </div>
    </div>
</div>










<script>


    $('.a1').on('mouseover',function () {
        $(this).css({
            'background':'#5BC0DE',
            'color':'white',
            'padding-left':'20px'

        })
    })
    $('.a1').on('mouseleave',function () {
        $(this).css({
            'background':'#222222',
            'color':'#909090',
            'padding-left':'10px'
        })
    })



</script>

