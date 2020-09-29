<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos.css">
    <title>Punto 3</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light justify-content-center">
            <img class="banner" src="./images/banner-spring.png" alt="Banner Spring Step">
        </nav>
    </header>

    <main> 
            <form class="mt-5 mb-5" action="punto3.php" method= "POST">
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="form-group col-md-8">
                            <label for="numeroZapatos">Ingrese la cantidad de pares zapatos que compró</label>
                            <input type="number" class="form-control " name="numeroZapatos">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-md-8">
                            <label for="total">Ingrese el valor total a pagar</label>
                            <input type="number" class="form-control" name="total">
                        </div>
                    </div>
                   
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary col-md-4" name="factura">Calcular</button>
                    </div>
                </div>
            </form>

         <?php
         if(isset($_POST["factura"])):
         ?>

        <h4 class="text-center">
        <?php 

            $numeroZapatos = $_POST["numeroZapatos"];
            $total = $_POST["total"];
            $descuento1 = $total * 0.10;
            $total1 = $total - $descuento1;
            $descuento2 = $total * 0.20;
            $total2 = $total - $descuento2;
            $descuento3 = $total * 0.50;
            $total3 = $total - $descuento3;

            switch($numeroZapatos) {
                case ($numeroZapatos == 3):
                    echo('Usted compró 3 pares de zapatos, el valor de su compra es de '.$total."$.\n"."<br />".'Por la compra de los 3 pares de zapatos se le hara un descuento del 10% por lo que el valor total a pagar de su compra es de '.'<h4 class="text-danger text-center">'.$total1.'$.</h4>');
                    break;
                    
                case ($numeroZapatos > 3 && $numeroZapatos <= 8):
                    echo('Usted compró '.$numeroZapatos.' pares de zapatos, el valor de su compra es de '.$total."$.\n"."<br />".'Por la compra de los '.$numeroZapatos.' pares de zapatos se le hara un descuento del 20% por lo que el valor total a pagar de su compra es de '.'<h4 class="text-danger text-center">'.$total2.'$.</h4>');
                    break;
            
                case ($numeroZapatos > 8):
                    echo('Usted compró '.$numeroZapatos.' pares de zapatos, el valor de su compra es de '.$total."$.\n"."<br />".'Por la compra de los '.$numeroZapatos.' pares de zapatos se le hara un descuento del 50% por lo que el valor total a pagar de su compra es de '.'<h4 class="text-danger text-center">'.$total3.'$.</h4>');
                    break;

                default:
                    echo('Usted compró '.$numeroZapatos.' pares de zapatos, el valor de su compra es de '.$total."$.\n"."<br />".' A su compra no se le aplica ningún descuento, el total a pagar es '.'<h4 class="text-danger text-center">'.$total.'$.</h4>');
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