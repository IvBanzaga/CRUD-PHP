<?php
include 'includes/modal-registro.html'; // Incluyo el dialogo para mostrar mensajes.
include 'includes/head.php';
?>

<section class="container">

        <h4>Cuenta de Vendedor</h4>
        <br><br>
        <div id="view1">
                <form class="row" action="includes/registrar_usuario.php" method="post" enctype="multipart/form-data" onsubmit="return checkpass()">

                        <div class="col">
                                <label><input type="text" name="nombre" required> Nombre</label>
                                <br><br>
                                <label><input type="text" name="apellido1" required> Apellido 1</label>
                                <br><br>
                                <label><input type="text" name="apellido2"> Apellido 2</label>
                                <br><br>
                                <label><input type="number" name="telefono" required> Teléfono</label>
                                <br><br>
                                <label><input type="email" name="email" required> E-mail</label>
                                <br><br>
                        </div>

                        <div class="col">
                                <label><input id="pass1" type="password" name="pass" onkeypress="showEye(1)" required> Contraseña</label>
                                <small onclick="spy(1)" class="far fa-eye" id="toggle1" style="margin-left: -140px; cursor: pointer; visibility: hidden;"></small>
                                <br><br>
                                <label><input id="pass2" type="password" onkeypress="showEye(2)" required> Repite Contraseña</label>
                                <small onclick="spy(2)" class="far fa-eye" id="toggle2" style="margin-left: -205px; cursor: pointer; visibility: hidden;"></small>
                                <br><br>
                                <input name="registrar" type="submit" value="Registrar Vendedor" class="btn btn-success">

                        </div>



                </form>
        </div>

</section>