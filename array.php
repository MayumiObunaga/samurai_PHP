<?php
/** 
$cosutomers = ["侍太郎", "侍次郎", "侍三郎"];
$data = [1, 2, 3];

foreach($cosutomers as $cosutomers) {
    print($cosutomers."\n");
}

foreach($data as $data) {
    print($data."\n");
}

print($data[0]."\n");
print($data[1]."\n");
print($data[2]."\n");

array_push($data, 4);

var_dump($data);
var_dump(count($data));
**/

$numlist = ["one", "two", "three"];
$stringlist = [];

print($numlist[1]."\n");

array_push($stringlist, "samurai");

var_dump($stringlist);


?>