<div class="title-main">
331
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
		'jmeno' => ['DŽÍP', 'DŽÍP', 'DŽÍPEM'],
		'rod' => true,
		'utocna_sila' => 9,
		'zbran' => 0,
		'vydrz_ted' => 14,
		'vydrz_max' => 14,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Amber najednou varovně vykřikne a&nbsp;ukáže na džíp, který se rychle blíží po silnici k&nbsp;vám. &bdquo;Pekelní psi! Ti samí, co předtím zaútočili na mě.&ldquo; Džíp má vzadu věžičku s&nbsp;dvouhlavňovým kulometem a&nbsp;v&nbsp;okamžiku, kdy se octnete v&nbsp;dostřelu, zahájí střelec palbu.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Pokud v&nbsp;tomto souboji vozidel zvítězíš, otoč na <b>7</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s&nbsp;džípem</a>
</div>

<img class="fullsize" src="images/331.png">

<?php
include 'post.php';
?>