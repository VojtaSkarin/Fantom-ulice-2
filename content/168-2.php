<div class="title-main">
168
</div>

<div class="text">
Pozdě v&nbsp;noci únava zpomalí tvé reakce. Ve světle reflektorů se objeví autobus a&nbsp;ty neuhneš včas, abys zabránil srážce. Hoď dvěma kostkami a&nbsp;výsledek odečti od PANCÍŘE Interceptoru.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Zemřel jsi při srážce.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud srážku přežiješ, otoč na <b>327</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>327</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>