<div class="title-main">
128
</div>

<div class="text">
Zrovna když se začínáš radovat z&nbsp;volnosti, jakou ti poskytuje prázdná silnice časně zrána, znepokojí tě pohled do zpětného zrcátka na vozidlo blížící se k&nbsp;tobě. Je to obrněný vůz a&nbsp;vidíš záblesk plamenů z&nbsp;jeho hlavně, když po tobě vystřelí. Granát vybuchne vlevo od tvého auta a&nbsp;otřese s&nbsp;ním, ale neztratíš nad ním kontrolu. Chceš:
</div>

<?php
if ($_SESSION['bodce'] > 0) {
	echo "<div class=\"text-choice\">\n";
	echo "Rozsypat železné bodce?\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otoč na <b>312</b></a>\n";
	echo "</div>\n";
	echo "\n";
}

if ($_SESSION['olej'] > 0) {
	echo "<div class=\"text-choice\">\n";
	echo "Vypustit olej?\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=2\">Otoč na <b>165</b></a>\n";
	echo "</div>\n";
	echo "\n";
}
?>

<div class="text-choice">
Ostře se obrátit a&nbsp;čelit obrněnému vozu?
</div>

<div class="link">
<a href="game.php?action=3">Otoč na <b>77</b></a>
</div>

<img class="fullsize" src="images/128.png">

<?php
include 'post.php';
?>