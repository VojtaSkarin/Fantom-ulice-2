<div class="title-main">
121
</div>

<div class="text">
Granát se zakutálí pod Interceptor a&nbsp;vybuchne. Hoď dvěma kostkami a&nbsp;výsledek odečti od PANCÍŘE Interceptoru.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Výbuch granátu Interceptor zničil.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud výbuch přežiješ, otoč na <b>134</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>134</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>