<?php
array_push($_SESSION['vybaveni'], 'řetěz');

header('Location: game.php?action=1');
?>