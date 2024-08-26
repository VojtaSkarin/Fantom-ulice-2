<html>
<head>
<title>
Fantom ulice
</title>

<?php
include 'header-table.php';

session_start();

//include 'content/save-load-table.php';

include 'content/map.php';
include 'content/fight-functions.php';

if (empty($_SESSION['stav'])) {
	$_SESSION['stav'] = 'new-game';
}

if (array_key_exists('action', $_GET)) {
	$action = $_GET['action'];
	
	if ($action == 'new-game') {
		$_SESSION['stav'] = $action;
		
	} else if ($_SESSION['smrt']) {
		// nedělej nic
		
	} else if ($action == 'med-kit') {
		if (! in_array($_SESSION['stav'], $boj) &&
			$_SESSION['medkit'] > 0 &&
			$_SESSION['stamina_ted'] < $_SESSION['stamina_max'] &&
			$_SESSION['stav'] != 'fight' &&
			$_SESSION['stav'] != 'fight-round-result' &&
			$_SESSION['stav'] != 'race-round-result') {
				$_SESSION['medkit']--;
				$_SESSION['stamina_ted'] = min($_SESSION['stamina_ted'] + 4, $_SESSION['stamina_max']);
		}
	
	} else if ($action == 'fortune') {
		if (in_array($_SESSION['stav'], $zkouseni_stesti)) {
			$_SESSION['hod'] = $hod = rand(1, 6) + rand(1, 6);		
			$_SESSION['vysledek'] = $hod <= $_SESSION['stesti_ted'];		
			$_SESSION['stesti_ted'] = max($_SESSION['stesti_ted'] - 1, 0);
			
			$_SESSION['dalsi-stav'] = $mapa[$_SESSION['stav'] . '-stesti'][1 - (int)$_SESSION['vysledek']];
			$_SESSION['stav'] = 'fortune';
		}
		
	} else if ($action == 'fortune-noloss') {
		if (in_array($_SESSION['stav'], $zkouseni_stesti_bez)) {
			$_SESSION['hod'] = $hod = rand(1, 6) + rand(1, 6);
			$_SESSION['vysledek'] = $hod <= $_SESSION['stesti_ted'];
			
			$_SESSION['dalsi-stav'] = $mapa[$_SESSION['stav'] . '-stesti-bez'][1 - (int) $_SESSION['vysledek']];
			$_SESSION['stav'] = 'fortune';
		}
	
	} else if ($action == 'fight-skill') {
		if (in_array($_SESSION['stav'], $zkouseni_umeni_boje)) {
			$_SESSION['hod'] = $hod = rand(1, 6) + rand(1, 6);
			$_SESSION['vysledek'] = $hod <= $_SESSION['umeni_boje_ted'];
			
			$_SESSION['dalsi-stav'] = $mapa[$_SESSION['stav'] . '-um-boje'][1 - (int) $_SESSION['vysledek']];
			$_SESSION['stav'] = 'fight-skill';
		}
	
	} else if ($action == 'showdown') {
		if (in_array($_SESSION['stav'], $kdo_z_koho)) {
			$_SESSION['vysledek'] = $_SESSION['utocne_cislo_ja'] >= $_SESSION['utocne_cislo_protivnik'];
			
			$_SESSION['dalsi-stav'] = $mapa[$_SESSION['stav'] . '-kdo-z-koho'][1 - (int) $_SESSION['vysledek']];
			$_SESSION['stav'] = 'showdown';
		}
		
	} else if ($action == 'condition') {
		if (in_array($_SESSION['stav'], $zkouseni_podminky)) {
			$_SESSION['stav'] = $mapa[$_SESSION['stav'] . '-podminka'][1 - (int) $_SESSION['podminka']];
		}
		
	} else if ($action == 'chance') {
		if (in_array($_SESSION['stav'], $zkouseni_nahody)) {
			$_SESSION['hod'] = $hod = rand(1, 6);
			$_SESSION['vysledek'] = $hod <= $_SESSION['hranice'];
			
			$_SESSION['dalsi-stav'] = $mapa[$_SESSION['stav'] . '-nahoda'][1 - (int) $_SESSION['vysledek']];
			$_SESSION['stav'] = 'chance';
		}
		
	} else if ($_SESSION['stav'] == 'fight') {
		$vstup = intval($_GET['action']) - 1;
		$cil = intdiv($vstup, 2);
		$typ_utoku = $vstup % 2 == 0;
		
		if (ja_ziju()) {
			if (! libovolny_nepritel_zije() ||
				($_SESSION['kolo_konec'] != 0 &&
				 $_SESSION['kolo'] > $_SESSION['kolo_konec'])) {
				if ($cil == 0) {
					$_SESSION['stav'] = $mapa[$_SESSION['minuly-stav'] . '-boj'][0];
					
					if ($_SESSION['pocet_zasahu'] > 1 &&
						$_SESSION['typ_souboje'] == Souboj::Strelba)
					{
						$_SESSION['umeni_boje_ted'] = max($_SESSION['umeni_boje_ted'] - 1, 0);
					}
				}
				
			} else {
				if (array_key_exists($cil, $_SESSION['nepritel']) &&
					jeden_nepritel_zije($_SESSION['nepritel'][$cil]) &&
					($_SESSION['utok'] == Utok::Zaroven ||
					 $cil == $_SESSION['pristi_cil']) &&
					($typ_utoku ||
					 ($_SESSION['typ_souboje'] == Souboj::Vozidla &&
					  $_SESSION['rakety'] > 0))) {
					
					$_SESSION['cil'] = $_SESSION['pristi_cil'];
					
					do {
						$_SESSION['pristi_cil'] = ($_SESSION['pristi_cil'] + 1) % count($_SESSION['nepritel']);
					} while (! jeden_nepritel_zije($_SESSION['nepritel'][$_SESSION['pristi_cil']]));
						
					for ($i = 0; $i < count($_SESSION['nepritel']); $i++) {
						$nepritel = &$_SESSION['nepritel'][$i];
						
						if (! jeden_nepritel_zije($nepritel) ||
							($_SESSION['utok'] == Utok::Stridave &&
							 $i != $_SESSION['cil'])) {
							$nepritel['poskozeni'] = 0;
							$nepritel['zpusob_smrti'] = true;
							continue;
						}
						
						if (! $typ_utoku) {
							$nepritel['vydrz_ted'] = 0;
							$nepritel['poskozeni'] = 0;
							$nepritel['zpusob_smrti'] = false;
							$_SESSION['rakety']--;
							continue;
						}
						
						$utocne_cislo_protivnik = rand(1, 6) + rand(1, 6) + $nepritel['utocna_sila'];
						$utocne_cislo_ja = rand(1, 6) + rand(1, 6) + $_SESSION['utocna_sila_ja_zmena'];
						
						if (array_key_exists($_SESSION['kolo'], $_SESSION['utocna_sila_ja_zmena_kola'])) {
							$utocne_cislo_ja += $_SESSION['utocna_sila_ja_zmena_kola'][$_SESSION['kolo']];
						}
						
						if (in_array($_SESSION['typ_souboje'], $souboje_vozidel)) {
							$utocne_cislo_ja += $_SESSION['palebna_sila_ted'];
						} else {
							$utocne_cislo_ja += $_SESSION['umeni_boje_ted'];
							
							if ($_SESSION['typ_souboje'] == Souboj::Strelba &&
								in_array('magnum', $_SESSION['vybaveni']))
							{
								$utocne_cislo_ja += 1;
							}
						}
						$nepritel['utocne_cislo_ja'] = $utocne_cislo_ja;
						$nepritel['utocne_cislo_protivnik'] = $utocne_cislo_protivnik;
						
						if ($_SESSION['typ_souboje'] == Souboj::Tvari_v_tvar) {
							if ($utocne_cislo_ja > $utocne_cislo_protivnik) {
								$poskozeni = $_SESSION['zbran_ja'];
							} else if ($utocne_cislo_ja < $utocne_cislo_protivnik) {
								$poskozeni = $nepritel['zbran'];
							} else {
								$poskozeni = 0;
							}
							
						} else if ($_SESSION['typ_souboje'] == Souboj::Srazky) {
							$poskozeni = 2;
							
						} else {
							$poskozeni = rand(1, 6);
						}
						
						if ($utocne_cislo_ja > $utocne_cislo_protivnik) {
							if ($i == $cil) {
								$nepritel['vydrz_ted'] = max($nepritel['vydrz_ted'] - $poskozeni, 0);
								$nepritel['poskozeni'] = $poskozeni;
							} else {
								$nepritel['poskozeni'] = 0;
								$nepritel['byl_cil'] = false;
							}
							
						} else if ($utocne_cislo_ja < $utocne_cislo_protivnik) {
							if (in_array($_SESSION['typ_souboje'], $souboje_vozidel)) {
								$_SESSION['pancir_ted'] = max($_SESSION['pancir_ted'] - $poskozeni, 0);
								
							} else {
								$_SESSION['stamina_ted'] = max($_SESSION['stamina_ted'] - $poskozeni, 0);
							}
							
							$_SESSION['pocet_zasahu'] += 1;
							$nepritel['poskozeni'] = -$poskozeni;
							
						} else {
							$nepritel['poskozeni'] = 0;
							$nepritel['byl_cil'] = $i == $cil;
						}
					}
					
					
					$_SESSION['kolo'] += 1;
					
					$_SESSION['stav'] = 'fight-round-result';
				}
			}
		} else {
			if ($_SESSION['typ_souboje'] == Souboj::Tvari_v_tvar &&
				array_key_exists(1, $mapa[$_SESSION['minuly-stav'] . '-boj'])) {
				$_SESSION['stav'] = $mapa[$_SESSION['minuly-stav'] . '-boj'][1];
			}
		}
		
	} else if ($_SESSION['stav'] == 'race') {
		$cil = intval($_GET['action']) - 1;
		
		if ($cil == 0) {
			if ($_SESSION['postup_ty'] >= 24 ||
				$_SESSION['postup_protivnik'] >= 24)
			{
				$_SESSION['stav'] = $mapa[$_SESSION['minuly-stav'] . '-zavod'][1 - (int) ($_SESSION['postup_ty'] >= 24)];
				
			} else {
				$hod = rand(1, 6);
				
				if ($_SESSION['pristi_cil'] == 1 &&
					in_array('turbokompresor', $_SESSION['vybaveni']))
				{
					$hod += 1;
				}
				
				if ($_SESSION['pristi_cil'] == 0) {
					$_SESSION['postup_protivnik'] += $hod;
					
				} else {
					$_SESSION['postup_ty'] += $hod;
				}
				
				$_SESSION['postup'] = $hod;
				
				$_SESSION['pristi_cil'] = 1 - $_SESSION['pristi_cil'];
				$_SESSION['kolo'] += 1;
				$_SESSION['stav'] = 'race-round-result';
			}
		}
		
	} else {
		$stav = $mapa[$_SESSION['stav']];
		$offset = intval($action) - 1;
		
		$akce = ['fortune', 'chance', 'fight-skill', 'showdown'];
		
		if (in_array($_SESSION['stav'], $akce) && $offset == 0) {
			$_SESSION['stav'] = $_SESSION['dalsi-stav'];
			
		} else if (array_key_exists($offset, $stav)) {
			if (! array_key_exists($_SESSION['stav'], $podminky) ||
				! array_key_exists($offset, $podminky[$_SESSION['stav']]) ||
				$podminky[$_SESSION['stav']][$offset]()) {
					if ($_SESSION['stav'] != 'fight' &&
						$_SESSION['stav'] != 'fight-round-result' &&
						$_SESSION['stav'] != 'race-round-result')
					{
						$_SESSION['minuly-stav'] = $_SESSION['stav'];
					}
					$_SESSION['stav'] = $stav[$offset];
			}
		}
	}

	header('Location: game.php');
	
} else {
	include 'content/' . $_SESSION['stav'] . '.php';
}

include 'feedback.php';
?>