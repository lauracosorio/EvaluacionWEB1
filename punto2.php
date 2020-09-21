<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./punto2.css">
    <title>Punto 2</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light justify-content-center">
            <img class="banner" src="./images/Bodytech-banner.png" alt="Banner Bodytech">
        </nav>
    </header>

    <main>
    
    <div class=" container row m-auto">
        <div class="col-sm-12 col-md-6 justify-content-center">
            <img class="tabla" src="./images/tablapto2.jpg" alt="Clasificación del IMC">
        </div>
        <div class="col-sm-12 col-md-6">
            
            <form class="mt-5 mb-5" action="punto2.php" method= "POST">
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="form-group col-md-8">
                            <label for="peso">Ingrese su peso en kilogramos</label>
                            <input type="number" class="form-control " name="peso">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-md-8">
                            <label for="estatura">Ingrese su estatura en centímetros</label>
                            <input type="number" class="form-control" name="estatura">
                        </div>
                    </div>
                   
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary col-md-4" name="mic">Calcular</button>
                    </div>
                </div>
            </form>
        </div>

        
    </div>
     
         <?php
         if(isset($_POST["mic"])):
         ?>

        <h4 class="text-center">
        <?php 

            $peso = $_POST["peso"];
            $estatura  = $_POST["estatura"];
            $estaturaFinal = $estatura/100;
            $resultado = $peso/($estaturaFinal*$estaturaFinal);
            $resultadoFinal = sprintf('%.2f',$resultado);

            switch($resultadoFinal) {
                case ($resultadoFinal < 18.5):
                    echo('Su IMC es de '.$resultadoFinal.'.  Según la clasificación del IMC usted tiene'.'<h4 class="text-danger text-center"> peso insuficiente </h4>');
                    break;
                    
                case ($resultadoFinal > 18.5 && $resultadoFinal < 24.9):
                    echo('Su IMC es de '.$resultadoFinal.' Según la clasificación del IMC usted tiene'.'<h4 class="text-success text-center"> Normopeso </h4>');
                    break;
            
                case ($resultadoFinal >= 25 && $resultadoFinal < 26.9):
                    echo('Su IMC es de '.$resultadoFinal.' Según la clasificación del IMC usted tiene'.'<h4 class="text-danger text-center"> Sobrepeso grado I </h4>');
                    break;
            
                case ($resultadoFinal >= 27 && $resultadoFinal < 29.9):
                    echo('Su IMC es de '.$resultadoFinal.' Según la clasificación del IMC usted tiene'.'<h4 class="text-danger text-center"> Sobrepeso grado II (preobesidad) </h4>');
                    break;
                
                case ($resultadoFinal >= 30 && $resultadoFinal < 34.9):
                    echo('Su IMC es de '.$resultadoFinal.' Según la clasificación del IMC usted tiene'.'<h4 class="text-danger text-center"> Obesidad tipo I  </h4>');
                    break;
            
                case ($resultadoFinal >= 35 && $resultadoFinal < 39.9):
                    echo('Su IMC es de '.$resultadoFinal.' Según la clasificación del IMC usted tiene'.'<h4 class="text-danger text-center"> Obesidad tipo II  </h4>');
                    break;

                case ( $resultadoFinal >= 40 && $resultadoFinal < 49.9):
                    echo('Su IMC es de '.$resultadoFinal.' Según la clasificación del IMC usted tiene'.'<h4 class="text-danger text-center"> Obesidad tipo III (mórbida) </h4>');
                    break;

                case ($resultadoFinal >= 50):
                    echo('Su IMC es de '.$resultadoFinal.' Según la clasificación del IMC usted tiene'.'<h4 class="text-danger text-center"> Obesidad tipo IV (extrema) </h4>');
                    break;

                default:
                    echo('No se ha podido realizar la operación');
                    break;
            }
        ?>             
        </h4>
        <?php endif ?>

    </main>


    <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>