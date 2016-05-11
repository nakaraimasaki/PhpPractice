<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $a = fgets(STDIN);
    $b = fgets(STDIN);
    if($a<$b){
    $x=$b-$a;
    echo "$x";
    }
    else{
        $x=$a-$b;
    echo "$x";
    }
?>
