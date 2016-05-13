<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $x = explode(" ", $input_lines);
    $n=$x[0];
    $s=$x[1];
    $b=floor($n/$s);
    $r=$n%$s;
    echo ($b)." ".($r);
?>
