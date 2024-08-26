<div class="title-main">
83
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = -2;
$_SESSION['zbran_ja'] = 0;
$_SESSION['zbran_ja_jmeno_7'] = '';
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 0;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];

$_SESSION['typ_souboje'] = Souboj::Vozidla;
$_SESSION['utok'] = Utok::Stridave;
$_SESSION['konec'] = Konec::Smrt;

$_SESSION['nepritel'] = [
	[
		'jmeno' => ['VRTULNÍK', 'VRTULNÍK', 'VRTULNÍKEM'],
		'rod' => true,
		'utocna_sila' => 8,
		'zbran' => 0,
		'vydrz_ted' => 11,
		'vydrz_max' => 11,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Skočíš do Interceptoru a&nbsp;zahájíš palbu na vzdušné piráty nad tebou. Ti vzápětí střelbu opětují.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Během tohoto souboje vozidel sniž svou PALEBNOU SÍLU o&nbsp;2&nbsp;kvůli nepojízdnosti svého auta. Pokud zvítězíš, otoč na <b>305</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s vrtulníkem</a>
</div>

<?php
include 'post.php';
?>