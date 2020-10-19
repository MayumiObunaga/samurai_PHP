<?php
/** 演習1 **/
check(42);

function check($num) {
    if($num == 42) {
        print("Answer to the Ultimate Question of Life, the Universe, and Everything\n");
    }
}

/** 演習2 **/
$even_num = [];
$odd_num = [];

sort_number(2);
sort_number(1);
sort_number(0);
sort_number(3);

function sort_number ($num) {
    global $even_num, $odd_num;
    
    if($num % 2 == 0){
        array_push($even_num, $num);
    } else {
        array_push($odd_num, $num);
    }
}

    
var_dump($even_num);
var_dump($odd_num);

?>