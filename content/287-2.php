<div class="title-main">
287
</div>

<div class="text">
Řidič Fordu tě neustále sleduje a&nbsp;když ho začneš předjíždět, stočí auto stranou. Narazí z&nbsp;boku do Interceptoru a&nbsp;promáčkne ti dveře. Ztrácíš 2&nbsp;body PANCÍŘE.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Interceptor je tak poškozený, že už není pojízdný.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Stále jedeš na plný plyn a&nbsp;podaří se ti proklouznout před Ford (otoč na <b>340</b>).\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>340</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>