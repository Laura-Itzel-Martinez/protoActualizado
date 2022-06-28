<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <?php include "heder2.php"; ?>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            
            <div class="row">
                <div class="col">
                    <h1 class="display-4 text-center"><strong>CURSO 1: GRAFIAS</strong></h1>
                </div>

            </div>
            
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table  table-hover table-dark text-center" id="t_clases" style="border-radius: 20px;"> 
                            <thead>
                                <tr>
                                    <th>N. Clase</th>
                                    <th>Nombre de la clase</th>
                                    <th>Tomar clase</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Grafias Nahuatl</td>
                                    <td><div class="text-center"><a button type="submit" class="btn btn-success" href="alfabeto.php">Empezar clase</a></div><br></td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td></td>
                                    <td><div class="text-center"><a button type="submit" class="btn btn-success" href="#">Empezar clase</a></div><br></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php include "redesSociales.php"; ?>
        <?php include 'footer.php'?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  </body>
</html>
<script >
    $(document).ready(function(){
        $('#t_clases').DataTable();
    })
</script>