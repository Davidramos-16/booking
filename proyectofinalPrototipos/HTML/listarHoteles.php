<?php

include("../Controller/cargarHoteles.php");


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hoteles</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../static/CSS/bootstrap.min.css">
    </head>
    <body style="text-align: center;">
      
        <div class="container" style="padding: 10 10 10 10;">
            <h1>PMS ERROR 404</h1>
            <div class="container">
              <?php
              cargarHotels();
              ?>
            </div>
        </div>
        <script src="../static/JS/bootstrap.bundle.min.js"></script>
    </body>
</html>