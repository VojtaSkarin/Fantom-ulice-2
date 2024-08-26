<?php
$_SESSION['stamina_ted'] = max($_SESSION['stamina_ted'] - 1, 0);

if ($_SESSION['stamina_ted'] > 0) {
	$_SESSION['stamina_ted'] = min($_SESSION['stamina_ted'] + 4, $_SESSION['stamina_max']);
	$_SESSION['medkit'] = max($_SESSION['medkit'] - 1, 0);
}

header('Location: game.php?action=1');
?>