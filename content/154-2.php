<div class="title-main">
154
</div>

<?php
$_SESSION['hranice'] = 2;
?>

<div class="text">
Amber umlčí své dva protivníky, ale neuvědomili jste si, že vás během přestřelky s&nbsp;Pekelnými psy někdo pozoroval. V&nbsp;limuzíně zůstala ještě pátá osoba - Zvíře! Když vidí, jak se poslední z&nbsp;jeho mužů zhroutil do písku, vyskočí z&nbsp;limuzíny a&nbsp;řítí se na tebe beze zbraně; funí jako rozzuřený býk. V&nbsp;měsíčním světle vypadá opravdu děsivě. Mohutný, polonahý, s&nbsp;přiléhavou černou maskou na obličeji, ve vysokých botách s&nbsp;okovanými špičkami, zaťaté pěsti v&nbsp;kožených rukavicích s&nbsp;cvočky. Než stačíš zareagovat, sevře tě v&nbsp;medvědím objetí a&nbsp;snaží se tě rozmačkat. Ztrácíš 2&nbsp;body STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "<div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Protivník tě rozmačkal.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Amber se neodvažuje vystřelit, aby nezasáhla tebe, a&nbsp;horečnatě se rozhlíží po nějaké ruční zbrani. Vytáhne z&nbsp;auta páčidlo a&nbsp;rozběhne se ti na pomoc. Hoď jednou kostkou. Pokud padne 1 nebo 2, otoč na <b>245</b>. Pokud padne číslo mezi 3 a &nbsp;6, otoč na <b>376</b>.\n";
	echo "</div>\n";;

	include 'chance-link.php';
}
?>

<img class="fullsize" src="images/rifle.png">

<?php
include 'post.php';
?>