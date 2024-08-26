<?php
$_SESSION['stesti_ted'] = min($_SESSION['stesti_ted'] + 1, $_SESSION['stesti_max']);
$_SESSION['um_boje_ted'] = min($_SESSION['um_boje_ted'] + 1, $_SESSION['um_boje_max']);
array_push($_SESSION['vybaveni'], 'neprůstřelná vesta');

header('Location: game.php?action=1');
?>