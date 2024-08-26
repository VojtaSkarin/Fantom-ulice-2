<div class="title-main">
291
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;
$_SESSION['utocna_sila_ja_zmena_kola'] = [];
$_SESSION['zbran_ja'] = 0;
$_SESSION['zbran_ja_jmeno_7'] = '';
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 1;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];
$_SESSION['pristi_cil'] = 0;

$_SESSION['typ_souboje'] = Souboj::Strelba;
$_SESSION['utok'] = Utok::Zaroven;
$_SESSION['konec'] = Konec::Smrt;

$_SESSION['nepritel'] = [
	[
		'jmeno' => ['DUELANT', 'DUELANTA', 'DUELANTEM'],
		'rod' => true,
		'utocna_sila' => 9,
		'zbran' => 0,
		'vydrz_ted' => 9,
		'vydrz_max' => 9,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Maskovaný muž sáhne do kabiny autobusu a&nbsp;vytáhne mahagonovou skříňku. Uvnitř jsou dvě překásné pistole. Každou z&nbsp;nich nabije jednou kulkou a&nbsp;pak řekne: &bdquo;Vyber si zbraň.&ldquo; Vezmeš si jednu pistoli a&nbsp;potěžkáváš ji, aby si ruka zvykla na její váhu. Pak se k&nbsp;sobě obrátíte zády a&nbsp;muž ti řekne, abys ušel deset kroků, otočil se a&nbsp;vystřelil. Zhluboka se nadechneš a&nbsp;hlasitě odpočítáváš deset kroků. Obrátíš se a&nbsp;vidíš maskovaného muže s&nbsp;pistolí namířenou na tebe. Oba vystřelíte najednou.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Rozhodni jedno kolo boje podle pravidel pro střelbu. Pokud souboj přežiješ, otoč na <b>208</b>.
</div>

<div class="link">
<a href="game.php?action=1">Utkat se v duelu</a>
</div>

<img class="fullsize" src="images/291.png">

<?php
include 'post.php';
?>