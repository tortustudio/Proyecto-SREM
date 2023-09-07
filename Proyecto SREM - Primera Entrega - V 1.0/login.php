<?php
                session_start();
$cedula = '';
$contraseña = '';

if (!empty($_POST['cedula']) && !empty($_POST['contraseña'])) {
    $cedula = $_POST['cedula'];
    $contraseña = $_POST['contraseña'];
    if (
        $cedula == "55319765" && $contraseña == "11111111" ||
        $cedula == "56191043" && $contraseña == "22222222" ||
        $cedula == "55774272" && $contraseña == "33333333"
    ) {
        header("Location: inicio.php");
        exit();
    } else {
        if (
            $cedula == "54152742" && $contraseña == "88888888" ||
            $cedula == "55776032" && $contraseña == "87654321"
        ) {
            header("Location: inicioAdm.php");
            exit();
        } else {
            if (
                $cedula != "55319765" && $contraseña != "11111111" ||
                $cedula != "56191043" && $contraseña != "22222222" ||
                $cedula != "55774272" && $contraseña != "33333333" ||
                $cedula != "54152742" && $contraseña != "88888888" ||
                $cedula != "55776032" && $contraseña != "87654321"
            ) {
                $_SESSION['error'] = "1";
                header("Location: index.php");
                exit();
        }
    }
}
}
?>