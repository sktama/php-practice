<?php
    echo '身長を入力してくだいさい: ';
    $height = fgets(STDIN) / 100;
    
    echo '体重を入力してください: ';
    $weight = fgets(STDIN);
    
    $bmi = round($weight / ($height * $height), 1); 

    if(18.5 > $bmi){
        echo "あなたは、低体重です。";
    } else if (25 > $bmi){
        echo "あなたは、普通体重です。";
    } else {
        echo "あなたは、肥満です。";
    }
    
    echo "\n";
?>