<?php  
$karakter="qwertyuiopasdfghjklzxcvbaaaaaa";
$uppercase = preg_match('@[a-zA-Z]@',$karakter);


if(!$uppercase || strlen($karakter)<=32){
    echo "karakter Dengan panjang tepat 32 karakter.";
}else{
    echo "karakter memenuhi kriteria";
}