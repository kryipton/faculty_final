


<!--            <div class="adminPanel">ADMIN PANEL</div>-->
<!--            <div class="user"></div>-->



<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: inline-block; float: left;">
    <div class="row">

        <div class="left">
            <div class="userProfile">
                <span class="pull-right" style="margin-right: 10px;"><a href="<?php ?>">Cixis</a></span>
                <center>

                    <div class="imgPhoto">
                        <img src="<?php echo base_url("public/admin/img/admin.png") ?>" alt="">
                    </div>

                    <span class="adminText">Admin</span>

                </center>

            </div>
            <style>
                .a2:hover{
                    text-decoration: none;
                }
            </style>

            <a class="a2" href="<?php echo base_url('himalaY') ?>"><li class="a1">Dashboard</li></a>

            <a class="a2" href="<?php echo base_url('himalaY_haqqimizda') ?>"><li class="a1">Haqqımızda</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_elaqe') ?>"><li class="a1">Əlaqə</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_loqo') ?>"><li class="a1">Loqo Və Başlıqı</li></a>

            <a class="a2" href="<?php echo base_url('himalaY_xeberler') ?>"><li class="a1">Xəbərlər</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_slider') ?>"><li class="a1">Slider</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_tedbirler') ?>"><li class="a1">Tədbirlər</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_link') ?>"><li class="a1">Linklər</li></a>

            <a class="a2" href="<?php echo base_url('himalaY_bakalavr') ?>"><li class="a1">Bakalavr</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_magistr') ?>"><li class="a1">Magistratura</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_doktorantura') ?>"><li class="a1">Doktorantura</li></a>


            <a class="a2" href="<?php echo base_url('himalaY_kafedralar') ?>"><li class="a1">Kafedralar</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_kafedralar_haqqinda') ?>"><li class="a1">Kafedralar(Haqqında)</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_kafedralar_elaqe') ?>"><li class="a1">Kafedralar(Əlaqə)</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_muellimler') ?>"><li class="a1">Kafedralar(Müəllimlər)</li></a>
            <a class="a2" href="<?php echo base_url('himalaY_laboratoriya') ?>"><li class="a1">Kafedralar(Laboratoriya)</li></a>





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

