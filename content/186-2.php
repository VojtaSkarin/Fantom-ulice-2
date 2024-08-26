<div class="title-main">
186
</div>

<div class="text">
Téměř nepřetržitě zíváš, snažíš se soustředit se na řízení, ale po namáhavém dni tě únava přemůžeš a&nbsp;usneš za volantem. V&nbsp;plné rychlosti narazíš přímo do zadní části opuštěného náklaďáku, který napůl blokuje silnici. Hoď dvěma kostkami a&nbsp;výsledek odečti od PANCÍŘE Interceptoru.

<?php
if ($_SESSION['pancir_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Zemřel jsi při srážce.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Pokud jsi srážku přežil, otoč na <b>348</b>.\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>340</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>