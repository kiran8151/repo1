<?php

  class Member{

    private $id;
    public $name;

    public function __construct($id,$name){

        $this->id = $id;
        $this->name = $name;

    }

    public function __debugInfo(){
    	return [
    		     'StdId' => $this->id * 7,
    		     'Address'=> "Hyd"
    		   ];
    }
  } 

  $obj = new Member(7,"jason");
  var_dump($obj);

?>