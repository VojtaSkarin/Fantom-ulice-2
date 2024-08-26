<div class="title-main">
213
</div>

<div class="text">
Olej se vsákne do prachu na cestě a&nbsp;autu za tebou nijak neuškodí. Ztrácíč 1&nbsp;bod ŠTĚSTÍ. Řidič Fordu odpoví granátem, terý přeletí tvé auto a&nbsp;dopadne na cestu před tebou. Ozve se tlumený výbuch; celou jeho sílu zachytil pancéřovaný podvozek. Hoď dvěma kostkami a&nbsp;výsledek odečti od PANCÍŘE tvého<sup>1</sup> auta.

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
	echo "Pokud výbuch přežiješ, otoč na <b>294</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>294</b></a>\n";
	echo "</div>\n";
}
?>

<div class="note">
1. Zájmeno má být zvratné, neboť se přivlastňuje k podmětu věty. Podmětem věty je totiž vlastník auta.
</div>

<?php
include 'post.php';
?>