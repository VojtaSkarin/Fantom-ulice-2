<div class="title-main">
133
</div>

<div class="text">
Nejsi schopen získat kontrolu nad rozjetým Interceptorem a&nbsp;narazíš do náklaďáku. Hoď dvěma kostkami a&nbsp;výsledek odečti od PANCÍŘE svého auta.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Náraz jsi nepřežil.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud jsi srážku přežil, otoč na <b>151</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>151</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>