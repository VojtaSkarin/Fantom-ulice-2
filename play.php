<html>
<head>
<title>
Fantom ulice
</title>

<?php
include 'header-table.php';

session_start();

// Constants
// Mode of stat change
enum Mode: int {
	case Initialize = 1;
	case Set = 2;
	case Change = 3;
}

// Stats
define('COMBAT_SKILL', 'Combat_Skill');
define('STAMINA', 'Stamina');
define('LUCK', 'Luck');
define('MED_KIT', 'Med_Kit');
define('CREDITS', 'Credits');
define('FIREPOWER', 'Firepower');
define('ARMOUR', 'Armour');
define('ROCKETS', 'Rockets');
define('NAILS', 'Nails');
define('OIL', 'Oil');

define('STATS', array(COMBAT_SKILL, STAMINA, LUCK, MED_KIT, CREDITS, FIREPOWER, ARMOUR, ROCKETS, NAILS, OIL));

// Type of stat
define('MAX', 'maximum');
define('ACT', 'actual');

// Others
define("ITEMS", array(
	"HOSE" => "plastiková hadice",
));

// Initialize on fresh start
if (empty($_SESSION['node'])) {
	$_SESSION['node'] = 'intro';
	$_SESSION['executed'] = false;
	$_SESSION['stats'] = array();
}

// Parse JSON data
$file_content = file_get_contents("content/".$_SESSION['node'].".json");
$sanitized = str_replace(["\r\n", "\t"], '', $file_content);
try {
	$data = json_decode($sanitized, null, 512, JSON_THROW_ON_ERROR);
} catch (Exception $e) {
	echo $e->getMessage();
}

// Remove from release
if (array_key_exists('goto', $_GET)) {
	$_SESSION['node'] = $_GET['goto'];
	$_SESSION['executed'] = false;
	header('Location: play.php');
}

// Process player's commands
if (array_key_exists('action', $_GET)) {
	if ($_GET['action'] == 'new-game') {
		$_SESSION['node'] = 'intro';
		$_SESSION['executed'] = false;
	} else {
		$action = intval($_GET['action']) -1;

		if ($action != -1 && $action < count($data->options)) {
			$_SESSION['node'] = $data->options[$action]->node;
			$_SESSION['executed'] = false;
		}
	}
	
	header('Location: play.php');
}

// Modify stats
if (! $_SESSION['executed'] || true) {
	$_SESSION['executed'] = true;

	// Stats
	update_stat($_SESSION['stats'][COMBAT_SKILL], $data->stats->combat_skill, 1, 6);
	update_stat($_SESSION['stats'][STAMINA], $data->stats->stamina, 2, 24);
	update_stat($_SESSION['stats'][LUCK], $data->stats->luck, 1, 6);
	update_stat($_SESSION['stats'][MED_KIT], $data->stats->med_kit);
	update_stat($_SESSION['stats'][CREDITS], $data->stats->credits);
	update_stat($_SESSION['stats'][FIREPOWER], $data->stats->firepower, 1, 6);
	update_stat($_SESSION['stats'][ARMOUR], $data->stats->armour, 2, 24);
	update_stat($_SESSION['stats'][ROCKETS], $data->stats->rockets);
	update_stat($_SESSION['stats'][NAILS], $data->stats->nails);
	update_stat($_SESSION['stats'][OIL], $data->stats->oil);
}

/* Render page*/
// Header
//echo $_SESSION['node'];

if (! empty($data->title_main)) {
	echo "<div class=\"title-main\">\n";
	echo $data->title_main."\n";
	echo "</div>\n\n";
}

foreach ($data->title_middle as $title) {
	echo "<div class=\"title-middle\">\n";
	echo $title."\n";
	echo "</div>\n\n";
}

// Story
foreach ($data->story as $paragraph) {
	echo "<div class=\"text\">\n";
	echo $paragraph."\n";
	echo "</div>\n\n";
}

// Image
if (! empty($data->image)) {
	echo "<img class=\"fullsize\" src=\"images/".$data->image."\">\n\n";
}

// Option links
foreach($data->options as $i => $option) {
	echo "<div class=\"link\">\n";
	echo "<a href=\"play.php?action=".($i + 1)."&node=".$_SESSION['node']."\">".$option->description."</a>\n";
	echo "</div>\n\n";
}

// Note
foreach ($data->notes as $note) {
	echo "<div class=\"note\">\n";
	echo $note."\n";
	echo "</div>\n\n";
}

