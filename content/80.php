<?php
$_SESSION['stesti_ted'] = max($_SESSION['stesti_ted'] - 1, 0);

header('Location: game.php?action=1');
?>