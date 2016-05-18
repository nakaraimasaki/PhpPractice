<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $M = fgets(STDIN);
    $N = fgets(STDIN);
    for($cnt=1;$cnt<$N;$cnt++){
    $N[$cnt] = fgets(STDIN);
    $xa = explode(" ", $N[$cnt]);
    $x_[$cnt]=$xa[0];
    $y_[$cnt]=$xa[1];
    $c_[$cnt]=$xa[2];
    $mai=$c_[$cnt]++;
    }
    $wow=$mai/$M;
    echo ($N);
?>
