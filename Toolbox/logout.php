<?php
session_start();
$_SESSION['log'] = 0;
$_SESSION['logBDE'] = 0;
$_SESSION['logcesi'] = 0;

header('location: connexion.php');
exit;
// frees up the connection

?>
