<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $s = fgets(STDIN);
    $t = fgets(STDIN);
    $u=($s)."@".($t);
    $u = preg_replace('/\n|\r|\r\n/', '', $u );
    echo ($u);
?>
