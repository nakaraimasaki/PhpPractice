<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $Na = fgets(STDIN);
    $xa = explode(" ", $Na);
    $a=$xa[0];
    $b=$xa[1];
    $R=$xa[2];
    $N = fgets(STDIN);
    for($i=0;$i<$N;$i++){
        $N_[$i]=fgets(STDIN);
        $xb = explode(" ", $N_[$i]);
        $x_[$i]=$xb[0];
        $y_[$i]=$xb[1];
        if(($x_[$i]-$a)*($x_[$i]-$a)+($y_[$i]-$b)*($y_[$i]-$b)>=$R*$R){
        echo "silent";
    }
    else{
        echo "noisy";
    }
    echo "\n";
    }
?>
