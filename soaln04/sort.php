<?php
	$nilai = [35, 20, 31, 15, 13];
	sort($nilai); // Hasil: (13, 15, 20, 31, 35 )

	for($i = 0;  $i < count($nilai); $i++ ){
 
		echo $nilai[$i];
		echo '<br>';
	}
?>