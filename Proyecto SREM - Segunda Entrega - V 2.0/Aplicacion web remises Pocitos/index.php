<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Remises pocitos</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/Remises pocitos.png">
</head>

<body>
    <img src="img/Remises pocitos.png" class="img">
    <br>
    <div class="contenedor">
        <div class="card1">
            <form action="login.php" method="POST">
                <br><br><br><br>
                <p class="txt1">
                    <label for="ci" >Ingrese su cédula</label>
                    <br><br>
                    <input id="input1" type="text" placeholder="cédula..." name="ci" maxlength="8" required>
                    <br><br>
                <p class="txt1">
                    <label for="contrasena">Ingrese su Contraseña</label>
                    <br><br>
                    <input id="input2" type="password" placeholder="Contraseña..." name="contrasena"
                        maxlength="8" required>
                    <br><br><br>
                    <button action="login.php" class="btn1">Ingresar</button>
            </form>
            <?php
            if (isset($_SESSION['error']) && $_SESSION['error'] === "1") {
                echo "<p class='error1'
                style='color: #cf4646;
                text-align: center;
                text-indent: 0px;
                padding: 0px;
                margin-left: 0px;
                '>
                Los datos ingresados son incorrectos,
                <br> 
                inténtelo de nuevo</p>";
                unset($_SESSION['error']);
            }
            ?>
        </div>
        <div class="tortuStudio">
            <p class="txt"> Designed by: </p>
            <img class="img1" src="img/Logo Oficial TortuStudio.png" alt="">
            <p class="txt2">TortuStudio</p>
        </div>
    </div>
</body>

</html>
