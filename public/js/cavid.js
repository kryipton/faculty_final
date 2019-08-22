
$(".c_href").click(function () {
    window.location.href = $(this).find(".c_href_a").attr("href")
});

$(".c_title_href").click(function () {
    window.location.href = $(this).data("url");
});

$(".c_location_new").click(function () {
    window.location.href = $(this).data("url");
});


$(document).scroll(function() {

    if($(document).scrollTop() > 90){

        $('.dropdown-content').css({
            "top" :  "40px",
        })
    }else{

        $('.dropdown-content').css({
            "top" :  "60px",
        })
    }


    if($(document).scrollTop() > 50){
        $('.dropbtn').css({
            "padding" :  "20px 0 20px",
        });



    }else{
        $('.dropbtn').css({
            "padding" :  "32px 0 33px",
        });

     

    }

});

$(".c_text").click(function () {
    window.location.href = $(this).data("url");
});