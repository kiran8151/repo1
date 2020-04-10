<?php

  //NOTICE,Warning,deprecated,error

  trigger_error("User generated notice", E_USER_NOTICE);

  trigger_error("User generated warning", E_USER_WARNING);

  trigger_error("user generated dep error", E_USER_DEPRECATED);

  trigger_error("User generated error", E_USER_ERROR);

?>