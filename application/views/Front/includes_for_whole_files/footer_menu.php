<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 coppyright_txt">
                <?php echo $this->lang->line("footer");?>
               <a href="http://www.pixxett.com/" target="_blank">  </a></div>
           

        </div>
    </div>
</div>

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

<!-- Mirrored from www.pixxett.com/htmldemos/learnmate/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2017 10:41:22 GMT -->
</html>
