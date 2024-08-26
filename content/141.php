<?php
$_SESSION['kredity'] -= 100;
$_SESSION['medkit'] -= 2;
$_SESSION['stesti_ted'] = min($_SESSION['stesti_ted'] + 1, $_SESSION['stesti_max']);

header('Location: game.php?action=1');
?>