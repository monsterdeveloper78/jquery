$(document).ready(function () {
    // id selectors
    $("#Button_1").click(function () {
        $("#IdSelector").fadeOut(3000);
    });
    // class selectors
    $("#Button_2").click(function () {
        $(".well").fadeOut(3000);
    });
    // all selectors
    $("#Button_3").click(function () {
        $("*").fadeOut(3000);
    });
    // contain attribute selectors
    $("#Button_4").click(function () {
        $("[testAttribute*='containSelector']").fadeOut(3000);
    });
    // exact attribute selectors
    $("#Button_5").click(function () {
        $("[testAttribute~='exactSelector']").fadeOut(3000);
    });
    // endWith attribute
    $("#Button_6").click(function () {
        $("[testAttribute$='in']").fadeOut(3000);
    });
    // equal attribute
    $("#Button_7").click(function () {
        $("[testAttribute='amir']").fadeOut(3000);
    });
    // startWith attribute
    $("#Button_8").click(function () {
        $("[testAttribute^='mm']").fadeOut(3000);
    });
})