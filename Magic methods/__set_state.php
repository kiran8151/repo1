<?php

 class Test{

   public $value1;
   public $value2;

   // public function __construct(){

   // 	  $this->value1 = 700;
   // 	  $this->value2 = "Name";
   // }

   public static function __set_state(array $array){
   	  $tmp = new Test();
   	  $tmp->value1 = $array['value1'];
   	  $tmp->value2 = $array['value2'];
   	  return $tmp;
   }

 }

  $obj = new Test();
  $obj->value1 = 700;
  $obj->value2 = "foo";
  eval('$b= '. var_export($obj,true). ';');
  var_dump($b);
?>