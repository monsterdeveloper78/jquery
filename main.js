$(document).ready(function () {
    $("#Button_1").click(function () {
        $("#IdSelector").fadeOut(3000);
    });
    $("#Button_2").click(function () {
        $(".well").fadeOut(3000);
    })
    $("#Button_3").click(function () {
        $("*").fadeOut(3000);
    })
})