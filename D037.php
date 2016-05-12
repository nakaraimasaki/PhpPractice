<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $M = fgets(STDIN);
    $N = fgets(STDIN);
    $t=floor($N/$M);
    if($N%$M!==0){
        $t++;
    }
    echo ($t);
?>
