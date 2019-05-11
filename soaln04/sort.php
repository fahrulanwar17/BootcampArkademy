
<?php  
$ukuran=10;
for($a=1; $a<=$ukuran; $a++){
	for($b=1; $b<=$ukuran; $b++){
		if(($a==1) || ($a==$ukuran)){
			echo "* ";
		} else{
			echo "* ";
		}
	}
	echo "<br/>";
}