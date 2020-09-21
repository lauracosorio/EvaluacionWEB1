<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./punto2.css">
    <title>Punto 4</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light justify-content-center">
            <img class="postobonn" src="./images/postobon.jpg" alt="Banner Spring Step">
        </nav>
    </header>

    <main> 
            <form class="mt-5 mb-5" action="punto4.php" method= "POST">
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="form-group col-md-8">
                            <label for="horaTrabajada">Ingrese las horas trabajadas</label>
                            <input type="number" class="form-control " name="horaTrabajada">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-md-8">
                            <label for="horaExtra">Ingrese las horas extras</label>
                            <input type="number" class="form-control" name="horaExtra">
                        </div>
                    </div>
                   
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary col-md-4" name="horas">Calcular</button>
                    </div>
                </div>
            </form>

         <?php
         if(isset($_POST["horas"])):
         ?>

        <h4 class="text-center">
        <?php 

            $horaTrabajada = $_POST["horaTrabajada"];
            $horaExtra = $_POST["horaExtra"];
            $totalHT = $horaTrabajada * 20000;
            $totalHE = $horaExtra * 25000;
            $total = $totalHE + $totalHT;

            if($horaTrabajada <= 40 && $horaExtra == 0) {
                echo('Usted trabajó '.$horaTrabajada.' horas esta semana. Además trabajó '.$horaExtra.' hora(s) extras. <br/> El sueldo total de la semana es de <span class="text-success text-center">'.$totalHT.'$</span>.');
            } else {
                echo('Usted trabajó '.$horaTrabajada.' horas esta semana. Además trabajó '.$horaExtra.' hora(s) extras. <br/> El sueldo total de la semana es de <span class="text-success text-center">'.$total.'$</span>.' );
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