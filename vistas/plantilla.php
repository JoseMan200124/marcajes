<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEC-MARCAJES</title>
    <?php
$url = ruta::ctrRuta();
?>
    <!--Preloads para css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $url;?>vistas/css/style.css">
    <link rel="preload" href="<?php echo $url;?>vistas/css/styles.css" as="style">
    <link rel="stylesheet" type="text/css" href="<?php echo $url;?>vistas/css/normalize.css" >
    <link rel="preload" href="<?php echo $url;?>vistas/css/normalize.css" as="style">
    <!--gOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <!--icono-->
    <link rel="icon" href="<?php echo $url;?>vistas/img/url-icon.jpg">
</head>
 
<header class="header">
        <!--Imagen del logo-->
        <div>
        <img class="logo-marcajes" src="<?php echo $url;?>vistas/img/Marcajes-logo.png" alt="LOGO">
        </div>
    </header>


<body>
   <?php
   
    $ruta = null;
    $inicio = true; 

    if(isset($_GET["ruta"])){
        $ruta = $_GET["ruta"];
        if($ruta == "g301"){
            include "modulos/g301.php";
            $inicio = false;
        }
        else if($ruta == "g302"){
            include "modulos/g302.php";
            $inicio = false;
        }
        
    }
    if ($inicio) {
        include "modulos/welcome.php";

    }

   ?>
</body>



    <footer class="footer">
        <div class="logos__universidad">
            <div class="logos__universidad--div">
                <img src="<?php echo $url;?>vistas/img/logo-URL.webp" alt="LOGO-URL" class="logo">
            </div>
            <div class="logos__universidad--div">
                <img src="<?php echo $url;?>vistas/img/logo-VRIP.webp" alt="LOGO-VRIP"class="logo">
            </div>
            <div class="logos__universidad--div">
                <img src="<?php echo $url;?>vistas/img/logo-TEC.webp" alt="LOGO-TEC"class="logo">
            </div>
        </div>
        <div class="informacion">
            <p >
                PBX: 2426-2626, ext.: 3070 <br>Vista Hermosa III, Campus Central, Zona 16 <br>Guatemala, Centroamérica, 01016
            </p>
        </div>
    </footer>

</body>
</html>