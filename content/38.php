<?php
$_SESSION['medkit'] = max($_SESSION['medkit'] - 1, 0);
$_SESSION['stamina_ted'] = min($_SESSION['stamina_ted'] + 4, $_SESSION['stamina_max']);

header('Location: game.php?action=1');
?>