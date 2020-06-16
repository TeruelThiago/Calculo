<?php

$t= $_POST['tipo'];
$s= $_POST['sal'];

if ($t == 1){
	$st = ($s+($s/100)*20);
    $tt = $s + $st;
    echo "Seu salário líquido é $st";
}
if ($t == 2){
	$st = ($s+($s/100)*10);
    $tt = $s + $st;
    echo "Seu salário líquido é $st";
}
if ($t == 3){
	$st = ($s+($s/100)*5);
    
    echo "Seu salário líquido é $st";
}
?>