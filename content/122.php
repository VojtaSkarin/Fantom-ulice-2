<?php
$_SESSION['kredity'] += 200;
$_SESSION['kola'] = max($_SESSION['kola'] - 1, 0);

header('Location: game.php?action=1');
?>