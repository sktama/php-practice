<?php
/**
(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください
(2) プレイヤーの手は$player_handに代入してください
(3) コンピューターの手は$pc_handに代入してください
**/
    $answer_array = [0, 2, 5];
    $index = array_rand($answer_array, 1);
    $pc_hand = $answer_array[$index];
    // プレイヤーの手を代入
    $player_hand = $_POST['playerHand'];
    // 勝敗を判定
    if ($player_hand == $pc_hand) {
        $result ='あいこ';
    } elseif ($player_hand == 0 && $pc_hand == 2) {
        $result = '勝ち';
    } elseif ($player_hand == 2 && $pc_hand == 5) {
        $result = '勝ち';
    } elseif ($player_hand == 5 && $pc_hand == 0) {
        $result = '勝ち';
    } else {
        $result = '負け';
    }
?>