<div class="title-main">
49
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;
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
		'jmeno' => ['VÁLEČNÝ VŮZ', 'VÁLEČNÝ VŮZ', 'VÁLEČNÝM VOZEM'],
		'rod' => true,
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
Uprostřed silnice před tebou stojí podivně vyhlížející vozidlo. Vypadá jako malý náklaďák přestavěný tak, aby se podobal římskému válečnému vozu. Má dokonce na kolech připevněny kosy. Na korbě stojí mohutný polonahý muž s&nbsp;gladiátorskou helmou a&nbsp;v&nbsp;ruce drží dvouhlavňový samopal. Dává znamení řidiči, aby se rozjel a&nbsp;zahájil souboj. Nezbývá ti než bojovat s&nbsp;tímto novodobým gladiátorem.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Pokud v&nbsp;tomto souboji vozidel zvítězíš, otoč na <b>91</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s válečným vozem</a>
</div>

<img class="fullsize" src="images/49.png">

<?php
include 'post.php';
?>