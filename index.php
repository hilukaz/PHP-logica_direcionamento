<?php

    echo"laço FOR"."<br>";
    for($i=0;$i<=10;$i++){
        echo $i."<br>";
    }

    echo"<br>laço WHILE"."<br>";
    $i=0;
    while($i<=10){
        echo $i."<br>";
        $i++;
    }

    $i=0;
    echo"<br>laço DoWhile"."<br>";
    do{
        echo $i."<br>";
        $i++;
    }while($i<=10);
 

    $i=0;
    echo "<br>";
    if($i<10){
        echo "valor da variável I é: ".$i." e passou no IF";

    }elseif(10==$i){
        echo "valor da variável I é: ".$i." e passou no ELSEIF";

    }else{
        echo "valor da variável I é: ".$i." e passou no ELSE";

    }
?>