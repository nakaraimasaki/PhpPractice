<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $xa = explode(" ", $input_lines);
    $N=$xa[0];
    $s=$xa[1];
    $p=$xa[2];
    $max=0,$min=1000;
    for($i=1;$i<$N+1;$i++){
        $n_[$i]=fgets(STDIN);
        $xb = explode(" ", $n_[$i]);
        $m_[$i]=$xb[0];
        $s_[$i]=$xb[1];
        if($m_[$i]>$max){
            $max=$m_[$i];
        }
    echo "XXXXXX";
?>
