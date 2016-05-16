<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN);
    $m = fgets(STDIN);
    for($i=1;$i<$m;$i++){
        $r_[$i]= fgets(STDIN);
        if(strpos($r_[$i],$n) == false){
    echo ($r_[$i]);
        }
    }
?>
