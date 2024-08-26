<?php
include 'throw-result.php';

echo '<div class="text">';
if ($_SESSION['vysledek']) {
	echo 'Máš štěstí.';
} else {
	echo 'Máš smůlu.';
}
echo '</div>';
?>

<div class="link">
<a href="game.php?action=1">Pokračovat</a>
</div>

<?php
include 'post.php';
?>