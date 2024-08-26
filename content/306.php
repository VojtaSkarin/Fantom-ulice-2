<?php
$_SESSION['stesti_ted'] = min($_SESSION['stesti_ted'] + 1, $_SESSION['stesti_max']);
$_SESSION['palivo'] += 1;

header('Location: game.php?action=1');
?>