<?php
$a = 1;
//$b = &$a;
$b = $a;
$c = &$a;
$a++;
echo $b;
echo $c;
?>