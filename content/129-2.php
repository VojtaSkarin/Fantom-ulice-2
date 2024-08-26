<div class="title-main">
129
</div>

<div class="text">
Náhle se ozve ohlušující exploze a&nbsp;Interceptor je výbuchem miny odhozen stranou. Hoď dvěma kostkami a&nbsp;výsledek odečti od PANCÍŘE Interceptoru.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Výbuch miny zničil Interceptor a zabil tě.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud výbuch přežiješ, otoč na <b>93</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>93</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>