<div class="title-main">
279
</div>

<div class="text">
Když běžíš přes prostranství, zasáhne tě do boku zbloudilá kulka. Hoď jednou kostkou a&nbsp;výsledek odečti od své STAMINY.

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
	echo "Pokud jsi ještě naživu, otoč na <b>40</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>40</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>