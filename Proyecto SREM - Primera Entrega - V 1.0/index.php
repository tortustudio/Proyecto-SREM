<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Remises pocitos</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/Remises pocitos.png">
</head>

<body>
    <img src="img/Remises pocitos.png" class="img">
    <br><br><br><br>
    <div class="contenedor">
        <div class="card1">
            <form method="post" action="login.php">
                <br><br><br>
                <p class="txt1">
                    <label id="cedula" for="cedula">Ingrese su cédula</label>
                    <br><br>
                    <input id="input1" type="text" placeholder="cédula..." name="cedula" required>
                    <br><br>
                <p class="txt1">
                    <label id="contraseña" for="contraseña">Ingrese su Contraseña</label>
                    <br><br>
                    <input id="input1" type="password" placeholder="Contraseña..." maxlength="8" name="contraseña"
                        required>
                    <br><br><br><br>
                    <input type="submit" value="Acceder" class="btn1">
            </form>
            <?php
            if (isset($_SESSION['error']) && $_SESSION['error'] === "1") {
                echo "<p class='error'
                style='color: #cf4646;
                text-align: center;
                text-indent: 0px;
                padding: 0px;
                margin-left: 0px;
                '>Los datos ingresados son incorrecotos, intentelo de nuevo</p>";
                unset($_SESSION['error']);
            }
            ?>
        </div>
    </div>
</body>

</html>