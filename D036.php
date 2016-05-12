<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $moji = fgets(STDIN);
    $replaceText = str_replace("at", "@", $moji);
    echo ($replaceText);
?>
