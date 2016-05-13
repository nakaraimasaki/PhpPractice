<?php
$input_lines = (fgets(STDIN));
$x = explode(" ", $input_lines);
$a=$x[0];
$b=$x[1];
$a=substr($a, 0, 1);
$b=substr($b, 0, 1);
echo ($a).".".($b);
?>
