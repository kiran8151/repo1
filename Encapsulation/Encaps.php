<?php
 
  class Encaps{

  	 private $balance = 0;

  	 public function deposite($amount){
  	 	$credit = $this->balance + $amount;
  	 	echo "Amount deposited in your account </br>";
  	 	echo "Total balance is: " .$credit. "</br>";
  	 }

  	 public function getBalance(){
  	 	return $this->balance;
  	 }

  	 public function withdraw($amount){
  	 	if($amount <= $this->balance){
  	 		$rem = $this->balance - $amount;
  	 		echo "Amount is withdrawn </br>";
  	 		echo "Remainnig amount is: ".$rem. "</br>";
  	 	}
  	 	else{
  	 		echo "Insufficient balance";
  	 	}
  	 }
  }

  $obj = new Encaps();
  echo $obj->getBalance();
  $obj->deposite(10000);
  $obj->withdraw(3000);

?>