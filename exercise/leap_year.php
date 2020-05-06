<?php
    echo "西暦で年を入力してください \n";
    $input_year = trim(fgets(STDIN));
    if($input_year % 4 == 0 && $input_year % 100 != 0 || $input_year % 400 == 0){
        echo "入力された年は、うるう年です \n";
    } else {
        echo "入力された年は、平年です \n";
    }
?>