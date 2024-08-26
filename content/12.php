<div class="title-main">
12
</div>

<?php
$_SESSION['pocet_zasahu'] = 0;
$_SESSION['utocna_sila_ja_zmena'] = -1;
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
	],
];
?>

<div class="text">
Víš, že tvé šance nejsou moc velké, ale jsi v pasti a nemáš na výběr. Přemůžeš bolest, vykutálíš se zpod sanitky a&nbsp;vystřelíš na svého neviditelného protivníka dvě divoké rány. Obě minou a ty vzápětí vidíš, jak zpoza balvanu vyskočí otrhaný muž s červenou páskou uvázanou kolem hlavy a výstřel ti oplatí.
</div>

<?php
include 'enemy-table.php';
?>

<div class="text">
Rozhodni tento souboj podle pravidel pro střelbu, ale během něj sniž své UMĚNÍ BOJE o 1 kvůli svému zranění. Pokud zvítězíš, otoč na <b>131</b>, ale pokud jsi byl v tomto souboji zasažen více, než jedenkrát, sniž natrvalo své UMĚNÍ BOJE o 1.
</div>

<div class="link">
<a href="game.php?action=1">Bojovat s lupičem</a>
</div>

<?php
include 'post.php';
?>