<div class="title-main">
98
</div>

<div class="text">
K&nbsp;tvému zklamání se zásobník neotevře a&nbsp;Ford se dál blíží. Řidič odpoví granátem, který přeletí tvé auto a&nbsp;dopadne na cestu před tebou. Ozve se tlumený výbuch; celou jeho sílu zachytil pancéřovaný podvozek. Hoď dvěma kostkami a&nbsp;výsledek odečti od PANCÍŘE svého auta.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Výbuch granátu zničil Interceptor a zabil tě.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud výbuch přežiješ, otoč na <b>294</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>294</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>