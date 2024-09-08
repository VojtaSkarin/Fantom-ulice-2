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
define('NOTHING', 'nothing');
define('INITIALIZE', 'initialize');
define('SET', 'set');
define('ADD', 'add');
define('SUBSTRACT', 'substract');
define('REMOVE', 'remove');

// Stats
define('FIGHT_SKILL', 'fight_skill');
define('STAMINA', 'stamina');
define('LUCK', 'luck');
define('MED_KIT', 'med_kit');
define('CREDITS', 'credits');
define('FIREPOWER', 'firepower');
define('ARMOUR', 'armour');
define('ROCKETS', 'rockets');
define('NAILS', 'nails');
define('OIL', 'oil');
define('WHEELS', 'wheels');
define('FUEL', 'fuel');
define('EQUIPMENT', 'equipment');

define('STATS', array(FIGHT_SKILL, STAMINA, LUCK, MED_KIT, CREDITS, FIREPOWER, ARMOUR, ROCKETS, NAILS, OIL));

define('BOOL_TO_INDEX', array(true => 0, false => 1));

// Type of stat
define('MAX', 'maximum');
define('ACT', 'actual');

// Type of value
define('THROWS', 0);
define('SHIFT', 1);

define('BOUNDED', true);
define('UNBOUNDED', false);


define('IS_BOUNDED', array(
	FIGHT_SKILL => BOUNDED,
	STAMINA => BOUNDED,
	LUCK => BOUNDED,
	MED_KIT => UNBOUNDED,
	CREDITS => UNBOUNDED,
	FIREPOWER => BOUNDED,
	ARMOUR => BOUNDED,
	ROCKETS => UNBOUNDED,
	NAILS => UNBOUNDED,
	OIL => UNBOUNDED,
	WHEELS => UNBOUNDED,
	FUEL => UNBOUNDED
));

define('KILL', 'kill');
define('REVIVE', 'revive');

// Others
define("ITEMS", array(
	"HOSE" => "plastiková hadice",
));

