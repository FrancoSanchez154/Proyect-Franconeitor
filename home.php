<?php
session_start();
include 'conexion.php';
include 'seguridad.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/mysyle.css">   
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document). ready(function(){
        $("#opc1"). click (function(){
            alert ("ola ola popo");
        });
    });

</script>

</head>
<body>
<h1>como queres hacer la publicacions</h1>
<!--div id="opc1">
        <img src="images/aber1.jpg" alt="Image">
</div-->
<img id="mi_imagen" src="images/aber1.jpg">
<button type="button"
onclick="document.getElementById("mi_imagen").src = 'images/aber2.jpg'">CAMBIAR
</button>


</body>
</html>
