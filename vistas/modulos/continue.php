<?php
require_once 'datos.php';
?>
        <main class="main">
        <div class="contenedor">
            <div class="contenedor__secundario">
            <div class="titulos__curso">
                <h2>
                    Este eres tu?
                </h2>
            </div>
        <table class="table-dats">
        <tr>
            <td class="table-header">Nombre</td>
            <td class="table-header">Carnet</td>
            <td class="table-header">Facultad</td>
            <td class="table-header">Rol</td>
        </tr>
           <tr>
                <td class="table-campo"><?php echo $row['Nombreimp'];?></td>
                <td class="table-campo"><?php echo $row['No_Carnet'];?></td>
                <td class="table-campo"><?php echo $row['Facultad'];?></td>
                <td class="table-campo"><?php echo $rol;?></td>
            </tr>
        </table>
        <div class="separation-btn">
                <div class="div-dats">
                    <a class="boton__enviar" href="javascript: history.go(-1)">Volver</a>
                </div>
                <a href="verified.php?crn=<?php echo $carnet?>&lb=<?php echo $laboratorio;?>">
                    <button class="boton__enviar">Si Soy</button>
                </a>
        </div>

                </div>
                </div><!--DIV DE CONTENEDOR FIN-->
        </main>
