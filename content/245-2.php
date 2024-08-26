<div class="title-main">
245
</div>

<?php
$_SESSION['hranice'] = 2;
?>

<div class="text">
Když se Amber pokusí uděřit ho páčidlem, Zvíře se překulí do písku a&nbsp;stále tě drží ve svém drtivém sevření. Ztrácíš 2&nbsp;body STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Zvíře tě rozmačkalo.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Amber se znovu pokouší ohromného muže zasáhnout. Hoď jednou kostkou. Pokud padne 1 nebo 2, otoč a <b>360</b>. Pokud padne číslo mezi 3 a&nbsp;6, otoč na <b>376</b>.\n";
	echo "</div>\n";

	include 'chance-link.php';
}
?>

<?php
include 'post.php';
?>