<?php

  class Cons{

    private $fname;
    private $lname;
    private $age;

    public function __construct($fname,$lname,$age){
      
       $this->fname = $fname;
       $this->lname = $lname;
       $this->age = $age;
    }

    public function showDetails(){

    	echo $this->fname."<br>";
    	echo $this->lname."<br>";
    	echo $this->age."<br>";

    }

  }

  $obj = new Cons("greame","smith","35");
  $obj->showDetails();

?>