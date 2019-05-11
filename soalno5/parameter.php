<h1> BILANGAN GANJIL </h1>

<form action=" " method="GET">
     Banyak : <input type ='text' name ='banyak'><br><br>
     Bilangan : <select name='bil'>
         <option value ='ganjil'>Ganjil</option>
             </select><br>
     <br><input type='submit' name='tampil' value='tampil'>
</form>

<?php

if(isset($_GET['tampil'])){ //isset :sebuah variable yang memberi tahu sudah diset atau belum

     $bil = $_GET['bil'];
     $banyak=$_GET['banyak'];

     function ganjil($a,$b=0,$c=0){
         if($b<$a){
             if($b==0){
                  echo $c+=1;
             }else
                  echo $c+=2;
              echo ",&nbsp";
              $b++;
              ganjil($a,$b,$c);
         }
     }

     
     switch ($bil){
        case "ganjil":
             echo "Deret Bilangan Ganjil : ";
             ganjil($banyak);
             break;
        
        default:
             break;
      }
   }
?>