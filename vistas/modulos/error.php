<?php
require_once 'datos.php';
include '../includes/header.php';
        ?>
        <main class="main">
        <div class="contenedor">
            <div class="contenedor__secundario">
            <div class="titulos__curso">
                <h2>
                    No ingresaste bien tus datos
                </h2>
            </div>
            <h1>No ingresaste un carnet existente <br>
            Por favor regresa y vuelve a ingresar tus datos</h1>
        <div class="div-dats">
            <a class="boton__enviar" href="javascript: history.go(-1)">Volver</a>
        </div><!--DIV DE CONTENEDOR FIN-->
        </main>
        <?php
        include '../includes/footer.php';