<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Punto 1</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light justify-content-center">
            <h1 class="">Calculadora básica</h1>
        </nav>
    </header>

    <main>
        <form class="mt-5 mb-5" action="punto1.php" method= "POST">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="form-group col-md-6">
                        <label for="numeroUno">Ingrese el primer número</label>
                        <input type="number" class="form-control " name="numeroUno">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-md-6">
                        <label for="numeroDos">Ingrese el segundo número</label>
                        <input type="number" class="form-control" name="numeroDos">
                    </div>
                </div>
                <div class="row justify-content-center m-3">
                    <label for="Seleccion" class="col-md-6">Seleccione la operación</label>
                </div>
                <div class="row justify-content-center m-3">
                    <select class="custom-select col-md-6" name="option">
                        <option value="default">Seleccione..</option>
                        <option value="suma">Sumar</option>
                        <option value="resta">Restar</option>
                        <option value="multiplicacion">Multiplicar</option>
                        <option value="division">Dividir</option>
                    </select>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary col-md-4" name="calcular">Calcular</button>
                </div>
            </div>
        </form>

     
         <?php
         if(isset($_POST["calcular"])):
         ?>

        <h4 class="text-center">
        <?php 

            $numero1 = $_POST["numeroUno"];
            $numero2 = $_POST["numeroDos"];
            $operacion = $_POST["option"];

            switch($operacion) {
                case 'suma':
                    $resultado = $numero1 + $numero2;
                    echo('La suma entre '.$numero1.' y '.$numero2.' es '.$resultado);
                    break;
                    
                case 'resta':
                    $resultado = $numero1 - $numero2;
                    echo('La resta entre '.$numero1.' y '.$numero2.' es '.$resultado);
                    break;
            
                case 'division':
                    $resultado = $numero1 / $numero2;
                    echo('La división entre '.$numero1.' y '.$numero2.' es '.$resultado);
                    break;
            
                case 'multiplicacion':
                    $resultado = $numero1 * $numero2;
                    echo('La multiplicación entre '.$numero1.' y '.$numero2.' es '.$resultado);
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