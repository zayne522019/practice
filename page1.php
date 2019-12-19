<?php

session_start();

$_SESSION['name'] = 'Howdy,Carl Gwapo';


echo '<br /><a href="page2.php">Click Here</a>';
session_unset();
session_destroy();
?>