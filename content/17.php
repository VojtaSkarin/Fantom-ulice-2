<?php
$_SESSION['pancir_ted'] = max($_SESSION['pancir_ted'] - 2, 0);

header('Location: game.php?action=1');
?>