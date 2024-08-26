<div class="title-main">
116
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = -2;
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
		'jmeno' => ['LUPIČ', 'LUPIČE', 'LUPIČEM'],
		'rod' => true,
		'utocna_sila' => 8,
		'zbran' => 0,
		'vydrz_ted' => 12,
		'vydrz_max' => 12,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	]
];
?>

<div class="text">
Kulka tě zasáhne do ramene. Hoď jednou kostkou a&nbsp;výsledek odečti od své STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Kulka tě zabila.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Přemůžeš bolest, posadíš se a&nbsp;výstřel oplatíš.\n";
	echo "</div>\n";
	
	include 'enemy-table.php';
	
	echo "<div class=\"text\">\n";
	echo "Rozhodni tento souboj podle pravidel pro střelbu, ale během něj sniž své UMĚNÍ BOJE o 2&nbsp;kvůli svým zraněním. Pokud zvítězíš, otoč na <b>131</b>, ale pokud jsi byl v&nbsp;tomto souboji zasažen více než jedenkrát, sniž natrvalo své UMĚNÍ BOJE o&nbsp;1.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Bojovat s lupičem</a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>