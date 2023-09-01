<?php
$a=0;
$b='5';
 
// if($a == $b){
//     echo 'values are equal';
// }elseif($a < $b){
//     echo '$a is less than $b';
// }elseif($a > $b){
//     echo '$a is greater than $b';
// }else{
//     echo 'values are not equal';
// }
// $score=42;
// if ($score >= 60){
//     echo 'You complete the level';
// }elseif($score <= 45){
//     echo 'You should practice more before this level test';
// }else{
//     echo 'Please try again';
// }

/* if($a == $b){
        echo 'values are equal';
    }else{
        echo 'values are not equal';
    }
    if (($a == $b) == false){
        echo " " . 'values are not equal';
    }
    if($a <> $b){
        echo " " . 'values are Not equal';
    } */
    // if($a != $b){
    //     echo 'values are not equal';
    // }
    // if($a !== $b){
    //     echo 'Not identical';
    // }
      /*  if($a){
            echo 'true';
        }else{
            echo 'false';
        }
        if (!$a ){
            echo " " . 'false';
        }
        if($a == false){
            echo " " . 'false';
        }
        if($a != true){
            echo " " . 'false';
        } */
     //$num=10000;
    //  NESTED if   
    // if($num >= 10){
    //     if ($num < 1000){
    //         echo 'your number is within the range';
    //     }else {
    //         echo 'your number is greater than 1000,Not within the range';
    //     }
    // }else{
    //     echo 'your number is not within the range';
    // }
    
    //AND(&&) 
   /* $num=1;
    if($num >= 10 && $num < 1000){
       
        echo 'your number is within the range';
        
    }else{
        echo 'your number is not within the range';
    } */

    //OR(||)
    //$num=11;
     if($num == 42 || is_string($num)){
        echo '11 or string';
     }else{
        echo 'NOT 11 or string';
     } 
     $var1=(true && false);
     ($var2 = true) and false;


?>