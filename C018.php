<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN);
    for($i=0;$i<$n;$i++){
        $n_[$i]=fgets(STDIN);
        $xa = explode(" ", $n_[$i]);
        $a_[$i]=$xa[0];
        $b_[$i]=$xa[1];
        }
     $m = fgets(STDIN);
     for($i=0;$i<$m;$i++){
        $n_[$i]=fgets(STDIN);
        $xb = explode(" ", $n_[$i]);
        $c_[$i]=$xb[0];
        $d_[$i]=$xb[1];
        }

?>
