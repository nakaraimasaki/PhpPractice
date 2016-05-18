<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $na = fgets(STDIN);
    $xb = explode(" ", $na);
    $xc=$xb[0];
    $yc=$xb[1];
    $r_1=$xb[2];
    $r_2=$xb[3];
    $na = fgets(STDIN);
    for($cnt=1;$cnt<$na+1;$cnt++){
    $N[$cnt] = fgets(STDIN);
    $xa = explode(" ", $N[$cnt]);
    $x_[$cnt]=$xa[0];
    $y_[$cnt]=$xa[1];
    if($r_1*$r_1<=($x_[$cnt]-$xc)*($x_[$cnt]-$xc)+($y_[$cnt]-$yc)*($y_[$cnt]-$yc) AND
    ($x_[$cnt]-$xc)*($x_[$cnt]-$xc)+($y_[$cnt]-$yc)*($y_[$cnt]-$yc) <= $r_2*$r_2){
        echo "yes";
    }
    else{
        echo "no";
    }
    echo "\n";
    }
?>
