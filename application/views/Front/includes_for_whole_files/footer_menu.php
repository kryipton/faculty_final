<!--footer start-->
<section>



    <div class="col-md-12 hidden-sm hidden-xs backgroun ">
        <div class="row">
            <div class="container  ">

                <!--                        <div class="row">-->

                <div class="footerLogo ">

                    <center>
                        <ul>
                            <li>
                                <a style="float: right;" href="http://president.az/" class="footer_logo_special">
                                    <img class="c_president_image" src="http://asoiu.edu.az/images/president.png" alt="">
                                    <span class="c_president">President.az</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://www.mehriban-aliyeva.az/">
                                    <img src="http://asoiu.edu.az/images/mehriban.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="http://heydar-aliyev-foundation.org/az">
                                    <img src="http://asoiu.edu.az/images/fond.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="http://edu.gov.az/az">
                                    <img src="http://asoiu.edu.az/images/tehsil.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="http://www.tqdk.gov.az/">
                                    <img src="http://asoiu.edu.az/images/tqdk.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="http://www.maarifci.az/">
                                    <img src="http://asoiu.edu.az/images/maarif.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="http://azerbaijan.az/portal/index_a.html?lang=az">
                                    <img src="http://asoiu.edu.az/images/azer.az.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="http://www.virtualkarabakh.az/">
                                    <img src="http://asoiu.edu.az/images/virtual.png" alt="">
                                </a>
                            </li>

                        </ul>
                    </center>

                </div>
                <!--                        </div>-->
                <hr>
            </div>
        </div>
    </div>


</section>
<!--footer end-->




<?php $this->load->view('Front/includes_for_whole_files/scripts'); ?>


</body>

<script>
    $(document).scroll(function() {

        if($(document).scrollTop() > 90){
            $('.logoIMG').css({
                'width':'100px',
                'background':'white',
                'transition':'0.3s linear'
            })
        }else{
            $('.logoIMG').css({
                'width':'400px',
                'background':'white',
                'transition':'0.3s linear'
            })
        }

    })
</script>

</html>
