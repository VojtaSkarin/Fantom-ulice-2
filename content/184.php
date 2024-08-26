<div class="title-main">
184
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

$_SESSION['typ_souboje'] = Souboj::Strelba;
$_SESSION['utok'] = Utok::Zaroven;
$_SESSION['konec'] = Konec::Smrt;

$_SESSION['nepritel'] = [
	[
		'jmeno' => ['První PEKELNÝ PES', 'Prvního PEKELNÉHO PSA', 'Prvním PEKELNÝM PSEM'],
		'rod' => true,
		'utocna_sila' => 7,
		'zbran' => 0,
		'vydrz_ted' => 13,
		'vydrz_max' => 13,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
	[
		'jmeno' => ['Druhý PEKELNÝ PES', 'Druhého PEKELNÉHO PSA', 'Druhým PEKELNÝM PSEM'],
		'rod' => true,
		'utocna_sila' => 8,
		'zbran' => 0,
		'vydrz_ted' => 14,
		'vydrz_max' => 14,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	]
];
?>

<div class="text">
Pekelní psi jsou příliš rozvášnění, než aby dodrželi čestné slovo. Vytáhnou zbraně a&nbsp;začíná přestřelka. Soustředíš se na dva z&nbsp;nich a&nbsp;Amber opětuje palbu druhých dvou.
</div>

<?php
include 'enemy-table.php';
?>

<img class="fullsize" src="images/rifle.png">

<div class="text">
V&nbsp;tomto souboji (podle pravidel pro střelbu) na tebe budou v&nbsp;každém kole boje střílet oba Pekelní psi, ale ty si musíš vybrat, na kterého z&nbsp;nich budeš střílet ty. Proti druhému si budeš házet na Útočné číslo jako obvykle, ale bude-li tvé Útočné číslo větší, nezraníš ho - znamená to jen, že tě jeho kulka minula. Pokud zvítězíš, otoč na <b>69</b>, ale pokud jsi byl v&nbsp;této přestřelce zasažen více než jedenkrát, sniž natrvalo své UMĚNÍ BOJE o&nbsp;1.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s pekelnými psy</a>
</div>

<?php
include 'post.php';
?>