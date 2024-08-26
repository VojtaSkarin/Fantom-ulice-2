<div class="title-main">
191
</div>

<div class="text">
Jednu z&nbsp;předních penumatik prorazí kulka. Na okamžik ztratíš kontrolu nad vozem a&nbsp;v&nbsp;plné rychlosti narazíš do balvanu. Hoď jednou kostkou a&nbsp;výsledek odečti od PANCÍŘE svého auta jako následek srážky.

<?php
if ($_SESSION['pancir_ted'] <= 0 &&
	$_SESSION['pricina_smrti'] == 1)
{
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Zemřel jsi při srážce.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "S&nbsp;prázdnou pneumatikou nemůžeš jet, ale bylo by nebezpečné opustit auto pod palbou. Náhle zahlédneš další oslňunující záblesk; z&nbsp;okna v&nbsp;prvním patře stavení vystřelila bazuka. Jsi snadný cíl a&nbsp;projektil tě nemine. Hoď dvěma kostkami a&nbsp;výsledek odečti do PANCÍŘE svého auta.\n";

	if ($_SESSION['pancir_ted'] <= 0) {
		$_SESSION['smrt'] = true;
		
		echo "</div>\n";
		echo "\n";
		echo "<div class=\"text\">\n";
		echo "Střela z&nbsp;bazuky Interceptor zničila.\n";
		echo "</div>\n";
		
		include 'death-link.php';
		
	} else {
		echo "Pokud výbuch přežiješ, otoč na <b>292</b>.\n";
		echo "</div>\n";
		
		echo "<div class=\"link\">\n";
		echo "<a href=\"game.php?action=1\">Otočit na <b>292</b></a>\n";
		echo "</div>\n";
	}
}
?>

<?php
include 'post.php';
?>