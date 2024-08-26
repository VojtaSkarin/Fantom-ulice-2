<?php
$_SESSION['stesti_ted'] = min($_SESSION['stesti_ted'] + 1, $_SESSION['stesti_max']);

header('Location: game.php?action=1');
?>