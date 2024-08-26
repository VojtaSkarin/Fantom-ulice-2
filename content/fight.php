<?php
function pocet_kol($pocet) {
	if ($pocet == 1) {
		return 'kolo';
	} else if ($pocet >= 2 && $pocet <= 4) {
		return 'kola';
	}
	return 'kol';
}

echo "<div class=\"title-main\">\n";
echo $_SESSION['kolo'] . ". kolo\n";
echo "</div>\n";

include 'enemy-table.php';

if (ja_ziju()) {
	if (libovolny_nepritel_zije() &&
		($_SESSION['kolo_konec'] == 0 ||
		 $_SESSION['kolo'] <= $_SESSION['kolo_konec'])) {
		echo "<div class=\"text\">\n";
		echo "Čím a na koho chceš zaútočit?\n";
		echo "</div>\n";
		
		echo "<table class=\"target-choice\">\n";
		echo "<tr>\n";
		
		if ($_SESSION['typ_souboje'] == Souboj::Vozidla) {
			echo "<td>Pálit z kulometu</td>\n";
			echo "<td>Vystřelit raketu</td>\n";
			
		} else if ($_SESSION['typ_souboje'] == Souboj::Tvari_v_tvar) {
			echo "<td>Zaútočit " . $_SESSION['zbran_ja_jmeno_7'] . "</td>\n";
			
		} else if ($_SESSION['typ_souboje'] == Souboj::Strelba) {
			echo "<td>Vystřelit</td>\n";
		}
		
		echo "</tr>\n";
		
		for ($i = 0; $i < count($_SESSION['nepritel']); $i++) {
			$nepritel = $_SESSION['nepritel'][$i];
			
			echo "<tr>\n";
			
			if (jeden_nepritel_zije($nepritel) &&
				($_SESSION['utok'] != Utok::Stridave ||
				 $_SESSION['pristi_cil'] == $i))
			{
				echo "<td>\n";
				echo "<div class=\"link\">\n";
				echo "<a href=\"game.php?action=" . (2 * $i + 1) . "\">" . $nepritel['jmeno'][0] . "</a>\n";
				echo "</div>\n";
				echo "</td>\n";
				
				if ($_SESSION['typ_souboje'] == Souboj::Vozidla) {
					echo "<td>\n";
					echo "<div class=\"link\">\n";
					
					if ($_SESSION['rakety'] > 0) {
						echo "<a href=\"game.php?action=" . (2 * $i + 2) . "\">" . $nepritel['jmeno'][0] . "</a>\n";
					}
					
					echo "</div>\n";
					echo "</td>\n";
				}
			}
			
			echo "</tr>\n";
		}
		
		echo "</table>\n";
		
	} else {
		if ($_SESSION['kolo_konec'] != 0 &&
			$_SESSION['kolo'] > $_SESSION['kolo_konec'])
		{
			echo "<div class=\"text\">\n";
			echo 'Přežil jsi ' . $_SESSION['kolo_konec'] . ' ' . pocet_kol($_SESSION['kolo_konec']) . " souboje.\n";
			echo "</div>\n";
			
		} else if ($_SESSION['typ_souboje'] == Souboj::Tvari_v_tvar) {
			echo "<div class=\"text\">\n";
			echo "Porazil jsi všechny nepřátele.\n";
			echo "</div>\n";
			
		} else if ($_SESSION['typ_souboje'] == Souboj::Strelba) {
			echo "<div class=\"text\">\n";
			echo "Zabil jsi všechny nepřátele.\n";
			echo "</div>\n";
			
		} else {
			echo "<div class=\"text\">\n";
			echo "Zničil jsi všechna nepřátelská vozidla.\n";
			echo "</div>\n";
		}
		
		echo "<div class=\"link\">\n";
		echo "<a href=\"game.php?action=1\">Pokračovat</a>\n";
		echo "</div>\n";
	}
} else {
	if ($_SESSION['typ_souboje'] == Souboj::Tvari_v_tvar) {
		echo "<div class=\"text\">\n";
		echo "Byl jsi omráčen.\n";
		echo "</div>\n";
		
		if (array_key_exists(1, $mapa[$_SESSION['minuly-stav'] . '-boj'])) {
			echo "<div class=\"link\">\n";
			echo "<a href=\"game.php?action=1\">Pokračovat</a>\n";
			echo "</div>\n";
			
		} else {
			include 'death-link.php';
		}
		
	} else if ($_SESSION['typ_souboje'] == Souboj::Strelba) {
		echo "<div class=\"text\">\n";
		echo "Byl jsi zabit.\n";
		echo "</div>\n";
	
		include 'death-link.php';
		
	} else {
		echo "<div class=\"text\">\n";
		echo "Interceptor byl zničen.\n";
		echo "</div>\n";
	
		include 'death-link.php';
	}
}

include 'post.php';
?>