<?php  
$pass="paswdT6Sd";
$username="abcdefghr";
$uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);

if(!$uppercase || !$lowercase || strlen($username)<=8){
    echo "Username, merupakan kombinasi dari huruf kecil, Dengan panjang tepat 8 karakter.";
}else{
    echo "username memenuhi kriteria";
}


if(!$uppercase || !$lowercase || !$number || strlen($pass)<=8){
    echo "password Minimal8 karakter, mengandung huruf BESAR, huruf kecil dan angka";
}else{
    echo "password memenuhi kriteria";
}


