{"filter":false,"title":"battle.php","tooltip":"/exercise/janken/battle.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":38,"column":47},"end":{"row":38,"column":47},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":5,"state":"php-start","mode":"ace/mode/php"}},"hash":"6faa4d569d7e9ac160670f2070803c3c9a85a628","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":7,"column":0},"end":{"row":8,"column":0},"action":"remove","lines":["",""],"id":15},{"start":{"row":6,"column":0},"end":{"row":7,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":6,"column":31},"end":{"row":6,"column":32},"action":"remove","lines":[")"],"id":16},{"start":{"row":6,"column":30},"end":{"row":6,"column":31},"action":"remove","lines":["9"]},{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"remove","lines":[" "]},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"remove","lines":[","]},{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"remove","lines":["0"]}],[{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"remove","lines":["("],"id":17},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"remove","lines":["e"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"remove","lines":["g"]},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"remove","lines":["n"]},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"remove","lines":["a"]},{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"remove","lines":["r"]}],[{"start":{"row":6,"column":21},"end":{"row":6,"column":23},"action":"insert","lines":["[]"],"id":18}],[{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["0"],"id":19},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":[","]}],[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":[" "],"id":20},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["2"]},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":[","]}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":[" "],"id":21},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"insert","lines":["5"]}],[{"start":{"row":6,"column":32},"end":{"row":6,"column":33},"action":"remove","lines":["3"],"id":22}],[{"start":{"row":6,"column":32},"end":{"row":6,"column":33},"action":"insert","lines":["1"],"id":23}],[{"start":{"row":0,"column":0},"end":{"row":8,"column":2},"action":"remove","lines":["<?php","/**","(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してくだ���い","(2) プレイヤーの手は$playerHandに代入してください","(3) コンピューターの手は$pcHandに代入してください","**/","$answer = array_rand([0, 2, 5], 1);","","?>"],"id":24}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":31},"action":"remove","lines":["$pcHand"],"id":25},{"start":{"row":14,"column":24},"end":{"row":14,"column":32},"action":"insert","lines":["$pc_hand"]}],[{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["_"],"id":26}],[{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"remove","lines":["H"],"id":27}],[{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["h"],"id":28}],[{"start":{"row":0,"column":0},"end":{"row":23,"column":2},"action":"insert","lines":["<?php","/**","(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください","(2) プレイヤーの手は$player_handに代入してください","(3) コンピューターの手は$pc_handに代入してください","**/","    $answer_array = [0, 2, 5];","    $index = array_rand($answer_array, 1);","    $pc_hand = $answer_array[$index];","    // プレイヤーの手を代入","    $player_hand = $_POST['playerHand'];","    // 勝敗を判定","    if ($player_hand == $pc_hand) {","        $result ='あいこ';","    } elseif ($player_hand == 0 && $pc_hand == 2) {","        $result = '勝ち';","    } elseif ($player_hand == 2 && $pc_hand == 5) {","        $result = '勝ち';","    } elseif ($player_hand == 5 && $pc_hand == 0) {","        $result = '勝ち';","    } else {","        $result = '負け';","    }","?>"],"id":29}],[{"start":{"row":22,"column":5},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":30},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"insert","lines":["f"],"id":31},{"start":{"row":23,"column":5},"end":{"row":23,"column":6},"action":"insert","lines":["u"]},{"start":{"row":23,"column":6},"end":{"row":23,"column":7},"action":"insert","lines":["n"]},{"start":{"row":23,"column":7},"end":{"row":23,"column":8},"action":"insert","lines":["c"]},{"start":{"row":23,"column":8},"end":{"row":23,"column":9},"action":"insert","lines":["t"]},{"start":{"row":23,"column":9},"end":{"row":23,"column":10},"action":"insert","lines":["i"]},{"start":{"row":23,"column":10},"end":{"row":23,"column":11},"action":"insert","lines":["o"]},{"start":{"row":23,"column":11},"end":{"row":23,"column":12},"action":"insert","lines":["n"]}],[{"start":{"row":23,"column":12},"end":{"row":23,"column":13},"action":"insert","lines":[" "],"id":32}],[{"start":{"row":23,"column":13},"end":{"row":23,"column":15},"action":"insert","lines":["()"],"id":33}],[{"start":{"row":23,"column":15},"end":{"row":23,"column":16},"action":"insert","lines":["{"],"id":34}],[{"start":{"row":23,"column":16},"end":{"row":25,"column":5},"action":"insert","lines":["","        ","    }"],"id":35}],[{"start":{"row":23,"column":13},"end":{"row":23,"column":19},"action":"insert","lines":["change"],"id":36}],[{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"insert","lines":["_"],"id":37},{"start":{"row":23,"column":20},"end":{"row":23,"column":21},"action":"insert","lines":["r"]},{"start":{"row":23,"column":21},"end":{"row":23,"column":22},"action":"insert","lines":["e"]},{"start":{"row":23,"column":22},"end":{"row":23,"column":23},"action":"insert","lines":["s"]},{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"insert","lines":["u"]}],[{"start":{"row":23,"column":24},"end":{"row":23,"column":25},"action":"insert","lines":["l"],"id":38},{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"insert","lines":["t"]}],[{"start":{"row":23,"column":27},"end":{"row":23,"column":28},"action":"insert","lines":["h"],"id":39},{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"insert","lines":["a"]},{"start":{"row":23,"column":29},"end":{"row":23,"column":30},"action":"insert","lines":["n"]},{"start":{"row":23,"column":30},"end":{"row":23,"column":31},"action":"insert","lines":["d"]}],[{"start":{"row":23,"column":27},"end":{"row":23,"column":28},"action":"insert","lines":["$"],"id":40}],[{"start":{"row":22,"column":5},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":41},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":7},"action":"insert","lines":["// "],"id":42}],[{"start":{"row":23,"column":7},"end":{"row":23,"column":10},"action":"insert","lines":["数値を"],"id":43}],[{"start":{"row":23,"column":9},"end":{"row":23,"column":10},"action":"remove","lines":["を"],"id":44},{"start":{"row":23,"column":8},"end":{"row":23,"column":9},"action":"remove","lines":["値"]},{"start":{"row":23,"column":7},"end":{"row":23,"column":8},"action":"remove","lines":["数"]},{"start":{"row":23,"column":6},"end":{"row":23,"column":7},"action":"remove","lines":[" "]},{"start":{"row":23,"column":5},"end":{"row":23,"column":6},"action":"remove","lines":["/"]}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"remove","lines":["/"],"id":45},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"remove","lines":["    "]},{"start":{"row":22,"column":5},"end":{"row":23,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":22,"column":5},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":7},"action":"insert","lines":["// "],"id":47}],[{"start":{"row":23,"column":7},"end":{"row":23,"column":10},"action":"insert","lines":["日本語"],"id":48},{"start":{"row":23,"column":10},"end":{"row":23,"column":12},"action":"insert","lines":["変換"]}],[{"start":{"row":23,"column":7},"end":{"row":23,"column":10},"action":"insert","lines":["数値を"],"id":49}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":9},"action":"insert","lines":["s"],"id":50},{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"insert","lines":["w"]},{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"insert","lines":["i"]}],[{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"remove","lines":["i"],"id":51}],[{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"insert","lines":["h"],"id":52},{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"insert","lines":["w"]}],[{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"remove","lines":["w"],"id":53},{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"remove","lines":["h"]}],[{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"insert","lines":["i"],"id":54},{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"insert","lines":["c"]},{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"insert","lines":["h"]}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":13},"action":"remove","lines":["swich"],"id":55},{"start":{"row":25,"column":8},"end":{"row":25,"column":14},"action":"insert","lines":["switch"]}],[{"start":{"row":25,"column":14},"end":{"row":25,"column":16},"action":"insert","lines":["()"],"id":56}],[{"start":{"row":25,"column":15},"end":{"row":25,"column":16},"action":"insert","lines":["$"],"id":57}],[{"start":{"row":25,"column":15},"end":{"row":25,"column":16},"action":"remove","lines":["$"],"id":58},{"start":{"row":25,"column":15},"end":{"row":25,"column":20},"action":"insert","lines":["$hand"]}],[{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"insert","lines":["{"],"id":59}],[{"start":{"row":25,"column":22},"end":{"row":27,"column":9},"action":"insert","lines":["","            ","        }"],"id":60}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":16},"action":"insert","lines":["case"],"id":61}],[{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"insert","lines":[" "],"id":62},{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"insert","lines":["0"]},{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"insert","lines":[":"]}],[{"start":{"row":26,"column":19},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":63},{"start":{"row":27,"column":0},"end":{"row":27,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":27,"column":16},"end":{"row":28,"column":14},"action":"insert","lines":["echo \"iは0に等しい\";","        break;"],"id":64}],[{"start":{"row":28,"column":8},"end":{"row":28,"column":12},"action":"insert","lines":["    "],"id":65}],[{"start":{"row":28,"column":12},"end":{"row":28,"column":16},"action":"insert","lines":["    "],"id":66}],[{"start":{"row":28,"column":22},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":67},{"start":{"row":29,"column":0},"end":{"row":29,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":16},"action":"remove","lines":["    "],"id":68}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":13},"action":"insert","lines":["c"],"id":69},{"start":{"row":29,"column":13},"end":{"row":29,"column":14},"action":"insert","lines":["a"]}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":14},"action":"remove","lines":["ca"],"id":70},{"start":{"row":29,"column":12},"end":{"row":29,"column":16},"action":"insert","lines":["case"]}],[{"start":{"row":29,"column":16},"end":{"row":29,"column":17},"action":"insert","lines":[" "],"id":71},{"start":{"row":29,"column":17},"end":{"row":29,"column":18},"action":"insert","lines":["2"]},{"start":{"row":29,"column":18},"end":{"row":29,"column":19},"action":"insert","lines":[":"]}],[{"start":{"row":29,"column":19},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":72},{"start":{"row":30,"column":0},"end":{"row":30,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":30,"column":16},"end":{"row":31,"column":22},"action":"insert","lines":["echo \"iは0に等しい\";","                break;"],"id":73}],[{"start":{"row":31,"column":22},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":74},{"start":{"row":32,"column":0},"end":{"row":32,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":32,"column":12},"end":{"row":32,"column":16},"action":"remove","lines":["    "],"id":75}],[{"start":{"row":32,"column":12},"end":{"row":32,"column":13},"action":"insert","lines":["c"],"id":76},{"start":{"row":32,"column":13},"end":{"row":32,"column":14},"action":"insert","lines":["a"]},{"start":{"row":32,"column":14},"end":{"row":32,"column":15},"action":"insert","lines":["s"]},{"start":{"row":32,"column":15},"end":{"row":32,"column":16},"action":"insert","lines":["e"]}],[{"start":{"row":32,"column":16},"end":{"row":32,"column":17},"action":"insert","lines":[" "],"id":77},{"start":{"row":32,"column":17},"end":{"row":32,"column":18},"action":"insert","lines":["5"]},{"start":{"row":32,"column":18},"end":{"row":32,"column":19},"action":"insert","lines":[":"]}],[{"start":{"row":32,"column":19},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":78},{"start":{"row":33,"column":0},"end":{"row":33,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":33,"column":16},"end":{"row":34,"column":22},"action":"insert","lines":["echo \"iは0に等しい\";","                break;"],"id":79}],[{"start":{"row":27,"column":16},"end":{"row":27,"column":20},"action":"remove","lines":["echo"],"id":80},{"start":{"row":27,"column":16},"end":{"row":27,"column":17},"action":"insert","lines":["r"]},{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"insert","lines":["e"]},{"start":{"row":27,"column":18},"end":{"row":27,"column":19},"action":"insert","lines":["t"]},{"start":{"row":27,"column":19},"end":{"row":27,"column":20},"action":"insert","lines":["u"]},{"start":{"row":27,"column":20},"end":{"row":27,"column":21},"action":"insert","lines":["r"]},{"start":{"row":27,"column":21},"end":{"row":27,"column":22},"action":"insert","lines":["n"]}],[{"start":{"row":27,"column":24},"end":{"row":27,"column":31},"action":"remove","lines":["iは0に等しい"],"id":81}],[{"start":{"row":27,"column":24},"end":{"row":27,"column":26},"action":"insert","lines":["ぐー"],"id":82}],[{"start":{"row":30,"column":22},"end":{"row":30,"column":29},"action":"remove","lines":["iは0に等しい"],"id":83}],[{"start":{"row":30,"column":22},"end":{"row":30,"column":25},"action":"insert","lines":["チョキ"],"id":84}],[{"start":{"row":30,"column":24},"end":{"row":30,"column":25},"action":"remove","lines":["キ"],"id":85},{"start":{"row":30,"column":23},"end":{"row":30,"column":24},"action":"remove","lines":["ョ"]},{"start":{"row":30,"column":22},"end":{"row":30,"column":23},"action":"remove","lines":["チ"]}],[{"start":{"row":30,"column":22},"end":{"row":30,"column":25},"action":"insert","lines":["ちょき"],"id":86}],[{"start":{"row":33,"column":22},"end":{"row":33,"column":29},"action":"remove","lines":["iは0に等しい"],"id":87}],[{"start":{"row":33,"column":22},"end":{"row":33,"column":24},"action":"insert","lines":["ぱー"],"id":88}],[{"start":{"row":30,"column":16},"end":{"row":30,"column":20},"action":"remove","lines":["echo"],"id":89},{"start":{"row":30,"column":16},"end":{"row":30,"column":22},"action":"insert","lines":["return"]}],[{"start":{"row":33,"column":16},"end":{"row":33,"column":20},"action":"remove","lines":["echo"],"id":90},{"start":{"row":33,"column":16},"end":{"row":33,"column":22},"action":"insert","lines":["return"]}],[{"start":{"row":31,"column":16},"end":{"row":31,"column":19},"action":"insert","lines":["// "],"id":91}],[{"start":{"row":34,"column":16},"end":{"row":34,"column":19},"action":"insert","lines":["// "],"id":92}],[{"start":{"row":28,"column":16},"end":{"row":28,"column":19},"action":"insert","lines":["// "],"id":93}],[{"start":{"row":36,"column":5},"end":{"row":37,"column":0},"action":"insert","lines":["",""],"id":94},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":37,"column":4},"end":{"row":37,"column":17},"action":"insert","lines":["change_result"],"id":95}],[{"start":{"row":37,"column":17},"end":{"row":37,"column":19},"action":"insert","lines":["()"],"id":96}],[{"start":{"row":37,"column":4},"end":{"row":37,"column":5},"action":"insert","lines":["="],"id":97}],[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"insert","lines":[" "],"id":98}],[{"start":{"row":37,"column":4},"end":{"row":37,"column":5},"action":"insert","lines":["$"],"id":99}],[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"insert","lines":[" "],"id":100}],[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"insert","lines":["p"],"id":101}],[{"start":{"row":37,"column":4},"end":{"row":37,"column":6},"action":"remove","lines":["$p"],"id":102},{"start":{"row":37,"column":4},"end":{"row":37,"column":12},"action":"insert","lines":["$pc_hand"]}],[{"start":{"row":37,"column":29},"end":{"row":37,"column":30},"action":"insert","lines":["$"],"id":103}],[{"start":{"row":37,"column":29},"end":{"row":37,"column":30},"action":"remove","lines":["$"],"id":104},{"start":{"row":37,"column":29},"end":{"row":37,"column":37},"action":"insert","lines":["$pc_hand"]}],[{"start":{"row":37,"column":38},"end":{"row":37,"column":39},"action":"insert","lines":[";"],"id":105}],[{"start":{"row":37,"column":39},"end":{"row":38,"column":0},"action":"insert","lines":["",""],"id":106},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "]},{"start":{"row":38,"column":4},"end":{"row":38,"column":5},"action":"insert","lines":["$"]}],[{"start":{"row":38,"column":5},"end":{"row":38,"column":6},"action":"insert","lines":["p"],"id":107}],[{"start":{"row":38,"column":4},"end":{"row":38,"column":6},"action":"remove","lines":["$p"],"id":108},{"start":{"row":38,"column":4},"end":{"row":38,"column":16},"action":"insert","lines":["$player_hand"]}],[{"start":{"row":38,"column":16},"end":{"row":38,"column":17},"action":"insert","lines":[" "],"id":109},{"start":{"row":38,"column":17},"end":{"row":38,"column":18},"action":"insert","lines":["="]}],[{"start":{"row":38,"column":18},"end":{"row":38,"column":19},"action":"insert","lines":[" "],"id":110},{"start":{"row":38,"column":19},"end":{"row":38,"column":20},"action":"insert","lines":["c"]},{"start":{"row":38,"column":20},"end":{"row":38,"column":21},"action":"insert","lines":["h"]},{"start":{"row":38,"column":21},"end":{"row":38,"column":22},"action":"insert","lines":["a"]}],[{"start":{"row":38,"column":19},"end":{"row":38,"column":22},"action":"remove","lines":["cha"],"id":111},{"start":{"row":38,"column":19},"end":{"row":38,"column":32},"action":"insert","lines":["change_result"]}],[{"start":{"row":38,"column":32},"end":{"row":38,"column":34},"action":"insert","lines":["()"],"id":112}],[{"start":{"row":38,"column":33},"end":{"row":38,"column":34},"action":"insert","lines":["$"],"id":113},{"start":{"row":38,"column":34},"end":{"row":38,"column":35},"action":"insert","lines":["p"]}],[{"start":{"row":38,"column":33},"end":{"row":38,"column":35},"action":"remove","lines":["$p"],"id":114},{"start":{"row":38,"column":33},"end":{"row":38,"column":45},"action":"insert","lines":["$player_hand"]}],[{"start":{"row":38,"column":46},"end":{"row":38,"column":47},"action":"insert","lines":[";"],"id":115}]]},"timestamp":1588739336052}