<?php
/**
(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください
(2) プレイヤーの手は$player_handに代入してください
(3) コンピューターの手は$pc_handに代入してください
**/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>じゃんけん</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>結果は・・・</h1>
        <div class="result-box">
            <p class="result-word"><?= $result ?>！</p>

            あなた：<?= $player_hand ?><br>
            コンピューター：<?= $pc_hand ?><br>

            <p><a class="red" href="index.php">>>もう一回勝負する</a></p>
        </div>
    </body>
</html>