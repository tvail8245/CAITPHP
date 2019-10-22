<?php
$schoolArray = array('gbs' => '172.16.20.1','rfs' => '172.16.0.1','cas' => '172.16.30.1');

foreach ($schoolArray as $bar => $doof){
    echo "The Ip Address for ";
    echo $bar;
    echo " Is : ";
    echo $doof;
    echo "</br> \n";
}

