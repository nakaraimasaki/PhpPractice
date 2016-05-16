<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $M = fgets(STDIN);
    for($cnt=0;$cnt<$M;$cnt++){
    $N[$cnt] = fgets(STDIN);
    if($N[$cnt]>0 AND $N[$cnt]<255){
        echo "True";
    }
    else{
        echo "False";
    }
    echo "\n";
    }
?>
