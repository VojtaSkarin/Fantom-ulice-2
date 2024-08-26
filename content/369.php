<?php
$_SESSION['kredity'] = max($_SESSION['kredity'] - 200, 0);

header('Location: game.php?action=1');
?>