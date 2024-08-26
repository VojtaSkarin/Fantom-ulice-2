<div class="title-main">
284
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;
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
		'jmeno' => ['TOYOTA', 'TOYOTU', 'TOYOTOU'],
		'rod' => false,
		'utocna_sila' => 9,
		'zbran' => 0,
		'vydrz_ted' => 15,
		'vydrz_max' => 15,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
	[
		'jmeno' => ['JAGUÁR E', 'JAGUÁR E', 'JAGUÁREM E'],
		'rod' => true,
		'utocna_sila' => 10,
		'zbran' => 0,
		'vydrz_ted' => 12,
		'vydrz_max' => 12,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
	[
		'jmeno' => ['COMMODOR', 'COMMODOR', 'COMMODOREM'],
		'rod' => true,
		'utocna_sila' => 8,
		'zbran' => 0,
		'vydrz_ted' => 13,
		'vydrz_max' => 13,
		'poskozeni' => 0,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Trojice pronásledovatelů se stále přibližuje a&nbsp;první z&nbsp;nich, Toyota, začíná střílet z&nbsp;kulometů umístěných vedle reflektorů.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Bojuj s&nbsp;těmito auty střídavě. Pokud v&nbsp;tomto souboji vozidel zvítězíš, otoč na <b>265</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s&nbsp;útočníky</a>
</div>

<?php
include 'post.php';
?>