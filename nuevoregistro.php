<?php
include 'conexionbase.php';

if (isset($_POST['login'])) {
    $usuario = $_POST['nombre'];
    $clave = $_POST['clave'];

    if ($usuario != "") {
        $nuevousuario = "INSERT INTO nuevosUsuarios (Usuario, Clave) VALUES ('$usuario', '$clave')";
        $insert = mysqli_query($conexion, $nuevousuario);
    }

    if ($insert) {

        echo '<script language="javascript">alert("Usuario creado con exito!");</script>';
        echo "<script> window.location='plataforma.php'; </script>";
        
    } else {

        echo    '<script language="javascript">alert("no se ha podido registrar, intentelo nuevamente!");</script>';
    }
}

?>