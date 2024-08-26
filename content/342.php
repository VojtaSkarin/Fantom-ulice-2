<?php
$_SESSION['pancir_ted'] = max($_SESSION['pancir_ted'] - rand(1, 6), 0);

header('Location: game.php?action=1');
?>