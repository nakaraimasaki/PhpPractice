<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN);
    $y = substr($n, 0, 4);
    $m = substr($n, 5, 1);
    $d = substr($n, 7, 2);
    echo ($y)."/".($m)."/".($d);
?>
