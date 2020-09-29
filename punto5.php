<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos.css">
    <title>Punto 5</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light justify-content-center">
            <img class="banner" src="./images/logo-bancolombia.png" alt="Banner Spring Step">
        </nav>
    </header>

    <main> 
        <h1 class="text-center mt-5">SUCURSAL A</h1>
            <div class="container mt-3">
                <h6>
                    Usuario 1
                </h6>
                <form  action="punto5.php" method= "POST">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Nombre</label>
                            <input type="text" class="form-control" name="nombre[]">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Teléfono</label>
                            <input type="number" class="form-control" name="phone[]">
                        </div>
                   
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Dirección</label>
                            <input type="text" class="form-control" name="address[]">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress2">Salario</label>
                            <input type="number" class="form-control" name="salario[]">
                        </div>
                    </div>

                    <h6>
                        Usuario 2
                    </h6>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Nombre</label>
                            <input type="text" class="form-control" name="nombre[]">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Teléfono</label>
                            <input type="number" class="form-control" name="phone[]">
                        </div>
                   
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Dirección</label>
                            <input type="text" class="form-control" name="address[]">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress2">Salario</label>
                            <input type="number" class="form-control" name="salario[]">
                        </div>
                    </div>

                    <h6>
                        Usuario 3
                    </h6>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Nombre</label>
                            <input type="text" class="form-control" name="nombre[]">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Teléfono</label>
                            <input type="number" class="form-control" name="phone[]">
                        </div>
                   
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Dirección</label>
                            <input type="text" class="form-control" name="address[]">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress2">Salario</label>
                            <input type="number" class="form-control" name="salario[]">
                        </div>
                    </div>
                    <h6>
                        Usuario 4
                    </h6>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Nombre</label>
                            <input type="text" class="form-control" name="nombre[]">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Teléfono</label>
                            <input type="number" class="form-control" name="phone[]">
                        </div>
                   
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Dirección</label>
                            <input type="text" class="form-control" name="address[]">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress2">Salario</label>
                            <input type="number" class="form-control" name="salario[]">
                        </div>
                    </div>
                    <h6>
                        Usuario 5
                    </h6>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Nombre</label>
                            <input type="text" class="form-control" name="nombre[]">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Teléfono</label>
                            <input type="number" class="form-control" name="phone[]">
                        </div>
                   
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Dirección</label>
                            <input type="text" class="form-control" name="address[]">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress2">Salario</label>
                            <input type="number" class="form-control" name="salario[]">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary col-md-4 m-5" name="salarioTotal">
                            <a class="text-white" href="">Calcular</a>
                        </button>
                    </div>
                </form>
            </div>
            
            <?php
         if(isset($_POST[("salarioTotal")])):
         ?>
         <div class="container ">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Salario</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        $names = $_POST["nombre"];
                        $phone = $_POST["phone"];
                        $address = $_POST["address"];
                        $salary = $_POST["salario"];
                        $sumatoriaSalarios = 0;

                            foreach ($salary as $value) {
                                $sumatoriaSalarios += $value;
                            }

                        $sucursalB = 40000000;
                        $sucursalC = 32000000;
                        
                        echo("<tr>
                        <td>$names[0]</td>
                        <td>$phone[0]</td>
                        <td>$address[0]</td>
                        <td>$salary[0]</td>
                        </tr>
                        <tr>
                        <td>$names[1]</td>
                        <td>$phone[1]</td>
                        <td>$address[1]</td>
                        <td>$salary[1]</td>
                        </tr>
                        <tr>
                        <td>$names[2]</td>
                        <td>$phone[2]</td>
                        <td>$address[2]</td>
                        <td>$salary[2]</td>
                        </tr>
                        <tr>
                        <td>$names[3]</td>
                        <td>$phone[3]</td>
                        <td>$address[3]</td>
                        <td>$salary[3]</td>
                        </tr>
                        <tr>
                        <td>$names[4]</td>
                        <td>$phone[4]</td>
                        <td>$address[4]</td>
                        <td>$salary[4]</td>
                        </tr>
                        ");
                    
                        ?>
                </tbody>
            </table>
        </div>
        <div class="container mt-5 mb-5">
        <h1 class="text-center">
        <?php 
            echo('La sumatoria de salarios de la sucursal A es de <span class="text-success">'.$sumatoriaSalarios.'$</span>');
        ?>
        </h1>
    </div>
    
    <div class="container mt-5 mb-5">
        <h1 class="text-center">
        <?php 
             if($sumatoriaSalarios < $sucursalC){
                 if($sucursalC > $sucursalB){
                     echo('La mejor sumatoria de salarios la tiene la sucursal C con <span class="text-success">'.$sucursalC.'$</span>');
                    }elseif($sucursalC < $sucursalB){
                        echo('La mejor sumatoria de salarios la tiene la sucursal B con <span class="text-success">'.$sucursalB.'$</span>');
                    }
                }else{
                    echo('La mejor sumatoria de salarios la tiene la sucursal A con <span class="text-success">'.$sumatoriaSalarios.'$</span>');
                }
        ?>
        </h1>
    </div>
        <?php endif ?>
    </main>


    <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>