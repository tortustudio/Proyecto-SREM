<?php
require_once 'conexSql.php';

session_start();
$ci = $_POST['ci'];

if ($ci === $_SESSION['ci']) {
    echo 'error: No puedes eliminar tu propio usuario.';
} else { 
    $query = "DELETE Usuarios, Usuarios_tel FROM Usuarios JOIN Usuarios_tel ON Usuarios.ci = Usuarios_tel.ci WHERE Usuarios.ci = '$ci'";
    $result = mysqli_query($conn, $query);
        echo 'eliminacion_exitosa';
    }

?>
