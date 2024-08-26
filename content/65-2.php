<div class="title-main">
65
</div>

<div class="text">
Ucítíš ostrou bolest v&nbsp;paži, když tě jedna kulka zasáhne. Naštěstí je to jen povrchová rána. Ztrácíš 2 body STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Kulka tě zabila.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Motor naskočí hned napoprvé a&nbsp;ty se v&nbsp;oblacích prachu řítíš po hrbolaté cestě k&nbsp;silnici, kde rychle zahneš doprava a&nbsp;zamíříš k&nbsp;jihu (otoč na <b>207</b>).\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>207</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>