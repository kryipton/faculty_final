<?php foreach($last_events as $last_events_key){ ?>

    <li>

        <div class="event_txt" style="width: 100%!important;">
            <h5>
                <a class="c_hover_color" href="<?php

                if ($this->session->userdata("dil") == "az"){
                    echo base_url('az/Single_page_news/').$last_events_key['news_id'];
                }elseif ($this->session->userdata("dil") == "en"){
                    echo base_url('en/Single_page_news/').$last_events_key['news_id'];
                }elseif ($this->session->userdata("dil") == "ru"){
                    echo base_url('ru/Single_page_news/').$last_events_key['news_id'];
                }

                ?>"><b><?php

                        if ($this->session->userdata("dil") == "az"){
                            echo $last_events_key['news_title_az'];
                        }elseif ($this->session->userdata("dil") == "en"){
                            echo $last_events_key['news_title_en'];
                        }elseif ($this->session->userdata("dil") == "ru"){
                            echo $last_events_key['news_title_ru'];
                        }

                        ?></b></a>
            </h5>

            <span class="month" style="font-size: 12px"><?php echo $last_events_key['news_time'] ?></span>

            <hr class="c_hr2">

        </div>
    </li>


<?php } ?>