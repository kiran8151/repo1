<?php

 class Test{

    public function __invoke(){

    	echo "I can act as a function now";
    }
 }

 $obj = new Test();
 $obj();
 var_dump(is_callable($obj));

?>