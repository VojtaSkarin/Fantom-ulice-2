<?php
echo "<table class=\"enemies\">\n";
echo "<tr>\n";
echo "<td>\n";
echo "</td>\n";
echo "<td class=\"align-center\">\n";

if (in_array($_SESSION['typ_souboje'], $souboje_vozidel)) {
	echo "PALEBNÁ SÍLA\n";
} else {
	echo "UMĚNÍ BOJE\n";
}

echo "</td>\n";
echo "<td class=\"align-right\">\n";

if (in_array($_SESSION['typ_souboje'], $souboje_vozidel)) {
	echo "PANCÍŘ\n";
} else {
	echo "STAMINA\n";
}

echo "</td>\n";
echo "</tr>\n";

foreach ($_SESSION['nepritel'] as $nepritel) {
	echo "<tr>\n";
	echo "<td>\n";
	echo $nepritel['jmeno'][0] . "\n";
	echo "</td>\n";
	echo "<td class=\"align-center\">\n";
	echo $nepritel['utocna_sila'] . "\n";
	echo "</td>\n";
	
	if (in_array($_SESSION['typ_souboje'], $souboje_vozidel)) {
		echo "<td class=\"align-center-shift-pancir\">\n";
	} else {
		echo "<td class=\"align-center-shift-stamina\">\n";
	}
	
	echo $nepritel['vydrz_ted'] . '/' . $nepritel['vydrz_max'] . "\n";
	echo "</td>\n";
	echo "</tr>\n";
	echo "<tr>\n";
}

echo "</table>\n";