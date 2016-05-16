<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $x = explode(" ", $input_lines);
    $m=$x[0];
    $p=$x[1];
    $q=$x[2];
    $m1=$m*(0.01*$p-1);
    $m2=$m1*(0.01*$q-1);
    echo ($m2);
?>
