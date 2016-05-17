<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $Q = fgets(STDIN);
    for($i=1;$i<$Q;$i++){
        $N_[$i]=fgets(STDIN);
        $N=$N_[$i];
        for(;$N_[$i]>1;$N_[$i]/2){
            $S=$N_[$i]++;
        }
        if($S==$N){
            echo "perfect";
        }
        if($S-1==$N OR $S+1==$N){
            echo "nearly";
        }else{
            echo "neither";
        }
        echo "\n";
    }
?>
