<?php
/** 演習1 **/
for ($i=1; $i<=30; $i++) {
    print($i."\n");
}

/** 演習2 **/
for ($i=1; $i<=30; $i++) {
    if($i%5==0) {
        print($i."はBuzz\n");
    } else {
        print($i."\n");
    }
}

/** 演習3 **/
for ($i=1; $i<=30; $i++) {
    if ($i%3==0 && $i%5==0) {
        print($i."はFizzBuzz\n");
    } elseif ($i%3==0 && $i%5!=0) {
        print($i."はFizz\n");
    } elseif ($i%3!=0 && $i%5==0) {
        print($i."はBuzz\n");
    } else {
        print($i."\n");
    }
}

?>