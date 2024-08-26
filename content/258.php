<?php
$_SESSION['medkit'] = max($_SESSION['medkit'] - 1, 0);

header('Location: game.php?action=1');
?>