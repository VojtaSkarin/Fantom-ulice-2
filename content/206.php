<?php
$_SESSION['kredity'] += 200;
array_push($_SESSION['vybaveni'], 'pouta');

header('Location: game.php?action=1');
?>