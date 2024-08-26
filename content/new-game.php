<?php

// Init variables
$_SESSION['smrt'] = false;
$_SESSION['stav'] = 'new-game';

$_SESSION['umeni_boje_max'] = rand(1, 6) + 6;
$_SESSION['umeni_boje_ted'] = $_SESSION['umeni_boje_max'];

$_SESSION['stamina_max'] = rand(1, 6) + rand(1, 6) + 24;
$_SESSION['stamina_ted'] = $_SESSION['stamina_max'];

$_SESSION['medkit'] = 10;

$_SESSION['stesti_max'] = rand(1, 6) + 6;
$_SESSION['stesti_ted'] = $_SESSION['stesti_max'];

$_SESSION['palebna_sila_max'] = rand(1, 6) + 6;
$_SESSION['palebna_sila_ted'] = $_SESSION['palebna_sila_max'];

$_SESSION['pancir_max'] = rand(1, 6) + rand(1, 6) + 24;
$_SESSION['pancir_ted'] = $_SESSION['pancir_max'];

$_SESSION['rakety'] = 4;
$_SESSION['bodce'] = 3;
$_SESSION['olej'] = 2;
$_SESSION['kola'] = 2;
$_SESSION['palivo'] = 1;

$_SESSION['kredity'] = 200;

$_SESSION['vybaveni'] = array();

header('Location: game.php?action=1');
?>

<title>
Fantom ulice - Nová hra
</title>