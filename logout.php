<?php

session_start();

ini_set('session.cookie_lifetime',  0);

session_destroy();

session_start();

header('Location:start.php');


?>
