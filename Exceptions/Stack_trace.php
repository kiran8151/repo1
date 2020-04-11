<?php

  function old(){

  	 throw new Exception("There is exception in function");
  	 
  }

  function latest(){
  	 old();
  	 echo "This function is calling old function";
  }

  function first(){
  	  latest();
  	  echo "This function is calling latest function";
  }

  try {	
  	  first();
  } 

  catch (Exception $e) {
  	
  	var_dump($e->getTrace());
  }

?>