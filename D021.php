<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $S = fgets(STDIN);
    $T = fgets(STDIN);
    if (strstr($S, $T)) {
    echo "Yes";
    }
    else {
    echo "No";
    }
?>
