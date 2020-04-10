<?php

class Demo1{

  public function __construct(){

  	 echo "class A constructor.</br>";

  }

}

class Demo2 extends Demo1{

	public function __construct(){

        parent::__construct();

		echo "class B constructor.</br>";
	}
}

$obj = new Demo2();

?>