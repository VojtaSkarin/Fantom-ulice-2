<div class="title-main">
84
</div>

<div class="text">
Netušíš, že tmavý a&nbsp;dusný přístěnek je ideálním životním místem pro červené pavouky. Díky neklidným snům sebou házíš a&nbsp;převaluješ se; tvá ruka dopadne na jednoho z&nbsp;pavouků. Reflexivně tě kousne a&nbsp;vpraví ti do těla svůj jed. Hoď jednou kostkou a&nbsp;výsledek odečti od své STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Pavoučí jed tě usmrtil.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud jsi ještě naživu, otoč na <b>258</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>258</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>