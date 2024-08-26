<div class="title-main">
380
</div>

<?php
$_SESSION['smrt'] = true;
?>

<div class="text">
Přijíždíš k&nbsp;New Hope a&nbsp;s&nbsp;ulehčením sleduješ, jak se městská brána otvírá. Stovky obyvatel vybíhají, aby tě přivítali, a&nbsp;uspořádají ti královskou hostinu. Benzín, který jsi přivezl, bude použit pro zajištění lepší budoucnosti. Civilizace nastupuje cestu k&nbsp;obnově, byť jen na některých místech. Pokud se ti navíc během tvé cesty podařilo zachránit Sinclaira, splnil jsi svůj úkol více než úspěšně.
</div>

<?php
echo "<div class=\"text\">\n";

if (in_array('_Sinclair', $_SESSION['vybaveni'])) {
	echo "Zachránil jsi Sinclaira a dosáhl nejlepšího možného konce.\n";
} else {
	echo "Nedokázal jsi zachránit Sinclaira.\n";
}

echo "</div>\n";
?>

<div class="link">
<a href="../index.php">Zpět na úvodní obrazovku</a>
</div>

<img class="fullsize" src="images/380.png">

<?php
include 'post.php';
?>