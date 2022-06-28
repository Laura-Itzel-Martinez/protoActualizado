
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./public/css/style1.css">
    <link rel="stylesheet" href="./public/css/style5.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./public/css/login.css">
    <link rel="stylesheet" href="./librerias/bostrap4/bootstrap.min.css">
  </head>
  <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                <img src="./public/img/logo.jpg"  href="curso.php" style="width: 450px;height:fit-content"/>
                <h1>Bienvendo al mundo nahuatl</h1>
                </div>

                <div class="card-body">
                <form action="servidor/loginProcesar.php" method="POST" autocomplete="off">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                        
                    </div>
                    <input type="text" class="form-control" placeholder="usuario" name="usuario" id="usuario">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                        
                    </div>
                    <input type="password" class="form-control" placeholder="password" name="password" id="password">
                    </div>
            </div>
                <div class="card-footer">
                        <input type="submit" class="fadeIn fourth" type="submit" id="enviar" ></input>
                        
                    </form>
                </div>
            <div id="formFooter">
                    
                    <a class="nav-link" href="index.php"><button class="btn btn-danger" type="submit">Cancelar</button></a>
            </div>
            </div>
        </div>


    
    <script src="librerias/jquery-3.6.0.min.js"></script>
    <script src="librerias/sweetalert.min.js"></script>
    <?php include "redesSociales.php"; ?>

    <?php include "footer.php"; ?>
  
  </body>
</html>
