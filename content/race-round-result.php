<?php
function pocet_jednotek($pocet) {
	if ($pocet == 1) {
		return 'jednotku';
	} else if ($pocet >= 2 && $pocet <= 4) {
		return 'jednotky';
	}
	
	return 'jednotek';
}

echo "<div class=\"text\">\n";

if ($_SESSION['pristi_cil'] == 0) {
	echo "Urazil jsi " . $_SESSION['postup'] . ' ' . pocet_jednotek($_SESSION['postup']) . " vzdálenosti.\n";
} else {
	echo "Protivník urazil " . $_SESSION['postup'] . ' ' . pocet_jednotek($_SESSION['postup']) . " vzdálenosti.\n";
}

echo "</div>\n";
?>

<div class="link">
<a href="game.php?action=1">Pokračovat</a>
</div>

<?php
include 'post.php';
?>