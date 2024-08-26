<div class="title-main">
340
</div>

<div class="text">
Usoudíš, že je čas použít proti tvému pronásledovateli nějakou zbraň, a&nbsp;přejedeš pohledem po palubní desce. Pokud chceš vyprázdnit na cestu zásobník s&nbsp;železnými bodci, otoč na <b>318</b>. Pokud raději na cestu vypustíš olej, otoč na <b>213</b>.
</div>

<?php
if ($_SESSION['bodce'] > 0) {
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Vysypat bodce</a>\n";
	echo "</div>\n";
}

if ($_SESSION['olej'] > 0) {
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Vypustit olej</a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>