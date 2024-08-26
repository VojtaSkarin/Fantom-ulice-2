<?php
$_SESSION['stamina_ted'] = max($_SESSION['stamina_ted'] - 1, 0);

header('Location: game.php?action=1');
?>