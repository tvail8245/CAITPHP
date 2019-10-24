<?php

$concat = "you?";
$string = "hello world how are '$concat'";

echo $string;

exec('uname -a',$output,$return_int);

print_r($output);
