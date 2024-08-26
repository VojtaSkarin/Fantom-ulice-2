<div class="title-main">
315
</div>

<div class="text">
Někdo na tebe vystřelil z&nbsp;bazuky a&nbsp;trefil se. Hoď dvěma kostkami a&nbsp;výsledek odečti od PANCÍŘE Interceptoru.

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
	echo "Pokud jsi zásah přežil, otoč na <b>53</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>53</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>