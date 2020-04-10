<?php

  class Std{

     public $name;
     private $id;
     public static $scount=0;

     public function __construct($name,$id){
     	self::$scount += 1;
     	$this->name = $name;
     	$this->id = $id;
     }

  }

  echo Std::$scount."<br>";
  
  $obj = new Std("name1",1);
  $obj = new Std("name1",2);
  $obj = new Std("name1",3);
  $obj = new Std("name1",4);
  $obj = new Std("name1",5);

  echo Std::$scount;

?>