// Marks
define('MONTHS', array(
	array('leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'září', 'říjen', 'listopad', 'prosinec'),
	array('ledna', 'února', 'března', 'dubna', 'května', 'června', 'července', 'srpna', 'září', 'října', 'listopadu', 'prosince')));
	
define('MARK', 'MARK');
define('MARK_TURN', 'MARK_TURN');
define('MARKS', array(
	'MARK_LUCK' => '<i>Zkusit štěstí</i>',
	'MARK_FIGHT_SKILL' => '<i>Otestovat své schopnosti</i>',
	'MARK_SHOWDOWN' => '<i>Poměřit síly</i>',
	'MARK_CONTINUE' => 'Pokračovat',
	'MARK_NEXT' => '<i>Další stránka</i>',
	'MARK_DATE_1' => localized_date(1),
	'MARK_DATE_2' => localized_date(2)
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
		
	} else if ($action >= 0 && $action < count($_SESSION['options']) && $_SESSION['alive'] && conditions_met($_SESSION['options'][$action])) {
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
if ($data != null) {
	$_SESSION['options'] = $data->options;
	
	if (! in_array($_SESSION['node'], CHECKS)) {
		$_SESSION['options_luck'] = $data->options_luck;
		$_SESSION['options_fight_skill'] = $data->options_fight_skill;
	}
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
	foreach ($data->stats as $stat) {
		update_stat($stat);
		
		if (! check_alive() && $_SESSION['node'] != 'intro') {
			break;
		}
	}

	// Equipment
	if ($data->equipment->mode == INITIALIZE) {
		$_SESSION[EQUIPMENT] = array();
	} else if ($data->equipment->mode == ADD) {
		$_SESSION[EQUIPMENT] = array_merge($_SESSION[$QUIPMENT], $data->equipment->content);
	} else if ($data->equipment->mode == REMOVE) {
		$_SESSION['stats'][EQUIPMENT] = array_diff($_SESSION[EQUIPMENT], $data->equipment->content);
	}
	
	// Check death condition
	check_alive();
	
	if ($data->life == KILL) {
		$_SESSION['alive'] = false;
	} else if ($data->life == REVIVE) {
		$_SESSION['alive'] = true;
	}
	
	header('Location: play.php');
}

/* Render page*/
// Header
if (! empty($data->title_main)) {
	echo "<div class=\"title-main\">\n";
	echo $data->title_main."\n";
	echo "</div>\n\n";
}

foreach ($data->title_middle as $title) {
	echo "<div class=\"title-middle\">\n";
	echo replace_marks($title)."\n";
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
// Always
$paragraphs = array_merge($data->story->always);

if (! empty($data->story->survived) && ! empty($data->story->died)) {
	if ($_SESSION['alive']) {
		$paragraphs[count($paragraphs) - 1] .= " " . $data->story->survived[0];
	$paragraphs = array_merge($paragraphs, array_slice($data->story->survived, 1));
	} else {
		$paragraphs = array_merge($paragraphs, $data->story->died);
	}
}

foreach ($paragraphs as $paragraph) {
	echo "<div class=\"text\">\n";
	echo replace_marks($paragraph)."\n";
	echo "</div>\n\n";
}	

// Image
if ($data->image != null) {
	echo "<img class=\"fullsize\" src=\"images/".$data->image."\">\n\n";
}

// Option links
echo "<div class=\"link-block\">\n";

if ($_SESSION['alive']) {
	foreach($data->options as $i => $option) {
		if (! conditions_met($option)) {
			continue;
		}
		
		$description = replace_marks($option->description);
		$description = str_replace('MARK_TURN', "Otočit na <b>" . $option->node . "</b>", $description);
		
		echo "<div class=\"link\">\n";
		echo "<a href=\"play.php?action=".($i + 1)."&node=".$_SESSION['node']."\">".$description."</a>\n";
		echo "</div>\n\n";
	}
} else {
	echo "<div class=\"link\">\n";
	echo "<a href=\"index.php\">Přijmout porážku&nbsp;a vrátit se na úvodní stranu</a>\n";
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
	
	if ($rockets < 1) {
		echo "žádné";
	}
	
	echo "\n</div>\n\n";

	// Nails
	echo "<div class=\"stat\">\n";
	$nails = $_SESSION['stats'][NAILS][ACT];
	echo 'ŽELEZNÉ BODCE: ';
	for ($i = 0; $i < $nails; $i++) {
		echo '<img class="nails" src="images/nails.png">';
	}
	
	if ($nails < 1) {
		echo "žádné";
	}
	
	echo "\n</div>\n\n";

	// Oil
	echo "<div class=\"stat\">\n";
	$oil = $_SESSION['stats'][OIL][ACT];
	echo 'OLEJ: ';
	for ($i = 0; $i < $oil; $i++) {
		echo '<img class="oil" src="images/oil.png">';
	}
	
	if ($oil < 1) {
		echo "žádný";
	}
	
	echo "\n</div>\n\n";

	// Wheels
	echo "<div class=\"stat\">\n";
	$wheels = $_SESSION['stats'][WHEELS][ACT];
	echo 'REZERVNÍ KOLA: ';
	for ($i = 0; $i < $wheels; $i++) {
		echo '<img class="wheel" src="images/wheel.png">';
	}
	
	if ($wheels < 1) {
		echo "žádná";
	}
	
	echo "\n</div>\n\n";

	// Fuel
	echo "<div class=\"stat\">\n";
	$fuel = $_SESSION['stats'][FUEL][ACT];
	echo 'PALIVO: ';
	for ($i = 0; $i < $fuel; $i++) {
		echo '<img class="canister" src="images/canister.png">';
	}
	
	if ($fuel < 1) {
		echo "žádné";
	}
	
	echo "\n</div>\n";
	
	echo "</div>\n\n";
	
	echo "<div class=\"stat-block\">\n";

	// Equipment
	echo "<div class=\"stat\">\n";
	echo 'VYBAVENÍ: ';
	$equipment = $_SESSION[EQUIPMENT];

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
function update_stat($change) {
	$value = 0;
	for ($i = 0; $i < $change->value[THROWS]; $i++) {
		$value += rand(1, 6);
	}
	$value += $change->value[SHIFT];

	$stat = &$_SESSION['stats'][$change->stat];
	
	if ($change->mode == INITIALIZE) {
		$stat[MAX] = $stat[ACT] = $value;
	} else if ($change->mode == SET) {
		$stat[ACT] = $value;
	} else if ($change->mode == ADD) {
		$stat[ACT] += $value;
		if ($stat[ACT] < 0) {
			$stat[ACT] = 0;
		} else if (IS_BOUNDED[$change->stat] && $stat[ACT] > $stat[MAX]) {
			$stat[ACT] = $stat[MAX];
		}
	} else if ($change->mode == SUBSTRACT) {
		$stat[ACT] -= $value;
		if ($stat[ACT] < 0) {
			$stat[ACT] = 0;
		} else if (IS_BOUNDED[$change->stat] && $stat[ACT] > $stat[MAX]) {
			$stat[ACT] = $stat[MAX];
		}
	}

}

function localized_date($case) {
	$day = date('j');
	$month = date('n');
	$year = date('Y');
	return $day . '. ' . MONTHS[$case - 1][$month - 1] . ' ' . $year;
}

function replace_marks($string) {
	return str_replace(array_keys(MARKS), array_values(MARKS), $string);
}

function conditions_met($option) {
	$met = true;
	
	foreach ($option->conditions as $condition) {
		if ($condition->type == MED_KIT) {
			$met = $met && $_SESSION['stats'][MED_KIT][ACT] >= $condition->value;
		}
	}
	
	return $met;
}

function check_alive() {
return $_SESSION['alive'] = $_SESSION['stats'][STAMINA][ACT] > 0 && $_SESSION['stats'][ARMOUR][ACT] > 0;
}

include 'feedback.php';
?>
