<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $na = fgets(STDIN);
    $xb = explode(" ", $na);
    $n=$xb[0];
    $r=$xb[1];
    for($cnt=1;$cnt<$n;$cnt++){
    $N[$cnt] = fgets(STDIN);
    $xa = explode(" ", $N[$cnt]);
    $h_[$cnt]=$xa[0];
    $w_[$cnt]=$xa[1];
    $d_[$cnt]=$xa[2];
    if($r*2<=$h_[$cnt]){
        if($r*2<=$w_[$cnt]){
            if($r*2<=$d_[$cnt]){
                echo ($cnt);
                echo "\n";
            }
        }
    }
}
?>
