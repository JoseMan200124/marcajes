<?php 

$serverName="localhost";
$conexion=array(
    "Database"=>"basePruebas",
    "UID"=>"root",
    "PWD"=>"root",
    "CharacterSet"=>"UTF-8"
);

$con=sqlsrv_connect($serverName,$conexion);