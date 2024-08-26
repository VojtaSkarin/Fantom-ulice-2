<?php
$_SESSION['pancir_ted'] = max($_SESSION['pancir_ted'] - 1, 0);

header('Location: game.php?action=1');
?>