<?php
session_start();
include_once 'funcoesCalculo.php';

if(isset($_POST['temperatura']) && isset($_POST['conversao'])) {
    $temperatura = floatval($_POST['temperatura']);
    $conversao = $_POST['conversao'];

    switch($conversao) {
        case 'celsiusToFahrenheit':
            $resultado = celsiusToFahrenheit($temperatura);
            $_SESSION['resultado_temp'] = "$temperatura °C equivale a $resultado °F";
            break;
        case 'fahrenheitToCelsius':
            $resultado = fahrenheitToCelsius($temperatura);
            $_SESSION['resultado_temp'] = "$temperatura °F equivale a $resultado °C";
            break;
        default:
            $_SESSION['resultado_temp'] = "Selecione uma conversão válida";
            break;
    }
}

header("Location: ../temperatura.php");
exit();
?>
