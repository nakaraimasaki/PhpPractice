<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $xa = explode(" ", $input_lines);
    $a=$xa[0];
    $b=$xa[1];
    $n = fgets(STDIN);
    for($i=0;$i<$n;$i++){
        $n_[$i]=fgets(STDIN);
        $xb = explode(" ", $n_[$i]);
        $A_[$i]=$xb[0];
        $B_[$i]=$xb[1];
        if($a>$A_[$i]){
            echo "High";
        }
        if($a<$A_[$i]){
            echo "Low";
        }
        if($a==$A_[$i]){
            if($b<$B_[$i]){
                echo "High";
            }
             if($b>$B_[$i]){
                echo "Low";
            }
        }
        echo "\n";
    }
?>
