<?php
$schoolArray = array('gbs' => '172.16.20.1','rfs' => '172.16.0.1','cas' => '172.16.30.1');
$array = array(1,2,3,4,5);

foreach ($array as $key => $value){
    echo $key;
    echo " Is : ";
    echo $value;
    echo " ";
}


echo "<button onclick='alert(\"hello world\")'> click me</button>";
/*
foreach ($schoolArray as $bar => $doof){
    echo "The Ip Address for ";
    echo $bar;
    echo " Is : ";
    echo $doof;
    echo "</br> \n";
}
*/

