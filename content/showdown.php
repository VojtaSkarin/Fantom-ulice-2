<?php
echo "<div class=\"text\">\n";
echo "Protivníkovo útočné číslo: " . $_SESSION['utocne_cislo_protivnik'] . "\n";
echo "Tvé útočné číslo: " . $_SESSION['utocne_cislo_ja'] . "\n";
echo "</div>\n";

echo '<div class="text">';
if ($_SESSION['vysledek']) {
	echo 'Jsi rychlejší, než protivník.';
} else {
	echo 'Protivník je rychlejší, než ty.';
}
echo '</div>';
?>

<div class="link">
<a href="game.php?action=1">Pokračovat</a>
</div>

<?php
include 'post.php';
?>