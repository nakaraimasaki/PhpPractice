<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $a= fgets(STDIN);
    $b= fgets(STDIN);
    if($a<$b){
    echo ($b);
    }
    elseif($a>$b){
         echo ($a);
    }
    else{
        echo "eq";
    }
?>
