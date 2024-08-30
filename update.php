<!-- Remove from release -->

<?php
$path = 'C:\xampp\htdocs\Fantom-ulice-2\content';

foreach (scandir($path) as $file) {
	if (pathinfo($file, PATHINFO_EXTENSION) == 'json') {
		$filename = $path . '\\' . $file;
		
		// Decode
		$file_content = file_get_contents($filename);
		$sanitized = str_replace(["\r\n", "\t"], '', $file_content);
		try {
			$data = json_decode($sanitized, null, 512, JSON_THROW_ON_ERROR);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
		// Update
		add_content($data);
		abc($data->stats->fight_skill->mode);
		abc($data->stats->stamina->mode);
		abc($data->stats->luck->mode);
		abc($data->stats->med_kit->mode);
		abc($data->stats->credits->mode);
		abc($data->stats->firepower->mode);
		abc($data->stats->armour->mode);
		abc($data->stats->rockets->mode);
		abc($data->stats->nails->mode);
		abc($data->stats->oil->mode);
		abc($data->stats->wheels->mode);
		abc($data->stats->fuel->mode);
		// Encode
		$encoded = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		echo $encoded;
		file_put_contents($filename, $encoded);
	}
}

function abc(&$value) {
	if ($value == 'modify') {
		$value = 'add';
	}
}

function add_content(&$object) {
	// Note
	if (! property_exists($object, 'notes')) {
		$object->notes = array();
	}
	
	// Luck
	if (! property_exists($object, 'options_luck')) {
		$object->options_luck = array();
	}
	
	// Fight skill
	if (! property_exists($object, 'options_fight_skill')) {
		$object->options_fight_skill = array();
	}
	
	// Show HUD
	if (! property_exists($object, 'show_hud')) {
		$object->show_hud = false;
	}
	
	// Stats
	$stat = new stdClass();
	$stat->mode = 3; /* CHANGE */
	$stat->value = 0;
	
	$stats = new stdClass();
	$stats->combat_skill = $stat;
	$stats->stamina = $stat;
	$stats->luck = $stat;
	$stats->med_kit = $stat;
	$stats->credits = $stat;
	$stats->firepower = $stat;
	$stats->armour = $stat;
	$stats->rockets = $stat;
	$stats->nails = $stat;
	$stats->oil = $stat;
	$stats->wheels = $stat;
	$stats->fuel = $stat;
	
	if (! property_exists($object, 'stats')) {
		$object->stats = $stats;
	}
	
	if (! property_exists($object->stats, 'wheels')) {
		$object->stats->wheels = $stat;
	}
	
	if (! property_exists($object->stats, 'fuel')) {
		$object->stats->fuel = $stat;
	}
	
	if (! property_exists($object->stats, 'equipment')) {
		$object->stats->equipment = new stdClass();
		$object->stats->equipment->mode = 1;
		$object->stats->equipment->content = array();
	}
}
?>
