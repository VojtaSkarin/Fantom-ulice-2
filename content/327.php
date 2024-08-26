<?php
$_SESSION['stamina_ted'] = min($_SESSION['stamina_ted'] + 1, $_SESSION['stamina_max']);

header('Location: game.php?action=1');
?>