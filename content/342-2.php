<div class="title-main">
342
</div>

<div class="text">
Nepodaří se ti včas uhnout a&nbsp;do kamenného sloupku narazíš. Hoď jednou kostkou a&nbsp;výsledek odečti od PANCÍŘE Interceptoru.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Zemřel jsi při srážce.\n";
	
} else {
	echo "Pokud srážku přežiješ, otoč na <b>79</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>79</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>