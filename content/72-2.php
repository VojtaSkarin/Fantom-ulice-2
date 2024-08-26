<div class="title-main">
72
</div>

<div class="text">
Když otevřeš dveře, zatáhneš tím za lanko připevněné ke spoušti kuše na protější stěně. Z&nbsp;kuše vyletí střela a&nbsp;zasáhne tě do ramene. Hoď jednou kostkou a&nbsp;výsledek odečti od své STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Střela z&nbsp;kuše tě zabila.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud jsi ještě naživu, otoč na <b>233</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>233</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>