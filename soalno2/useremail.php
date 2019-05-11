<!-- Status : Cocok 
Syarat :/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]/
Email :rasamautau@gmail.com

Dalam melakukan cek email di atas, pertama ditentukan huruf besar, huruf kecil dan angka, untuk @ dan titik (.)ditambah, sehingga saat ketemu karakter @ dan titik (.) program langsung mengenali.
 -->
<?php
$syarat = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]/";
$email = "fahrul@gmail.com";
     
    if (preg_match($syarat,$email)) 
        echo "Status : Cocok <br>";
    else 
        echo "Status : Tidak cocok <br>";
    
    echo '<br>Email :'; echo $email;

     echo " & ";

$username="abcefgJHr";
$uppercase = preg_match('@[A-Z]@', $username);
$lowercase = preg_match('@[a-z]@', $username);

	if(!$uppercase || !$lowercase || strlen($username)<=8){
    echo "Username, merupakan kombinasi dari huruf kecil dan besar, Dengan panjang tepat 8 karakter.";
}else{
    echo "username memenuhi kriteria";
}


 ?>