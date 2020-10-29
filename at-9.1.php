<?php
$a=rand(1,20);
$b=rand(1,20);
$c=rand(1,20);

$media=($a+$b+$c)/3;
echo $media;
   
    if($media>=9.5){
        echo "O aluno está aprovado";
    }
else      
    if($media>8 && $media<9.5){
       echo "O aluno ira a recuperação";
    }
else
    if($media<8){
     echo "O aluno está reprovado";
    }
    

        