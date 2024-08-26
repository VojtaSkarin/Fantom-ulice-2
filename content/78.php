<div class="title-main">
78
</div>

<div class="text">
Motorky jsou stavěné na jízdu po takovéhle polní cestě a&nbsp;ty je nedokážeš dohonit. V&nbsp;dálce vidíš skupinu domů - to musí být Rockville. Motorky jedou přímo k&nbsp;domům a&nbsp;zmizí ti z&nbsp;dohledu. Když se přiblížíš, zaslechneš střelbu, která zřejmě vychází z&nbsp;nedalekého stavení. Chceš:
</div>

<?php
if ($_SESSION['rakety'] > 0) {
	echo "<div class=\"text-choice\">\n";
	echo "Vystřelit raketu na stavení?\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otoč na <b>199</b></a>\n";
	echo "</div>\n";
}
?>

<div class="text-choice">
Pokračovat v&nbsp;jízdě k&nbsp;domům?
</div>

<div class="link">
<a href="game.php?action=2">Otoč na <b>377</b></a>
</div>

<div class="text-choice">
Otočit, jet zpátky na silnici a&nbsp;zamířit na východ?
</div>

<div class="link">
<a href="game.php?action=3">Otoč na <b>45</b></a>
</div>

<?php
include 'post.php';
?>