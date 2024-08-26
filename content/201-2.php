<div class="title-main">
201
</div>

<div class="text">
Náhle se ozve tlumená rána a&nbsp;Interceptor se rozhoupe ze strany na stranu. Hoď dvěma kostkami a&nbsp;výsledek odečti od PANCÍŘE Interceptoru.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Výbuch Interceptor zničil.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud výbuch přežiješ, otoč na <b>266</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>266</b></a>\n";
	echo "</div>\n";
}
?>

<img class="fullsize" src="images/motorbike.png">

<?php
include 'post.php';
?>