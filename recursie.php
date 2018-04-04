<?php

function recursive($num){
    //Print het number.
    echo $num, '<br>';
    //check of het kleiner dan 50 is.
    if($num < 50){
        //roep de functie nogmaals aan en increment met 1.
        return recursive($num + 1);
    }
}
 
//Start is 1.
$startNum = 1;
 
//Roep de recursive function aan.
recursive($startNum);