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
enum StatMode: int {
	case Initialize = 1;
	case Set = 2;
	case Change = 3;
}

// Mode of equipment change
enum EquipMode : int {
	case Nothing = 1;
	case Add = 2;
	case Remove = 3;
	case Empty = 4;
}

// Stats
define('FIGHT_SKILL', 'Combat_Skill');
define('STAMINA', 'Stamina');
define('LUCK', 'Luck');
define('MED_KIT', 'Med_Kit');
define('CREDITS', 'Credits');
define('FIREPOWER', 'Firepower');
define('ARMOUR', 'Armour');
define('ROCKETS', 'Rockets');
define('NAILS', 'Nails');
define('OIL', 'Oil');
define('WHEELS', 'Wheels');
define('FUEL', 'Fuel');
define('EQUIPMENT', 'Equipment');

define('STATS', array(FIGHT_SKILL, STAMINA, LUCK, MED_KIT, CREDITS, FIREPOWER, ARMOUR, ROCKETS, NAILS, OIL));

define('BOOL_TO_INDEX', array(true => 0, false => 1));

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
}

// Remove from release
if (array_key_exists('goto', $_GET)) {
	$_SESSION['node'] = $_GET['goto'];
	$_SESSION['executed'] = false;
	header('Location: play.php');
}

// Process player's commands
if (array_key_exists('action', $_GET)) {
	$valid = true;
	$action = intval($_GET['action']) - 1;

	if ($_GET['action'] == 'new-game') {
		$_SESSION['node'] = 'intro';
	} else if ($action >= 0 && $action < count($_SESSION['options'])) {
		if ($_SESSION['node'] == 'luck') {
			$_SESSION['node'] = $_SESSION['options_luck'][BOOL_TO_INDEX[$_SESSION['luck']]];
		} else if ($_SESSION['node'] == 'fight_skill') {
			$_SESSION['node'] = $_SESSION['options_fight_skill'][BOOL_TO_INDEX[$_SESSION['fight_skill']]];
		} else {
			$_SESSION['node'] = $_SESSION['options'][$action]->node;
		}
	} else {
		$valid = false;
	}
	
	if ($valid) {
		$_SESSION['executed'] = false;
	}
}

// Parse JSON data
$file_content = file_get_contents("content/".$_SESSION['node'].".json");
$sanitized = str_replace(["\r\n", "\t"], '', $file_content);
try {
	$data = json_decode($sanitized, null, 512, JSON_THROW_ON_ERROR);
} catch (Exception $e) {
	echo $e->getMessage();
}

define('CHECKS', array('luck', 'fight_skill'));

// JSON is loaded AFTER command processing
if (! in_array($_SESSION['node'], CHECKS) && $data != null) {
	$_SESSION['options'] = $data->options;
	$_SESSION['options_luck'] = $data->options_luck;
	$_SESSION['options_fight_skill'] = $data->options_fight_skill;
}

