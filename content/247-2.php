<div class="title-main">
247
</div>

<div class="text">
Interceptor se stočí doleva, ale zabráníš smyku a&nbsp;udržíš auto pod kontrolou. Ford do tebe vrazí znovu a&nbsp;tentokrát tvůj vůz trochu poškodí. Ztrácíš 2&nbsp;body PANCÍŘE.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Náraz Interceptor poškodil natolik, že už není pojízdný.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "V&nbsp;zrcátku vidíš, že se Ford opět blíží, a&nbsp;musíš se rychle rozhodnout, jakou zvolíš taktiku. Přidáš plyn (otoč na <b>183</b>), nebo prudce zabrzdíš a&nbsp;necháš Ford, aby tě předjel (otoč na <b>27</b>)?\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Přidat plyn</a>\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=2\">Zabrzdit</a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>