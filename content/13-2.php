<div class="title-main">
13
</div>
<div class="text">
Ve zpětném zrcátku zahlédneš, jak se k tobě blíží motorka s&nbsp;přívěsným vozíkem. Spolujezdec drží kulomet upevněný vpředu na vozíku. Se svými brýlemi a koženou kuklou ti připomínají piloty z počátků letectví. Oba mají přes ústa uvázány černé šátky, aby ochránili své plíce před pouštním prachem. Když jsou za tebou necelých padesát metrů, vystřelí na Interceptor salvu z kulometu a tím dají jasně najevo své úmysly. Ztrácíš 1 bod PANCÍŘE.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Interceptor byl zničen.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Chceš:\n";
	echo "</div>\n";
	echo "\n";
	
	if ($_SESSION['bodce'] > 0) {
		echo "<div class=\"text-choice\">\n";
		echo "Vyprázdnit zásobník s železnými bodci (pokud ho máš)?\n";
		echo "</div>\n";
		echo "<div class=\"link\">\n";
		echo "<a href=\"game.php?action=1\">Otoč na <b>127</b></a>\n";
		echo "</div>\n";
	}
	
	if ($_SESSION['olej'] > 0 ) {
		echo "<div class=\"text-choice\">\n";
		echo "Vypustit olej (máš-li ještě plný zásobník)?\n";
		echo "</div>\n";
		echo "<div class=\"link\">\n";
		echo "<a href=\"game.php?action=2\">Otoč na <b>361</b></a>\n";
		echo "</div>\n";
	}
	
	echo "<div class=\"text-choice\">\n";
	echo "Opětovat střelbu z kulometu Interceptoru?\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=3\">Otoč na <b>282</b></a>\n";
	echo "</div>\n";
}
?>

<img class="fullsize" src="images/13.png">

<?php
include 'post.php';
?>