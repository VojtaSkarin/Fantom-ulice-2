<div class="title-main">
246
</div>

<div class="text">
Pokud jsi to ještě neudělal, můžeš prohledat obchod (otoč na <b>112</b>). Jinak už nemůžeš dělat nic, jen sednout do auta a&nbsp;rozjet se k&nbsp;jihu (otoč na <b>353</b>).
</div>

<?php
if (nenavstivil_rockville_obchod()) {
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Prohledat obchod</a>\n";
	echo "</div>\n";
}
?>

<div class="link">
<a href="game.php?action=2">Odjet</a>
</div>

<?php
include 'post.php';
?>