$(document).ready(function () {
    $("body").on("click", function () {
        console.log($("#menu-acciones").hasClass("visible"));
        if ($("#menu-acciones").hasClass("visible") == true) {
            $("#menu-acciones").removeClass("visible");
        }
    });

    $("#btn-verAcciones").on("click", function () {
        setTimeout(() => {
            $("#menu-acciones").addClass("visible");
        }, 5);
    });
});