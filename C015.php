<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = fgets(STDIN);
    $point=0;
    for($i=0;$i<$N;$i++){
        $N_[$i]=fgets(STDIN);
        $x = explode(" ", $N_[$i]);
        $d_[$i]=$x[0];
        $p_[$i]=$x[1];
        if(strpos($d_[$i],'3') !== false){
            $point=floor($p_[$i]*0.03)+$point;
        }
        if(strpos($d_[$i],'5') !== false){
            $point=floor($p_[$i]*0.05)+$point;
        }
        else{
            $point=floor($p_[$i]*0.01)+$point;
        }
    }
    echo ($point);

?>
