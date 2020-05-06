<?php
    $answer = array_rand(range(0, 9), 3);
    // 答え
    foreach($answer as $val){
        echo $val;       
    };
    echo "\n";
    // 答え end
    $goal = 3;
    $count = 0;
    while(true){
        $count++;
        $hit = 0;
        $blow = 0;
        $check = true;
        echo "□◼□◼□◼□◼□◼□◼□◼□◼□◼□◼□◼□◼□◼□◼□◼□ \n";
        echo "{$count}回目のチャレンジ！\n";
        echo "{$goal}桁の半角数字を重複なしで入力してください：";
        $user_input = trim(fgets(STDIN));
        $user_input = str_split($user_input);
        // 入力値チェック
        $user_input_count = count($user_input);
        if( $user_input_count != 3){
            $check = false;
        }
        // 重複チェック
        $value_count = array_count_values($user_input);
        // 最大出現回数
        $max = max($value_count);
        if($max >= 2){
            $check = false;
        }
        if($check){
            // hit計算
            for($i = 0; $i < $goal; $i++){
                if ($answer[$i] == $user_input[$i]){
                    $hit++;
                }
            }
            // blow計算
            for($i = 0; $i < $goal; $i++){
                for($j = 0; $j < $goal; $j++){
                    if($user_input[$i] == $answer[$j]){
                        $blow++;
                    }
                }
            }
            // 計算結果出力
            if($hit == $goal){
                echo "正解です！{$count}回目でクリアです！！\n";
                break;
            } else {
                $blow = $blow - $hit;
                echo "Hit：{$hit}, Blow：{$blow} です。\n";
            }
        } else {
            echo "エラー:3桁の半角数字を重複なしで入力してください! \n";
        }
    }
?>