<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $x = explode(" ", $input_lines);
    $m=$x[0];
    $n=$x[1];
    for($cnt=0;$cnt<10;$cnt++){
    $b=$m+($n*$cnt);
    echo ($b)." ";
    }
?>
