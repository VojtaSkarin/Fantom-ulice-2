<div class="title-main">
120
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;
$_SESSION['zbran_ja'] = 2;
$_SESSION['zbran_ja_jmeno_7'] = '';
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 0;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];
$_SESSION['pristi_cil'] = 0;

$_SESSION['typ_souboje'] = Souboj::Tvari_v_tvar;
$_SESSION['utok'] = Utok::Stridave;
$_SESSION['konec'] = Konec::Smrt;

$_SESSION['nepritel'] = [
	[
		'jmeno' => ['První VLK', 'Prvního VLKA', 'Prvním VLKEM'],
		'rod' => true,
		'utocna_sila' => 8,
		'zbran' => 2,
		'vydrz_ted' => 7,
		'vydrz_max' => 7,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
	[
		'jmeno' => ['Druhý VLK', 'Druhého VLKA', 'Druhým VLKEM'],
		'rod' => true,
		'utocna_sila' => 8,
		'zbran' => 2,
		'vydrz_ted' => 8,
		'vydrz_max' => 8,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Tvá rána jde mimo a&nbsp;vlci zaútočí. V&nbsp;poslední chvíli vytasíš nůž, aby ses mohl bránit.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Bojuj s&nbsp;vlky střídavě podle pravidel pro boj tváří v&nbsp;tvář. Tvůj nůž i&nbsp;vlčí tesáky zraňují za 2&nbsp;body STAMINY. Pokud zvítězíš, otoč na <b>286</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s vlky</a>
</div>

<?php
include 'post.php';
?>