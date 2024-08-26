<div class="title-main">
30
</div>

<div class="text">
Střela z&nbsp;kuše tě zasáhne do ramene a&nbsp;ty sklouzneš z&nbsp;žebříku dolů. Hoď jednou kostkou a&nbsp;výsledek odečti od své STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Střela tě zabila.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud jsi ještě naživu, přemůžeš bolest a&nbsp;opět šplháš po žebříku nahoru, dřív než stačí útočník znovu nabít kuši. Kvůli svému zranění nemůžeš použít revolver, takže se vrhneš kupředu, abys s&nbsp;ním bojoval pěstmi. Hoď jednou kostkou a&nbsp;přičti své UMĚNÍ BOJE, ale výsledek sniž o&nbsp;1 kvůli svému zranění. Hoď znovu a&nbsp;přičti 7 (útočníkovo UMĚNÍ BOJE). Pokud je tvůj výsledek stejný nebo větší než jeho, otoč na <b>74</b>. Pokud je tvůj výsledek menší než jeho, otoč na <b>226</b>.\n";
	echo "</div>\n";
	
	$_SESSION['utocne_cislo_ja'] = rand(1, 6) + $_SESSION['umeni_boje_ted'] - 1;
	$_SESSION['utocne_cislo_protivnik'] = rand(1, 6) + 7;
	
	include 'showdown-link.php';
}
?>

<?php
include 'post.php';
?>