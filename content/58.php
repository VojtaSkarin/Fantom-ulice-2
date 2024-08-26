<?php
$_SESSION['stamina_ted'] = min($_SESSION['stamina_ted'] + 2, $_SESSION['stamina_max']);
array_push($_SESSION['vybaveni'], 'granát');

header('Location: game.php?action=1');
?>