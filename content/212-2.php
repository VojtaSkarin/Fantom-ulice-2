<div class="title-main">
212
</div>

<div class="text">
Auto zabrzdí a&nbsp;zvedne oblak prachu; vyskočíš a&nbsp;začneš střílet z&nbsp;revolveru. Motorkáři opětují střelbu a&nbsp;utíkají od Interceptoru, než mina vybuchne. Vrhneš se k&nbsp;zemi a&nbsp;schováš se za keřem právě ve chvíli, kdy mina exploduje a&nbsp;zničí kolo. Ztrácíč 2&nbsp;body PANCÍŘE.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Interceptor je zničen a ty už svůj úkol nedokončíš.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Prach pomalu sedá a&nbsp;je ticho, dokud na tebe jeden z&nbsp;motorkářů nezavolá: &bdquo;Hoď sem svoji pistoli a&nbsp;klíčky. Chceme jen tvoje auto.&ldquo; Pokud ho chceš poslechnout, otoč na <b>283</b>. Pokud s&nbsp;nimi raději budeš bojovat, otoč na <b>6</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Odevzdat Interceptor</a>\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=2\">Bojovat</a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>