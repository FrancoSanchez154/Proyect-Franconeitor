<?php 
include 'seguridad.php';
session_start();
 ?>

    <!DOCTYPE html>
    <html>

    <head>

        <link rel="stylesheet" type="text/css" href="css/estilo.css">

    </head>

    <body background="images/fondo.jpg">
    	<center><input type="button" id="comenzar" value="Comenzar" style="text-align:center;background-color: coral ;font-style: italic ;font-size:30px ; height: 50px;width: 150px"></center>
        <!-- <div id="front" style=""> -->
            <!-- <img src="images/0QKVdhG.jpg"> -->
        <!-- </div> -->
        
        <div id="templates">
        	<div id="primera">
        		<img src="images/template1.jpg">
        	</div>
        	<div id="segunda">
        		<img src="images/template2.png">
        	</div>
        	<div id="tercera">
        		<img src="images/template3.jpg">
        	</div>
        	<div id="cuarta">
        		<img src="images/template4.jpg">
        	</div>





        </div>

        <script type="text/javascript" src="vendor/jquery/jquery.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#comenzar').on("click", function() {
                    $('#front').animate({
                        opacity: 0,
                    }, 1000);

                    $('#templates').animate({
                    	top: 50,
                    	opacity: 1
                    	}, 	1500 );

                    $('#comenzar').animate({
                    	opacity:0,
                    	}, 1000);



                    });
            });
        </script>

    </body>

    </html>