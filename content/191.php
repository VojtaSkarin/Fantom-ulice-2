<?php
$_SESSION['pricina_smrti'] = 0;

$_SESSION['pancir_ted'] = max($_SESSION['pancir_ted'] - rand(1, 6), 0);

if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['pricina_smrti'] = 1;
}

include 'car-catch-bullet.php';

if ($_SESSION['pancir_ted'] <= 0 &&
	$_SESSION['pricina_smrti'] == 0)
{
	$_SESSION['pricina_smrti'] = 2;
}

header('Location: game.php?action=1');
?>