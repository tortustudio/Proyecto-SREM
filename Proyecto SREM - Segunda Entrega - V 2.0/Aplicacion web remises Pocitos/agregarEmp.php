<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Remises pocitos</title>
    <link rel="icon" href="img/Remises pocitos.png">
    <link rel="stylesheet" href="css/inicioAdm.css">
</head>

<body>
    <script src="js/script_salir.js"></script>
    <table class="navbar">
        <tr>
            <td width="50px"></td>
            <td width="10%">
                <a href="inicioAdm.php" title="Volver a inicio"><img src="img/Remises pocitos.png" alt="" class="img1"></a>
            </td>
            <td>
                <div class="dropdown" title="Expandir">
                    <button class="dropdown-toggle"><img src="img/hamburguesa.png" alt="" class="img2"></button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-op1">
                            <a href="#" id="showButtons">Empleados</a>
                            <div id="buttonContainer" class="hidden">
                                <a href="ver_emp.php" class="dropdown-op">Ver empleados</a>
                                <a href="agregarEmp.php" class="dropdown-op">Agregar empleados</a>
                            </div>
                        </li>
                        <li class="dropdown-op1">
                            <a href="#" id="showButtons1">Choferes</a>
                            <div id="buttonContainer1" class="hidden1">
                                <a href="ver_Chofer.php" class="dropdown-op">Ver choferes</a>
                                <a href="agregarChofer.php" class="dropdown-op">Agregar choferes</a>
                            </div>
                        </li>
                        <li class="dropdown-op1">
                            <a href="#" id="showButtons2">Clientes</a>
                            <div id="buttonContainer2" class="hidden2">
                                <a href="ver_Cliente.php" class="dropdown-op">Ver cliente</a>
                                <a href="agregarCliente.php" class="dropdown-op">Agregar cliente</a>
                            </div>
                        </li>
                        <li class="dropdown-op1">
                            <a href="#" id="showButtons3">Viajes</a>
                            <div id="buttonContainer3" class="hidden3">
                                <a href="ver_Viajes.php" class="dropdown-op">Ver viajes</a>
                                <a href="agregarViajes.php" class="dropdown-op">Agregar viajes</a>
                            </div>
                        </li>
                        <li class="dropdown-op1">
                            <a href="#" id="showButtons4">Coches</a>
                            <div id="buttonContainer4" class="hidden4">
                                <a href="ver_Coche.php" class="dropdown-op">Ver coches</a>
                                <a href="agregarCoche.php" class="dropdown-op">Agregar coches</a>
                            </div>
                        </li>
                        <li class="dropdown-op2">
                            <a href="#" id="showButtons5">Mantenimiento de coches</a>
                            <div id="buttonContainer5" class="hidden5">
                                <a href="ver_ModCoche.php" class="dropdown-op">Ver coches en mantenimiento</a>
                                <a href="agregarModCoche.php" class="dropdown-op">Agregar coches en mantenimiento</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <script src="js/hamburguesa2.js"></script>
            </td>
            <td width="1370px"></td>
            <td>
                <button class="btn2" id="mostrarModal">Salir</button>
            </td>
            <td width="50px"></td>
        </tr>
    </table>
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
    <script src="js/jquery.min.js"></script>

    <form method="POST" action="guardarEmp.php">
        <div class="contenedor">
            <div class="card3">
                <br><br><br>
                <label class="lebel" title="Tipo">Tipo de usuario</label>
                <br><br>
                <select name="tipo" id="tipo" class="input2" required>
                    <option value="" disable selected> -- seleccione el tipo de usuario -- </option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Administrador">Administrador</option>
                </select>
                <br><br>
                <label class="lebel" title="Nombre">Nombre del usuario</label>
                <br><br>
                <input type="text" id="nom_usu" class="input1" placeholder="Nombre..." maxlength="10" required />
                <br><br>
                <label class="lebel" title="Apellido">Apellido del usuario</label>
                <br><br>
                <input type="text" id="apellido" class="input1" placeholder="Apellido..." maxlength="10" required />
                <br><br>
            </div>
            <div class="card3">
                <br><br><br>
                <label class="lebel" title="Cédula">Cédula del usuario</label>
                <br><br>
                <input type="text" id="ci" class="input1" maxlength="11" placeholder="x.xxx.xxx-x"required />
                <br><br>
                <label class="lebel"  title="Contraseña">Contraseña</label>
                <br><br>
                <input type="text" id="contrasena" class="input1" maxlength="8" placeholder="Contraseña..." required />
                <br><br>
                <label class="lebel" title="Teléfono">Teléfono</label>
                <br><br>
                <input type="text" id="tel" class="input1" maxlength="11" placeholder="xxx-xxx-xxx"
                    oninput="formatoTelefono(this)" required />
                <br><br>
            </div>
                    <button type="button" id="save" class="btn1" title="Agregar"> Agregar empleado</button>
        </div>
        <br><br><br>

    </form>


    <script src="js/cedula.js"></script>
    <script src="js/formatoTel.js"></script>
    <script src="js/empleados.js"></script>


</body>

</html>