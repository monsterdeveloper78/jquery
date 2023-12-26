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
    // input type attribute
    $("#Button_9").click(function () {
        $(":button").fadeOut(3000);
    });
    // input type attribute
    $("#Button_10").click(function () {
        $(":checkbox").fadeOut(3000);
    });
    // parent != descendant
    $("#Button_11").click(function () {
        $("#parent > p.test").fadeOut(3000);
    });
    // contains
    $("#Button_12").click(function () {
        $("#test:contains('amir')").fadeOut(3000);
    });
    // descendant != parent
    $("#Button_13").click(function () {
        $("#descendantId p").fadeOut(3000);
    });
    // input type attribute
    $("#Button_14").click(function () {
        $("input:disabled").fadeOut(3000);
    });
    // input type attribute
    $("#Button_15").click(function () {
        $("input:enabled").fadeOut(3000);
    });
    // empty
    $("#Button_16").click(function () {
        $("div:empty ").fadeOut(3000);
    });
    // index eq
    $("#Button_17").click(function () {
        $("#indexSelector p:eq(2)").fadeOut(3000);
    });
    // even index eq
    $("#Button_18").click(function () {
        $("#evenSelector p:even").fadeOut(3000);
    });
    // file
    $("#Button_19").click(function () {
        $("#fileSelector :file ").fadeOut(3000);
    });
    // first child
    $("#Button_20").click(function () {
        $("#childSelector p:first-child ").fadeOut(3000);
    });
    // first type of ( first type select all first elements in all parent ) != first-child
    $("#Button_21").click(function () {
        $(".firstTypeSelector p:first-of-type ").fadeOut(3000);
    });
    //first element
    $("#Button_22").click(function () {
        $("#firstSelector p:first ").fadeOut(3000);
    });
//first element
    $("#Button_23").click(function () {
        $("#greaterThanSelector p:gt(1) ").fadeOut(3000);
    });

})