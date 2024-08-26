<?php
$_SESSION['stamina_ted'] = max($_SESSION['stamina_ted'] - 1, 0);
array_push($_SESSION['vybaveni'], 'krysí kousnutí');

header('Location: game.php?action=1');
?>