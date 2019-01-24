<?php
session_start();
unset($_SESSION['log']);
unset($_SESSION['logBDE']);
unset($_SESSION['logcesi']);

header('location: connexion.php');
exit;
// frees up the connection

?>