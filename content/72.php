<?php
include 'catch-bullet.php';
array_push($_SESSION['vybaveni'], '_Rockville_pokoj_pravy');

header('Location: game.php?action=1');
?>