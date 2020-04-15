<?php

    include "Serialize.php";

    $ob = new Team();
    $ob->teamid = 76;
    $ob->teamname = "teamA";
    $ob->teamcode = 345;

    $t = serialize($ob);

    echo $t;

    file_put_contents('store.txt', $t);

?>