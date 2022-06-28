<!doctype html>
  <html lang="en">
    <head>
      <title>Title</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

    <?php include "heder2.php"; ?>

    <br>
        <br>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-3">
                    <a class="nav-link" href="alfabeto.php"><button class="btn btn-warning " type="submit"><i class="fas fa-chevron-left"></i> Regresar</button></a>
                </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 style="font-family: 'Cormorant Garamond', serif;">
                        GRAFIAS
                    </h1>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-success table-striped text-center" id="t_clases" style="border-radius: 20px;"> 
                            <thead>
                                <tr>
                                <th scope="col">Imagen</th>
                                  <th scope="col">Pronunciación</th>
                                  <th scope="col">Escritura</th>
                                  <th scope="col">Significado</th>
                                </tr>
                            </thead>
                            <tbody>
                        <tr>
                            
                            <div><td><img src="./public/img/padre.jpg" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/agua.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Tahtle</td></div>
                            <div><td>Padre</td></div>
                            
                        </tr>
                        <tr>
                            <div><td><img src="./public/img/medicamento.jpg" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/papel.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Pantle</td></div>
                            <div><td>Medicamento</td></div>
                            
                        </tr>
                        <tr>
                            <div><td><img src="./public/img/quien.jpg" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:65px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/sobre_el_agua.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Ahke</td></div>
                            <div><td>¿quièn?</td></div>
                            
                        </tr>
                        <tr>
                            <div><td><img src="./public/img/grita.jpg" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/arco.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Tsahtse</td></div>
                            <div><td>grita</td></div>
                        </tr>
                        <tr>
                            <div><td><img src="./public/img/estomago.png" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/lago.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Ihtetl</td></div>
                            <div><td>Estomago</td></div>
                        </tr>
                        </td>
                        
                    </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        
        <?php include "redesSociales.php"; ?>
       
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>