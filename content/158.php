<div class="title-main">
158
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;
$_SESSION['zbran_ja'] = 0;
$_SESSION['zbran_ja_jmeno_7'] = '';
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 3;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];
$_SESSION['pristi_cil'] = 0;

$_SESSION['typ_souboje'] = Souboj::Vozidla;
$_SESSION['utok'] = Utok::Stridave;
$_SESSION['konec'] = Konec::Smrt;

$_SESSION['nepritel'] = [
	[
		'jmeno' => ['LIMUZÍNA', 'LIMUZÍNU', 'LIMUZÍNOU'],
		'rod' => false,
		'utocna_sila' => 10,
		'zbran' => 0,
		'vydrz_ted' => 19,
		'vydrz_max' => 19,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	]
];
?>

<div class="text">
Nastartuješ Interceptor a&nbsp;otočíš ho proti útočníkům. Jeho reflektory osvětlí upravenou limuzínu s&nbsp;přivařenými silnými ocelovými pláty a&nbsp;zahrocenou tyčí vyčnívající z&nbsp;předních výztuh. Po obou stranách trčící hlavně kulometů náhle začnou chrlit oheň.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Limuzína je příliš blízko na to, abys mohl použít raketu, i&nbsp;kdybys ještě nějakou měl, a&nbsp;tak musíš opětovat palbu svými kulomety. Pokud v tomto souboji vozidel přežiješ tři kola boje, otoč na <b>67</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s&nbsp;limuzínou</a>
</div>

<img class="fullsize" src="images/158.png">

<?php
include 'post.php';
?>