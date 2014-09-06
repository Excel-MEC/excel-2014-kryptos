<?php

require_once("facebook.php");
session_start();

ini_set('session.cookie_lifetime',  0);

session_destroy();

session_start();

$_SESSION['msg']="Successfully Logged out";


$config = array(
				'appId'  => '695701450444836',
            	'secret' => 'dfbc8b87921a6c1f9ce5f17bcd016622'
				);
$facebook = new Facebook($config);
$flag = FALSE;
$params = array( 'next' => 'https://events-excelmec.org/kryptos/hunt.php' );

$logout_url=$facebook->getLogoutUrl($params); 
$facebook->destroySession();

header('Location:hunt.php');


?>
