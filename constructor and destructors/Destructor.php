<?php
class MyObject{
    function __construct(){
        echo "I have just been created.";
    }
    function __destruct(){
        echo "I lived only for 5 seconds in the memory.";
    }
}
    echo date('h:i:s');
    $testObj = new MyObject();
    sleep(5);
    unset($testObj);
    echo date('h:i:s');
