<?php

  class FileException extends Exception{

  	 public function fileErrorMessage(){

  	 	$errorMessage = 'File error '. $this->getMessage().
  	 	'</br> Error on line'.$this->getLine().
  	 	'in'.$this->getfile();

  	 	return $errorMessage;
  	 }
  }

  $file = "c:/htdocs/file7.txt";
  try{

  	  if(!file_exists($file)){

  	  	 throw new FileException("File does not exist");
  	  	 
  	  }
  	  echo "This is  success message";
  }
  catch(FileException $e){

  	 echo "Message;" .$e->fileErrorMessage();
  }


         //Second function
  

  $acountNumber = "11223344556677889";
  $pin = "1234";

  try{
     
      if(strlen($acountNumber) > 16 && strlen($pin) > 4){

      	throw new Exception("Invalid account number and pin");
      	
      }

      echo "This is a success message";
  }

  catch(Exception $e){

     echo "Message: ".$e->getMessage();
  }

?>