<?php
$_SESSION['pricina'] = 0;

$_SESSION['pancir_ted'] = max($_SESSION['pancir_ted'] - 2, 0);

if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['pricina'] = 1;
}

$_SESSION['pancir_ted'] = max($_SESSION['pancir_ted'] - rand(1, 6), 0);

if ($_SESSION['pricina'] == 0 &&
	$_SESSION['pancir_ted'] <= 0)
{
	$_SESSION['pricina'] = 2;
}

header('Location: game.php?action=1');
?>