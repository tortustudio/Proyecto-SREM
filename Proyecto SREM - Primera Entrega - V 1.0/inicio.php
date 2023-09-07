<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Remises pocitos</title>
    <link rel="icon" href="img/Remises pocitos.png">
    <link rel="stylesheet" href="css/inicio.css">
</head>

<body>
    <script src="js/script_1.js"></script>
    <table class="navbar">
        <tr>
            <td width="50px"></td>
            <td width="10%">
                <img src="img/Remises pocitos.png" alt="" class="img1">
            </td>
            <td>
                <img src="img/hamburguesa.png" alt="" class="img2">
            </td>
            <td width="1250px"></td>
            <td>
                <div class="cardPerfil">
                    <img src="img/Perfil.png" class="imgPerfil">
                </div>
            </td>
            <td width="30px"></td>
            <td>
                <button class="btn2" id="mostrarModal">Salir</button>
            </td>
            <td width="50px"></td>
        </tr>
    </table>
    <br><br><br><br><br><br>
    <div class="contenedor">
        <div class="card">
            <img src="img/chofer.png" class="imgChofer">
            <p class="txt">Choferes</p>
        </div>
        <div class="card">
            <img src="img/cliente.png" class="imgCliente">
            <p class="txt">Cliente</p>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="card">
            <img src="img/viaje.png" class="imgViaje">
            <p class="txt">Viajes</p>
        </div>
        <div class="card">
            <img src="img/coche.png" class="imgCoche">
            <p class="txtCoche">Coches</p>
        </div>
        <div class="card">
            <img src="img/mantenimiento.png" class="imgMan">
            <p class="txtMan">Mantenimiento </p> <br>
            <p class="txtMan1"> de coches</p>
        </div>
    </div>

    <div id="miModal" class="modal">
        <div class="modal-contenido">
            <h2>Atencion!!</h2>
            <hr>
            <p>¿Esta seguro de que quiere salir?</p>
            <div class="modal-botones">
            <a href="inicio.php" class="btn5"><button id="Cancelar" class="btn3">Cancelar</button></a>
            <a href="index.php" class="btn5"><button id="Salir" class="btn4">Salir</button></a>
            </div>
        </div>
    </div>
</body>

</html>