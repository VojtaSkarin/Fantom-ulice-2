<?php
$_SESSION['stamina_ted'] = max($_SESSION['stamina_ted'] - 2, 0);

header('Location: game.php?action=1');
?>