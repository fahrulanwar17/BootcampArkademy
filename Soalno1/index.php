<?php  
 $jsondata=file_get_contents('biodata.json');
 $data=json_decode($jsondata,true);

var_dump($data);

?>


 