<?php
$_SESSION['umeni_boje_ted'] = min($_SESSION['umeni_boje_ted'] + 1, $_SESSION['umeni_boje_max']);
$_SESSION['stamina_ted'] = min($_SESSION['stamina_ted'] + 4, $_SESSION['stamina_max']);

header('Location: game.php?action=1');
?>