<?php
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT * FROM t_usuarios";    
    $respuesta = mysqli_query($conexion, $sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./librerias/dataTable/dataTables.bootstrap4.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style="background-color: #e1f3e1;overflow: hidden">
        <?php include "heder2.php"; ?>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <center><h2 class="display-4" style="font-family: 'Teko', sans-serif;">CURSOS EN NAHUATL</h2></center>
        </div>
        <br>
        <div class="container:100%" >
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./public/img/abecedario_b.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Grafías de la lengua Náhuatl</h5>
                            <p class="card-text"  style="text-align:justify">El alfabeto practico consiste en 19 grafías para 19 fonemas propios del náhuatl.</p>
                            
                            <a href="curso_1.php"><button type="button" class="btn btn-outline-dark btn-block" href="curso_1.php">Ir acurso</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    
    </body>
</html>
<?php include "redesSociales.php"; ?>
<?php include "footer.php"; ?>
