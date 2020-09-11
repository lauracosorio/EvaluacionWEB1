<?php 

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacion = $_POST['option'];

echo('El primer número ingresado fue: '.$numero1."\n");
echo('El segundo número ingresado fue: '. $numero2."\n");


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