<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset ($_POST ['altura'], $_POST['peso'])){
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $resultado = $peso / ($altura * $altura);

    if ($resultado <= 16.4){
        echo "voce esta muito abaixo do peso.";
    }elseif ($resultado <= 18.4){
        echo "voce esta abaixo do peso.";
    }elseif ($resultado <= 24.9){
        echo "voce esta no peso ideal.";
    }elseif ($resultado <= 29.9){
        echo "voce esta acima do peso.";
    }elseif ($resultado <= 34.9){
        echo  "voce esta em obesidade grau 1.";
    }elseif ($resultado <= 40){
        echo "voce esta em obesidade de grau 2.";
    }else{
        echo "voce esta em obesidade de grau 3";
    }
    }
    }







?>