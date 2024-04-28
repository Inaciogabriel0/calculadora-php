<?php 
$resultado = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST" ){
    $num = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operaçao = $_POST['calcular'];

    switch($operaçao){
        case 'somar':
            $resultado = $num + $num2;
            break;

            case 'subtracao':
                $resultado = $num - $num2;
                break;

                case 'mutiplicacao':
                    $resultado = $num * $num2;
                    break;

                    case 'divisao':
                        $resultado = $num / $num2;
                        break;
    }
}
echo "o resultado do calculo e $resultado";






?>