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
define("INITIALIZE", 1);
define("SET", 2);
define("CHANGE", 3);

// Stats
define("COMBAT_SKILL", 1);
define("STAMINA", 2);
define("LUCK", 1);
define("FIREPOWER", 3);
define("ARMOUR", 4);
define("ROCKETS", 5);
define("NAILS", 6);
define("OIL", 7);

// Type of stat
define("MAX", 1);
define("ACT", 2);

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
	
	define("INIT_VALUES", array(
		[1, 6], // Combat skill
		[2, 24], // Stamina
		[1, 6], // Luck
		[1, 6], // Firepower
		[2, 24], // Armour
		[0, 4], // Rockets
		[0, 3], // Nails
		[0, 2], // Oil
	));

	for ($i = 0; $i < count($data->stats); $i++) {
		update_stat($_SESSION['stats'][$i], $data->stats[$i], INIT_VALUES[$i]);
	}
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
	echo "</div>\n";
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

// HUD
echo $data->show_hud;
if ($data->show_hud) {
	echo "<div class=\"stats\">\n";
	
	// Combat skill
	for ($i = 0; $i < count($_SESSION['stats']); $i++) {
		echo 'UMĚNÍ BOJE: ' . $_SESSION['stats'][COMBAT_SKILL][ACT] . '/' . $umeni_boje_max . "<br>\n";
	}
	
	echo "</div>\n";
}

// Helper functions
function update_stat(&$stat, $data, $init_values) {
	if ($data->mode == INITIALIZE) {
		$value = 0;
		for ($i = 0; $i < $init_values[0]; $i++) {
			$value += rand(1, 6);
		}
		$stat[ACT] = $stat[MAX] = $value + $init_values[1];
	} else if ($data->mode == SET) {
		$stat[$ACT] = $data->value;
	} else if ($data->mode == CHANGE) {
		if ($data->value > 0) {
			$stat[$ACT] = min($stat[$MAX], $stat[$ACT] + $data->value);
		} else {
			$stat[$ACT] = max(0, $stat[$ACT] + $data->value);
		}
	}
}

include 'feedback.php';
?>
