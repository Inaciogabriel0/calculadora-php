<?php 
$nome = $_POST['nome'];
echo " o nome do aluno e: $nome <br> <br>";
$pai = $_POST['pai'];
 echo "o nome do pai do estudante e: $pai <br> <br>";
 $mae = $_POST['mae'];
 echo "o nome da mae do estudante e: $mae <br> <br>";
 $cpf = $_POST['cpf'];
   echo  "o cpf do estudante e: $cpf <br> <br>";
   $escola = $_POST['escola'];
    echo "a escola que o estudante se encontra e: $escola <br> <br>";
    $bimestre = $_POST['bimestre'];
    echo "sua nota no primeiro 1 bimestre foi: $bimestre <br> <br>"; 
    $bimestre2 = $_POST['bimestre2'];
      echo "a nota do aluno no  2 bimestre foi: $bimestre2 <br> <br>";
      $bimestre3 = $_POST['bimestre3'];
       echo "a nota do aluno no 3 bimestre foi: $bimestre3 <br> <br> ";
       $bimestre4 = $_POST['bimestre4'];
        echo "a sua nota do 4 bimestre foi: $bimestre4 <br> <br>";
        $resultado = ($bimestre + $bimestre2 + $bimestre3 + $bimestre4)/4;
        if ($resultado >= 6){
            echo "sua media e $resultado voce foi aprovado";
        }else{
            echo "voce foi reprovado";
        }

?>