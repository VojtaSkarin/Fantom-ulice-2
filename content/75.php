<?php
$_SESSION['stesti_ted'] = max($_SESSION['stesti_ted'] - 1, 0);
$_SESSION['kola'] = max($_SESSION['kola'] - 1, 0);

header('Location: game.php?action=1');
?>