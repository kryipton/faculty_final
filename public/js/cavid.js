$(".c_href").click(function () {
    window.location.href = $(this).find(".c_href_a").attr("href")
});