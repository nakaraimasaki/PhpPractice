<?php
$input_lines = (fgets(STDIN));
$x = explode(" ", $input_lines);
$a=$x[0];
$b=$x[1];
if($a>$b){
    echo ($a);
}
elseif($a<$b){
    echo ($b);
}else{
    echo "eq";
}
?>
