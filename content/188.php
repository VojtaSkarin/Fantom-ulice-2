<?php
$_SESSION['palivo'] = max($_SESSION['palivo'] - 1, 0);

header('Location: game.php?action=1');
?>