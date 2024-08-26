<div class="title-main">
294
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;
$_SESSION['utocna_sila_ja_zmena_kola'] = [];
$_SESSION['zbran_ja'] = 0;
$_SESSION['zbran_ja_jmeno_7'] = '';
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 4;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];
$_SESSION['pristi_cil'] = 0;

$_SESSION['typ_souboje'] = Souboj::Srazky;
$_SESSION['utok'] = Utok::Stridave;
$_SESSION['konec'] = Konec::Smrt;

$_SESSION['nepritel'] = [
	[
		'jmeno' => ['ŽLUTÝ FORD', 'ŽLUTÝ FORD', 'ŽLUTÝM FORDEM'],
		'rod' => true,
		'utocna_sila' => 8,
		'zbran' => 0,
		'vydrz_ted' => 16,
		'vydrz_max' => 16,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Před tebou se objeví bílý dum, u kterého se máte otočit. Šlápneš na brzdy a&nbsp;strhneš volant doleva. Ujedeš několik metrů pozpátku v&nbsp;oblacích zvířeného prachu, pak znovu zařadíš rychlost a&nbsp;vyrazíš k&nbsp;cílové čáře. Ford se otočí stejně jako ty a&nbsp;brzy je opět za tebou. Dostane se na tvou úroveň a&nbsp;řidič se opře do volantu, aby bokem narazil do Interceptoru. Zdá se, že chce rozhodnout o&nbsp;výsledku souboje srážkami.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Úspěšný náraz sníží PANCÍŘ auta o&nbsp;2&nbsp;body. Pokud přežiješ čtyři kola boje, otoč na <b>334</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s&nbsp;fordem</a>
</div>

<?php
include 'post.php';
?>