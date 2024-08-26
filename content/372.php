<?php
$_SESSION['rakety'] = max($_SESSION['rakety'] - 1, 0);

header('Location: game.php?action=1');
?>