<?php
require_once '/modelos/conexion.php';
if($_POST['usuario']==null || $_POST['psswrd']==null){
    header("Location:logeo.php");
}else{
    $user=$_POST['usuario'];
    $password=$_POST['psswrd'];
}
$sql="SELECT * FROM dbo.Usuario WHERE Usuario='$user' AND PasswordU='$password'";
$res=sqlsrv_query($con,$sql);
//variables usuario
if (!$res) {
header("Location:logeo.php");
}
else{
$row=sqlsrv_fetch_array($res);
$usuarioSql=$row['Usuario'];
$psswrdSql=$row['PasswordU'];
    //consulta de registros
    if ($user == $usuarioSql && $password==$psswrdSql) {
        include '/modelos/header-session.php';
        $consulta2= "SELECT *FROM dbo.Marcaje_Academico";
        $res2=sqlsrv_query($con,$consulta2);
?>

<main class="main">
        <div class="contenedor">
            <div class="contenedor__secundario">
            <div class="titulos__curso">
                <h2>
                    Datos de Asistencia
                </h2>
            </div>
            <table class="table-dats">
            <tr>
                <td class="table-header">Carnet</td>
                <td class="table-header">Salon</td>
                <td class="table-header">Curso</td>
                <td class="table-header">Fecha y Hora</td>
            </tr>
                <tr>
<?php
    while($row2=sqlsrv_fetch_array($res2)){
            $Date = $row2['Hora_Registro']->format('d/m/Y h:m:s t');
            ?>
                 <td class="table-campo"><?php echo $row2['No_Carnet'];?></td>
                 <td class="table-campo"><?php echo $row2['No_Salon'];?></td>
                 <td class="table-campo"><?php echo $row2['No_Curso'];?></td>
                 <td class="table-campo"><?php echo $Date;?></td>
                </tr>
<?php
    }
?>
            </table>
        </div><!--DIV DE CONTENEDOR FIN-->
        </main>
<?php
        }
        else{
            header("Location:logeo.php");
        }
}
sqlsrv_close($con);