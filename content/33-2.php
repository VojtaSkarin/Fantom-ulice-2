<div class="title-main">
33
</div>

<div class="text">
Vytáhnout auto z&nbsp;příkopu ti trvá dost dlouho a&nbsp;je to též značně vyčerpávající. Ztrácíš 1 bod STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Zemřel jsi vyčerpáním.\n";
	echo "</div>\n";
	
	include 'death-link.php';
} else {
	echo "Když jsi konečně hotov, rozjedeš se kolem hořícího vraku obrněného vozu k jihu (otoč na <b>47</b>).\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>47</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>