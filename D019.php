<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $x = explode(" ", $input_lines);
    $s=$x[0];
    $n=$x[1];
    $a=substr($s, $n-1, 1);
    echo ($a);
?>
