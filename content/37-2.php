<div class="title-main">
37
</div>

<div class="text">
Na střeše Interceptoru přistane velký balvan. Hoď dvěma kostkami a&nbsp;výsledek odečti od svého PANCÍŘE.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Kámen Interceptor nenávratně poškodil.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud náraz přežiješ, otoč na <b>261</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>261</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>