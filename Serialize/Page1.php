<?php

 include "Serialize.php";

 $obj = new Employee();
 $obj->Empname = "Travis";
 $obj->Empid = 576;

 $s = serialize($obj);

 echo $s;

 file_put_contents('store.txt', $s);

?>