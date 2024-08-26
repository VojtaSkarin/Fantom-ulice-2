<div class="title-main">
259
</div>

<div class="text">
Daleko před tebou se zvedá řada kopců. Když dorazíš k&nbsp;jejich úpatí, vidíš, že silnice vede tunelem pod nimi. Naneštěstí je vjezd zatarasen autobusem. Zastavíš a&nbsp;jdeš k&nbsp;autobusu, abys zjistil, zda se nedá nastartovat a&nbsp;odjet s&nbsp;ním stranou. Náhle se otevřou přední dveře, vyskočí z&nbsp;nich maskovaný muž a&nbsp;míří na tebe pistolí. &bdquo;Jestli chceš projet tunelem, musíš mi zaplatit poplatek 200 kreditů nebo se se mnou utkat v&nbsp;souboji pistolemi,&ldquo; řekne smrtelně vážným tónem. Pokud chceš zaplatit poplatek, otoč na <b>369</b>. Pokud odvážně zvolíš souboj pistolemi, otoč na <b>291</b>.
</div>

<?php
if ($_SESSION['kredity'] >= 200) {
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Zaplatit</a>\n";
	echo "</div>\n";
	echo "\n";
}
?>

<div class="link">
<a href="game.php?action=2">Bojovat</a>
</div>

<?php
include 'post.php';
?>