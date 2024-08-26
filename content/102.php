<div class="title-main">
102
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;
$_SESSION['zbran_ja'] = 0;
$_SESSION['zbran_ja_jmeno_7'] = '';
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 0;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];

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
	],
];
?>

<div class="text">
Dáš Amber znamení, aby otevřela dveře a&nbsp;začala střílet na Pekelné psy. Tvé vlastní dveře zasype déšť kulek, protože je otevřeš právě ve chvíli, kdy vaši protivníci zahájí palbu. Všuchni jste poměrně dobře kryti svými vozidly. Soustředíš se na dva z&nbsp;Pekelných psů a&nbsp;Amber opětuje palbu druhých dvou.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
V tomto souboji (podle pravidel pro střelbu) na tebe budou v&nbsp;každém kole boje střílet oba Pekelní psi, ale ty si musíš vybrat, na kterého z&nbsp;nich budeš střílet ty. Proti druhému si budeš házet na Útočné číslo jako obvykle, ale bude-li tvé Útočné číslo větší, nezraníš ho - znamená to jen, že tě jeho kulka minula. Pokud zvítězíš, otoč na <b>125</b>, ale pokud jsi byl v této přestřece zasažen více než jedenkrát, sniž natrvalo své UMĚNÍ BOJE o&nbsp;1.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s pekelnými psy</a>
</div>

<?php
include 'post.php';
?>