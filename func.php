<?php
/**
function hello($str) {
    print($str."\n");
}

hello("Hello, PHP!");

function add($a, $b) {
    return $a + $b;
}

$num = add(2, 3);
print($num."\n");
**/

/** 演習1 **/
function calc($x, $y) {
    return $x * $y;
}

print(calc(2, 3)."\n");

/** 演習2 **/
function triangle_area($a, $h) {
    return $a * $h / 2;
}

print(triangle_area(2, 3)."\n");

/** 演習3 **/
$file_list = [];

function add_list($name) {
    global $file_list;
    array_push($file_list, $name.".php");
}

print(add_list("function"));
var_dump($file_list);

print(add_list("hello"));
var_dump($file_list);

?>