<?php
    session_start();
    ini_set('session.cookie_lifetime',  0);
    if(!isset($_SESSION['usrno']) || $_SESSION['lev']!='level64.php')
    {
        header('Location: ../validate.php');
    }
    else 
    {
    	?><img src="keyandlock.jpg"/><?php
    }
    ?> 