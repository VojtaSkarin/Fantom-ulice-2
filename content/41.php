<div class="title-main">
41
</div>

<div class="text">
Řidič obrněného vozu si všimne nebezpečí a&nbsp;sjede ze silnice, aby se vyhnul bodcům. Projede vzrostlou trávou u&nbsp;kraje silnice, vrátí se na ni a&nbsp;pokračuje v&nbsp;pronásledování. Pokud chceš vypustit na cestu olej, otoč na <b>165</b>. Pokud se raději prudce otočíš a&nbsp;budeš obrněnému vozu čelit, otoč na <b>77</b>.
</div>

<?php
if ($_SESSION['olej'] > 0) {
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Vypustit olej</a>\n";
	echo "</div>\n";
}
?>

<div class="link">
<a href="game.php?action=2">Otočit se</a>
</div>

<?php
include 'post.php';
?>