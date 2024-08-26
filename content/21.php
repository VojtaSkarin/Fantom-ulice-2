<?php
$_SESSION['pancir_ted'] = min($_SESSION['pancir_ted'] + 2, $_SESSION['pancir_max']);

header('Location: game.php?action=1');
?>