// HUD
if ($data->show_hud) {
	print_r($_SESSION['stats']);
	
	echo "<div class=\"stat-block\">\n";
	
	// Combat skill
	echo "<div class=\"stat\">\n";
	$csm = $_SESSION['stats'][COMBAT_SKILL][MAX];
	$csa = $_SESSION['stats'][COMBAT_SKILL][ACT];
	echo 'UMĚNÍ BOJE: ' . $csm . '/' . $csa . "\n";
	echo "</div>\n\n";

	// Stamina
	echo "<div class=\"stat\">\n";
	$sm = $_SESSION['stats'][STAMINA][MAX];
	$sa = $_SESSION['stats'][STAMINA][ACT];
	echo 'STAMINA: ' . $sa . '/' . $sm . "\n";
	echo "</div>\n\n";

	// Luck
	echo "<div class=\"stat\">\n";
	$lm = $_SESSION['stats'][LUCK][MAX];
	$la = $_SESSION['stats'][LUCK][MAX];
	echo 'ŠTĚSTÍ: ' . $la . '/' . $lm . "\n";
	echo "</div>\n";
	
	echo "</div>\n\n";

	echo "<div class=\"stat-block\">\n";

	// MedKit
	echo "<div class=\"stat\">\n";
	echo 'MED-KIT: ';
	$medkit = $_SESSION['stats'][MED_KIT][ACT];
	for ($i = 0; $i < $medkit; $i++) {
		echo "<img class=\"medkit\" src=\"images/medkit.png\">";
	}
	echo "\n</div>\n\n";

	// Credits
	echo "<div class=\"stat\">\n";
	$credits = $_SESSION['stats'][CREDITS][ACT];
	echo 'KREDITY: ' . $credits;
	echo "<img class=\"credit\" src=\"images/credit.png\">\n";
	echo "</div>\n";
	
	echo "</div>\n\n";

	echo "<div class=\"stat-block\">\n";
	
	// Firepower
	echo "<div class=\"stat\">\n";
	$fpm = $_SESSION['stats'][FIREPOWER][MAX];
	$fpa = $_SESSION['stats'][FIREPOWER][ACT];
	echo 'PALEBNÁ SÍLA: ' . $fpa . '/' . $fpm . "\n";
	echo "</div>\n\n";

	// Armour
	echo "<div class=\"stat\">\n";
	$am = $_SESSION['stats'][ARMOUR][MAX];
	$aa = $_SESSION['stats'][ARMOUR][ACT];
	echo 'PANCÍŘ: ' . $aa . '/' . $am . "\n";
	echo "</div>\n";
	
	echo "</div>\n\n";
	
	echo "<div class=\"stat-block\">\n";

	// Rockets
	echo "<div class=\"stat\">\n";
	$rockets = $_SESSION['stats'][ROCKETS][ACT];
	echo 'RAKETY: ';
	for ($i = 0; $i < $rockets; $i++) {
		echo '<img class="rocket" src="images/rocket.png">';
	}
	echo "\n</div>\n\n";

	// Nails
	echo "<div class=\"stat\">\n";
	$nails = $_SESSION['stats'][NAILS][ACT];
	echo 'ŽELEZNÉ BODCE: ';
	for ($i = 0; $i < $nails; $i++) {
		echo '<img class="nails" src="images/nails.png">';
	}

	echo "\n</div>\n\n";

	// Oil
	echo "<div class=\"stat\">\n";
	$oil = $_SESSION['stats'][OIL][ACT];
	echo 'OLEJ: ';
	for ($i = 0; $i < $oil; $i++) {
		echo '<img class="oil" src="images/oil.png">';
	}

	echo "\n</div>\n\n";

	// Wheels
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
	
	echo "</div>\n\n";
}

// Helper functions
function update_stat(&$stat, $data, $throws = -1, $shift = -1) {
	if ($data->mode == Mode::Initialize->value) {
		$value = 0;
		for ($i = 0; $i < $throws; $i++) {
			$value += rand(1, 6);
		}
		$stat[ACT] = $stat[MAX] = $value + $shift;
	} else if ($data->mode == Mode::Set->value) {
		$stat[ACT] = $data->value;
	} else if ($data->mode == Mode::Change->value) {
		if ($data->value > 0) {
			$stat[ACT] = min($stat[MAX], $stat[ACT] + $data->value);
		} else {
			$stat[ACT] = max(0, $stat[ACT] + $data->value);
		}
	}
}

include 'feedback.php';
?>
