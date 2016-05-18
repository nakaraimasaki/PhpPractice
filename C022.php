<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN);
    $max=0; $min=1000000000;
    for($cnt=0;$cnt<$n;$cnt++){
    $N[$cnt] = fgets(STDIN);
    $xb = explode(" ", $N[$cnt]);
        $s_[$cnt]=$xb[0];
        $e_[$cnt]=$xb[1];
        $h_[$cnt]=$xb[2];
        $l_[$cnt]=$xb[3];
        if($max<$h_[$cnt]){
            $max=$h_[$cnt];
        }
        if($min>$l_[$cnt]){
            $min=$l_[$cnt];
        }
    }
    echo ($s_[0])." ".($e_[$cnt-1])." ".($max)." ".($min);
?>
