<?php
$_SESSION['kredity'] += 150;
array_push($_SESSION['vybaveni'], 'boxer');

header('Location: game.php?action=1');
?>