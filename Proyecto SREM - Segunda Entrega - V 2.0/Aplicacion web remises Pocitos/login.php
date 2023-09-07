<?php
session_start();
require_once('conexSql.php'); 

$ci = $_POST['ci'];
$contrasena = $_POST['contrasena'];

$query = "SELECT * FROM Usuarios WHERE ci = '$ci' AND contrasena = '$contrasena'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['ci'] = $row['ci'];
    $_SESSION['tipo'] = $row['tipo'];
    
    if ($_SESSION['tipo'] == 'Administrador') {
        header("Location: inicioAdm.php");
    } else if ($_SESSION['tipo'] =='Administrativo') {
        header("Location: inicio.php");
    }
} else {
    $_SESSION['error'] = "1";
    header("Location: index.php");
    exit();
}
?>
