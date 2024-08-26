<div class="title-main">
195
</div>

<div class="text">
Vezmeš za kliku a&nbsp;zatáhneš. Výbuch doprovázený jasným bílým zábleskem a&nbsp;ohlušující ranou tě odhodí zpět. Na dveřích byla nálož! Hoď jednou kostkou a&nbsp;výsledek odečti od své STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Výbuch tě usmrtil.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Dveře jsou vyvrácené z&nbsp;pantů, ale v&nbsp;sanitce nikdo není. Její majitel je nejspíš na cestě sem, aby se podíval, kdo padl do jeho pasti. Cítíš se příliš slabý na to, aby ses dostal k&nbsp;Interceptoru, a&nbsp;rozhodneš se odplazit se do nějakého úkrytu. Pokud se chceš schovat v&nbsp;trávě, otoč na <b>182</b>. Pokud se chceš skrýt pod sanitkou, otoč na <b>356</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Odplazit se do trávy</a>\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=2\">Ukrýt se pod sanitku</a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>