<div class="title-main">
29
</div>

<div class="text">
Jedna zbloudilá kulka tě zasáhne do ramene. Hoď jednou kostkou a&nbsp;výsledek odečti od své STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Zbloudilá kulka tě zabila.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Přemýšlíš, jak dlouho ti asi tvůj Med-Kit vydrží, jestli tě na cestě čekají další podobná nebezpečí. Když se konečně vzpamatuješ, nasedneš do Interceptoru a&nbsp;rozjedeš se na východ (otoč na <b>22</b>).\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>22</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>