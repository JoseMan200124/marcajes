<?php 
try{
    $serverName="localhost";
    $conexion=array(
        "Database"=>"basePruebas",
        "UID"=>"root",
        "PWD"=>"root",
        "CharacterSet"=>"UTF-8"
    );
    
    $con=sqlsrv_connect($serverName,$conexion);
}catch(PDOException $exp){
echo 'No se logró conectar a la base de datos';
}
