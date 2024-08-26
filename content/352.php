<div class="title-main">
352
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = -2;
$_SESSION['utocna_sila_ja_zmena_kola'] = [];
$_SESSION['zbran_ja'] = 0;
$_SESSION['zbran_ja_jmeno_7'] = '';
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 0;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];
$_SESSION['pristi_cil'] = 0;

$_SESSION['typ_souboje'] = Souboj::Vozidla;
$_SESSION['utok'] = Utok::Stridave;
$_SESSION['konec'] = Konec::Smrt;

$_SESSION['nepritel'] = [
	[
		'jmeno' => ['OBRNĚNÝ VŮZ', 'OBRNĚNÝ VŮZ', 'OBRNĚNÝM VOZEM'],
		'rod' => true,
		'utocna_sila' => 9,
		'zbran' => 0,
		'vydrz_ted' => 20,
		'vydrz_max' => 20,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Kola drhnou o&nbsp;vozovku, až se od nich kouří. Ale nezvládneš řízení a&nbsp;sjedeš s&nbsp;autem do mělkého příkopu u&nbsp;silnice. Obrněný vůz se blíží a&nbsp;ty vidíš záblesky výstřelů z&nbsp;kulometů v&nbsp;jeho střelecké věži.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Během tohoto souboje vozidel sniž svou PALEBNOU SÍLU o&nbsp;2 kvůli nepojízdnosti tvého<sup>1</sup> auta. Pokud zvítězíš, otoč na <b>33</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bránit se obrněnému vozu</a>
</div>

<div class="note">
1. Přivlastňuje se k&nbsp;podmětu věty, jímž jsi <i>ty</i>, proto sem patří zvratné zájmeno.
</div>

<?php
include 'post.php';
?>