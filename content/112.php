<?php
$_SESSION['stamina_ted'] = min($_SESSION['stamina_ted'] + 2, $_SESSION['stamina_max']);
$_SESSION['palivo'] += 1;
array_push($_SESSION['vybaveni'], '_Rockville_obchod');

header('Location: game.php?action=1');
?>