<div class="title-main">
262
</div>

<div class="text">
Vydáš se za hlasem volajícím o&nbsp;pomoc a&nbsp;zjistíš, že vychází z&nbsp;budky u obchodu. Zeptáš se, kdo je uvnitř - je to Sinclair, předseda městké rady New Hope! Rozhlédneš se kolem a&nbsp;najdeš železnou tyč, kterou můžeš vypáčit zámek u&nbsp;dveří. Brzy je Sinclair volný. Přidej si 1&nbsp;bod ŠTĚSTÍ. Sinclair ti vypráví o&nbsp;přepadu New Hope a&nbsp;svém únosu. Požádá tě, abys zavolal rádiem do new Hope, že se vrátí na motoce tak rychle, jak to půjde. Před obchodem stojí dvě motorky a&nbsp; on si vybere starý Harley Davidson. Poděkuje ti za pomoc, zamává na pozdrav a&nbsp;odjede k&nbsp;severu. Chceš:
</div>

<?php
if (nenavstivil_rockville_obchod()) {
	echo "<div class=\"text-choice\">\n";
	echo "Prohledat obchod?\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otoč na <b>112</b></a>\n";
	echo "</div>\n";
}
?>

<?php
if (nenavstivil_rockville_dum()) {
	echo "<div class=\"text-choice\">\n";
	echo "Prohledat vedlejší dům?\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=2\">Otoč na <b>252</b></a>\n";
	echo "</div>\n";
}
?>

<div class="text-choice">
Odjet směrem na jih
</div>

<div class="link">
<a href="game.php?action=3">Otoč na <b>353</b></a>
</div>

<?php
include 'post.php';
?>