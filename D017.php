<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n_1 = fgets(STDIN);
    $n_2 = fgets(STDIN);
    $n_3 = fgets(STDIN);
    $n_4 = fgets(STDIN);
    $n_5 = fgets(STDIN);
    if($n_1>$n_2){
        $max=$n_1;
        $min=$n_2;
    }
    if($n_1<$n_2){
        $max=$n_2;
        $min=$n_1;
    }
    if($n_1=$n_2){
        $max=$n_1;
        $min=$n_2;
    }
    if($n_3>$n_4){
        if($n_3>$max){
            $max=$n_3;
        }
        if($n_4<$min){
            $min=$n_4;
        }
    }
    if($n_3<$n_4){
        if($n_3<$min){
            $min=$n_3;
        }
        if($n_4>$max){
            $max=$n_4;
        }
    }
    if($n_5>$max){
        $n_5=$max;
    }
    if($n_5<$min){
        $n_5=$min;
    }
    echo ($max).($min);
?>
