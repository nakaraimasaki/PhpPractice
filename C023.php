<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $xa = explode(" ", $input_lines);
    $a_0=$xa[0];
    $b_0=$xa[1];
    $c_0=$xa[2];
    $d_0=$xa[3];
    $e_0=$xa[4];
    $f_0=$xa[5];
    $N = fgets(STDIN);
    for($i=0;$i<$N;$i++){
        $n_[$i]=fgets(STDIN);
        $xb = explode(" ", $n_[$i]);
        $a_[$i]=$xb[0];
        $b_[$i]=$xb[1];
        $c_[$i]=$xb[2];
        $d_[$i]=$xb[3];
        $e_[$i]=$xb[4];
        $f_[$i]=$xb[5];
        $cnt=0;
        if($a_0=$a_[$i]){
            $cnt++;
        }
         if($b_0=$b_[$i]){
            $cnt++;
        }
         if($c_0=$c_[$i]){
            $cnt++;
        }
         if($d_0=$d_[$i]){
            $cnt++;
        }
         if($e_0=$e_[$i]){
            $cnt++;
        }
         if($f_0=$f_[$i]){
            $cnt++;
        }
        echo ($cnt);
        echo "\n";
    }
?>
