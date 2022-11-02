<?php
for($i=0;$i<=100;$i++) { 
    if($i!=0 && $i%5==0 && $i%3==0){
        echo "FizzBuzz!!";
    }
    elseif($i!=0 && $i%5==0){
        echo "Buzz!";
    }
    elseif($i!=0 && $i%3==0){
        echo "Fizz!";
    }
    else{
        echo $i;
    }
    echo nl2br(PHP_EOL);
}
?>