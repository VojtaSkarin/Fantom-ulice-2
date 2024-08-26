<?php
$_SESSION['rakety'] = 0;
$_SESSION['bodce'] = 0;
$_SESSION['olej'] = 0;

$_SESSION['stesti_ted'] = max($_SESSION['stesti_ted'] - 2, 0);

header('Location: game.php?action=1');
?>