<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Remises pocitos</title>
    <link rel="icon" href="img/Remises pocitos.png">
    <link rel="stylesheet" href="css/inicio.css">
</head>

<body>

    <table class="navbar">
        <tr>
            <td width="50px"></td>
            <td width="10%">
                <img src="img/Remises pocitos.png" alt="" class="img1">
            </td>
            <td>
                <div class="dropdown" title="Expandir">
                    <button class="dropdown-toggle"><img src="img/hamburguesa.png" alt="" class="img2"></button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-op1">
                            <a href="#" id="showButtons">Choferes</a>
                            <div id="buttonContainer" class="hidden">
                                <a href="ver_Chofer.php" class="dropdown-op">Ver choferes</a>
                                <a href="agregarChofer.php" class="dropdown-op">Agregar choferes</a>
                            </div>
                        </li>
                        <li class="dropdown-op1">
                            <a href="#" id="showButtons1">Clientes</a>
                            <div id="buttonContainer1" class="hidden1">
                                <a href="ver_Cliente.php" class="dropdown-op">Ver cliente</a>
                                <a href="agregarCliente.php" class="dropdown-op">Agregar cliente</a>
                            </div>
                        </li>
                        <li class="dropdown-op1">
                            <a href="#" id="showButtons2">Viajes</a>
                            <div id="buttonContainer2" class="hidden2">
                                <a href="ver_Viajes.php" class="dropdown-op">Ver viajes</a>
                                <a href="agregarViajes.php" class="dropdown-op">Agregar viajes</a>
                            </div>
                        </li>
                        <li class="dropdown-op1">
                            <a href="#" id="showButtons3">Coches</a>
                            <div id="buttonContainer3" class="hidden3">
                                <a href="ver_Coche.php" class="dropdown-op">Ver coches</a>
                                <a href="agregarCoche.php" class="dropdown-op">Agregar coches</a>
                            </div>
                        </li>
                        <li class="dropdown-op2">
                            <a href="#" id="showButtons4">Mantenimiento de coches</a>
                            <div id="buttonContainer4" class="hidden4">
                                <a href="ver_ManCoche.php" class="dropdown-op">Ver coches en mantenimiento</a>
                                <a href="agregarManCoche.php" class="dropdown-op">Agregar coches en mantenimiento</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <script src="js/hamburguesa2.js"></script>
            </td>
            <td width="1250px"></td>
            <td title="Editar perfil">
                <a href="editar_perfil.php">
                    <div class="cardPerfil">
                        <a href="editar_perfil.php"><img src="img/Perfil.png" class="imgPerfil">
                    </div>
                </a>
            </td>
            <td width="30px"></td>
            <td>
                <button class="btn2" id="mostrarModal">Salir</button>
            </td>
            <td width="50px"></td>
        </tr>
    </table>
    <br><br><br><br>
    <div class="contenedor">
    <a href="#" class="links modal-button" data-modal-id="modal2" title="Choferes">
            <div class="card">
                <img src="img/chofer.png" class="imgChofer">
                <p class="txt">Choferes</p>
            </div>
        </a>
        <a href="#" class="links modal-button" data-modal-id="modal3" title="Clientes">
            <div class="card">
                <img src="img/cliente.png" class="imgCliente">
                <p class="txt">Cliente</p>
            </div>
        </a>
        <a href="#" class="links modal-button" data-modal-id="modal4" title="Viajes">
            <div class="card">
                <img src="img/viaje.png" class="imgViaje">
                <p class="txt">Viajes</p>
            </div>
        </a>
        <a href="#" class="links modal-button" data-modal-id="modal5" title="Coches">
            <div class="card">
                <img src="img/coche.png" class="imgCoche">
                <p class="txtCoche">Coches</p>
            </div>
        </a>
        <a href="#" class="links modal-button" data-modal-id="modal6" title="Mantenimiento de coches">
            <div class="card">
                <img src="img/mantenimiento.png" class="imgMan">
                <p class="txtMan">Mantenimiento </p> <br>
                <p class="txtMan1"> de coches</p>
            </div>
        </a>
    </div>
    </div>


    <div id="modal1" class="modal">
    <div class="modal-content3">
    <span class="close">&times;</span>
                <h2 class= "quehacer">¿Qué desea hacer?</h2>
                <hr>
                <a href="ver_Emp.php"><button id="btn9">Ver empleados</button></a>
                <a href="agregarEmp.php"><button id="btn10">Agregar empleado</button></a>
    </div>
  </div>

  <div id="modal2" class="modal">
    <div class="modal-content3">
    <span class="close">&times;</span>
                <h2 class= "quehacer">¿Qué desea hacer?</h2>
                <hr>
                <a href="ver_Chofer.php"><button id="btn9">Ver Choferes</button></a>
                <a href="agregarChofer.php"><button id="btn10">Agregar Chofer</button></a>
    </div>
  </div>

  <div id="modal3" class="modal">
    <div class="modal-content3">
    <span class="close">&times;</span>
                <h2 class= "quehacer">¿Qué desea hacer?</h2>
                <hr>
                <a href="ver_Cliente.php"><button id="btn9">Ver clientes</button></a>
                <a href="agregarCliente.php"><button id="btn10">Agregar cliete</button></a>
    </div>
  </div>
  <div id="modal4" class="modal">
    <div class="modal-content3">
    <span class="close">&times;</span>
                <h2 class= "quehacer">¿Qué desea hacer?</h2>
                <hr>
                <a href="ver_Viajes.php"><button id="btn9">Ver viajes</button></a>
                <a href="agregarViajes.php"><button id="btn10">Agregar viajes</button></a>
    </div>
  </div>

  <div id="modal5" class="modal">
    <div class="modal-content3">
    <span class="close">&times;</span>
                <h2 class= "quehacer">¿Qué desea hacer?</h2>
                <hr>
                <a href="ver_Coche.php"><button id="btn9">Ver coches</button></a>
                <a href="agregarCoche.php"><button id="btn10">Agregar coche</button></a>    
    </div>
  </div>

  <div id="modal6" class="modal">
    <div class="modal-content3">
    <span class="close">&times;</span>
                <h2 class= "quehacer">¿Qué desea hacer?</h2>
                <hr>
                <a href="ver_ManCoche.php"><button id="btn9">Ver Man. de Coches</button></a>
                <a href="agregarManCoche.php"><button id="btn10">Agregar Man. de Coche</button></a>
    </div>
  </div>


    <div id="miModal" class="modal">
        <div class="modal-contenido">
            <h2>¡¡¡Atención!!!</h2>
            <hr>
            <p>¿Está seguro de que quiere salir?</p>
            <div class="modal-botones">
                <a href="inicio.php" class="btn5"><button id="Cancelar" class="btn3">Cancelar</button></a>
                <a href="index.php" class="btn5"><button id="Salir" class="btn4">Salir</button></a>
            </div>
        </div>
    </div>
    <script src="js/ver_agregar.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/script_salir.js"></script>
</body>

</html>