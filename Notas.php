<?php

echo '<h1 align = center> Calculo de notas de alunos </h1>';

$resultado = 0;
$c = 1;

$alunos = array(
   array ("Nome " => "José", "Notas" => array(9, 7, 9, 6)),
   array ("Nome " => "Maria", "Notas" => array( 6, 10, 7, 8, 9 )), 
   array ("Nome " => "João", "Notas" => array( 5, 4,7,10))
);


  
foreach($alunos as $i){

    echo  "<br> Nome: " . $i["Nome "] . "<br>" ;
    echo " Nota: <br>";
   
    foreach($i["Notas"] as $nota ){

       
        $resultado = $resultado + $nota;
        $media = $resultado / $c;
        echo  $nota . "<br>" ;
        $c++;
    }
    
    echo " A Soma da nota é: " . $resultado . "<br>";
    echo " A média das notas é: " . $media . "<br>";
    $resultado = 0;
    $c=1;    

    if ($media >= 7){

            echo " Aprovado!!! <br>";

    }
    else{

        echo "Reprovado :( <br>";

    }
     
};





?>