<?php

 class Employee{

    public $Empname;
    public $Empid;

    public function showEmpData(){

      echo "Employee name is: ".$this->Empname."</br>";
      echo "Employee id is:" .$this->Empid."</br>";
    }
 }

 class Team{

 	 public $teamid;
 	 public $teamname;
 	 public $teamcode;

 	 public function getTeamInfo(){

 	 	echo "Team name is:" .$this->teamname."</br>";
 	 }

 	 public function __sleep(){

        return array_keys(get_object_vars($this));
 	 }

 	 public function __wakeup(){

 	 	echo "back from hibernation...";
 	 }
 }

?>