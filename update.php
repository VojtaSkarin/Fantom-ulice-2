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

		// Encode
		$encoded = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		echo $encoded;
		file_put_contents($filename, $encoded);
	}
}

function add_content(&$object) {
	// Note
	if (! property_exists($object, 'notes')) {
		$object->notes = array();
	}
	
	if (! property_exists($object, 'image')) {
		$object->image = null;
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
	
	// Kill or revive
	if (! property_exists($object, 'life')) {
		$object->life = 'nothing';
	}
	
	if (! property_exists($object, 'stats')) {
		$object->stats = array();
	}
	
	if (! property_exists($object, 'equipment')) {
		$object->equipment = new stdClass();
		$object->equipment->mode = "nothing";
		$object->equipment->content = array();
	}
}
?>
