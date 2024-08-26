<div class="title-main">
139
</div>

<div class="text">
Ford zpomalí v&nbsp;zatáčce, ale ty stále jedeš na plný plyn. Narazíš do Fordu zezadu, ale poškodíš jen svůj Interceptor. Ztrácíš 2 body PANCÍŘE.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Interceptor je tak poškozený, že už není nadále pojízdný.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Ford má výztuže s&nbsp;ocelovými pláty chránící ho proti nárazu. Usoudíš, že musíš Ford předjet, abys mohl použít své vzadu namontované zbraně. Jako kdyby ti četl myšlenky, začne řidič Fordu kličkovat s&nbsp;autem ze strany na stranu, aby ti zabránil v&nbsp;předjetí. Bude to opravdu obtížný manévr. Hoď dvěma kostkami. Pokud je výsledek menší nebo roven tvému UMĚNÍ BOJE, otoč na <b>8</b>. Pokud je výsledek větší než tvé UMĚNÍ BOJE, otoč na <b>287</b>.\n";
	echo "</div>\n";

	include 'fight-skill-link.php';
}
?>

<?php
include 'post.php';
?>