//Close mobile menu on click
$(function () {
    $(".navbar-collapse ul li a").on("click touch", function () {
        $(".navbar-toggle").click();
    });
});

function sendMail() {
    var mensaje = $("#mensaje").val();

    $(location).attr('href', 'mailto:example@example.com?subject='
    + encodeURIComponent("Alkimia Contacto")
    + "&body=" 
    + encodeURIComponent(mensaje)
    );
}