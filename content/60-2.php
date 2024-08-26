<div class="title-main">
60
</div>

<div class="text">
Obě zadní pneumatiky jsou proražené a&nbsp;tak smykem zastavíš. Náhle se z&nbsp;příkopu u&nbsp;silnice vynoří muž držící v&nbsp;ruce láhev, z&nbsp;jejíhož hrdla čouhá zapálený hadr. S&nbsp;hrůzou si uvědomíš, že je to zápalná bomba, ale ve svém nepojízdném autě nemáš žádnou možnost ho zastavit. Hoď dvěma kostkami a&nbsp;výsledek odečti od PANCÍŘE Interceptoru.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Výbuch tě zabil.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud výbuch přežiješ, otoč na <b>135</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>135</b></a>\n";
	echo "</div>\n";
}
?>

<img class="fullsize" src="images/60.png">

<?php
include 'post.php';
?>