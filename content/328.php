<div class="title-main">
328
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
];
?>

<div class="text">
Stiskneš tlačítko a&nbsp;s&nbsp;uspokojením sleduješ, jak se dvě z&nbsp;aut vzápětí srazí. To zbylé, Toyota, pokračuje v&nbsp;pronásledování a&nbsp;začíná střílet z&nbsp;kulometů umístěných vedle reflektorů.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Pokud v&nbsp;tomto souboji vozidel zvítězíš, otoč na <b>265</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s&nbsp;toyotou</a>
</div>

<?php
include 'post.php';
?>