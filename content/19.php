<?php
$_SESSION['kola'] = max($_SESSION['kola'] - 1, 0);

header('Location: game.php?action=1');
?>