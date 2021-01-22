<?php
include 'conexionbase.php';

if (isset($_POST['registro'])) {
    $usuario = $_POST['nombre'];
    $clave = $_POST['clave'];

    $consultasql = "SELECT * FROM nuevosUsuarios WHERE Usuario = '$usuario' AND Clave = '$clave'";

    $query = mysqli_query($conexion, $consultasql);

    $num_filas = mysqli_num_rows($query);

    var_dump($num_filas);

    if ($num_filas) {

        echo 'Te has logueado exitosamente 😊!';
    } else {
        echo '<script language="javascript">alert("El usuario y contraseña no están registrados aún 🙄");</script>';
    }
}

?>