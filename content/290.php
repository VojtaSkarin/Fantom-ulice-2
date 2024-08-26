<div class="title-main">
290
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
Kola drhnou o&nbsp;vozovku, až se od nich kouří. Udržíš smyk pod kontrolou a&nbsp;rozjedeš se proti blížícímu se obrněnému vozu, který na tebe začne chrlit kulky ze svého kulometu.
</div>

<?php
include 'enemy-table.php';
?>

<img class="fullsize" src="images/car.png">

<div class="text">
Pokud zvítězíš, otoč na <b>106</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s&nbsp;obrněným vozem</a>
</div>

<?php
include 'post.php';
?>