<?php
require_once '../modelos/conexion.php';
$carnet=$_POST['carnet'];
$laboratorio=$_POST['laboratorio'];
if (strlen($carnet)<7 ) {
    header("Location:g301.php");
}
else{
    $sql="SELECT * FROM dbo.Carnet_Identificacion WHERE No_Carnet = '$carnet' ";
    $res=sqlsrv_query($con,$sql);
}
try{
if (!$res) {
    include 'error.php';
    //header("Location:g301.php");
}
else{
    $row = sqlsrv_fetch_array($res);
    $tipoPersona=isset($row['Tipo_Persona']);
    $carnetIdParaBusqueda=isset($row['ID_Trans']);
}
    if($tipoPersona == null || $carnetIdParaBusqueda== null) {
        include 'error.php';
    }
    else {
        if ($row['Tipo_Persona'] == 1) {
            $rol="Administrativo";
        } else if ($row['Tipo_Persona'] == 2) {
            $rol="Estudiante";
        }
        else if($row['Tipo_Persona'] == 3){
            $rol="Catedratico";
        }
        include 'continue.php';
    }
}
catch(Exception $e){
 echo "error: ".$e;
}
sqlsrv_close($con);


