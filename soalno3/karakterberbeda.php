<?php  

function random ($panjang)
{
	$karakter  ='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';
	$uppercase = preg_match('@[.]@', $string);
	for($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
		$string .=$karakter{$pos};

	}
	return $string;

}
echo random(32); //silahkan atur jumlah karakter yang ingin diacak