<?php

  interface Sample{

    public function getSqrt($num);

    public function getMod($num1,$num2);

  }

  class Subclass implements Sample{

  	public function getSqrt($num){
  
      if(is_numeric($num)){

       $res = sqrt($num);

       echo "The square root of $num is:".$res."</br>";
      }
      else{

      	 echo "Please enter a numeric digit";
      } 
  	}

  	public function getMod($num1,$num2){
   
       if(is_numeric($num1) && is_numeric($num2)){
          $res1 = fmod($num1, $num2);
          echo "The modulus value of $num1 and $num2 are: ".$res1;
      }
      else{

      	  echo "Input is not valid";
      } 
  	}
  }

  $obj = new Subclass();
  $obj->getSqrt(225);
  $obj->getMod(27,5);

?>