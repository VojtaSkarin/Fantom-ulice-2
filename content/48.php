<div class="title-main">
48
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;
$_SESSION['zbran_ja'] = 2;
$_SESSION['zbran_ja_jmeno_7'] = 'nožem';
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 0;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];

$_SESSION['typ_souboje'] = Souboj::Tvari_v_tvar;
$_SESSION['utok'] = Utok::Stridave;
$_SESSION['konec'] = Konec::Poskozeni;

$_SESSION['nepritel'] = [
	[
		'jmeno' => ['LUPIČ', 'LUPIČE', 'LUPIČEM'],
		'rod' => true,
		'utocna_sila' => 7,
		'zbran' => 2,
		'vydrz_ted' => 10,
		'vydrz_max' => 10,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Pevně sevřeš nůž, přikrčíš se a&nbsp;čekáš, až se lupič pohne. Najednou vykřikne a&nbsp;vrhne se na tebe.
</div>

<?php
include 'enemy-table.php';
?>

<img class="fullsize" src="images/rifle.png">

<div class="text">
Rozhodni souboj podle pravidel pro boj tváří v&nbsp;tvář. Tvůj nůž i&nbsp;lupičovo páčidlo působí zranění za 2 body STAMINY. Pokud zvítězíš, otoč na <b>138</b>. Pokud tě omráčí, otoč na <b>100</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s lupičem</a>
</div>

<?php
include 'post.php';
?>