<div class="title-main">
167
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = 0;
$_SESSION['zbran_ja'] = 0;
$_SESSION['zbran_ja_jmeno_7'] = '';
$_SESSION['kolo'] = 1;
$_SESSION['kolo_konec'] = 0;
$_SESSION['stamina_zacatek_souboje'] = $_SESSION['stamina_ted'];
$_SESSION['pristi_cil'] = 0;

$_SESSION['typ_souboje'] = Souboj::Vozidla;
$_SESSION['utok'] = Utok::Stridave;
$_SESSION['konec'] = Konec::Smrt;

$_SESSION['nepritel'] = [
	[
		'jmeno' => ['ČERVENÝ CHEVROLET', 'ČERVENÝ CHEVROLET', 'ČERVENÝM CHEVROLETEM'],
		'rod' => true,
		'utocna_sila' => 8,
		'zbran' => 0,
		'vydrz_ted' => 15,
		'vydrz_max' => 15,
		'poskozeni' => 0,
		'zpusob_smrti' => true,
		'byl_cil' => false,
	]
];
?>

<div class="text">
Dálnice je dost široká, abys mohl zvýšit rychlost bez nebezpečí, že se budeš muset vyhýbat opuštěným autům. Je vzrušující jet tak rychle bez obav, že tě zadrží policie za porušování pravidel silničního provozu. Usměješ se, když dosáhneš stodevadesátikilometrové rychlosti, ale tvá spokojenost trvá jen krátce: náhle spatříš červený Chevrolet, opancéřovaný ocelovými deskami, mířící přímo na tebe. V&nbsp;malé věžičce na střeše někdo sedí - kulometčík. Pomyslíš si, že mít tehdy potíže s&nbsp;policií nebylo zas tak špatné ve srovnání s&nbsp;tím, co tě čeká. Zhluboka se nadechneš a&nbsp;položíš prst na spoušť kulometu.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Pokud se ti podaří v&nbsp;tomto souboji vozidel Chevrolet zničit, otoč na <b>188</b>.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s chevroletem</a>
</div>

<?php
include 'post.php';
?>