// On first loading actions
if (! $_SESSION['executed']) {
	$_SESSION['executed'] = true;
	
	// Luck
	if ($_SESSION['node'] == 'luck') {
		$_SESSION['throw'] = rand(1, 6) + rand(1, 6);
		$_SESSION['luck'] = $_SESSION['throw'] <= $_SESSION['stats'][LUCK][ACT];
		$_SESSION['options'] = $_SESSION['options_luck'];
	}
	
	// Fight skill
	if ($_SESSION['node'] == 'fight_skill') {
		$_SESSION['throw'] = rand(1, 6) + rand(1, 6);
		$_SESSION['fight_skill'] = $_SESSION['throw'] <= $_SESSION['stats'][FIGHT_SKILL][ACT];
	}

	// Stats
	update_stat($_SESSION['stats'][FIGHT_SKILL], $data->stats->fight_skill, 1, 6);
	update_stat($_SESSION['stats'][STAMINA], $data->stats->stamina, 2, 24);
	echo $_SESSION['stats'][LUCK][ACT];
	error_log($_SESSION['node']."\n", 3, "C:/xampp/htdocs/Fantom-ulice-2/php.log");
	error_log($_SESSION['stats'][LUCK][ACT]."\n", 3, "C:/xampp/htdocs/Fantom-ulice-2/php.log");
	error_log(json_encode($data->stats->luck)."\n", 3, "C:/xampp/htdocs/Fantom-ulice-2/php.log");
	update_stat($_SESSION['stats'][LUCK], $data->stats->luck, 1, 6);
	error_log($_SESSION['stats'][LUCK][ACT]."\n", 3, "C:/xampp/htdocs/Fantom-ulice-2/php.log");
	echo $_SESSION['stats'][LUCK][ACT];
	update_stat($_SESSION['stats'][MED_KIT], $data->stats->med_kit);
	update_stat($_SESSION['stats'][CREDITS], $data->stats->credits);
	update_stat($_SESSION['stats'][FIREPOWER], $data->stats->firepower, 1, 6);
	update_stat($_SESSION['stats'][ARMOUR], $data->stats->armour, 2, 24);
	update_stat($_SESSION['stats'][ROCKETS], $data->stats->rockets);
	update_stat($_SESSION['stats'][NAILS], $data->stats->nails);
	update_stat($_SESSION['stats'][OIL], $data->stats->oil);
	update_stat($_SESSION['stats'][WHEELS], $data->stats->wheels);
	update_stat($_SESSION['stats'][FUEL], $data->stats->fuel);
	
	// Equipment
	if ($data->stats->equipment->mode == EquipMode::Add->value) {
		$_SESSION['stats'][EQUIPMENT] = array_merge($_SESSION['stats'][$QUIPMENT], Łdata->stats->equipment->content);
	} else if ($data->stats->equipment->mode == EquipMode::Remove->value) {
		$_SESSION['stats'][EQUIPMENT] = array_diff($_SESSION['stats'][EQUIPMENT], $data->stats->equipment->content);
	} else if ($data->stats->equipment->mode == EquipMode::Empty->value) {
		$_SESSION['stats'][EQUIPMENT] = array();
	}
	
	header('Location: play.php');
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

// Luck
if ($_SESSION['node'] == 'luck') {
	echo "<div class=\"text\">\n";
	echo "Výsledek hodu: " . $_SESSION['throw'] . "\n";
	echo "</div>\n\n";
	
	echo "<div class=\"text\">\n";
	echo ($_SESSION['luck'] ? "Máš štěstí." : "Máš smůlu.") . "\n";
	echo "</div>\n\n";
}

// Fight skill
if ($_SESSION['node'] == 'fight_skill') {
	echo "<div class=\"text\">\n";
	echo "Výsledek hodu: " . $_SESSION['throw'] . "\n";
	echo "</div>\n\n";
	
	echo "<div class=\"text\">\n";
	echo ($_SESSION['fight_skill'] ? "Zvládl jsi zareagovat." : "Nezvládl jsi zareagovat.") . "\n";
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
define('MARK', 'MARK');
define('MARK_TURN', 'MARK_TURN');
define('OPTION_MARKS', array(
	'MARK_LUCK' => '<i>Zkusit štěstí</i>',
	'MARK_FIGHT_SKILL' => '<i>Otestovat své schopnosti</i>',
	'MARK_SHOWDOWN' => '<i>Poměřit síly</i>',
	'MARK_CONTINUE' => 'Pokračovat',
	'MARK_NEXT' => '<i>Další stránka</i>'
	));

echo "<div class=\"link-block\">\n";

foreach($data->options as $i => $option) {
	if (str_starts_with($option->description, MARK)) {
		if ($option->description == MARK_TURN) {
			$description = "Otočit na <b>" . $option->node . "</b>";
		} else {
			$description = OPTION_MARKS[$option->description];
		}
	} else {
		$description = $option->description;
	}
	
	echo "<div class=\"link\">\n";
	echo "<a href=\"play.php?action=".($i + 1)."&node=".$_SESSION['node']."\">".$description."</a>\n";
	echo "</div>\n\n";
}

echo "</div>\n\n";

// Note
foreach ($data->notes as $note) {
	echo "<div class=\"note\">\n";
	echo $note."\n";
	echo "</div>\n\n";
}

// HUD
if ($data->show_hud) {
	echo "<div class=\"stat-block\">\n";
	
	// Combat skill
	echo "<div class=\"stat\">\n";
	$csm = $_SESSION['stats'][FIGHT_SKILL][MAX];
	$csa = $_SESSION['stats'][FIGHT_SKILL][ACT];
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
	$la = $_SESSION['stats'][LUCK][ACT];
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
	echo "<div class=\"stat\">\n";
	$wheels = $_SESSION['stats'][WHEELS][ACT];
	echo 'REZERVNÍ KOLA: ';
	for ($i = 0; $i < $wheels; $i++) {
		echo '<img class="wheel" src="images/wheel.png">';
	}
	echo "\n</div>\n\n";

	// Fuel
	echo "<div class=\"stat\">\n";
	$fuel = $_SESSION['stats'][FUEL][ACT];
	echo 'PALIVO: ';
	for ($i = 0; $i < $fuel; $i++) {
		echo '<img class="canister" src="images/canister.png">';
	}
	echo "\n</div>\n";
	
	echo "</div>\n\n";
	
	echo "<div class=\"stat-block\">\n";

	// Equipment
	echo "<div class=\"stat\">\n";
	echo 'VYBAVENÍ: ';
	$equipment = $_SESSION['stats'][EQUIPMENT];

	foreach ($equipment as $i => $item) {
		if ($item[0] == '_') {
			continue;
		}
	
		if ($i > 0) {
			echo ', ';
		}
	
		echo $item;
	}

	if (count($equipment) == 0) {
		echo 'žádné';
	}
	
	echo "\n</div>\n";
	echo "</div>\n\n";
}

// Helper functions
function update_stat(&$stat, $data, $throws=0, $shift=0) {
	if ($data->mode == StatMode::Initialize->value) {
		$value = 0;
		for ($i = 0; $i < $throws; $i++) {
			$value += rand(1, 6);
		}
		$stat[ACT] = $stat[MAX] = $value + $shift;
	} else if ($data->mode == StatMode::Set->value) {
		$stat[ACT] = $data->value;
	} else if ($data->mode == StatMode::Change->value) {
		if ($data->value > 0) {
			$stat[ACT] = min($stat[MAX], $stat[ACT] + $data->value);
		} else {
			$stat[ACT] = max(0, $stat[ACT] + $data->value);
		}
	}
}

include 'feedback.php';
?>
