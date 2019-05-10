

 <div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">
    <div style="min-height: 450px;padding: 20px 0px 0px 10px">



<!--        sol terefde olan linkler-->
            <div class="category_course about_left_b">
                <h4>Kimya texnologiya fakültəsi</h4>
                <ul>
                    <li><a href="<?php echo base_url('About'); ?>">Ümumi məlumat</a></li>
                    <li><a href="<?php echo base_url('Labaratory'); ?>">Laboratoriyalar</a></li>
<!--                    <li><a href="--><?php //echo base_url('Home/links'); ?><!--">Faydalı linklər</a></li>-->
<!--                    <li><a href="--><?php //echo base_url('home/teacher') ?><!--">Müəllimlər</a></li>-->
                </ul>
            </div>
<!--        sol terefde olan linkler-->



<!--        sol terefde olan diger tedbirler -->
            <div class="category_events about_left_e">
                    <h4>Tədbirlər</h4>
                    <ul>


<!--                        burada diger tedbirler foreache salinir-->
                        <?php foreach($last_events as $last_events_key){ ?>

                            <li>
                                <a href="<?php echo base_url('Single_page_events/').$last_events_key['event_id']?>">

                                    <div class="date">
                                        <img style="width: 100%" src="<?php echo base_url('upload/event_images/'.$last_events_key['event_img']) ?>" alt="">
                                    </div>

                                </a>
                                <div class="event_txt">
                                    <h5>
                                        <a href="<?php echo base_url('Single_page_events/').$last_events_key['event_id']?>">
                                            <?php echo $last_events_key['event_title_az'] ?>
                                        </a>
                                    </h5>
                                    <p> <?php echo substr($last_events_key['event_desc_az'], 0,50) ?></p>
                                    <span class="month" style="font-size: 12px"><?php echo $last_events_key['event_time'] ?></span>
                                </div>
                            </li>


                        <?php } ?>
<!--                        burada diger tedbirler foreache salinir-->


                    </ul>
                </div>
<!--        sol terefde olan diger tedbirler -->


    </div>





 </div>



