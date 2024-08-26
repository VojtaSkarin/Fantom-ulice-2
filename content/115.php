<div class="title-main">
115
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
$_SESSION['utok'] = Utok::Zaroven;
$_SESSION['konec'] = Konec::Smrt;

$_SESSION['nepritel'] = [
	[
		'jmeno' => ['První POUŠTNÍ BUGINA', 'První POUŠTNÍ BUGINU', 'První POUŠTNÍ BUGINOU'],
		'rod' => false,
		'utocna_sila' => 7,
		'zbran' => 0,
		'vydrz_ted' => 10,
		'vydrz_max' => 10,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
	[
		'jmeno' => ['Druhá POUŠTNÍ BUGINA', 'Druhou POUŠTNÍ BUGINU', 'Druhou POUŠTNÍ BUGINOU'],
		'rod' => false,
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
Jedeš asi hodinu, aniž bys zahlédl nebo slyšel známky života, pak si ale všimneš dvou oblaků prachu zvedajících se po stranách silnice. Blíží se, až nakonec rozeznáš, co je způsobuje - dvě pouštní buginy. Každá je vyzbrojená kulometem a&nbsp;spustí palbu, jakmile jsi v&nbsp;dostřelu.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
V&nbsp; tomto souboji vozidel na tebe budou v&nbsp;každém kole boje střílet obě buginy, ale ty si musíě vybrat, na kterou z&nbsp;nich budeš střílet ty. Proti druhé si budeš házet na Útočné číslo jako obvykle, ale bude-li tvé Útočné číslo větší, nezraníš ho<sup>1</sup> - znamená to jen, že tě její kulky minuly. Samozřejmě pokud bude její Útočné číslo větší, kulky zasáhnou Interceptor a&nbsp;poškodí ho. Pokud zvítězíš, otoč na <b>194</b>
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s buginami</a>
</div>

<img class="fullsize" src="images/115.png">

<div class="note">
1. Nevyjádřeným předmětem je ve větě bugina; použití mužského rodu je zřejmě důsledkem vložení opakujícího se textu.
</div>

<?php
include 'post.php';
?>