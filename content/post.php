<?php
if (! $_SESSION['smrt'] &&
	! in_array($_SESSION['stav'], $boj) &&
	$_SESSION['medkit'] > 0 &&
	$_SESSION['stamina_ted'] < $_SESSION['stamina_max'])
{
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=med-kit\">Použít Med-Kit</a>\n";
	echo "</div>\n";
}
?>

<div class="stats">

<?php
$umeni_boje_max = $_SESSION['umeni_boje_max'];
$umeni_boje_ted = $_SESSION['umeni_boje_ted'];

echo 'UMĚNÍ BOJE: ' . $umeni_boje_ted . '/' . $umeni_boje_max . "<br>\n";

$stamina_max = $_SESSION['stamina_max'];
$stamina_ted = $_SESSION['stamina_ted'];

echo 'STAMINA: ' . $stamina_ted . '/' . $stamina_max . "<br>\n";

$stesti_max = $_SESSION['stesti_max'];
$stesti_ted = $_SESSION['stesti_ted'];

echo 'ŠTĚSTÍ: ' . $stesti_ted . '/' . $stesti_max . "<br>\n";

echo "<br>\n";

echo 'MED-KIT: ';

$medkit = $_SESSION['medkit'];

for ($i = 0; $i < $medkit; $i++) {
	echo "<img class=\"medkit\" src=\"images/medkit.png\">";
}

echo "<br>\n";

$kredity = $_SESSION['kredity'];

echo 'KREDITY: ' . $kredity;
echo "<img class=\"credit\" src=\"images/credit.png\"><br>\n";

echo "<br>\n";

$palebna_sila_max = $_SESSION['palebna_sila_max'];
$palebna_sila_ted = $_SESSION['palebna_sila_ted'];

echo 'PALEBNÁ SÍLA: ' . $palebna_sila_ted . '/' . $palebna_sila_max . "<br>\n";

$pancir_max = $_SESSION['pancir_max'];
$pancir_ted = $_SESSION['pancir_ted'];

echo 'PANCÍŘ: ' . $pancir_ted . '/' . $pancir_max . "<br>\n";

echo "<br>\n";

$rakety = $_SESSION['rakety'];

echo 'RAKETY: ';

for ($i = 0; $i < $rakety; $i++) {
	echo '<img class="rocket" src="images/rocket.png">';
}

echo "<br>\n";

$bodce = $_SESSION['bodce'];

echo 'ŽELEZNÉ BODCE: ';

for ($i = 0; $i < $bodce; $i++) {
	echo '<img class="nails" src="images/nails.png">';
}

echo "<br>\n";

$olej = $_SESSION['olej'];

echo 'OLEJ: ';

for ($i = 0; $i < $olej; $i++) {
	echo '<img class="oil" src="images/oil.png">';
}

echo "<br>\n";

$kola = $_SESSION['kola'];

echo 'REZERVNÍ KOLA: ';

for ($i = 0; $i < $kola; $i++) {
	echo '<img class="wheel" src="images/wheel.png">';
}

echo "<br>\n";

$palivo = $_SESSION['palivo'];

echo 'PALIVO: ';

for ($i = 0; $i < $palivo; $i++) {
	echo '<img class="canister" src="images/canister.png">';
}

echo "<br><br>\n";

echo 'VYBAVENÍ: ';

$vybaveni = $_SESSION['vybaveni'];

$i = 0;
foreach ($vybaveni as $predmet) {
	if ($predmet[0] == '_') {
		continue;
	}
	
	if ($i > 0) {
		echo ', ';
	}
	
	echo $predmet;
	$i++;
}

if (count($vybaveni) == 0) {
	echo 'žádné';
}
?>

</div>
