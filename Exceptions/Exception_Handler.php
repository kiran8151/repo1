<?php

 $file = "C:/htdocs/testfile.txt";
 try{
 	if(!file_exists($file)){
 		throw new Exception("File doesn't exist </br>");		
 	}
 	echo "If file exist the this will be printed";
 }
   catch(Exception $e){
   	echo "Message: ".$e->getMessage();
   }

//Next function

   function checkNumber($number){

   	  if($number>1){

   	  	 throw new Exception("The value must be 1 or below </br>");
   	  	 
   	  }

   	  return true;
   }

   try{

   	   checkNumber(7);

   	   echo "If you see this, the number is 1 or below";
   }

   catch(Exception $n){

   	  echo "Message: ".$n->getMessage();
   }
?>