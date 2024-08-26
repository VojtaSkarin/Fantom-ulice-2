<div class="title-main">
203
</div>

<div class="text">
Silnice je rovná a&nbsp;jen občas se na ní vyskytne vrak auta. Tachometr ukazuje mnohem vyšší rychlost, než jaká je na této silnici povolena, ale víš, že teď rozhodně nedostaneš pokutu za rychlou jízdu. Tvá spokojenost má bohužel krátké trvání - objeví se před tebou zátaras z&nbsp;převrácených aut a&nbsp;náklaďáků. Zpomalíš a&nbsp;zkoumáš překážku; tušíš nebezepčí. Chceš:
</div>

<?php
if ($_SESSION['rakety'] > 0) {
	echo "<div class=\"text-choice\">\n";
	echo "Vystřelit na zátaras raketu?\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otoč na <b>372</b></a>\n";
	echo "</div>\n";
	echo "\n";
}
?>

<div class="text-choice">
Zkusit zátaras objet?
</div>

<div class="link">
<a href="game.php?action=2">Otoč na <b>317</b></a>
</div>

<div class="text-choice">
Otočit, vrátit se k&nbsp;poslední křižovatce a&nbsp;zahnout na jih?
</div>

<div class="link">
<a href="game.php?action=3">Otoč na <b>278</b></a>
</div>

<?php
include 'post.php';
?>