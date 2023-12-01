<?php
include '../Controller/municipioController.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina principal</title>
        <link rel="stylesheet" href="../static/CSS/bootstrap.min.css">
    </head>
    <body>
        <h1>PMS ERROR 404</h1>
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Buscar por departamento</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->
        
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- [ Main Content ] start -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <form action="listarHoteles.php" method="post">
                                                <div class="card-header" >
                                                <label>Seleccione un departamento</label>
                                                <select class="form-control" id="municipio" name = "municipio" style="width: 200px;">
                                                <?php generateSelectOptions(); ?>
                                                </select>
                                                <label> Fecha inicio</label>
                                                <input type="date" class="form-control">
                                                <label >Fecha Fin</label>
                                                <input type="date" class="form-control">
                                                <input type="submit" class="btn btn-primary" value="enviar">
                                    </div>
                                    </form>
                                </div>
                                <!-- [ Main Content ] end -->
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
        <script src="../static/JS/bootstrap.bundle.min.js"></script>
    </body>
</html>