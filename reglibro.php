<?php
    include 'connect.php';
    $query = "SELECT * FROM categoria";
    $result = mysqli_query($conexion, $query);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrar Libro</title>
        <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./librerias/bootstrap4/bootstrap.min.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"
    />

     <!-- Font Awesome JS -->
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Nuevo libro</div>
                <div class="container">
                    <div class="col-xs-12 m-5 col-sm-offset-2">
                        <form autocomplete="off" method="post">
                                <div class="group-material">
                                    <input type="text" class="material-control" placeholder="Escribe el titulo aquí" required=""  maxlength="100" data-placement="top" title="Escribe el titulo" name="titulo">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Titulo</label>
                                </div>
                                <div class="group-material">
                                    <input type="text" class="material-control" placeholder="Escribe el ISBN aquí" required=""  maxlength="100" data-placement="top" title="Escribe el ISBN" name="titulo">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>ISBN</label>
                                </div>
                            <div class="group-material">
                                <span>Categoría</span>
                                <select class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Elige la categoría del libro" name="categoria"> 
                                <span class="highlight"></span>
                                  <span class="bar"></span>
                                    <?php while($categoria = mysqli_fetch_array($result))
                                    {
                                    ?>
                                        <option value="<?php echo $categoria['idcategoria']?>"> <?php echo $categoria['descripcion']?> </option>
                                    <?php
                                        }
                                    ?>
                                   
                                </select>
                            </div>
                            <p class="text-center">
                                  <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                  <button type="submit" name="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                              </p> 
                           
                        </form>
  
                    </div>
                </div>
            </div>
        </div>
        <script src="librerias/jquery.slim.min.js"></script>
        <script src="js/hitgoalz.js"></script>
        <script src="librerias/bootstrap4/popper.min.js"></script>
        <script src="librerias/bootstrap4/bootstrap.min.js"></script>
        <script src="librerias/datatable/jquery.dataTables.min.js"></script>
        <script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                $("#sidebarCollapse").on("click", function () {
                $("#sidebar-container").toggleClass("active");
                });
            });
    </script>


    <div class="footpage">
    Copyright by Michael G. and Stiben T. &copy; <?=date("Y")?>
    </div>
    </body>
</html>