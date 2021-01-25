<?php
include 'conexionbase.php';

if (isset($_POST['registro'])) {
    $usuario = $_POST['nombre'];
    $clave = $_POST['clave'];

    $consultasql = "SELECT * FROM nuevosUsuarios WHERE Usuario = '$usuario' AND Clave = '$clave'";

    $query = mysqli_query($conexion, $consultasql);

    $num_filas = mysqli_num_rows($query);

  

    if ($num_filas) {

        echo "<script> window.location='plataforma.php'; </script>";
    } else {
        echo '<script language="javascript">alert("El usuario y contraseña no están registrados aún 🙄");</script>';
    }
}

?>