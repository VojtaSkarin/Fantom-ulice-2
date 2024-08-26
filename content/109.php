<div class="title-main">
109
</div>

<div class="text">
Ať to auto řídil kdokoli, když mu došel benzín a&nbsp;musel pokračovat pěšky, vzal s&nbsp;sebou všechno. Obejdeš auto a&nbsp;snažíš se otevřít kufr, ale je zamčený. Pokud máš páčidlo a&nbsp;chceš s&nbsp;ním kufr otevřít, otoč na <b>277</b>. Pokud raději necháš policejní auto na pokoji a&nbsp;budeš pokračovat v&nbsp;cestě k&nbsp;jihu, otoč na <b>49</b>.
</div>

<?php
if (in_array('páčidlo', $_SESSION['vybaveni'])) {
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otevřít schránku</a>\n";
	echo "</div>\n";
	echo "\n";
}
?>

<div class="link">
<a href="game.php?action=2">Pokračovat na jih</a>
</div>

<?php
include 'post.php';
?>