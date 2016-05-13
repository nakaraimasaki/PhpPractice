<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $x = explode(" ", $input_lines);
    $n=$x[0];
    $s=$x[1];
        if(strpos($s,'km') !== false){
        $n=$n*1000000;
    }
    elseif(strpos($s,'m') !== false){
        $n=$n*1000;
    }
    else{
        $n=$n*10;
    }
    echo ($n);
?>
