<div class="title-main">
95
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
		'jmeno' => ['MOTORKA', 'MOTORKU', 'MOTORKOU'],
		'rod' => false,
		'utocna_sila' => 6,
		'zbran' => 0,
		'vydrz_ted' => 9,
		'vydrz_max' => 9,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Než je stačíš dohonit, obrátí se a&nbsp;rozjedou se proti tobě. Z&nbsp;kulometu nad reflektorem šlehají červené a&nbsp;bílé plameny, když na tebe chrlí proud střel. Sešlápneš plyn až k&nbsp;podlaze a&nbsp;rozjedeš Interceptor proti nim, zároveň tiskneš spoušť kulometu.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Pokud zvítězíš, otoč na <b>249</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s motorkou</a>
</div>

<img class="fullsize" src="images/motorbike.png">

<?php
include 'post.php';
?>