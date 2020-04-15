<?php

  include "Serialize.php";

  $u = file_get_contents("store.txt");
  $us = unserialize($u);

  $us->getTeamInfo();

?>