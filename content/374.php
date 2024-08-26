<div class="title-main">
374
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;
$_SESSION['utocna_sila_ja_zmena_kola'] = [];
$_SESSION['zbran_ja'] = 2;
$_SESSION['zbran_ja_jmeno_7'] = 'nožem';
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 0;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];
$_SESSION['pristi_cil'] = 0;

$_SESSION['typ_souboje'] = Souboj::Tvari_v_tvar;
$_SESSION['utok'] = Utok::Stridave;
$_SESSION['konec'] = Konec::Smrt;

$_SESSION['nepritel'] = [
	[
		'jmeno' => ['DIVOKÝ PES', 'DIVOKÉHO PSA', 'DIVOKÝM PSEM'],
		'rod' => true,
		'utocna_sila' => 7,
		'zbran' => 2,
		'vydrz_ted' => 5,
		'vydrz_max' => 5,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Vytáhneš nůž a&nbsp;když po tobě pes skočí, jsi připraven.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
K&nbsp;rozhodnutí tohoto souboje (až do smrti) použij pravidla pro boj tváří v&nbsp;tvář. Tvůj nůž i&nbsp;psovy tesáky působí zranění za 2&nbsp;body STAMINY. Pokud zvítězíš, otoč na <b>89</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat se psem</a>
</div>

<?php
include 'post.php';
?>