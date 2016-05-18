<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN);
    $a=0;
    $b=0;
    for($i=0;$i<$n;$i++){
        $s_[$i]=fgets(STDIN);
        if(strpos($s_[$i],"SET 1") !== false){
            $xa = explode(" ", $s_[$i]);
            $s=$xa[2];
            $a=$s+$a;
        }
        if(strpos($s_[$i],"SET 2") !== false){
            $xb = explode(" ", $s_[$i]);
            $s=$xb[2];
            $b=$s+$b;
        }
        else{
            $xadd = explode(" ", $s_[$i]);
            $s=$xadd[1];
            $b=$a+$s;
        }
    }
    echo ($a)." ".($b);
?>
