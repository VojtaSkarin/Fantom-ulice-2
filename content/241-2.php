<div class="title-main">
241
</div>

<div class="text">
Mezi nářadím v&nbsp;kamiónu najdeš železnou tyč a&nbsp;zakrátko se ti podaří dveře motelu otevřít. Opatrně vejdeš do recepce a&nbsp;tvůj nos naplní zápach hnijících rostlin, ze kterého se ti udělá nevolno. Svítíš si baterkou okolo a&nbsp;vidíš všude kolem špínu a&nbsp;smetí. Za létacími dveřmi je velká hala a&nbsp;z&nbsp;ní vede schodiště do horního patra. Když se rozhlížíš, najednou nad sebou zaslechneš tiché kroky. Posvítíš baterkou na vrchol schodiště a&nbsp;spatříš pár nohou. Náhle ze schodů seběhne šlachovitý stařec oblečený v&nbsp;potrhaných hadrech a&nbsp;v&nbsp;každé ruce drží velkou krysu. &bdquo;Tohle je krysařův dům,&ldquo; vykřikne chraptivým hlasem, &bdquo;a&nbsp;ty zaplatíš za to, že jsi vešel nepozván!&ldquo; Vzápětí hodí krysy po tobě. Přistanou ti na hrudi a&nbsp;ty se je horečnatě snažíš shodit. Než se ti to podaří, jedna z&nbsp;nich tě kousne. Ztrácíč 1&nbsp;bod STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 1) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Z krysího kousnutí jsi dostal otravu krve a zemřel jsi.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Se šíleným smíchem vyběhne krysař po schodech nahoru. Usoudíš, že motel není to pravé místo, kde bys strávil noc, a&nbsp;vrátíš se do kamiónu. Ujedeš dalších pár mil, než najdeš jiné místo k&nbsp;zaparkování, a&nbsp;uložíš se v&nbsp;kabině k&nbsp;spánku (otoč na <b>218</b>).\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>218</b></a>\n";
	echo "</div>\n";
}
?>

<img class="fullsize" src="images/241.png">

<?php
include 'post.php';
?>