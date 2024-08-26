<div class="title-main">
152
</div>

<div class="text">
Šlápneš na brzdy a&nbsp;s&nbsp;kvílením zastavíš. Ford vrazí do tvého zadního nárazníku a&nbsp;granát neškodně exploduje před tebou. Srážka ovšem tvůj vůz poškodí za 2&nbsp;body PANCÍŘE.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Náraz poškodil Interceptor natolik, že už není pojízdný.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Rozjedeš se a&nbsp;náhle znovu zabrzdíš. Ford projede kolem tebe a&nbsp;vzdaluje se. Protože nesmíš použít své střelné zbraně, rozhodneš se do něj narazit (otoč na <b>139</b>).\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>139</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>