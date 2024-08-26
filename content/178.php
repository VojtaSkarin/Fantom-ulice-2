<div class="title-main">
178
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;
$_SESSION['utocna_sila_ja_zmena_kola'] = [1 => -2];
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
		'jmeno' => ['PSANEC', 'PSANCE', 'PSANCEM'],
		'rod' => true,
		'utocna_sila' => 9,
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
Rychle otočíš klíčkem a&nbsp;šlápneš na plyn, ale motor nenaskočí. Podíváš se pod kapotu a&nbsp;zjistíš, že se uvolnil přívod paliva z&nbsp;karburátoru. Upevníš ho zpátky a&nbsp;chystáš se nasednout do auta, když tě zamrazí v&nbsp;zádech. Otočíš se a&nbsp;vidíš nehybně stojícího lehce rozkročeného muže, který na tebe míří pistolí velkého kalibru; zřejmě je to starý Magnum. Muž je oblečen jako kovboj, ve vysokých botách, se stetsonem a&nbsp;cigaretou v&nbsp;ústech. &bdquo;Tas!&ldquo; zavrčí na tebe hlubokým hlasem.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Rozhodni tento souboj podle pravidel pro střelbu, ale během prvního kola boje sniž své UMĚNÍ BOJE o 2, protože psanec je rychlejší. Pokud zvítězíš, otoč na <b>375</b>, ale pokud jsi byl v tomto souboji zasažen více než jedenkrát, sniž natrvalo své UMĚNÍ BOJE, o 1.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s psancem</a>
</div>

<img class="fullsize" src="images/178.png">

<?php
include 'post.php';
?>