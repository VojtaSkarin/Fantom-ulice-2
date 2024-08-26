<?php
$_SESSION['stamina_ted'] = max($_SESSION['stamina_ted'] - rand(1, 6) - 2, 0);

header('Location: game.php?action=1');
?>