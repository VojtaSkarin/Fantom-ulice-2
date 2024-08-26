<div class="title-main">
299
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
		'jmeno' => ['První MOTORKÁŘ', 'Prvního MOTORKÁŘE', 'Prvním MOTORKÁŘEM'],
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
		'jmeno' => ['Druhý MOTORKÁŘ', 'Druhého MOTORKÁŘE', 'Druhým MOTORKÁŘEM'],
		'rod' => true,
		'utocna_sila' => 5,
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
Kromě lehkého zranění letící střepinou ti mohutný výbuch neublíží. Ztrácíš 2&nbsp;body STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Zásah střepinou tě usmrtil.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Kutálíš se po asfaltu, aby ses ukryl za Interceptorem, když útočnící začnou střílet. Chceš-li se zachránit, musíš je zastřelit.\n";
	echo "</div>\n";

	include 'enemy-table.php';

	echo "<div class=\"text\">\n";
	echo "V&nbsp;tomto souboji (podle pravidel pro střelbu) na tebe budou v&nbsp;každém kole boje střílet oba motorkáři, ale ty si musíš vybrat, na kterého z&nbsp;nich budeš střílet ty. Proti druhému si budeš házet na Útočné číslo jako obvykle, ale bude-li tvé Útočné číslo větší, nezraníš ho - znamená to jen, že tě jeho kulka minula. Pokud zvítězíš, otoč na <b>97</b>, ale pokud jsi byl v&nbsp;tomto souboji zasažen více než jedenkrát, sniž natrvalo své UMĚNÍ BOJE o&nbsp;1.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Bojovat s&nbsp;motorkáři</a>\n";
	echo "</div>\n";
}
?>

<img class="fullsize" src="images/motorbike.png">

<?php
include 'post.php';
?>