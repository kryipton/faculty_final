<?php foreach($last_events as $last_events_key){ ?>

    <li>
        <a href="<?php

        if ($this->session->userdata("dil") == "az"){
            echo base_url('az/Single_page_events/').$last_events_key['event_id'];
        }elseif ($this->session->userdata("dil") == "en"){
            echo base_url('en/Single_page_events/').$last_events_key['event_id'];
        }elseif ($this->session->userdata("dil") == "ru"){
            echo base_url('ru/Single_page_events/').$last_events_key['event_id'];
        }

        ?>">

            <div class="date">
                <img style="width: 100%" src="<?php echo base_url('upload/event_images/'.$last_events_key['event_img']) ?>" alt="">
            </div>

        </a>
        <div class="event_txt">
            <h5>
                <a href="<?php

                if ($this->session->userdata("dil") == "az"){
                    echo base_url('az/Single_page_events/').$last_events_key['event_id'];
                }elseif ($this->session->userdata("dil") == "en"){
                    echo base_url('en/Single_page_events/').$last_events_key['event_id'];
                }elseif ($this->session->userdata("dil") == "ru"){
                    echo base_url('ru/Single_page_events/').$last_events_key['event_id'];
                }

                ?>"><b><?php



                        if ($this->session->userdata("dil") == "az"){
                            echo substr($last_events_key['event_title_az'],0,50);
                        }elseif ($this->session->userdata("dil") == "en"){
                            echo substr($last_events_key['event_title_en'],0,50);
                        }elseif ($this->session->userdata("dil") == "ru"){
                            echo substr($last_events_key['event_title_ru'],0,50);
                        }

                        ?></b></a>
            </h5>
            <p> <?php

                if ($this->session->userdata("dil") == "az"){
                    echo substr($last_events_key['event_desc_az'], 0,50);
                }elseif ($this->session->userdata("dil") == "en"){
                    echo substr($last_events_key['event_desc_en'], 0,50);
                }elseif ($this->session->userdata("dil") == "ru"){
                    echo substr($last_events_key['event_desc_ru'], 0,50);
                }

                ?></p>
            <span class="month" style="font-size: 12px"><?php echo $last_events_key['event_time'] ?></span>
        </div>
    </li>


<?php } ?>