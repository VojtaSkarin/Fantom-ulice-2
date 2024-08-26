<div class="title-main">
252
</div>

<div class="text">
Otevřeš přední dveře domu a&nbsp;vstoupíš dovnitř. Z&nbsp;vstupní haly vedou dvoje dveře, na každé straně jedny. Pokud chceš otevřít levé dveře, otoč na <b>185</b>. Pokud chceš otevřít pravé dveře, otoč na <b>72</b>.
</div>

<?php
if (nenavstivil_rockville_pokoj_levy()) {
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Jít do levé místnosti</a>\n";
	echo "</div>\n";
}
?>

<?php
if (nenavstivil_rockville_pokoj_pravy()) {
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=2\">Jít do pravé místnosti</a>\n";
	echo "</div>\n";
}
?>

<img class="fullsize" src="images/motorbike.png">

<?php
include 'post.php';
?>