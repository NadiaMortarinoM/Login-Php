<?php
include 'conexionbase.php';

if (isset($_POST['login'])) {
    $usuario = $_POST['nombre'];
    $clave = $_POST['clave'];

    //Puse la condición de que los campos no estén vacios, porque al darle click automaticamente lo guarda a la base de datos:
    if ($usuario != "") {
        $nuevousuario = "INSERT INTO nuevosUsuarios (Usuario, Clave) VALUES ('$usuario', '$clave')";
        $insert = mysqli_query($conexion, $nuevousuario);
    }

    if ($insert) {

        echo '<script language="javascript">alert("Usuario creado con exito!");</script>';
    } else {

        echo    '<script language="javascript">alert("no se ha podido registrar, intentelo nuevamente!");</script>';
    }
}




?>