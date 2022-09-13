<?php
//includes
require_once '../includes/conexion.php';
//llamada a la variable global
$Carnet=$_GET['crn'];
$Laboratorio=$_GET['lb'];
//consulta para el ingreso de datos a tabla de asistencia
$sql1="INSERT INTO dbo.Marcaje_Academico (Hora_Registro, No_Carnet, No_Salon, No_Curso, Fec_Transac, Usuario) VALUES (GETDATE(), '$Carnet','$Laboratorio', '000001', GETDATE(),'Desarrollotec');";
$res4=sqlsrv_query($con,$sql1);
if($res4){
?>
    <body>
<?php
    include '../includes/header.php';
?>
        <main class="main">
            <div class="contenedor">
                <div class="contenedor__secundario">
                <div class="titulos__curso">
                    <h2>
                        ASISTENCIA MARCADA CON EXITO
                    </h2>
                </div>
                <div class="check">
                <img  class="check" src="../imgs/check.png" alt="Check">
                </div>
    
            <a class="boton__enviar" href="javascript: history.go(-2)">
                Volver
            </a>
                </div>
            </div>
        </main>
<?php
    include '../includes/footer.php';
    
    ?>
    </body>
<?php
}
else{
include '../includes/header.php';
?>
    <main class="main">
        <div class="contenedor">
            <div class="contenedor__secundario">
                <div class="contenedor__secundario--titulo">
                    <h1>Asistencia de Laboratorios</h1>
                </div>
            <div class="titulos__curso">
                <h2>
                    Error en la validacion
                </h2>
                <h3>
                    Porfavor verifica tu conexion y si tus datos son correctos.
                </h3>
            </div>
            </div>
        </div>
    </main>
<?php
include '../includes/footer.php';
}
sqlsrv_close($con); 