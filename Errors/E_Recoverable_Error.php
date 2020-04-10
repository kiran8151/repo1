<?php

 class Test{

     public function __toString(){
     	return "Object is a string";
     }
 }

   $obj = new Test();
   echo (string) $obj;
?>