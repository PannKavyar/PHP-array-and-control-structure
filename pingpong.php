<?php
    $player1=0;
    $player2=0;
    $round=0;

    //WIN 
    //player must reach a score of 11
    //player must be a maintain of 2 point higher than opponent

    while(abs($player1 - $player2)<2 || ($player1 < 11 && $player2 < 11)){
        $round++;
        echo "Round $round\n";
        if(rand(0,1)){
            $player1++;
        }else{
            $player2++;
        }
        echo "Player1=$player1 \n";
        echo "Player2=$player2 \n";
    }
    
    if($player1 > $player2){
        echo "Player1";
    }else{
        echo "Player2";
    }
    echo " " . "is the winner after $round rounds!\n";
?>