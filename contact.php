<?php
$name = addslashes ($_POST['name']);
$mensaje = addslashes ($_POST['mensaje']);
        
//Mensaje de contacto
$cabeceras = "From: Alkimia"
 . "Reply-To: $email";
$asunto = "Mensaje desde la pagina Web";
$email_to = "cynthia.villalobos@economia.gob.mx";
$contenido = "$nombre ha enviado un mensaje desde la web www.alkimiamobile.com.mx\n"
. "Nombre: $name\n"
. "Mensaje: $mensaje\n";

//Enviamos y resultados del mensaje
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {

//Confirmación mensaje Ok
echo "<script language= 'javascript'>
alert('Su mensaje se envió correctamente, en la brevedad nos pondremos en contacto con usted.');
window.location.href = 'index.html';
</script>";
}else{
//Error en el envió
    echo "<script language= 'javascript'>
alert('Error: Su mensaje no pudo ser enviado, intente nuevamente');
window.location.href = 'index.html';
</script>";
}
?>