<div class="title-main">
105
</div>

<div class="text">
Tvou přední pneumatiku prorazí kulka a&nbsp;auto se skřípením zastaví, právě v&nbsp;dráze střely z&nbsp;bazuky. Hoď dvěma kostkami a&nbsp;výsledek odečti od PANCÍŘE svého auta.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Raketa Interceptor zničila.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud výbuch přežiješ, otoč na <b>292</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>292</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>