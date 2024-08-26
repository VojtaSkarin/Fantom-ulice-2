<div class="title-main">
269
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;
$_SESSION['utocna_sila_ja_zmena_kola'] = [];
$_SESSION['zbran_ja'] = in_array('boxer', $_SESSION['vybaveni']) ? 2 : 1;
$_SESSION['zbran_ja_jmeno_7'] = '';
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 0;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];
$_SESSION['pristi_cil'] = 0;

$_SESSION['typ_souboje'] = Souboj::Tvari_v_tvar;
$_SESSION['utok'] = Utok::Stridave;
$_SESSION['konec'] = Konec::Smrt;

$_SESSION['nepritel'] = [
	[
		'jmeno' => ['ZVÍŘE', 'ZVÍŘE', 'ZVÍŘETEM'],
		'rod' => true,
		'utocna_sila' => 11,
		'zbran' => 0,
		'vydrz_ted' => 16,
		'vydrz_max' => 16,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	],
];
?>

<div class="text">
Zavoláš, že přijímáš výzvu k&nbsp;zápasu pod podmínkou, že když zvítězíš, budete volní. Zvíře podmínku přijímá. Z&nbsp;limužíny vystoupí dva muži a&nbsp;dvě ženy a&nbsp;začnou na Interceptor bubnovat svými pistolemi a&nbsp;hlasitě skandovat jméno svého vůdce: &bdquo;ZVÍ-ŘE. ZVÍ-ŘE. ZVÍ-ŘE.&ldquo; Pak se pomalu otevřou zadní dveře limuzíny a&nbsp;vystoupí mohutný polonahý muž s&nbsp;přiléhavou maskou na obličeji. Zaťaté pěsti má v&nbsp;kožených rukavicích s&nbsp;cvočky a&nbsp;jeho vysoké boty mají okované špičky. Když vystoupíš z&nbsp;auta, začne funět jako rozzuřený býk. Kráčíš vstříc souboji se Zvířetem a&nbsp;Amber na tebe volá, aby tě povzbudila.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Rozhodni tento souboj na život a&nbsp;na smrt podle pravidel pro boj tváří v&nbsp;tvář. Obrněné pěsti Zvířete zraňují za 2&nbsp;body STAMINY. Pokud máš boxer, také budeš zraňovat za 2&nbsp;body STAMINY. V&nbsp;opačném případě pokud vyhraješ kolo boje, snížíš STAMINU Zvířete jen o&nbsp;1&nbsp;bod. Pokud v&nbsp;zápase zvítězíš, otoč na <b>355</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat se Zvířetem</a>
</div>

<img class="fullsize" src="images/269.png">

<?php
include 'post.php';
?>