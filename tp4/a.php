<?php
  $ar =  array("un"=> "smia");
   $ra = array_flip($ar);
   foreach($ra as $key => $val){
    echo "$key => $val"; 
   }
?>