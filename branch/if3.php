<?php
    $check = 35.3;
    if(37.0 >= $check) {
        echo "平熱です。";
        echo "\n";
    } else if(37.5 > $check) {
        echo "微熱です。";
        echo "\n";
    } else {
        echo "コロナの可能性あり！！";
        echo "\n";
    }
?>