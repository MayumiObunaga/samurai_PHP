<?php
/**
$data = [
    'name' => "大泉",
    'gendar' => "男性",
    'age' => 42
];

print($data['age']."\n");

$data['address'] = "東京";
$data['children'] = ["taro", "jiro", "saburo"];

var_dump($data);
**/

$dic = [
    'x' => 10,
    'y' => 20
];

var_dump($dic);

$dic['y'] = 40;
var_dump($dic);
?>