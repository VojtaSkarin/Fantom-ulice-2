<div class="title-main">
86
</div>

<div class="text">
Ještě ani nestačíš vytáhnout revolver z&nbsp;pouzdra, když cizinec stiskne spoušť své brokovnice. Zahlédneš obláček dýmu a&nbsp;v&nbsp;tentýž okamžik ucítíš bolest v&nbsp;pravém stehně. Jsi vržen na zeď a&nbsp;když se hroutíš k&nbsp;zemi, zní ti v&nbsp;uších zvuk výstřelu. Hoď jednou kostkou, přičti 2 a&nbsp;výsledek odečti od své STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Zásah z brokovnice tě usmrtil.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Muž se otočí a&nbsp;odchází; nechává tě tu napospas psům. Pokud chceš použít Med-Kit a&nbsp;hned ošetřit své zranění, otoč na <b>38</b>. Pokud se chceš doplazit do bezpečí svého auta, otoč na <b>256</b>.\n";
	echo "</div>\n";
	echo "\n";
	
	if ($_SESSION['medkit'] > 0) {
		echo "<div class=\"link\">\n";
		echo "<a href=\"game.php?action=1\">Použít Med-Kit</a>\n";
		echo "</div>\n";
		echo "\n";
	}
	
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=2\">Odplazit se k autu</a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>