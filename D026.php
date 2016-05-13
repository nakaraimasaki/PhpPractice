
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $d_1 = fgets(STDIN);
    $d_2 = fgets(STDIN);
    $d_3 = fgets(STDIN);
    $d_4 = fgets(STDIN);
    $d_5 = fgets(STDIN);
    $d_6 = fgets(STDIN);
    $d_7 = fgets(STDIN);
    $cnt=0;
    if(strpos($d_1,'no') !== false){
            $cnt++;
        }
    if(strpos($d_2,'no') !== false){
            $cnt++;
        }
    if(strpos($d_3,'no') !== false){
            $cnt++;
        }
    if(strpos($d_4,'no') !== false){
            $cnt++;
        }
    if(strpos($d_5,'no') !== false){
            $cnt++;
        }
    if(strpos($d_6,'no') !== false){
            $cnt++;
        }
    if(strpos($d_7,'no') !== false){
            $cnt++;
        }
    echo ($cnt)."\n";
    echo "\n";
?>
